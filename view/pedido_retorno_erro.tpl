<div class="container my-4">
    <div class="row no-gutters justify-content-center">
        <div class="col-12">

            <h3 class="text-center text-danger"> Ocorreu um problema no pagamento, ou foi cancelado</h3>
            <hr>
        </div>
        <div class="col-12">
            <div class="col text-center">
                <div class="container">
                    <p> Caso teve algum problema entre em contato conosco, informando <br> o código de referência:<b> {$REF}</b></p>
                    <p> Ou você pode tentar efetuar o pagamento novamente na seção <a href="{$PAG_PEDIDOS}">Pedidos</a> clicando em "<i class="text-success">Detalhes</i>"</p>
                    <p> Para ir a tela do pedido e efetivar o pagamento, clique no botão.</p>
                </div>
            </div>
            <div class="col-12">
                <div class="container col-5">
                    <form name="pagamento" method="post" action="{$PAG_ITENS}">
                        <input type="hidden" name="cod_pedido" value="{$REF}">
                        <button class="btn btn-success btn-block btn-lg"> Fazer Pagamento Agora</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>