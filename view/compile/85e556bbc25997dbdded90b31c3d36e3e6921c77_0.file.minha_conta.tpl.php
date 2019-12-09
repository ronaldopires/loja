<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-21 17:11:37
  from 'C:\xampp\htdocs\loja\view\minha_conta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dd6b7393c9040_08690707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85e556bbc25997dbdded90b31c3d36e3e6921c77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\minha_conta.tpl',
      1 => 1574352562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd6b7393c9040_08690707 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container my-4">
    <div class="row no-gutters">
        <div class="col text-center">
                 <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
" class="btn btn-outline-info"><i class="fas fa-home mr-2"></i>Minha Conta</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_PEDIDOS']->value;?>
" class="btn btn-outline-success"><i class="fas fa-box mr-2"></i>Pedidos</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_DADOS']->value;?>
" class="btn btn-outline-info"><i class="fas fa-user-edit mr-2"></i>Meus Dados </a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-outline-success"><i class="fas fa-shopping-cart mr-2"></i>Carrinho</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_SENHA']->value;?>
" class="btn btn-outline-warning"><i class="fas fa-unlock-alt mr-2"></i>Alterar Senha</a>
               </div>
      </div>
    </div>
    <hr>
</div><?php }
}
