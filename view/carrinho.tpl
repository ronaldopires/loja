<!--Carrinho -->
<div class="container containers mb-4">
    <div class="row no-gutters">
        <div class="col p-0">
            <div class="col p-0 text-center">
                <h3>
                Meu Carrinho 
                <span style="font-size: 48px; color: #bee5eb;">
                <i class="fas fa-cart-plus f-18"></i></h3>
                </span>
                <hr>
            </div>
            <div class="col p-0 text-right">
                <a href="{$PAG_PRODUTOS}" class="btn btn-outline-info"><i class="fas fa-shopping-basket mr-2"></i> Comprar Mais</a>
            </div>
            <div class="col p-0 mt-3">
            <table class="table">
                <thead class="table-info">
                    <tr class=" text-info">
                    <th scope="col"></th>
                    <th scope="col">Produto </th>
                    <th class="text-center" scope="col">Valor <i class="fas fa-dollar-sign"></i></th>
                    <th class="text-center" scope="col">Quantidade</i></th>
                    <th class="text-center" scope="col">Sub Total <i class="fas fa-dollar-sign"></i></th>
                    <th class="text-center" scope="col">Remover</th>
                    </tr>
                </thead>
                <tbody>
                {foreach from=$PRO item=P}                   
                    <tr>
                        <td><img src="{$P.pro_img}" alt="{$P.pro_nome}"></td>
                        <td class="align-middle"><a href="#" class="text-info">{$P.pro_nome}</a></td>
                        <td class="text-center align-middle">R$ {$P.pro_valor}</td>
                        <td class="text-center align-middle">
                            <form name="remover" method="post" action="{$PAG_CARRINHO_ALTERAR}">
                                <div class="input-group input-group-sm justify-content-center">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-info btn-sm" type="submit" name="acao" id="{$P.pro_qtd}" value="excluir">-</i></button>
                                    </div>
                                        <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                        <input type="hidden" name="pro_qtd" value="{$P.pro_qtd}">
                                        <input type="hidden" name="acao" value="excluir">
                            </form>
                                    <input type="text" class="form-control text-center col-2" disabled value="{$P.pro_qtd}" style="border: 1px solid #17a2b8 !important;">
                                <form name="adicionar" method="post" action="{$PAG_CARRINHO_ALTERAR}">   
                                <div class="input-group input-group-sm justify-content-center">

                                    <div class="input-group-append">
                                        <button class="btn btn-outline-info btn-sm" type="submit" name="acao" id="add" value="add" style="border-radius: 0px 3px 3px 0px;">+</i></button>
                                    </div>
                                        <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                        <input type="hidden" name="acao" value="add">    
                                    </div>
                                </div>
                            </form>
                        </td>
                        <td class="text-center align-middle">R$ {$P.pro_subTotal}</td>
                        <td class="text-center align-middle">
                            <form name="limpar" method="post" action="{$PAG_CARRINHO_ALTERAR}">                    
                                <input type="hidden" name="acao" value="del">    
                                <input type="hidden" name="pro_id" value="{$P.pro_id}">    
                                <button class="btn btn-outline-danger btn-sm"><i class="fas fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
            </div>
            <hr>
            <div class="row no-gutters mt-2">
                <div class="col p-2 text-left">
                    <h4>Total R$ {$TOTAL}</h4>
                </div>
                <div class="col my-2 text-right">
                    <form name="limpar" method="post" action="{$PAG_CARRINHO_ALTERAR}">
                        <input type="hidden" name="acao" value="limpar">
                        <input type="hidden" name="pro_id" value="1">
                        <button class="btn btn-outline-danger"><i class="fas fa-trash mr-3"></i>Limpar Tudo</button>
                    </form>    
                </div>
            </div
            
            <!--Frete do Cliente -->
            <div class="row no-gutters p-0 justify-content-end">
                <input type="hidden" name="peso_frete" id="peso_frete" value="{$PESO}" class="form-control " readonly>
                <input style="width: 150px !important;" autofocus="true" required type="text" name="cep_frete" class="form-control" id="cep_frete" value="" placeholder="Digite seu CEP" >
                <input type="hidden" name="frete_valor" id="frete_valor" value="0">
                <button class="ml-3 btn btn-outline-warning" id="buscar_frete"><i class="far fa-paper-plane"></i> Calcular Frete </button>
            </div>
            <hr>
            <div class="col p-0">
                <!-- botão finalzar -->
                <div class="col p-0 text-right justify-content-center">
                    <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="{$PAG_CONFIRMAR}">
                        <div class="row no-gutters justify-content-end" id="frete"></div>
                        <button class="btn btn-outline-success mt-2" type="submit"><i class="fas fa-shopping-cart mr-3"></i>Confirmar Pedido</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
