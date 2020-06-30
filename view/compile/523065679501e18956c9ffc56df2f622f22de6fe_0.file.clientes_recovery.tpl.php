<?php
/* Smarty version 3.1.36, created on 2020-06-30 13:06:13
  from 'C:\xampp\htdocs\loja\view\clientes_recovery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5efb62f5accf10_17415585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '523065679501e18956c9ffc56df2f622f22de6fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\clientes_recovery.tpl',
      1 => 1580769840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efb62f5accf10_17415585 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container my-4">
    <div class="row no-gutters justify-content-center">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Esqueceu a Senha?</h2>
                        <p>Você pode recuperar sua senha aqui.</p>
                        <div class="panel-body">
                            <form id="recuperarsenha" role="form" autocomplete="off" class="form" method="post">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                        </div>
                                        <input id="email" name="cli_email" placeholder="Email" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Recuperar Senha" type="submit">
                                </div>

                                <input type="hidden" class="hide" name="token" id="token" value="">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
