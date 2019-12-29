<div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-sm">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid" src="./media/images/banner1.png" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="./media/images/design-1772284_1920.jpg" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="./media/images/polo.jpg" alt="Segundo Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="./media/images/calca05.jpg" alt="Terceiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="./media/images/tenis01.jpg" alt="Terceiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="./media/images/tshirt-2428521_1920.jpg" alt="Terceiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="./media/images/social.jpg" alt="Terceiro Slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Novidades-->
{if $PRO_TOTAL > 0}
<div class="container-fluid my-5 p-3">
    <div class="row no-gutters">
        <div class="col text-center">
            <hr>
            <h3>Novidades</h3>
        </div>
    </div>
    <div class="row no-gutters justify-content-center">
        <div class="card-group">
            {foreach from=$PRO item=P}
            <div class="card m-2 mb-4" id="divProduto" style="width: 19rem;">
                <a class="card-link img-hover-zoom" href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">
                    <img class="card-img-top img-fluid p-1" src="{$P.pro_img_gg}" alt="{$P.pro_nome}" title="Clique para visualizar">
                    <div class="card-body">
                        <h5 class="card-title text-dark">{$P.pro_nome}</h5>
                        <hr>
                        <h4 class="card-subtitle" style="text-align: bottom;">R$ {$P.pro_valor}</h4>
                    </div>
                </a>
            </div>
        </div>
        {/foreach}
    </div>
</div>
{/if}
<hr>