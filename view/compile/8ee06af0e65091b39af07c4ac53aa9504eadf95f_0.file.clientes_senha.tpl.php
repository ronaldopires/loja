<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-11 19:14:19
  from 'C:\xampp\htdocs\loja\view\clientes_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df131fb536761_16281019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ee06af0e65091b39af07c4ac53aa9504eadf95f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\clientes_senha.tpl',
      1 => 1576087454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df131fb536761_16281019 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container my-4">
    <div class="row no-gutters justify-content-center">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Alterar Senha?</h2>
                        <p>Altere sua senha de acesso.</p>
                        <div class="panel-body">
                            <form id="recuperarsenha" role="form" autocomplete="off" class="form" method="post">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="cli_senha_atual" name="cli_senha_atual" placeholder="Senha atual" class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="cli_senha" name="cli_senha" placeholder="Nova senha" class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="recover-submit" class="btn btn-success btn-block" value="Alterar Senha" type="submit">
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
