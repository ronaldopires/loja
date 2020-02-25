<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-24 23:48:29
  from 'C:\xampp\htdocs\loja\adm\view\adm_produtos_novo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e548afd3319d1_83761537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b93f268e5b701cd01eb4f6c8aab5520e210e2759' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_produtos_novo.tpl',
      1 => 1582598906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e548afd3319d1_83761537 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/tema/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
> -->

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

                    <div class="input-group col-sm">
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

                    <div class="input-group col-sm">
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
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Modelo</span>
                            </div>
                            <input id="pro_modelo" name="pro_modelo" placeholder="Modelo" class="form-control" type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Referencia</span>
                            </div>
                            <input id="pro_ref" name="pro_ref" class="form-control input-md" type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Valor</span>
                            </div>
                            <input id="pro_valor" name="pro_valor" class="form-control input-md" type="text" required>
                        </div>
                    </div>


                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Estoque</span>
                        </div>
                        <input id="pro_estoque" name="pro_estoque" class="form-control input-md" type="text" required>
                    </div>
                </div>
                <div class="input-group col mb-3">
                    <div class="input-group-prepend mr-3">
                        <span class="input-group-text">Calçados</span>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" class="form-check-input" id="34">
                        <label class="form-check-label" for="34">34</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" class="form-check-input" id="35">
                        <label class="form-check-label" for="35">35</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" class="form-check-input" id="36">
                        <label class="form-check-label" for="36">36</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" class="form-check-input" id="37">
                        <label class="form-check-label" for="37">37</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" class="form-check-input" id="38">
                        <label class="form-check-label" for="38">38</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" class="form-check-input" id="39">
                        <label class="form-check-label" for="39">39</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" class="form-check-input" id="40">
                        <label class="form-check-label" for="40">40</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" class="form-check-input" id="41">
                        <label class="form-check-label" for="41">41</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" class="form-check-input" id="42">
                        <label class="form-check-label" for="42">42</label>
                    </div>
                </div>
                <div class="input-group col mb-3">
                    <div class="input-group-prepend mr-3">
                        <span class="input-group-text">Roupas</span>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" class="form-check-input" id="pp">
                        <label class="form-check-label" for="p">PP</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" class="form-check-input" id="p">
                        <label class="form-check-label" for="p">P</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" class="form-check-input" id="m">
                        <label class="form-check-label" for="m">M</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" class="form-check-input" id="g">
                        <label class="form-check-label" for="g">G</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" class="form-check-input" id="gg">
                        <label class="form-check-label" for="gg">GG</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" class="form-check-input" id="xg">
                        <label class="form-check-label" for="xg">XG</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" class="form-check-input" id="xgg">
                        <label class="form-check-label" for="xgg">XGG</label>
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Peso</span>
                            </div>
                            <input id="pro_peso" name="pro_peso" class="form-control input-md" type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Altura</span>
                            </div>
                            <input id="pro_altura" name="pro_altura" class="form-control" type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Largura</span>
                            </div>
                            <input id="pro_largura" name="pro_largura" class="form-control" type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Comprimento</span>
                            </div>
                            <input id="pro_comprimento" name="pro_comprimento" class="form-control" type="text" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row no-gutters justify-content-end">
                    <div class="col-sm mb-3 pl-3 pr-3">
                        <div class="form-group" id="containerphoto">
                            <div class="custom-file">
                                <div class="input-group">
                                    <input type="file" name="pro_img" id="customFile[]" class="custom-file-input" required>
                                    <label class="custom-file-label text-left" for="customFile[]">Selecione a imagem principal</label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <button type="button" id="photobutton" name="btn_gravar" class="btn btn-outline-info">Adicionar outra imagem</button>
                        </div> -->
                    </div>
                </div>
                <div class="col-sm mb-3">
                    <div class="form-inline">
                        <div class="input-group col-12 p-0">
                            <textarea class="form-control" id="pro_desc" name="pro_desc" placeholder="Descrição do produto" required></textarea>
                            <?php echo '<script'; ?>
>
                                tinymce.init({
                                    selector: 'textarea'
                                });
                            <?php echo '</script'; ?>
>
                        </div>
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
                        <button type="submit" name="btn_gravar" class="btn btn-block btn-success">Gravar</button>
                    </div>
                    <div class="input-group col-2 ml-3 p-0">
                        <button type="reset" name="btn_reset" class="btn btn-block btn-danger">Cancelar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div><?php }
}
