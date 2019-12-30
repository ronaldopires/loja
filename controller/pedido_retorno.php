<?php
$smarty = new Template();

/// chamando a classe de pagamento 
$pag = new PagamentoPS();

// recebe notificação automática
$pag->Nofificacao();


// verifico se tem um COD REF na URL, se não tiver não mostro nada
if(isset(Rotas::$pag[1]) ):

// pegando a rota com o cod referencia GET
$ref = Rotas::$pag[1];

// pega a transação por REF apos ter efetuado a compra
$pag->BuscarTransacaoREF($ref);

// passo variaveis  para o template 
$smarty->assign('PAGO',      $pag->info['pago']);
$smarty->assign('CODIGO',    $pag->info['codigo']);
$smarty->assign('REF',       $pag->info['referencia']);
$smarty->assign('FORMA_PAG', $pag->info['forma_pag']);
$smarty->assign('PAG_ITENS', Rotas::pag_CLienteItens());



$smarty->display('pedido_retorno.tpl');

else:
    
    echo '<div class="alert alert-danger">Sem transações  para informar </div>';
    
endif;

?>