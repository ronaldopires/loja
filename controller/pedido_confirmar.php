<?php

if (isset($_SESSION['PRO'])) {

    if (!isset($_POST['frete_radio'])) {
        Rotas::Redirecionar(2, Rotas::pag_Carrinho() . '#cep_frete');
        exit('<h4 class="alert alert-danger alertDel">Selecione uma opção de frete</h4>');
    }

    $smarty = new Template();

    $carrinho = new Carrinho();

    $smarty->assign('PRO', $carrinho->GetCarrinho());

    if(isset($_SESSION['CUPOM'])){
        
        $valor = $carrinho->GetTotal();
        $desconto = $_SESSION['CUPOM']['cupom_desconto'];
        $cupom_tipo = $_SESSION['CUPOM']['cupom_tipo'];
        $_SESSION['PED']['frete'] = $_POST['frete_radio'];

        switch($cupom_tipo){
            case 1:
                $_SESSION['PED']['total_com_frete'] = ($_POST['frete_radio'] + $valor - $desconto);
                break;
            case 2:
                $percent = $valor / 100 * $desconto;
                $total = $valor - $percent + $_POST['frete_radio'];
                $_SESSION['PED']['total_com_frete'] = $total;
            break;
        }
        $_SESSION['PED']['cupom_desconto'] = $desconto;
        $smarty->assign('TOTAL', Sistema::MoedaBR($valor));
        $smarty->assign('FRETE', Sistema::MoedaBR($_SESSION['PED']['frete']));
        $smarty->assign('TOTAL_FRETE', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));
        $smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
        $smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
        $smarty->assign('PAG_FINALIZAR', Rotas::pag_PedidoFinalizar());
        $smarty->assign('CUPOM', Sistema::MoedaBR($desconto));
    }else{

    $_SESSION['PED']['frete'] = $_POST['frete_radio'];
    $_SESSION['PED']['total_com_frete'] = ($_POST['frete_radio'] + $carrinho->GetTotal());

    $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
    $smarty->assign('FRETE', Sistema::MoedaBR($_SESSION['PED']['frete']));
    $smarty->assign('TOTAL_FRETE', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));
    $smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
    $smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
    $smarty->assign('PAG_FINALIZAR', Rotas::pag_PedidoFinalizar());
    $smarty->assign('CUPOM', );
    
    }
    $smarty->display('pedido_confirmar.tpl');
} else {
    echo '<h4 class="alert alert-danger alertDel">Não possui produtos no carrinho</h4>';
    Rotas::Redirecionar(1, Rotas::pag_Produtos());
}