<?php
date_default_timezone_set('America/Sao_Paulo');

if (!isset($_SESSION)) {
    session_start();
}

require '../lib/autoload.php';

if (!Login::LogadoADM()) {
    Rotas::Redirecionar(2, Rotas::pag_Login());
    exit('<body style="background-color: #ff2222"><div style="color: #fff; text-align: center; paddinng-top: 400px;"><h1 style="padding-top: 50vh;">Erro! Acesso negado </h1></div></body>');
}

$smarty = new Template();
$categorias = new Categorias();
$categorias->GetCategorias();

// valores para template
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_SITE_ADM', Rotas::get_SiteADM());
$smarty->assign('PAG_ADM_CLIENTE', Rotas::pag_ClientesADM());
$smarty->assign('PAG_ADM_CLIENTE_EDITAR', Rotas::pag_ClientesEditarADM());
$smarty->assign('PAG_ADM_PEDIDOS', Rotas::pag_PedidosADM());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_CATEGORIAS', Rotas::pag_CategoriasADM());
$smarty->assign('PAG_ADM_PRODUTOS', Rotas::pag_ProdutosADM());
$smarty->assign('PAG_ADM_ESTOQUE', Rotas::pag_EstoqueADM());
$smarty->assign('PAG_CUPONS', Rotas::pag_CuponsADM());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('LOGADO', Login::LogadoADM());
$smarty->assign('PAG_LOGOFF', Rotas::get_SiteADM() . '/adm_logoff');
$smarty->assign('PAG_SENHA', Rotas::get_SiteADM() . '/adm_senha');

if (Login::LogadoADM()) {
    $smarty->assign('USER', $_SESSION['ADM']['user_nome']);
    $smarty->assign('DATA', $_SESSION['ADM']['user_data']);
    $smarty->assign('HORA', $_SESSION['ADM']['user_hora']);
    $smarty->assign('ID', $_SESSION['ADM']['user_id']);
}
$smarty->display('adm_index.tpl');