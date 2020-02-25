<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-03 21:09:30
  from 'C:\xampp\htdocs\loja\adm\view\adm_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e38b63a5165f7_04769860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56ee9dbab1711ca502b7da58086071b9e944e44f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_index.tpl',
      1 => 1580774969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e38b63a5165f7_04769860 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Chart js-->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"><?php echo '</script'; ?>
>
    <!--JQuery-->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <!--FavIcon-->
    <link rel="shortcut icon" href="#" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- JavaScript -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/adm_script.js"><?php echo '</script'; ?>
>

    <!--CSS-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/adm_estilo.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/normalize.css" type="text/css">


    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

    <!--Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Font Awesome-->
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/3e1cd9c3d7.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <title><?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
</title>
</head>

<body>

    <div class="row no-gutters">
        <div class="col-12">
            <header class="header">
                <nav class="navbar navbar-toggleable-md navbar-light pt-0 pb-0 ">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand p-0 mr-5" href="#"><img src="http://via.placeholder.com/61x14"></a>
                    <div class="float-left"> <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a>
                    </div>
                    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown messages-menu">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-success bg-success">10</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <ul class="dropdown-menu-over list-unstyled">
                                        <li class="header-ul text-center">You have 4 messages</li>
                                        <li>
                                            <!-- inner menu: contains the actual data -->
                                            <ul class="menu list-unstyled">
                                                <li>
                                                    <!-- start message -->
                                                    <a href="#">
                                                        <div class="float-left">
                                                            <img src="http://via.placeholder.com/160x160"
                                                                class="rounded-circle  " alt="User Image">
                                                        </div>
                                                        <h4>
                                                            Support Team
                                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li>
                                                <!-- end message -->
                                                <li>
                                                    <a href="#">
                                                        <div class="float-left">
                                                            <img src="http://via.placeholder.com/160x160"
                                                                class="rounded-circle " alt="User Image">
                                                        </div>
                                                        <h4>
                                                            AdminLTE Design Team
                                                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="float-left">
                                                            <img src="http://via.placeholder.com/160x160"
                                                                class="rounded-circle " alt="User Image">
                                                        </div>
                                                        <h4>
                                                            Developers
                                                            <small><i class="fa fa-clock-o"></i> Today</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="float-left">
                                                            <img src="http://via.placeholder.com/160x160"
                                                                class="rounded-circle " alt="User Image">
                                                        </div>
                                                        <h4>
                                                            Sales Department
                                                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="float-left">
                                                            <img src="http://via.placeholder.com/160x160"
                                                                class="rounded-circle " alt="User Image">
                                                        </div>
                                                        <h4>
                                                            Reviewers
                                                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="footer-ul text-center"><a href="#">See All Messages</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown notifications-menu">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-warning bg-warning">10</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <ul class="dropdown-menu-over list-unstyled">
                                        <li class="header-ul text-center">You have 10 notifications</li>
                                        <li>
                                            <!-- inner menu: contains the actual data -->
                                            <ul class="menu list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-warning text-yellow"></i> Very long description
                                                        here that may not fit into the page and may cause design
                                                        problems
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-users text-red"></i> 5 new members joined
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-user text-red"></i> You changed your username
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="footer-ul text-center"><a href="#">View all</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item dropdown  user-menu">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="http://via.placeholder.com/160x160" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Bem Vindo <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
 <span style="padding-top: .8vh;"
                                            class="fa fa-chevron-down float-right ml-3"></span></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_CLIENTE_EDITAR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">Meu Perfil</a>
                                    <a class="dropdown-item" href="#">Configurações</a>
                                    <a class="dropdown-item" href="#">Alterar Senha</a>
                                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
">Sair</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>
        <div class="col-auto">
            <div class="main">
                <aside>
                    <div class="sidebar float-left">
                        <div class="user-panel">
                            <div class="float-left image">
                                <img src="http://via.placeholder.com/160x160" class="rounded-circle" alt="User Image">
                            </div>
                            <div class="col info ml-5">
                                <p>Olá <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</p>
                                <a href="#" class="nav-link p-0" role="button" data-toggle="modal"
                                    data-target="#modalExemplo"><span id="online"><i
                                            class="fa fa-circle text-success"></i></span> Online</a><br>
                            </div>
                            <div class="row no-gutters mt-3">
                                <div class="col info">
                                    <p style="font-size: 10px; color: #fff;">Último login <?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
 às <?php echo $_smarty_tpl->tpl_vars['HORA']->value;?>
