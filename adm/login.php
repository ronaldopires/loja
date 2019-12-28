<?php
date_default_timezone_set('America/Sao_Paulo');

if (!isset($_SESSION)) {
    session_start();
}

require '../lib/autoload.php';

$smarty = new Template();

if(isset($_POST['inputemail']) and isset($_POST['inputsenha'])){
    $user = $_POST['inputemail'];
    $senha = $_POST['inputsenha'];
    $login = new Login();
    if($login->GetLoginADM($user, $senha)){
        
    }
}


$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->display('adm_login.tpl');


?>