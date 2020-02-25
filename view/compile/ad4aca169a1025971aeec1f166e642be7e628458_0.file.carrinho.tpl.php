<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-24 17:41:14
  from 'C:\xampp\htdocs\loja\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5434eadc0fb3_11262249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad4aca169a1025971aeec1f166e642be7e628458' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\carrinho.tpl',
      1 => 1582576870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5434eadc0fb3_11262249 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Carrinho -->
<div class="container containers mb-4">
    <div class="row no-gutters">
        <div class="col p-0">
            <div class="col p-0 text-center">
                <h3>
                Meu Carrinho 
                <span style="font-size: 48px; color: #bee5eb;">
                <i class="fas fa-cart-plus f-18"></i></h3>
                </span>
                <hr>
            </div>
            <div class="col p-0 text-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="btn btn-outline-info"><i class="fas fa-shopping-basket mr-2"></i> Comprar Mais</a>
            </div>
            <div class="col p-0 mt-3">
            <table class="table">
                <thead class="table-info">
                    <tr class=" text-info">
                    <th scope="col"></th>
                    <th scope="col">Produto </th>
                    <th class="text-center" scope="col">Valor <i class="fas fa-dollar-sign"></i></th>
                    <th class="text-center" scope="col">Quantidade</i></th>
                    <th class="text-center" scope="col">Sub Total <i class="fas fa-dollar-sign"></i></th>
                    <th class="text-center" scope="col">Remover</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>                   
                    <tr>
                        <td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></td>
                        <td class="align-middle"><a href="#" class="text-info"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a></td>
                        <td class="text-center align-middle">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
                        <td class="text-center align-middle">
                            <form name="remover" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                                <div class="input-group input-group-sm justify-content-center">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-info btn-sm" type="submit" name="acao" id="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
" value="excluir">-</i></button>
                                    </div>
                                        <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                        <input type="hidden" name="pro_qtd" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
">
                                        <input type="hidden" name="acao" value="excluir">
                            </form>
                                    <input type="text" class="form-control text-center col-2" disabled value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
" style="border: 1px solid #17a2b8 !important;">
                                <form name="adicionar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">   
                                <div class="input-group input-group-sm justify-content-center">

                                    <div class="input-group-append">
                                        <button class="btn btn-outline-info btn-sm" type="submit" name="acao" id="add" value="add" style="border-radius: 0px 3px 3px 0px;">+</i></button>
                                    </div>
                                        <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                        <input type="hidden" name="acao" value="add">    
                                    </div>
                                </div>
                            </form>
                        </td>
                        <td class="text-center align-middle">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</td>
                        <td class="text-center align-middle">
                            <form name="limpar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">                    
                                <input type="hidden" name="acao" value="del">    
                                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">    
                                <button class="btn btn-outline-danger btn-sm"><i class="fas fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            </div>
            <hr>
            <div class="row no-gutters mt-2">
                <div class="col p-2 text-left">
                    <h4>Total R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</h4>
                </div>
                <div class="col my-2 text-right">
                    <form name="limpar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                        <input type="hidden" name="acao" value="limpar">
                        <input type="hidden" name="pro_id" value="1">
                        <button class="btn btn-outline-danger"><i class="fas fa-trash mr-3"></i>Limpar Tudo</button>
                    </form>    
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-9 p-2 text-left">
                    <form class="form-inline mb-0" id="cupom" name="cupom" action="" method="POST">
                        <input class="form-control" type="text" name="cupom_nome" id="desconto" placeholder="Digite seu cupom de desconto" style="width: 20vw;">
                        <input type="hidden" name="data_atual">
                        <button type="submit" class="btn btn-outline-success ml-3">Aplicar Cupom</button>
                    </form>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['SALE']->value == true) {?>
                <div class="col text-right">
                    <div class="col">
                        Cupom aplicado: <?php echo $_smarty_tpl->tpl_vars['CUPOM']->value;?>

                    </div>
                    <div class="col">
                        Valor Total: R$ <?php echo $_smarty_tpl->tpl_vars['DESCONTO']->value;?>

                    </div>
                </div>
                <?php }?>
            </div>
            <!--Frete do Cliente -->
            <div class="row no-gutters p-0 justify-content-end">
                <input type="hidden" name="peso_frete" id="peso_frete" value="<?php echo $_smarty_tpl->tpl_vars['PESO']->value;?>
" class="form-control" readonly>
                <input style="width: 150px !important;" autofocus="true" required type="text" name="cep_frete" class="form-control" id="cep_frete" value="" maxlength="8" placeholder="Digite seu CEP" >
                <input type="hidden" name="frete_valor" id="frete_valor" value="0">
                <button class="ml-3 btn btn-outline-warning" id="buscar_frete"><i class="far fa-paper-plane"></i> Calcular Frete </button>
            </div>
            <hr>
            <div class="col p-0">
                <!-- botão finalzar -->
                <div class="col p-0 text-right justify-content-center">
                    <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">
                        <div class="row no-gutters justify-content-end" id="frete"></div>
                        <button class="btn btn-outline-success mt-2" type="submit"><i class="fas fa-shopping-cart mr-3"></i>Confirmar Pedido</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
