<div class="container my-4">
    <div class="row no-gutters justify-content-center">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Esqueceu a Senha?</h2>
                        <p>Você pode recuperar sua senha aqui.</p>
                        <div class="panel-body">
                            <form id="recuperarsenha" role="form" autocomplete="off" class="form" method="post">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                        </div>
                                        <input id="email" name="cli_email" placeholder="Email" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Recuperar Senha" type="submit">
                                </div>

                                <input type="hidden" class="hide" name="token" id="token" value="">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>