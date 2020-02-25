<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-25 15:09:32
  from 'C:\xampp\htdocs\loja\view\email_compra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5562dcc4b4a0_39325121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55d021ef53c06c4dca2de25b890539eece5f171f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\email_compra.tpl',
      1 => 1582653742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5562dcc4b4a0_39325121 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .tabela {
        border-collapse: collapse;
        width: 100%;
    }
    
    .tabela th,
    td {
        text-align: left;
        padding: 8px;
    }
    
    .tabela tr:nth-child(odd) {
        background-color: #b2b2b2;
    }
    
    .sessao {
        padding: 20px;
    }
    
    .total {
        text-align: right;
    }
    
    .frete {
        text-align: right;
    }
    
    .totalfrete {
        text-align: right;
        font-size: 18px;
        font-style: bold;
        color: #062a46;
    }
    
    .textoinicio {
        text-align: center;
    }
    
    .minhaconta {
        text-align: center;
    }
</style>

<p class="textoinicio"> Olá <?php echo $_smarty_tpl->tpl_vars['NOME_CLIENTE']->value;?>
 , obrigado pela sua compra em <?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
 <br>
    <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
 </a>
</p>

<section class="row">
    <p class="minhaconta">
        Para acessar a sua conta e ter um histórico de seus pedidos acesse nosso site, e sua conta<br>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
"> Minha conta: <?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
 </a>

    </p>
</section>
<section class="row">
    <table class="tabela">
        <tr style="
            border: 1px solid #000;  
            background-color: #072339;
            color:#FFF;
            font-size:18px;">
            <td colspan="2" style="width: 80%;">Itens do seu pedido </td>
            <td>Valor</td>
            <td>Quantidade</td>
            <td>SubTotal</td>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        <tr style="border: 1px solid #000">
            <td class="align-middle"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </td>
            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
 </td>
            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
 </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</section>
<!-- fim da listagem itens -->


<!-- botoes de baixo e valor total -->
<div class="sessao">
    <p class="total">
        <b>Total</b> R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

    </p>
    <p class="frete">
        <b>Frete</b> R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>

    </p>
    <p class="totalfrete">
        <b>Valor Total R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
</b>
    </p>
</div>
<br><?php }
}
