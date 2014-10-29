-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 08/10/2014 às 16:32
-- Versão do servidor: 5.6.17-66.0-log
-- Versão do PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `mandproj_DB`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `PermissoesUsuario`
--

CREATE TABLE IF NOT EXISTS `PermissoesUsuario` (
  `IdPermissao` int(11) NOT NULL AUTO_INCREMENT,
  `Holding` varchar(50) NOT NULL,
  `Requerente` varchar(50) NOT NULL,
  `Imovel` varchar(50) NOT NULL,
  `Oportunidade` varchar(50) NOT NULL,
  `Orcamento` varchar(50) NOT NULL,
  `Faq` varchar(50) NOT NULL,
  `LinksUteis` varchar(50) NOT NULL,
  `Processos` varchar(50) NOT NULL,
  `Servicos` varchar(50) NOT NULL,
  `Tarefas` varchar(50) NOT NULL,
  `Incorporacao` varchar(50) NOT NULL,
  `Calendario` varchar(50) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  PRIMARY KEY (`IdPermissao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Fazendo dump de dados para tabela `PermissoesUsuario`
--

INSERT INTO `PermissoesUsuario` (`IdPermissao`, `Holding`, `Requerente`, `Imovel`, `Oportunidade`, `Orcamento`, `Faq`, `LinksUteis`, `Processos`, `Servicos`, `Tarefas`, `Incorporacao`, `Calendario`, `IdUsuario`) VALUES
(1, 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 5),
(2, 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 1),
(3, 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 2),
(4, 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 3),
(10, 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 'Visualizar//', 4),
(11, 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 6),
(12, 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
