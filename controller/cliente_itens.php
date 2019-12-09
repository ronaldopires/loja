<?php

$smarty = new Template();

Login::MenuCliente();

if(!isset($_POST['cod_pedido'])){
    Rotas::Redirecionar(1,Rotas::pag_ClientePedidos());
    exit();
}
$itens = new Itens();
$pedido = filter_var($_POST['cod_pedido'],FILTER_SANITIZE_STRING);

$itens->GetItensPedido($pedido);
$smarty->assign('ITENS', $itens->GetItens());
$smarty->assign('TOTAL', $itens->GetTotal());

$smarty->display('cliente_itens.tpl');   



?>