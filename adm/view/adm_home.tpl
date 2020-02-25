<div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-sm-6 p-3 my-4" style="border-radius: 10px; background-color: rgba(210, 214, 208, 0.2); border: 1px solid black;">
            <h5 class="text-center">Clientes Cadastrados em {$ANO_ATUAL}</h5>
            <canvas id="clientes"></canvas>
        </div>
        <div class="col m-3">
            {if {$PEDIDOS} <= 10}
            <div class="col-sm m-3 p-3" style="border-radius: 10px; border: 1px solid #000;">
                <h6 class="text-center">Pedidos Efetuados</h6>
                <div class="col text-danger text-center">
                    <h3>{$PEDIDOS}</h3>
                </div>
            </div>
            {else if {$PEDIDOS} > 10}
            <div class="col-sm m-3 p-3" style="border-radius: 10px; border: 1px solid #000; background-color: rgb(195, 245, 154)">
                <h6 class="text-center">Pedidos Efetuados</h6>
                <div class="col text-success text-center">
                    <h3>{$PEDIDOS}</h3>
                </div>
            </div>
            {/if}
        </div>
        <div class="col m-3">
            <div class="col-sm m-3 p-3" style="border-radius: 10px; border: 1px solid #000;">
                <h6 class="text-center">Pedidos Concluídos</h6>
                <div class="col text-danger text-center">
                    <h3>{$PEDIDOS_CONCLUIDOS}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    //Clientes
    var ctx = document.getElementById('clientes').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            datasets: [{
                label: 'Clientes',
                data: [{$CLIENTES}],
                backgroundColor: [
                    'green',
                    'silver',
                    'red',
                    'blue',
                    'yellow',
                    'pink',
                    'brown',
                    'black',
                    'rgb(252, 186, 3)',
                    'rgb(5, 252, 63)',
                    'rgb(50, 168, 82)',
                    'rgb(190, 244, 52)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)'
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