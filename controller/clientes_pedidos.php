<?php

$smarty = new Template();

Login::MenuCliente();

$pedidos = new Pedidos();

$pedidos->GetPedidosCliente($_SESSION['CLI']['cli_id']);

$smarty->assign('PEDIDOS', $pedidos->GetItens());
$smarty->assign('PAG_ITENS', Rotas::pag_clienteItens());


$smarty->display('clientes_pedidos.tpl');   



?>