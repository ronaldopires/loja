<div class="container-fluid p-3">
    <div class="row no-gutters">
        <h4 class="text-center col-12"> Gerenciar Pedidos </h4>
        <hr>
        <div class="col">
            <label> Buscar entre datas</label>
            <form class="form-group row" name="buscardata" method="post" action="">
                <div class="col">
                    <input type="date" name="data_inicio" class="form-control" required>
                </div>
                <div class="col">
                    <input type="date" name="data_fim" class="form-control" required>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-success"> Buscar </button>
                </div>
            </form>
        </div>
        <div class="col">
            <label> Buscar por Referencia</label>
            <form class="form-group row" name="buscarrefcod" method="post" action="">
                <div class="col">
                    <input type="text" name="txt_ref" class="form-control" placeholder="Digite a referência" required>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-success"> Buscar </button>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row no-gutters">
        <div class="col">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Hora</th>
                                    <th scope="col">Ref</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach from=$PEDIDOS item=P}
                                <tr class="text-left">
                                    <th class="align-middle" scope="row">{$P.cli_nome} {$P.cli_sobrenome}</th>
                                    <td class="align-middle">{$P.ped_data}</td>
                                    <td class="align-middle">{$P.ped_hora}</td>
                                    <td class="align-middle">{$P.ped_ref}</td>
                                    {if $P.ped_pag_status == 'AGUARDANDO PAGAMENTO'}
                                    <td class="text-warning align-middle">{$P.ped_pag_status}</td>
                                    {elseif $P.ped_pag_status == 'PAGAMENTO CONCLUIDO'}
                                    <td class="text-success align-middle">{$P.ped_pag_status}</td>
                                    {else}
                                    <td class="text-danger align-middle">{$P.ped_pag_status}</td>
                                    {/if}
                                    <td class="text-center">
                                        <form name="itens" method="POST" action="{$PAG_ITENS_ADM}">
                                            <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
                                            <button class="btn btn-outline-info"><i class="fas fa-bars"></i>
                                                Detalhes</button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form name="deletar" method="POST" action="">
                                            <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
                                            <button name="ped_apagar" value="ped_apagar" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-12">
                        <nav aria-label="paginacao">
                            {$PAGINAS}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>