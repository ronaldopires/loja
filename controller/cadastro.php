<?php

$smarty = new Template();

if (isset($_POST['cli_nome'])) {
    $cli_nome = $_POST['cli_nome'];
    $cli_sobrenome = $_POST['cli_sobrenome'];
    $cli_cpf = $_POST['cli_cpf'];
    $cli_data_nasc = $_POST['cli_data_nasc'];
    $cli_sexo = $_POST['cli_sexo'];
    $cli_celular = $_POST['cli_celular'];

    $clientes = new Clientes();

    //CHAMAR A FUNÇÃO PARA PREPARAR OS DADOS
    $clientes->Preparar(
        $cli_nome, 
        $cli_sobrenome, 
        $cli_cpf, 
        $cli_data_nasc, 
        $cli_sexo, 
        $cli_celular
    );
            
    $clientes->Inserir();
}else{

    $smarty->display('cadastro.tpl');

}
