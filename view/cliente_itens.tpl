<div class="container">
    <div class="row no-gutters justify-content-center">
        <div class="col my-3">
            <h4 class="text-center">Dados do pedido</h4>
            <!-- informações sobre o pedido -->
            <section class="row no-gutters">
                <table class="table table-bordered rounded">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col"><b>Data:</b> {$ITENS.1.ped_data}</th>
                            <th scope="col"><b>Hora:</b> {$ITENS.1.ped_hora}</th>
                            <th scope="col"><b>Ref:</b> {$ITENS.1.ped_ref}</th>
                            <th scope="col"><b>Status:</b> {$ITENS.1.ped_pag_status}</th>
                        </tr>
                    </thead>
                </table>
            </section>
            <!-- listagem dos itens -->
            <section class="row no-gutters" id="listaitens">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr class="font-weight-bold">
                            <th scope="col"></th>
                            <th scope="col">Item</th>
                            <th scope="col" class="text-center">Valor Unitário</th>
                            <th scope="col" class="text-center">X</th>
                            <th scope="col" class="text-center">Sub</th>
                        </tr>
                    </thead>
                    {foreach from=$ITENS item=P}
                    <tr>
                        <td><img src="{$P.item_img}" alt=""> </td>
                        <td> {$P.item_nome}</td>
                        <td class="text-center"> {$P.item_valor}</td>
                        <td class="text-center"> {$P.item_qtd}</td>
                        <td class="text-center"> {$P.item_sub}</td>
                    </tr>
                    {/foreach}
                </table>
            </section>
            <section class="row no-gutters" id="resumo">
                <table class="table table-bordered">
                    <tr>
                        <td class="text-danger"><b>Frete:</b>R$ {$ITENS.1.ped_frete_valor}</td>
                        <td class="text-danger"><b>Total:</b>R$ {$TOTAL}</td>
                        <td class="text-danger"><b>Valor Total:</b>R$ {$ITENS.1.ped_frete_valor+$TOTAL}</td>
                    </tr>
                </table>
            </section>
        </div>
    </div>
    {if $ITENS.1.ped_pag_status =='Não concluido'}
    <!--  modos de pagamento e outras informações -->
    <div class="row no-gutters mb-4 justify-content-center">
        <div class="col-12">
            <h3 class="text-center"> Formas de pagamento </h3>
            <hr>
            <div class="container col-5">
                <img class="img-fluid" width="400rem;" src="{$TEMA}/tema/images/Logo_PagSeguro.png" alt="">
            </div>
        </div>
        <div class="col">
            <div class="container col-5">
                <button class="btn btn-success btn-lg btn-block" onclick="PagSeguroLightbox({
                    code: '{$PS_COD}'
                    }, {
                    success : function(transactionCode) {
                      alert('Transação efetuada com sucesso! - ' + transactionCode);
                        window.location ='{$PAG_RETORNO}/{$REF}';
                    },
                    abort : function() {
                       alert('Erro no processo de pagamento, tente novamente.');
                         window.location ='{$PAG_ERRO}/{$REF}';
                    }
                });">Pague com PagSeguro</button>
                <script type="text/javascript" src="{$PS_SCRIPT}"></script>
            </div>
        </div>
    </div>
    {/if}
</div>