<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 15:33:20
  from 'C:\xampp\htdocs\loja\adm\view\adm_clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e04fcf058d5a8_74778287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a59ce39329c7ed96cc2d810ed89acb54691df0ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_clientes.tpl',
      1 => 1577385198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e04fcf058d5a8_74778287 (Smarty_Internal_Template $_smarty_tpl) {
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
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
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
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php }
}
