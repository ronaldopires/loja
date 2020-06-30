<!-- Alerta -->
{if $PRO_TOTAL
< 1} <h4 class="alert alert-danger text-center alertAdd"> <i class="fas fa-exclamation"></i> Nenhum Produto Encontrado
    </h4>
    <meta http-equiv="refresh" content="1;url={$PAG_PRODUTOS}"> {/if}
    <div class="row">
        <div class="col-12">
            <h5 class="alert alert-danger text-center">
                <p>Produtos meramente ilustrativos</p>
            </h5>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row no-gutters">
            <!--Menu lateral -->
            <div class="col-2 p-3 border-right">
                <nav class="nav flex-column">
                    <li class="nav-item disabled">Categorias</li>
                    <a class="nav-link active" href="{$PAG_PRODUTOS}">Todos</a> {foreach from=$CATEGORIAS item=C}
                    <a class="nav-link" href="{$C.cate_link}">{$C.cate_nome}</a> {/foreach}
                </nav>
            </div>

            <!-- Conteudos de Produtos -->
            <div class="col p-3">
                <div class="row no-gutters">
                    {foreach from=$PRO item=P}
                    <div class="card-group">
                        <div class="card m-2 mb-4" id="divProduto" style="width: 19rem;">
                            <a class="card-link img-hover-zoom" href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">
                                <img class="card-img-top img-fluid p-1" src="{$P.pro_img_gg}" alt="{$P.pro_nome}" title="{$P.pro_nome}">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">{$P.pro_nome}</h5>
                                    <hr>
                                    <h4 class="card-subtitle" style="text-align: bottom;">R$ {$P.pro_valor}</h4>
                            </a>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                </div>
            </div>

        </div>
        <div class="row no-gutters">
            <div class="col-12">
                <nav aria-label="paginacao">
                    {$PAGINAS}
                </nav>
            </div>
        </div>