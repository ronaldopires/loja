<?php


$smarty = new Template();

$produtos = new Produtos();

$categorias = new Categorias();
$categorias->GetCategorias();

if (isset(Rotas::$pag[1])) {
    $produtos->GetProdutosCateID(Rotas::$pag[1]);
} else {
    $produtos->GetProdutos3();
}
$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('TEMA', Rotas::get_SiteTEMA());
$smarty->display('home.tpl');



include_once Rotas::get_Pasta_Controller() . '/produtos.php';