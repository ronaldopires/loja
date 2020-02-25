<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-25 00:29:01
  from 'C:\xampp\htdocs\loja\adm\view\adm_produtos_editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e54947db447f2_92200084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6708a8797b6bcd34e341724e543349de3d56ed82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_produtos_editar.tpl',
      1 => 1582601340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e54947db447f2_92200084 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/tema/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
> -->

<div class="container-fluid">
    <div class="row no-gutters">
        <div class="col">
            <form class="form-group p-3" action="" method="post" enctype="multipart/form-data">
                <h4 class="text-center">Editar produto</h4>
                <hr>
                <div class="form-inline mb-3">
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Produto</span>
                        </div>
                        <input id="pro_nome" name="pro_nome" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_nome'];?>
" placeholder="Nome do produto" aria-label="nome produto" class="form-control" required>
                    </div>

                    <div class="input-group col-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Categoria</span>
                        </div>
                        <select class="form-control" id="pro_categoria" value="" name="pro_categoria" required>
                            <option selected value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</option>
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
                            <option selected value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_ativo'];?>
"><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_ativo'];?>
</option>
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
                            <input id="pro_modelo" name="pro_modelo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_modelo'];?>
" placeholder="Modelo" class="form-control" type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Referencia</span>
                            </div>
                            <input id="pro_ref" name="pro_ref" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_ref'];?>
" class="form-control input-md" type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Valor</span>
                            </div>
                            <input id="pro_valor" name="pro_valor" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_valor'];?>
" class="form-control input-md" type="text" required>
                        </div>
                    </div>


                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Estoque</span>
                        </div>
                        <input id="pro_estoque" name="pro_estoque" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_estoque'];?>
" class="form-control input-md" type="text" required>
                    </div>
                </div>
                <div class="input-group col mb-3">
                    <div class="input-group-prepend mr-3">
                        <span class="input-group-text">Calçados</span>
                    </div>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
">
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
" selected class="form-check-input" id="34">
                        <label class="form-check-label" for="34">34</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
" selected class="form-check-input" id="35">
                        <label class="form-check-label" for="35">35</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
" selected class="form-check-input" id="36">
                        <label class="form-check-label" for="36">36</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
" selected class="form-check-input" id="37">
                        <label class="form-check-label" for="37">37</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
" selected class="form-check-input" id="38">
                        <label class="form-check-label" for="38">38</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
" selected class="form-check-input" id="39">
                        <label class="form-check-label" for="39">39</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
" selected class="form-check-input" id="40">
                        <label class="form-check-label" for="40">40</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
" selected class="form-check-input" id="41">
                        <label class="form-check-label" for="41">41</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
" selected class="form-check-input" id="42">
                        <label class="form-check-label" for="42">42</label>
                    </div>
                </div>
                <div class="input-group col mb-3">
                    <div class="input-group-prepend mr-3">
                        <span class="input-group-text">Roupas</span>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
" selected class="form-check-input" id="pp">
                        <label class="form-check-label" for="p">PP</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
" selected class="form-check-input" id="p">
                        <label class="form-check-label" for="p">P</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
" selected class="form-check-input" id="m">
                        <label class="form-check-label" for="m">M</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
" selected class="form-check-input" id="g">
                        <label class="form-check-label" for="g">G</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
" selected class="form-check-input" id="gg">
                        <label class="form-check-label" for="gg">GG</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
" selected class="form-check-input" id="xg">
                        <label class="form-check-label" for="xg">XG</label>
                    </div>
                    <div class="form-check-inline form-check">
                        <input name="pro_tamanho[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_tamanho'];?>
" selected class="form-check-input" id="xgg">
                        <label class="form-check-label" for="xgg">XGG</label>
                    </div>
                </div>
                <div class="form-inline mb-3">
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Peso</span>
                            </div>
                            <input id="pro_peso" name="pro_peso" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_peso'];?>
" class="form-control input-md" type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Altura</span>
                            </div>
                            <input id="pro_altura" name="pro_altura" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_altura'];?>
" class="form-control" type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Largura</span>
                            </div>
                            <input id="pro_largura" name="pro_largura" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_largura'];?>
" class="form-control" type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Comprimento</span>
                            </div>
                            <input id="pro_comprimento" name="pro_comprimento" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_comprimento'];?>
" class="form-control" type="text" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-sm mb-3">
                    <div class="input-group">
                        <div class="col-md-4">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img'];?>
" class="img-thumbnail" alt="">
                        </div>
                        <div class="custom-file pt-5">
                            <!--pega o nome da imagem atual -->
                            <input type="hidden" name="pro_img_atual" id="pro_img_atual" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img_atual'];?>
">
                            <!----pega o caminho completo da imagem atual -->
                            <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img_arquivo'];?>
">
                            <input type="file" name="pro_img" id="pro_img" class="custom-file-input">
                            <label class="custom-file-label text-left" for="pro_img">Selecione a imagem
                                principal</label>
                        </div>
                    </div>
                </div>

                <div class="col-sm mb-3">
                    <div class="form-inline">
                        <div class="input-group col-12 p-0">
                            <textarea style="height: 200px;" class="form-control" id="pro_desc" name="pro_desc" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_desc'];?>
" aria-label="Descrição do produto" required><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_desc'];?>
</textarea>
                            <!-- <?php echo '<script'; ?>
>
                                tinymce.init({
                                    selector: 'textarea'
                                });
                            <?php echo '</script'; ?>
> -->
                        </div>
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Slug</span>
                        </div>
                        <input id="pro_slug" name="pro_slug" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_slug'];?>
" required type="text" readonly>
                    </div>

                </div>

                <div class="form-inline mb-3 justify-content-center">
                    <div class="input-group col-2 p-0">
                        <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
">
                        <button type="submit" name="btn_gravar" class="btn btn-block btn-success">Atualizar</button>
                    </div>
            </form>
            <div class="input-group col-2 ml-3 p-0">
                <button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-target="#deletarProduto">Apagar Produto</button>
                <!-- Modal -->
                <div class="modal fade" id="deletarProduto" tabindex="-1" role="dialog" aria-labelledby="deletarProduto" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deletarProduto">Excluir Produto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                            </div>
                            <div class="modal-body text-center">
                                <h5>Você deseja realmente excluir esse produto?</h5>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <form name="frm_apagar" method="post" action="">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" name="btn_apagar" class="btn btn-danger">Excluir Produto</button>
                                    <input type="hidden" name="pro_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
">
                                    <input type="hidden" name="pro_apagar" value="apagar">
                                    <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img_arquivo'];?>
">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--End form inline-->
        </div>
    </div>
</div><?php }
}
