<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 02:51:46
  from 'C:\xampp\htdocs\loja\adm\view\adm_produtos_novo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df9be72b66f63_51712480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b93f268e5b701cd01eb4f6c8aab5520e210e2759' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_produtos_novo.tpl',
      1 => 1576648303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df9be72b66f63_51712480 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/tema/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>

<div class="container-fluid">
    <div class="row no-gutters">
        <div class="col">
            <form class="form-group p-3" action="" method="post" enctype="multipart/form-data">
                <h4 class="text-center">Adicionar novo produto</h4>
                <hr>
                <div class="form-inline mb-3">
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Produto</span>
                        </div>
                        <input id="pro_nome" name="pro_nome" type="text" placeholder="Nome do produto" aria-label="nome produto" class="form-control" required>
                    </div>

                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Categoria</span>
                        </div>
                        <select class="form-control" id="pro_categoria" name="pro_categoria" required>
                            <option selected>Escolha</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Ativo</span>
                        </div>
                        <select class="form-control" id="pro_ativo" name="pro_ativo" required>
                            <option selected>Escolha</option>
                            <option value="NAO">Não</option>
                            <option value="SIM">Sim</option>
                        </select>
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Modelo</span>
                        </div>
                        <input id="pro_modelo" name="pro_modelo" placeholder="Modelo" class="form-control" required type="text" required>
                    </div>

                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Referencia</span>
                        </div>
                        <input id="pro_ref" name="pro_ref" class="form-control input-md" required type="text" required>
                    </div>

                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Valor</span>
                        </div>
                        <input id="pro_valor" name="pro_valor" class="form-control input-md" required type="text" required>
                    </div>

                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Estoque</span>
                        </div>
                        <input id="pro_estoque" name="pro_estoque" class="form-control input-md" required type="text" required>
                    </div>

                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Peso</span>
                        </div>
                        <input id="pro_peso" name="pro_peso" class="form-control input-md" required type="text" required>
                    </div>


                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Altura</span>
                        </div>
                        <input id="pro_altura" name="pro_altura" class="form-control" required type="text" required>
                    </div>

                    <div class="input-group col-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Largura</span>
                        </div>
                        <input id="pro_largura" name="pro_largura" class="form-control" type="text" required>
                    </div>

                    <div class="input-group col-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Comprimento</span>
                        </div>
                        <input id="pro_comprimento" name="pro_comprimento" class="form-control" type="text" required>
                    </div>
                </div>
                <hr>
                <div class="custom-file mb-3 col">
                    <div class="input-group">
                        <input type="file" name="pro_img" id="customFile" class="custom-file-input" required>
                        <label class="custom-file-label text-left" for="customFile">Selecione a imagem principal</label>
                    </div>
                </div>


                <div class="form-inline mb-3">
                    <div class="input-group col-12">
                        <textarea class="form-control" style="height: 300px;" id="pro_desc" name="pro_desc" placeholder="Descrição do produto" required></textarea>
                        <?php echo '<script'; ?>
>
                            tinymce.init({
                                selector: 'textarea'
                            });
                        <?php echo '</script'; ?>
>
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Slug</span>
                        </div>
                        <input id="pro_slug" name="pro_slug" class="form-control" required type="text" readonly>
                    </div>

                </div>

                <div class="form-inline mb-3 justify-content-center">
                    <div class="input-group col-2 p-0">
                        <button type="submit" name="btn_gravar" class="btn btn-block btn-lg btn-success">Gravar</button>
                    </div>
                    <div class="input-group col-2 ml-3 p-0">
                        <button type="reset" name="btn_reset" class="btn btn-block btn-lg btn-danger">Cancelar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div><?php }
}
