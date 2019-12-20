<?php

class Categorias extends Conexao
{

    private $cate_id, $cate_nome, $cate_slug;

    function __construct()
    {
        parent::__construct();
    }

    function GetCategorias()
    {
        //Query para buscar os produtos de uma categoria especifica.
        $query = "SELECT * FROM {$this->prefix}categorias";

        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    private function GetLista()
    {
        $i = 1;
        while ($lista = $this->ListarDados()) :
            $this->itens[$i] = array(
                'cate_id' => $lista['cate_id'],
                'cate_nome' => $lista['cate_nome'],
                'cate_slug' => $lista['cate_slug'],
                'cate_link' => Rotas::pag_Produtos() . '/' . $lista['cate_id'] . '/' . $lista['cate_slug'],
            );
            $i++;
        endwhile;
    }

    //QUERY PARA INSERIR CATEGORIAS

    function Inserir($cate_nome)
    {
        // trato os campos
        $this->setCate_nome($cate_nome);
        $this->setCate_slug($cate_nome);

        // monto a SQL
        $query = " INSERT INTO {$this->prefix}categorias (cate_nome, cate_slug )";
        $query .= " VALUES (:cate_nome, :cate_slug )";
        // passo so parametros
        $params = array(
            ':cate_nome' => $this->getCate_nome(),
            ':cate_slug' => $this->getCate_slug(),
        );
        // executo a minha SQL
        if ($this->ExecuteSQL($query, $params)) :
            return TRUE;
        else :
            return FALSE;
        endif;
    }

    //MÉTODOS GET E SET CATEGORIAS


    function getCate_nome()
    {
        return $this->cate_nome;
    }

    function getCate_slug()
    {
        return $this->cate_slug;
    }

    function setCate_nome($cate_nome)
    {

        $this->cate_nome = filter_var($cate_nome, FILTER_SANITIZE_STRING);
    }

    function setCate_slug($cate_slug)
    {
        $this->cate_slug = Sistema::GetSlug($cate_slug);
    }
}
