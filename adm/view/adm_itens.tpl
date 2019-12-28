<script>
    function goBack() {
        window.history.back();
    }
</script>

<div class="container">
    <div class="row no-gutters justify-content-center">
        <div class="col my-3">
            <h4 class="text-center">Dados do pedido</h4>
            <div class="row no-gutters justify-content-end">
                <button onclick="goBack()" class="btn btn-warning">Voltar</button>
            </div>
            <section class="row no-gutters">
                <table class="table">
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
                <table class="table table-bordered table-hover">
                    <tr class="font-weight-bold">
                        <th scope="row"></th>
                        <td>Item</td>
                        <td class="text-center">Valor Unitário</td>
                        <td class="text-center">X</td>
                        <td class="text-center">Sub</td>
                    </tr>
                    {foreach from=$ITENS item=P}
                    <tr>
                        <th scope="row"><img src="{$P.item_img}" alt=""> </th>
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

            {if $ITENS.1.ped_pag_status =='NAO'}
            <!--  modos de pagamento e outras informações -->
            <section class="row">
                <h3 class="text-center"> Formas de pagamento </h3>
                <div class="col-md-4">
                </div>
                <!-- botao de pagamento  -->
                <div class="col-md-4">
                    BOTÃO DE PAGAMENTO
                    <img src="{$TEMA}/images/logo-pagseguro.png" alt="">
                    <script type="text/javascript" src=""></script>
                </div>
                <div class="col-md-4">
                </div>
            </section>
            {/if}
        </div>
    </div>
</div>