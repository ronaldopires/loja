<?php

class Cupons extends Conexao
{

    private $cupom_id, $cupom_nome, $cupom_desconto, $cupom_inicial, $cupom_final, $cupom_tipo, $cupom_qtd;
    public function __construct()
    {
        parent::__construct();
    }

    public function GetCupons()
    {
        //Query para buscar os cupons da tabela.
        $query = "SELECT * FROM {$this->prefix}cupons ORDER BY cupom_id DESC";

        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    private function GetLista()
    {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'cupom_id' => $lista['cupom_id'],
                'cupom_nome' => $lista['cupom_nome'],
                'cupom_desconto' => $lista['cupom_desconto'],
                'cupom_inicial' => $lista['cupom_inicial'],
                'cupom_final' => $lista['cupom_final'],
                'cupom_tipo' => $lista['cupom_tipo'],
                'cupom_qtd' => $lista['cupom_qtd'],

            );
            $i++;
        endwhile;
    }

    public function GetCuponsNome($cupom_nome)
    {
        $this->setCupom_nome($cupom_nome);

        $query = " SELECT * FROM {$this->prefix}cupons WHERE cupom_nome = :cupom";
        $params = array(
            ':cupom' => $this->getCupom_nome(),
        );

        $this->ExecuteSQL($query, $params);

        $this->GetItens();

        if ($this->TotalDados() > 0):
            $lista = $this->ListarDados();
            // Cria uma sessão com os dados do Cupom para teste
            $_SESSION['CUPOM']['cupom_nome'] = $lista['cupom_nome'];
            $_SESSION['CUPOM']['cupom_desconto'] = $lista['cupom_desconto'];
            $_SESSION['CUPOM']['cupom_inicial'] = $lista['cupom_inicial'];
            $_SESSION['CUPOM']['cupom_final'] = $lista['cupom_final'];
            $_SESSION['CUPOM']['cupom_tipo'] = $lista['cupom_tipo'];
            $_SESSION['CUPOM']['cupom_qtd'] = $lista['cupom_qtd'];

            return true;

        else:
            return false;

        endif;
    }

    //Inserir cupons
    public function Inserir($cupom_nome, $cupom_desconto, $cupom_inicial, $cupom_final, $cupom_tipo, $cupom_qtd)
    {
        // trato os campos
        $this->setCupom_nome($cupom_nome);
        $this->setCupom_desconto($cupom_desconto);
        $this->setCupom_inicial($cupom_inicial);
        $this->setCupom_final($cupom_final);
        $this->setCupom_tipo($cupom_tipo);
        $this->setCupom_qtd($cupom_qtd);

        // monto a SQL
        $query = " INSERT INTO {$this->prefix}cupons (cupom_nome, cupom_desconto, cupom_inicial, cupom_final, cupom_tipo, cupom_qtd )";
        $query .= " VALUES (:cupom_nome, :cupom_desconto, :cupom_inicial, :cupom_final, :cupom_tipo, :cupom_qtd )";
        // passo so parametros
        $params = array(
            ':cupom_nome' => $this->getCupom_nome(),
            ':cupom_desconto' => $this->getCupom_desconto(),
            ':cupom_inicial' => $this->getCupom_inicial(),
            ':cupom_final' => $this->getCupom_final(),
            ':cupom_tipo' => $this->getCupom_tipo(),
            ':cupom_qtd' => $this->getCupom_qtd(),
        );
        
        // executo a minha SQL
        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;
    }

    //EDITAR CUPONS
    public function Editar($cupom_id, $cupom_nome, $cupom_desconto, $cupom_inicial, $cupom_final, $cupom_tipo, $cupom_qtd)
    {

        // trato os campos
        $this->setCupom_nome($cupom_nome);
        $this->setCupom_desconto($cupom_desconto);
        $this->setCupom_inicial($cupom_inicial);
        $this->setCupom_final($cupom_final);
        $this->setCupom_tipo($cupom_tipo);
        $this->setCupom_qtd($cupom_qtd);

        // monto a SQL
        $query = " UPDATE {$this->prefix}cupons ";
        $query .= " SET cupom_nome = :cupom_nome, cupom_desconto = :cupom_desconto, cupom_inicial = :cupom_inicial, cupom_final = :cupom_final, cupom_tipo = :cupom_tipo, cupom_qtd = :cupom_qtd ";
        $query .= " WHERE cupom_id = :cupom_id ";

        // passo so parametros
        $params = array(
            ':cupom_id' => (int) $cupom_id,
            ':cupom_nome' => $this->getCupom_nome(),
            ':cupom_desconto' => $this->getCupom_desconto(),
            ':cupom_inicial' => $this->getCupom_inicial(),
            ':cupom_final' => $this->getCupom_final(),
            ':cupom_tipo' => $this->getCupom_tipo(),
            ':cupom_qtd' => $this->getCupom_qtd(),
        );

        // executo a minha SQL
        if ($this->ExecuteSQL($query, $params)):
            return true;

        else:
            return false;

        endif;
    }
    public function GetQtd($cupom_nome, $cupom_qtd){
        // trato os campos
        $this->setCupom_nome($cupom_nome);
        $this->setCupom_qtd($cupom_qtd);

        // monto a SQL
        $query = " UPDATE {$this->prefix}cupons ";
        $query .= " SET cupom_qtd = :cupom_qtd ";
        $query .= " WHERE cupom_nome = :cupom_nome ";

        // passo so parametros
        $params = array(
            ':cupom_nome' => $this->getCupom_nome(),
            ':cupom_qtd' => $this->getCupom_qtd(),
        );

        // executo a minha SQL
        if ($this->ExecuteSQL($query, $params)):
            unset($_SESSION['CUPOM']);
            return true;

        else:
            return false;

        endif;
    }

    //FUNÇÃO APAGAR CUPOM
    public function Apagar($cupom_id)
    {
        // monto a SQL
        $query = " DELETE FROM {$this->prefix}cupons";
        $query .= " WHERE cupom_id = :id";

        // passo os parametros
        $params = array(':id' => (int) $cupom_id);
        // executo a SQL

        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;

    }

    private function setCupom_nome($cupom_nome)
    {
        $this->cupom_nome = $cupom_nome;
    }
    private function setCupom_desconto($cupom_desconto)
    {
        $this->cupom_desconto = $cupom_desconto;
    }
    private function setCupom_inicial($cupom_inicial)
    {
        $this->cupom_inicial = $cupom_inicial;
    }
    private function setCupom_final($cupom_final)
    {
        $this->cupom_final = $cupom_final;
    }
    private function setCupom_tipo($cupom_tipo)
    {
        $this->cupom_tipo = $cupom_tipo;
    }
    private function setCupom_qtd($cupom_qtd)
    {
        $this->cupom_qtd = $cupom_qtd;
    }

    public function getCupom_nome()
    {
        return $this->cupom_nome;
    }
    public function getCupom_desconto()
    {
        return $this->cupom_desconto;
    }
    public function getCupom_inicial()
    {
        return $this->cupom_inicial;
    }
    public function getCupom_final()
    {
        return $this->cupom_final;
    }
    public function getCupom_tipo()
    {
        return $this->cupom_tipo;
    }
    public function getCupom_qtd()
    {
        return $this->cupom_qtd;
    }

}