<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-08 00:30:52
  from 'C:\xampp\htdocs\loja\adm\view\adm_cupons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e154cec0f2436_13552687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73ec69ef2feadc8f2197cefceb6db71cbb40bbcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_cupons.tpl',
      1 => 1578454251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e154cec0f2436_13552687 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="row no-gutters justify-content-center my-3">
        <div class="col p-3">
            <h5 class="text-center">Cupons Ativos</h5>
            <hr>
            <div class="col" id="cupom-container">
                <?php if ($_smarty_tpl->tpl_vars['SEM_CUPONS']->value == true) {?>
                <div class="col p-3" style="background-color: #eb4034; border-radius: 10px;">
                    <h4 class="text-center text-light">Sem cupom cadastrado</h4>
                </div>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUPONS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                <div class="col bg-light p-3 my-2" style="border-radius: 10px; background-color: rgba(210, 214, 208, 0.2); border: 1px solid black;">
                    <span><b><?php echo $_smarty_tpl->tpl_vars['C']->value['cupom_nome'];?>
</b></span><span class="float-right">R$ <?php echo $_smarty_tpl->tpl_vars['C']->value['cupom_desconto'];?>
</span>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="col p-0 mt-3">
                <button name="cupom_novo" id="mostrar" class="btn btn-outline-success"><span
                        style="vertical-align: super;">Editar Cupom</span> <i
                        class="material-icons">keyboard_arrow_down</i></button>
                <button id="ocultar" class="btn btn-outline-success"><span style="vertical-align: super;">Editar
                        Cupom</span> <i class="material-icons">keyboard_arrow_up</i></button>
            </div>
        </div>
        <div class="col-7 p-3" style="border-radius: 10px; background-color: rgba(210, 214, 208, 0.2); border: 1px solid black;">
            <div class="col-12 text-center my-3">
                <h4>Gerenciar Cupons</h4>
            </div>
            <form class="form-group" name="inserircupom" id="editar-cupom" method="post" action=""
                enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-2 d-block p-0">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
                    </div>
                    <input type="text" name="cupom_nome_novo" class="form-control" placeholder="Nome do cupom"
                        aria-label="Nome Cupom" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-2 d-block p-0">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Desconto</span>
                    </div>
                    <input type="text" name="cupom_desconto_novo" class="form-control" placeholder="Valor do desconto"
                        aria-label="Valor do cupom" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-2 d-block p-0">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Data Inicio</span>
                    </div>
                    <input type="datetime-local" name="cupom_inicial_novo" class="col" aria-label="Data Inicial"
                        required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-2 d-block p-0">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Data Fim</span>
                    </div>
                    <input type="datetime-local" name="cupom_final_novo" class="col" aria-label="Data Final" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-2 d-block p-0">
                        <label class="input-group-text" for="inputGroupSelect01">Tipo do Cupom</label>
                    </div>
                    <select name="cupom_tipo_novo" class="custom-select" required>
                        <option selected>Escolher...</option>
                        <option value="1">Reais R$</option>
                        <option value="2">Porcentagem %</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-2 d-block p-0">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Quantidade</span>
                    </div>
                    <input type="text" name="cupom_qtd_novo" class="form-control" placeholder="Quantidade de cupons"
                        aria-label="Valor do cupom" required>
                </div>
                <div class="form-group ml-3 float-right">
                    <button name="cupom_novo" value="cupom_novo" class="btn btn-outline-success">Inserir Cupom</button>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row no-gutters justify-content-center" id="editar">
        <div class="col-12">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Nome do Cupom</th>
                        <th scope="col">Valor do Desconto</th>
                        <th scope="col">Data Inicial</th>
                        <th scope="col">Data Final</th>
                        <th scope="col">Tipo do Desconto</th>
                        <th scope="col" colspan="3">Quantidade</th>
                    </tr>
                </thead>
                <tbody class="border">
                    <?php if ($_smarty_tpl->tpl_vars['SEM_CUPONS']->value == true) {?>
                    <div class="col p-3" style="background-color: #eb4034; border-radius: 10px;">
                        <h4 class="text-center text-light">Sem cupom cadastrado</h4>
                    </div>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUPONS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                    <form name="cupons_editar" method="post" action="">
                        <tr>
                            <th scope="row">
                                <input type="text" name="cupom_nome" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cupom_nome'];?>
" class="form-control"
                                    required>
                                <input type="hidden" name="cupom_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cupom_id'];?>
">
                            </th>
                            <td>
                                <input type="text" name="cupom_desconto" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cupom_desconto'];?>
"
                                    class="form-control" required>
                            </td>
                            <td>
                                <input type="datetime" name="cupom_inicial" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cupom_inicial'];?>
"
                                    class="form-control" required>
                            </td>
                            <td>
                                <input type="datetime" name="cupom_final" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cupom_final'];?>
" class="form-control"
                                    required>
                            </td>
                            <td>
                                <select name="cupom_tipo" class="custom-select" required>
                                    <?php if ($_smarty_tpl->tpl_vars['C']->value['cupom_tipo'] == 1) {?>
                                    <option selected value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cupom_tipo'];?>
">Reais R$</option>
                                    <option disabled></option>
                                    <?php } else { ?>
                                    <option selected value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cupom_tipo'];?>
">Porcentagem %</option>
                                    <?php }?>
                                    <option value="1">Reais R$</option>
                                    <option value="2">Porcentagem %</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="cupom_qtd" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cupom_qtd'];?>
" class="form-control"
                                    required>
                            </td>
                            <td>
                                <button class="btn btn-info" name="cupom_editar" value="cupom_editar">Editar</button>
                            </td>
                            <td>
                                <button class="btn btn-danger" name="cupom_apagar" value="cupom_apagar">Apagar</button>
                            </td>
                        </tr>
                    </form>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php }
}
