<?php
$smarty = new Template();

$produtos = new Produtos();

if (isset(Rotas::$pag[1])) {
    $produtos->GetProdutosID(Rotas::$pag[1]);
} else {
    $produtos->GetProdutos2();
}
$categorias = new Categorias();
$categorias->GetCategorias();

$tamanho = new Tamanhos();
$tamanho-> GetTamanhos();

$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
$smarty->assign('PAGINAS', $produtos->ShowPaginacao());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('PAG_PRODUTOS_NOVO', Rotas::pag_ProdutosNovoADM());
$smarty->assign('PAG_PRODUTOS_EDITAR', Rotas::pag_ProdutosEditarADM());
$smarty->assign('PAG_PRODUTOS_IMG', Rotas::pag_ProdutosImgADM());

$smarty->display('adm_produtos.tpl');

