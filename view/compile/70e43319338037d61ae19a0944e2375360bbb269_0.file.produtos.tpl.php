<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-28 22:46:21
  from 'C:\xampp\htdocs\loja\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e08056d12f845_77726319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70e43319338037d61ae19a0944e2375360bbb269' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\produtos.tpl',
      1 => 1577583977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e08056d12f845_77726319 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Alerta -->
<?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?> <h4 class="alert alert-danger text-center alertAdd"> <i class="fas fa-exclamation"></i> Nenhum Produto Encontrado
    </h4>
    <?php }?>
    <div class="container-fluid">
        <div class="row no-gutters">
            <!--Menu lateral -->
            <div class="col p-3 border-right">
                <nav class="nav flex-column">
                    <li class="nav-item disabled">Categorias</li>
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">Todos</a> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </nav>
            </div>

            <!-- Conteudos de Produtos -->
            <div class="col-10 p-3">
                <div class="row no-gutters">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                    <div class="card-group">
                        <div class="card m-2 mb-4" id="divProduto" style="width: 19rem;">
                            <a class="card-link img-hover-zoom" href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">
                                <img class="card-img-top img-fluid p-1" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_gg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
" title="Clique para visualizar">
                                <div class="card-body">
                                    <h5 class="card-title text-dark"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h5>
                                    <hr>
                                    <h4 class="card-subtitle" style="text-align: bottom;">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h4>
                            </a>
                            </div>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>

        </div>
        <div class="row no-gutters">
            <div class="col-12">
                <nav aria-label="paginacao">
                    <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

                </nav>
            </div>
        </div><?php }
}
