<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-24 03:30:47
  from 'C:\xampp\htdocs\loja\view\clientes_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dd9eb5727e7c1_54667821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0c9520b0050e338ea87a989f8596a2f42b74e52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\clientes_pedidos.tpl',
      1 => 1574562644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd9eb5727e7c1_54667821 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="row no-gutters">
        <div class="col-12">
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr class="text-center">
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Pedido</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                    <tr class="text-center">
                    <th class="align-middle" scope="row"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</th>
                    <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
                    <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'AGUARDANDO PAGAMENTO') {?>
                    <td class="text-warning align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
                <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'PAGAMENTO CONCLUIDO') {?>
                    <td class="text-success align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
                <?php } else { ?>
                    <td class="text-danger align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
                <?php }?>   
                    <form name="itens" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
                        <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                        <td class="text-center"><button class="btn btn-outline-success"><i class="fas fa-bars"></i> Detalhes</button></td>
                    </form>
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
