<div class="container-fluid">
    <div class="col-12 my-3">
        <h4 class="text-center"> Imagens do produto</h4>
        <hr>
    </div>
    <div class="col-12">
        <div class="row no-gutters">
            {foreach from=$PRODUTOS item=P}
            <div class="col-3">
                <div class="card rounded" style="width: 18rem;">
                    <img src="{$P.pro_img_gg}" class="card-img-top rounded" alt="{$P.pro_nome}">
                    <div class="card-body text-center">
                        <p class="text-muted">Imagem Principal</p>
                        <input type="hidden" name="fotos_apagar[]" value="{$I.img_arquivo}">
                        <button type="submit" class="btn btn-danger">Apagar imagem</button>
                    </div>
                </div>
            </div>
            {/foreach}
            <div class="col-9">
                <form name="deletar" method="post" action="">
                    <div class="row no-gutters">
                        {foreach from=$IMAGES item=I}
                        <div class="card-group ml-3 mt-3">
                            <div class="card rounded" style="width: 18rem;">
                                <img src="{$I.img_nome}" class="card-img-top rounded" alt="{$I.img_nome}">
                                <div class="card-body text-center">
                                    <input type="hidden" name="fotos_apagar[]" value="{$I.img_arquivo}">
                                    <button type="submit" class="btn btn-danger">Apagar imagem</button>
                                </div>
                            </div>
                        </div>
                        {/foreach}
                    </div>

                    <input type="hidden" name="pro_id" value="{$I.img_pro_id}" />
                </form>
            </div>
        </div>
    </div>
    <div class="col-8 mt-4">
        <form name="nova" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <div class="custom-file">
                    <input type="hidden" name="pro_id" value="{$PRO}">
                    <input type="file" name="pro_img" class="custom-file-input" required>
                    <label class="custom-file-label text-left" for="pro_img">Selecione uma imagem</label>
                </div>
                <div class="form-group my-3">
                    <button class="btn btn-success">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>