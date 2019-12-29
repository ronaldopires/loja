<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-29 17:57:16
  from 'C:\xampp\htdocs\loja\view\pedido_retorno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e09132c1f42f1_36294024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2aca20cd60f103a272083dc938a59d98ebb96435' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\pedido_retorno.tpl',
      1 => 1577653034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e09132c1f42f1_36294024 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container my-4">
    <div class="row no-gutters">
        <h3 class="text-center text-success"> Obrigado pelo seu pedido </h3>
        <hr>
        <div class="col-12">
            <div class="card col-6">
                <div class="card-body">
                    <h5 class="card-title">Informações do pagamento</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Código da transação <?php echo $_smarty_tpl->tpl_vars['CODIGO']->value;?>
</h6>
                    <p class="card-text">Referencia <?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
</p>
                    <p class="card-text">Status do pagamento <?php echo $_smarty_tpl->tpl_vars['PAGO']->value;?>
</p>
                    <p class="card-text">Forma pagamento <?php echo $_smarty_tpl->tpl_vars['FORMA_PAG']->value;?>
</p>
                </div>
                <div class="card-footer">
                    <form name="pagamento" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
                        <input type="hidden" name="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
">
                        <button class="btn btn-success btn-block btn-lg"> Detalhes deste Pedido</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
