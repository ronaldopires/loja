<?php
date_default_timezone_set('America/Sao_Paulo');

if (isset($_SESSION['PRO'])) {

    $smarty = new Template();
    $cupons = new Cupons();
    $carrinho = new Carrinho();

    $smarty->assign('PRO', $carrinho->GetCarrinho());
    $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
    $smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
    $smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
    $smarty->assign('PAG_CONFIRMAR', Rotas::pag_PedidoConfirmar());
    $smarty->assign('PESO', number_format($carrinho->GetPeso(), 3, '.', ''));
    $smarty->assign('SALE', false);


    if (isset($_POST['cupom_nome'])) {
        $cupom_nome = $_POST['cupom_nome'];

        if ($cupons->GetCuponsNome($cupom_nome)) {
            $data_inicio = $_SESSION['CUPOM']['cupom_inicial'];
            $data_final = $_SESSION['CUPOM']['cupom_final'];
            $data_atual = date('Y-m-d H:i:s');
            $cupom_tipo = $_SESSION['CUPOM']['cupom_tipo'];
            print_r($_SESSION['CUPOM']);
            if ($data_inicio <= $data_atual && $data_final >= $data_atual) {

                $valor = $carrinho->GetTotal();
                $desconto = $_SESSION['CUPOM']['cupom_desconto'];
                
                switch($cupom_tipo){
                    case 1:
                        $total = $valor - $desconto;
                        $smarty->assign('SALE', true);
                        $smarty->assign('CUPOM', Sistema::MoedaBR($desconto));
                        $smarty->assign('DESCONTO', Sistema::MoedaBR($total));
                        echo '<h4 class="alert alert-success alertAdd">Cupom aplicado com sucesso.</h4>';
                        $_SESSION['CUPOM']['cupom_total'] = $total;
                        break;
                    case 2:
                        $percent = $valor / 100 * $desconto;
                        $total = $valor - $percent;
                        $smarty->assign('SALE', true);
                        $smarty->assign('CUPOM', Sistema::MoedaBR($desconto));
                        $smarty->assign('DESCONTO', Sistema::MoedaBR($total));
                        echo '<h4 class="alert alert-success alertAdd">Cupom aplicado com sucesso.</h4>';
                        $_SESSION['CUPOM']['cupom_total'] = $total;
                        break;
                    default:
                        echo "Tipo de cupom inválido";
                }
                
                
            }else{
                echo '<h4 class="alert alert-danger alertAdd">Cupom expirado.</h4>';
            }

        }else{
            echo '<h4 class="alert alert-danger alertAdd">Cupom inválido.</h4>';
        }
    }
    
    $smarty->display('carrinho.tpl');

} else {
    Rotas::Redirecionar(2, Rotas::pag_Produtos());
    exit('<h4 class="alert alert-danger alertAdd">Não possui produtos no carrinho</h4>');

}