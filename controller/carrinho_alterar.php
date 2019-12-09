<?php

if (!isset($_POST['pro_id']) or $_POST['pro_id'] < 1) {
    Rotas::Redirecionar(1, Rotas::pag_Carrinho());
    exit('<h4 class="alert alert-danger alertAdd">Erro na operação</h4>');
}

$id = (int) $_POST['pro_id'];

$carrinho = new Carrinho();

try {
    $carrinho->CarrinhoADD($id);
} catch (Exception $e) {
    exit ('<h4 class="alert alert-danger alertAdd">Erro na operação</h4>');
}


Rotas::Redirecionar(1, Rotas::pag_Carrinho());