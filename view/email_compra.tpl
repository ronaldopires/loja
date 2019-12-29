<style>
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

<p class="textoinicio"> Olá {$NOME_CLIENTE} , obrigado pela sua compra em {$SITE_NOME} <br>
    <a href="{$SITE_HOME}"> {$SITE_HOME} </a>
</p>

<section class="row">
    <p class="minhaconta">
        Para acessar a sua conta e ter um histórico de seus pedidos acesse nosso site, e sua conta<br>
        <a href="{$PAG_MINHA_CONTA}"> Minha conta: {$PAG_MINHA_CONTA} </a>

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
        {foreach from=$PRO item=P}
        <tr style="border: 1px solid #000">
            <td><img src="{$P.pro_img}"></td>
            <td>{$P.pro_nome} </td>
            <td>{$P.pro_valor} </td>
            <td style="text-align: center;">{$P.pro_qtd} </td>
            <td>{$P.pro_subTotal} </td>
        </tr>
        {/foreach}
    </table>
</section>
<!-- fim da listagem itens -->


<!-- botoes de baixo e valor total -->
<div class="sessao">
    <p class="total">
        <b>Total</b> R$ {$TOTAL}
    </p>
    <p class="frete">
        <b>Frete</b> R$ {$FRETE}
    </p>
    <p class="totalfrete">
        <b>Valor Total R$ {$TOTAL_FRETE}</b>
    </p>
</div>
<br>