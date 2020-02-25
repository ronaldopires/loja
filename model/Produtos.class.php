<?php
class Produtos extends Conexao
{

    private $pro_nome, $pro_categoria, $pro_ativo, $pro_modelo, $pro_ref, $pro_tamanho,
    $pro_valor, $pro_estoque, $pro_peso, $pro_altura, $pro_largura, $pro_comprimento,
    $pro_img, $pro_desc, $pro_slug;

    public function __construct()
    {
        parent::__construct();
    }

    public function GetProdutos()
    {
        //Query para buscar os produtos de uma categoria especifica.
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";

        $query .= " ORDER BY pro_id DESC";

        $query .= $this->PaginacaoLinks("pro_id", $this->prefix . "produtos");

        $this->ExecuteSQL($query);
        $this->GetLista();
    }
    public function GetProdutos2()
    {
        //Query para buscar os produtos de uma categoria especifica.
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";

        $query .= " ORDER BY pro_id DESC";

        $query .= $this->PaginacaoLinks2("pro_id", $this->prefix . "produtos");

        $this->ExecuteSQL($query);
        $this->GetLista();
    }
    public function GetProdutos3()
    {
        //Query para buscar os produtos da categoria novidades com limite de 4.
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";

        $query .= " WHERE cate_slug = 'categoria-novidades'";
        $query .= " ORDER BY pro_id DESC LIMIT 4";

        $this->ExecuteSQL($query);
        $this->GetLista();
    }
    public function GetProdutosID($id)
    {
        //Query para buscar os pedidos pelo ID.
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";

        $query .= " AND pro_id = :id";
        $query .= " ORDER BY pro_id DESC";

        $query .= $this->PaginacaoLinks2("ped_id", $this->prefix . "pedidos");

        $params = array(':id' => (int) $id);

        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }
    
    public function GetProdutosCateID($id)
    {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        //Query para buscar os produtos de uma categoria especifica.
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id ";

        $query .= "AND cate_id = :id";
        $query .= " ORDER BY pro_id DESC";

        $query .= $this->PaginacaoLinks("pro_id", $this->prefix . "produtos WHERE pro_categoria=" . (int) $id);

        $params = array(':id' => (int) $id);

        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }

    function GetProdutosNome($nome)
    {
        // monto a SQL
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";

        $query .= " WHERE pro_nome LIKE '%$nome%'";
        $query .= $this->PaginacaoLinks2("pro_id", $this->prefix . "produtos WHERE pro_nome LIKE '%$nome%'");

        // passando parametros
        $params = array(':nome' => $nome);
        // executando a SQL                      
        $this->ExecuteSQL($query, $params);
        // trazendo a listagem 
        $this->GetLista();
    }

