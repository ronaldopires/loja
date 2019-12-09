<?php
$smarty = new Template();

$produtos = new Produtos();

if (isset(Rotas::$pag[1])) {
    $produtos->GetProdutosCateID(Rotas::$pag[1]);
} else {
    $produtos->GetProdutos();
}
$categorias = new Categorias();
$categorias->GetCategorias();

$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
$smarty->assign('PAGINAS', $produtos->ShowPaginacao());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());



$smarty->display('produtos.tpl');