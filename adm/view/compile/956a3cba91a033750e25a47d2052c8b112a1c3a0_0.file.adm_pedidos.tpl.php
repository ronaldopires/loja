<?php
/* Smarty version 3.1.36, created on 2020-06-30 13:07:22
  from 'C:\xampp\htdocs\loja\adm\view\adm_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5efb633a31dae5_83881026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '956a3cba91a033750e25a47d2052c8b112a1c3a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_pedidos.tpl',
      1 => 1580769839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efb633a31dae5_83881026 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-3">
    <div class="row no-gutters">
        <h4 class="text-center col-12"> Gerenciar Pedidos </h4>
        <hr>
        <?php if ($_smarty_tpl->tpl_vars['PESQUISAR']->value == false) {?>
        <div class="col">
            <label> Buscar entre datas</label>
            <form class="form-group row" name="buscardata" method="post" action="">
                <div class="col">
                    <input type="date" name="data_inicio" class="form-control" required>
                </div>
                <div class="col">
                    <input type="date" name="data_fim" class="form-control" required>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-success"> Buscar </button>
                </div>
            </form>
        </div>
        <div class="col">
            <label> Buscar por Referencia</label>
            <form class="form-group row" name="buscarrefcod" method="post" action="">
                <div class="col">
                    <input type="text" name="txt_ref" class="form-control" placeholder="Digite a referência" required>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-success"> Buscar </button>
                </div>
            </form>
        </div>
        <?php }?>
    </div>
    <hr>
    <div class="row no-gutters">
        <div class="col">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Hora</th>
                                    <th scope="col">Ref</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                                <tr class="text-left">
                                    <th class="align-middle" scope="row"><?php echo $_smarty_tpl->tpl_vars['P']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value['cli_sobrenome'];?>
</th>
                                    <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
                                    <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
                                    <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
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
                                    <td class="text-center">
                                        <form name="itens" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS_ADM']->value;?>
">
                                            <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                                            <button class="btn btn-outline-info"><i class="fas fa-bars"></i>
                                                Detalhes</button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form name="deletar" method="POST" action="">
                                            <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                                            <button name="ped_apagar" value="ped_apagar" class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-12">
                        <nav aria-label="paginacao">
                            <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
