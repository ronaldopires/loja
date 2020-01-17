<div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-sm p-3 my-4" style="border-radius: 10px; background-color: rgba(210, 214, 208, 0.2); border: 1px solid black;">
            <h5>Clientes Cadastrados em {$ANO_ATUAL}</h5>
            <canvas id="myChart"></canvas>
        </div>
        <div class="col-sm">
            Painel administrativo
        </div>
        <div class="col-sm">
            Painel administrativo
        </div>
    </div>
</div>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            datasets: [{
                label: 'Clientes',
                data: [{$CLIENTES},1,2,3,4,3,5,10,50,10,20,2],
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
                    'rgb(190, 5, 252)',
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