    private function GetLista()
    {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'pro_id' => $lista['pro_id'],
                'pro_nome' => $lista['pro_nome'],
                'pro_desc' => $lista['pro_desc'],
                'pro_peso' => $lista['pro_peso'],
                'pro_valor' => Sistema::MoedaBR($lista['pro_valor']),
                'pro_valor_us' => $lista['pro_valor'],
                'pro_altura' => $lista['pro_altura'],
                'pro_largura' => $lista['pro_largura'],
                'pro_comprimento' => $lista['pro_comprimento'],
                'pro_img' => Rotas::ImageLink($lista['pro_img'], 200, 200),
                'pro_img_g' => Rotas::ImageLink($lista['pro_img'], 350, 350),
                'pro_img_p' => Rotas::ImageLink($lista['pro_img'], 70, 70),
                'pro_img_gg' => Rotas::ImageLink($lista['pro_img'], 350, 350),
                'pro_slug' => $lista['pro_slug'],
                'pro_ref' => $lista['pro_ref'],
                'cate_nome' => $lista['cate_nome'],
                'cate_id' => $lista['cate_id'],
                'pro_modelo' => $lista['pro_modelo'],
                'pro_estoque' => $lista['pro_estoque'],
                'pro_tamanho' => $lista['pro_tamanho'],
                'pro_ativo' => $lista['pro_ativo'],
                'pro_img_arquivo' => Rotas::get_SiteRAIZ() . '/' . Rotas::get_ImagePasta() . $lista['pro_img'],
                'pro_img_atual' => $lista['pro_img'],
            );
            $i++;
        endwhile;
    }

    //FUNÇÃO PREPARAR

    public function Preparar(
        $pro_nome,
        $pro_categoria,
        $pro_ativo,
        $pro_modelo,
        $pro_ref,
        $pro_valor,
        $pro_estoque,
        $pro_tamanho,
        $pro_peso,
        $pro_altura,
        $pro_largura,
        $pro_comprimento,
        $pro_img,
        $pro_desc,
        $pro_slug = null
    ) {

        $this->setPro_nome($pro_nome);
        $this->setPro_categoria($pro_categoria);
        $this->setPro_ativo($pro_ativo);
        $this->setPro_modelo($pro_modelo);
        $this->setPro_ref($pro_ref);
        $this->setPro_valor($pro_valor);
        $this->setPro_estoque($pro_estoque);
        $this->setPro_tamanho($pro_tamanho);
        $this->setPro_peso($pro_peso);
        $this->setPro_altura($pro_altura);
        $this->setPro_largura($pro_largura);
        $this->setPro_comprimento($pro_comprimento);
        $this->setPro_img($pro_img);
        $this->setPro_desc($pro_desc);
        $this->setPro_slug($pro_nome);
    }

    public function Inserir()
    {

        $query = "INSERT INTO {$this->prefix}produtos (pro_nome, pro_categoria, pro_ativo, pro_modelo, pro_ref,";
        $query .= " pro_valor, pro_estoque, pro_peso , pro_altura, pro_largura, pro_tamanho, pro_comprimento ,pro_img, pro_desc, pro_slug)";
        $query .= " VALUES ";
        $query .= " ( :pro_nome, :pro_categoria, :pro_ativo, :pro_modelo, :pro_ref, :pro_valor, :pro_estoque, :pro_peso ,";
        $query .= " :pro_altura, :pro_largura, :pro_tamanho, :pro_comprimento ,:pro_img, :pro_desc, :pro_slug)";

        $params = array(
            ':pro_nome' => $this->getPro_nome(),
            ':pro_categoria' => $this->getPro_categoria(),
            ':pro_ativo' => $this->getPro_ativo(),
            ':pro_modelo' => $this->getPro_modelo(),
            ':pro_ref' => $this->getPro_ref(),
            ':pro_valor' => $this->getPro_valor(),
            ':pro_estoque' => $this->getPro_estoque(),
            ':pro_tamanho' => $this->getPro_tamanho(),
            ':pro_peso' => $this->getPro_peso(),
            ':pro_altura' => $this->getPro_altura(),
            ':pro_largura' => $this->getPro_largura(),
            ':pro_comprimento' => $this->getPro_comprimento(),
            ':pro_img' => $this->getPro_img(),
            ':pro_desc' => $this->getPro_desc(),
            ':pro_slug' => $this->getPro_slug(),

        );

        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;
    }

    public function Alterar($id)
    {
        $query = " UPDATE {$this->prefix}produtos SET pro_nome=:pro_nome, pro_categoria=:pro_categoria,";
        $query .= " pro_ativo=:pro_ativo, pro_modelo=:pro_modelo, pro_ref=:pro_ref,";
        $query .= " pro_valor=:pro_valor, pro_estoque=:pro_estoque, pro_peso=:pro_peso , ";
        $query .= " pro_altura=:pro_altura, pro_largura=:pro_largura,";
        $query .= " pro_comprimento=:pro_comprimento ,pro_img=:pro_img, pro_desc=:pro_desc, pro_slug=:pro_slug";
        $query .= " WHERE pro_id = :pro_id";

        $params = array(
            ':pro_nome' => $this->getPro_nome(),
            ':pro_categoria' => $this->getPro_categoria(),
            ':pro_ativo' => $this->getPro_ativo(),
            ':pro_modelo' => $this->getPro_modelo(),
            ':pro_ref' => $this->getPro_ref(),
            ':pro_valor' => $this->getPro_valor(),
            ':pro_estoque' => $this->getPro_estoque(),
            ':pro_peso' => $this->getPro_peso(),
            ':pro_altura' => $this->getPro_altura(),
            ':pro_largura' => $this->getPro_largura(),
            ':pro_comprimento' => $this->getPro_comprimento(),
            ':pro_img' => $this->getPro_img(),
            ':pro_desc' => $this->getPro_desc(),
            ':pro_slug' => $this->getPro_slug(),
            ':pro_id' => (int) $id,

        );

        // executo a SQL
        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;
    }
    public function Estoque($id, $pro_estoque)
    {
        $query = " UPDATE {$this->prefix}produtos SET pro_estoque=:pro_estoque WHERE pro_id = :pro_id";

        $params = array(
            ':pro_estoque' => $pro_estoque,
            ':pro_id' => (int) $id,

        );
        

        // executo a SQL
        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;
    }

    public function Apagar($id)
    {
        $query = "DELETE FROM {$this->prefix}produtos WHERE pro_id = :id";
        $params = array(
            ':id' => (int) $id,
        );

        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;
    }

    //GET PRODUTOS ADM

    public function getPro_nome()
    {
        return $this->pro_nome;
    }

    public function getPro_categoria()
    {
        return $this->pro_categoria;
    }

    public function getPro_ativo()
    {
        return $this->pro_ativo;
    }

    public function getPro_modelo()
    {
        return $this->pro_modelo;
    }

    public function getPro_ref()
    {
        return $this->pro_ref;
    }

    public function getPro_valor()
    {
        return $this->pro_valor;
    }
    
    public function getPro_estoque()
    {
        return $this->pro_estoque;
    }

    public function getPro_tamanho()
    {
        return $this->pro_tamanho;
    }

    public function getPro_peso()
    {
        return $this->pro_peso;
    }

    public function getPro_altura()
    {
        return $this->pro_altura;
    }

    public function getPro_largura()
    {
        return $this->pro_largura;
    }

    public function getPro_comprimento()
    {
        return $this->pro_comprimento;
    }

    public function getPro_img()
    {
        return $this->pro_img;
    }

    public function getPro_desc()
    {
        return $this->pro_desc;
    }

    public function getPro_slug()
    {
        return $this->pro_slug;
    }

    //SET PRODUTOS ADM

    public function setPro_nome($pro_nome)
    {
        $this->pro_nome = $pro_nome;
    }

    public function setPro_categoria($pro_categoria)
    {
        $this->pro_categoria = $pro_categoria;
    }

    public function setPro_ativo($pro_ativo)
    {
        $this->pro_ativo = $pro_ativo;
    }

    public function setPro_modelo($pro_modelo)
    {
        $this->pro_modelo = $pro_modelo;
    }

    public function setPro_ref($pro_ref)
    {
        $this->pro_ref = $pro_ref;
    }

    public function setPro_valor($pro_valor)
    {
        //1.335,99 => 1.33599

        // procura a virgula e troca por ponto
        $pro_valor = str_replace('.', '', $pro_valor);
        $pro_valor = str_replace(',', '.', $pro_valor);

        $this->pro_valor = $pro_valor;
        // echo $this->pro_valor;

    }

    
    public function setPro_estoque($pro_estoque)
    {
        $this->pro_estoque = $pro_estoque;
    }

    public function setPro_tamanho($pro_tamanho)
    {
        $this->pro_tamanho = implode(",", $pro_tamanho);
    }

    public function setPro_peso($pro_peso)
    {

        ///  1,600  => 1.600
        $this->pro_peso = str_replace(',', '.', $pro_peso);
    }

    public function setPro_altura($pro_altura)
    {

        $this->pro_altura = $pro_altura;
    }

    public function setPro_largura($pro_largura)
    {
        $this->pro_largura = $pro_largura;
    }

    public function setPro_comprimento($pro_comprimento)
    {
        $this->pro_comprimento = $pro_comprimento;
    }

    public function setPro_img($pro_img)
    {
        $this->pro_img = $pro_img;
    }

    public function setPro_desc($pro_desc)
    {
        $this->pro_desc = $pro_desc;
    }

    public function setPro_slug($pro_slug)
    {

        $this->pro_slug = Sistema::GetSlug($pro_slug);
    }
}