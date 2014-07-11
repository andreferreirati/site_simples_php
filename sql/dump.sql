-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 10/07/2014 às 23:29
-- Versão do servidor: 5.6.19
-- Versão do PHP: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `site_simples`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_clientes`
--

CREATE TABLE IF NOT EXISTS `tbl_clientes` (
`id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(100) NOT NULL,
  `email_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Fazendo dump de dados para tabela `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`id_cliente`, `nome_cliente`, `email_cliente`) VALUES
(1, 'Cliente 01', 'cliente01@gmail.com'),
(2, 'Cliente 02', 'cliente02@gmail.com'),
(3, 'Cliente 03', 'cliente03@gmail.com'),
(4, 'Cliente 04', 'cliente04@gmail.com'),
(5, 'Cliente 01', 'cliente01@gmail.com'),
(6, 'Cliente 02', 'cliente02@gmail.com'),
(7, 'Cliente 03', 'cliente03@gmail.com'),
(8, 'Cliente 04', 'cliente04@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
`id_menu` int(11) NOT NULL,
  `nome_menu` varchar(60) NOT NULL,
  `href_menu` varchar(60) NOT NULL,
  `hint_menu` varchar(60) NOT NULL,
  `sit_cancelado` char(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Fazendo dump de dados para tabela `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `nome_menu`, `href_menu`, `hint_menu`, `sit_cancelado`) VALUES
(1, 'Home', 'home', 'Pagina inicial', 'N'),
(2, 'Empresa', 'empresa', 'Pagina empresa', 'N'),
(3, 'Produtos', 'produtos', 'Pagina dos produtos', 'N'),
(4, 'Serviços', 'servicos', 'Pagina dos serviços', 'N'),
(5, 'Clientes', 'clientes', 'Pagina dos clientes', 'N'),
(6, 'Contato', 'contato', 'Pagina de contato', 'N'),
(7, 'Fixture', 'fixture', 'Executa script sql', 'N');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
 ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `tbl_menu`
--
ALTER TABLE `tbl_menu`
 ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `tbl_menu`
--
ALTER TABLE `tbl_menu`
MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;