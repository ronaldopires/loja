<?php

$smarty = new Template();

$cliente = new Clientes();

if (isset($_POST['cli_email'])) {

    $cliente->setCli_email($_POST['cli_email']);

    if ($cliente->GetClienteEmail($cliente->getCli_email()) > 0) { 
        $novasenha = Sistema::GerarSenha();
        $cliente->SenhaUpdate($novasenha, $cliente->getCli_email());
        
        //Enviando E-mail para o cliente
        $email = new EnviarEmail();
        $assunto = 'Recuperação de Senha - ' . Config::SITE_NOME;
        $msg  = "Olá cliente, uma nova senha foi solicitada por você, acesse o site " . Config::SITE_NOME;
        $msg .= "<br> Nova senha = " . $novasenha;
        $destinatarios = array($cliente->getCli_email(), Config::SITE_EMAIL_ADM);
        $email->Enviar($assunto, $msg, $destinatarios);
    
        echo '<div class="alert alert-success alertAdd">E-mail enviado com sucesso</div>';
        Rotas::Redirecionar(2,Rotas::pag_Login());
    } else {
        echo '<div class="alert alert-danger alertAdd">E-mail não cadastrado</div>';
        Rotas::Redirecionar(2,Rotas::pag_ClienteRecovery());
    }
} else {
    $smarty->display('clientes_recovery.tpl');
}
