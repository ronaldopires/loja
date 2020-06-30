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
    <script src="{$GET_TEMA}/tema/js/script.js"></script>

    <!--CSS-->
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/estilo.css" type="text/css">
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/normalize.css" type="text/css">


    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

    <!--Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/3e1cd9c3d7.js" crossorigin="anonymous"></script>
    <title>{$TITULO_SITE}</title>
</head>

<body>
    <div class="row">
        <div class="col-12">
            <h5 class="alert alert-danger text-center">
                <p>Site em Desenvolvimento</p>
                <span><a href="https://www.linkedin.com/in/ronaldo-carvalho2019/" target="_blank">Meu Linkedin</a></span>,
                <span><a href="https://github.com/ronaldopires/loja" target="_blank">Meu Github</a></span>
            </h5>
        </div>
    </div>
    <!--Container Principal-->
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col">
                <div class="jumbotron jumbotron-fluid m-0">
                    <div class="container">
                        <h1 class="display-7">Loja Carvalho</h1>
                        <p class="lead">Este é um jumbotron modificado que ocupa todo o espaço horizontal de seu elemento pai.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters text-right">
            <div class="col d-flex py-3 justify-content-end">
                <form class="form-inline mb-0" method="post" action="{$PAG_PRODUTOS}">
                    <input style="width: 550px;" id="pesquisar" class="form-control pl-4" type="text" name="pesquisar" placeholder="Pesquisar produtos" aria-label="Pesquisar produtos">
                    <button id="iconPesquisar" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>

            <div class="col-3 py-3 pr-2">
                {if $LOGADO == true} Olá {$USER} <a href="{$PAG_LOGOFF}" class="ml-2 btn btn-outline-danger btn-sm"><i class="fas fa-sign-in-alt mr-2"></i> Sair </a> {else}
                <!--Login-->
                <span style="font-size: 18px;">
                <i class="fas fa-user"></i>
                <span>
                <a href="{$PAG_LOGIN}" class="btn btn-success btn-sm" role="button" aria-pressed="true"><i class="fas fa-sign-in-alt mr-2 text-light"></i>Entrar</a>
                {/if}
            </div>
        </div>
        <div class="row no-gutters bg-dark">
            <div class="col p-0">
                <!--Menu-->
                <nav class="navbar navbar-expand-lg navbar-dark " id="menu">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado"
                        aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{$GET_SITE_HOME}"><i class="fas fa-home mr-2"></i>Home<span class="sr-only">(página atual)</span></a>
                        </li>
                        {if $LOGADO == true}
                        <li class="nav-item active">
                            <a class="nav-link" href="{$PAG_MEU_PERFIL}"><i class="fas fa-user-edit mr-2"></i>Minha Conta</a>
                        </li>
                        {/if}
                        <li class="nav-item">
                            <a class="nav-link" href="{$PAG_PRODUTOS}"><i class="fas fa-tag mr-2"></i>Produtos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>Categorias</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{$PAG_PRODUTOS}">Todos</a>
                                <div class="dropdown-divider"></div>

                                {foreach from=$CATEGORIAS item=C}
                                <a class="dropdown-item" href="{$C.cate_link}">{$C.cate_nome}</a> {/foreach}
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-right" href="{$PAG_CARRINHO}"><i class="fas fa-shopping-cart mr-2"></i>Carrinho</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{$PAG_CONTATO}"><i class="fas fa-envelope mr-2"></i>Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{$PAG_SOBRE}"></i>Sobre</a>
                        </li>
                    </ul>

                </div>
                </nav>
            </div>
            {if $QTD == true}
            <div class="col text-light d-flex justify-content-end align-items-center">
                <a id="teste" role="button" href="#" class="btn btn-light btn-sm mr-4">
                    <i class="fas fa-shopping-cart p-2 pr-4"></i> <span class="badge badge-success">{$QTD}</span>
                    <span class="sr-only">Itens no Carrinho</span>
                </a>

            </div>
            {/if}

        </div>
        <!-- <div id="overlay">
            <div class="spinner"></div>
        </div> -->
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-12 p-0">
                    <!-- Rotas das páginas -->
                    {php} Rotas::get_Pagina(); {/php}
                </div>
            </div>
        </div>
        <!--Rodapé-->
        <div class="row no-gutters align-items-center">
            <div class="col-12 text-center" style="padding-top: 30px; background-color: #B6FFA9;">
                <span class="h3">{$TITULO_SITE}</span>
                <p class="mt-3"> &copy; Todos os Direitos Reservados - Ronaldo Carvalho | 2019</p>
            </div>
        </div>

        <!--End container -->
    </div>

    <!-- Popper.js, Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>