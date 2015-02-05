-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 05/02/2015 às 13:23
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
-- Estrutura para tabela `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `TipoUsuario` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `ConfirmaSenha` varchar(50) NOT NULL,
  `NomeExibicao` varchar(100) NOT NULL,
  `Entrada` varchar(20) NOT NULL,
  `Saida` varchar(20) NOT NULL,
  `Almoco` varchar(20) NOT NULL,
  `Foto` varchar(300) NOT NULL,
  `DataCadastro` varchar(20) NOT NULL,
  `PermissaoProcesso` varchar(300) NOT NULL,
  `CreditoUsuario` varchar(20) NOT NULL,
  `CreditoUsuario_final` varchar(20) NOT NULL,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Fazendo dump de dados para tabela `Usuarios`
--

INSERT INTO `Usuarios` (`IdUsuario`, `TipoUsuario`, `Email`, `Senha`, `ConfirmaSenha`, `NomeExibicao`, `Entrada`, `Saida`, `Almoco`, `Foto`, `DataCadastro`, `PermissaoProcesso`, `CreditoUsuario`, `CreditoUsuario_final`) VALUES
(1, 'Administrador', 'tairoroberto@hotmail.com', '123', '123', 'Tairo Roberto Miguel de Assunçâo', '10:0011', '18:00', '14:00', 'c5a5445878e3f09931f160faa5b74132.jpg', '28/08/2014', '', '', ''),
(2, 'Administrador', 'vasco.pinheiro@mandprojetos.com.br', 'mand', 'mand', 'Vasco Pinheiro', '09:00', '19:00', '2:00', 'c39b4756bd2461ab0f9781dc9c4cacce.jpg', '01/09/2014', '', '', ''),
(3, 'Administrador', 'renato.andrade@mandprojetos.com.br', 'm@nd', 'm@nd', 'Renato Andrade', '09:00', '19:00', '2hrs', '487764634274209f611f70491c773538.jpg', '01/09/2014', '', '', ''),
(4, 'Funcionario', 'tecnico1@mandprojetos.com.br', '2232', '2232', 'Matheus Camilo', '9:00', '16:00', '1:00', '', '01/09/2014', '', '', ''),
(5, 'Funcionario', 'tecnico2@mandprojetos.com.br', '2262', '2262', 'Bruna Morata', '9:00', '18:00', '1:00', '', '01/09/2014', '', '', ''),
(11, 'Administrador', 'magali@mandprojetos.com.br', '123456', '123456', 'Magali Bastos', '8:00', '20:00', '12:00', '', '07/11/2014', '', '', ''),
(12, 'Funcionario', 'tecnico3@mandprojetos.com.br', 'm@nd', 'm@nd', 'Arthur Karam', '9:00', '18:00', '12:00', '', '10/11/2014', '', '', ''),
(13, 'Funcionario', 'esouza@urbin-di.com.br', 'm@nd', 'm@nd', 'Emerson Inácio Souza ', '9:00', '18:00', '12:00', '', '10/11/2014', '', '', ''),
(15, 'Cliente', 'tairoroberto@hotmail.com', '12345', '12345', 'Tairo Roberto Miguel de Assunçâo', '', '', '', '', '17/11/2014', '1,2,', '250,00', '250,00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
