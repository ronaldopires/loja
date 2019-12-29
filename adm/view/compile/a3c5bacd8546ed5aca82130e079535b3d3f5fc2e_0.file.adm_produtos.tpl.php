<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-28 20:58:48
  from 'C:\xampp\htdocs\loja\adm\view\adm_produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e07ec384f25c7_40990450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3c5bacd8546ed5aca82130e079535b3d3f5fc2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_produtos.tpl',
      1 => 1577577527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e07ec384f25c7_40990450 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-3">
    <div class="row no-gutters justify-content-center">
        <div class="col-sm-12">
            <h5 class="text-center mt-2">Gerenciar Produtos</h5>
            <div class="row no-gutters my-3 justify-content-end">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS_NOVO']->value;?>
" class="btn btn-success btn-sm"><i class="fa fa-plus mr-2" aria-hidden="true"></i> Novo Produto
                </a>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?> <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>
                <?php }?>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Produto</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Excluir</th>
                                <th scope="col">Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                            <tr>
                                <th scope="row"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_p'];?>
" alt=""></th>
                                <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td>
                                <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</td>
                                <td class="align-middle">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
                                <td class="align-middle">
                                    <form name="proeditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS_EDITAR']->value;?>
">
                                        <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                        <button class="btn btn-success"> <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                    </form>
                                </td>
                                <td class="align-middle">
                                    <form name="frm_apagar" method="post" action="">
                                        <button type="submit" name="btn_apagar" class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                        <input type="hidden" name="pro_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
">
                                        <input type="hidden" name="pro_apagar" value="apagar">
                                        <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img_arquivo'];?>
">
                                    </form>
                                </td>
                                <td class="align-middle">
                                    <form name="pro_img" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS_IMG']->value;?>
">
                                        <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                        <!-- <input type="hidden" name="pro_img" id="pro_img" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_gg'];?>
"> -->
                                        <input type="hidden" name="pro_nome" id="pro_nome" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                                        <button class="btn btn-info"> <i class="fa fa-picture-o" aria-hidden="true"></i> </button>
                                    </form>
                                </td>
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
                <!--  paginação inferior   -->
                <section id="pagincao" class="row no-gutters justify-content-center">
                    <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

                </section>
        </div>
    </div>
</div><?php }
}
