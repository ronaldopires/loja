<?php

class Conexao extends Config
{
    private $host, $user, $senha, $banco;

    protected $obj, $itens = array(), $prefix;

    public $paginacao_links, $totalpags, $limite, $inicio;

    public function __construct()
    {
        $this->host = self::BD_HOST;
        $this->user = self::BD_USER;
        $this->senha = self::BD_SENHA;
        $this->banco = self::BD_BANCO;
        $this->prefix = self::BD_PREFIX;

        try {
            if ($this->Conectar() == null) {
                $this->Conectar();
            }
        } catch (Exception $e) {
            exit($e->getMessage() . '<h2> Erro ao conectar com o banco de dados!</h2>');
        }
    }

    private function Conectar()
    {
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        );
        $link = new PDO(
            "mysql:host={$this->host};dbname={$this->banco}",
            $this->user,
            $this->senha,
            $options
        );
        return $link;
    }

    public function ExecuteSQL($query, array $params = null)
    {
        $this->obj = $this->Conectar()->prepare($query);

        $pkCount = (is_array($params) ? count($params) : 0);
        if ($pkCount > 0) {
            foreach ($params as $key => $value) {
                $this->obj->bindvalue($key, $value);
            }
        }

        return $this->obj->execute();
    }

    public function ListarDados()
    {
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }
    public function TotalDados()
    {
        return $this->obj->rowCount();
    }
    public function GetItens()
    {
        return $this->itens;
    }
    public function PaginacaoLinks($campo, $tabela)
    {
        $pag = new Paginacao();
        $pag->GetPaginacao($campo, $tabela);
        $this->paginacao_links = $pag->link;

        $this->totalpags = $pag->totalpags;
        $this->limite = $pag->limite;
        $this->inicio = $pag->inicio;

        $limite = $pag->limite;
        $inicio = $pag->inicio;

        if ($this->totalpags > 0) {
            return " LIMIT {$inicio},{$limite}";
        } else {
            return " ";
        }
    }
    public function PaginacaoLinks2($campo, $tabela)
    {
        $pag = new Paginacao();
        $pag->GetPaginacao2($campo, $tabela);
        $this->paginacao_links = $pag->link;

        $this->totalpags = $pag->totalpags;
        $this->limite = $pag->limite;
        $this->inicio = $pag->inicio;

        $limite = $pag->limite;
        $inicio = $pag->inicio;
        if ($this->totalpags > 0) {
            return " LIMIT {$inicio},{$limite}";
        } else {
            return " ";
        }
        
    }

    protected function Paginacao($paginas = array())
    {
        $pag = '<ul class="pagination justify-content-center">';
        $pag .= '<li class="page-item"><a class="page-link" href="?p=1">Primeira</a></li>';
        /* $pag .= '<li class="page-item"><a class="page-link" href="?p=' . $this->prev . '"><i class="fas fa-angle-double-left"></i></a></li>'; */

        foreach ($paginas as $p):
            $pag .= '<li class="page-item"><a class="page-link" href="?p=' . $p . '">' . $p . '</a></li>';
        endforeach;

        $pag .= '<li class="page-item"><a class="page-link" href="?p=' . $p . '"><i class="fas fa-angle-double-right"></i></a></li>';
        $pag .= '<li class="page-item"><a class="page-link" href="?p=' . $this->totalpags . '">Ultima</a></li>';
        $pag .= '</ul>';

        if ($this->totalpags > 1) {
            return $pag;
        }
    }

    public function ShowPaginacao()
    {
        return $this->Paginacao($this->paginacao_links);
    }
}