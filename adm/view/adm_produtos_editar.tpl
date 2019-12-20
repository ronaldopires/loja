<!-- <script src="{$TEMA}/tema/js/tinymce/tinymce.min.js"></script> -->

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
                        <input id="pro_nome" name="pro_nome" type="text" value="{$PRO.1.pro_nome}" placeholder="Nome do produto" aria-label="nome produto" class="form-control" required>
                    </div>

                    <div class="input-group col-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Categoria</span>
                        </div>
                        <select class="form-control" id="pro_categoria" value="" name="pro_categoria" required>
                            <option selected value="{$PRO.1.cate_id}"> {$PRO.1.cate_nome}</option>
                            {foreach from=$CATEGORIAS item=C}
                            <option value="{$C.cate_id}">{$C.cate_nome}</option>
                            {/foreach}
                        </select>
                    </div>

                    <div class="input-group col-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Ativo</span>
                        </div>
                        <select class="form-control" id="pro_ativo" name="pro_ativo" required>
                            <option selected value="{$PRO.1.pro_ativo}">{$PRO.1.pro_ativo}</option>
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
                            <input id="pro_modelo" name="pro_modelo" value="{$PRO.1.pro_modelo}" placeholder="Modelo" class="form-control" required type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Referencia</span>
                            </div>
                            <input id="pro_ref" name="pro_ref" value="{$PRO.1.pro_ref}" class="form-control input-md" required type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Valor</span>
                            </div>
                            <input id="pro_valor" name="pro_valor" value="{$PRO.1.pro_valor}" class="form-control input-md" required type="text" required>
                        </div>
                    </div>


                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Estoque</span>
                        </div>
                        <input id="pro_estoque" name="pro_estoque" value="{$PRO.1.pro_estoque}" class="form-control input-md" required type="text" required>
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Peso</span>
                            </div>
                            <input id="pro_peso" name="pro_peso" value="{$PRO.1.pro_peso}" class="form-control input-md" required type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Altura</span>
                            </div>
                            <input id="pro_altura" name="pro_altura" value="{$PRO.1.pro_altura}" class="form-control" required type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Largura</span>
                            </div>
                            <input id="pro_largura" name="pro_largura" value="{$PRO.1.pro_largura}" class="form-control" type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Comprimento</span>
                            </div>
                            <input id="pro_comprimento" name="pro_comprimento" value="{$PRO.1.pro_comprimento}" class="form-control" type="text" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-sm mb-3">
                    <div class="input-group">
                        <div class="col-md-4">
                            <img src="{$PRO.1.pro_img}" class="img-thumbnail" alt="">
                        </div>
                        <div class="custom-file pt-5">
                            <!--pega o nome da imagem atual -->
                            <input type="hidden" name="pro_img_atual" id="pro_img_atual" value="{$PRO.1.pro_img_atual}">
                            <!----pega o caminho completo da imagem atual -->
                            <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="{$PRO.1.pro_img_arquivo}">
                            <input type="file" name="pro_img" id="pro_img" class="custom-file-input">
                            <label class="custom-file-label text-left" for="pro_img">Selecione a imagem
                                principal</label>
                        </div>
                        <!-- <div class="form-group mb-3">
                            <b>Tamanhos</b>
                            
                            <div class="form-check ml-3">
                                <input class="form-check-input" type="checkbox" name="pro_tamanho[]" value="35" id="pro_tamanho">
                                <label class="form-check-label" for="35">35</label>
                            </div>
                            
                        </div> -->
                    </div>
                </div>

                <div class="col-sm mb-3">
                    <div class="form-inline">
                        <div class="input-group col-12 p-0">
                            <textarea style="height: 200px;" class="form-control" id="pro_desc" name="pro_desc" value="{$PRO.1.pro_desc}" aria-label="Descrição do produto" required>{$PRO.1.pro_desc}</textarea>
                            <!-- <script>
                                tinymce.init({
                                    selector: 'textarea'
                                });
                            </script> -->
                        </div>
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Slug</span>
                        </div>
                        <input id="pro_slug" name="pro_slug" class="form-control" value="{$PRO.1.pro_slug}" required type="text" readonly>
                    </div>

                </div>

                <div class="form-inline mb-3 justify-content-center">
                    <div class="input-group col-2 p-0">
                        <input type="hidden" name="pro_id" value="{$PRO.1.pro_id}">
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
                            <div class="modal-footer">
                                <form name="frm_apagar" method="post" action="">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" name="btn_apagar" class="btn btn-danger"><span ><i style="font-size: 3vh;" class="material-icons mr-2">delete</i></span> Excluir Produto</button>
                                    <input type="hidden" name="pro_id_apagar" value="{$PRO.1.pro_id}">
                                    <input type="hidden" name="pro_apagar" value="apagar">
                                    <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="{$PRO.1.pro_img_arquivo}">
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
</div>