<?php
$smarty = new Template();
$login = new Login();

if (isset($_POST['inputemail']) && isset($_POST['inputsenha'])) {
    $user = $_POST['inputemail'];
    $senha = $_POST['inputsenha'];
    //Provisório
    if ($login->GetLoginADM($user, $senha)) {
        Rotas::Redirecionar(0, Rotas::get_SiteADM());
    } else {
        $login->GetLogin($user, $senha);
        if (isset($_SESSION['PRO'])) {
            Rotas::Redirecionar(0, Rotas::pag_Carrinho());
        } else {
            Rotas::Redirecionar(0, Rotas::pag_MeuPerfil());
        }
    }
}

$smarty->assign('USER', '');
// Verifica se está logado
if (Login::Logado()) {
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
    $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
}
//
$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_CADASTRO', Rotas::pag_ClienteCadastro());
$smarty->assign('PAG_RECOVERY', Rotas::pag_ClienteRecovery());

$smarty->display('login.tpl');