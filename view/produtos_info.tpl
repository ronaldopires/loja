<div class="container pt-3">

    {foreach from=$PRO item=P}

    <hr>

    <div class="row no-gutters">
        <div class="col-1">
            <!-- Miniatura cards -->
            <div class="col">
                {foreach from=$IMAGES item=I}
                <div class="card" style="width: 5rem;">
                    <img class="card-img-top" src="{$I.img_nome}" alt="{$P.pro_nome}">
                </div>
                {/foreach}
            </div>
        </div>
        <div class="col pl-3">
            <img class="img-fluid img-thumbnail" src="{$P.pro_img_gg}" alt="{$P.pro_nome}">
        </div>
        <div class="col">
            <div class="col border">
                <p>Detalhes do produto</p>
                <h3 class="text-center"> {$P.pro_nome}{* - {$P.pro_ref} *}</h3>
                <hr>
                <div class="row no-gutters">
                    <div class="col p-2">
                        <!-- Tamanho -->

                        <form class="form-horizontal text-center" action="" method="">

                            <input class="d-none" type="radio" value="34" name="tamanho" id="34">
                            <label class="tamanho" for="34">34</label>

                            <input class="d-none" type="radio" value="35" name="tamanho" id="35">
                            <label class="tamanho" for="35">35</label>

                            <input class="d-none" type="radio" value="36" name="tamanho" id="36">
                            <label class="tamanho" for="36">36</label>

                            <input class="d-none" type="radio" value="37" name="tamanho" id="37">
                            <label class="tamanho" for="37">37</label>

                            <input class="d-none" type="radio" value="38" name="tamanho" id="38">
                            <label class="tamanho" for="38">38</label>

                        </form>
                    </div>
                </div>
                <div class="col">
                    <img class="img-fluid" src="{$TEMA}/tema/images/adesivo_bandeiras_PagSeguro_dez2016.jpg" alt="">
                </div>


                <div class="row no-gutters">
                    <hr>
                    <div class="col">
                        <h3 class="text-center preco">R$ {$P.pro_valor}</h3>
                    </div>
                    <div class="col">
                        <form class="form-group" name="carrinho" method="post" action="{$PAG_COMPRAR}">
                            <input class="form-control" type="hidden" name="pro_id" value="{$P.pro_id}" />
                            <input class="form-control" type="hidden" name="acao" value="add" />
                            <button class="btn btn-success ">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <hr>
    <!-- Descrição do Produto -->
    <div class="row no-gutters">
        <div class="col-12">
            <p class="text-center">Descrição do Produto</p>
            <p class="text-center">{$P.pro_desc}</p>
        </div>
    </div>

    {/foreach}
</div>