<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-14 18:22:23
  from 'C:\xampp\htdocs\loja\adm\view\adm_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e470f8fa2e538_18015524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa57dd0f7c68b88e2772b540ee6bb5ff3c2b1b4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_home.tpl',
      1 => 1581715341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e470f8fa2e538_18015524 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-sm-6 p-3 my-4" style="border-radius: 10px; background-color: rgba(210, 214, 208, 0.2); border: 1px solid black;">
            <h5 class="text-center">Clientes Cadastrados em <?php echo $_smarty_tpl->tpl_vars['ANO_ATUAL']->value;?>
</h5>
            <canvas id="clientes"></canvas>
        </div>
        <div class="col m-3">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['PEDIDOS']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 <= 10) {?>
            <div class="col-sm m-3 p-3" style="border-radius: 10px; border: 1px solid #000;">
                <h6 class="text-center">Pedidos Efetuados</h6>
                <div class="col text-danger text-center">
                    <h3><?php echo $_smarty_tpl->tpl_vars['PEDIDOS']->value;?>
</h3>
                </div>
            </div>
            <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['PEDIDOS']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 > 10) {?>
            <div class="col-sm m-3 p-3" style="border-radius: 10px; border: 1px solid #000; background-color: rgb(195, 245, 154)">
                <h6 class="text-center">Pedidos Efetuados</h6>
                <div class="col text-success text-center">
                    <h3><?php echo $_smarty_tpl->tpl_vars['PEDIDOS']->value;?>
</h3>
                </div>
            </div>
            <?php }}?>
        </div>
        <div class="col m-3">
            <div class="col-sm m-3 p-3" style="border-radius: 10px; border: 1px solid #000;">
                <h6 class="text-center">Pedidos Concluídos</h6>
                <div class="col text-danger text-center">
                    <h3><?php echo $_smarty_tpl->tpl_vars['PEDIDOS_CONCLUIDOS']->value;?>
</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    //Clientes
    var ctx = document.getElementById('clientes').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            datasets: [{
                label: 'Clientes',
                data: [<?php echo $_smarty_tpl->tpl_vars['CLIENTES']->value;?>
],
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
<?php echo '</script'; ?>
><?php }
}
