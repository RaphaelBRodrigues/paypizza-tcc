-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: sql203.byetcluster.com
-- Tempo de Geração: 05/08/2019 às 15:27:07
-- Versão do Servidor: 5.6.41-84.1
-- Versão do PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `epiz_23520784_PayPizza`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Carrinho`
--

CREATE TABLE IF NOT EXISTS `Carrinho` (
  `Sessao` int(11) DEFAULT NULL,
  `ProdutoID` int(11) DEFAULT NULL,
  `ClienteID` int(11) DEFAULT NULL,
  KEY `ProdutoID` (`ProdutoID`),
  KEY `ClienteID` (`ClienteID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Carrinho`
--

INSERT INTO `Carrinho` (`Sessao`, `ProdutoID`, `ClienteID`) VALUES
(1129757932, 1, 1),
(1129757932, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Categoria`
--

CREATE TABLE IF NOT EXISTS `Categoria` (
  `CategoriaID` int(11) NOT NULL,
  `Nomee` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`CategoriaID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Categoria`
--

INSERT INTO `Categoria` (`CategoriaID`, `Nomee`) VALUES
(1, 'Pizzas'),
(2, 'Pizzas Doces'),
(3, 'Bebidas'),
(4, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Cliente`
--

CREATE TABLE IF NOT EXISTS `Cliente` (
  `ClienteID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(40) NOT NULL,
  `Bairro` varchar(50) DEFAULT NULL,
  `Rua` varchar(50) DEFAULT NULL,
  `Ncasa` int(8) DEFAULT NULL,
  `Senha` text,
  `Usuario` text,
  PRIMARY KEY (`ClienteID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `Cliente`
--

INSERT INTO `Cliente` (`ClienteID`, `Nome`, `Bairro`, `Rua`, `Ncasa`, `Senha`, `Usuario`) VALUES
(1, 'lucas1', '132 ', '123', 123, '123123', 'lucas1'),
(2, 'lucas1', '132 ', '123', 123, '*E56A114692FE0DE073F9A1DD68A00EEB9703F3F1', 'lucas1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Compra`
--

CREATE TABLE IF NOT EXISTS `Compra` (
  `CompraID` int(11) NOT NULL AUTO_INCREMENT,
  `Sessao` int(11) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL,
  `ClienteID` int(11) DEFAULT NULL,
  PRIMARY KEY (`CompraID`),
  KEY `ClienteID` (`ClienteID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `Compra`
--

INSERT INTO `Compra` (`CompraID`, `Sessao`, `Total`, `ClienteID`) VALUES
(1, 1129757932, 0, 1),
(2, 1129757932, 0, 1),
(3, 1129757932, 0, 1),
(4, 1129757932, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Estoque`
--

CREATE TABLE IF NOT EXISTS `Estoque` (
  `NomeProduto` varchar(30) DEFAULT NULL,
  `Quantidade` int(11) DEFAULT NULL,
  `Descrição` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Funcionario`
--

CREATE TABLE IF NOT EXISTS `Funcionario` (
  `FuncionarioID` int(11) NOT NULL AUTO_INCREMENT,
  `Nivel` int(11) NOT NULL,
  `Nome` varchar(40) NOT NULL,
  `Nascimento` date DEFAULT NULL,
  `Salario` int(6) DEFAULT NULL,
  `Endereço` varchar(50) DEFAULT NULL,
  `Senha` text,
  `Usuario` text,
  PRIMARY KEY (`FuncionarioID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `Funcionario`
--

INSERT INTO `Funcionario` (`FuncionarioID`, `Nivel`, `Nome`, `Nascimento`, `Salario`, `Endereço`, `Senha`, `Usuario`) VALUES
(1, 4, 'PayPizza', '0000-00-00', 0, 'UNASP', '123', 'paypizza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Produto`
--

CREATE TABLE IF NOT EXISTS `Produto` (
  `ProdutoID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(30) DEFAULT NULL,
  `CategoriaID` int(3) DEFAULT NULL,
  `Preco` int(2) DEFAULT NULL,
  `imagem` text,
  PRIMARY KEY (`ProdutoID`),
  UNIQUE KEY `Nome` (`Nome`),
  KEY `CategoriaID` (`CategoriaID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `Produto`
--

INSERT INTO `Produto` (`ProdutoID`, `Nome`, `CategoriaID`, `Preco`, `imagem`) VALUES
(1, 'Teste', 1, 21, 'https://www.receitasnestle.com.br/images/default-source/recipes/brigadeiro_alta.jpg'),
(2, 'asf', 1, 12, 'as'),
(3, 'ra', 2, 213, 'data:image/png;base64,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');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
