-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Dez-2019 às 08:10
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojacarvalho`
--
CREATE DATABASE IF NOT EXISTS `lojacarvalho` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lojacarvalho`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `qc_categorias`
--

CREATE TABLE `qc_categorias` (
  `cate_id` int(11) NOT NULL,
  `cate_nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cate_slug` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `qc_categorias`
--

INSERT INTO `qc_categorias` (`cate_id`, `cate_nome`, `cate_slug`) VALUES
(1, 'Geral', 'categoria-geral'),
(2, 'Camisas', 'categoria-camisas'),
(3, 'Calças', 'categoria-calcas'),
(4, 'Tênis', 'categoria-tenis'),
(5, 'Sapatos', 'categoria-sapatos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `qc_clientes`
--

CREATE TABLE `qc_clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(80) NOT NULL,
  `cli_sobrenome` varchar(80) NOT NULL,
  `cli_cpf` varchar(12) NOT NULL,
  `cli_sexo` varchar(20) NOT NULL,
  `cli_data_nasc` date NOT NULL,
  `cli_ddd_fone` int(3) NOT NULL,
  `cli_fone` varchar(12) NOT NULL,
  `cli_ddd_celular` int(3) NOT NULL,
  `cli_celular` varchar(13) NOT NULL,
  `cli_email` varchar(60) NOT NULL,
  `cli_senha` varchar(40) NOT NULL,
  `cli_cep` varchar(10) NOT NULL,
  `cli_endereco` varchar(100) NOT NULL,
  `cli_bairro` varchar(80) NOT NULL,
  `cli_cidade` varchar(150) NOT NULL,
  `cli_uf` varchar(2) NOT NULL,
  `cli_numero` varchar(20) NOT NULL,
  `cli_data_cad` date NOT NULL,
  `cli_hora_cad` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `qc_clientes`
--

INSERT INTO `qc_clientes` (`cli_id`, `cli_nome`, `cli_sobrenome`, `cli_cpf`, `cli_sexo`, `cli_data_nasc`, `cli_ddd_fone`, `cli_fone`, `cli_ddd_celular`, `cli_celular`, `cli_email`, `cli_senha`, `cli_cep`, `cli_endereco`, `cli_bairro`, `cli_cidade`, `cli_uf`, `cli_numero`, `cli_data_cad`, `cli_hora_cad`) VALUES
(50, 'Ronaldo', 'Pires de Carvalho', '39630231808', '0', '0000-00-00', 11, '2057-5984', 11, '95554-4918', 'ronaldo.carvalho@hotmail.com', '202cb962ac59075b964b07152d234b70', '08040740', 'Rua das Nemésias', 'Jardim Casa Pintada', 'São Paulo', 'SP', '422', '2019-12-17', '05:21:35'),
(51, 'Renata', 'Lopes', '33333333345', '1', '0000-00-00', 11, '2057-5984', 11, '95554-4918', 'renata@hotmail.com', '202cb962ac59075b964b07152d234b70', '08040740', 'Rua das Nemésias', 'Jardim Casa Pintada', 'São Paulo', 'SP', '422', '2019-12-17', '05:26:50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `qc_imagens`
--

CREATE TABLE `qc_imagens` (
  `img_id` int(11) NOT NULL,
  `img_nome` varchar(50) NOT NULL,
  `img_pro_id` int(11) NOT NULL,
  `img_pasta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `qc_imagens`
--

INSERT INTO `qc_imagens` (`img_id`, `img_nome`, `img_pro_id`, `img_pasta`) VALUES
(1, 'tenis-couro-01.jpg', 18, ''),
(2, 'tenis-couro-02.jpg', 18, ''),
(3, 'tenis-couro-03.jpg', 18, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `qc_pedidos`
--

CREATE TABLE `qc_pedidos` (
  `ped_id` int(11) NOT NULL,
  `ped_data` date NOT NULL,
  `ped_hora` time NOT NULL,
  `ped_cliente` int(11) NOT NULL,
  `ped_cod` varchar(100) NOT NULL,
  `ped_ref` varchar(40) NOT NULL,
  `ped_pag_status` varchar(20) NOT NULL,
  `ped_pag_forma` varchar(20) NOT NULL,
  `ped_pag_tipo` varchar(20) NOT NULL,
  `ped_pag_codigo` varchar(220) NOT NULL,
  `ped_frete_valor` double(9,2) DEFAULT 0.00,
  `ped_frete_tipo` varchar(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `qc_pedidos`
--

INSERT INTO `qc_pedidos` (`ped_id`, `ped_data`, `ped_hora`, `ped_cliente`, `ped_cod`, `ped_ref`, `ped_pag_status`, `ped_pag_forma`, `ped_pag_tipo`, `ped_pag_codigo`, `ped_frete_valor`, `ped_frete_tipo`) VALUES
(8, '2019-12-17', '01:51:48', 50, '19121701124450', '19121701124450', '', '', '', '', 21.00, NULL),
(9, '2019-12-17', '02:02:02', 51, '19121702125651', '19121702125651', '', '', '', '', 59.90, NULL),
(10, '2019-12-17', '02:29:47', 51, '19121702124251', '19121702124251', '', '', '', '', 271.90, NULL),
(11, '2019-12-17', '03:14:46', 50, '19121703124150', '19121703124150', '', '', '', '', 135.10, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `qc_pedidos_itens`
--

CREATE TABLE `qc_pedidos_itens` (
  `item_id` int(11) NOT NULL,
  `item_produto` int(11) NOT NULL,
  `item_valor` double(9,2) NOT NULL,
  `item_qtd` int(6) NOT NULL,
  `item_ped_cod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `qc_pedidos_itens`
--

INSERT INTO `qc_pedidos_itens` (`item_id`, `item_produto`, `item_valor`, `item_qtd`, `item_ped_cod`) VALUES
(1, 18, 159.00, 1, '123654654'),
(2, 14, 89.00, 1, '123654654'),
(3, 1, 80.00, 2, '123654654'),
(4, 4, 65.00, 2, '123654654'),
(5, 18, 159.00, 1, '123654654'),
(6, 14, 89.00, 1, '123654654'),
(7, 1, 80.00, 2, '123654654'),
(8, 4, 65.00, 2, '123654654'),
(9, 18, 159.00, 1, '123654654'),
(10, 14, 89.00, 1, '123654654'),
(11, 1, 80.00, 2, '123654654'),
(12, 4, 65.00, 2, '123654654'),
(13, 18, 159.00, 1, '123654654'),
(14, 14, 89.00, 1, '123654654'),
(15, 1, 80.00, 2, '123654654'),
(16, 4, 65.00, 2, '123654654'),
(17, 18, 159.00, 1, '123654654'),
(18, 14, 89.00, 1, '123654654'),
(19, 1, 80.00, 2, '123654654'),
(20, 4, 65.00, 2, '123654654'),
(21, 18, 159.00, 1, '123654654'),
(22, 14, 89.00, 1, '123654654'),
(23, 1, 80.00, 2, '123654654'),
(24, 4, 65.00, 2, '123654654'),
(25, 18, 159.00, 1, 'a9d1dbc69b519c49f95a3b32fd923fb6'),
(26, 16, 159.00, 1, 'a9d1dbc69b519c49f95a3b32fd923fb6'),
(27, 14, 89.00, 1, 'a9d1dbc69b519c49f95a3b32fd923fb6'),
(28, 14, 89.00, 1, 'c3b19c86ab4b059be2c9147b7d7a6f36'),
(29, 14, 89.00, 1, '19121518125243'),
(30, 14, 89.00, 1, '19121701124450'),
(31, 17, 199.00, 1, '19121702125651'),
(32, 15, 290.00, 1, '19121702125651'),
(33, 13, 199.00, 1, '19121702124251'),
(34, 11, 352.00, 1, '19121703124150');

-- --------------------------------------------------------

--
-- Estrutura da tabela `qc_produtos`
--

CREATE TABLE `qc_produtos` (
  `pro_id` int(11) NOT NULL,
  `pro_categoria` int(11) NOT NULL,
  `pro_nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_peso` double(9,3) NOT NULL,
  `pro_valor` double(9,2) NOT NULL,
  `pro_largura` int(11) NOT NULL,
  `pro_altura` int(11) NOT NULL,
  `pro_comprimento` int(11) NOT NULL,
  `pro_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_estoque` int(11) NOT NULL,
  `pro_modelo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_ref` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_fabricante` int(11) NOT NULL,
  `pro_ativo` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `pro_frete_free` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `qc_produtos`
--

INSERT INTO `qc_produtos` (`pro_id`, `pro_categoria`, `pro_nome`, `pro_desc`, `pro_peso`, `pro_valor`, `pro_largura`, `pro_altura`, `pro_comprimento`, `pro_img`, `pro_slug`, `pro_estoque`, `pro_modelo`, `pro_ref`, `pro_fabricante`, `pro_ativo`, `pro_frete_free`) VALUES
(1, 2, 'Camisa Social', 'Composta por fios mistos, a camisa 0922 possui um toque suave, com um excelente caimento e é muito confortável ao vestir.\r\nVantagens: os tecidos mistos têm a grande vantagem de não amassarem facilmente, mantendo a elegância durante o dia todo.\r\nUse com calças de sarja, jeans e bermudas.\r\nComposição: Algodão e poliéster', 0.000, 80.00, 80, 80, 80, 'social.jpg', 'camisa-social', 1, 'modelo01', 'REF 0123456', 1, '1', 'gratuito'),
(2, 2, 'Camisa Polo', 'Camisa Polo Manga Longa', 50.000, 60.00, 50, 50, 50, 'polo.jpg', 'camisa-polo', 10, 'modelo 10101010', 'REF 9874561', 1, '1', 'Não'),
(3, 3, 'Calça Feminina', 'Calça Feminina ideal para você sair em qualquer lugar.', 50.000, 35.00, 48, 1, 50, 'calca01.jpg', 'calca-feminina', 20, 'Modelo Padrão', 'Ref-0558965', 1, '1', 'Não'),
(4, 3, 'Calça Masculina Verde', 'Calça Masculina Verde todos os tamanhos', 50.000, 65.00, 50, 50, 50, 'calca02.jpg', 'calca-masculina', 10, 'Modelo Único', 'Ref-654211654', 1, '1', 'Não'),
(5, 3, 'Calças Jeans Camuflada Masculina Jogger Com Punho Elastico', 'PREÇO DE FÁBRICA!!!\r\n\r\nCALÇAS JOGGER MASCULINAS JEANS E SARJA COM LYCRA DE EXCELENTE QUALIDADE.\r\n\r\nDESCRIÇÃO DO PRODUTO\r\nCalça Masculinas C/ Lycra\r\n\r\n*** ATENÇÃO ***\r\n\r\nTABELA DE TAMANHOS:\r\n\r\nP: 36 ao 40\r\nM: 42 ao 44\r\nG: 46 ao 48\r\nGG: 50 ao 52', 50.000, 46.50, 50, 50, 50, 'calca03.jpg', 'calca-masculina', 20, 'Padão', 'Ref-6542131654', 1, '1', 'Não'),
(6, 3, 'Calça Jeans John John Low Skinny Keyes Azul Feminina', 'John John: Calça Jeans John John Low Skinny Keyes Azul Feminina - 10389617\r\nExibindo o estilo da mulher urbana, essa calça descolada da John John traz detalhes rasgados e desfiados com modelagem Skinny, deixando o visual moderno.', 50.000, 49.00, 80, 80, 80, 'calca04.jpg', 'calca-feminina', 60, 'John John', 'Ref - 10389617 AZUL', 1, '1', 'Não'),
(7, 3, 'Kit 3 Calça Jeans Sarja Masculina Skinny Slim Lycra + Cores', 'kit com calças jeans skinny\r\n\r\n\r\nLEIA COM ATENÇÃO\r\n\r\n* para escolha do modelo desejado, basta deixar uma mensagem informado o código da calça de sua preferência de acordo com as fotos do anuncio, passando para o lado verá as opções\r\n\r\n* enviamos em até 24 horas seguindo o prazo estabelecido pelo mercado livre\r\n\r\n* todas as calças possuem lycra, ou seja elas esticam\r\n\r\n\r\nCARACTERÍSTICAS DO PRODUTO\r\n\r\n\r\nTecido: jeans e sarja\r\n\r\nComposição: 98% algodão 2% elastano\r\n\r\nTamanho: 36 ao 48\r\n\r\nFecho: Botão e Zíper\r\n\r\nModelagem: Skinny', 50.000, 157.00, 50, 50, 50, 'calca05.jpg', 'kit-calca-masculina', 12, 'Skinny', 'Ref - 654321651', 1, '1', 'Não'),
(8, 4, 'TÊNIS OLYMPIKUS DARLING AZUL/VERMELHO', 'Tênis Olympikus Darling Azul/Laranja, possui recortes no cabedal, tag lateral da marca e fechamento por cadarço.\r\n\r\nTecnologia EVAsense: EVA macio e expandido que oferece flexibilidade e total conforto ao caminhar.', 50.000, 199.00, 50, 50, 50, 'tenis01.jpg', 'tenis-masculino', 90, 'Olympikus', 'Ref - 065461615000', 1, '1', 'Não'),
(9, 4, 'Tênis Vizyon', 'O Tênis Vizyon possui um design diferenciado e é uma ótima opção para você que ama conforto e moda adequada para os seus pés. Conforto e Estilo definem o Tênis Vizyon, com sua estampa sólida e com tecido de algodão ele demonstra ser uma ótima opção para você que procura superar desafios que a vida trás e o melhor, com Frete grátis para todo o Brasil. © Moda Adequada', 50.000, 189.00, 12, 5, 42, 'tenis02.jpg', 'tenis-feminino', 23, 'Vizyon', 'Ref - 65421651', 1, '1', 'Não'),
(10, 4, 'Tênis Olympikus Flower 415 Feminino - Rosa', 'Experimente o estilo minimalista para treinar. Olympikus Flower traz um visual moderno, com linhas limpas e detalhes de perfuro nas laterais. O solado, com friso na cor do tênis, garante conforto máximo porque tem tecnologia EVASENSE, a última palavra em maciez.\r\n\r\n', 2.000, 259.00, 23, 23, 23, 'tenis03.jpg', 'tenis-feminino', 23, 'Olympikus', 'Ref - 654321654', 1, '1', 'Não'),
(11, 4, 'Tenis Masculino Sapatenis Masculino Promoção Top Roo Impaz', 'Principais Características\r\n\r\nEstilo: Casual\r\nCabedal (Parte Superior Externa): Em lona dublada para maior durabilidade.\r\nSolado: Em microexpandido para maior tração e aderência.\r\nLingueta: Macia e acolchoada\r\nPalmilha: Forrada e removível; conforto e facilidade na higienização\r\nPeso Aproximado: 475g - Tam 38 (O peso varia de acordo com a numeração)\r\nOrigem: Nacional\r\n\r\nTrocas por tamanho os custos de envio serão por conta do comprador, então caso tenha alguma duvida use campo de perguntas e só compre se estiver de acordo com o anúncio.\r\n\r\n\r\nDICAS PARA LAVAGEM: Utilizar pano úmido com sabão neutro e secar na sombra', 26.000, 352.00, 20, 20, 20, 'tenis04.jpg', 'tenis-masculino', 41, 'Impaxx', 'Ref-5465421', 1, '1', 'Não'),
(12, 4, 'Tênis Vizzano Feminino Casual Branco', 'A super tendência que conquistou as mulheres nos últimos meses é o tênis Vizzano branco 1214.205 produzido nas cores branco, preto e bege. Como qualquer outro produto da marca Vizzano, o tênis possui muita qualidade, feito em material sintético na parte externa e têxtil na parte interna, com solado em borracha que proporciona mais conforto e segurança. Detalhes como o fechamento com cadarço com linda placa em metal chamam a atenção. Ideal para o uso no dia a dia, no trabalho, festas e também para o lazer. Compre o seu tênis casual Vizzano aqui na Modaze com o melhor preço do Brasil!', 12.000, 99.00, 10, 10, 10, 'tenis05.jpg', 'tenis-feminino', 10, 'Vizzano', 'Ref - 6545165', 1, '1', 'Não'),
(13, 5, 'Sapato de Noiva e Festa Peep Toe – SS10 Off White', 'Sapato de Noiva e Festa SS10 - Off White Santa Scarpa\r\n\r\n\r\nSapato de Noiva e festa modelo peep toe plataforma, confeccionado em gazar especial;\r\nSapato que tem como característica o conforto proporcionando maior comodidade para aguentar horas em cima do salto;\r\nA palmilha é confeccionada em P.U com enchimento, melhorando a acomodação e o conforto dos pés;\r\nO modelo Ss10 – Off White da Santa Scarpa tem o salto alto, plataforma de 2,5cm e o solado laqueado antiderrapante que tem maior segurança e aderência.;\r\n\r\n\r\nCaracteristicas\r\n\r\n\r\nMarca: Santa Scarpa;\r\nModelo: Peep Toe;\r\nMaterial Externo: Gazar;\r\nMaterial Interno: Sintético / Têxtil;\r\nSolado: Borracha;\r\nPalminha: PU (Poliuretano);\r\nColeção: 2018.', 50.000, 199.00, 12, 12, 12, 'sapato01.jpg', 'sapato-feminino', 23, 'Santa Scarpa', 'Ref - 6546545', 1, '1', 'Não'),
(14, 5, 'Sapatos Social Vr Verniz Masculino - Preto', 'Sapatos Social Vr Verniz Masculino.Confeccionado Sintético Solado Borracha Antiderrapante\r\n\r\nNome: Sapatos Social Vr Verniz Masculino\r\nGênero: Masculino\r\nIndicado para: Dia a Dia\r\nMaterial: Sintético\r\nAcabamento: Verniz\r\nGarantia do Fabricante: Garantia contra defeitos de fabricação\r\nOrigem: Nacional', 0.200, 89.00, 12, 12, 12, 'sapato02.jpg', 'sapato-masculino', 30, 'Vr Verniz', 'Ref - 65454444', 1, '1', 'Não'),
(15, 5, 'SAPATO DINA MIRTZ COUNTRY CROCO LINHAÇA', 'Sapato Dina Mirtz Country croco é um produto que você pode usar nas mais diversas estações do ano, torna seu look mais diferenciado. O sapato Dina Mirtz é produzido em couro com uma estampa croco, tem um vivo dourado em volta e um zíper de ferro que da mais sofisticação ao modelo. O sapato se encaixa muito bem ao pé, tem um belo conforto com um salto grosso e uma palmilha macia.', 2.000, 290.00, 12, 12, 12, 'sapato03.jpg', 'sapato-feminino', 2, 'DINA MIRTZ COUNTRY CROC', 'Ref - 899878777', 1, '1', 'Não'),
(16, 5, 'Sapato Social Masculino Calvest Artesanal Preto com Textura', 'Descrição do Produto\r\nSapato Social Calvest é confeccionado em couro com detalhes em verniz, os elásticos em suas laterais facilitam o calce. Sua tecnologia exclusiva traz com o modelo uma malha texturizada. Acompanha uma palmilha acolchoada em P.U que permite ainda mais conforto ao modelo. O aplique da fivela com nome da marca deixam ele ainda mais exclusivo e sofisticado. As texturas, os pespontos e recortes trazem modernidade e beleza ao calçado. Sua estrutura com forro em P.U e a palmilha macia proporcionam aconchego aos pés, enquanto o solado em borracha dá estabilidade e segurança ao caminhar.\r\n\r\nDetalhes do Produto\r\nForro: PU. \r\nPalmilha: acolchoada em PU.\r\nSolado: em borracha.\r\nLargura: 10,5cm.\r\nSalto: 2,5cm.\r\nComprimento: 31cm.\r\n\r\nPeso: 1.024g (pode variar de acordo com a numeração).\r\nTodos os dados informados são aproximados, do peso às medidas.', 12.000, 159.00, 12, 12, 12, 'sapato04.jpg', 'sapato-masculino', 55, 'Calvest', 'Ref - 55546411', 1, '1', 'Não'),
(17, 5, 'Sapato Feminino Salto Alto Bege Mixage', 'Detalhes do produto: Mixage: Sapato Feminino Salto Alto Bege Mixage - 3578933\r\nSapato Feminino Salto Alto Nude Mixage - 3578933\r\nCaracterísticas\r\nCaracterísticas GeraisMedida do Salto=9 cm aproximadamente\r\nMaterial da Palmilha=Macia\r\nMaterial da Sola=Emborrachado.\r\nMaterial do Sapato=Sintético/Verniz\r\nContem Brindes=Não\r\nModelo=5988933073\r\nReferencia=3578933\r\nGênero=Female\r\nGrupo de Idade=Adult', 12.000, 199.00, 12, 12, 12, 'sapato05.jpg', 'sapat-feminino', 10, 'Sapato Feminino Salto Alto Nude', 'Ref - 654441216', 1, '1', 'Não'),
(18, 4, 'Tenis de Corrida', 'Tenis de Corrida', 50.000, 159.00, 50, 50, 50, 'tenis-couro.jpg', 'tenis-couro-masculino', 25, 'Nike', 'Ref - 65412354', 1, '1', 'Não');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `qc_categorias`
--
ALTER TABLE `qc_categorias`
  ADD PRIMARY KEY (`cate_id`);

--
-- Índices para tabela `qc_clientes`
--
ALTER TABLE `qc_clientes`
  ADD PRIMARY KEY (`cli_id`) USING BTREE;

--
-- Índices para tabela `qc_imagens`
--
ALTER TABLE `qc_imagens`
  ADD PRIMARY KEY (`img_id`);

--
-- Índices para tabela `qc_pedidos`
--
ALTER TABLE `qc_pedidos`
  ADD PRIMARY KEY (`ped_id`);

--
-- Índices para tabela `qc_pedidos_itens`
--
ALTER TABLE `qc_pedidos_itens`
  ADD PRIMARY KEY (`item_id`);

--
-- Índices para tabela `qc_produtos`
--
ALTER TABLE `qc_produtos`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `qc_categorias`
--
ALTER TABLE `qc_categorias`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `qc_clientes`
--
ALTER TABLE `qc_clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de tabela `qc_imagens`
--
ALTER TABLE `qc_imagens`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `qc_pedidos`
--
ALTER TABLE `qc_pedidos`
  MODIFY `ped_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `qc_pedidos_itens`
--
ALTER TABLE `qc_pedidos_itens`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `qc_produtos`
--
ALTER TABLE `qc_produtos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
