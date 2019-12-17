<?php

class Rotas
{

    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';
    private static $pasta_ADM = 'adm';

    public static function get_SiteHOME()
    {
        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }

    public static function get_SiteRAIZ()
    {
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
    }

    public static function get_SiteTEMA()
    {
        return self::get_SiteHOME() . '/' . self::$pasta_view;
    }

    public static function pag_Home()
    {
        return self::get_SiteHOME() . '/home';
    }
    public static function pag_ClientePedidos()
    {
        return self::get_SiteHOME() . '/clientes_pedidos';
    }
    public static function pag_ClienteCadastro()
    {
        return self::get_SiteHOME() . '/cadastro';
    }
    public static function pag_ClienteConta()
    {
        return self::get_SiteHOME() . '/meu_perfil';
    }
    public static function pag_CLienteDados()
    {
        return self::get_SiteHOME() . '/clientes_dados';
    }
    public static function pag_CLienteSenha()
    {
        return self::get_SiteHOME() . '/clientes_senha';
    }
    public static function pag_ClienteRecovery()
    {
        return self::get_SiteHOME() . '/clientes_recovery';
    }
    public static function pag_ClienteItens()
    {
        return self::get_SiteHOME() . '/cliente_itens';
    }
    public static function pag_Carrinho()
    {
        return self::get_SiteHOME() . '/carrinho';
    }
    public static function pag_CarrinhoAlterar()
    {
        return self::get_SiteHOME() . '/carrinho_alterar';
    }
    public static function pag_Produtos()
    {
        return self::get_SiteHOME() . '/produtos';
    }
    public static function pag_ProdutosInfo()
    {
        return self::get_SiteHOME() . '/produtos_info';
    }
    public static function pag_Contato()
    {
        return self::get_SiteHOME() . '/contato';
    }
    public static function pag_MeuPerfil()
    {
        return self::get_SiteHOME() . '/meu_perfil';
    }
    public static function pag_PedidoConfirmar()
    {
        return self::get_SiteHOME() . '/pedido_confirmar';
    }
    public static function pag_PedidoFinalizar()
    {
        return self::get_SiteHOME() . '/pedido_finalizar';
    }
    public static function pag_Sobre()
    {
        return self::get_SiteHOME() . '/sobre';
    }
    public static function pag_Login()
    {
        return self::get_SiteHOME() . '/login';
    }
    public static function pag_MinhaConta()
    {
        return self::get_SiteHOME() . '/minha_conta';
    }
    public static function pag_Logoff()
    {
        return self::get_SiteHOME() . '/logoff';
    }
    public static function get_ImagePasta()
    {
        return 'media/images/';
    }
    public static function get_ImageURL()
    {
        return self::get_SiteHOME() . '/' . self::get_ImagePasta();
    }
    public static function ImageLink($img, $largura, $altura)
    {
        $imagem = self::get_ImageURL() . "thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
        return $imagem;
    }
    //Rotas para área adm
    public static function get_SiteADM()
    {
        return self::get_SiteHOME() . '/' . self::$pasta_ADM;
    }
    public static function pag_ProdutosADM()
    {
        return self::get_SiteADM() . '/adm_produtos';
    }
    public static function pag_ProdutosNovoADM()
    {
        return self::get_SiteADM() . '/adm_produtos_novo';
    }
    public static function pag_ProdutosEditarADM()
    {
        return self::get_SiteADM() . '/adm_produtos_editar';
    }
    public static function pag_ProdutosDeletarADM()
    {
        return self::get_SiteADM() . '/adm_produtos_deletar';
    }
    public static function pag_ProdutosImgADM()
    {
        return self::get_SiteADM() . '/adm_produtos_img';
    }

    public static function pag_ClientesADM()
    {
        return self::get_SiteADM() . '/adm_clientes';
    }
    public static function pag_ClientesEditarADM()
    {
        return self::get_SiteADM() . '/adm_clientes_editar';
    }
    public static function pag_PedidosADM()
    {
        return self::get_SiteADM() . '/adm_pedidos';
    }
    public static function pag_ItensADM()
    {
        return self::get_SiteADM() . '/adm_itens';
    }
    public static function pag_CategoriasADM()
    {
        return self::get_SiteADM() . '/adm_categorias';
    }

    public static function get_Pasta_Controller()
    {
        return self::$pasta_controller;
    }
    //Metodo de redirecionamento
    public static function Redirecionar($tempo, $pagina)
    {
        $url = '<meta http-equiv="refresh" content="' . $tempo . '; url=' . $pagina . '">';
        echo $url;
    }

    public static function get_Pagina()
    {
        if (isset($_GET['pag'])) {

            $pagina = $_GET['pag'];

            self::$pag = explode('/', $pagina);

            $pagina = 'controller/' . self::$pag[0] . '.php';

            /* $pagina = 'controller/' . $_GET['pag'] . '.php'; */
            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include 'erro.php';
            }
        } else {
            include 'home.php';
        }
    }
}