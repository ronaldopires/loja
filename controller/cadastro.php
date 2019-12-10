<?php

$smarty = new Template();

if (isset($_POST['cli_email'])) {
    $cli_nome = $_POST['cli_nome'];
    $cli_sobrenome = $_POST['cli_sobrenome'];
    $cli_sexo = $_POST['cli_sexo'];
    $cli_endereco = $_POST['cli_endereco'];
    $cli_numero = $_POST['cli_numero'];
    $cli_bairro = $_POST['cli_bairro'];
    $cli_cidade = $_POST['cli_cidade'];
    $cli_uf = $_POST['cli_uf'];
    $cli_cep = $_POST['cli_cep'];
    $cli_cpf = $_POST['cli_cpf'];
    $cli_fone = $_POST['cli_fone'];
    $cli_celular = $_POST['cli_celular'];
    $cli_email = $_POST['cli_email'];
    $cli_senha = Sistema::Criptografia($_POST['cli_senha']);
    $cli_confirm_senha = Sistema::Criptografia($_POST['cli_confirm_senha']);
    $cli_data_nasc = $_POST['cli_data_nasc'];
    $cli_data_cad = Sistema::DataAtualUS();
    $cli_hora_cad = Sistema::HoraAtual();

    $clientes = new Clientes();

    //CHAMAR A FUNÇÃO PARA PREPARAR OS DADOS
    $clientes->Preparar($cli_nome, $cli_sobrenome, $cli_sexo, $cli_data_nasc, $cli_cpf, $cli_fone, $cli_celular, $cli_endereco, $cli_numero, $cli_bairro, $cli_cidade, $cli_uf, $cli_cep, $cli_email, $cli_data_cad, $cli_hora_cad, $cli_senha, $cli_confirm_senha);

    $clientes->Inserir();
}else{

    $smarty->display('cadastro.tpl');

}
