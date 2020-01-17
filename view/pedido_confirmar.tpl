<div class="container containers my-5">
    <div class="row no-gutters">
        <div class="col p-0">
            <div class="col p-0 mt-2">
                <h3>Confirmar Pedido</h3>
                <hr>
            </div>
            <div class="col p-0 text-right">
                <a href="{$PAG_CARRINHO}" class="btn btn-outline-info"><i class="fas fa-shopping-basket mr-2"></i> Voltar</a>
            </div>
            <div class="col p-0 mt-3">
                <table class="table">
                    <thead class="">
                        <tr class="table-success text-success">
                            <th scope="col"></th>
                            <th scope="col">Produto </th>
                            <th class="text-center" scope="col">Valor <i class="fas fa-dollar-sign"></i></th>
                            <th class="text-center" scope="col">Quantidade</i>
                            </th>
                            <th class="text-center" scope="col">Sub Total <i class="fas fa-dollar-sign"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$PRO item=P}
                        <tr>
                            <td><img src="{$P.pro_img}" alt="{$P.pro_nome}"></td>
                            <td class="align-middle">{$P.pro_nome}</td>
                            <td class="text-center align-middle">R$ {$P.pro_valor}</td>
                            <td class="text-center align-middle">{$P.pro_qtd}</td>
                            <td class="text-center align-middle">R$ {$P.pro_subTotal}</td>

                        </tr>
                        {/foreach}
                    </tbody>
                </table>
                </table>
            </div>
            <hr>
            <div class="row no-gutters mt-2">
                <div class="col p-2 text-right">
                    <h6>Pedido R$ {$TOTAL}</h6>
                    <!-- {if $CUPOM == true}
                    <h6>Cupom R$ -{$CUPOM}</h6>
                    {/if} -->
                    <h6>Frete R$ {$FRETE}</h6>
                    <h5>Valor Total R$ {$TOTAL_FRETE}</h5>
                </div>

            </div>
            <hr>
            <div class="col p-0">
                <!-- botão finalzar -->
                <div class="col p-0 text-right justify-content-center">
                    <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="{$PAG_FINALIZAR}">
                        <button class="btn btn-outline-success" type="submit"><i class="fas fa-shopping-cart mr-3"></i>Efetuar Pedido</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>