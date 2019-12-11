<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-11 15:06:38
  from 'C:\xampp\htdocs\loja\view\email_cliente_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df0f7eec62854_67258488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c20fa421cb393a5ac54773ac554c52695663c0c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\email_cliente_cadastro.tpl',
      1 => 1576072812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df0f7eec62854_67258488 (Smarty_Internal_Template $_smarty_tpl) {
?>//CORPO DA PÁGINA DE EMAIL CADASTRO CLIENTE

<h3>Olá <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
 , obrigado por se cadastrar em <?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
</h3>

<p>Cadastro efetuado com sucesso, para fazer o login use seu email cadastrado ( <?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
 ) e senha</p>
<p>Para acessar o site e sua conta basta usar este endereço <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
</a></p><?php }
}
