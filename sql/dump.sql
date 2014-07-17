-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 17-Jul-2014 às 16:13
-- Versão do servidor: 5.5.37
-- versão do PHP: 5.5.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `site_simples`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_clientes`
--

CREATE TABLE IF NOT EXISTS `tbl_clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(100) NOT NULL,
  `email_cliente` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`id_cliente`, `nome_cliente`, `email_cliente`) VALUES
(1, 'Luis Alberto Concha Curay', 'luvett11@gmail.com'),
(2, 'Maria Gomes da Silva', 'maria@gmail.com'),
(3, 'Veronica Perez Albujar', 'veronica@gmail.com'),
(4, 'Jesus Enrique Concha Curay', 'jesus@gmail.com'),
(5, 'Pedro Alcantara Velez', 'pedor@gmail.com'),
(6, 'Monica Arajo', 'mocica@gmail.com'),
(7, 'Susana Villaram ', 'susana@gmail.com'),
(8, 'Fernanda Montes del Pilar', 'susana@gmail.com'),
(9, 'Cliente 01', 'cliente01@gmail.com'),
(10, 'Cliente 02', 'cliente02@gmail.com'),
(11, 'Cliente 03', 'cliente03@gmail.com'),
(12, 'Cliente 04', 'cliente04@gmail.com'),
(13, 'Cliente 01', 'cliente01@gmail.com'),
(14, 'Cliente 02', 'cliente02@gmail.com'),
(15, 'Cliente 03', 'cliente03@gmail.com'),
(16, 'Cliente 04', 'cliente04@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_conteudo`
--

CREATE TABLE IF NOT EXISTS `tbl_conteudo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_conteudo` varchar(200) NOT NULL,
  `conteudo_conteudo` text NOT NULL,
  `slug_conteudo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tbl_conteudo`
--

INSERT INTO `tbl_conteudo` (`id`, `titulo_conteudo`, `conteudo_conteudo`, `slug_conteudo`) VALUES
(1, 'Home', 'P&aacute;gina principal, p&aacute;gina inicial, p&aacute;gina de entrada (home page ou homepage em ingl&ecirc;s) &eacute; a p&aacute;gina inicial de um site da internet (tamb&eacute;m chamado s&iacute;tio). Compreende uma apresenta&ccedil;&atilde;o do site e de todo seu conte&uacute;do. Seria como a capa de uma revista.O termo p&aacute;gina de entrada tamb&eacute;m pode se referir à p&aacute;gina, o &iacute;ndice de diret&oacute;rio de servidor web site de um grupo, empresa, organiza&ccedil;&atilde;o ou indiv&iacute;duo, ou p&aacute;gina principal que &eacute; visualizada quando o navegador de internet (como Firefox, Internet Explorer ou Opera) &eacute; aberto.Em alguns pa&iacute;ses, como Alemanha, Jap&atilde;o e Coreia do Sul, e anteriormente nos Estados Unidos, a p&aacute;gina inicial do termo normalmente se refere a um site completo (de uma empresa ou outra organiza&ccedil;&atilde;o) ao inv&eacute;s de uma &uacute;nica p&aacute;gina web.Na mesma categoria da homepage est&atilde;o websites que tentam ser uma p&aacute;gina inicial (mais precisamente, um portal web pessoal). A p&aacute;gina inicial &eacute; um site ou p&aacute;gina pretende organizar os links e informa&ccedil;&otilde;es para o usu&aacute;rio quando inicia um navegador da web. As p&aacute;ginas come&ccedil;am geralmente com informa&ccedil;&otilde;es como not&iacute;cias, meteorologia, jogos e widgets da Web e outros gadgets web. Comece p&aacute;ginas de informa&ccedil;&atilde;o, como tamb&eacute;m agregar feeds RSS ou receber e gerenciar links da web page. S&atilde;o exemplos de p&aacute;ginas iniciais Clickr iGoogle, Netvibes, Sthrt, Pageflakes MSN etcA maioria das homepages come&ccedil;am com uma recep&ccedil;&atilde;o e um pouco de informa&ccedil;&atilde;o sobre o seu site. No entanto, maiores websites projetados para navega&ccedil;&atilde;o, tais como lojas, cole&ccedil;&otilde;es de entretenimento livre, e sites informativos, caracter&iacute;stica coisas especiais sobre o frontpage como "Destaque", "A maioria gostou," “Spotlight "," Great Deals "e assim por diante.Fonte: wikipedia', 'home'),
(2, 'Empresa', 'No Direito Empresarial, atividade empresarial, ou empresa, &eacute; uma atividade econômica exercida profissionalmente pelo empres&aacute;rio por meio da articula&ccedil;&atilde;o dos fatores produtivos para a produ&ccedil;&atilde;o ou circula&ccedil;&atilde;o de bens ou de servi&ccedil;os. O conceito jur&iacute;dico de empresa n&atilde;o pode ser entendido como um sujeito de direito, uma pessoa jur&iacute;dica, tampouco o local onde se desenvolve a atividade econômica.Fonte: wikipeda', 'empresa'),
(3, 'Produto', 'Produto, em administra&ccedil;&atilde;o e marketing, &eacute; um conjunto de atributos, tang&iacute;veis ou intang&iacute;veis, constitu&iacute;do atrav&eacute;s do processo de produ&ccedil;&atilde;o, para atendimento de necessidades reais ou simb&oacute;licas, e que pode ser negociado no mercado, mediante um determinado valor de troca, quando ent&atilde;o se converte em mercadoria.\r\n\r\nPortanto, como produtos, consideramos bens f&iacute;sicos (furadeiras, livros, etc), servi&ccedil;os (cortes de cabelo, lavagem de carro, etc.), eventos (concertos, desfiles, etc.), pessoas (Pel&eacute;, George Bush, etc.), locais (Hava&iacute;, Veneza, etc.), organiza&ccedil;&otilde;es, (Greenpeace, Ex&eacute;rcito da Salva&ccedil;&atilde;o, etc.) ou mesmo id&eacute;ias (planejamento familiar, dire&ccedil;&atilde;o defensiva, etc.)\r\n\r\nSegundo Kotler e Armstrong, produto &eacute; qualquer coisa que possa ser oferecida a um mercado para aten&ccedil;&atilde;o, aquisi&ccedil;&atilde;o, uso ou consumo, e que possa satisfazer a um desejo ou necessidade.\r\n\r\nO produto &eacute; o primeiro elemento do Composto Mercadol&oacute;gico: todos os demais componentes dependem do estudo e conhecimento do produto. A propaganda, o pre&ccedil;o e a distribui&ccedil;&atilde;o s&oacute; podem ser definidas ap&oacute;s um estudo do produto e da identifica&ccedil;&atilde;o de seu mercado-alvo. Assim os fatores diretamente relacionados a oferta de marketing s&atilde;o aqui estudados.\r\n\r\nQuais produtos produzir e vender, quais novos produtos acrescentar, quais abandonar, em que est&aacute;gio do ciclo de vida o produto se encontra, quantos produtos o portf&oacute;lio deve ter, s&atilde;o apenas algumas das preocupa&ccedil;&otilde;es encontradas na Gest&atilde;o de Produto\r\n\r\nO consumidor optar&aacute; pelo produto que considerar como o de maior valor, e para isso levar&aacute; em considera&ccedil;&atilde;o aspectos tangiveis e intangiveis que merecem a aten&ccedil;&atilde;o dos profissionais de marketing.\r\n\r\nFonte: wikipedia', 'produtos'),
(4, 'Setor terci&aacute;rio', 'Setor terci&aacute;rio &eacute; definido pela exclus&atilde;o dos dois outros setores.Como Presta&ccedil;&atilde;o de servi&ccedil;os, Ou seja &eacute; o setor econômico relacionado aos servi&ccedil;os 1 Os servi&ccedil;os s&atilde;o definidos na literatura econômica convencional como "bens intang&iacute;veis". Em termos de Marketing, os servi&ccedil;os s&atilde;o, muitas vezes, utilizados como um meio de gerar valor ao produto. Tal no&ccedil;&atilde;o, est&aacute; intimamente ligada à adi&ccedil;&atilde;o de an&eacute;is (acr&eacute;scimo de valor), ou seja, o produto na sua fun&ccedil;&atilde;o mais b&aacute;sica. Um exemplo cl&aacute;ssico, desta ideia, &eacute; o chamado servi&ccedil;o de p&oacute;s-venda. Ou seja, a assist&ecirc;ncia que &eacute; prestada ao cliente, ap&oacute;s a venda do produto, &eacute; entendido como um servi&ccedil;o prestado, que valoriza o produto, pela garantia da assist&ecirc;ncia. Foi adicionado um anel, em forma de servi&ccedil;o, à ess&ecirc;ncia de fun&ccedil;&atilde;o do produto.\r\n\r\nO setor terci&aacute;rio da economia envolve a presta&ccedil;&atilde;o de servi&ccedil;os às empresas, bem como aos consumidores finais. Os servi&ccedil;os podem envolver o transporte, distribui&ccedil;&atilde;o e venda de mercadorias do produtor para um consumidor que pode acontecer no com&eacute;rcio atacadista ou varejista, ou podem envolver a presta&ccedil;&atilde;o de um servi&ccedil;o, como o antiparasitas. Os produtos podem ser transformados no processo de presta&ccedil;&atilde;o de um servi&ccedil;o, como acontece no restaurante ou em equipamentos da ind&uacute;stria de repara&ccedil;&atilde;o. No entanto, o foco &eacute; sobre as pessoas interagindo com as pessoas e servindo ao consumidor, mais do que a transforma&ccedil;&atilde;o de bens f&iacute;sicos.\r\n\r\nFonte: wikipedia', 'servicos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nome_menu` varchar(60) NOT NULL,
  `href_menu` varchar(60) NOT NULL,
  `hint_menu` varchar(60) NOT NULL,
  `sit_cancelado` char(1) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `nome_menu`, `href_menu`, `hint_menu`, `sit_cancelado`) VALUES
(1, 'Home', 'home', 'Pagina inicial', 'N'),
(2, 'Empresa', 'empresa', 'Pagina empresa', 'N'),
(3, 'Produtos', 'produtos', 'Pagina dos produtos', 'N'),
(4, 'Servi&ccedil;os', 'servicos', 'Pagina dos servi&ccedil;os', 'N'),
(5, 'Clientes', 'clientes', 'Nossos clientes', 'N'),
(6, 'Contato', 'contato', 'Pagina de contato', 'N'),
(7, 'Fixture', 'fixture', 'Executa script sql', 'N');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(60) NOT NULL,
  `cpf_usuario` varchar(11) NOT NULL,
  `senha_usuario` varchar(80) NOT NULL,
  `dat_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sit_cancelado` char(1) NOT NULL COMMENT '1=ativo, 2=inativo',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `nome_usuario`, `cpf_usuario`, `senha_usuario`, `dat_cadastro`, `sit_cancelado`) VALUES
(1, 'Luis Alberto Concha Curay', '21267811862', '$2y$10$RXN0YSBzZW5oYSBmb2kgZuxDn6STZCPC0LGOd.c/kQuEtq6Nb7EfS', '2014-07-17 12:01:42', '1'),
(2, 'Maria Pepa', '13638431762', '$2y$10$RXN0YSBzZW5oYSBmb2kgZuxDn6STZCPC0LGOd.c/kQuEtq6Nb7EfS', '2014-07-17 12:02:30', '2'),
(5, 'Marina Oliveira del Monte', '55501503875', '$2y$10$RXN0YSBzZW5oYSBmb2kgZuxDn6STZCPC0LGOd.c/kQuEtq6Nb7EfS', '2014-07-17 18:53:03', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;