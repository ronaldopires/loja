<?php
/* Smarty version 3.1.36, created on 2020-06-30 13:07:26
  from 'C:\xampp\htdocs\loja\adm\view\adm_clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5efb633e3c4529_21446746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a59ce39329c7ed96cc2d810ed89acb54691df0ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_clientes.tpl',
      1 => 1580769839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efb633e3c4529_21446746 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-sm">
            <h4 class="text-center">Gerenciar Clientes </h4>
            <hr>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email </th>
                        <th scope="col">Contato </th>
                        <th scope="col">Data cadastro</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLIENTES']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                    <tr>
                        <th scope="row"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
 " class="btn btn-info">Pedidos</a> </th>
                        <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_sobrenome'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_celular'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_data_cad'];?>
</td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_EDITAR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
" class="btn btn-info"> Ver </a>
                        </td>
                    </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php }
}
