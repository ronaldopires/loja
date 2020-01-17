<?php

$smarty = new Template();

Login::MenuCliente();
if (Login::Logado()) {
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
}

$smarty->display('meu_perfil.tpl');