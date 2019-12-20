<?php
$smarty = new Template();

$pro_id = (int) $_POST['pro_id'];
if (isset($_POST['pro_id']) && isset($_FILES['pro_img']['name'])) {

    if (!empty($_FILES['pro_img']['name'])) {
        $upload = new ImageUpload();
        $upload->Upload(1200, 'pro_img');
        $pro_img = $upload->retorno;

        $gravar = new ProdutosImages();
        $gravar->Insert($pro_img, $pro_id);
    }
}
$img = new ProdutosImages($pro_id);
$img->GetImagesPRO($_POST['pro_id']);

$produtos = new Produtos();
$produtos->GetProdutosID2($pro_id);

//$img_atual = $_POST['pro_img'];
$smarty->assign('PRODUTOS', $produtos->GetItens());
$smarty->assign('IMAGES', $img->GetItens());
$smarty->assign('PRO', $pro_id);

var_dump($produtos);
//$smarty->assign('IMAGEM_ATUAL', $img_atual);

$smarty->display('adm_produtos_img.tpl');