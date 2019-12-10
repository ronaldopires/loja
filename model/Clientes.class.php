        <?php

        class Clientes extends Conexao
        {
        private $cli_nome, $cli_sobrenome, $cli_sexo, $cli_endereco, $cli_numero, $cli_bairro, $cli_cidade, $cli_uf, $cli_cep, $cli_cpf, $cli_fone, $cli_celular, $cli_email, $cli_senha, $cli_confirm_senha, $cli_data_nasc, $cli_data_cad, $cli_hora_cad;
        
        function __construct()
        {
            parent::__construct();
        }
        //Função para preparar o cliente
        function Preparar($cli_nome, $cli_sobrenome, $cli_sexo, $cli_endereco, $cli_numero, $cli_bairro, $cli_cidade,
        $cli_uf, $cli_cep, $cli_cpf, $cli_fone, $cli_celular, $cli_email, $cli_senha, $cli_confirm_senha, $cli_data_nasc,
        $cli_data_cad, $cli_hora_cad) {
        $this->setCli_nome($cli_nome);
        $this->setCli_sobrenome($cli_sobrenome);
        $this->setCli_cpf($cli_cpf);
        $this->setCli_data_nasc($cli_data_nasc);
        $this->setCli_sexo($cli_sexo);
        $this->setCli_celular($cli_celular);
        $this->setCli_fone($cli_fone);
        $this->setCli_email($cli_email);
        $this->setCli_senha($cli_senha);
        $this->setCli_confirm_senha($cli_confirm_senha);
        $this->setCli_cep($cli_cep);
        $this->setCli_endereco($cli_endereco);
        $this->setCli_bairro($cli_bairro);
        $this->setCli_cidade($cli_cidade);
        $this->setCli_uf($cli_uf);
        $this->setCli_numero($cli_numero);
        $this->setCli_data_cad($cli_data_cad);
        $this->setCli_hora_cad($cli_hora_cad);
        }


        function Inserir(){
            if($this->GetClienteCPF($this->getCli_cpf()) > 0 ){
                echo '<div class="alert alert-danger" id="mostrar_erro"> Este CPF já existe</div>';
            }
            if($this->GetClienteEmail($this->getCli_email()) > 0 ){
                echo '<div class="alert alert-danger" id="mostrar_erro"> Este Email já existe</div>';
            }
            //query para inserir clientes
            $query = " INSERT INTO {$this->prefix}clientes (cli_nome, cli_sobrenome, cli_cpf, cli_data_nasc,";
            $query .=" cli_sexo, cli_celular, cli_fone , cli_email, cli_senha, cli_confirm_senha,";
            $query .=" cli_cep, cli_endereco, cli_bairro, cli_cidade, cli_uf, cli_numero, cli_data_cad, cli_hora_cad)";   
            $query .=" VALUES ";
            $query .=" (:cli_nome, :cli_sobrenome, :cli_cpf, :cli_data_nasc,";
            $query .=" :cli_sexo, :cli_celular, :cli_fone, :cli_email, :cli_senha, :cli_confirm_senha,";
            $query .=" :cli_cep, :cli_endereco, :cli_bairro, :cli_cidade, :cli_uf, :cli_numero, :cli_data_cad, :cli_hora_cad)";  
    
            $params = array(
            ':cli_nome'             => $this->getCli_nome(),    
            ':cli_sobrenome'        => $this->getCli_sobrenome(),   
            ':cli_cpf'              => $this->getCli_cpf(),   
            ':cli_data_nasc'        => $this->getCli_data_nasc(),   
            ':cli_sexo'             => $this->getCli_sexo(),   
            ':cli_celular'          => $this->getCli_celular(),   
            ':cli_fone'             => $this->getCli_fone(),   
            ':cli_email'            => $this->getCli_email(),   
            ':cli_senha'            => $this->getCli_senha(),   
            ':cli_confirm_senha'    => $this->getCli_confirm_senha(),   
            ':cli_cep'              => $this->getCli_cep(),   
            ':cli_endereco'         => $this->getCli_endereco(),   
            ':cli_bairro'           => $this->getCli_bairro(),   
            ':cli_cidade'           => $this->getCli_cidade(),   
            ':cli_uf'               => $this->getCli_uf(),   
            ':cli_numero'           => $this->getCli_numero(),   
            ':cli_data_cad'         => $this->getCli_data_cad(),   
            ':cli_hora_cad'         => $this->getCli_hora_cad()   
    
            );
            echo $query;
            $this->ExecuteSQL($query, $params);
        }

        //Verifica se o CPF já existe
        function GetClienteCPF($cpf){
        $query = "SELECT * FROM {$this->prefix}clientes ";
        $query .= " WHERE cli_cpf = :cpf ";
        $params = array(':cpf' => $cpf);
        $this->ExecuteSQL($query, $params);
        return $this->TotalDados();

        }
        //Verifica se o Email já existe
        function GetClienteEmail($email){
        $query = "SELECT * FROM {$this->prefix}clientes ";
        $query .= " WHERE cli_email = :cli_email ";
        $params = array(':email' => $email);
        $this->ExecuteSQL($query, $params);
        return $this->TotalDados();

        }


        // GETTERS retornando os dados do cliente
        function getCli_nome()
        {
        return $this->cli_nome;
        }
        function getCli_sobrenome()
        {
        return $this->cli_sobrenome;
        }
        function getCli_sexo()
        {
        return $this->cli_sexo;
        }
        function getCli_endereco()
        {
        return $this->cli_endereco;
        }
        function getCli_numero()
        {
        return $this->cli_numero;
        }
        function getCli_bairro()
        {
        return $this->cli_bairro;
        }
        function getCli_cidade()
        {
        return $this->cli_cidade;
        }
        function getCli_uf()
        {
        return $this->cli_uf;
        }
        function getCli_cep()
        {
        return $this->cli_cep;
        }
        function getCli_cpf()
        {
        return $this->cli_cpf;
        }
        function getCli_fone()
        {
        return $this->cli_fone;
        }
        function getCli_celular()
        {
        return $this->cli_celular;
        }
        function getCli_email()
        {
        return $this->cli_email;
        }
        function getCli_senha()
        {
        return $this->cli_senha;
        }
        function getCli_confirm_senha()
        {
        return $this->cli_confirm_senha;
        }
        function getCli_data_nasc()
        {
        return $this->cli_data_nasc;
        }
        function getCli_data_cad()
        {
        return $this->cli_data_cad;
        }
        function getCli_hora_cad()
        {
        return $this->cli_hora_cad;
        }

        //SETTERS do cliente

        function setCli_nome($cli_nome)
        {
        if (strlen($cli_nome) < 3): echo '<div class="alert alert-danger " id="erro_mostrar"> Digite seu nome ';
        Sistema::VoltarPagina();
        echo '</div>';else:$this->cli_nome = $cli_nome;
        endif;
        }

        function setCli_sobrenome($cli_sobrenome)
        {
        if (strlen($cli_sobrenome) < 3): echo '<div class="alert alert-danger " id="erro_mostrar"> Digite seu sobrenome '
        ;
        Sistema::VoltarPagina();
        echo '</div>';else:$this->cli_sobrenome = $cli_sobrenome;
        endif;
        }

        function setCli_data_nasc($cli_data_nasc)
        {
        $this->cli_data_nasc = $cli_data_nasc;
        }

        function setCli_cpf($cli_cpf)
        {
        $this->cli_cpf = $cli_cpf;
        }
        function setCli_sexo($cli_sexo)
        {
        $this->cli_sexo = $cli_sexo;
        }

        function setCli_fone($cli_fone)
        {
            $this->cli_fone = $cli_fone;
        }

        function setCli_celular($cli_celular)
        {
        $this->cli_celular = $cli_celular;
        }

        function setCli_endereco($cli_endereco)
        {
        $this->cli_endereco = $cli_endereco;
        }

        function setCli_numero($cli_numero)
        {
        $this->cli_numero = $cli_numero;
        }

        function setCli_bairro($cli_bairro)
        {
        $this->cli_bairro = $cli_bairro;
        }

        function setCli_cidade($cli_cidade)
        {
        $this->cli_cidade = $cli_cidade;
        }

        function setCli_uf($cli_uf)
        {
        /* $uf = filter_var($cli_uf, FILTER_SANITIZE_STRING);

        if (strlen($uf) != 2): //11111
        echo '<div class="alert alert-danger " id="erro_mostrar"> UF incorreto ';
        Sistema::VoltarPagina();
        echo '</div>';
        else: */
        $this->cli_uf = $cli_uf;
        /* endif; */
        }

        function setCli_cep($cli_cep)
        {
        /* $cep = filter_var($cli_cep, FILTER_SANITIZE_NUMBER_INT);
        if (strlen($cep) != 8):
        echo '<div class="alert alert-danger " id="erro_mostrar"> CEP incorreto ';
        Sistema::VoltarPagina();
        echo '</div>';
        else: */
        $this->cli_cep = $cli_cep;
        /* endif; */
        }

        function setCli_email($cli_email)
        {
        /* if (!filter_var($cli_email, FILTER_VALIDATE_EMAIL)):
        echo '<div class="alert alert-danger " id="erro_mostrar"> Email incorreto ';
        Sistema::VoltarPagina();
        echo '</div>';
        exit();
        else: */
        $this->cli_email = $cli_email;
        /* endif; */
        }

        function setCli_data_cad($cli_data_cad)
        {
        $this->cli_data_cad = $cli_data_cad;
        }

        function setCli_hora_cad($cli_hora_cad)
        {
        $this->cli_hora_cad = $cli_hora_cad;
        }

        function setCli_senha($cli_senha)
        {
        $this->cli_senha = Sistema::Criptografia($cli_senha);
        }
        function setCli_confirm_senha($cli_confirm_senha)
        {
        $this->cli_confirm_senha = Sistema::Criptografia($cli_confirm_senha);
        }

        /* function senha($cli_senha,$cli_confirm_senha){
        if($cli_senha != $cli_confirm_senha){
        echo '<div class="alert alert-danger " id="erro_mostrar"> Email incorreto ';
        Sistema::VoltarPagina();
        echo '</div>';
        exit();
        }
        } */


    }

        ?>