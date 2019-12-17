<?php

$smarty = new Template();
$smarty->display('adm_home.tpl');
$smarty->assign('TEMA', Rotas::get_SiteTEMA());