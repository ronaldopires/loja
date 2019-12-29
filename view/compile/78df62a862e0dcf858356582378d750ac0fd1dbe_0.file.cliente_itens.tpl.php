<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-29 20:03:29
  from 'C:\xampp\htdocs\loja\view\cliente_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0930c19ced27_91994304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78df62a862e0dcf858356582378d750ac0fd1dbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\cliente_itens.tpl',
      1 => 1577660582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0930c19ced27_91994304 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row no-gutters justify-content-center">
        <div class="col my-3">
            <h4 class="text-center">Dados do pedido</h4>
            <!-- informações sobre o pedido -->
            <section class="row no-gutters">
                <table class="table table-bordered rounded">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col"><b>Data:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_data'];?>
</th>
                            <th scope="col"><b>Hora:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_hora'];?>
</th>
                            <th scope="col"><b>Ref:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_ref'];?>
</th>
                            <th scope="col"><b>Status:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'];?>
</th>
                        </tr>
                    </thead>
                </table>
            </section>
            <!-- listagem dos itens -->
            <section class="row no-gutters" id="listaitens">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr class="font-weight-bold">
                            <th scope="col"></th>
                            <th scope="col">Item</th>
                            <th scope="col" class="text-center">Valor Unitário</th>
                            <th scope="col" class="text-center">X</th>
                            <th scope="col" class="text-center">Sub</th>
                        </tr>
                    </thead>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                    <tr>
                        <td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
" alt=""> </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
</td>
                        <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
                        <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
</td>
                        <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
</td>
                    </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </section>
            <section class="row no-gutters" id="resumo">
                <table class="table table-bordered">
                    <tr>
                        <td class="text-danger"><b>Frete:</b>R$ <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor'];?>
</td>
                        <td class="text-danger"><b>Total:</b>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
                        <td class="text-danger"><b>Valor Total:</b>R$ <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
                    </tr>
                </table>
            </section>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'] == 'Não concluido') {?>
    <!--  modos de pagamento e outras informações -->
    <div class="row no-gutters mb-4 justify-content-center">
        <div class="col-12">
            <h3 class="text-center"> Formas de pagamento </h3>
            <hr>
            <div class="container col-5">
                <img class="img-fluid" width="400rem;" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/tema/images/Logo_PagSeguro.png" alt="">
            </div>
        </div>
        <div class="col">
            <div class="container col-5">
                <button class="btn btn-success btn-lg btn-block" onclick="PagSeguroLightbox({
                    code: '<?php echo $_smarty_tpl->tpl_vars['PS_COD']->value;?>
'
                    }, {
                    success : function(transactionCode) {
                      alert('Transação efetuada com sucesso! - ' + transactionCode);
                        window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_RETORNO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
                    },
                    abort : function() {
                       alert('Erro no processo de pagamento, tente novamente.');
                         window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_ERRO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
                    }
                });">Pague com PagSeguro</button>
                <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
            </div>
        </div>
    </div>
    <?php }?>
</div><?php }
}
