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

    //CONSTANTES PARA O PAG SEGURO
    const PS_EMAIL = "ronaldo.carvalho@hotmail.com"; // email pagseguro
    const PS_TOKEN = "320871c2-084a-4999-aeb5-eeceb36d4a320f033246477995f11fd84a36320ce18d71ae-ed23-4249-bb40-1f8326fc1b89"; // token produção
    const PS_TOKEN_SBX = "855A56CC16944D71ABDA90C2D45827CD"; // token do sandbox
    const PS_AMBIENTE = "production"; // production   /  sandbox
}