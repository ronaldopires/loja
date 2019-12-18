<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 01:39:12
  from 'C:\xampp\htdocs\loja\adm\view\adm_produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df9ad70149e21_00022599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3c5bacd8546ed5aca82130e079535b3d3f5fc2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_produtos.tpl',
      1 => 1576643950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df9ad70149e21_00022599 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-0">
    <div class="row no-gutters justify-content-center">
        <div class="col-10">
            <h4 class="text-center">Gerenciar Produtos</h4>
            <div class="row no-gutters my-3 justify-content-end">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS_NOVO']->value;?>
" class="btn btn-success"><i class="fa fa-plus mr-2" aria-hidden="true"></i> Novo Produto
                </a>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?> <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>
                <?php }?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</td>
                            <td>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
                            <td>
                                <form name="proeditar" method="post" action="">
                                    <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                    <button class="btn btn-success"> <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <!-- <form name="limpar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                                    <input type="hidden" name="acao" value="del">
                                    <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                    <button class="btn btn-outline-danger btn-sm"><i class="fas fa-times"></i></button>
                                </form> -->
                            </td>
                            <td>
                                <form name="proimg" method="post" action="">
                                    <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
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
                <!--  paginação inferior   -->
                <section id="pagincao" class="row no-gutters justify-content-center">
                    <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

                </section>
        </div>
    </div>
</div><?php }
}
