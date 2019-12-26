<?php
$smarty = new Template();
$categorias = new Categorias();

$categorias->GetCategorias();
//Inserir categoria
if(isset($_POST['cate_nova'])){
    $cate_nome = $_POST['cate_nome'];
    if($categorias->Inserir($cate_nome)){
        echo '<div class="alert alert-success alerta">Categoria inserida com sucesso.</div>';
        Rotas::Redirecionar(2, Rotas::pag_CategoriasADM());
    }else{
        echo '<div class="alert alert-danger alerta">Erro ao inserir a categoria</div>';
        Rotas::Redirecionar(2, Rotas::pag_CategoriasADM());
    }
}
//Editar categoria
if(isset($_POST['cate_editar'])){
    $cate_id = $_POST['cate_id'];
    $cate_nome = $_POST['cate_nome'];
    if($categorias->Editar($cate_id, $cate_nome)){
        echo '<div class="alert alert-success alerta">Categoria editada com sucesso.</div>';
        Rotas::Redirecionar(2, Rotas::pag_CategoriasADM());
    }else{
        echo '<div class="alert alert-danger alerta">Erro ao editar a categoria</div>';
        Rotas::Redirecionar(2, Rotas::pag_CategoriasADM());
    }
}
//Deletar categoria
if(isset($_POST['cate_apagar'])){
    $cate_id = $_POST['cate_id'];
    if($categorias->Apagar($cate_id)){
        echo '<div class="alert alert-success alerta">Categoria excluída com sucesso.</div>';
        Rotas::Redirecionar(2, Rotas::pag_CategoriasADM());
    }else{
        echo '<div class="alert alert-danger alerta">Erro ao excluir a categoria</div>';
        Rotas::Redirecionar(4, Rotas::pag_CategoriasADM());
    }
}

$smarty->assign('CATEGORIAS', $categorias->GetItens());

$smarty->display('adm_categorias.tpl');

?>