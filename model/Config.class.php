<?php

class Config
{

    //INFORMAÇÕES BÁSICAS DO SITE

    const SITE_URL = "http://localhost";
    const SITE_PASTA = "loja";
    const SITE_NOME = "Loja Carvalho";
    const SITE_EMAIL_ADM = "ronaldo.carvalho@hotmail.com";
    const BD_LIMIT_PAG = 8;
    const BD_LIMIT_PAG_2 = 6;
    const SITE_CEP = '08040740';

    //INFORMAÇÕES DO BANCO DE DADOS
    const
    BD_HOST = "localhost",
    BD_USER = "root",
    BD_SENHA = "",
    BD_BANCO = "lojacarvalho",
    BD_PREFIX = "qc_";

    //INFORMAÇÕES PARA O PHP MAILLER
    const EMAIL_HOST = "smtp.office365.com";
    const EMAIL_USER = "ronaldo.carvalho@hotmail.com";
    const EMAIL_NOME = "Contato Loja Carvalho";
    const EMAIL_SENHA = "pires@10";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "TLS";
    const EMAIL_COPIA = "ronaldo.carvalho@hotmail.com";
}