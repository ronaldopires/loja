<?php
$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutosID(Rotas::$pag[1]);

$image = new ProdutosImages();
$image->GetImagesPRO(Rotas::$pag[1]);

$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('TEMA', Rotas::get_SiteTEMA());
$smarty->assign('IMAGES', $image->GetItens());
$smarty->assign('PAG_COMPRAR', Rotas::pag_CarrinhoAlterar());


/* $ID = Rotas::$pag[1];
foreach ($produtos->GetItens() as $pro) {
    $_SESSION['PRO'][$ID]['ID']  = $pro['pro_id'];
    $_SESSION['PRO'][$ID]['NOME'] = $pro['pro_nome'];
    $_SESSION['PRO'][$ID]['VALOR'] = $pro['pro_valor'];
    $_SESSION['PRO'][$ID]['VALOR_US'] = $pro['pro_valor_us'];
    $_SESSION['PRO'][$ID]['PESO'] = $pro['pro_peso'];
    $_SESSION['PRO'][$ID]['QTD'] = 1;
    $_SESSION['PRO'][$ID]['IMG'] = $pro['pro_img_p'];
    $_SESSION['PRO'][$ID]['LINK'] = 'sssslink';
    $ID++;
} */

$smarty->display('produtos_info.tpl');