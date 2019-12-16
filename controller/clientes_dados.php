<?php


$smarty = new Template();

Login::MenuCliente();

//Foreach para criar os ASSIGNS
foreach ($_SESSION['CLI'] as $campo => $valor) {
    $smarty->assign(strtoupper($campo), $valor);
}

if (isset($_POST['cli_senha_atual'])) {
    $cli_nome = $_POST['cli_nome'];
    $cli_sobrenome = $_POST['cli_sobrenome'];
    $cli_cpf = $_SESSION['CLI']['cli_cpf'];
    $cli_data_nasc = $_POST['cli_data_nasc'];
    $cli_sexo = $_POST['cli_sexo'];
    $cli_ddd_celular = $_POST['cli_ddd_celular'];
    $cli_celular = $_POST['cli_celular'];
    $cli_ddd_fone = $_POST['cli_ddd_fone'];
    $cli_fone = $_POST['cli_fone'];
    $cli_email = $_SESSION['CLI']['cli_email'];
    $cli_senha = $_SESSION['CLI']['cli_senha'];
    $cli_cep = $_POST['cli_cep'];
    $cli_endereco = $_POST['cli_endereco'];
    $cli_numero = $_POST['cli_numero'];
    $cli_bairro = $_POST['cli_bairro'];
    $cli_cidade = $_POST['cli_cidade'];
    $cli_uf = $_POST['cli_uf'];
    $cli_data_cad = $_SESSION['CLI']['cli_data_cad'];
    $cli_hora_cad = $_SESSION['CLI']['cli_hora_cad'];

    $clientes = new Clientes();

    //CHAMAR A FUNÇÃO PARA PREPARAR OS DADOS
    $clientes->Preparar(
        $cli_nome,
        $cli_sobrenome,
        $cli_cpf,
        $cli_data_nasc,
        $cli_sexo,
        $cli_ddd_celular,
        $cli_celular,
        $cli_ddd_fone,
        $cli_fone,
        $cli_email,
        $cli_senha,
        $cli_cep,
        $cli_endereco,
        $cli_numero,
        $cli_bairro,
        $cli_cidade,
        $cli_uf,
        $cli_data_cad,
        $cli_hora_cad
    );

    $senha_atual = md5($_POST['cli_senha_atual']);
    if($senha_atual != $_SESSION['CLI']['cli_senha']){
        echo '<div class="alert alert-danger alertAdd">Senha inválida, digite sua senha corretamente.</div>';
        Rotas::Redirecionar(2,Rotas::pag_CLienteDados());
        exit();
    }

    $clientes = new Clientes();
    $clientes->Preparar(
        $cli_nome,
        $cli_sobrenome,
        $cli_cpf,
        $cli_data_nasc,
        $cli_sexo,
        $cli_ddd_celular,
        $cli_celular,
        $cli_ddd_fone,
        $cli_fone,
        $cli_email,
        $cli_senha,
        $cli_cep,
        $cli_endereco,
        $cli_numero,
        $cli_bairro,
        $cli_cidade,
        $cli_uf,
        $cli_data_cad,
        $cli_hora_cad
    );

    if(!$clientes->Editar($_SESSION['CLI']['cli_id'])){
        echo '<div class="alert alert-danger alertAdd">Erro ao editar os dados</div>';
        exit();
    }else{
        $login = new Login();
        $login->GetLogin($cli_email, $cli_senha);
        echo '<div class="alert alert-success alertAdd">Dados alterados com sucesso.</div>';
        Rotas::Redirecionar(2,Rotas::pag_MeuPerfil());
    }
        

}else{
    $smarty->display('clientes_dados.tpl');

}



?>