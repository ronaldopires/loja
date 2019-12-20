<div class="container-fluid">
    <div class="col-12 my-3">
        <h4 class="text-center"> Imagens do produto</h4>
        <hr>
    </div>
    <div class="col-12">
        <div class="row no-gutters justify-content-center">
            <div class="col-9">
                <form class="form-inline justify-content-center" name="nova" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="hidden" name="pro_id" value="{$PRO}">
                            <input type="file" name="pro_img" class="custom-file-input" required>
                            <label class="custom-file-label" for="pro_img">Selecione uma imagem</label>
                        </div>
                    </div>
                    <div class="form-group ml-3 float-right">
                        <button class="btn btn-info">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-9">
                <form name="deletar" method="post" action="">
                    <div class="row no-gutters">
                        {foreach from=$IMAGES item=I}
                        <div class="card-group ml-3 mt-3">
                            <div class="card rounded" id="divProduto" style="width: 15rem;">
                                <img src="{$I.img_nome}" class="card-img-top rounded" alt="{$I.img_nome}">
                                <div class="card-body text-center">
                                    <button type="submit" name="fotos_apagar[]" value="{$I.img_arquivo}" class="btn btn-danger">Apagar imagem</button>
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
</div>