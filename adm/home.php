<?php
header("Refresh:20");

$smarty = new Template();

$clientes = new Clientes();

$dados = array();

for($i = 1; $i <= 12; $i++){
    //Executa a função que contém a query select passando o parâmetro mês em $i
    $clientes->GetClientesMonth($i);
    //insere dados no array
    $new = array_push($dados, $clientes->TotalDados());
    //Separa cada resultado por ,
    $resultado = implode(",", $dados);
}

$pedidos = new Pedidos();
$pedidos->GetPedidos();
$pedidos_concluido = new Pedidos();
$pedidos_concluido->GetPedidosConcluidos();

$smarty->assign('CLIENTES', $resultado);
$smarty->assign('PEDIDOS', $pedidos->TotalDados());
$smarty->assign('PEDIDOS_CONCLUIDOS', $pedidos_concluido->TotalDados());
$smarty->assign('ANO_ATUAL', Sistema::AnoAtual());
$smarty->assign('TEMA', Rotas::get_SiteADM());

$smarty->display('adm_home.tpl');