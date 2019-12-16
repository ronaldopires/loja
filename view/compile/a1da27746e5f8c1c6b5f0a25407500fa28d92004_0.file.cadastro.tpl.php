<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-16 15:46:25
  from 'C:\xampp\htdocs\loja\view\cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df798c147d4c5_11847242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1da27746e5f8c1c6b5f0a25407500fa28d92004' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\cadastro.tpl',
      1 => 1576507583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df798c147d4c5_11847242 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    function formatar(mascara, documento) {
        var i = documento.value.length;
        var saida = mascara.substring(0, 1);
        var texto = mascara.substring(i);

        if (texto.substring(0, 1) != saida) {
            documento.value += texto.substring(0, 1);
        }

    }

    function idade() {
        var data = document.getElementById("dtnasc").value;
        var dia = data.substr(0, 2);
        var mes = data.substr(3, 2);
        var ano = data.substr(6, 4);
        var d = new Date();
        var ano_atual = d.getFullYear(),
            mes_atual = d.getMonth() + 1,
            dia_atual = d.getDate();

        ano = +ano,
            mes = +mes,
            dia = +dia;

        var idade = ano_atual - ano;

        if (mes_atual < mes || mes_atual == mes && dia_atual < dia) {
            idade--;
        }

        return idade;
    }


    function exibe(i) {
        document.getElementById(i).readOnly = true;
    }

    function desabilita(i) {

        document.getElementById(i).disabled = true;
    }

    function habilita(i) {
        document.getElementById(i).disabled = false;
    }

    function showhide() {
        var div = document.getElementById('newpost');
        if (idade() >= 18) {
            div.style.display = 'none';
        } else if (idade() < 18) {
            div.innerHTML = ' Menor de Idade ';
            div.style.display = 'block';
        }

    }
<?php echo '</script'; ?>
>
<div class="container">
    <div class="row no-gutters">
        <div class="col-12 border my-4 rounded">
            <form class="form-group p-3" action="" method="POST">
                <h4 class="text-center">Cadastro de Cliente</h4>
                <p class="text-right">
                    <h11>*</h11> Campo Obrigatório </p>

                <hr>
                <h5 class="text-center">Dados Pessoais</h5>
                <hr />
                <div class="form-group">
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nome e sobrenome <h11> *</h11></span>
                        </div>
                        <input id="nome" name="cli_nome" type="text" placeholder="Nome" aria-label="nome" class="form-control" required>
                        <input id="sobrenome" name="cli_sobrenome" type="text" placeholder="Sobrenome" aria-label="sobrenome" class="form-control" required>
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">CPF <h11> *</h11></span>
                        </div>
                        <input id="cpf" name="cli_cpf" placeholder="Apenas números" class="form-control" required type="text" maxlength="11">
                    </div>

                    <div class="input-group col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nascimento <h11> *</h11></span>
                        </div>
                        <input id="dtnasc" name="cli_data_nasc" placeholder="DD/MM/AAAA" class="form-control input-md" required type="text" maxlength="10">
                    </div>
                    <span class="text-danger" style="background-color:#f7c0bc; font-size: 12px; border-radius: 5px; " id="newpost"></span>

                    <div class="input-group col-4 justify-content-end">
                        Sexo:
                        <h11> *</h11>
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
                            <span class="input-group-text">Celular <h11> *</h11></span>
                        </div>
                        <input id="ddd_celular" name="cli_ddd_celular" class="form-control col-3" required placeholder="DDD" type="tel" maxlength="3">
                        <input id="celular" name="cli_celular" class="form-control" required placeholder="XXXXX-XXXX" type="tel" maxlength="10" pattern="\[0-9]<?php echo 2;?>
\[0-9]<?php echo 4.6;?>
-[0-9]<?php echo 3.4;?>
$" OnKeyPress="formatar('#####-####', this)">
                    </div>
                    <div class="input-group col-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Telefone</span>
                        </div>
                        <input id="ddd_fone" name="cli_ddd_fone" class="form-control col-3" placeholder="DDD" type="tel" maxlength="3">
                        <input id="telefone" name="cli_fone" class="form-control" placeholder="XXXX-XXXX" type="tel" maxlength="9" pattern="\[0-9]<?php echo 2;?>
\[0-9]<?php echo 4.6;?>
-[0-9]<?php echo 3.4;?>
$" OnKeyPress="formatar('####-####', this)">
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text">E-mail <h11> *</h11></span>
                        </div>
                        <input type="email" id="email" name="cli_email" class="form-control" placeholder="email@email.com" required autocomplete="off">
                    </div>
                </div>
                <div class="form-inline mb-3">
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Senha <h11> *</h11></span>
                        </div>
                        <input type="password" id="senha" name="cli_senha" class="form-control" placeholder="Senha" required>
                    </div>
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Repetir Senha <h11> *</h11></span>
                        </div>
                        <input type="password" id="confirmsenha" name="cli_confirm_senha" class="form-control" placeholder="Confirmar Senha" required />
                    </div>
                    <span class="col" id="message"></span>
                </div>
                <hr>
                <h5 class="text-center">Endereço</h5>
                <hr>
                <div class="form-inline mb-3">
                    <div class="input-group col-auto">
                        <div class="input-group-prepend">
                            <span class="input-group-text">CEP <h11> *</h11></span>
                        </div>
                        <input id="cep" name="cli_cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8">
                        <button type="button" class="btn btn-outline-primary ml-3" onclick="pesquisacep(cep.value)">Pesquisar</button>
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rua <h11> *</h11></span>
                        </div>
                        <input id="rua" name="cli_endereco" class="form-control" required type="text" value="">
                    </div>
                    <div class="input-group col-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Número <h11> *</h11></span>
                        </div>
                        <input id="numero" name="cli_numero" class="form-control" required type="text" value="">
                    </div>
                </div>

                <div class="form-inline mb-3">
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Bairro <h11> *</h11></span>
                        </div>
                        <input id="bairro" name="cli_bairro" class="form-control" required type="text" value="">
                    </div>
                    <div class="input-group col">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Cidade <h11> *</h11></span>
                        </div>
                        <input id="cidade" name="cli_cidade" class="form-control" required type="text" value="">
                    </div>
                    <div class="input-group col-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">UF <h11> *</h11></span>
                        </div>
                        <input id="estado" name="cli_uf" class="form-control" required type="text" value="">
                    </div>
                </div>

                <div class="form-inline mb-3 justify-content-center">
                    <div class="input-group col-auto p-0">
                        <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                    </div>
                    <div class="input-group col-auto">
                        <button type="reset" class="btn btn-outline-danger">Cancelar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div><?php }
}
