<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-08 13:08:09
  from 'C:\xampp\htdocs\loja\adm\view\adm_estoque.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e15fe6961b709_94644815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '333e92c2e3366aee85ac9715e097c433626cfe16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_estoque.tpl',
      1 => 1578499687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e15fe6961b709_94644815 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-3">
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
                <h5>Total de Produtos Cadastrados <span class="float-right"><?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</span></h5>
            </div>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col p-0 mt-4" id="list_estoque">
            <ul class="list-group">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                    <li class="list-group-item">
                        <div class="col"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</div>
                        <?php if ($_smarty_tpl->tpl_vars['P']->value['pro_estoque'] < 15) {?>
                            <div class="col-auto"><span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_estoque'];?>
</span></div>
                        <?php } else { ?>
                            <div class="col-auto"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_estoque'];?>
</div>
                        <?php }?>
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
        <div class="col-6 p-3 my-4 mx-4" style="border-radius: 10px; background-color: rgba(210, 214, 208, 0.2); border: 1px solid black;">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Total de Produtos'],
            datasets: [{
                label: 'Total de Produtos <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
',
                data: [0, <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
],
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
<?php echo '</script'; ?>
><?php }
}
