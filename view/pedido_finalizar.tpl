<div class="container containers my-5">
    <div class="row no-gutters">
        <div class="col p-0">
            <div class="col p-0 mt-2">
                <h3>Finalizar Pedido</h3>
                <hr>
            </div>
            <div class="col p-0 mt-2">
                <h3 class="alert alert-success text-success">Pedido Finalizado com Sucesso</h3>
            </div>
            <div class="col p-0 mt-3">
                <table class="table table-bordered">
                    <thead class="">
                        <tr class="table-success text-success">
                            <th scope="col">Imagem </th>
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
                            <td class="align-middle"><img src="{$P.pro_img}" alt="{$P.pro_img}"></td>
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
                    <h4>
                        Total R$ {$TOTAL}
                    </h4>
                    {if $CUPOM == true}
                    <h4>
                        Cupom R$ {$CUPOM}
                    </h4>
                    {/if}
                    <h4>
                        Frete R$ {$FRETE}
                    </h4>
                    <h4>
                        Total do Pedido R$ {$TOTAL_FRETE}
                    </h4>
                </div>

            </div>
            <hr>
            <div class="col p-0">
                <h3 class="text-center">Formas de pagamento</h3>
                <div class="col text-center">
                    <button class="btn btn-success btn-lg" onclick="PagSeguroLightbox({
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
                <div class="col p-0 text-center">
                    <img class="img-fluid" width="400" height="400" src="{$TEMA}/tema/images/Logo_PagSeguro.png" alt="Logo Pag Seguro">
                    <script type="text/javascript" src=""></script>
                </div>
            </div>
        </div>
    </div>
</div>