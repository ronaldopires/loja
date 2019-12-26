<?php

$smarty = new Template();
$clientes = new Clientes();


if (isset($_POST['cli_nome']) and isset($_POST['cli_email']) and isset($_POST['cli_sobrenome'])) {
    $cli_id = $_POST['cli_id'];
    $cli_nome = $_POST['cli_nome'];
    $cli_sobrenome = $_POST['cli_sobrenome'];
    $cli_cpf = "";
    $cli_data_nasc = $_POST['cli_data_nasc'];
    $cli_sexo = $_POST['cli_sexo'];
    $cli_ddd_celular = $_POST['cli_ddd_celular'];
    $cli_celular = $_POST['cli_celular'];
    $cli_ddd_fone = $_POST['cli_ddd_fone'];
    $cli_fone = $_POST['cli_fone'];
    $cli_email = $_POST['cli_email'];
    $cli_senha = "";
    $cli_cep = $_POST['cli_cep'];
    $cli_endereco = $_POST['cli_endereco'];
    $cli_numero = $_POST['cli_numero'];
    $cli_bairro = $_POST['cli_bairro'];
    $cli_cidade = $_POST['cli_cidade'];
    $cli_uf = $_POST['cli_uf'];
    $cli_data_cad = "";
    $cli_hora_cad = "";


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

    if (!$clientes->EditarADM($cli_id)) {
        echo '<div class="alert alert-danger alertAdd">Erro ao editar os dados</div>';
        exit();
    } else {
        echo '<script> alert("Dados alterados com sucesso!");</script>';
        Rotas::Redirecionar(2, Rotas::pag_ClientesADM());
    }

} else {
    if(isset(Rotas::$pag[1])){
        $id = Rotas::$pag[1];
    }else{
        $id = 0;
    }
    $id = Rotas::$pag[1];
    $clientes->GetClientesID($id);
    foreach($clientes->GetItens()[1] as $campo => $valor){
        $smarty->assign(strtoupper($campo), $valor);
    }

    $smarty->display('adm_clientes_editar.tpl');
}