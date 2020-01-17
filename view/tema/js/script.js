$(document).ready(function () {
    $('.carousel').carousel({
        interval: 3000,
        keyboard: false,
        pause: false,
        wrap: true
    });
    // validar frete
    $('#buscar_frete').on('click', function () {

        var CEP_CLIENTE = $('#cep_frete').val();
        var PESO_FRETE = $('#peso_frete').val();

        if (CEP_CLIENTE.length !== 8) {
            alert('Digite seu CEP corretamente, 8 dígitos e sem traços ou pontos');
            /* $('#frete').addClass('text-center text-danger'); */
            $('#frete').html('<b>Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto</b>');
            $('#cep_frete').focus();
        } else {
            $('#frete').html('<img width=50px src="view/tema/images/loader.gif"> <b style="line-height: 50px;">Carregando...</b>');
            /* $('#frete').addClass(' text-center text-danger'); */
            // carrego o combo com os bairros
            $('#frete').load('controller/frete.php?cepcliente=' + CEP_CLIENTE + '&pesofrete=' + PESO_FRETE);
        } // fim do IF digitei o CEP
    }); // fim do change


    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
        $("#ibge").val("");
    }

    //Quando o campo cep perde o foco.
    $("#cep").blur(function () {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "Pesquisando..." enquanto consulta webservice.
                $("#rua").val("Pesquisando...");
                $("#bairro").val("Pesquisando...");
                $("#cidade").val("Pesquisando...");
                $("#estado").val("Pesquisando...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#estado").val(dados.uf);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });

    $('#senha, #confirmsenha').on('keyup', function () {
            
        if ($('#senha').val() == $('#confirmsenha').val() ) {
            $('#message').html('Tudo Certo!').css('color', 'green');
        } else 
            $('#message').html('Senhas Diferentes!!!').css('color', 'red');

    });

    /* $("#overlay").hide(); */
}); // fim do ready