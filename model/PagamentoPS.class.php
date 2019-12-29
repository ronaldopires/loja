<?php


class PagamentoPS extends Conexao{
    
               
        private
                /**** @var string: armazena objeto da transação */
                $transaction,
                 /**** @var string:forma de pagamento */
                $forma_pag,
                /**** @var string: trata o status do pagamento */
                $status,
                /**** @var string URL do wb service para iniciar um checkout*/
                $psWS,
                /****$var string  token do PS***/
                $token,
                /**** para armazenar retorno temporário *****/
                $xml;
                
        public 
                /**** @var string URL para fechar o pedido */
                $psURL,
                /**** @var string URL do javascript do lighbox do pagseguro*/
                $psURL_Script,
                /**** @var string: URL das notificações  */
                $psURL_Notificacao,
                /**** @var string: retorno do COD checkout  */
                $psCod,
                /***array com davdos da transação ****/
                $info = array();
        
        /**
         * Chama o contrutor pai e seta cada URL para o ambiente escolhido 
         */
        function __construct() {
            parent::__construct();
            
            /** verifico se produção  ou sandbox * */
            switch (Config::PS_AMBIENTE):
                
                // ambiente de testes
                case 'sandbox':
                    
                   $this->psWS         = 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout';
                   $this->psURL        = 'https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html';
                   $this->psURL_Script = 'https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js'; 
                   $this->psURL_Notificacao = 'https://ws.sandbox.pagseguro.uol.com.br/v3/transactions/';
                   $this->token        = Config::PS_TOKEN_SBX;
                   
                   break;
               // ambiente de produção real
                case 'production':
                    
                   $this->psWS         = 'https://ws.pagseguro.uol.com.br/v2/checkout';
                   $this->psURL        = 'https://pagseguro.uol.com.br/v2/checkout/payment.html';
                   $this->psURL_Script = 'https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js'; 
                   $this->psURL_Notificacao = 'https://ws.pagseguro.uol.com.br/v3/transactions/';
                   $this->token        = Config::PS_TOKEN;
                   
                   break;
            endswitch;
            
            
        }


