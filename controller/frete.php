<?php
require_once '../lib/autoload.php';

//instancio a classe correios
$destino = $_GET['cepcliente'];
$peso    = $_GET['pesofrete'];

// chamando a classe Correios
$frete = new Correios($destino, $peso);

//chamo meu metodo para calcular
$calc = $frete->Calcular();

//verifica se foi calculado, se sim retorna xml , caso não, mostra erros
if (!$calc) :

  $error = $frete->error();
  echo $error[0];
  

else :


echo  '<div class="col-3 p-0 mb-2">';

  foreach ($calc as $frete) :
    if ($frete['erro'] != 0) :
      echo $frete['tipo'] . ' - ';
      echo $frete['Codigo'] . ' - ';
      echo $frete['MsgErro'];
      echo '<br><b> Erro no calculo de frete </b><br>';
    else :
      echo '<div class="row no-gutters text-left">';
      echo '<label><input class="text-right mr-2" type="radio"  required id="frete_radio" name="frete_radio" value="' . str_replace(',', '.', $frete['valor']) . '" > R$ ' . $frete['valor'] . ' - ' . $frete['tipo'] . ' - Prazo: ' . $frete['Prazo'] . ' dia(s)</label>';
      echo '</div>';
    endif;

  endforeach;
  echo '</div>';
endif;
