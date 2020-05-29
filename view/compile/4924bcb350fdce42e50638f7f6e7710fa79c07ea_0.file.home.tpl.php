<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-28 23:10:12
  from 'C:\xampp\htdocs\loja\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed06f0408e010_74570936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4924bcb350fdce42e50638f7f6e7710fa79c07ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\home.tpl',
      1 => 1590718204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed06f0408e010_74570936 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    a.previous {
        text-decoration: none;
        display: inline-block;
        padding: 8px 16px;
    }
    
    a.previous:hover {
        background-color: #ddd;
        color: black;
    }
    
    .previous {
        background-color: #f1f1f1;
        color: black;
    }
    
    .round {
        border-radius: 50%;
    }
</style>
<div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-sm">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid" src="./media/images/banner1.png" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="./media/images/design-1772284_1920.jpg" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="./media/images/polo.jpg" alt="Segundo Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="./media/images/calca05.jpg" alt="Terceiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="./media/images/tenis01.jpg" alt="Terceiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="./media/images/tshirt-2428521_1920.jpg" alt="Terceiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="./media/images/social.jpg" alt="Terceiro Slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Novidades-->
<?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value > 0) {?>
<div class="container-fluid my-5 p-3">
    <div class="row no-gutters">
        <div class="col text-center">
            <hr>
            <h3>Novidades</h3>
        </div>
    </div>
    <div class="row no-gutters justify-content-center">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        <div class="card-group">
            <div class="card m-2 mb-4" id="divProduto" style="width: 19rem;">
                <a class="card-link img-hover-zoom" href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">
                    <img class="card-img-top img-fluid p-1" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_gg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
" title="Clique para visualizar">
                    <div class="card-body">
                        <h5 class="card-title text-dark"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h5>
                        <hr>
                        <h4 class="card-subtitle" style="text-align: bottom;">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h4>
                </a>
                </div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }?>
<hr>
<div class="container-fluid my-3">
    <div class="row no-gutters justify-content-center">
        <div class="col-12 my-4 text-center">
            <h4 style="color: slateblue;">CATEGORIAS</h4>
        </div>
        <div class="col-12">
            <div class="row no-gutters align-items-center">
                <div class="col-1 text-center ">
                    <a href="#" class="previous round">&#8249;</a>
                </div>
                <div class="col">
                    <div class="card-group">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>

                        <div class="card">
                            <img class="card-img-top img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</h5>
                            </div>
                        </div>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
                <div class="col-1 text-center">
                    <a href="#" class="previous round">&#8250;</a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr><?php }
}
