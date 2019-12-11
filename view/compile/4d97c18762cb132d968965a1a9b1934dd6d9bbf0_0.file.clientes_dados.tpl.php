<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-11 21:25:09
  from 'C:\xampp\htdocs\loja\view\clientes_dados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df150a59ee6f4_83373420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d97c18762cb132d968965a1a9b1934dd6d9bbf0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\clientes_dados.tpl',
      1 => 1576095908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df150a59ee6f4_83373420 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row no-gutters">
        <div class="col-12 border my-4 rounded">
            <form class="form-group p-3" action="" method="POST">
                <h4 class="text-center">Meus Dados</h4>
                <div class="form-group">
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nome e sobrenome</span>
                        </div>
                        <input id="nome" name="cli_nome" type="text" aria-label="nome" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
" required>
                        <input id="sobrenome" name="cli_sobrenome" type="text" aria-label="sobrenome" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['CLI_SOBRENOME']->value;?>
" required>
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">CPF</span>
                        </div>
                        <input id="cpf" name="cli_cpf" class="form-control" type="text" maxlength="11" readonly value="<?php echo $_smarty_tpl->tpl_vars['CLI_CPF']->value;?>
" required>
                    </div>

                    <div class="input-group col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nascimento</span>
                        </div>
                        <input id="dtnasc" name="cli_data_nasc" class="form-control input-md" type="text" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DATA_NASC']->value;?>
" required>
                    </div>

                    <div class="input-group col-4 justify-content-center">
                        Sexo:
                        <label class="form-check-label ml-3">
                                <input class="form-check-input mr-2" name="cli_sexo" id="feminino" value="f" type="radio" required>
                                Feminino
                            </label>
                        <label class="form-check-label ml-3">
                                <input class="form-check-input mr-2" name="cli_sexo" id="masculino" value="m" type="radio" required>
                                Masculino
                            </label>
                    </div>
                </div>
                <div class="form-inline mb-3">

                    <div class="input-group col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Celular</span>
                        </div>
                        <input id="celular" name="cli_celular" class="form-control" type="tel" maxlength="13" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CELULAR']->value;?>
" required>
                    </div>
                    <div class="input-group col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Telefone</span>
                        </div>
                        <input id="telefone" name="cli_fone" class="form-control" type="tel" maxlength="12" value="<?php echo $_smarty_tpl->tpl_vars['CLI_FONE']->value;?>
">
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text">E-mail</span>
                        </div>
                        <input type="email" id="email" name="cli_email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['CLI_EMAIL']->value;?>
" readonly required>
                    </div>
                </div>
                <hr>
                <h5 class="text-center">Endereço</h5>
                <hr>
                <div class="form-inline mb-3">
                    <div class="input-group col-auto">
                        <div class="input-group-prepend">
                            <span class="input-group-text">CEP</span>
                        </div>
                        <input name="cli_cep" class="form-control input-md" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
" type="text" maxlength="8" required>
                    </div>
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rua</span>
                        </div>
                        <input id="rua" name="cli_endereco" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
" required>
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Número</span>
                        </div>
                        <input id="numero" name="cli_numero" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
" required>
                    </div>
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Bairro</span>
                        </div>
                        <input id="bairro" name="cli_bairro" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
" required>
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Cidade</span>
                        </div>
                        <input id="cidade" name="cli_cidade" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
" required>
                    </div>
                    <div class="input-group col-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">UF</span>
                        </div>
                        <input id="estado" name="cli_uf" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_UF']->value;?>
" required>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <label for="password"><strong>Senha para confirmar as alterações</strong></label>
                                </div>
                                <input id="cli_senha" name="cli_senha" class="form-control" type="password" required>
                            </div>

                            <div class="form-inline justify-content-center">
                                <div class="input-group col-auto p-0">
                                    <button type="submit" class="btn btn-outline-success">Alterar dados</button>
                                </div>
                                <!-- <div class="input-group col-auto">
                                    <button type="reset" class="btn btn-outline-danger">Cancelar</button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
