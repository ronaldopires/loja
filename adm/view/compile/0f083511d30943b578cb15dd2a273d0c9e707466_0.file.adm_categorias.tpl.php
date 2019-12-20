<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-20 14:48:56
  from 'C:\xampp\htdocs\loja\adm\view\adm_categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfd0988a45e84_42638867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f083511d30943b578cb15dd2a273d0c9e707466' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_categorias.tpl',
      1 => 1576864117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfd0988a45e84_42638867 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="row no-gutters justify-content-center my-3">
        <div class="col-12 text-center my-3">
            <h4>Gerenciar Categorias</h4>
        </div>
        <div class="col-8">
            <form class="form-inline" name="inserircategoria" method="post" action="" enctype="multipart/form-data">
                <div class="form-group col-8">
                    <input type="text" name="cate_nome" id="cate_nome" class="form-control w-100" placeholder="Nome da Categoria" required>
                </div>
                <div class="form-group ml-3 float-right">
                    <button name="cate_nova" value="cate_nova" class="btn btn-outline-success">Inserir Nova</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row no-gutters justify-content-center">
        <div class="col-8">
            <table class="table table-bordered" style="width: 90%">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                <form name="categorias_editar" method="post" action="">
                    <tr>
                        <td class="col-7">
                            <input type="text" name="cate_nome" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
" class="form-control" required>
                            <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
">
                        </td>
                        <td>
                            <button class="btn btn-success" name="cate_editar" value="cate_editar">Editar</button>
                        </td>
                        <td>
                            <button class="btn btn-danger" name="cate_apagar" value="cate_apagar">Apagar</button>
                        </td>
                    </tr>
                </form>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    </div>
</div><?php }
}
