<div class="container-fluid p-3">
    <div class="row no-gutters justify-content-center">
        <div class="col-sm-12">
            <h5 class="text-center mt-2">Gerenciar Produtos</h5>
            <div class="row no-gutters my-3 justify-content-end">
                <a href="{$PAG_PRODUTOS_NOVO}" class="btn btn-success btn-sm"><i class="fa fa-plus mr-2" aria-hidden="true"></i> Novo Produto
                </a>
            </div>
            {if $PRO_TOTAL
            < 1} <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>
                {/if}
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Produto</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$PRO item=P}
                            <tr>
                                <th scope="row"><img src="{$P.pro_img_p}" alt=""></th>
                                <td class="align-middle">{$P.pro_nome}</td>
                                <td class="align-middle">{$P.cate_nome}</td>
                                <td class="align-middle">R$ {$P.pro_valor}</td>
                                <td class="align-middle">
                                    <form name="proeditar" method="post" action="{$PAG_PRODUTOS_EDITAR}">
                                        <input type="hidden" name="pro_id" id="pro_id" value="{$P.pro_id}">
                                        <button class="btn btn-success"> <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                    </form>
                                </td>
                                <td class="align-middle">
                                    <form name="pro_img" method="post" action="{$PAG_PRODUTOS_IMG}">
                                        <input type="hidden" name="pro_id" id="pro_id" value="{$P.pro_id}">
                                        <!-- <input type="hidden" name="pro_img" id="pro_img" value="{$P.pro_img_gg}"> -->
                                        <input type="hidden" name="pro_nome" id="pro_nome" value="{$P.pro_nome}">
                                        <button class="btn btn-info"> <i class="fa fa-picture-o" aria-hidden="true"></i> </button>
                                    </form>
                                </td>
                            </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
                <!--  paginação inferior   -->
                <section id="pagincao" class="row no-gutters justify-content-center">
                    {$PAGINAS}
                </section>
        </div>
    </div>
</div>