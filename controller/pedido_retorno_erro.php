<?php

// chamando o objeto do template
$smarty = new Template();

// recebo o cod de referencia via URL
$ref = Rotas::$pag[1];

// passo variaveis para o template
$smarty->assign('REF', $ref);
$smarty->assign('PAG_ITENS', Rotas::pag_CLienteItens());
$smarty->assign('PAG_PEDIDOS', Rotas::pag_ClientePedidos());

// mostrando o template
$smarty->display('pedido_retorno_erro.tpl');

?>