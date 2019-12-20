<?php

class Tamanhos extends Conexao
{

    private $tamanho_nome, $tamanho_pro_id;

    function __construct()
    {
        parent::__construct();
    }

    function GetTamanhos()
    {
        //Query para buscar o tamanho dos produtos.
        $query = "SELECT * FROM {$this->prefix}tamanho";

        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    private function GetLista()
    {
        $i = 1;
        while ($lista = $this->ListarDados()) :
            $this->itens[$i] = array(
                'tamanho_nome' => $lista['tamanho_nome'],
                'tamanho_pro_id' => $lista['tamanho_pro_id']
            );
            $i++;
        endwhile;
    }

    //QUERY PARA INSERIR CATEGORIAS

    function Inserir($tamanho_nome)
    {
        // trato os campos
        $this->setTamanho_nome($tamanho_nome);
        $this->setTamanho_pro_id($tamanho_pro_id);

        // monto a SQL
        $query = " INSERT INTO {$this->prefix}tamanho (tamanho_nome, tamanho_pro_id )";
        $query .= " VALUES (:tamanho_nome, :tamanho_pro_id )";
        // passo so parametros
        $params = array(
            ':tamanho_nome' => $this->getTamanho_nome(),
            ':tamanho_pro_id' => $this->getTamanho_pro_id(),
        );
        // executo a minha SQL
        if ($this->ExecuteSQL($query, $params)) :
            return TRUE;
        else :
            return FALSE;
        endif;
    }

    //MÉTODOS GET E SET CATEGORIAS


    function getTamanho_nome()
    {
        return $this->tamanho_nome;
    }

    function getTamanho_pro_id()
    {
        return $this->tamanho_pro_id;
    }

    function setTamanho_nome($tamanho_nome)
    {

        $this->tamanho_nome = $tamanho_nome;
    }

    function setTamanho_pro_id($tamanho_pro_id)
    {
        $this->tamanho_pro_id = $tamanho_pro_id;
    }
}
