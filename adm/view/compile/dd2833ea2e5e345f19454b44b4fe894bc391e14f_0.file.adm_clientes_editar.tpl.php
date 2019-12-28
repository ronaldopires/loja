<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-27 10:43:38
  from 'C:\xampp\htdocs\loja\adm\view\adm_clientes_editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e060a8a9424e3_44076615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd2833ea2e5e345f19454b44b4fe894bc391e14f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_clientes_editar.tpl',
      1 => 1577453923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e060a8a9424e3_44076615 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row no-gutters justify-content-center">
        <div class="col-10 border my-4 rounded">
            <form class="form-group p-3" action="" method="post">
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
" required disabled>
                    </div>

                    <div class="input-group col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nascimento</span>
                        </div>
                        <input id="cli_data_nasc" name="cli_data_nasc" class="form-control" type="date" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DATA_NASC']->value;?>
" required>
                    </div>

                    <div class="input-group col-4 justify-content-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Sexo</span>
                        </div>
                        <select class="form-control" id="sexo" name="cli_sexo" value="<?php echo $_smarty_tpl->tpl_vars['CLI_SEXO']->value;?>
">
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['CLI_SEXO']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 0) {?>
                            <option value="0" selected>Masculino</option>
                            <option value="1">Feminino</option>
                            <?php } else { ?>
                            <option value="0">Masculino</option>
                            <option value="1" selected>Feminino</option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-inline mb-3">

                    <div class="input-group col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Celular</span>
                        </div>
                        <input id="ddd_celular" name="cli_ddd_celular" class="form-control col-3" required placeholder="DDD" type="tel" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DDD_CELULAR']->value;?>
">
                        <input id="celular" name="cli_celular" class="form-control " type="tel " maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CELULAR']->value;?>
" required>
                    </div>
                    <div class="input-group col-4 ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text ">Telefone</span>
                        </div>
                        <input id="ddd_fone " name="cli_ddd_fone" class="form-control col-3 " placeholder="DDD " type="tel " maxlength="3 " value="<?php echo $_smarty_tpl->tpl_vars['CLI_DDD_FONE']->value;?>
 ">
                        <input id="telefone " name="cli_fone" class="form-control " type="tel " maxlength="9" value="<?php echo $_smarty_tpl->tpl_vars['CLI_FONE']->value;?>
">
                    </div>
                </div>

                <div class="form-inline mb-3 ">
                    <div class="input-group col-8 ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text ">E-mail</span>
                        </div>
                        <input type="email " id="email " name="cli_email" class="form-control " value="<?php echo $_smarty_tpl->tpl_vars['CLI_EMAIL']->value;?>
" readonly required>
                    </div>
                </div>
                <hr>
                <h5 class="text-center ">Endereço</h5>
                <hr>
                <div class="form-inline mb-3 ">
                    <div class="input-group col-3 ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text ">CEP</span>
                        </div>
                        <input name="cli_cep" class="form-control input-md" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
 " type="text " maxlength="8 " required>
                    </div>
                    <div class="input-group col ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text ">Rua</span>
                        </div>
                        <input id="rua " name="cli_endereco" class="form-control " type="text " value="<?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
 " required>
                    </div>
                </div>

                <div class="form-inline mb-3 ">
                    <div class="input-group col-3 ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text ">Número</span>
                        </div>
                        <input id="numero " name="cli_numero" class="form-control " type="text " value="<?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
 " required>
                    </div>
                    <div class="input-group col ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text ">Bairro</span>
                        </div>
                        <input id="bairro " name="cli_bairro" class="form-control " type="text " value="<?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
 " required>
                    </div>
                </div>

                <div class="form-inline mb-3 ">
                    <div class="input-group col ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text">Cidade</span>
                        </div>
                        <input id="cidade" name="cli_cidade" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
" required>
                    </div>
                    <div class="input-group col-3 ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text ">UF</span>
                        </div>
                        <input id="estado" name="cli_uf" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_UF']->value;?>
" required>
                    </div>
                </div>
                <div class="container mt-3 ">
                    <div class="row no-gutters justify-content-center ">
                        <div class="col-4">
                            <div class="form-inline justify-content-center">
                                <div class="input-group col-auto p-0">
                                    <input name="cli_id" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ID']->value;?>
" class="form-control " type="hidden">
                                    <button type="submit" class="btn btn-success btn-sm"><i
                                            class="material-icons">done</i><span style="vertical-align: super;">Alterar
                                            dados</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
