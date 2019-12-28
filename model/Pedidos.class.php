<?php

class Pedidos extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function PedidoGravar($cliente, $cod, $ref, $freteValor = null, $freteTipo = null)
    {
        $retorno = false;
        $query = "INSERT INTO " . $this->prefix . "pedidos ";
        $query .= "(ped_data, ped_hora, ped_cliente, ped_cod, ped_ref, ped_frete_valor, ped_frete_tipo)";
        $query .= " VALUES ";
        $query .= "(:data, :hora, :cliente, :cod, :ref, :frete_valor, :frete_tipo)";

        $params = array(
            ':data' => Sistema::DataAtualUS(),
            ':hora' => Sistema::HoraAtual(),
            ':cliente' => (int) $cliente,
            ':cod' => $cod,
            ':ref' => $ref,
            ':frete_valor' => $freteValor,
            ':frete_tipo' => $freteTipo,
        );

        $this->ExecuteSQL($query, $params);
        //Gravar os itens do pedido
        $this->ItensGravar($cod);
        $retorno = true;
        return $retorno;
    }

    //Select em pedidos do cliente
    public function GetPedidosCliente($cliente = null)
    {
        $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c";
        $query .= " ON p.ped_cliente = c.cli_id";
        if ($cliente != null) {
            $cli = (int) $cliente;
            $query .= " WHERE ped_cliente = {$cli}";
            $query .= " ORDER BY ped_id DESC";
            $query .= $this->PaginacaoLinks2("ped_id", $this->prefix . "pedidos WHERE ped_cliente=" . (int) $cli);
        } else {
            $query .= $this->PaginacaoLinks("ped_id", $this->prefix . "pedidos");
        }
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    private function GetLista()
    {
        $i = 1;
        while ($lista = $this->ListarDados()) :

            $this->itens[$i] = array(
                'ped_id' => $lista['ped_id'],
                'ped_data' => Sistema::Fdata($lista['ped_data']),
                'ped_data_us' => $lista['ped_data'],
                'ped_hora' => $lista['ped_hora'],
                'ped_cliente' => $lista['ped_cliente'],
                'ped_cod' => $lista['ped_cod'],
                'ped_ref' => $lista['ped_ref'],
                'ped_pag_status' => $lista['ped_pag_status'],
                'ped_pag_forma' => $lista['ped_pag_forma'],
                'ped_pag_tipo' => $lista['ped_pag_tipo'],
                'ped_pag_codigo' => $lista['ped_pag_codigo'],
                'ped_frete_valor' => $lista['ped_frete_valor'],
                'ped_frete_tipo' => $lista['ped_frete_tipo'],
                'cli_nome' => $lista['cli_nome'],
                'cli_sobrenome' => $lista['cli_sobrenome'],
            );

            $i++;
        endwhile;
    }

    public function ItensGravar($codpedido)
    {
        $carrinho = new Carrinho();
        foreach ($carrinho->GetCarrinho() as $item) {
            $query = "INSERT INTO " . $this->prefix . "pedidos_itens ";
            $query .= "(item_produto, item_valor, item_qtd, item_ped_cod)";
            $query .= "VALUES  (:produto,:valor,:qtd,:cod)";

            $params = array(
                ':produto' => $item['pro_id'],
                ':valor' => $item['pro_valor_us'],
                ':qtd' => (int) $item['pro_qtd'],
                ':cod' => $codpedido,
            );

            $this->ExecuteSQL($query, $params);
        }
    }

    function  Apagar($ped_cod)
    {
        // apagando o PEDIDO  
        // monto a minha SQL de apagar o pedido 
        $query =  " DELETE FROM {$this->prefix}pedidos WHERE ped_cod = :ped_cod";
        // parametros
        $params = array(':ped_cod' => $ped_cod);
        // executo a minha SQL
        $this->ExecuteSQL($query, $params);

        /// apos apagar o pedido apaga ITENS DO PEDIDO  

        // monto a minha SQL de apagar os items 
        $query =  " DELETE FROM {$this->prefix}pedidos_itens WHERE item_ped_cod = :ped_cod";

        // parametros
        $params = array(':ped_cod' => $ped_cod);
        // executo a minha SQL
        if ($this->ExecuteSQL($query, $params)) :
            return TRUE;
        endif;
    }

    function GetPedidosREF($ref)
    {
        // monto a SQL
        $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c";
        $query .= " ON p.ped_cliente = c.cli_id";
        $query .= " WHERE ped_ref = :ref";
        $query .= $this->PaginacaoLinks2("ped_id", $this->prefix . "pedidos WHERE ped_ref = " .$ref);

        // passando parametros
        $params = array(':ref' => $ref);
        // executando a SQL                      
        $this->ExecuteSQL($query, $params);
        // trazendo a listagem 
        $this->GetLista();
    }

    function GetPedidosDATA($data_ini, $data_fim)
    {

        // montando a SQL
        $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c";
        $query .= " ON p.ped_cliente = c.cli_id";

        $query .= " WHERE ped_data between :data_ini AND :data_fim";
        $query .= $this->PaginacaoLinks2("ped_id", $this->prefix . "pedidos WHERE ped_data between " . $data_ini . " AND " . $data_fim);

        // passando os parametros  
        $params = array(':data_ini' => $data_ini, ':data_fim' => $data_fim);

        // executando a SQL
        $this->ExecuteSQL($query, $params);

        $this->GetLista();
    }

    public function LimparSessoes()
    {
        unset($_SESSION['PRO']);
        unset($_SESSION['PED']['pedido']);
        unset($_SESSION['PED']['ref']);
    }
}
