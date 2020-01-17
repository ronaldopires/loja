<?php

$smarty = new Template();

$estoque = new Estoque();
$estoque->GetEstoque();

$produtos = new Estoque();
$produtos->GetProdutos();

$smarty->assign('PRO', $estoque->GetItens());

$smarty->assign('PAG_ADM_PRODUTOS_EDITAR', Rotas::pag_ProdutosEditarADM());
$smarty->assign('TOTAL', $produtos->TotalDados());

$smarty->display('adm_estoque.tpl');