     /** * requisicao de pagamento  * @param array $cliente  * @param array $pedido  * @param array $produtos   */        
    public function Pagamento($cliente = array(), $pedido = array(), $produtos = array()) {
     
                
        $dados['email']    = Config::PS_EMAIL;
        $dados['token']    = $this->token;
        $dados['currency']   = 'BRL';               
        $dados['reference']    = $pedido['ref']; // referencia pedido 
        $dados['redirectURL']    = Rotas::pag_PedidoRetorno();
        $dados['notificationURL'] = Rotas::pag_PedidoRetorno();          
        $dados['senderName']    = $cliente['cli_nome'] .' ' . $cliente['cli_sobrenome'];
        $dados['senderAreaCode']  = $cliente['cli_ddd_celular'];
        $dados['senderPhone']    = $cliente['cli_celular'];
        $dados['senderEmail']    = $cliente['cli_email'];
        $dados['senderCPF']    = $cliente['cli_cpf'];        
        $dados['shippingAddressStreet']   = $cliente['cli_endereco'];
        $dados['shippingAddressNumber']   = $cliente['cli_numero'];
        //$dados['shippingAddressComplement'] = '';
        $dados['shippingAddressDistrict'] = $cliente['cli_bairro'];
        $dados['shippingAddressPostalCode']  = $cliente['cli_cep'];
        $dados['shippingAddressCity']    = $cliente['cli_cidade'];
        $dados['shippingAddressState']    = strtoupper($cliente['cli_uf']); 
        $dados['shippingType'] = '3'; // sem especificar
        $dados['shippingAddressCountry']   = 'BRA';
        $dados['shippingCost']    = $pedido['frete']; // valor do frete
       
        /* varrendo o array de produtos  para montar os itens */
        $i= 1;
        foreach ($produtos as $item):
            
             $dados['itemId'.$i]          = $item['pro_id'];
             $dados['itemDescription'.$i] = $item['pro_nome'];
             $dados['itemAmount'.$i]      = $item['pro_valor_us'];
             $dados['itemQuantity'.$i]    = $item['pro_qtd'];
             
        $i++;    
        endforeach;
      
//        $dados['itemWeight1'] = '1000';

                // Monta a URL para enviar ao WS
        $dados = http_build_query($dados);
        
    //   echo'<pre>' . $dados .'</pre>' ;

        $curl = curl_init($this->psWS);

        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
       
        $retorno = curl_exec($curl);

        // verifico se foi autorizado, erros de TOKEN, AMBIENTE ou EMAIL podem dar erros aqui        
        if ($retorno == 'Unauthorized'):
            
            
          var_dump($retorno);
              
       //  exit(); 
        else:        
       
       
        curl_close($curl);

        // pego o retorno do WS e jogo em uma var  chamada XML
        $xml = simplexml_load_string($retorno);
                
            // CASO ERROR RETORNAR ALGO 
            if (count($xml->error) > 0):

               var_dump($xml->error->message);
                 // verificando alguns erros e tratando 
                  switch ($xml->error->code):
                      case 11164:
                          $msg = 'CPF do cliente está Incorreto';
                          break;
                      case 11010:
                          $msg = 'Email do cliente está Incorreto';
                          break;
                  endswitch;

                   Sistema::VoltarPagina();
                   echo $xml->error->message;


                exit();   


            else:

                // CASO NÃO DER ERRO 
          //  var_dump($xml);

                $this->psCod =  $xml->code ;  

            endif; // fim do IF caso teve erros ou não 

     endif;  // fim do IF autorizado ou não 
 
    }
    
    
    
    
     /** * requisicao de pagamento  * @param array $cliente  * @param array $pedido  * @param array $produtos   */        
    public function PagamentoITENS($cliente = array(), $pedido = array(), $produtos = array()) {
     
                
        $dados['email']    = Config::PS_EMAIL;
        $dados['token']    = $this->token;
        $dados['currency']   = 'BRL';               
        $dados['reference']    = $pedido['ped_ref']; // referencia pedido 
        $dados['redirectURL']    = Rotas::pag_PedidoRetorno();
        $dados['notificationURL'] = Rotas::pag_PedidoRetorno();          
        $dados['senderName']    = $cliente['cli_nome'] .' ' . $cliente['cli_sobrenome'];
        $dados['senderAreaCode']  = $cliente['cli_ddd_celular'];
        $dados['senderPhone']    = $cliente['cli_celular'];
        $dados['senderEmail']    = $cliente['cli_email'];
        $dados['senderCPF']    = $cliente['cli_cpf'];        
        $dados['shippingAddressStreet']   = $cliente['cli_endereco'];
        $dados['shippingAddressNumber']   = $cliente['cli_numero'];
        //$dados['shippingAddressComplement'] = '';
        $dados['shippingAddressDistrict'] = $cliente['cli_bairro'];
        $dados['shippingAddressPostalCode']  = $cliente['cli_cep'];
        $dados['shippingAddressCity']    = $cliente['cli_cidade'];
        $dados['shippingAddressState']    = strtoupper($cliente['cli_uf']); 
        $dados['shippingType'] = '3'; // sem especificar
        $dados['shippingAddressCountry']   = 'BRA';
        $dados['shippingCost']    = $pedido['ped_frete_valor']; // valor do frete
       
        /* varrendo o array de produtos  para montar os itens */
        $i= 1;
        foreach ($produtos as $item):
            
             $dados['itemId'.$i]          = $item['item_id'];
             $dados['itemDescription'.$i] = $item['item_nome'];
             $dados['itemAmount'.$i]      = $item['item_valor_us'];
             $dados['itemQuantity'.$i]    = $item['item_qtd'];
             
        $i++;    
        endforeach;
        
   //     echo '<pre>';
   //     var_dump($dados);
   //    echo '</pre>';
      
//        $dados['itemWeight1'] = '1000';

                // Monta a URL para enviar ao WS
        $dados = http_build_query($dados);
        
  //   echo'<pre>' . $this->psWS. $dados .'</pre>' ;

        $curl = curl_init($this->psWS);

        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
       
        $retorno = curl_exec($curl);

        // verifico se foi autorizado, erros de TOKEN, AMBIENTE ou EMAIL podem dar erros aqui        
        if ($retorno == 'Unauthorized'):
            
            
          var_dump($retorno);
              
       //  exit(); 
        else:        
       
       
        curl_close($curl);

        // pego o retorno do WS e jogo em uma var  chamada XML
        $xml = simplexml_load_string($retorno);
                
            // CASO ERROR RETORNAR ALGO 
            if (count($xml->error) > 0):

               var_dump($xml->error->message);
                 // verificando alguns erros e tratando 
                  switch ($xml->error->code):
                      case 11164:
                          $msg = 'CPF do cliente está Incorreto';
                          break;
                      case 11010:
                          $msg = 'Email do cliente está Incorreto';
                          break;
                  endswitch;

                   Sistema::VoltarPagina();
                   echo $xml->error->message;


                exit();   


            else:

                // CASO NÃO DER ERRO 
      //   var_dump($xml);

                $this->psCod =  $xml->code ;  

            endif; // fim do IF caso teve erros ou não 

     endif;  // fim do IF autorizado ou não 
 
    }
    
    
    
    

