<?php
$smarty = new Template();
$pedidos = new Pedidos();

if (isset($_POST['ped_apagar'])) {
    $ped_cod = $_POST['cod_pedido'];
    if ($pedidos->Apagar($ped_cod)) {
        echo '<div class="alert alert-danger alerta">Pedido excluído</div>';
    }
}

if (isset(Rotas::$pag[1])) {
    $id = Rotas::$pag[1];
    $pedidos->GetPedidosCliente($id);
} else if (isset($_POST['data_inicio']) and isset($_POST['data_fim'])) {
    $pedidos->GetPedidosData($_POST['data_inicio'], $_POST['data_fim']);
    
} else if (isset($_POST['txt_ref'])) {
    $ref = filter_var($_POST['txt_ref'], FILTER_SANITIZE_STRING);
    $pedidos->GetPedidosREF($ref);
}else{
    $pedidos->GetPedidosCliente();
}

$smarty->assign('PEDIDOS', $pedidos->GetItens());
$smarty->assign('PAGINAS', $pedidos->ShowPaginacao());
$smarty->assign('PAG_ITENS_ADM', Rotas::pag_ItensADM());

if ($pedidos->TotalDados() > 0) {
    $smarty->display('adm_pedidos.tpl');
} else {
    echo '<div class="alert alert-danger alerta">Nenhum pedido para esse cliente</div>';
    Rotas::Redirecionar(2, Rotas::pag_ClientesADM());
}
