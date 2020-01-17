<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-08 14:38:19
  from 'C:\xampp\htdocs\loja\view\pedido_confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e16138b915684_63276298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2d143155fe9d1b11e00496eb5c9a94a14a4e03c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\pedido_confirmar.tpl',
      1 => 1578505097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e16138b915684_63276298 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container containers my-5">
    <div class="row no-gutters">
        <div class="col p-0">
            <div class="col p-0 mt-2">
                <h3>Confirmar Pedido</h3>
                <hr>
            </div>
            <div class="col p-0 text-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-outline-info"><i class="fas fa-shopping-basket mr-2"></i> Voltar</a>
            </div>
            <div class="col p-0 mt-3">
                <table class="table">
                    <thead class="">
                        <tr class="table-success text-success">
                            <th scope="col"></th>
                            <th scope="col">Produto </th>
                            <th class="text-center" scope="col">Valor <i class="fas fa-dollar-sign"></i></th>
                            <th class="text-center" scope="col">Quantidade</i>
                            </th>
                            <th class="text-center" scope="col">Sub Total <i class="fas fa-dollar-sign"></i></th>
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
                            <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td>
                            <td class="text-center align-middle">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
                            <td class="text-center align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
</td>
                            <td class="text-center align-middle">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</td>

                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                </table>
            </div>
            <hr>
            <div class="row no-gutters mt-2">
                <div class="col p-2 text-right">
                    <h6>Pedido R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</h6>
                    <!-- <?php if ($_smarty_tpl->tpl_vars['CUPOM']->value == true) {?>
                    <h6>Cupom R$ -<?php echo $_smarty_tpl->tpl_vars['CUPOM']->value;?>
</h6>
                    <?php }?> -->
                    <h6>Frete R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
</h6>
                    <h5>Valor Total R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
</h5>
                </div>

            </div>
            <hr>
            <div class="col p-0">
                <!-- botão finalzar -->
                <div class="col p-0 text-right justify-content-center">
                    <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR']->value;?>
">
                        <button class="btn btn-outline-success" type="submit"><i class="fas fa-shopping-cart mr-3"></i>Efetuar Pedido</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
