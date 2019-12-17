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
require '../lib/autoload.php';

$smarty = new Template();
$categorias = new Categorias();
$categorias->GetCategorias();

// valores para template
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_SITE_ADM', Rotas::get_SiteADM());
$smarty->assign('PAG_ADM_CLIENTE', Rotas::pag_ClientesADM());
$smarty->assign('PAG_ADM_PEDIDOS', Rotas::pag_PedidosADM());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_CATEGORIAS', Rotas::pag_CategoriasADM());
$smarty->assign('PAG_ADM_PRODUTOS', Rotas::pag_ProdutosADM());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('LOGADO', Login::Logado());
//$smarty->assign('PAG_LOGOFF', Rotas::get_SiteADM() . '/logoff');
//$smarty->assign('PAG_SENHA', Rotas::get_SiteADM() . '/adm_senha');

if (Login::Logado()) {
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
}

$smarty->display('adm_index.tpl');