<?php
/* Smarty version 3.1.36, created on 2020-06-30 13:21:40
  from 'C:\xampp\htdocs\loja\view\pedido_retorno_erro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5efb66945a94d9_35002841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a24d1dee86b3215e129dd51fc24c2777224f23ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\pedido_retorno_erro.tpl',
      1 => 1580769840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efb66945a94d9_35002841 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container my-4">
    <div class="row no-gutters justify-content-center">
        <div class="col-12">

            <h3 class="text-center text-danger"> Ocorreu um problema no pagamento, ou foi cancelado</h3>
            <hr>
        </div>
        <div class="col-12">
            <div class="col text-center">
                <div class="container">
                    <p> Caso teve algum problema entre em contato conosco, informando <br> o código de referência:<b> <?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
</b></p>
                    <p> Ou você pode tentar efetuar o pagamento novamente na seção <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS']->value;?>
">Pedidos</a> clicando em "<i class="text-success">Detalhes</i>"</p>
                    <p> Para ir a tela do pedido e efetivar o pagamento, clique no botão.</p>
                </div>
            </div>
            <div class="col-12">
                <div class="container col-5">
                    <form name="pagamento" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
                        <input type="hidden" name="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
">
                        <button class="btn btn-success btn-block btn-lg"> Fazer Pagamento Agora</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
