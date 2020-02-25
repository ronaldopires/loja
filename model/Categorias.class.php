<?php

class Categorias extends Conexao
{

    private $cate_id, $cate_nome, $cate_slug;

    public function __construct()
    {
        parent::__construct();
    }

    public function GetCategorias()
    {
        //Query para buscar os produtos de uma categoria especifica.
        $query = "SELECT * FROM {$this->prefix}categorias";
        $query .= " ORDER BY cate_nome";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    public function GetCategoriasHome()
    {
        //Query para buscar os produtos de uma categoria especifica.
        $query = "SELECT * FROM {$this->prefix}categorias";
        $query .= " ORDER BY cate_nome ";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    private function GetLista()
    {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'cate_id' => $lista['cate_id'],
                'cate_nome' => $lista['cate_nome'],
                'cate_slug' => $lista['cate_slug'],
                'cate_img' => Rotas::ImageLink($lista['cate_img'], 150, 150),
                'cate_link' => Rotas::pag_Produtos() . '/' . $lista['cate_id'] . '/' . $lista['cate_slug'],
                'cate_link_adm' => Rotas::pag_ProdutosADM() . '/' . $lista['cate_id'] . '/' . $lista['cate_slug'],
            );
            $i++;
        endwhile;
    }

    //QUERY PARA INSERIR CATEGORIAS

    public function Inserir($cate_nome)
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
        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;
    }

    //EDITAR CATEGORIAS
    public function Editar($cate_id, $cate_nome)
    {

        // trato os campos
        $this->setCate_nome($cate_nome);
        $this->setCate_slug($cate_nome);

        // monto a SQL
        $query = " UPDATE {$this->prefix}categorias ";
        $query .= " SET cate_nome = :cate_nome, cate_slug = :cate_slug ";
        $query .= " WHERE cate_id = :cate_id ";
        // passo so parametros
        $params = array(
            ':cate_nome' => $this->getCate_nome(),
            ':cate_slug' => $this->getCate_slug(),
            ':cate_id' => (int) $cate_id,
        );
        // executo a minha SQL
        if ($this->ExecuteSQL($query, $params)):
            return true;

        else:
            return false;

        endif;
    }

    //FUNÇÃO APAGAR CATEGORIAS
    public function Apagar($cate_id)
    {

        // verifico se  tenho itens antes de apagar a categoria
        $pro = new Produtos();
        $pro->GetProdutosCateID($cate_id);

        if ($pro->TotalDados() > 0):
            echo '<div class="alert alert-danger text-center"> Esta categoria tem: ';
            echo $pro->TotalDados();
            echo ' produtos. Você precisa apagar os produtos da categoria primeiro.</div>';

            // se nao tiver produtos nela  eu apago
        else:

            // monto a SQL
            $query = " DELETE FROM {$this->prefix}categorias";
            $query .= " WHERE cate_id = :id";

            // passo os parametros
            $params = array(':id' => (int) $cate_id);
            // executo a SQL

            if ($this->ExecuteSQL($query, $params)):
                return true;

            else:
                return false;

            endif;

        endif;
    }

    //MÉTODOS GET E SET CATEGORIAS

    public function getCate_nome()
    {
        return $this->cate_nome;
    }

    public function getCate_slug()
    {
        return $this->cate_slug;
    }

    public function setCate_nome($cate_nome)
    {

        $this->cate_nome = filter_var($cate_nome, FILTER_SANITIZE_STRING);
    }

    public function setCate_slug($cate_slug)
    {
        $this->cate_slug = Sistema::GetSlug($cate_slug);
    }
}