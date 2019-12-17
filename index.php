<?php
date_default_timezone_set('America/Sao_Paulo');

if (!isset($_SESSION)) {
    session_start();
}
/* if (!isset($_SESSION['PED']['pedido'])) {
    $_SESSION['pedido'] = md5(uniqid(date('YmdHms')));
}
if (!isset($_SESSION['PED']['ref'])) {
    $_SESSION['pedido'] = date('ymdHms');
} */
require './lib/autoload.php';

$smarty = new Template();
$categorias = new Categorias();
$categorias->GetCategorias();

// valores para template


$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_SOBRE', Rotas::pag_Sobre());
$smarty->assign('PAG_LOGIN', Rotas::pag_Login());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_MINHA_CONTA', Rotas::pag_MinhaConta());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
$smarty->assign('LOGADO', Login::Logado());


if(Login::Logado()){
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
}


$smarty->display('index.tpl');