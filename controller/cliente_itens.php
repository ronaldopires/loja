<?php

$smarty = new Template();

Login::MenuCliente();

if (!isset($_POST['cod_pedido'])) {
    Rotas::Redirecionar(1, Rotas::pag_ClientePedidos());
    exit();
}
$itens = new Itens();
$pedido = filter_var($_POST['cod_pedido'], FILTER_SANITIZE_STRING);

$itens->GetItensPedido($pedido);
$smarty->assign('ITENS', $itens->GetItens());
$smarty->assign('TOTAL', $itens->GetTotal());
$smarty->assign('TEMA', Rotas::get_SiteTEMA());


// caso o status do pagamento for Não Processado, mostra novamente o botão de pagar
if ($itens->GetItens()[1]['ped_pag_status'] == 'Não concluido'):

    // PAGAMENTO PS --------------------------

    $pag = new PagamentoPS();

    $pag->PagamentoITENS($_SESSION['CLI'], $itens->GetItens()[1], $itens->GetItens());

    // passando para o template dados do PS
    $smarty->assign('PS_URL', $pag->psURL);
    $smarty->assign('PS_COD', $pag->psCod);
    $smarty->assign('PS_SCRIPT', $pag->psURL_Script);
    $smarty->assign('REF', $pedido);
    $smarty->assign('PAG_RETORNO', Rotas::pag_PedidoRetorno());
    $smarty->assign('PAG_ERRO', Rotas::pag_PedidoRetornoERRO());
    $smarty->assign('TEMA', Rotas::get_SiteTEMA());

/// fim do pagamento

endif;

$smarty->display('cliente_itens.tpl');