<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-19 20:17:16
  from 'C:\xampp\htdocs\loja\view\menu_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dd43fbc1d8443_08412440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f48759a4ba62c721a4a696371fde5889a6a9317' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\menu_cliente.tpl',
      1 => 1574190033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd43fbc1d8443_08412440 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container my-4">
    <div class="row no-gutters">
        <div class="col text-center">
          <h4 class="text-center"> Olá <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo! O que deseja fazer agora?</h4> 
          <a href="" class="btn btn-outline-info"><i class="fas fa-home mr-2"></i>Minha Conta</a>
          <a href="" class="btn btn-outline-success"><i class="fas fa-box mr-2"></i>Pedidos</a>
          <a href="" class="btn btn-outline-info"><i class="fas fa-user-edit mr-2"></i>Meus Dados </a>
          <a href="" class="btn btn-outline-success"><i class="fas fa-shopping-cart mr-2"></i>Carrinho</a>
          <a href="" class="btn btn-outline-warning"><i class="fas fa-unlock-alt mr-2"></i>Alterar Senha</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-outline-danger"><i class="fas fa-sign-out-alt mr-2"></i>Sair</a>
        </div>
      </div>
    </div>
</div><?php }
}
