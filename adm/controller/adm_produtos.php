<?php
$smarty = new Template();
$gravar = new Produtos();
$produtos = new Produtos();

if (isset(Rotas::$pag[1])) {
    $produtos->GetProdutosCateID(Rotas::$pag[1]);
} else {
    $produtos->GetProdutos2();
}
$categorias = new Categorias();
$categorias->GetCategorias();

$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
$smarty->assign('PAGINAS', $produtos->ShowPaginacao());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('PAG_PRODUTOS_NOVO', Rotas::pag_ProdutosNovoADM());
$smarty->assign('PAG_PRODUTOS_EDITAR', Rotas::pag_ProdutosEditarADM());
$smarty->assign('PAG_PRODUTOS_IMG', Rotas::pag_ProdutosImgADM());

if (isset($_POST['pro_id_apagar'])) {
    if ($gravar->Apagar($_POST['pro_id_apagar'])) {
        echo '<div class="alert alert-success alerta">Produto deletado </div>';
        @unlink($_POST['pro_img_arquivo']);
        Rotas::Redirecionar(2, Rotas::pag_ProdutosADM());
        exit();
    } else {
        echo '<div class="alert alert-danger alerta">Erro ao excluir o produto </div>';
        exit();
    }
}

$smarty->display('adm_produtos.tpl');