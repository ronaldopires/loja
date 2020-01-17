<?php

class Estoque extends Conexao
{

    private $pro_id, $pro_nome, $pro_valor, $pro_estoque;

    public function __construct()
    {
        parent::__construct();
    }

    public function GetProdutos()
    {
        //Query para buscar os cupons da tabela.
        $query = "SELECT * FROM {$this->prefix}produtos ";

        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    public function GetEstoque()
    {
        //Query para buscar o estoque da tabela produtos.
        $query = "SELECT * FROM {$this->prefix}produtos ";

        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    private function GetLista()
    {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'pro_id' => $lista['pro_id'],
                'pro_nome' => $lista['pro_nome'],
                'pro_estoque' => $lista['pro_estoque'],
            );
            $i++;
        endwhile;
    }

    public function AtualizarEstoque($pro_id, $pro_estoque)
    {

        //Query que atualiza o campo do estoque
        $query = " UPDATE {$this->prefix}produtos SET pro_estoque = :pro_estoque WHERE pro_id = :pro_id";
        $params = array(
            ':pro_id' => (int) $pro_id,
            ':pro_estoque' => $pro_estoque,
        );
        //executo a SQL
        echo $query;
        $this->ExecuteSQL($query, $params);
    }

    /* private function setPro_nome($pro_nome)
{
$this->pro_nome = $pro_nome;
}
private function setPro_valor($pro_valor)
{
$this->pro_valor = $pro_valor;
}
private function setPro_estoque($pro_estoque)
{
$this->pro_estoque = $pro_estoque;
}

public function getPro_nome()
{
return $this->pro_nome;
}
public function getPro_valor()
{
return $this->pro_valor;
}
public function getPro_estoque()
{
return $this->pro_estoque;
} */

}