  /***   PARA BUSCAR transação por cod referencia **/
	public function BuscarTransacaoREF($ref){


            // credenciais pagseguro pegando da classe Config
            $email = Config::PS_EMAIL;
            $token = $this->token;
            // chamo a URL da notificação      
            $url = $this->psURL_Notificacao .'?email=' . $email . '&token=' . $token.'&reference='.$ref;

            
   //  echo $url ;
   //   echo '<hr>';
            
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $retorno = curl_exec($curl);
            curl_close($curl);
             
	// verifica se foi autorizado ou não a requisição
            if ($retorno == 'Unauthorized'):
                
				var_dump($retorno);
               // exit; //Mantenha essa linha
            
            else:
            
            // Tratando o XML recebido
            $this->xml = simplexml_load_string($retorno);
 
      //    echo '<pre>';            
     //     var_dump($this->xml);
     //     echo '</pre>';
                      
                // LAÇO para pegar informações de somente 1 pedido [0]
        foreach ($this->xml->transactions->transaction as $transaction):
        
           //--------tratando o status do pagamento que vem numérico
            switch ($transaction->status):
            
                case 1 : $this->status = "Aguardando pagamento";
                    break;
                case 2 : $this->status = "Analise";
                    break;
                case 3 : $this->status = "Pago";
                    break;
                case 4 : $this->status = "Pago";
                    break;
                case 7 : $this->status = "Cancelado";
                    break;
                
            endswitch;
            
            //----tratando o tipo de pagamento que vem numérico
            switch ($transaction->paymentMethod->type):
                
                case 1 : $this->forma_pag = "Cartao";
                    break;
                case 2 : $this->forma_pag = "Boleto";
                    break;
                case 3 : $this->forma_pag = "TEF";
                    break;
                case 4 : $this->forma_pag = "Saldo PagSeguro";
                    break;
                case 5 : $this->forma_pag = "Oi Paggo";
                    break;
                
            endswitch;

            //passo algumas variaveis que eu precisar 
            $pago      = $this->status;
            $codigo    = $transaction->code;
            $referencia= $transaction->reference;
            $forma_pag = $this->forma_pag;
            
            // passo balores  para meu array INFO
            $this->info = array(
             'pago' =>     $pago,
             'codigo'=>    $codigo,
             'referencia'=>$referencia,
             'forma_pag'=> $forma_pag                
            );
            
        // fim do foreach que varre os dados já que pode retornar mais de 1 pedido    
        endforeach;    
            

            // atualiza pedido status
             $this->PedidoUpdate($codigo, $pago, $forma_pag, $referencia);
            // envia email 
            $this->EnviarEmail();
            
            endif;

    }
	
	
    /**
         * Processa o retorno de informações do pagseguro 
         */
    public function Nofificacao(){
        
        /*
          VERIFICA SE EXISTE  UMA NOTIFICAÇÃO
         */
        if (isset($_POST['notificationType']) && $_POST['notificationType'] == 'transaction'):

            // credenciais pagseguro pegando da classe Config
            $email = Config::PS_EMAIL;
            $token = $this->token;
            // chamo a URL da notificação      
            $url = $this->psURL_Notificacao . 'notifications/'.$_POST['notificationCode'] . '?email=' . $email . '&token=' . $token;

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $retorno = curl_exec($curl);
            curl_close($curl);
             
			// verifica se não foi autorizado a requisição e para  tudo  
            if ($retorno == 'Unauthorized'):                
             // caso não for autorizado posso mostrar algo aqui          
            else:
            
            // pegando os dados retornados 
            $this->xml = simplexml_load_string($retorno);
            
            
              //--------tratando o status do pagamento
            switch ($this->xml->status):
                
                case 1 : $this->status = "Processando";
                    break;
                case 2 : $this->status = "Analise";
                    break;
                case 3 : $this->status = "Pago";
                    break;
                case 4 : $this->status = "Pago";
                    break;
                case 7 : $this->status = "Cancelado";
                    break;
                
            endswitch;
            
            //----tratando o tipo de pagamento
            switch ($this->xml->paymentMethod->type):
                
                case 1 : $this->forma_pag = "Cartao";
                    break;
                case 2 : $this->forma_pag = "Boleto";
                    break;
                case 3 : $this->forma_pag = "TEF";
                    break;
                case 4 : $this->forma_pag = "Saldo PagSeguro";
                    break;
                case 5 : $this->forma_pag = "Oi Paggo";
                    break;
                
            endswitch;

            //passo algumas variaveis que eu precisar 
            $pago      = $this->status;
            $codigo    = $this->xml->code;
            $referencia= $this->xml->reference;
            $forma_pag = $this->forma_pag;            
            
            
            // atualiza pedido status
            $this->PedidoUpdate($codigo, $pago, $forma_pag, $referencia);
            // envia email 
            $this->EnviarEmail();
            
            endif; // fim do if Unauthorized
        
        // fim do ISSET POST notificationType
         endif;
    }

/**
 * grava atualização de status na tabela pedidos
 * @param string $codigo
 * @param string $pago
 * @param string $forma_pag
 * @param string $referencia
 */
    private function PedidoUpdate($codigo,$pago,$forma_pag,$referencia){        
                  
            // montando a SQL
            $query = "UPDATE {$this->prefix}pedidos SET ped_pag_codigo = :cod, ped_pag_tipo = 'PAGSEGURO',";
            $query .="ped_pag_status = :pago, ped_pag_forma = :forma  WHERE ped_ref = :ref";
           
            // passando parâmetros                             
            $params = array(
                            ':cod'  =>$codigo,
                            ':pago' =>$pago,
                            ':forma'=>$forma_pag,
                            ':ref'  =>$referencia,               
                           );
            
           //var_dump($params); 
            
                // chamo o método da classe conexão que executa a SQL
                $this->ExecuteSQL($query, $params);

        
    }
    
    
    /* * 
  *envia  email caso pagamento seja efetuado
  */   
    private function EnviarEmail(){
        
           // setando conteudo do email para avisos	

        
    }

        
}
