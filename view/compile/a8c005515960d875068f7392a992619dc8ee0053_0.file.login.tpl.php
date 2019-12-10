<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-10 01:09:01
  from 'C:\xampp\htdocs\loja\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5deee21d239848_64147988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8c005515960d875068f7392a992619dc8ee0053' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\login.tpl',
      1 => 1575934628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5deee21d239848_64147988 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
  
<?php } else { ?>

<div class="container-fluid" id="pageLogin">

<div id="login-container">
    <h3>Login</h3>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-12">
        
          <form name="cliente_login" action="" method="POST">

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="email-label">
                  <i class="fa fa-user-circle" aria-hidden="true"></i>
                </span>
              </div>
              <input type="email" name="inputemail" class="form-control" value="" placeholder="Email" aria-label="Email" aria-describedby="email-label" required autocomplete="off">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="password-label">
                  <i class="fa fa-key" aria-hidden="true"></i>
                </span>
              </div>
              <input type="password" name="inputsenha" class="form-control" value="" placeholder="Senha" aria-label="Senha" aria-describedby="password-label" required>
            </div>

            <label class="container-checkbox">Lembrar Minha Conta
              <input type="checkbox" checked="checked">
              <span class="checkmark"></span>
            </label>

            <div class="text-center">
              <button type="submit" class="btn btn-customized">Entrar</button>
            </div>
          </form>
            <hr style="margin-bottom: 5px">
            <div class="text-center">
              <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
" role="button" class="btn btn-customized">Cadastre-se</a>
              <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_RECOVERY']->value;?>
" role="button" class="btn btn-customized">Esqueci a Senha</a>
            </div>
            
        </div>
      </div>
    </div>
</div>

</div>
<?php }
}
}
