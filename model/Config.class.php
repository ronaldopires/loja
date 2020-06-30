<?php

class Config
{

    //INFORMAÇÕES BÁSICAS DO SITE

    const SITE_URL = "http://localhost";
    const SITE_PASTA = "loja";
    const SITE_NOME = "Loja Carvalho";
    const SITE_EMAIL_ADM = ""; //Email adm do site
    const BD_LIMIT_PAG = 8; //Paginações
    const BD_LIMIT_PAG_2 = 6;
    const SITE_CEP = '08040740'; //Cep origem para consulta de frete

    //INFORMAÇÕES DO BANCO DE DADOS
    const
    BD_HOST = "localhost",
    BD_USER = "root",
    BD_SENHA = "",
    BD_BANCO = "lojacarvalho",
    BD_PREFIX = "qc_";

    //INFORMAÇÕES PARA O PHP MAILLER
    const EMAIL_HOST = "smtp.office365.com";
    const EMAIL_USER = ""; //E-mail para o php mailler
    const EMAIL_NOME = "Contato Loja Carvalho";
    const EMAIL_SENHA = "";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "TLS";
    const EMAIL_COPIA = "";

    //CONSTANTES PARA O PAG SEGURO
    const PS_EMAIL = ""; // email pagseguro
    const PS_TOKEN = ""; // token produção
    const PS_TOKEN_SBX = ""; // token do sandbox
    const PS_AMBIENTE = "production"; // production   /  sandbox
}
