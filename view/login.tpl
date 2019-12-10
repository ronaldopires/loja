{if $LOGADO == true}
  
{else}

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
              <a href="{$PAG_CADASTRO}" role="button" class="btn btn-customized">Cadastre-se</a>
              <a href="{$PAG_RECOVERY}" role="button" class="btn btn-customized">Esqueci a Senha</a>
            </div>
            
        </div>
      </div>
    </div>
</div>

</div>
{/if}
