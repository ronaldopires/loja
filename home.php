<?php


$smarty = new Template();
$smarty->display('home.tpl');
$smarty->assign('TEMA', Rotas::get_SiteTEMA());



include_once Rotas::get_Pasta_Controller() . '/produtos.php';