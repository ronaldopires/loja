<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-07 23:08:10
  from 'C:\xampp\htdocs\loja\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e15398a971680_15414909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41c25063825d62e3712cd0061d037e31c8fd1a59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\produtos_info.tpl',
      1 => 1578449289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e15398a971680_15414909 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container pt-3">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>

    <hr>

    <div class="row no-gutters">
        <div class="col-1">
            <!-- Miniatura cards -->
            <div class="col">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>
                <div class="card" style="width: 5rem;">
                    <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <div class="col pl-3">
            <img class="img-fluid img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_gg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
        </div>
        <div class="col">
            <div class="col border">
                <p>Detalhes do produto</p>
                <h3 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h3>
                <hr>
                <h4>Estoque <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_estoque'];?>
</h4>
                <div class="row no-gutters">
                    <div class="col p-2">
                        <!-- Tamanho -->

                        <form class="form-horizontal text-center" action="" method="">

                            <input class="d-none" type="radio" value="34" name="tamanho" id="34">
                            <label class="tamanho" for="34">34</label>

                            <input class="d-none" type="radio" value="35" name="tamanho" id="35">
                            <label class="tamanho" for="35">35</label>

                            <input class="d-none" type="radio" value="36" name="tamanho" id="36">
                            <label class="tamanho" for="36">36</label>

                            <input class="d-none" type="radio" value="37" name="tamanho" id="37">
                            <label class="tamanho" for="37">37</label>

                            <input class="d-none" type="radio" value="38" name="tamanho" id="38">
                            <label class="tamanho" for="38">38</label>

                        </form>
                    </div>
                </div>
                <div class="col">
                    <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/tema/images/adesivo_bandeiras_PagSeguro_dez2016.jpg" alt="">
                </div>


                <div class="row no-gutters">
                    <hr>
                    <div class="col">
                        <h3 class="text-center preco">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>
                    </div>
                    <div class="col">
                        <form class="form-group" name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                            <input class="form-control" type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
" />
                            <input class="form-control" type="hidden" name="acao" value="add" />
                            <button class="btn btn-success ">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <hr>
    <!-- Descrição do Produto -->
    <div class="row no-gutters">
        <div class="col-12">
            <p class="text-center">Descrição do Produto</p>
            <p class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</p>
        </div>
    </div>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
