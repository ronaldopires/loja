<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-28 21:14:48
  from 'C:\xampp\htdocs\loja\adm\view\adm_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e07eff874cae4_29076995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa57dd0f7c68b88e2772b540ee6bb5ff3c2b1b4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_home.tpl',
      1 => 1577578487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e07eff874cae4_29076995 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-sm">
            Teste de Gráfico
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

<?php echo '<script'; ?>
>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 30],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
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
<?php echo '</script'; ?>
><?php }
}
