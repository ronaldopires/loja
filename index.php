<?php
date_default_timezone_set('America/Sao_Paulo');
require './lib/autoload.php';

if (!isset($_SESSION)) {
    session_start();
}

if(isset($_SESSION['CLI'])){
    if((time() - $_SESSION['time_last']) > 600){
        Rotas::Redirecionar(2, Rotas::pag_Logoff());
    }else{
        $_SESSION['last_time'] = time();
    }
}


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
$smarty->assign('PAG_MEU_PERFIL', Rotas::pag_MeuPerfil());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
$smarty->assign('LOGADO', Login::Logado());

if (Login::Logado()) {
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
}
$smarty->assign('QTD', '');

if (isset($_SESSION['PRO'])) {
    $total = 0;
    $carrinho = new Carrinho();
    $itens = $carrinho->GetCarrinho();
    foreach ($_SESSION['PRO'] as $lista) {
        $qtd = $lista['QTD'];

        $total = $total + $qtd;
    }

    $smarty->assign('QTD', $total);

}

$smarty->display('index.tpl');