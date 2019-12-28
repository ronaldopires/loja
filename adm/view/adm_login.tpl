<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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


    <title>Login Administrativo</title>
</head>

<body>
    <div class="container-fluid" id="pageLogin">

        <div id="login-container">
            <h3>Área Restrita</h3>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <form name="cliente_login" action="" method="POST">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="email-label">
                          <i class="fa fa-user-circle" aria-hidden="true"></i>
                        </span>
                                </div>
                                <input type="email" name="inputemail" class="form-control" value="" placeholder="Email" aria-label="Email" aria-describedby="email-label" required autocomplete="off">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="password-label">
                          <i class="fa fa-key" aria-hidden="true"></i>
                        </span>
                                </div>
                                <input type="password" name="inputsenha" class="form-control" value="" placeholder="Senha" aria-label="Senha" aria-describedby="password-label" required>
                            </div>

                            <label class="container-checkbox">Lembrar Minha Conta
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>

                            <div class="text-center">
                                <button type="submit" class="btn btn-customized">Entrar</button>
                            </div>
                        </form>
                        <hr style="margin-bottom: 5px">
                        <div class="text-center">
                            <!-- <a href="{$PAG_CADASTRO}" role="button" class="btn btn-customized">Cadastre-se</a> -->
                            <a href="{$PAG_RECOVERY}" role="button" class="btn btn-customized">Esqueci a Senha</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Popper.js, Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>