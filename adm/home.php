<?php

$smarty = new Template();
$clientes = new Clientes();
$clientes->GetClientesMonth();

$pedidos = new Pedidos();
$pedidos->GetPedidos();
$pedidos_concluido = new Pedidos();
$pedidos_concluido->GetPedidosConcluidos();



$smarty->assign('CLIENTES', $clientes->TotalDados());
$smarty->assign('PEDIDOS', $pedidos->TotalDados());
$smarty->assign('PEDIDOS_CONCLUIDOS', $pedidos_concluido->TotalDados());
$smarty->assign('ANO_ATUAL', Sistema::AnoAtual());

$smarty->assign('TEMA', Rotas::get_SiteADM());

$smarty->display('adm_home.tpl');