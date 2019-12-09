<?php

class Sistema {
   
    /**
     * 
     * @return String: data atual fotmato BR
     */
    static function DataAtualBR(){
        
        return date('d/m/Y') ;
    }
    /**
     * 
     * @return String: data atual US (formato MYSQL)
     */
    static function DataAtualUS(){
        
        return date('Y-m-d') ;
    }
    /**
     * 
     * @return string: hora atual, hora , minuto e segundo
     */
    static function HoraAtual(){
        
        return date('H:i:s') ;
    }

        /**
     * 
     * @param type $valor
     * @return float - valor formatado em REal
     */
    static function MoedaBR($valor){
       // 500.99   500,99    1500.99  1.500,99
        return number_format($valor,2,",",".");  
    }
     /**
     * 
     * @param string pega data americana e deixa em BR
     * @return string
     */
    public static function Fdata($data){
	   // 2017-04-23 23/04/2017
	  $data_correta = explode("-",$data);
	  $data = $data_correta[2]."/". $data_correta[1] ."/".$data_correta[0];  
	  return $data;   
    }
    
                   
   /**
    * 
    * @param type int: tamanho da senha
    * @return string: senha randonica
    */
    static function GerarSenha(){
		//2	  // fe45214qa  mqws23ma  0o z b
        $tamanho = 1;
	$string ="";
			
	for ($i = 0; $i < $tamanho; $i++) {
				
		 //$string .= (rand(1, 9)) ;
				   $string .= chr(rand(109, 122));
                                   $string .= rand(40, 99);
                                   $string .= chr(rand(109, 122));
                                   $string .= rand(20, 89);
                                   $string .= chr(rand(109, 122));
                                   $string .= chr(rand(109, 122));
                                   //$string .= rand(20, 89);
                                   //$string .= rand(20, 89);		  
			}
			$string = str_replace('o', 'z', $string);
			$string = str_replace('0', 'b', $string);
			
			return $string;
			
	} 
        
        
        
        
    /**
     * validar CPF
     * @param type string: CPF 
     * @return boolean: true caso o CPF seja correto
     */    
    static function ValidarCPF($cpf = false) {    
      // determina um valor inicial para o digito $d1 e $d2
	$d1 = 0;
	$d2 = 0;
            // remove tudo que não seja número
            $cpf = preg_replace("/[^0-9]/", "", $cpf);
            // lista de cpf inválidos que serão ignorados
            $ignore_list = array(
              '00000000000', '01234567890','11111111111','22222222222','33333333333',
              '44444444444', '55555555555','66666666666', '77777777777','88888888888',
              '99999999999'
            );
            // se o tamanho da string for dirente de 11 ou estiver
            // na lista de cpf ignorados já retorna false
            if(strlen($cpf) != 11 || in_array($cpf, $ignore_list)){
                return false;
            } else {
              // inicia o processo para achar o primeiro
              // número verificador usando os primeiros 9 dígitos
              for($i = 0; $i < 9; $i++){
                // inicialmente $d1 vale zero e é somando.
                // O loop passa por todos os 9 dígitos iniciais
                $d1 += $cpf[$i] * (10 - $i);
              }
              // acha o resto da divisão da soma acima por 11
              $r1 = $d1 % 11;
              // se $r1 maior que 1 retorna 11 menos $r1 se não
              // retona o valor zero para $d1
              $d1 = ($r1 > 1) ? (11 - $r1) : 0;
              // inicia o processo para achar o segundo
              // número verificador usando os primeiros 9 dígitos
              for($i = 0; $i < 9; $i++) {
                // inicialmente $d2 vale zero e é somando.
                // O loop passa por todos os 9 dígitos iniciais
                $d2 += $cpf[$i] * (11 - $i);
              }
              // $r2 será o resto da soma do cpf mais $d1 vezes 2
              // dividido por 11
              $r2 = ($d2 + ($d1 * 2)) % 11;
              // se $r2 mair que 1 retorna 11 menos $r2 se não
              // retorna o valor zeroa para $d2
              $d2 = ($r2 > 1) ? (11 - $r2) : 0;
              // retona true se os dois últimos dígitos do cpf
              // forem igual a concatenação de $d1 e $d2 e se não
              // deve retornar false.
              return (substr($cpf, -2) == $d1 . $d2) ? true : false;
  }
      
} 

     /**
     * 
     * @return string - IP do usuario
     */
     static  function GetIp(){

            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                } else {

                    $ip = $_SERVER['REMOTE_ADDR'];
                }

                return $ip;
     }
     /**
      * mostra botão voltar com java script
      */
     static function VoltarPagina(){
         
         echo '<script> function goBack() {
                    window.history.back();
                    } </script>';
         echo '<button onclick="goBack()" class="btn btn-default">'
         . '<i class="glyphicon glyphicon-circle-arrow-left" ></i> Voltar </button> ';
     }
    
  
     
     /**
     * @return string: cria um nome para pastas e URL amigavel (SLUG)
     */
    static function GetSlug($string) {
  //    original =  Produto maçã do Amor  - produto-maca-do-amor 
        if (is_string($string)) {
            $string = strtolower(trim(utf8_decode($string)));

            $before = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr';
            $after = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
            $string = strtr($string, utf8_decode($before), $after);

            $replace = array(
                '/[^a-z0-9.-]/' => '-',
                '/-+/' => '-',
                '/\-{2,}/' => ''
            );

            $string = preg_replace(array_keys($replace), array_values($replace), $string);
        }
        return trim(substr($string, 0, 55));
    }
    
    /**
     * 
     * @param string $valor original 
     * @return string valor criptografado
     */
    static function Criptografia($valor){
        
        return hash('SHA512', $valor);
        
    }
     
     
    
}