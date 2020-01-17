<?php
date_default_timezone_set('America/Sao_Paulo');

if (isset($_SESSION['PRO'])) {

    $smarty = new Template();
    $cupons = new Cupons();
    $carrinho = new Carrinho();

    $smarty->assign('PRO', $carrinho->GetCarrinho());
    $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
    $smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
    $smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
    $smarty->assign('PAG_CONFIRMAR', Rotas::pag_PedidoConfirmar());
    $smarty->assign('PESO', number_format($carrinho->GetPeso(), 3, '.', ''));
    $smarty->assign('SALE', false);

    $valor = $carrinho->GetTotal();
    //$desconto = $_SESSION['CUPOM']['cupom_desconto'];

    /* if (isset($_SESSION['CUPOM']) or isset($_POST['cupom_nome'])) {
    $total = $valor - $_SESSION['CUPOM']['cupom_desconto'];

    $smarty->assign('SALE', true);
    $smarty->assign('CUPOM', $_SESSION['CUPOM']['cupom_desconto']);
    $smarty->assign('DESCONTO', $total);
    echo 'tem sessão de Cupom';
    //unset($_SESSION['CUPOM']);
    } else {
    echo 'Não tem sessão de cupom';
    $smarty->assign('SALE', '');
    } */

    if (isset($_POST['cupom_nome'])) {
        echo 'tem post';

        /* $cupom_nome = $_POST['cupom_nome'];
        $data_inicio = $_SESSION['CUPOM']['cupom_inicial'];
        $data_final = $_SESSION['CUPOM']['cupom_final'];
        $data_atual = date('Y-m-d H:i:s');

        if ($cupons->GetCuponsNome($cupom_nome)) {

        if ($data_inicio <= $data_atual and $data_final >= $data_atual) {

        if ($_SESSION['CUPOM']['cupom_tipo'] == 1) {

        $smarty->assign('CUPOM', $desconto);
        $smarty->assign('DESCONTO', Sistema::MoedaBR($total));
        echo '<h4 class="alert alert-success alertAdd">Cupom aplicado com sucesso.</h4>';

        } /* else if ($_SESSION['CUPOM']['cupom_tipo'] == 2) {
        $valor = $carrinho->GetTotal();
        $desconto = $_SESSION['CUPOM']['cupom_desconto'];

        $percent = $valor / 100 * $desconto;
        $total = $valor - $percent;
        $smarty->assign('CUPOM', $desconto);
        $smarty->assign('DESCONTO', $total);
        echo '<h4 class="alert alert-success alertAdd">Cupom aplicado com sucesso.</h4>';

        }
        } else {
        echo '<h4 class="alert alert-danger alertAdd">Cupom expirado.</h4>';
        }
        } else {
        echo '<h4 class="alert alert-danger alertAdd">Cupom inválido.</h4>';
        }
         */
        //var_dump($_SESSION['CUPOM']);
    }
    $smarty->display('carrinho.tpl');

} else {
    Rotas::Redirecionar(2, Rotas::pag_Produtos());
    exit('<h4 class="alert alert-danger alertAdd">Não possui produtos no carrinho</h4>');

}