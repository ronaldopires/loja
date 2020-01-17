<div class="container-fluid p-3">
    <div class="row no-gutters">
        <div class="col">
            <div class="row no-gutters my-3 border-bottom p-2">
                <div class="col-9"><b class="h5">Produto</b></div>
                <div class="col text-right pr-3"><b class="h5">Estoque</b></div>
            </div>
        </div>
        <div class="col-6 mx-4">
            <div class="col p-3"
                style="border-radius: 10px; background-color: rgba(210, 214, 208, 0.2); border: 1px solid black;">
                <h5>Total de Produtos Cadastrados <span class="float-right">{$TOTAL}</span></h5>
            </div>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col p-0 mt-4" id="list_estoque">
            <ul class="list-group">
                {foreach from=$PRO item=P}
                    <li class="list-group-item">
                        <div class="col">{$P.pro_nome}</div>
                        {if $P.pro_estoque < 15}
                            <div class="col-auto"><span class="badge badge-danger">{$P.pro_estoque}</span></div>
                        {else}
                            <div class="col-auto">{$P.pro_estoque}</div>
                        {/if}
                    </li>
                {/foreach}
            </ul>
        </div>
        <div class="col-6 p-3 my-4 mx-4" style="border-radius: 10px; background-color: rgba(210, 214, 208, 0.2); border: 1px solid black;">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Total de Produtos'],
            datasets: [{
                label: 'Total de Produtos {$TOTAL}',
                data: [0, {$TOTAL}],
                backgroundColor: [
                    'rgba(90, 252, 3, 0.2)'
                ],
                borderColor: [
                    'rgba(22, 59, 2, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>