<?php

$smarty = new Template();

$smarty->assign('TEMA', Rotas::get_SiteADM());

$smarty->display('adm_home.tpl');