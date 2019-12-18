<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!--FavIcon-->
    <link rel="shortcut icon" href="#" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- JavaScript -->
    <script src="{$GET_TEMA}/tema/js/adm_script.js"></script>

    <!--CSS-->
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/adm_estilo.css" type="text/css">
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/normalize.css" type="text/css">


    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

    <!--Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/3e1cd9c3d7.js" crossorigin="anonymous"></script>
    <title>{$SITE_NOME}</title>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-toggleable-md navbar-light pt-0 pb-0 ">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand p-0 mr-5" href="#"><img src="http://via.placeholder.com/61x14"></a>
            <div class="float-left"> <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a>
            </div>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown messages-menu">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                <div class="pull-left">
                                                    <img src="http://via.placeholder.com/160x160" class="rounded-circle  " alt="User Image">
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
                                                <div class="pull-left">
                                                    <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
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
                                                <div class="pull-left">
                                                    <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
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
                                                <div class="pull-left">
                                                    <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
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
                                                <div class="pull-left">
                                                    <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
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
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
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
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="http://via.placeholder.com/160x160" class="user-image" alt="User Image">
                            <span class="hidden-xs">Bem Vindo {$LOGADO}</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Meu Perfil</a>
                            <a class="dropdown-item" href="#">Configurações</a>
                            <a class="dropdown-item" href="#">Sair</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="row no-gutters">
        <div class="col-auto">
            <div class="main">
                <aside>
                    <div class="sidebar float-left">
                        <div class="user-panel">
                            <div class="float-left image">
                                <img src="http://via.placeholder.com/160x160" class="rounded-circle" alt="User Image">
                            </div>
                            <div class="float-left info">
                                <p>Olá</p>
                                <a href="#" class="nav-link p-0" role="button" data-toggle="modal" data-target="#modalExemplo"><span id="online"><i
                                            class="fa fa-circle text-success"></i></span> Online</a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Alterar Status</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
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
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <button type="button" class="btn btn-primary">Salvar mudanças</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-sidebar bg-defoult">
                            <li> <a href="{$GET_SITE_ADM}"><i class="fa fa-home" aria-hidden="true"></i><span class="nav-label">Home</span> </a>
                            </li>
                            <li>
                                <a href="{$GET_SITE_ADM}" data-toggle="collapse" data-target="#dashboard" class="collapsed active"> <i class="fa fa-th-large"></i> <span class="nav-label">
                                        Dashboards </span> <span class="fa fa-chevron-down float-right"></span> </a>
                                <ul class="sub-menu collapse" id="dashboard">
                                    <li class="active"><a href="{$GET_SITE_ADM}">CSS3 Animation</a></li>
                                    <li><a href="#">General</a></li>
                                    <li><a href="#">Buttons</a></li>
                                    <li><a href="#">Tabs & Accordions</a></li>
                                </ul>
                            </li>
                            <li> <a href="{$PAG_ADM_CLIENTE}"><i class="fa fa-diamond"></i> <span
                                        class="nav-label">Clientes</span></a> </li>
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#products" class="collapsed active">
                                    <i class="fa fa-bar-chart-o"></i> <span class="nav-label">Gráficos</span> <span class="fa fa-chevron-down float-right"></span> </a>
                                <ul class="sub-menu collapse" id="products">
                                    <li class="active"><a href="#">CSS3 Animation</a></li>
                                    <li><a href="#">General</a></li>
                                    <li><a href="#">Buttons</a></li>
                                    <li><a href="#">Tabs & Accordions</a></li>
                                </ul>
                            </li>
                            <li> <a href="{$PAG_ADM_PRODUTOS}"><i class="fa fa-laptop"></i> <span
                                        class="nav-label">Produtos</span></a> </li>
                            <li> <a href="{$PAG_CATEGORIAS}" data-toggle="collapse" data-target="#categories" class="collapsed active"><i class="fa fa-table"></i> <span
                                        class="nav-label">Categorias</span><span
                                        class="fa fa-chevron-down float-right"></span></a>
                                <ul class="sub-menu collapse" id="categories">
                                    {foreach from=$CATEGORIAS item=C}
                                    <li><a href="{$C.cate_link}">{$C.cate_nome}</a></li>
                                    {/foreach}
                                </ul>
                            </li>
                            <li> <a href="#" data-toggle="collapse" data-target="#e-commerce" class="collapsed active"><i class="fa fa-shopping-cart"></i> <span
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
                            <li> <a href=""><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span>
                                </a></li>
                            <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other
                                        Pages</span></a> </li>
                            <li> <a href="{$PAG_LOGOFF}"><i class="fa fa-sign-out" aria-hidden="true"></i></i> <span
                                        class="nav-label">Sair</span></a> </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
        <div class="col">
            <!-- Rotas das páginas -->
            {php} Rotas::get_Pagina(); {/php}
        </div>
    </div>



    <!-- Popper.js, Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>