</p>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Alterar Status</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col"><span id="ativo"><i
                                                        class="fa fa-circle text-info"></i></span> Ativo</div>
                                            <div class="col"><span id="inativo"><i
                                                        class="fa fa-circle text-danger"></i></span> Inativo</div>
                                            <div class="col"><span id="off"><i
                                                        class="fa fa-circle text-warning"></i></span> Offline</div>
                                            <div class="col"><span id="online"><i
                                                        class="fa fa-circle text-success"></i></span> Online</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Fechar</button>
                                            <button type="button" class="btn btn-primary">Salvar mudanças</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-sidebar bg-defoult">
                            <li> <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADM']->value;?>
"><i class="fa fa-home" aria-hidden="true"></i><span
                                        class="nav-label">Home</span> </a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADM']->value;?>
" data-toggle="collapse" data-target="#dashboard"
                                    class="collapsed active"> <i class="fas fa-chart-pie"></i> <span class="nav-label">
                                        Dashboards </span> <span class="fa fa-chevron-down float-right"></span> </a>
                                <ul class="sub-menu collapse" id="dashboard">
                                    <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADM']->value;?>
">CSS3 Animation</a></li>
                                    <li><a href="#">General</a></li>
                                    <li><a href="#">Buttons</a></li>
                                    <li><a href="#">Tabs & Accordions</a></li>
                                </ul>
                            </li>
                            <li> <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_CLIENTE']->value;?>
"><i class="fa fa-user" aria-hidden="true"></i> <span
                                        class="nav-label">Clientes</span></a> </li>
                            <!-- <li>
                                <a href="#" data-toggle="collapse" data-target="#products" class="collapsed active">
                                    <i class="fa fa-bar-chart-o"></i> <span class="nav-label">Gráficos</span> <span class="fa fa-chevron-down float-right"></span> </a>
                                <ul class="sub-menu collapse" id="products">
                                    <li class="active"><a href="#">CSS3 Animation</a></li>
                                    <li><a href="#">General</a></li>
                                    <li><a href="#">Buttons</a></li>
                                    <li><a href="#">Tabs & Accordions</a></li>
                                </ul>
                            </li> -->
                            <li> <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PEDIDOS']->value;?>
"><i class="fas fa-box"></i> <span
                                        class="nav-label">Pedidos</span></a> </li>
                            <li> <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PRODUTOS']->value;?>
"><i class="fas fa-tag"></i> <span
                                        class="nav-label">Produtos</span></a> </li>
                            <li> <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_ESTOQUE']->value;?>
"><i class="fas fa-tag"></i> <span
                                        class="nav-label">Estoque</span></a> </li>
                            <li> <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CUPONS']->value;?>
"><i class="fas fa-tag"></i> <span class="nav-label">Cupons</span></a> </li>
                            <li> <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
" data-toggle="collapse" data-target="#categories"
                                    class="collapsed active"><i class="fa fa-table"></i> <span
                                        class="nav-label">Categorias</span><span
                                        class="fa fa-chevron-down float-right"></span></a>
                                <ul class="sub-menu collapse" id="categories">
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
">Inserir Categorias <span><i
                                                    class="material-icons float-right">add</i></span></a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PRODUTOS']->value;?>
">Todos</a></li>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link_adm'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a></li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            </li>
                            <li> <a href="#" data-toggle="collapse" data-target="#e-commerce"
                                    class="collapsed active"><i class="fa fa-shopping-cart"></i> <span
                                        class="nav-label">E-commerce</span><span
                                        class="fa fa-chevron-down float-right"></span></a>
                                <ul class="sub-menu collapse" id="e-commerce">
                                    <li><a href=""> Products grid</a></li>
                                    <li><a href=""> Products list</a></li>
                                    <li><a href="">Product edit</a></li>
                                    <li><a href=""> Product detail</a></li>
                                    <li><a href="">Cart</a></li>
                                    <li><a href=""> Orders</a></li>
                                    <li><a href=""> Credit Card form</a> </li>
                                </ul>
                            </li>
                            <li> <a href=""><i class="fa fa-pie-chart"></i> <span class="nav-label">Views</span>
                                </a></li>
                            <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other
                                        Pages</span></a> </li>
                            <li> <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
"><i class="fa fa-sign-out" aria-hidden="true"></i></i> <span
                                        class="nav-label">Sair</span></a> </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
        <div class="col" id="conteudo">
            <!-- Rotas das páginas -->
            <?php  Rotas::get_Pagina(); ?>
        </div>
    </div>



    <!-- Popper.js, Bootstrap JS -->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
