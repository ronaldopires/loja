<?php
$smarty = new Template();
$categorias = new Categorias();

$categorias->GetCategorias();

$smarty->assign('CATEGORIAS', $categorias->GetItens());

$smarty->display('adm_categorias.tpl');

?>