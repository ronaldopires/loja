<div class="container">
    <div class="row no-gutters">
        <div class="col-12 border my-4 rounded">
            <form class="form-group p-3" action="" method="POST">
                <h4 class="text-center">Meus Dados</h4>
                <div class="form-group">
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nome e sobrenome</span>
                        </div>
                        <input id="nome" name="cli_nome" type="text" aria-label="nome" class="form-control" value="{$CLI_NOME}" required>
                        <input id="sobrenome" name="cli_sobrenome" type="text" aria-label="sobrenome" class="form-control" value="{$CLI_SOBRENOME}" required>
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">CPF</span>
                        </div>
                        <input id="cpf" name="cli_cpf" class="form-control" type="text" maxlength="11" readonly value="{$CLI_CPF}" required>
                    </div>

                    <div class="input-group col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nascimento</span>
                        </div>
                        <input id="dtnasc" name="cli_data_nasc" class="form-control input-md" type="text" maxlength="10" value="{$CLI_DATA_NASC}" required>
                    </div>

                    <div class="input-group col-4 justify-content-center">
                        Sexo:
                        <label class="form-check-label ml-3">
                                <input class="form-check-input mr-2" name="cli_sexo" id="feminino" value="f" type="radio" required>
                                Feminino
                            </label>
                        <label class="form-check-label ml-3">
                                <input class="form-check-input mr-2" name="cli_sexo" id="masculino" value="m" type="radio" required>
                                Masculino
                            </label>
                    </div>
                </div>
                <div class="form-inline mb-3">

                    <div class="input-group col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Celular</span>
                        </div>
                        <input id="celular" name="cli_celular" class="form-control" type="tel" maxlength="13" value="{$CLI_CELULAR}" required>
                    </div>
                    <div class="input-group col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Telefone</span>
                        </div>
                        <input id="telefone" name="cli_fone" class="form-control" type="tel" maxlength="12" value="{$CLI_FONE}">
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text">E-mail</span>
                        </div>
                        <input type="email" id="email" name="cli_email" class="form-control" value="{$CLI_EMAIL}" readonly required>
                    </div>
                </div>
                <hr>
                <h5 class="text-center">Endereço</h5>
                <hr>
                <div class="form-inline mb-3">
                    <div class="input-group col-auto">
                        <div class="input-group-prepend">
                            <span class="input-group-text">CEP</span>
                        </div>
                        <input name="cli_cep" class="form-control input-md" value="{$CLI_CEP}" type="text" maxlength="8" required>
                    </div>
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rua</span>
                        </div>
                        <input id="rua" name="cli_endereco" class="form-control" type="text" value="{$CLI_ENDERECO}" required>
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Número</span>
                        </div>
                        <input id="numero" name="cli_numero" class="form-control" type="text" value="{$CLI_NUMERO}" required>
                    </div>
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Bairro</span>
                        </div>
                        <input id="bairro" name="cli_bairro" class="form-control" type="text" value="{$CLI_BAIRRO}" required>
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Cidade</span>
                        </div>
                        <input id="cidade" name="cli_cidade" class="form-control" type="text" value="{$CLI_CIDADE}" required>
                    </div>
                    <div class="input-group col-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">UF</span>
                        </div>
                        <input id="estado" name="cli_uf" class="form-control" type="text" value="{$CLI_UF}" required>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <label for="password"><strong>Senha para confirmar as alterações</strong></label>
                                </div>
                                <input id="cli_senha" name="cli_senha" class="form-control" type="password" required>
                            </div>

                            <div class="form-inline justify-content-center">
                                <div class="input-group col-auto p-0">
                                    <button type="submit" class="btn btn-outline-success">Alterar dados</button>
                                </div>
                                <!-- <div class="input-group col-auto">
                                    <button type="reset" class="btn btn-outline-danger">Cancelar</button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>