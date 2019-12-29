<div class="container my-4">
    <div class="row no-gutters">
        <h3 class="text-center text-success"> Obrigado pelo seu pedido </h3>
        <hr>
        <div class="col-12">
            <div class="card col-6">
                <div class="card-body">
                    <h5 class="card-title">Informações do pagamento</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Código da transação {$CODIGO}</h6>
                    <p class="card-text">Referencia {$REF}</p>
                    <p class="card-text">Status do pagamento {$PAGO}</p>
                    <p class="card-text">Forma pagamento {$FORMA_PAG}</p>
                </div>
                <div class="card-footer">
                    <form name="pagamento" method="post" action="{$PAG_ITENS}">
                        <input type="hidden" name="cod_pedido" value="{$REF}">
                        <button class="btn btn-success btn-block btn-lg"> Detalhes deste Pedido</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>