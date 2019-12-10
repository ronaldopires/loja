        <?php

        class Clientes extends Conexao
        {
            private $cli_nome, $cli_sobrenome, $cli_cpf, $cli_data_nasc, $cli_sexo, $cli_celular;

            function __construct()
            {
                parent::__construct();
            }
            //Função para preparar o cliente
            function Preparar($cli_nome, $cli_sobrenome, $cli_cpf, $cli_data_nasc, $cli_sexo, $cli_celular)
            {
                $this->setCli_nome($cli_nome);
                $this->setCli_sobrenome($cli_sobrenome);
                $this->setCli_cpf($cli_cpf);
                $this->setCli_data_nasc($cli_data_nasc);
                $this->setCli_sexo($cli_sexo);
                $this->setCli_celular($cli_celular);
            }

            function Inserir()
            {

                //query para inserir clientes
                $query = "INSERT INTO {$this->prefix}clientes (cli_nome, cli_sobrenome, cli_cpf, cli_data_nasc, cli_sexo, cli_celular) VALUES (:cli_nome, :cli_sobrenome, :cli_cpf, :cli_data_nasc, :cli_sexo, :cli_celular) ";

                $params = array(
                    ':cli_nome' => $this->getCli_nome(),
                    ':cli_sobrenome' => $this->getCli_sobrenome(),
                    ':cli_cpf' => $this->getCli_cpf(),
                    ':cli_data_nasc' => $this->getCli_data_nasc(),
                    ':cli_sexo' => $this->getCli_sexo(),
                    ':cli_celular' => $this->getCli_celular(),
                );
                echo $query;
                $this->ExecuteSQL($query, $params);
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
            function getCli_cpf()
            {
                return $this->cli_cpf;
            }
            function getCli_data_nasc()
            {
                return $this->cli_cpf;
            }
            function getCli_sexo()
            {
                return $this->cli_sexo;
            }
            function getCli_celular()
            {
                return $this->cli_celular;
            }

            //SETTERS do cliente

            function setCli_nome($cli_nome)
            {
                if (strlen($cli_nome) < 3) : echo '<div class="alert alert-danger " id="erro_mostrar"> Digite seu nome ';
                    Sistema::VoltarPagina();
                    echo '</div>';
                else :
                    $this->cli_nome = $cli_nome;
                endif;
            }

            function setCli_sobrenome($cli_sobrenome)
            {
                if (strlen($cli_sobrenome) < 3) : echo '<div class="alert alert-danger " id="erro_mostrar"> Digite seu sobrenome ';
                    Sistema::VoltarPagina();
                    echo '</div>';
                else :
                    $this->cli_sobrenome = $cli_sobrenome;
                endif;
            }

            function setCli_cpf($cli_cpf)
            {
                $this->cli_cpf = $cli_cpf;
            }
            function setCli_data_nasc($cli_data_nasc)
            {
                $this->cli_data_nasc = $cli_data_nasc;
            }
            function setCli_sexo($cli_sexo)
            {
                $this->cli_sexo = $cli_sexo;
            }
            function setCli_celular($cli_celular)
            {
                $this->cli_celular = $cli_celular;
            }
        }

        ?>