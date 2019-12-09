<?php

if (isset($_SESSION['PRO'])) {
    

    $smarty = new Template();

    $carrinho = new Carrinho();

    $smarty->assign('PRO', $carrinho->GetCarrinho());
    $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
    $smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
    $smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
    $smarty->assign('PAG_CONFIRMAR', Rotas::pag_PedidoConfirmar());
    $smarty->assign('PESO', number_format($carrinho->GetPeso(), 3, '.', ''));
    
    
    $smarty->display('carrinho.tpl');
} else {
    Rotas::Redirecionar(2, Rotas::pag_Produtos());
    exit('<h4 class="alert alert-danger alertAdd">Não possui produtos no carrinho</h4>');
    
}
