<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-08 12:01:12
  from 'C:\xampp\htdocs\loja\adm\view\adm_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e15eeb875ec51_42357335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa57dd0f7c68b88e2772b540ee6bb5ff3c2b1b4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_home.tpl',
      1 => 1578495668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e15eeb875ec51_42357335 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-sm p-3 my-4" style="border-radius: 10px; background-color: rgba(210, 214, 208, 0.2); border: 1px solid black;">
            <h5>Clientes Cadastrados em <?php echo $_smarty_tpl->tpl_vars['ANO_ATUAL']->value;?>
</h5>
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
        type: 'bar',
        data: {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            datasets: [{
                label: 'Clientes',
                data: [<?php echo $_smarty_tpl->tpl_vars['CLIENTES']->value;?>
,1,2,3,4,3,5,10,50,10,20,2],
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
<?php echo '</script'; ?>
><?php }
}
