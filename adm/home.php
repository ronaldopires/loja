<?php

$smarty = new Template();
$clientes = new Clientes();
$clientes->GetClientes();

$smarty->assign('CLIENTES', $clientes->TotalDados());
$smarty->assign('ANO_ATUAL', Sistema::AnoAtual());

$smarty->assign('TEMA', Rotas::get_SiteADM());

$smarty->display('adm_home.tpl');