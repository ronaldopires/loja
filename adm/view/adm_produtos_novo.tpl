<!-- <script src="{$TEMA}/tema/js/tinymce/tinymce.min.js"></script> -->

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
                            <input id="pro_modelo" name="pro_modelo" placeholder="Modelo" class="form-control" required type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Referencia</span>
                            </div>
                            <input id="pro_ref" name="pro_ref" class="form-control input-md" required type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Valor</span>
                            </div>
                            <input id="pro_valor" name="pro_valor" class="form-control input-md" required type="text" required>
                        </div>
                    </div>


                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Estoque</span>
                        </div>
                        <input id="pro_estoque" name="pro_estoque" class="form-control input-md" required type="text" required>
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Peso</span>
                            </div>
                            <input id="pro_peso" name="pro_peso" class="form-control input-md" required type="text" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Altura</span>
                            </div>
                            <input id="pro_altura" name="pro_altura" class="form-control" required type="text" required>
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
                        <div class="form-inline mb-3">
                            <b>Tamanhos</b>
                            <div class="form-check ml-3">
                                <input class="form-check-input" type="checkbox" name="pro_tamanho[]" value="35" id="pro_tamanho">
                                <label class="form-check-label" for="35">35</label>
                            </div>
                            <div class="form-check mx-3">
                                <input class="form-check-input" type="checkbox" name="pro_tamanho[]" value="36" id="pro_tamanho">
                                <label class="form-check-label" for="36">36</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pro_tamanho[]" value="37" id="pro_tamanho">
                                <label class="form-check-label" for="37">37</label>
                            </div>
                            <div class="form-check mx-3">
                                <input class="form-check-input" type="checkbox" name="pro_tamanho[]" value="38" id="pro_tamanho">
                                <label class="form-check-label" for="38">38</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pro_tamanho[]" value="39" id="pro_tamanho">
                                <label class="form-check-label" for="39">39</label>
                            </div>
                        </div>
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
                            <script>
                                tinymce.init({
                                    selector: 'textarea'
                                });
                            </script>
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
</div>