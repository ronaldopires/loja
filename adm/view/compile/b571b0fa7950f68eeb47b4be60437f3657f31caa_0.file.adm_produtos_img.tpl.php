<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-20 05:03:27
  from 'C:\xampp\htdocs\loja\adm\view\adm_produtos_img.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfc804f6be060_68096316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b571b0fa7950f68eeb47b4be60437f3657f31caa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_produtos_img.tpl',
      1 => 1576828931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfc804f6be060_68096316 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="col-12 my-3">
        <h4 class="text-center"> Imagens do produto</h4>
        <hr>
    </div>
    <div class="col-12">
        <div class="row no-gutters">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUTOS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
            <div class="col-3">
                <div class="card rounded" style="width: 18rem;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_gg'];?>
" class="card-img-top rounded" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                    <div class="card-body text-center">
                        <p class="text-muted">Imagem Principal</p>
                        <input type="hidden" name="fotos_apagar[]" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_arquivo'];?>
">
                        <button type="submit" class="btn btn-danger">Apagar imagem</button>
                    </div>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="col-9">
                <form name="deletar" method="post" action="">
                    <div class="row no-gutters">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>
                        <div class="card-group ml-3 mt-3">
                            <div class="card rounded" style="width: 18rem;">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
" class="card-img-top rounded" alt="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
">
                                <div class="card-body text-center">
                                    <input type="hidden" name="fotos_apagar[]" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_arquivo'];?>
">
                                    <button type="submit" class="btn btn-danger">Apagar imagem</button>
                                </div>
                            </div>
                        </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>

                    <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_pro_id'];?>
" />
                </form>
            </div>
        </div>
    </div>
    <div class="col-8 mt-4">
        <form name="nova" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <div class="custom-file">
                    <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value;?>
">
                    <input type="file" name="pro_img" class="custom-file-input" required>
                    <label class="custom-file-label text-left" for="pro_img">Selecione uma imagem</label>
                </div>
                <div class="form-group my-3">
                    <button class="btn btn-success">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div><?php }
}
