<div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-sm">
            <h4 class="text-center">Gerenciar Clientes </h4>
            <hr>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email </th>
                        <th scope="col">Contato </th>
                        <th scope="col">Data cadastro</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$CLIENTES item=C}
                    <tr>
                        <th scope="row"><a href="{$PAG_PEDIDOS}/{$C.cli_id} " class="btn btn-info">Pedidos</a> </th>
                        <td>{$C.cli_nome} {$C.cli_sobrenome}</td>
                        <td>{$C.cli_email}</td>
                        <td>{$C.cli_celular}</td>
                        <td>{$C.cli_data_cad}</td>
                        <td>
                            <a href="{$PAG_EDITAR}/{$C.cli_id}" class="btn btn-info"> Ver </a>
                        </td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>