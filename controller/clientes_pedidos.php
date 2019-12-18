<?php

$smarty = new Template();

Login::MenuCliente();

$pedidos = new Pedidos();

$pedidos->GetPedidosCliente($_SESSION['CLI']['cli_id']);

$smarty->assign('PEDIDOS', $pedidos->GetItens());
$smarty->assign('PEDIDOS_TOTAL', $pedidos->TotalDados());
$smarty->assign('PAG_ITENS', Rotas::pag_ClienteItens());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAGINAS', $pedidos->ShowPaginacao());

$smarty->display('clientes_pedidos.tpl');