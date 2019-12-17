<div class="container">
    <div class="row no-gutters">
        <div class="col-12">
            {if $PEDIDOS_TOTAL > 0}
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr class="text-center">
                        <th scope="col">Data</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Pedido</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$PEDIDOS item=P}
                    <tr class="text-center">
                        <th class="align-middle" scope="row">{$P.ped_data}</th>
                        <td class="align-middle">{$P.ped_hora}</td>
                        <td class="align-middle">{$P.ped_cod}</td>
                        {if $P.ped_pag_status == 'AGUARDANDO PAGAMENTO'}
                        <td class="text-warning align-middle">{$P.ped_pag_status}</td>
                        {elseif $P.ped_pag_status == 'PAGAMENTO CONCLUIDO'}
                        <td class="text-success align-middle">{$P.ped_pag_status}</td>
                        {else}
                        <td class="text-danger align-middle">{$P.ped_pag_status}</td>
                        {/if}
                        <form name="itens" method="POST" action="{$PAG_ITENS}">
                            <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
                            <td class="text-center"><button class="btn btn-outline-success"><i class="fas fa-bars"></i> Detalhes</button></td>
                        </form>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
            {else}
            <div class="container">
                <div class="row no-gutters justify-content-center">
                    <div class="col-10 text-center">
                        <h4 class="alert alert-danger">Você não possui pedidos!</h4>
                    </div>
                </div>
                <div class="row no-gutters justify-content-center">
                    <div class="col-10 text-center">
                        <h6>Verifique nossa lista de produtos clicando
                            <a href="{$PAG_PRODUTOS}">aqui</a>
                        </h6>
                    </div>
                </div>
            </div>
            {/if}
        </div>
    </div>
</div>