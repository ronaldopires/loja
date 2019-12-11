<?php

$smarty = new Template();

if (isset($_POST['cli_email'])) {
    $cli_nome = $_POST['cli_nome'];
    $cli_sobrenome = $_POST['cli_sobrenome'];
    $cli_cpf = $_POST['cli_cpf'];
    $cli_data_nasc = $_POST['cli_data_nasc'];
    $cli_sexo = $_POST['cli_sexo'];
    $cli_celular = $_POST['cli_celular'];
    $cli_fone = $_POST['cli_fone'];
    $cli_email = $_POST['cli_email'];
    $cli_senha = $_POST['cli_senha'];
    $cli_confirm_senha = $_POST['cli_confirm_senha'];
    $cli_cep = $_POST['cli_cep'];
    $cli_endereco = $_POST['cli_endereco'];
    $cli_numero = $_POST['cli_numero'];
    $cli_bairro = $_POST['cli_bairro'];
    $cli_cidade = $_POST['cli_cidade'];
    $cli_uf = $_POST['cli_uf'];
    $cli_data_cad = Sistema::DataAtualUS();
    $cli_hora_cad = Sistema::HoraAtual();

    $clientes = new Clientes();

    //CHAMAR A FUNÇÃO PARA PREPARAR OS DADOS
    $clientes->Preparar(
        $cli_nome,
        $cli_sobrenome,
        $cli_cpf,
        $cli_data_nasc,
        $cli_sexo,
        $cli_celular,
        $cli_fone,
        $cli_email,
        $cli_senha,
        $cli_confirm_senha,
        $cli_cep,
        $cli_endereco,
        $cli_numero,
        $cli_bairro,
        $cli_cidade,
        $cli_uf,
        $cli_data_cad,
        $cli_hora_cad
    );

    $clientes->Inserir();

    //ASSIGNS PARA TEMPLATE
    $smarty->assign('NOME', $cli_nome);
    $smarty->assign('SITE', Config::SITE_NOME);
    $smarty->assign('EMAIL', $cli_email);
    $smarty->assign('SENHA', $cli_senha);
    $smarty->assign('PAG_MINHA_CONTA', Rotas::pag_ClienteConta());
    $smarty->assign('SITE_HOME', Rotas::get_siteHOME());
    
    $email = new EnviarEmail();
    $assunto = 'Cadastro Efetuado - ' . Config::SITE_NOME;
    $msg = $smarty->fetch('email_cliente_cadastro.tpl');
    $destinatarios = array($cli_email, Config::SITE_EMAIL_ADM);
    $email->Enviar($assunto, $msg, $destinatarios);

    echo '<div class="alert alert-success alertAdd">Cadastro efetuado com sucesso</div>';
    Rotas::Redirecionar(2, Rotas::pag_Login());
    exit();
} else {

    $smarty->display('cadastro.tpl');

}