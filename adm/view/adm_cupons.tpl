<div class="container-fluid">
    <div class="row no-gutters justify-content-center my-3">
        <div class="col p-3">
            <h5 class="text-center">Cupons Ativos</h5>
            <hr>
            <div class="col" id="cupom-container">
                {if $SEM_CUPONS == true}
                <div class="col p-3" style="background-color: #eb4034; border-radius: 10px;">
                    <h4 class="text-center text-light">Sem cupom cadastrado</h4>
                </div>
                {/if}
                {foreach from=$CUPONS item=C}
                <div class="col bg-light p-3 my-2" style="border-radius: 10px; background-color: rgba(210, 214, 208, 0.2); border: 1px solid black;">
                    <span><b>{$C.cupom_nome}</b></span><span class="float-right">R$ {$C.cupom_desconto}</span>
                </div>
                {/foreach}
            </div>
            <div class="col p-0 mt-3">
                <button name="cupom_novo" id="mostrar" class="btn btn-outline-success"><span
                        style="vertical-align: super;">Editar Cupom</span> <i
                        class="material-icons">keyboard_arrow_down</i></button>
                <button id="ocultar" class="btn btn-outline-success"><span style="vertical-align: super;">Editar
                        Cupom</span> <i class="material-icons">keyboard_arrow_up</i></button>
            </div>
        </div>
        <div class="col-7 p-3" style="border-radius: 10px; background-color: rgba(210, 214, 208, 0.2); border: 1px solid black;">
            <div class="col-12 text-center my-3">
                <h4>Gerenciar Cupons</h4>
            </div>
            <form class="form-group" name="inserircupom" id="editar-cupom" method="post" action=""
                enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-3 d-block p-0">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
                    </div>
                    <input type="text" name="cupom_nome_novo" class="form-control" placeholder="Nome do cupom"
                        aria-label="Nome Cupom" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-3 d-block p-0">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Desconto</span>
                    </div>
                    <input type="text" name="cupom_desconto_novo" class="form-control" placeholder="Valor do desconto"
                        aria-label="Valor do cupom" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-3 d-block p-0">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Data Inicio</span>
                    </div>
                    <input type="datetime-local" name="cupom_inicial_novo" class="col" aria-label="Data Inicial"
                        required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-3 d-block p-0">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Data Fim</span>
                    </div>
                    <input type="datetime-local" name="cupom_final_novo" class="col" aria-label="Data Final" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-3 d-block p-0">
                        <label class="input-group-text" for="inputGroupSelect01">Tipo do Cupom</label>
                    </div>
                    <select name="cupom_tipo_novo" class="custom-select" required>
                        <option selected>Escolher...</option>
                        <option value="1">Reais R$</option>
                        <option value="2">Porcentagem %</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-3 d-block p-0">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Quantidade</span>
                    </div>
                    <input type="text" name="cupom_qtd_novo" class="form-control" placeholder="Quantidade de cupons"
                        aria-label="Valor do cupom" required>
                </div>
                <div class="form-group ml-3 float-right">
                    <button name="cupom_novo" value="cupom_novo" class="btn btn-outline-success">Inserir Cupom</button>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row no-gutters justify-content-center" id="editar">
        <div class="col-12">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Nome do Cupom</th>
                        <th scope="col">Valor do Desconto</th>
                        <th scope="col">Data Inicial</th>
                        <th scope="col">Data Final</th>
                        <th scope="col">Tipo do Desconto</th>
                        <th scope="col" colspan="3">Quantidade</th>
                    </tr>
                </thead>
                <tbody class="border">
                    {if $SEM_CUPONS == true}
                    <div class="col p-3" style="background-color: #eb4034; border-radius: 10px;">
                        <h4 class="text-center text-light">Sem cupom cadastrado</h4>
                    </div>
                    {/if}
                    {foreach from=$CUPONS item=C}
                    <form name="cupons_editar" method="post" action="">
                        <tr>
                            <th scope="row">
                                <input type="text" name="cupom_nome" value="{$C.cupom_nome}" class="form-control"
                                    required>
                                <input type="hidden" name="cupom_id" value="{$C.cupom_id}">
                            </th>
                            <td>
                                <input type="text" name="cupom_desconto" value="{$C.cupom_desconto}"
                                    class="form-control" required>
                            </td>
                            <td>
                                <input type="datetime" name="cupom_inicial" value="{$C.cupom_inicial}"
                                    class="form-control" required>
                            </td>
                            <td>
                                <input type="datetime" name="cupom_final" value="{$C.cupom_final}" class="form-control"
                                    required>
                            </td>
                            <td>
                                <select name="cupom_tipo" class="custom-select" required>
                                    {if $C.cupom_tipo == 1}
                                    <option selected value="{$C.cupom_tipo}">Reais R$</option>
                                    <option disabled></option>
                                    {else}
                                    <option selected value="{$C.cupom_tipo}">Porcentagem %</option>
                                    {/if}
                                    <option value="1">Reais R$</option>
                                    <option value="2">Porcentagem %</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="cupom_qtd" value="{$C.cupom_qtd}" class="form-control"
                                    required>
                            </td>
                            <td>
                                <button class="btn btn-info" name="cupom_editar" value="cupom_editar">Editar</button>
                            </td>
                            <td>
                                <button class="btn btn-danger" name="cupom_apagar" value="cupom_apagar">Apagar</button>
                            </td>
                        </tr>
                    </form>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>