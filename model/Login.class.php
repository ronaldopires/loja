<?php
class Login extends Conexao
{
    private $user, $senha;
    public function __construct()
    {
        parent::__construct();
    }

    public function GetLogin($user, $senha)
    {
        $this->setUser($user);
        $this->setSenha($senha);

        $query = "SELECT * FROM {$this->prefix}clientes WHERE cli_email = :email AND cli_senha = :senha";
        $params = array(
            ':email' => $this->getUser(),
            ':senha' => $this->getSenha(),
        );

        $this->ExecuteSQL($query, $params);
        //Verifica se existe dados com row count da função TotalDados
        if ($this->TotalDados() > 0) {
            $lista = $this->ListarDados();
            // Cria uma sessão com os dados do Cliente
            $_SESSION['CLI']['cli_id'] = $lista['cli_id'];
            $_SESSION['CLI']['cli_nome'] = $lista['cli_nome'];
            $_SESSION['CLI']['cli_sobrenome'] = $lista['cli_sobrenome'];
            $_SESSION['CLI']['cli_cpf'] = $lista['cli_cpf'];
            $_SESSION['CLI']['cli_sexo'] = $lista['cli_sexo'];
            $_SESSION['CLI']['cli_data_nasc'] = $lista['cli_data_nasc'];
            $_SESSION['CLI']['cli_ddd_fone'] = $lista['cli_ddd_fone'];
            $_SESSION['CLI']['cli_fone'] = $lista['cli_fone'];
            $_SESSION['CLI']['cli_ddd_celular'] = $lista['cli_ddd_celular'];
            $_SESSION['CLI']['cli_celular'] = $lista['cli_celular'];
            $_SESSION['CLI']['cli_email'] = $lista['cli_email'];
            $_SESSION['CLI']['cli_senha'] = $lista['cli_senha'];
            $_SESSION['CLI']['cli_cep'] = $lista['cli_cep'];
            $_SESSION['CLI']['cli_endereco'] = $lista['cli_endereco'];
            $_SESSION['CLI']['cli_bairro'] = $lista['cli_bairro'];
            $_SESSION['CLI']['cli_cidade'] = $lista['cli_cidade'];
            $_SESSION['CLI']['cli_uf'] = $lista['cli_uf'];
            $_SESSION['CLI']['cli_numero'] = $lista['cli_numero'];
            $_SESSION['CLI']['cli_hora_cad'] = $lista['cli_hora_cad'];
            $_SESSION['CLI']['cli_data_cad'] = $lista['cli_data_cad'];
            $_SESSION['time_last'] = time();
        } else {
            echo '<h4 class="alert alert-danger alertDel">E-mail e/ou senha incorretos</h4>';
        }
    }

    public function GetLoginADM($user, $senha)
    {

        $this->setUser($user);
        $this->setSenha($senha);

        $query = "SELECT * FROM {$this->prefix}user_adm WHERE user_email = :email AND user_senha = :senha";

        $params = array(
            ':email' => $this->getUser(),
            ':senha' => $this->getSenha(),
        );

        $this->ExecuteSQL($query, $params);

        // caso o login seja efetivado com exito
        if ($this->TotalDados() > 0):

            $lista = $this->ListarDados();

            $_SESSION['ADM']['user_id'] = $lista['user_id'];
            $_SESSION['ADM']['user_nome'] = $lista['user_nome'];
            $_SESSION['ADM']['user_email'] = $lista['user_email'];
            $_SESSION['ADM']['user_senha'] = $lista['user_senha'];
            $_SESSION['ADM']['user_data'] = Sistema::DataAtualBR();
            $_SESSION['ADM']['user_hora'] = Sistema::HoraAtual();

            return true;
            // caso o login seja incorreto
        else:

            echo '<h4 class="alert alert-danger alerta">Login e/ou senha incorreto.</h4>';
            //  Rotas::Redirecionar(1,  Rotas::pag_ClienteLogin() );

            return false;
        endif;
    }

    // Verifica se está logado
    public static function Logado()
    {
        if (isset($_SESSION['CLI']['cli_email']) && ($_SESSION['CLI']['cli_id'])) {
            return true;
        } else {
            return false;
        }
    }
    public static function LogadoADM()
    {
        if (isset($_SESSION['ADM']['user_nome']) && ($_SESSION['ADM']['user_id'])) {
            return true;
        } else {
            return false;
        }
    }
    // Função de Logoff
    public static function Logoff()
    {
        unset($_SESSION['CLI']);
        Rotas::Redirecionar(2, Rotas::get_SiteHOME());
        exit('<h4 class="alert alert-success alertAdd">Efetuando o Logoff...</h4>');
    }
    public static function LogoffADM()
    {
        unset($_SESSION['ADM']);
        Rotas::Redirecionar(2, Rotas::get_SiteHOME());
        exit('<h4 class="alert alert-success alertAdd">Efetuando o Logoff...</h4>');
    }

    // Função para mostrar o menu do cliente
    public static function MenuCliente()
    {

        // verifo se não esta logado
        if (!self::Logado()):

            //self::AcessoNegado();
            Rotas::Redirecionar(0, Rotas::pag_Login());

            // caso nao redirecione  saiu  do bloco
            exit();

            // caso esteja mostra a tela minha conta
        else:

            $smarty = new Template();

            $smarty->assign('PAG_CONTA', Rotas::pag_ClienteConta());
            $smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
            $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
            $smarty->assign('PAG_CLIENTE_PEDIDOS', Rotas::pag_CLientePedidos());
            $smarty->assign('PAG_CLIENTE_DADOS', Rotas::pag_CLienteDados());
            $smarty->assign('PAG_CLIENTE_SENHA', Rotas::pag_CLienteSenha());
            $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);

            $smarty->display('minha_conta.tpl');

        endif;
    }

    private function setUser($user)
    {
        $this->user = $user;
    }
    private function setSenha($senha)
    {
        $this->senha = md5($senha);
    }

    public function getUser()
    {
        return $this->user;
    }
    public function getSenha()
    {
        return $this->senha;
    }
}
