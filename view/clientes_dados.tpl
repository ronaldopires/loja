<div class="container">
    <div class="row no-gutters justify-content-center">
        <div class="col-10 border my-4 rounded">
            <form class="form-group p-3" action="" method="post">
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
                        <input id="cpf" name="cli_cpf" class="form-control" type="text" maxlength="11" readonly value="{$CLI_CPF}" required disabled>
                    </div>

                    <div class="input-group col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nascimento</span>
                        </div>
                        <input id="cli_data_nasc" name="cli_data_nasc" class="form-control" type="date" maxlength="10" value="{$CLI_DATA_NASC}" required>
                    </div>

                    <div class="input-group col-4 justify-content-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Sexo</span>
                        </div>
                        <select class="form-control" id="sexo" name="cli_sexo" value="{$CLI_SEXO}">
                            {if {$CLI_SEXO} == 0 }
                            <option value="0" selected>Masculino</option>
                            <option value="1">Feminino</option>
                            {else}
                            <option value="0">Masculino</option>
                            <option value="1" selected>Feminino</option>
                            {/if}
                        </select>
                    </div>
                </div>
                <div class="form-inline mb-3">

                    <div class="input-group col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Celular</span>
                        </div>
                        <input id="ddd_celular" name="cli_ddd_celular" class="form-control col-3" required placeholder="DDD" type="tel" maxlength="3" value="{$CLI_DDD_CELULAR}">
                        <input id="celular" name="cli_celular" class="form-control " type="tel " maxlength="10" value="{$CLI_CELULAR}" required>
                    </div>
                    <div class="input-group col-4 ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text ">Telefone</span>
                        </div>
                        <input id="ddd_fone " name="cli_ddd_fone" class="form-control col-3" placeholder="DDD " type="tel " maxlength="3 " value="{$CLI_DDD_FONE} ">
                        <input id="telefone " name="cli_fone" class="form-control " type="tel " maxlength="9" value="{$CLI_FONE}">
                    </div>
                </div>

                <div class="form-inline mb-3 ">
                    <div class="input-group col-8 ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text ">E-mail</span>
                        </div>
                        <input type="email " id="email " name="cli_email" class="form-control" value="{$CLI_EMAIL}" readonly required>
                        <div id="mostrar_erro"></div>
                    </div>
                </div>
                <hr>
                <h5 class="text-center ">Endereço</h5>
                <hr>
                <div class="form-inline mb-3 ">
                    <div class="input-group col-3 ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text ">CEP</span>
                        </div>
                        <input name="cli_cep" class="form-control input-md" value="{$CLI_CEP} " type="text " maxlength="8 " required>
                    </div>
                    <div class="input-group col ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text ">Rua</span>
                        </div>
                        <input id="rua " name="cli_endereco" class="form-control " type="text " value="{$CLI_ENDERECO} " required>
                    </div>
                </div>

                <div class="form-inline mb-3 ">
                    <div class="input-group col-3 ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text ">Número</span>
                        </div>
                        <input id="numero " name="cli_numero" class="form-control " type="text " value="{$CLI_NUMERO} " required>
                    </div>
                    <div class="input-group col ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text ">Bairro</span>
                        </div>
                        <input id="bairro " name="cli_bairro" class="form-control " type="text " value="{$CLI_BAIRRO} " required>
                    </div>
                </div>

                <div class="form-inline mb-3 ">
                    <div class="input-group col ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text">Cidade</span>
                        </div>
                        <input id="cidade" name="cli_cidade" class="form-control" type="text" value="{$CLI_CIDADE}" required>
                    </div>
                    <div class="input-group col-3 ">
                        <div class="input-group-prepend ">
                            <span class="input-group-text ">UF</span>
                        </div>
                        <input id="estado" name="cli_uf" class="form-control" type="text" value="{$CLI_UF}" required>
                    </div>
                </div>
                <div class="container mt-3 ">
                    <div class="row no-gutters justify-content-center ">
                        <div class="col-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <label for="password"><strong>Senha para confirmar as alterações</strong></label>
                                </div>
                                <input id="cli_senha_atual" name="cli_senha_atual" class="form-control " type="password" required>
                            </div>

                            <div class="form-inline justify-content-center">
                                <div class="input-group col-auto p-0">
                                    <button type="submit" class="btn btn-success btn-sm"><i
                                            class="material-icons">done</i><span style="vertical-align: super;">Alterar
                                            dados</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>