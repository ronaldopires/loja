<?php
$smarty = new Template();

$cupons = new Cupons();
$cupons->GetCupons();
//INSERIR CUPOM
if (isset($_POST['cupom_nome_novo']) and isset($_POST['cupom_desconto_novo']) and isset($_POST['cupom_inicial_novo']) and isset($_POST['cupom_final_novo']) and isset($_POST['cupom_tipo_novo']) and isset($_POST['cupom_qtd_novo'])) {

    $cupom_nome = $_POST['cupom_nome_novo'];
    $cupom_desconto = $_POST['cupom_desconto_novo'];
    $cupom_inicial = $_POST['cupom_inicial_novo'];
    $cupom_final = $_POST['cupom_final_novo'];
    $cupom_tipo = $_POST['cupom_tipo_novo'];
    $cupom_qtd = $_POST['cupom_qtd_novo'];

    if ($cupons->Inserir($cupom_nome, $cupom_desconto, $cupom_inicial, $cupom_final, $cupom_tipo, $cupom_qtd)) {
        echo '<div class="alert alert-success alerta">Cupom inserido com sucesso.</div>';
        Rotas::Redirecionar(2, Rotas::pag_CuponsADM());
        exit();
    } else {
        echo '<div class="alert alert-danger alerta">Erro ao inserir cupom</div>';
        Rotas::Redirecionar(2, Rotas::pag_CuponsADM());
        exit();
    }

}
//EDITAR CUPOM
if (isset($_POST['cupom_editar'])) {
    $cupom_id = $_POST['cupom_id'];
    $cupom_nome = $_POST['cupom_nome'];
    $cupom_desconto = $_POST['cupom_desconto'];
    $cupom_inicial = $_POST['cupom_inicial'];
    $cupom_final = $_POST['cupom_final'];
    $cupom_tipo = $_POST['cupom_tipo'];
    $cupom_qtd = $_POST['cupom_qtd'];

    if ($cupons->Editar($cupom_id, $cupom_nome, $cupom_desconto, $cupom_inicial, $cupom_final, $cupom_tipo, $cupom_qtd)) {
        echo '<div class="alert alert-success alerta">Cupom editado com sucesso.</div>';
        Rotas::Redirecionar(2, Rotas::pag_CuponsADM());
    } else {
        echo '<div class="alert alert-danger alerta">Erro ao editar a categoria</div>';
        Rotas::Redirecionar(2, Rotas::pag_CuponsADM());
    }
}
//EXCLUIR CUPOM
if (isset($_POST['cupom_apagar'])) {
    $cupom_id = $_POST['cupom_id'];
    if ($cupons->Apagar($cupom_id)) {
        echo '<div class="alert alert-success alerta">Cupom excluído com sucesso.</div>';
        Rotas::Redirecionar(2, Rotas::pag_CuponsADM());
    } else {
        echo '<div class="alert alert-danger alerta">Erro ao excluir cupom</div>';
        Rotas::Redirecionar(2, Rotas::pag_CuponsADM());
    }
}

if(!$cupons->GetItens()){
    $smarty->assign('SEM_CUPONS', true);
}
$smarty->assign('SEM_CUPONS', '');
$smarty->assign('CUPONS', $cupons->GetItens());
$smarty->display('adm_cupons.tpl');