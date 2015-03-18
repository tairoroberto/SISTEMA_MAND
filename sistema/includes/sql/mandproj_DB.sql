-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 18-Mar-2015 às 12:46
-- Versão do servidor: 5.5.38-35.2
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mandproj_DB`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Alerta`
--

CREATE TABLE IF NOT EXISTS `Alerta` (
  `IdAlerta` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `Mensagem` varchar(255) NOT NULL,
  `SituacaoAlerta` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Alerta`
--

INSERT INTO `Alerta` (`IdAlerta`, `IdUsuario`, `Mensagem`, `SituacaoAlerta`) VALUES
(0, 1, 'Solicição de documento - 21/01/2015', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `CadastraHistoricoTarefa`
--

CREATE TABLE IF NOT EXISTS `CadastraHistoricoTarefa` (
  `IdHistoricoTarefa` int(11) NOT NULL,
  `ConteudoHistoricoTarefa` text NOT NULL,
  `IdEtapaTarefa` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `CadastraHistoricoTarefa`
--

INSERT INTO `CadastraHistoricoTarefa` (`IdHistoricoTarefa`, `ConteudoHistoricoTarefa`, `IdEtapaTarefa`) VALUES
(1, 'Etapa editada 28/10/2014 13:05:29', 6),
(2, 'Etapa editada 28/10/2014 14:38:14', 26),
(3, 'Etapa transferida para Tairo Roberto Miguel de Assunçâo 28/10/2014 14:38:29', 26),
(4, 'Etapa pausada 28/10/2014 17:17:41', 38),
(5, 'Trabalhando em Etapa 28/10/2014 17:17:42', 38),
(6, 'Etapa pausada 05/11/2014 19:57:28', 41),
(7, 'Trabalhando em Etapa 05/11/2014 19:57:31', 41),
(8, 'Etapa pausada 05/11/2014 19:57:34', 41),
(9, 'Etapa pausada 05/11/2014 19:57:36', 42),
(10, 'Etapa pausada 05/11/2014 19:57:38', 43),
(11, 'Etapa pausada 05/11/2014 19:57:39', 44),
(12, 'Trabalhando em Etapa 05/11/2014 19:58:18', 41),
(13, 'Trabalhando em Etapa 05/11/2014 19:58:19', 42),
(14, 'Etapa pausada 05/11/2014 19:58:21', 45),
(15, 'Etapa pausada 05/11/2014 19:58:23', 41),
(16, 'Etapa pausada 07/11/2014 13:49:57', 38),
(17, 'Trabalhando em Etapa 07/11/2014 13:50:00', 38),
(18, 'Etapa pausada 07/11/2014 13:50:01', 38),
(19, 'Trabalhando em Etapa 07/11/2014 13:50:02', 38),
(20, 'Etapa transferida para Renato Andrade 07/11/2014 13:50:15', 38),
(21, 'Etapa transferida para Tairo Roberto Miguel de Assunçâo 01/12/2014 18:29:07', 26),
(22, 'Etapa Finalizada 01/12/2014 18:31:39', 26),
(23, 'Etapa Finalizada 01/12/2014 18:31:47', 26),
(24, 'Etapa transferida para Tairo Roberto Miguel de Assunçâo 01/12/2014 18:47:39', 27),
(25, 'Etapa transferida para Tairo Roberto Miguel de Assunçâo 01/12/2014 18:47:50', 26),
(26, 'Etapa Finalizada 01/12/2014 18:47:59', 26),
(27, 'Etapa Finalizada 01/12/2014 18:48:10', 27),
(28, 'Etapa Finalizada 01/12/2014 18:48:16', 27),
(29, 'Etapa transferida para Tairo Roberto Miguel de Assunçâo 01/12/2014 18:49:32', 26),
(30, 'Etapa transferida para Tairo Roberto Miguel de Assunçâo 01/12/2014 18:49:39', 27),
(31, 'Etapa Finalizada 01/12/2014 18:49:46', 26),
(32, 'Etapa Finalizada 01/12/2014 18:49:53', 27),
(33, 'Etapa Finalizada 01/12/2014 18:53:52', 27),
(34, 'Etapa transferida para Tairo Roberto Miguel de Assunçâo 01/12/2014 18:54:43', 27),
(35, 'Etapa Finalizada 01/12/2014 18:54:50', 27),
(36, 'Etapa transferida para Tairo Roberto Miguel de Assunçâo 01/12/2014 18:54:58', 27),
(37, 'Etapa Finalizada 01/12/2014 18:56:48', 27),
(38, 'Etapa transferida para Tairo Roberto Miguel de Assunçâo 01/12/2014 18:57:00', 26),
(39, 'Etapa Finalizada 01/12/2014 18:57:11', 26),
(40, 'Etapa Finalizada 01/12/2014 18:57:16', 26),
(41, 'Etapa transferida para Tairo Roberto Miguel de Assunçâo 01/12/2014 19:01:57', 26),
(42, 'Etapa Finalizada 01/12/2014 19:02:27', 26),
(43, 'Etapa Finalizada 01/12/2014 19:02:31', 26),
(44, 'Etapa transferida para Tairo Roberto Miguel de Assunçâo 01/12/2014 19:05:25', 26),
(45, 'Etapa transferida para Tairo Roberto Miguel de Assunçâo 01/12/2014 19:06:37', 27),
(46, 'Etapa Finalizada 01/12/2014 19:06:43', 26),
(47, 'Etapa Finalizada 01/12/2014 19:06:57', 27),
(48, 'Etapa Finalizada 01/12/2014 19:07:02', 27),
(49, 'Etapa transferida para Tairo Roberto Miguel de Assunçâo 01/12/2014 19:09:51', 26),
(50, 'Etapa Finalizada 01/12/2014 19:10:31', 26),
(51, 'Etapa transferida para Tairo Roberto Miguel de Assunçâo 01/12/2014 19:12:55', 26),
(52, 'Etapa Finalizada 01/12/2014 19:13:36', 26),
(53, 'Etapa pausada 08/12/2014 22:38:55', 78),
(54, 'Trabalhando em Etapa 08/12/2014 22:39:01', 78),
(55, 'Etapa editada 13/12/2014 20:13:25', 57),
(56, 'Etapa editada 22/12/2014 12:30:11', 70),
(57, 'Etapa editada 22/12/2014 12:30:39', 71),
(58, 'Etapa editada 22/12/2014 12:30:58', 72),
(59, 'Etapa editada 22/12/2014 12:31:14', 73),
(60, 'Etapa editada 22/12/2014 12:31:45', 74),
(61, 'Etapa editada 22/12/2014 12:32:01', 75),
(62, 'Etapa editada 22/12/2014 12:32:13', 76),
(63, 'Etapa editada 22/12/2014 12:32:29', 77),
(64, 'Etapa editada 22/12/2014 13:58:37', 82),
(65, 'Etapa pausada 22/12/2014 14:13:51', 72),
(66, 'Etapa editada 22/12/2014 14:20:44', 74),
(67, 'Etapa editada 22/12/2014 14:21:02', 75),
(68, 'Etapa Finalizada 22/12/2014 14:22:52', 77),
(69, 'Etapa pausada 22/12/2014 14:27:07', 73),
(70, 'Trabalhando em Etapa 22/12/2014 14:41:50', 73),
(71, 'Etapa editada 22/12/2014 14:42:30', 75),
(72, 'Etapa editada 22/12/2014 14:42:52', 75),
(73, 'Etapa pausada 22/12/2014 14:43:02', 75),
(74, 'Etapa pausada 22/12/2014 15:26:29', 82),
(75, 'Trabalhando em Etapa 22/12/2014 15:26:35', 82),
(76, 'Etapa transferida para Tairo Roberto Miguel de Assunçâo 22/12/2014 16:49:16', 70),
(77, 'Etapa transferida para Tairo Roberto Miguel de Assunçâo 22/12/2014 16:51:24', 70),
(78, 'Etapa editada 20/01/2015 23:19:29', 66),
(79, 'Etapa editada 20/01/2015 23:20:09', 72),
(80, 'Etapa pausada 21/01/2015 15:29:09', 72),
(81, 'Trabalhando em Etapa 21/01/2015 15:29:15', 72);

-- --------------------------------------------------------

--
-- Estrutura da tabela `CadastraImovel`
--

CREATE TABLE IF NOT EXISTS `CadastraImovel` (
  `IdImovel` int(11) NOT NULL,
  `DataEmissao` varchar(15) NOT NULL,
  `CodigoImovel` int(11) NOT NULL,
  `IdEmpresa` int(11) NOT NULL,
  `NomeEmpresa` varchar(255) NOT NULL,
  `IdRequerente` int(11) NOT NULL,
  `NomeRequerente` varchar(255) NOT NULL,
  `NomeExibicao` varchar(100) NOT NULL,
  `NumeroContribuinte` varchar(255) NOT NULL,
  `MatriculaContribuinte` varchar(255) NOT NULL,
  `NomeContribuinte` varchar(100) NOT NULL,
  `CnpjCpf` varchar(255) NOT NULL,
  `LocalImovel` varchar(100) NOT NULL,
  `CepImovel` varchar(10) NOT NULL,
  `CodLog` varchar(255) NOT NULL,
  `AreaTerreno` varchar(255) NOT NULL,
  `Testada` varchar(255) NOT NULL,
  `AreaConstruida` varchar(255) NOT NULL,
  `FracaoIdeal` varchar(255) NOT NULL,
  `AnoConstrucao` varchar(255) NOT NULL,
  `UsoImovel` varchar(50) NOT NULL,
  `ZonaLei13885` varchar(50) NOT NULL,
  `CaBasicoLei13885` varchar(50) NOT NULL,
  `DistritoLei13885` varchar(50) NOT NULL,
  `SubPrefeituraLei13885` varchar(100) NOT NULL,
  `CaMaximoLei13885` varchar(50) NOT NULL,
  `GabaritoLei13885` varchar(50) NOT NULL,
  `ToImovelLei13885` varchar(50) NOT NULL,
  `TxPermLei13885` varchar(30) NOT NULL,
  `LargViaLei13885` varchar(30) NOT NULL,
  `ClassificacaoViaLei13885` varchar(50) NOT NULL,
  `PagGeomapasLei13885` varchar(100) NOT NULL,
  `ZonaLei16050` varchar(50) NOT NULL,
  `CaBasicoLei16050` varchar(50) NOT NULL,
  `DistritoLei16050` varchar(50) NOT NULL,
  `SubPrefeituraLei16050` varchar(100) NOT NULL,
  `CaMaximoLei16050` varchar(50) NOT NULL,
  `GabaritoLei16050` varchar(50) NOT NULL,
  `ToImovelLei16050` varchar(50) NOT NULL,
  `TxPermLei16050` varchar(50) NOT NULL,
  `LargViaLei16050` varchar(50) NOT NULL,
  `ClassificacaoViaLei16050` varchar(50) NOT NULL,
  `PagGeomapasLei16050` varchar(100) NOT NULL,
  `ComentariosZoneamento` text NOT NULL,
  `SituacaoOperacaoUrbana` varchar(255) NOT NULL,
  `ComentariosOperacaoUrbana` text NOT NULL,
  `ExerciciosIptu` varchar(50) NOT NULL,
  `ValorTolalIptu` varchar(20) NOT NULL,
  `ExerciciosMultas` varchar(50) NOT NULL,
  `ValorTolalMultas` varchar(20) NOT NULL,
  `TotalExercicios` varchar(20) NOT NULL,
  `ComentariosDividas` text NOT NULL,
  `QuadraFiscal` varchar(300) NOT NULL,
  `Geomapas` varchar(300) NOT NULL,
  `ImagemLocal` varchar(300) NOT NULL,
  `ImagemMapa` text NOT NULL,
  `ImagemLei` varchar(255) NOT NULL,
  `SituacaoImovel` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `CadastraImovel`
--

INSERT INTO `CadastraImovel` (`IdImovel`, `DataEmissao`, `CodigoImovel`, `IdEmpresa`, `NomeEmpresa`, `IdRequerente`, `NomeRequerente`, `NomeExibicao`, `NumeroContribuinte`, `MatriculaContribuinte`, `NomeContribuinte`, `CnpjCpf`, `LocalImovel`, `CepImovel`, `CodLog`, `AreaTerreno`, `Testada`, `AreaConstruida`, `FracaoIdeal`, `AnoConstrucao`, `UsoImovel`, `ZonaLei13885`, `CaBasicoLei13885`, `DistritoLei13885`, `SubPrefeituraLei13885`, `CaMaximoLei13885`, `GabaritoLei13885`, `ToImovelLei13885`, `TxPermLei13885`, `LargViaLei13885`, `ClassificacaoViaLei13885`, `PagGeomapasLei13885`, `ZonaLei16050`, `CaBasicoLei16050`, `DistritoLei16050`, `SubPrefeituraLei16050`, `CaMaximoLei16050`, `GabaritoLei16050`, `ToImovelLei16050`, `TxPermLei16050`, `LargViaLei16050`, `ClassificacaoViaLei16050`, `PagGeomapasLei16050`, `ComentariosZoneamento`, `SituacaoOperacaoUrbana`, `ComentariosOperacaoUrbana`, `ExerciciosIptu`, `ValorTolalIptu`, `ExerciciosMultas`, `ValorTolalMultas`, `TotalExercicios`, `ComentariosDividas`, `QuadraFiscal`, `Geomapas`, `ImagemLocal`, `ImagemMapa`, `ImagemLei`, `SituacaoImovel`) VALUES
(1, '27/10/2014', 1, 1, 'Holding Teste', 2, 'Vasco Pinheiro dos Santos', 'Imóvel Teste', '434.343.4343-4', '343.434.343', 'Nome do Contribuiente', '333.333.333-33', 'Rua Aluísio Azevedo,Santana,São Paulo,SP', '02.021-030', '447', '100', '23', '200', '1.4', '2012', 'Comercial', 'ZUPI', '1.0', 'SP', 'Santana', '4.0', '2.0', '4.0', '0.2', '4', 'Residencial', '567', '', '', '', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in volutpat enim. Vivamus eget ligula nisl. Aenean sed metus a turpis pellentesque efficitur vitae id velit. Proin dolor sem, pretium a scelerisque sit amet, lacinia quis magna. Donec tortor ex, interdum sit amet cursus quis, venenatis eget ex. Duis sodales at magna semper lobortis. Cras vel fringilla est. Curabitur auctor consequat eros.', 'Sim', '                                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in volutpat enim. Vivamus eget ligula nisl. Aenean sed metus a turpis pellentesque efficitur vitae id velit. Proin dolor sem, pretium a scelerisque sit amet, lacinia quis magna. Donec tortor ex, interdum sit amet cursus quis, venenatis eget ex. Duis sodales at magna semper lobortis. Cras vel fringilla est. Curabitur auctor consequat eros.', '2013 e 2014', '5.000,00', '2014', '20.000,00', '25.000,00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in volutpat enim. Vivamus eget ligula nisl. Aenean sed metus a turpis pellentesque efficitur vitae id velit. Proin dolor sem, pretium a scelerisque sit amet, lacinia quis magna. Donec tortor ex, interdum sit amet cursus quis, venenatis eget ex. Duis sodales at magna semper lobortis. Cras vel fringilla est. Curabitur auctor consequat eros.', 'a1c3d861b38ba3c610e52a3c8f3beb3e.jpg', 'b835bcb19c4a95ebce9e3e8255141315.jpg', '5cf4ce8036344048fc43a15a06ee8b53.jpg', 'ImagemMapa1-02.021-030.jpg', '', ''),
(2, '29/10/2014', 2, 2, 'Mand Projetos', 2, 'Vasco Pinheiro dos Santos', 'Empresa Teste', '111.111.1111-1', '454243244', 'Tairo Roberto Miguel de Assunçâo', '11.111.111/1111-11', 'Rua Esperança,Parque Vila Maria,São Paulo,SP', '02.169-130', '215', '675', '6546', '35365', '0.2', '2010', 'Comercial', 'Norte', '7686', 'São Paulo', 'Vila Maria', '4554', '687346', '7908', '787.99', '23', 'Coletora', 'Págiana 23', 'Norte', '1111', '1111', 'Tucuruvi', '1111', '1111', '1111', '1111', '1111', 'Baixa', '1111', '', 'Sim', '                                                                                                ', '2009', '54,35', '2003, 2004, 2013', '55,54', '109,89', '', '74f59327da2168f115dccb9e5f7d1e40.jpg', '9124c2df2e52cd11411d244e119f5cd4.jpg', '908a3446163551d8057bff119cf1f885.jpg', 'ImagemMapa2-02.169-130.jpg', 'd0f98aea73c2803345030e5f7cd68cea.jpg', ''),
(4, '29/10/2014', 3, 5, 'Jorge', 5, 'Renato Andrade', 'Tairo Roberto Miguel de Assunçâo', '412.342.3142-1', '543.5', 'Tairo Roberto Miguel de Assunçâo', '324.132.421-34', 'Rua Benfica,Jardim Brasil,São Paulo,SP', '02.226-010', '103', '675', '6546', '35365', '4564', '47', 'Residencia ', 'Norte', '7686', 'São Paulo', 'Santana', '4554', '687346', '7908', '787.99', '23', 'Coletora', 'Págiana 23', '', '', '', '', '', '', '', '', '', '', '', '', 'Sim', '                                                                                                                                ', '2009', '534,25', '2003, 2004, 2013', '53,45', '587,70', '', 'ff9ef06bc3cc250797d4f278f119dbb5.jpg', '63d9f9a3d32620c3003a64d09affede8.jpg', 'fd9f3f0b52ff0eb90f56168a71288e24.jpg', 'ImagemMapa3-02.226-010.jpg', '', ''),
(6, '13/12/2014', 4, 5, 'Jorge ', 5, 'Jorge Sabia', 'Fwefwfewf', '515.145.4235-2', '543.542.353', 'Tairo Roberto Miguel de Assunçâo', '412.341.324-13', 'Rua Jorge Bron,Vila Maria Alta,São Paulo,SP', '02.136-030', '23', '100', '23', '200', '1.4', '2012', 'Comercial', 'Noerertr', '543', 'Sao apulo', 'Vila mariana', '545', '545', '545', '545', '545', '4324', '423', 'Lleste', '554325', 'Eu na sei', 'tucuruvi', 't324', '53244', '5435', '5435', '5345', '5345', '5435', '', 'Sim', '                                ', '', '', '', '', '0,00', '', '05f03ea2ac7622adaec155796be1d1a0.jpg', 'cbd94ba8260b7b4fdc5ffb9563f40096.jpg', 'aed599def7aa04e16f189b2b54fc8a5e.jpg', 'ImagemMapa4-02.136-030.jpg', '0da16ab7314c9cc7dd5b015e55bf8f93.jpg', ''),
(7, '05/03/2015', 5, 12, 'Mohamed', 7, 'Rihab Darwiche Osman', 'Rua Bresser n° 301', '025.016.0055-1', '357.16', 'OPTR2 EMPREENDIMENTOS LTDA', '931.064.100-00', 'Rua Bresser,Brás,São Paulo,SP', '03.017-000', '6', '6666', '0', '3613', '1', '2005', 'Estacionamento, garagem não em condominio', 'MO ZCPa 03', '1', '', 'Mooca', '2,5', 'Sem Limites', '0,70', '0,15', '', 'Estrutural N3', '56 D', 'Macroárea de estruturação Urbana (Arco Tietê)', '1', '', 'Mooca', '2', '28 m', '', '', '', 'Estrutural N3', '', '', 'Sim', '                                                                                                                                                                                                                                ', '0', '', '0', '', '0,00', '', '108d65c550bd0ab2b31301235f083635.jpg', '8946890af9570f91bf9101602f755722.jpg', '1f89be2f28a2b4ce68f40f4c505429ca.jpg', 'ImagemMapa5-03.017-000.jpg', '96cdc07b16d90fdf4709322ed8ddbe03.png', ''),
(8, '05/03/2015', 6, 9, 'EMPRESA DE ONIBUS PASSARO MARRON S.A.', 6, 'Paulo Sergio Bongiovanni', 'Avenida Ordem e Progesso n°1001, 1125 e 1251', '306.079.0157-5', '612.83', 'Ronuro imoveis e construções', '502.704.120-00', 'Rua Joaquim Mendes,Jardim das Laranjeiras,São Paulo,SP', '02.518-100', '1001', '25005,35', '', '', '', '', '', 'CV ZPI 01', '1', '', 'Casa Verde', '1,5', '15 m (g)', '0,70', '0,25', '', 'Estrutural n3', '38 R', 'Macroárea de estruturação urbana (arco tietê)', '1', '', 'Casa Verde', '2', '28 m, térreo + 8 andares', '', '', '', 'Estrutural n3', '38 R', 'Parque municipal em planejamento ', 'Sim', '                                                                ', '', '', '', '', '0,00', '', '', '', 'ba7983414ec97d611548c1d7e364c9e5.jpg', 'ImagemMapa6-02.518-100.jpg', '', ''),
(9, '06/03/2015', 7, 2, 'Mand Projetos', 24, 'Youssef Ahmad Sleiman', 'Avenida Adolfo Pinheiro n°339', '087.067.0005-5', '000.000.000', 'Armando Abdul Bacha', '039.873.798-39', 'Avenida Adolfo Pinheiro,Santo Amaro,São Paulo,SP', '04.733-300', '301', '646', '15,20', '0', '1', '', '', 'SA ZCPb 03', '2', '', 'Santo Amaro', '4', 'Sem Limite', '0,70', '0,15', '', 'Estrutural n3', '85 Q', 'Macroárea de qualificação da urbanização (eixo exi', '1', '', '', '4', 'Sem limite', '0,70', '0,15', '', '', '', '', 'Sim', '                                                                                                                                ', '', '', '', '', '0,00', '', '6464fb733b54fc798d05592aa175f4b2.png', '9e2c95b8e14eaba9794fb22b1f19b485.jpg', '94c135a0be58b4eec963483a92ebdf54.jpg', 'ImagemMapa7-04.733-300.jpg', 'b29fb441d7670b1448c8e02b02803083.jpg', ''),
(10, '16/03/2015', 8, 4, 'Assoc. Portuguesa de Desportos', 4, 'Assoc Portuguesa de Desportos', 'Rua Pascoal Ranieri n°33', '017.103.0046-9', '69902', 'Associação Portuguesa de Desportos', '619.579.810-00', 'Rua Pascoal Ranieri,Canindé,São Paulo,SP', '03.034-060', '33', '98.337', '0', '46480', '1', '1982', 'clube esport.', 'MO ZM3a', '1', '', 'Mooca', '2,5', '', '0,50', '0,5', '', 'Local', '', 'Macroárea de Estruturação Metropolitana (Arco Tiet', '1', '', 'Mooca', '2', '28 m', '', '', '', '', '', '', 'Não', '', '1994 a 2004', '12.318.241,22', '', '', '0,00', '', 'b081f592878e17e48140408c58ba4c64.jpg', '81e7d3e86b3a6bff90ad6f5c163a04a7.jpg', '90d15f4772f5c000ce0fad6206529ed1.jpg', 'ImagemMapa8-03.034-060.jpg', 'cacee3b3bf6965f6101e0992e50914e8.jpg', ''),
(11, '17/03/2015', 9, 6, 'Olga ', 14, 'Adriana Taboada Otero', 'Av. Rudge n°1034', '019.006.0001-3', '63552', 'Adriana Taboada Otero', '259.895.688-51', 'Avenida Rudge,Bom Retiro,São Paulo,SP', '01.134-000', '1034', '776', '15,3', '531', '1', '1978', 'uso especial', 'SE ZCPa 01', '1', '', 'SÉ', '2,5', 'sem limite', '0,5', '0,15', '', 'estrutural n3', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sim', '', '', '', '', '', '0,00', '', '', '', '', 'ImagemMapa9-01.134-000.jpg', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `CadastraIncorporacao`
--

CREATE TABLE IF NOT EXISTS `CadastraIncorporacao` (
  `IdIncorporacao` int(11) NOT NULL,
  `SiglaIncorporacao` varchar(30) NOT NULL,
  `TituloIncorporacao` varchar(50) NOT NULL,
  `CepIncorporacao` varchar(15) NOT NULL,
  `LocalIncorporacao` varchar(50) NOT NULL,
  `NumeroIncorporacao` varchar(15) NOT NULL,
  `EstadoIncorporacao` varchar(10) NOT NULL,
  `CidadeIncorporacao` varchar(50) NOT NULL,
  `BairroIncorporacao` varchar(50) NOT NULL,
  `MetragemIncorporacao` varchar(15) NOT NULL,
  `ValorVendaIncorporacao` varchar(15) NOT NULL,
  `AtividadeIncorporacao` varchar(100) NOT NULL,
  `ZonemanetoInc13885` varchar(15) NOT NULL,
  `CaBasicoInc13885` varchar(15) NOT NULL,
  `CaMaximoInc13885` varchar(15) NOT NULL,
  `ZonemanetoInc16050` varchar(15) NOT NULL,
  `CaBasicoInc16050` varchar(15) NOT NULL,
  `CaMaximoInc16050` varchar(15) NOT NULL,
  `NomeProprietarioIncorporacao` varchar(100) NOT NULL,
  `TelProprietarioIncorporacao` varchar(15) NOT NULL,
  `EmailProprietarioIncorporacao` varchar(100) NOT NULL,
  `NomeCorreteorIncorpotacao` varchar(100) NOT NULL,
  `TelefoneCorretorIncorporacao` varchar(15) NOT NULL,
  `EmailCorretorIncorporacao` varchar(100) NOT NULL,
  `situacao` varchar(50) NOT NULL,
  `ProjetoAprovado` varchar(50) NOT NULL,
  `DocumentacaoIncorporacao` text NOT NULL,
  `TituloFoto1` varchar(100) NOT NULL,
  `Imagem1` varchar(300) NOT NULL,
  `TituloFoto2` varchar(100) NOT NULL,
  `Imagem2` varchar(300) NOT NULL,
  `TituloFoto3` varchar(100) NOT NULL,
  `Imagem3` varchar(300) NOT NULL,
  `TituloFoto4` varchar(100) NOT NULL,
  `Imagem4` varchar(300) NOT NULL,
  `TituloFoto5` varchar(100) NOT NULL,
  `Imagem5` varchar(300) NOT NULL,
  `TituloFoto6` varchar(100) NOT NULL,
  `Imagem6` varchar(300) NOT NULL,
  `ImagemMapaIncorporacao` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `CadastraIncorporacao`
--

INSERT INTO `CadastraIncorporacao` (`IdIncorporacao`, `SiglaIncorporacao`, `TituloIncorporacao`, `CepIncorporacao`, `LocalIncorporacao`, `NumeroIncorporacao`, `EstadoIncorporacao`, `CidadeIncorporacao`, `BairroIncorporacao`, `MetragemIncorporacao`, `ValorVendaIncorporacao`, `AtividadeIncorporacao`, `ZonemanetoInc13885`, `CaBasicoInc13885`, `CaMaximoInc13885`, `ZonemanetoInc16050`, `CaBasicoInc16050`, `CaMaximoInc16050`, `NomeProprietarioIncorporacao`, `TelProprietarioIncorporacao`, `EmailProprietarioIncorporacao`, `NomeCorreteorIncorpotacao`, `TelefoneCorretorIncorporacao`, `EmailCorretorIncorporacao`, `situacao`, `ProjetoAprovado`, `DocumentacaoIncorporacao`, `TituloFoto1`, `Imagem1`, `TituloFoto2`, `Imagem2`, `TituloFoto3`, `Imagem3`, `TituloFoto4`, `Imagem4`, `TituloFoto5`, `Imagem5`, `TituloFoto6`, `Imagem6`, `ImagemMapaIncorporacao`) VALUES
(3, 'MTR 16', 'Pátio  Guido Calói', '05.802-140', 'Avenida Guido Caloi', '', 'SP', 'São Paulo', 'Jardim São Luís (Zona Oeste)', '183875,73', '250.000,00', '', 'MB ZPI 01', '1', '1,5', '', '', '', 'Metro', '', '', '', '', '', 'Não', '', '', 'Earth', '474c8ab3f0053a09043793f8c2bbe9c4.png', '', '', '', '', '', '', '', '', '', '', 'ImagemMapaIncorporacao05.802-140.jpg'),
(6, 'MTR 3', 'Estação Santana', '00.000-000', 'Avenida Cruzeiro do Sul', '', 'SP', 'São Paulo', 'Santana', '8.674,05 ', '', '', 'ST-ZCPa 04', '2,00', '2,50', '', '', '', 'Metro', '(11) 9474-99010', 'atendimento@mandprojetos.com.br', 'Mand', '(11) 3578-0840', 'atendimento@mandprojetos.com.br', 'Não', '', '', 'Localização', '9fa4969e0897c99b3d955a0ca6b857b3.png', 'Quadra', '09130470cd2a557dd2bbb44603d1ffcf.png', 'Zoneamento', '9f98a2961d26888f097402177a605b84.png', '', '', '', '', '', '', 'ImagemMapaIncorporacao00.000-000.jpg'),
(7, 'MTR 4', 'Vergueiro', '02.416-060', 'rua Vergueiro', '1485', 'SP', 'São Paulo', 'Vergueiro', '896', '', '', 'VM-      ZM3b 0', '2,00', '2,50', '', '', '', 'Metro', '(11) 3578-0840', 'atendimento@mandprojetos.com.br', 'Mand', '(11) 3578-0840', 'atendimento@mandprojetos.com.br', 'Não', '', '', 'Localização', 'e121a2347735dfcb2282ead2c2d9dc62.png', 'Quadra', '4cf0d8219a5297d192dfc52464dcf4c6.png', 'Zoneamento', 'd02ccd2d13e4bb5a6724c22388eabac2.png', '', '', '', '', '', '', 'ImagemMapaIncorporacao02.416-060.jpg'),
(9, 'MTR 5', 'Vila Mariana', '02.416-060', 'Rua Domingos de Morais ', '1113', 'SP', 'São Paulo', 'Vila Mariana', '', '', '', 'ZCPb 07', '2', '4', '', '', '', 'Metro', '(11) 3578-0840', 'atendimento@mandprojetos.com.br', 'Mand', '(11) 3578-0840', 'atendimento@mandprojetos.com.br', 'Não', '', '', 'Localização', 'a2acf90b4edc81a910d520ee2c75d14e.png', '', '', 'Zoneamento', 'a350fbc62428e8f2244c3215b83a3637.jpg', '', '', '', '', '', '', 'ImagemMapaIncorporacao02.416-060.jpg'),
(10, 'MTR 6', 'Vila Mariana', '02.416-060', 'Avenida Professor Noe Azevedo', '260', 'sa', 'São Paulo', 'Vila Mariana', '525', '', '', 'VM-      ZCPb 0', '2', '4', '', '', '', 'Metro', '(11) 3578-0840', 'atendimento@mandprojetos.com.br', 'Mand', '(11) 3578-0840', 'atendimento@mandprojetos.com.br', 'Não', '', '', 'Localização', '83273cf32c43d0baaf09d783dd4bedcf.png', 'Quadra', 'a0ccfc64f89b23dd99499725bccae467.png', 'Zoneamento', '1da0b98358095a4ed3422ef8cadff25e.png', '', '', '', '', '', '', 'ImagemMapaIncorporacao02.416-060.jpg'),
(11, 'MTR 7', 'Conceição', '02.416-060', 'Avenida Engenheiro Armando Arruda Pereira ', '0', 'SP', 'São Paulo', 'Conceição', '', '', '', 'SA-      ZM2 - ', '1,0', '1,5', '', '', '', 'Metro', '(11) 3578-0840', 'atendimento@mandprojetos.com.br', 'Mand', '(11) 3578-040', 'atendimento@mandprojetos.com.br', 'Não', '', '', 'Localização', '3372a82aabbff947422b1c3a5c9bf34f.png', 'Quadra', '58a2192e3f038a6a4812dfeea9d02438.png', 'Zoneamento', '4926c607e2af8a84a71267517b396863.png', '', '', '', '', '', '', 'ImagemMapaIncorporacao02.416-060.jpg'),
(12, 'MTR 8', 'Jabaquara', '02.416-060', 'Avenida Engenheiro Armando Arruda Pereira', '0', 'SP', 'São Paulo', 'Jabaquara', '2.816,36 ', '', '', 'JA -      ZM3A ', '1,0', '2,5', '', '', '', 'Metro', '(11) 3578-040', 'atendimento@mandprojetos.com.br', 'Mand', '(11) 3578-0840', 'atendimento@mandprojetos.com.br', 'Não', '', '', 'Localização', '7fbe618b861709567d65f9f42483f529.png', 'Quadra', '86f9fd086077ee7aeb51c661e60e3713.jpg', 'Zoneamento', '2452891ff112eefcc012782321526882.png', '', '', '', '', '', '', 'ImagemMapaIncorporacao02.416-060.jpg'),
(13, 'MTR 15', 'Adolfo Pinheiro', '02.416-060', 'Padre José de Anchieta ', '00', 'SP', 'São Paulo', 'Santo Amaro', '', '', '', 'ZM2 - 03  ', '1,0', '1,5', '', '', '', 'Metro', '(11) 3578-0840', 'atendimento@mandprojetos.com.br', 'Mand', '(11) 3578-0840', 'atendimento@mandprojetos.com.br', 'Não', '', '', 'Localização', 'f820e759cb36486b3151a4d0f6278826.png', 'Quadra', 'b161d34bbd293cd133a7ed63324238d1.png', 'Quadra', '0145b143f3b472dfb68e5ce2890cba05.png', 'Zoneamento', 'c692469bbcd1eb0c246531bee8eaf888.png', '', '', '', '', 'ImagemMapaIncorporacao02.416-060.jpg'),
(14, 'MTR 167', 'Santo Amaro', '04.505-002', 'AV STO AMARO , S/N', '', 'São Paulo', 'São Paulo', 'Santo Amaro', '', '', '', 'SA-  ZM2 02', '1', '1,5', '', '', '', 'CIA DO METROPOLITANO DE SAO PAULO METRO', '', '', '', '', '', 'Não', '', '', 'Geomapas', '9846084e999c6f8e8efbbe934481fa72.jpg', 'Quadra', 'fc89bc80344678555e235c9b59168369.jpg', '', 'eb88f21c58b68891d970b7b3d35f2f9c.jpg', '', '', '', '', '', '', 'ImagemMapaIncorporacao04.505-002.jpg'),
(15, 'MTR 9', 'Sacomã Sul', '02.416-060', 'Rua Agostinho Gomes', '00', 'SP', 'São Paulo', 'Sacomã', '1.647,68', '', '', 'ZCPa 01', '1,00', '2,50', '', '', '', 'Metro', '(11) 3578-0840', 'atendimento@mandprojetos.com.br', 'Mand', '(11) 3578-0840', 'atendimento@mandprojetos.com.br', 'Não', '', '', 'Localização', '58577d0c21ed85632e6b4126c3618a29.png', 'Quadra', '5c9372e647ca87f9741b25a9ff1300e6.png', 'Zoneamento', '11676a725a446637b6ab9dd511f0db73.png', '', '', '', '', '', '', 'ImagemMapaIncorporacao02.416-060.jpg'),
(16, 'MTR 18', 'Marechal Deodoro  ', '00.000-000', 'Rua Doutor Albuquerque Lins', '00', 'SP', 'São Paulo', 'Santa Cecília ', '7.315,00 ', '', '', 'ZM3b-01  ', '2,00', '2,50', '', '', '', 'Metro', '(11) 3578-0840', 'atendimento@mandprojetos.com.br', 'Mand', '(11) 3578-0840', 'atendimento@mandprojetos.com.br', 'Não', '', '', 'Localização', '78c8b1df153869cb5fb9931da616ce16.png', 'Quadra', 'a1e1f665edd47c087a57ed41ce03e81b.png', 'Zoneamento', '421fa577cdedde2d5f4b49f1d2fecae0.jpg', '', '', '', '', '', '', 'ImagemMapaIncorporacao00.000-000.jpg'),
(17, 'MTR 166', 'Santo Amaro ', '04.739-050', 'Rua Salomão Karlik ', '70', 'São Paulo', 'São Paulo', 'Santo Amaro', '', '', '', 'SA ZCPb 03', '2', '4', '', '', '', '', '', '', '', '', '', 'Não', '', '', 'Quadra', 'ad6354e5b5373830f297e694d675dd0e.jpg', 'Local', 'be960741c0b342d446f566179644a50d.jpg', 'Geomapas', '9db9523c0259339a4e9c9a3b597d0da5.png', '', '', '', '', '', '', 'ImagemMapaIncorporacao04.739-050.jpg'),
(18, 'MTR 165', 'Alameda Itu', '04.121-001', 'Alameda Itu S/N', '', 'São Paulo', 'São Paulo', 'Cerqueira Cesár', '', '', '', 'PI ZM2 22', '1', '2', '', '', '', '', '', '', '', '', '', 'Não', '', '', 'Local', '7ce10d8593ea81f06caea7ffb200ecee.jpg', 'Geomapas', '5d87f6ae1252c30c7d8165f34416b01d.png', 'Quadra', '72d7b971c688fe4a009f1f99307dbc6c.jpg', '', '', '', '', '', '', 'ImagemMapaIncorporacao04.121-001.jpg'),
(19, 'MTR 164', 'Pinheiros', '05.428-001', 'Rua Ferreira de Araújo ', '1022', 'São Paulo', 'São Paulo', 'Pinheiros', '', '', '', 'PI ZM2 12', '1', '2', '', '', '', '', '', '', '', '', '', 'Não', '', '', 'Geomapas', '84449d8001bdc3af8aad2a9e9378eb33.jpg', 'Quadra', 'fb5d47b5a70ccd6a901cdac332a511e6.jpg', '', '', '', '', '', '', '', '', 'ImagemMapaIncorporacao05.428-001.jpg'),
(20, 'MTR 162', 'LUZ', '01.039-000', 'AV IPIRANGA , S/N', '', 'São Paulo', 'São Paulo', 'Luz', '', '', '', 'SE- ZCPb 05', '2', '4', '', '', '', '', '', '', '', '', '', 'Sim', '', '', 'Geomapas', '49105bbe1617deeaf12f410fd59679b8.png', 'Quadra', '93bb068808cf73a2aaf4d156e00afed5.jpg', '', '', '', '', '', '', '', '', 'ImagemMapaIncorporacao01.039-000.jpg'),
(21, 'MTR 162', 'LUZ', '01.039-000', 'AV IPIRANGA , S/N', '', 'São Paulo', 'São Paulo', 'Luz', '', '', '', 'SE- ZCPb 05', '2', '4', '', '', '', '', '', '', '', '', '', 'Não', '', '', 'Geomapas', '161048fe6dce7ab9394487368b1393d1.png', 'Quadra', 'd4181b2d5b040674872a3bcf9940ff30.jpg', '', '', '', '', '', '', '', '', 'ImagemMapaIncorporacao01.039-000.jpg'),
(22, 'MTR 159', 'Anhagabaú', '01.312-001', 'AV NOVE DE JULHO , S/N', '', 'São Paulo', 'São Paulo', 'República', '', '', '', 'SE-      ZCPb 0', '2', '4', '', '', '', '', '', '', '', '', '', 'Não', '', '', 'Geomapas', '8cee4e91065ff03d3c865a02a756656c.jpg', 'Quadra', 'c40f9120aca9fb027e5731f065f18a2c.jpg', '', '', '', '', '', '', '', '', 'ImagemMapaIncorporacao01.312-001.jpg'),
(23, 'MTR 157', 'Santana', '02.038-010', 'R BEMVINDA APPARECIDA DE A. LE, S/N JTO AO 353', '', 'São Paulo', 'São Paulo', 'Santana', '', '', '', 'ST-      ZM3b 0', '2', '2,5', '', '', '', '', '', '', '', '', '', 'Não', '', '', 'Quadra', '7eddca5ffc5bb4f9a993f04c78a8c4cf.jpg', 'Geomapas', 'a54eeb69038351a319f1fb1d5b616f73.jpg', 'Local', 'd6f04cb10267b23c6d369cfda6fb33c0.jpg', '', '', '', '', '', '', 'ImagemMapaIncorporacao02.038-010.jpg'),
(24, 'MTR 143', 'Vila Prudente', '03.138-010', 'Rua Pedro de Godoi  Esq. Com rua Ibitirama', '', 'São Paulo', 'São Paulo', 'Vila Prudente', '', '', '', 'VP -      ZCPa ', '1', '2,5', '', '', '', '', '', '', '', '', '', 'Não', '', '', 'Geomapas', 'c236f1035ee93dcdc889c69461e9f1c7.jpg', 'Quadra', '9df02cadf95e16072fe74b0c4b51e87c.jpg', '', '', '', '', '', '', '', '', 'ImagemMapaIncorporacao03.138-010.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `CadastraLinks`
--

CREATE TABLE IF NOT EXISTS `CadastraLinks` (
  `IdLink` int(11) NOT NULL,
  `NomeExibicao` varchar(200) NOT NULL,
  `Url` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `CadastraLinks`
--

INSERT INTO `CadastraLinks` (`IdLink`, `NomeExibicao`, `Url`) VALUES
(4, 'CONSULTA SIMPROC 									                                   ', 'http://www3.prodam.sp.gov.br/simproc/simproc.asp'),
(5, 'CONSULTA CONDEPHAAT', 'http://www.cultura.sp.gov.br/portal/site/SEC/menuitem.c4486db9b8cfa17440ad7216e2308ca0/?vgnextoid=400ab3acd5eff210VgnVCM1000002e03c80aRCRD'),
(6, 'PORTAL PREFEITURA SP', 'http://www.capital.sp.gov.br/portal/'),
(7, 'PORTAL PREFEITURA GUARULHOS', 'http://servicos.guarulhos.sp.gov.br:8080/portalGuarulhos/pesquisa/ProcessosAdministrativos.do'),
(8, 'CADASTRO IMOVEIS TOMBADOS', 'http://www3.prefeitura.sp.gov.br/cit/Forms/frmPrincipal.aspx'),
(9, 'DE OLHO NA OBRA', ' https://www3.prefeitura.sp.gov.br/deolhonaobra/Forms/frmConsultaSlc.aspx#'),
(10, 'CONSULTA DIVIDA ATIVA', 'http://www3.prefeitura.sp.gov.br/DividaAtivaConsDebDet/Forms/frm003_EntradaDetalhada.aspx'),
(11, 'CONSULTA ALF', 'https://www3.prefeitura.sp.gov.br/spmf_alf_cons/Forms/frmConsultaPreliminar.aspx'),
(12, 'PROCESSO ONLINE 									                                    									                                   ', 'https://www3.prefeitura.sp.gov.br/senhaweb_portal/forms/frmLoginContribuinte.aspx?STP=&DAL=61811931931891351241241871881931761781911931821891931941231891911781791781821931941911741231921891231801881951231751911241571741801821871741921571941751851821761741921241531881801821871601781871811741641461431231741921891976&ER=61811931931891351241241871881931761781911931821891931941231891911781791781821931941911741231921891231801881951231751911241571741801821871741921591781921931911821931741921241791911861251251281721481781911741911721441781911931721451741771881921721441741771231741921891972011271251301281291331331321316'),
(13, 'CERTIDÃO IPTU 									                                    									                                   ', 'https://www3.prefeitura.sp.gov.br/senhaweb_portal/forms/frmLoginContribuinte.aspx?STP=&DAL=61811931931891351241241871881931761781911931821891931941231891911781791781821931941911741231921891231801881951231751911241571741801821871741921571941751851821761741921241531881801821871601781871811741641461431231741921891976&ER=61811931931891351241241871881931761781911931821891931941231891911781791781821931941911741231921891231801881951231751911241571741801821871741921591781921931911821931741921241791911861251251281721481781911741911721441781911931721451741771881921721441741771231741921891972011271251301281291331331321316'),
(14, 'PORTAL PREFEITURA SANTOS								                                   ', 'https://egov1.santos.sp.gov.br/consultaprocesso/ ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `CadastraOrcamentoA`
--

CREATE TABLE IF NOT EXISTS `CadastraOrcamentoA` (
  `IdOrcamentoA` int(11) NOT NULL,
  `RazaoSocial` varchar(100) NOT NULL,
  `NomeContato` varchar(100) NOT NULL,
  `Taxas` varchar(20) NOT NULL,
  `FormaPagamento` varchar(50) NOT NULL,
  `Prazo` varchar(50) NOT NULL,
  `ComentariosOrcamento` text NOT NULL,
  `TotalOrcamentoA` varchar(20) NOT NULL,
  `DataOrcamentoA` varchar(20) NOT NULL,
  `IdOportunidade` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `CadastraOrcamentoA`
--

INSERT INTO `CadastraOrcamentoA` (`IdOrcamentoA`, `RazaoSocial`, `NomeContato`, `Taxas`, `FormaPagamento`, `Prazo`, `ComentariosOrcamento`, `TotalOrcamentoA`, `DataOrcamentoA`, `IdOportunidade`) VALUES
(2, 'Tairo Roberto', 'Tairo Roberto Miguel de Assunçâo', '200,00', 'A Prazo', '15 dias', 'tste', '3.520,00', '23/10/2014', 1),
(4, 'Renato Construtor', 'Renato Andrade', '0', 'ASDSADASD', 'ASDASDAS', 'VLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis fermentum ipsum. Sed felis mauris, congue sed turpis nec, sagittis ornare purus. Pellentesque neque felis, dictum sit amet bibendum eget, pulvinar ac metus. Duis in congue dui, sodales ullamcorper dolor. ', '11.000,00', '27/10/2014', 2),
(5, 'Renato Construtor', 'Renato Andrade', '0', 'ASDSADASD', 'ASDASDAS', 'VLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis fermentum ipsum. Sed felis mauris, congue sed turpis nec, sagittis ornare purus. Pellentesque neque felis, dictum sit amet bibendum eget, pulvinar ac metus. Duis in congue dui, sodales ullamcorper dolor. ', '11.000,00', '27/10/2014', 2),
(7, 'Gustavo Carvalho', 'Gustavo', '400,00', 'A Combinar', '90 Dias', '•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n', '10.400,00', '08/12/2014', 7),
(8, 'empresa Ltda', 'Tairo', '0', 'A Prazo', '15 dias', '•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill •	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill •	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill •	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fring', '500,00', '13/12/2014', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `CadastraOrcamentoB`
--

CREATE TABLE IF NOT EXISTS `CadastraOrcamentoB` (
  `IdOrcamentoB` int(11) NOT NULL,
  `RazaoSocial` varchar(200) NOT NULL,
  `NomeContato` varchar(200) NOT NULL,
  `Taxas` varchar(20) NOT NULL,
  `FormaPagamento` varchar(100) NOT NULL,
  `Prazo` varchar(50) NOT NULL,
  `ComentariosOrcamento` text NOT NULL,
  `TotalOrcamentoB` varchar(20) NOT NULL,
  `TotalServicos` varchar(20) NOT NULL,
  `DataOrcamentoB` varchar(20) NOT NULL,
  `IdOrcamentoA` int(11) NOT NULL,
  `IdOportunidade` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `CadastraOrcamentoB`
--

INSERT INTO `CadastraOrcamentoB` (`IdOrcamentoB`, `RazaoSocial`, `NomeContato`, `Taxas`, `FormaPagamento`, `Prazo`, `ComentariosOrcamento`, `TotalOrcamentoB`, `TotalServicos`, `DataOrcamentoB`, `IdOrcamentoA`, `IdOportunidade`) VALUES
(2, 'Tairo Roberto', 'Tairo Roberto Miguel de Assunçâo', '200,00', 'A Prazo', '15 dias', ' tste ', '2.520,00', '2.320,00', '23/10/2014', 2, 1),
(4, 'Renato Construtor', 'Renato Andrade', '0', 'ASDSADASD', 'ASDASDAS', ' VLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis fermentum ipsum. Sed felis mauris, congue sed turpis nec, sagittis ornare purus. Pellentesque neque felis, dictum sit amet bibendum eget, pulvinar ac metus. Duis in congue dui, sodales ullamcorper dolor.  ', '22.000,00', '22.000,00', '27/10/2014', 4, 2),
(6, 'Gustavo Carvalho', 'Gustavo', '400,00', 'A Combinar', '90 Dias', ' •	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n ', '12.900,00', '12.500,00', '08/12/2014', 7, 7),
(7, 'empresa Ltda', 'Tairo', '0', 'A Prazo', '15 dias', '    •	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill •	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill •	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill •	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fring    ', '2.000,00', '2.000,00', '13/12/2014', 8, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `CadastraPocesso`
--

CREATE TABLE IF NOT EXISTS `CadastraPocesso` (
  `IdProcesso` int(11) NOT NULL,
  `IdEmpresa` int(11) NOT NULL,
  `IdRequerente` int(11) NOT NULL,
  `IdImovel` int(11) NOT NULL,
  `NomeProcesso` varchar(100) NOT NULL,
  `AssuntoProcesso` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `CadastraPocesso`
--

INSERT INTO `CadastraPocesso` (`IdProcesso`, `IdEmpresa`, `IdRequerente`, `IdImovel`, `NomeProcesso`, `AssuntoProcesso`) VALUES
(1, 1, 1, 1, '343434343', 'REGULARIZAÇÃO'),
(2, 1, 1, 1, '123123123', 'Licença de Funcionamento Condicionada ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `CadastraSql`
--

CREATE TABLE IF NOT EXISTS `CadastraSql` (
  `IdSql` int(11) NOT NULL,
  `NomeSql` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `CadastraTarefa`
--

CREATE TABLE IF NOT EXISTS `CadastraTarefa` (
  `IdTarefa` int(11) NOT NULL,
  `IdEmpresa` int(11) NOT NULL,
  `IdRequerente` int(11) NOT NULL,
  `IdImovel` int(11) NOT NULL,
  `IdOportunidade` int(11) NOT NULL,
  `DataInicio` varchar(15) NOT NULL,
  `DataEntrega` varchar(15) NOT NULL,
  `NomeProjeto` varchar(100) NOT NULL,
  `DescricaoProjeto` varchar(200) NOT NULL,
  `SituacaoTarefa` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `CadastraTarefa`
--

INSERT INTO `CadastraTarefa` (`IdTarefa`, `IdEmpresa`, `IdRequerente`, `IdImovel`, `IdOportunidade`, `DataInicio`, `DataEntrega`, `NomeProjeto`, `DescricaoProjeto`, `SituacaoTarefa`) VALUES
(6, 1, 2, 1, 0, '28/10/2014', '07/11/2014', 'Mand', 'analise do sistema', 'Finalizada'),
(7, 1, 1, 1, 0, '28/10/2014', '30/10/2014', 'Teste', 'Criação do sistema de imóveis ewewewewewewew', 'Finalizada'),
(8, 1, 1, 1, 0, '28/10/2014', '29/10/2014', 'teste', 'teste', 'Finalizada'),
(10, 0, 0, 0, 4, '31/10/2014', '10/11/2014', 'Oportunidade Nova', 'Ver Inicio de oportunidade', 'Arquivada'),
(11, 1, 2, 4, 0, '05/11/2014', '30/11/2014', 'Projetos Teste', 'Descrição total', 'Arquivada'),
(12, 2, 1, 1, 0, '07/11/2014', '07/11/2014', 'Interno Mand', 'Criação Assinatura de E-mail', 'Finalizada'),
(13, 2, 1, 1, 0, '07/11/2014', '07/11/2014', 'Interno Mand', 'Ajuste de colocação de porta de entrada', 'Finalizada'),
(14, 2, 1, 1, 0, '07/11/2014', '07/11/2014', 'Interno Mand', 'Problemas Interfones', 'Finalizada'),
(15, 2, 1, 1, 0, '07/11/2014', '07/11/2014', 'Comercial Mand', 'Orçamentos Parkway', 'Finalizada'),
(16, 2, 1, 1, 0, '07/11/2014', '07/11/2014', 'Comercial Mand', 'Orçamentos Bras ', 'Finalizada'),
(17, 1, 1, 1, 0, '07/11/2014', '07/11/2014', 'Comercial Mand', 'Proposta de Homologação Porto Seguro', 'Finalizada'),
(18, 2, 2, 1, 0, '08/11/2014', '07/11/2014', 'Administrativo Mand', 'Verificação e Validação das paginas do sistema', 'Finalizada'),
(19, 0, 0, 0, 5, '17/11/2014', '27/11/2014', 'Oportunidade Nova', 'Ver Inicio de oportunidade', 'Finalizada'),
(20, 0, 0, 0, 6, '17/11/2014', '27/11/2014', 'Oportunidade Nova', 'Ver Inicio de oportunidade', 'Finalizada'),
(21, 4, 4, 1, 0, '08/12/2014', '12/12/2014', 'Aquisição da Area - SMDU-17', 'Apresentação completa para viabilizar junto a Portuguesa', 'Finalizada'),
(22, 4, 4, 1, 0, '08/12/2014', '11/12/2014', 'Processo Licença SEGUR 3', 'Processo Licença SEGUR 3', 'Arquivada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `CadastroFAQ`
--

CREATE TABLE IF NOT EXISTS `CadastroFAQ` (
  `IdCadastraFaq` int(11) NOT NULL,
  `NomeFaq` varchar(200) NOT NULL,
  `Imagem1` varchar(300) NOT NULL,
  `Imagem2` varchar(300) NOT NULL,
  `Imagem3` varchar(300) NOT NULL,
  `Descricao` varchar(200) NOT NULL,
  `IdCategoria` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `CadastroFAQ`
--

INSERT INTO `CadastroFAQ` (`IdCadastraFaq`, `NomeFaq`, `Imagem1`, `Imagem2`, `Imagem3`, `Descricao`, `IdCategoria`) VALUES
(1, 'Teste de FAQ', '26b9f3b0c19a43f62ca54f93ac8e0da1.JPG', '', '', 'Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste TesteTes', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `CadastroHolding`
--

CREATE TABLE IF NOT EXISTS `CadastroHolding` (
  `IdEmpresa` int(11) NOT NULL,
  `TipoPessoa` varchar(50) NOT NULL,
  `RazaoSocial` varchar(200) NOT NULL,
  `NomeFantasia` varchar(200) NOT NULL,
  `Atividade` varchar(200) NOT NULL,
  `Cnpj` varchar(20) NOT NULL,
  `Ccm` varchar(50) NOT NULL,
  `Cep` varchar(10) NOT NULL,
  `Rua` varchar(100) NOT NULL,
  `Numero` varchar(10) NOT NULL,
  `Bairro` varchar(50) NOT NULL,
  `Cidade` varchar(100) NOT NULL,
  `Telefone1` varchar(14) NOT NULL,
  `Telefone2` varchar(14) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `SenhaWebEmpresa` varchar(50) NOT NULL,
  `SiteEmpresa` varchar(100) NOT NULL,
  `IdResponsavel` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `CadastroHolding`
--

INSERT INTO `CadastroHolding` (`IdEmpresa`, `TipoPessoa`, `RazaoSocial`, `NomeFantasia`, `Atividade`, `Cnpj`, `Ccm`, `Cep`, `Rua`, `Numero`, `Bairro`, `Cidade`, `Telefone1`, `Telefone2`, `Email`, `SenhaWebEmpresa`, `SiteEmpresa`, `IdResponsavel`, `created_at`) VALUES
(2, 'juridica', 'Mand Projetos', 'Mand Projetos', 'Regularização de imoveis ', '00.000.000/0000-00', '0000000000', '02.021-030', 'Rua Aluísio Azevedo', '447', 'Santana', 'São Paulo', '(11) 3578-0840', '', 'atendimento@mandprojetos.com.br', '', 'www.mandprojetos.com.br', 2, '2015-02-05 11:39:52'),
(4, 'juridica', 'Assoc. Portuguesa de Desportos', 'Portuguesa', 'Clube de Futebol', '61.957.981/0001-54', '', '03.034-070', 'Rua Comendador Nestor Pereira', '33', 'Canindé', 'São Paulo', '', '', 'alves@portuguesa.com.br', '', 'http://www.portuguesa.com.br', 2, '2015-02-05 11:47:00'),
(5, 'fisica', 'Jorge ', 'Kupfer', 'Proprietário', '333.333.333-33', '', '04.515-000', 'Avenida Sabiá', '430', 'Indianópolis', 'São Paulo', '', '', 'feelimport@gmail.com', '', '', 3, '2015-02-05 11:45:57'),
(6, 'fisica', 'Olga ', 'Otero Gomes', 'Administração de Imóveis', '259.895.688-51', '4.669.368-8', '02.514-000', 'Rua Saguairu', '49', 'Casa Verde', 'São Paulo', '', '', 'adriana.taboada@uol.com.br', '170570', '', 4, '2015-02-05 11:45:41'),
(7, 'juridica', 'JOIE COMERCIO DE ALIMENTOS E PARTICIPAÇÕES EIRLI EPP', 'Bar Brahma', 'Bares e Estabelecimentos ', '16.984.731/0002-30', '', '02.012-020', 'Avenida Olavo Fontoura', '650', 'Santana', 'São Paulo', '', '', 'neto@fabricadebares.com.br', '', 'http://www.barbrahmacentro.com/', 5, '2015-02-05 11:45:37'),
(8, 'juridica', 'LINX SISTEMAS E CONSULTORIA LTDA.', 'LINX', 'Sistemas e Consultoria ', '54.517.628/0016-74', '', '05.036-010', 'Rua Cenno Sbrighi', '170', 'Água Branca', 'São Paulo', '', '', 'valerio.oliveira@linx.com.br', '545176', 'http://www.linx.com.br/', 6, '2015-02-05 11:45:32'),
(9, 'juridica', 'EMPRESA DE ONIBUS PASSARO MARRON S.A.', 'Passaro Marron ', 'Garagem ', '61.563.557/0001-25', '1.019.065-1', '02.518-100', 'Rua Joaquim Mendes', '207', 'Jardim das Laranjeiras', 'São Paulo', '(11) 9878-2811', '', 'pbongiovani@uol.com.br', '020966', 'http://www.passaromarron.com.br/', 7, '2015-02-05 11:45:27'),
(10, 'fisica', 'Marco ', 'Madjar', 'Engenheiro', '317.276.638-10', '3974894-4', '01.234-020', 'Rua Itabaquara', '129', 'Pacaembu', 'São Paulo', '(11) 9912-1707', '', 'madjar@uol.com.br', '000000', '', 8, '2015-02-05 11:45:23'),
(11, 'juridica', 'CENTO E VINTE 120 PARTIIPACOES E EMPREENDIMENTOS LTDA.', 'PRO 120', 'Academia', '11.155.365/0001-01', 'SEM', '04.602-002', '', '', '', '', '', '', 'atendimento@mandprojetos.com.br', '111553', 'http://www.pro120.org.br', 9, '2015-02-06 19:00:10'),
(12, 'fisica', 'Mohamed', 'Ahmad Osman ', 'Gerenciamento de Imóveis ', '586.029.929-04', '', '02.416-060', 'Francisca Julia', '277', 'Santana', 'São Paulo', '(11) 9474-9901', '', 'atendimento@mandprojetos.com.br', '093106', 'http://www.mandprojetos.com.br/', 10, '2015-02-05 11:44:56'),
(13, 'juridica', 'COMÉRCIO E EDITORA UMBIGO DO MUNDO LTDA. ', 'Umbigo do Mundo', 'Editora', '03.139.462/0001-82', '27867145', '04.531-004', 'Rua Pedroso Alvarenga ', '1208', 'Itaim Bibi', 'São Paulo', '(34) 3840-15', '(11) 3167-3313', 'lilianeleite@aasp.org.br', '199907', 'http://www.umbigodomundo.com.br/', 11, '2015-02-05 11:44:52'),
(14, 'juridica', 'URBIN DESENVOLVIMENTO IMOBILIÁRIO LTDA - EPP', 'Urbin', 'Incorporadora', '18.483.060/0001-78', '47898231', '02.021-030', 'Rua Aluisio Azevedo', '447', 'Santana', 'São Paulo', '(11) 9995-2861', '(11) 3731-6388', 'esouza@urbin-di.com.br', '215404', 'www.urbin-di.com.br', 12, '2015-02-05 11:44:48'),
(15, 'juridica', 'PARAISO 157 COMERCIO DE CALCADOS LTDA - EPP', 'Paraíso Calçados', 'Comercio de Calçados', '14.430.208/0001-55', '4398475-4', '08.210-430', 'Rua Gregôrio Ramalho', '157', 'Itaquera', 'São Paulo', '(11) 2950-050', '(11) 9828-2110', 'ocastelan@terra.com.br', '000000', 'http://www.paraisocalcados.com.br/', 13, '2015-02-05 11:44:36'),
(16, 'juridica', 'LAMBROSO Fashion Mall', 'Lambrosso', 'Shopping', '60.937.653/0012-3', '', '01.122-020', 'Rua Professor Cesare Lombroso', '305', 'Bom Retiro', 'São Paulo', '', '', 'atendimento@mandprojetos.com.br', '', '', 14, '2015-02-05 11:44:09'),
(17, 'juridica', 'FAPARK São Paulo Estacionamento LTDA-ME', 'FAPARK', 'Estacionamento', '08.608.378/0001-84', '', '04.625-005', 'Rua Henrique Fausto Lancellotti', '6333', 'Nova Piraju', 'São Paulo', '', '', 'atendimento@mandprojetos.com.br', '', '', 15, '2015-02-05 11:43:48'),
(18, 'juridica', 'PARKWAY ESTACIONAMENTOS S/C LTDA', 'Parkway', 'estacionamento ', '61.195.715/0010-22', '98920421', '04.734-003', 'Avenida Adolfo Pinheiro', '02056', 'Santo Amaro', 'São Paulo', '(11) 5579-2322', '', 'marcelo@parkway.com.br', '000000', 'http://www.parkway.com.br/', 16, '2015-02-05 11:43:44'),
(19, 'fisica', 'Janine ', 'Alvarenga Barbosa', 'Dentistas ', '749.210.376-04', '', '02.515-000', 'Rua Doutor César Castiglioni Júnior', '331', 'Casa Verde', 'São Paulo', '', '', 'atendimento@mandprojetos.com.br', '', '', 17, '2015-02-05 11:43:31'),
(20, 'juridica', 'VIA NOVA ENGENHARIA LTDA', 'Via Nova Engenharia', 'Construtora ', '02.058.151/0001-26', '47214643', '02.310-010', 'Rua Guaraja', '155', 'Vila Mazzei', 'São Paulo', '(11) 2972-9902', '(11) 9711-1054', 'amanda.macedo@vianovaengenharia.com.br', '020581', 'http://www.vianovaengenharia.com.br/', 18, '2015-02-05 11:42:56'),
(21, 'fisica', 'Alceu', 'Gustavo Correa', 'Arquiteto', '315.749.188-18', '', '04.404-030', 'Rua Baquirivu', '590', 'Cidade Ademar', 'São Paulo', '', '', 'atendimento@mandprojetos.com.br', '', '', 19, '2015-02-05 11:42:47'),
(22, 'juridica', 'CGB COMERCIO DE ALIMENTOS E BEBIDAS LTDA', 'Chili Beans', 'Restaurante', '12.880.599/0001-84', '', '04.515-000', 'Avenida Sabiá', '490', 'Indianópolis', 'São Paulo', '', '', 'atendimento@mandprojetos.com.br', '', '', 20, '2015-02-05 11:39:52'),
(23, 'juridica', 'JOCKEY CLUBE DE SÃO PAULO', 'JOCKEY CLUBE', '73 - CLUBE ESPORTIVO', '60.920.345/0001-95', '', '05.601-001', 'Avenida Lineu de Paula Machado', '1263', 'Jardim Everest', 'São Paulo', '(11) 2161-8340', '(11) 2161-8341', 'secretaria@jockeysp.com.br', '', 'www.jockeysp.com.br', 21, '2015-02-05 11:42:24'),
(24, 'fisica', 'Paulo', 'Sérgio figueira ', 'Consultor', '036.523.478-89', '0000000000', '00.000-000', 'Rua Rouxinol', '1041/1004', 'Moema', 'São Paulo', '(11) 2503-0792', '(11) 9844-7766', 'lpv2@uol.com.br', '000000', '', 22, '2015-02-09 18:02:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `CadastroRequerente`
--

CREATE TABLE IF NOT EXISTS `CadastroRequerente` (
  `IdRequerente` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Cpf` varchar(20) NOT NULL,
  `Rg` varchar(20) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `Numero` varchar(20) NOT NULL,
  `Bairro` varchar(100) NOT NULL,
  `Municipio` varchar(100) NOT NULL,
  `Cep` varchar(10) NOT NULL,
  `Telefone1` varchar(20) NOT NULL,
  `Telefone2` varchar(20) NOT NULL,
  `Celular` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `SenhaWeb` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `CadastroRequerente`
--

INSERT INTO `CadastroRequerente` (`IdRequerente`, `Nome`, `Cpf`, `Rg`, `Endereco`, `Numero`, `Bairro`, `Municipio`, `Cep`, `Telefone1`, `Telefone2`, `Celular`, `Email`, `SenhaWeb`) VALUES
(1, 'Renato Andrade', '333.333.333-33', '333.333.333.3333', 'Rua Belchior Paulo', '21', 'Imirim', 'São Paulo', '02.467-110', '(11) 111-1', '(11) 111-1', '(11) 1111-1111', 'renato.andrade@mandprojetos.com.br', ''),
(2, 'Vasco Pinheiro dos Santos', '', '', 'Rua Aluísio Azevedo', '', 'Santana', 'São Paulo', '02.021-030', '', '', '', 'vasco@freelers.com.br', ''),
(4, 'Assoc Portuguesa de Desportos', '61.967.981-00', '', 'Rua Comendador Nestor Pereira', '33', 'Canindé', 'São Paulo', '03.034-070', '(11) 2125-9453', '', '', 'alves@portuguesa.com.br', ''),
(5, 'Jorge Sabia Req.', '333.333.333-33', '', 'Avenida Sabiá', '430', 'Indianópolis', 'São Paulo', '04.515-000', '', '', '', 'feelimport@gmail.com', ''),
(6, 'Paulo Sergio Bongiovanni', '051.061.748-48', '841.112.0', 'Rua Joaquim Mendes', '', 'Jardim das Laranjeiras', 'São Paulo', '02.518-100', '', '', '(11) 9878-2811', 'pbongiovani@uol.com.br', ''),
(7, 'Rihab Darwiche Osman', '13.594.931-00', '', 'Rua Bresser', '', 'Brás', 'São Paulo', '03.017-000', '', '', '', 'magali@mandprojetos.com', ''),
(9, 'Janine Alvarenga Barbosa', '749.210.376-04', '', 'Rua Doutor César Castiglioni Júnior', '333', 'Casa Verde', 'São Paulo', '02.515-000', '(11) 2950-6761', '(11) 9508-5847', '(11) 9720-4953', 'atendimento@mandprojetos.com.br', ''),
(12, 'Albert Holzhacker', '142.128.628-91', '357.897.6', 'Rua João Felipe Silva', '', 'Jardim Petrópolis', 'São Paulo', '04.638-030', '(11) 2609-3611', '', '', 'luciano.c@pro120.com.br', ''),
(13, 'Alceu Gustavo Correa', '315.749.188-18', '440.090.09..', 'Rua Baquirivu', '323', 'Cidade Ademar', 'São Paulo', '04.404-030', '(11) 9717-4919', '(11) 7739-1112', '', 'alceugustavo@gmail.com', '836230'),
(14, 'Adriana Taboada Otero', '259.895.688-51', '236.817.395', 'Avenida Braz Leme', '', 'Santana', 'São Paulo', '02.022-020', '(11) 973-7', '', '', 'adriana.taboada@uol.com.br', '170824'),
(15, 'Albert Ammar', '08.507.399/0001-03', '242.932.4', 'Rua Mangabeiras', '91', 'Santa Cecília', 'São Paulo', '01.233-010', '', '', '', 'atendimento@mandprojetos.com.br', ''),
(16, 'Israel Maximiano', '', '141.479.620', '...', '53', '...', '...', '03.383-120', '(11) 7735-5237', '(11) 9656-1052', '', 'sanypark@ig.com.br', ''),
(17, 'João Clemente Pereira', '610.799.528-53', '....250', 'Rua Conselheiro Nébias', '', 'Campos Elíseos', 'São Paulo', '01.203-001', '(11) 9827-7281', '(11) 2440-4151', '', 'atendimento@mandprojetos.com.br', ''),
(18, 'Claudia Rodrigues da Silva', '066.334.998-5', '167.355.88', '...', '1518', '...', '...', '02.387-000', '', '', '', 'cla_silva@yahoo.com', ''),
(19, 'Marlos Antonio Machado', '06.165.341/0001-01', '086.718.749', 'Rua Tuim', '762', 'Vila Uberabinha', 'São Paulo', '04.514-103', '(11) 3058-3140', '(11) 3058-3281', '', 'malors.machador@marriot.com', ''),
(20, 'Jaime David Winiawer', '61.849.592/0001-05', '184.994.99', '...', '255', 'Sé', 'São Paulo', '01.040-001', '', '', '', 'jlonghi@uol.com.br', ''),
(21, 'Elza Augusto Catarino ', '04.232.181/0001-32', '236.826.967', 'Rua Rodolfo Pereira Lima', '', 'Vila Teresinha', 'São Paulo', '02.854-000', '(11) 3985-8201', '', '', 'ge.amurim@ig.com.br', ''),
(22, 'Pedro Henrique Marques', '304.458.638-03', '226.763.821', 'Rua Diogo Jácome', '', 'Vila Nova Conceição', 'São Paulo', '04.512-001', '', '', '', 'atendimento@mandprojetos.com.br', ''),
(23, 'Ahmad Nazih Aref Abdul', '045.384.719-68', '457.220.79', 'Rua Maria Marcolina', '', 'Brás', 'São Paulo', '03.011-001', '', '', '', 'atendimento@mandprojetos.com.br', ''),
(24, 'Youssef Ahmad Sleiman', '187.010.258-48', '269.711.594', 'Rua Água Rasa', '94', 'Vila Regente Feijó', 'São Paulo', '03.343-010', '(11) 2268-0349', '(11) 9994-4072', '', 'arquiteturasimples@gmail.com', ''),
(28, 'Tairo Roberto', '11.111.111/1111-11', '899.448', 'Rua Gastão de Orleans', '95', 'Jardim Samambaia', 'Mairiporã', '07600-000', '(11) 1111-11111', '(11) 1111-11111', '(11) 1111-11111', 'tairoroberto@hotmail.com', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Categoria`
--

CREATE TABLE IF NOT EXISTS `Categoria` (
  `IdCategoria` int(11) NOT NULL,
  `NomeCategoria` varchar(200) NOT NULL,
  `SubCategoria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Categoria`
--

INSERT INTO `Categoria` (`IdCategoria`, `NomeCategoria`, `SubCategoria`) VALUES
(1, 'Teste Master', 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ComentariosProcessoImovel`
--

CREATE TABLE IF NOT EXISTS `ComentariosProcessoImovel` (
  `IdComentariosProcessoImovel` int(11) NOT NULL,
  `Comentarios` text NOT NULL,
  `IdImovel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ComentariosProcessoImovel`
--

INSERT INTO `ComentariosProcessoImovel` (`IdComentariosProcessoImovel`, `Comentarios`, `IdImovel`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in volutpat enim. Vivamus eget ligula nisl. Aenean sed metus a turpis pellentesque efficitur vitae id velit. Proin dolor sem, pretium a scelerisque sit amet, lacinia quis magna. Donec tortor ex, interdum sit amet cursus quis, venenatis eget ex. Duis sodales at magna semper lobortis. Cras vel fringilla est. Curabitur auctor consequat eros.', 0),
(2, '', 2),
(3, '', 3),
(4, '', 4),
(5, '', 5),
(6, '', 6),
(7, '', 7),
(8, '', 8),
(9, '', 9),
(10, '', 10),
(11, '', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Contrato`
--

CREATE TABLE IF NOT EXISTS `Contrato` (
  `IdContrato` int(11) NOT NULL,
  `DadosMand` text NOT NULL,
  `DadosContrato` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Contrato`
--

INSERT INTO `Contrato` (`IdContrato`, `DadosMand`, `DadosContrato`) VALUES
(1, '\r\n\r\n<!--[if gte mso 9]><xml>\r\n <o:OfficeDocumentSettings>\r\n  <o:AllowPNG/>\r\n </o:OfficeDocumentSettings>\r\n</xml><![endif]-->\r\n\r\n<!--[if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves/>\r\n  <w:TrackFormatting/>\r\n  <w:PunctuationKerning/>\r\n  <w:ValidateAgainstSchemas/>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF/>\r\n  <w:LidThemeOther>PT-BR</w:LidThemeOther>\r\n  <w:LidThemeAsian>JA</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables/>\r\n   <w:SnapToGridInCell/>\r\n   <w:WrapTextWithPunct/>\r\n   <w:UseAsianBreakRules/>\r\n   <w:DontGrowAutofit/>\r\n   <w:SplitPgBreakAndParaMark/>\r\n   <w:EnableOpenTypeKerning/>\r\n   <w:DontFlipMirrorIndents/>\r\n   <w:OverrideTableStyleHps/>\r\n   <w:UseFELayout/>\r\n  </w:Compatibility>\r\n  <m:mathPr>\r\n   <m:mathFont m:val="Cambria Math"/>\r\n   <m:brkBin m:val="before"/>\r\n   <m:brkBinSub m:val="--"/>\r\n   <m:smallFrac m:val="off"/>\r\n   <m:dispDef/>\r\n   <m:lMargin m:val="0"/>\r\n   <m:rMargin m:val="0"/>\r\n   <m:defJc m:val="centerGroup"/>\r\n   <m:wrapIndent m:val="1440"/>\r\n   <m:intLim m:val="subSup"/>\r\n   <m:naryLim m:val="undOvr"/>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]--><!--[if gte mso 9]><xml>\r\n <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"\r\n  DefSemiHidden="true" DefQFormat="false" DefPriority="99"\r\n  LatentStyleCount="276">\r\n  <w:LsdException Locked="false" Priority="0" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>\r\n  <w:LsdException Locked="false" Priority="9" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>\r\n  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>\r\n  <w:LsdException Locked="false" Priority="10" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Title"/>\r\n  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>\r\n  <w:LsdException Locked="false" Priority="11" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>\r\n  <w:LsdException Locked="false" Priority="22" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>\r\n  <w:LsdException Locked="false" Priority="20" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="59" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Table Grid"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>\r\n  <w:LsdException Locked="false" Priority="1" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>\r\n  <w:LsdException Locked="false" Priority="34" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>\r\n  <w:LsdException Locked="false" Priority="29" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>\r\n  <w:LsdException Locked="false" Priority="30" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="19" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="21" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="31" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>\r\n  <w:LsdException Locked="false" Priority="32" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>\r\n  <w:LsdException Locked="false" Priority="33" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>\r\n  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>\r\n  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>\r\n </w:LatentStyles>\r\n</xml><![endif]-->\r\n\r\n<!--[if gte mso 10]>\r\n<style>\r\n /* Style Definitions */\r\ntable.MsoNormalTable\r\n	{mso-style-name:"Table Normal";\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-noshow:yes;\r\n	mso-style-priority:99;\r\n	mso-style-parent:"";\r\n	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;\r\n	mso-para-margin-top:0cm;\r\n	mso-para-margin-right:0cm;\r\n	mso-para-margin-bottom:10.0pt;\r\n	mso-para-margin-left:0cm;\r\n	mso-pagination:widow-orphan;\r\n	font-size:12.0pt;\r\n	font-family:Cambria;\r\n	mso-ascii-font-family:Cambria;\r\n	mso-ascii-theme-font:minor-latin;\r\n	mso-hansi-font-family:Cambria;\r\n	mso-hansi-theme-font:minor-latin;\r\n	mso-fareast-language:JA;}\r\n</style>\r\n<![endif]-->\r\n\r\n\r\n\r\n<!--StartFragment-->\r\n\r\n<p class="MsoNormalCxSpFirst" style="text-align:justify;text-justify:inter-ideograph"><b><span style="font-family:Calibri;\r\nmso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-font-family:\r\nArial">CONTRATADA:</span></b><span style="font-family:Calibri;mso-ascii-theme-font:\r\nmajor-latin;mso-hansi-theme-font:major-latin;mso-bidi-font-family:Arial"> <b>MAND ASSESSORIA NA GESTÃO DE PROJETOS\r\nLTDA., </b>pessoa  jurídica de direito privado, titular do\r\nCNPJ/MF nº <b>13.790.913/0001-09</b>, estabelecida na Aluísio Azevedo,\r\nnº 447, conj. 03 – CEP: 02021-030, Santana, São Paulo, SP.<o:p></o:p></span></p>\r\n\r\n<!--EndFragment-->', '<b>CONTRATADA:</b>&nbsp;MAND ASSESSORIA NA GESTÃO DE PROJETOS LTDA.,&nbsp;pessoa &nbsp;jurídica de direito privado, titular do CNPJ/MF nº&nbsp;13.790.913/0001-09, estabelecida na Aluísio Azevedo, nº 447, conj. 03 – CEP: 02021-030, Santana, São Paulo, SP.<div><br><div><b>&nbsp;Cláusula 2ª</b>. O&nbsp;<b>CONTRATANTE</b>&nbsp;deverá fornecer ao&nbsp;<b>CONTRATADO</b>&nbsp;todas as informações necessárias á realização do serviço, devendo especificar os detalhes necessários á perfeita consecução do mesmo, e a forma de como ele deve ser entregue.&nbsp;\r\n</div><div><br></div><div><b>Cláusula 4ª</b>. É dever do&nbsp;CONTRATADO&nbsp;oferecer ao contratante a cópia do presente instrumento, contendo todas as especificidades da prestação de serviço contratada.&nbsp;\r\n</div><div><br></div><div><b>Cláusula 5ª</b>. O presente projeto será remunerado pela quantia de "#Aqui não deve ser modificado, dados serão preenchidos do orcamento#"</div><div><br></div><div><b>Cláusula 6ª</b>. Em caso de inadimplemento por parte do&nbsp;<b>CONTRATANTE</b>&nbsp;quanto ao pagamento do serviço prestado, deverá incidir sobre o valor do presente instrumento, multa contratual de 2% sobre o valor devido, juros de 1% ao mês e correção monetária.&nbsp;\r\n</div><div><br></div><div><b>Cláusula 8ª</b>. Poderá o presente instrumento ser rescindido por qualquer uma das partes, em qualquer momento, sem que haja qualquer tipo de motivo relevante, não obstante a outra parte deverá ser avisada previamente por escrito, no prazo de 20 dias.&nbsp;</div><div><br></div><div><b>&nbsp;Cláusula 10ª</b>. O&nbsp;<b>CONTRATADO</b>&nbsp;assume o compromisso de realizar os serviços contratados dentro do prazo máximo de 90 dias uteis., contados a partir do pagamento da entrada e envio de todo material necessário para o desenvolvimento do projeto. Após a entrega do serviço a&nbsp;<b>CONTRATADA</b>&nbsp;dispõe uma garantia de 30 dias para eventuais ajustes simples, correções, dúvidas ou erros encontrados no projeto. Ultrapassando este prazo, todo ajuste ou correção serão cobrados R$80,00 por hora demandada.&nbsp;\r\n</div><div><br></div><div><b>Cláusula 11ª</b>. Fica compactuado entre as partes a total inexistência de vínculo trabalhista entre as partes contratantes, excluindo as obrigações previdenciárias e os encargos sociais, não havendo entre&nbsp;<b>CONTRATADO</b>&nbsp;e&nbsp;<b>CONTRATANTE</b>&nbsp;qualquer tipo de relação de subordinação.\r\n\r\nAs partes elegem, para dirimir quaisquer dúvidas oriundas deste contrato, o Fórum Regional de Santana do Estado de São Paulo.\r\nE por estarem justas e contratadas, as partes firmam o presente instrumento particular em 02 (duas) vias de igual teor e forma, na melhor forma de direito.</div></div>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `DadosAdicionaisImovel`
--

CREATE TABLE IF NOT EXISTS `DadosAdicionaisImovel` (
  `IdDadosAdicionais` int(11) NOT NULL,
  `TituloDadosAdicionais` varchar(50) NOT NULL,
  `ComentarioDadosAdicionais` varchar(300) NOT NULL,
  `IdImovel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `DadosAdicionaisImovel`
--

INSERT INTO `DadosAdicionaisImovel` (`IdDadosAdicionais`, `TituloDadosAdicionais`, `ComentarioDadosAdicionais`, `IdImovel`) VALUES
(1, 'Dados1', 'Dados Adicionais1', 2),
(2, 'Dados2', 'Dados Adicionais2', 2),
(3, 'Dados1', 'Dados Adicionais1', 3),
(4, 'Dados1hyyytyy', 'Dados Adicionais111', 3),
(5, 'Dados1', 'Dados Adicionais1', 4),
(6, 'Dados2', 'Dados Adicionais2', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `DetalheProcesso`
--

CREATE TABLE IF NOT EXISTS `DetalheProcesso` (
  `IdDetalheProcesso` int(11) NOT NULL,
  `DataProcessoDetalhe` varchar(15) NOT NULL,
  `UnidadeProcessoDetahe` varchar(100) NOT NULL,
  `DescricaoProcessoDetahe` varchar(100) NOT NULL,
  `DomProcessoDetalhe` varchar(20) NOT NULL,
  `Data` varchar(15) NOT NULL,
  `AcaoProcessoDetalhe` varchar(50) NOT NULL,
  `IdProcesso` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `DetalheProcesso`
--

INSERT INTO `DetalheProcesso` (`IdDetalheProcesso`, `DataProcessoDetalhe`, `UnidadeProcessoDetahe`, `DescricaoProcessoDetahe`, `DomProcessoDetalhe`, `Data`, `AcaoProcessoDetalhe`, `IdProcesso`) VALUES
(1, '27/10/2014', 'UNIDADES', 'DESCRIÇ˜AO', 'checado', '01/02/11', 'Comunique-se', 1),
(2, '27/10/2014', 'SSP', 'ADFADFADFADF', 'naochecado', '', 'Ações', 1),
(3, '27/10/2014', '', '', 'checado', '01/01/01', 'Concluído', 1),
(4, '27/10/2014', '', '', 'checado', '01/01/01', 'Concluído', 1),
(5, '27/10/2014', '', '', 'checado', '01/01/0101', 'Deferido', 1),
(6, '27/10/2014', '', '', 'checado', '01/01/0101', 'Solicitar Prazo', 1),
(7, '27/10/2014', '', '------', 'naochecado', '', 'Ações', 1),
(8, '08/12/2014', 'dsdsd', 'sdsdsd', 'checado', '30/12/2014', 'Comunique-se', 1),
(9, '14/12/2014', '', 'teste com DOM', 'checado', '15/07/2014', 'Deferido', 1),
(10, '15/12/2014', 'tucuruvi', 'teste com DOM3', 'checado', '16/12/2014', 'Comunique-se', 1),
(11, '15/12/2014', 'tucuruvi', 'teste com DOM4', 'checado', '16/12/2014', 'Comunique-se', 1),
(12, '15/12/2014', 'santana', 'teste tairo', 'checado', '15/12/2014', 'Comunique-se', 1),
(13, '15/12/2014', 'tucuruvi', 'teste com DOM', 'checado', '16/12/2014', 'Em analise', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `DocumentosUsuario`
--

CREATE TABLE IF NOT EXISTS `DocumentosUsuario` (
  `IdDocumento` int(11) NOT NULL,
  `NomeDocumento` varchar(300) NOT NULL,
  `data` varchar(20) NOT NULL,
  `IdUsuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `DocumentosUsuario`
--

INSERT INTO `DocumentosUsuario` (`IdDocumento`, `NomeDocumento`, `data`, `IdUsuario`) VALUES
(1, 'Captura de Tela 2014-10-28 às 10.58.46.png-1adcc50ac91a048f1ce0cdb4a79f481e.png', '28/10/201', 10),
(2, 'Captura de Tela 2014-10-10 às 11.19.41.png-13d0be9678f343e4da3ca571b008df95.png', '28/10/201', 10),
(3, 'customer-processing-order.php-b6fe4d47fbfafc2a6fc1e7c07d4783a2.', '28/10/201', 10),
(4, '10439011_10201064397010840_9143389223390343206_n.jpg-a1919789a996e4870f9d6d48a5a97f30.jpg', '10/11/2014', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `EtapaTarefa`
--

CREATE TABLE IF NOT EXISTS `EtapaTarefa` (
  `IdEtapaTarefa` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `TituloEtapa` varchar(100) NOT NULL,
  `DescricaoEtapa` varchar(200) NOT NULL,
  `DataEntregaEtapa` varchar(15) NOT NULL,
  `SituacaoEtapaTarefa` varchar(100) NOT NULL,
  `IdTarefa` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `EtapaTarefa`
--

INSERT INTO `EtapaTarefa` (`IdEtapaTarefa`, `IdUsuario`, `TituloEtapa`, `DescricaoEtapa`, `DataEntregaEtapa`, `SituacaoEtapaTarefa`, `IdTarefa`) VALUES
(21, 2, 'fdfdf', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam facilisis, erat vel pretium bibendum, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam facilisis, erat vel pretium bibendum', '30/10/2014', 'Trabalhando', 0),
(22, 3, 'dfdfd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam facilisis, erat vel pretium bibendum, ', '05/11/2014', 'Trabalhando', 0),
(23, 4, 'dfdfdf', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam facilisis, erat vel pretium bibendum, ', '19/11/2014', 'Trabalhando', 0),
(24, 5, 'vdfdfd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam facilisis, erat vel pretium bibendum, ', '25/11/2014', 'Trabalhando', 0),
(26, 1, 'Assinar protocolos', 'Aaaaaaaaaaaa', '05/11/2014', 'Finalizar', 6),
(27, 1, 'Assinar protocolos1111', 'Retirar documentos em agencia bancária 3', '29/10/2014', 'Finalizar', 6),
(28, 3, 'TEste', 'TEste', '29/10/2014', 'Finalizar', 6),
(29, 1, 'Assinar ', 'Assinar protocolos que foram retirados  numero 2', '27/10/2014', 'Finalizar', 6),
(30, 2, 'Assinar protocolos', 'Assinar', '29/10/2014', 'Finalizar', 6),
(31, 1, 'Buscar Documentos', 'Teste', '30/10/2014', 'Finalizar', 7),
(32, 2, 'Assinar protocolos', 'fiuwefjbqwejhfbjweqbf', '30/10/2014', 'Finalizar', 7),
(33, 3, 'veqrgwegewrg', 'ergfwerkg weçrkgnewrbgkwebgebk', '31/10/2014', 'Finalizar', 7),
(34, 4, 'vqweyfbwqelkjfewjqhfvjlb', 'vbqehbfvqepbvperb', '31/10/2014', 'Finalizar', 7),
(35, 1, 'dvwyeqifvqwefbqw', 'ovjqhrbvqerlb', '07/11/2014', 'Finalizar', 7),
(36, 5, 'vqerbvuqbkj', 'bvuoqehrbvçkqejrnbvqer', '08/11/2014', 'Finalizar', 7),
(37, 1, 'teste', 'teste', '31/10/2014', 'Finalizar', 8),
(38, 3, 'teste 2', 'teste 2', '31/10/2014', 'Finalizar', 8),
(40, 4, 'Verificar oportunidade', 'Verificar oportunidade nova', '10/11/2014', 'Trabalhando', 10),
(41, 2, 'Teste', 'aerarareaer', '08/11/2014', 'Pausado', 11),
(42, 3, 'raeraer', 'aerararaer', '13/11/2014', 'Trabalhando', 11),
(43, 4, 'aeraraer', 'aeraraer', '19/11/2014', 'Pausado', 11),
(44, 5, 'aerara', 'rararare', '27/11/2014', 'Pausado', 11),
(45, 0, '', '', '', 'Pausado', 11),
(46, 5, 'teste novo', 'fadfadfaf', '010202', 'Finalizar', 7),
(47, 2, 'Criação de Assinatura de E-mail', 'Criação Assinatura de E-mail para usuários MAnd', '07/11/2014', 'Finalizar', 12),
(48, 2, 'Ligar ', 'Ligar para o cara que trabalha com a porta de Vidro', '07/11/2014', 'Finalizar', 13),
(49, 2, 'Ligar', 'Ligar para o técnico de Interfones', '07/11/2014', 'Finalizar', 14),
(50, 3, 'Ligar', 'Ligar para o Marcelo Sertório e agendar reunião referente a orçamento', '07/11/2014', 'Finalizar', 15),
(51, 3, 'Ligar ', 'Ligar para o Omar e verficar a contratação do serviço', '07/11/2014', 'Finalizar', 16),
(52, 2, 'Envio documentos', 'Enviar documentos para Homologação da Mand (Porto Seguro)', '07/11/2014', 'Finalizar', 17),
(53, 2, 'Verificação Sistema', 'Verificar e Validar das paginas do sistema', '14/11/2014', 'Finalizar', 18),
(54, 3, 'Verificação Sistema', 'Verificar e Validar das paginas do sistema', '14/11/2014', 'Finalizar', 18),
(55, 4, 'Verificar oportunidade', 'Verificar oportunidade nova', '27/11/2014', 'Finalizar', 19),
(56, 4, 'Verificar oportunidade', 'Verificar oportunidade nova', '27/11/2014', 'Finalizar', 20),
(57, 11, 'Relatório Defesa', 'fffff', '09/12/2014', 'Finalizar', 21),
(58, 11, 'Assinatura Presidente Lusa', '', '09/12/2014', 'Finalizar', 21),
(59, 11, 'Elaboração Contrato', '', '08/12/2014', 'Finalizar', 21),
(60, 2, 'Assinatura Contrato', '', '09/12/2014', 'Finalizar', 21),
(61, 11, 'Peça Gráfica ', '', '09/12/2014', 'Finalizar', 21),
(62, 5, 'Copias Processos', '', '10/12/2014', 'Finalizar', 21),
(63, 5, 'Montagem', '', '10/12/2014', 'Finalizar', 21),
(64, 11, 'Reunião Haddad', '', '12/12/2014', 'Finalizar', 21),
(65, 11, 'Reunião Incorp/ Invest.', '', '12/12/2014', 'Finalizar', 21),
(66, 4, 'Protocolar Processo', '', '25/01/2015', 'Trabalhando', 21),
(67, 5, 'Solicitar dos. Técnica', '', '08/12/2014', 'Trabalhando', 22),
(68, 5, 'copia Documento', '', '10/12/2014', 'Trabalhando', 22),
(69, 11, 'Junção do Doc. Comum', '', '11/12/2014', 'Trabalhando', 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Eventos`
--

CREATE TABLE IF NOT EXISTS `Eventos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `idusuario` int(11) NOT NULL,
  `allDay` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `Eventos`
--

INSERT INTO `Eventos` (`id`, `title`, `start`, `end`, `idusuario`, `allDay`) VALUES
(1, 'eee titÃ£o', '2014-10-28 00:00:00', '2014-10-28 00:00:00', 3, 0),
(2, 'Teste', '2014-10-09 00:00:00', '2014-10-09 00:00:00', 2, 0),
(3, 'REUNIAO', '2014-12-18 00:00:00', '2014-12-18 00:00:00', 2, 0),
(4, 'ATENDER COMUNIQUE', '2014-12-24 00:00:00', '2014-12-24 00:00:00', 2, 0),
(5, 'ALORA', '2014-12-20 00:00:00', '2014-12-20 00:00:00', 2, 0),
(19, 'teste com DOM3', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(20, 'teste com DOM4', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(21, 'teste com DOM4', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(25, 'DOM,Unidade:santana,teste tairo', '2014-12-15 00:00:00', '2014-12-15 00:00:00', 1, 0),
(26, 'DOM, Unidade:tucuruvi, Desc:teste com DOM', '2014-12-16 00:00:00', '2014-12-16 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `HistoricoImovel`
--

CREATE TABLE IF NOT EXISTS `HistoricoImovel` (
  `IdHistoricoImovel` int(11) NOT NULL,
  `SqlImovel` varchar(50) NOT NULL,
  `Data` varchar(5) NOT NULL,
  `AreaTerrenoHistorico` varchar(20) NOT NULL,
  `AreaEdificada` varchar(20) NOT NULL,
  `SituacaoHistorico` varchar(50) NOT NULL,
  `IdImovel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `HistoricoImovel`
--

INSERT INTO `HistoricoImovel` (`IdHistoricoImovel`, `SqlImovel`, `Data`, `AreaTerrenoHistorico`, `AreaEdificada`, `SituacaoHistorico`, `IdImovel`) VALUES
(1, '333.333.3333-3', '2010', '100', '100', 'Irregular', 1),
(2, '333.333.3333-3', '2011', '100', '150', 'Regular', 1),
(3, '333.333.33', '2014', '100', '200', 'Irregular', 1),
(4, '432.143.2143-2', '2013', '423', '432', 'Irregular', 2),
(5, '423.142.3142-1', '2000', '3663', '3444', 'Irregular', 2),
(6, '412.434.1234-1', '2009', '54', '54', 'Regular', 2),
(7, '553.454.3254-3', '2013', '423', '432', 'Irregular', 3),
(8, '542.354.3254-2', '2000', '3663', '3444', 'Regular', 3),
(9, '532.453.2454-3', '2013', '423', '432', 'Irregular', 4),
(10, '534.534.5234-5', '2000', '3663', '3444', 'Irregular', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `HistoricoIncorporacao`
--

CREATE TABLE IF NOT EXISTS `HistoricoIncorporacao` (
  `IdHistoricoIncorporacao` int(11) NOT NULL,
  `DataHistoricoIncorporacao` varchar(20) NOT NULL,
  `DescricaoHistoricoIncorporacao` varchar(300) NOT NULL,
  `IdIncorporacao` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `HistoricoIncorporacao`
--

INSERT INTO `HistoricoIncorporacao` (`IdHistoricoIncorporacao`, `DataHistoricoIncorporacao`, `DescricaoHistoricoIncorporacao`, `IdIncorporacao`) VALUES
(2, '', '', 3),
(8, '', '', 6),
(9, '', '', 7),
(10, '', '', 8),
(11, '', '', 9),
(12, '', '', 10),
(13, '', '', 11),
(14, '', '', 12),
(15, '', '', 13),
(16, '', '', 14),
(17, '', '', 15),
(18, '', '', 16),
(19, '', '', 17),
(20, '', '', 18),
(21, '', '', 19),
(22, '', '', 20),
(23, '', '', 21),
(24, '', '', 22),
(25, '', '', 23),
(26, '', '', 24);

-- --------------------------------------------------------

--
-- Estrutura da tabela `HistoricoOportunidade`
--

CREATE TABLE IF NOT EXISTS `HistoricoOportunidade` (
  `IdHistoricoOprtunidade` int(11) NOT NULL,
  `DataHistoricoOportunidade` varchar(20) NOT NULL,
  `TipoHistoricoOportunidade` varchar(50) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `IdOportunidade` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `HistoricoOportunidade`
--

INSERT INTO `HistoricoOportunidade` (`IdHistoricoOprtunidade`, `DataHistoricoOportunidade`, `TipoHistoricoOportunidade`, `Status`, `IdOportunidade`) VALUES
(1, '2014/10/23', '', 'Ficha Tecnica', 1),
(2, '23/10/2014', 'Alterado', 'Viável', 1),
(3, '23/10/2014', 'Alterado', 'Enviado para cliente', 1),
(4, '23/10/2014', 'Alterado', 'Orçamento aceito pelo cliente', 1),
(5, '23/10/2014', 'Alterado', 'Cliente Rejeitou', 1),
(6, '23/10/2014', 'Alterado', 'Negociar outro orçamento com cliente', 1),
(7, '23/10/2014', 'Alterado', 'Enviado para cliente', 1),
(8, '23/10/2014', 'Alterado', 'Orçamento aceito pelo cliente', 1),
(9, '23/10/2014', 'Alterado', 'Orçamento aceito pelo cliente', 1),
(10, '23/10/2014', 'Alterado', 'Projeto Perdido', 1),
(11, '24/10/2014', 'Alterado', 'Orçamento aceito pelo cliente', 1),
(12, '24/10/2014', 'Alterado', 'Cliente Rejeitou', 1),
(13, '24/10/2014', 'Alterado', 'Orçamento aceito pelo cliente', 1),
(14, '24/10/2014', 'Alterado', 'Orçamento aceito pelo cliente', 1),
(15, '24/10/2014', 'Alterado', 'Cliente Rejeitou', 1),
(16, '24/10/2014', 'Alterado', 'Orçamento aceito pelo cliente', 1),
(17, '2014/10/27', '', 'Ficha Tecnica', 2),
(18, '27/10/2014', 'Alterado', 'Viável', 2),
(19, '27/10/2014', 'Alterado', 'Enviado para cliente', 2),
(20, '27/10/2014', 'Alterado', 'Negociar outro orçamento com cliente', 2),
(21, '27/10/2014', 'Alterado', 'Orçamento aceito pelo cliente', 2),
(22, '27/10/2014', 'Alterado', 'Cliente Rejeitou', 2),
(23, '27/10/2014', 'Alterado', 'Projeto Fechado', 2),
(24, '27/10/2014', 'Alterado', 'Negociar outro orçamento com cliente', 2),
(25, '27/10/2014', 'Alterado', 'Enviado para cliente', 2),
(26, '29/10/2014', 'Alterado', 'Orçamento aceito pelo cliente', 2),
(27, '29/10/2014', 'Alterado', 'Orçamento aceito pelo cliente', 2),
(28, '29/10/2014', 'Alterado', 'Orçamento aceito pelo cliente', 2),
(29, '29/10/2014', 'Alterado', 'Orçamento aceito pelo cliente', 2),
(30, '30/10/2014', 'Alterado', 'Orçamento aceito pelo cliente', 2),
(31, '2014/10/30', '', 'Ficha Tecnica', 3),
(32, '2014/10/31', '', 'Ficha Tecnica', 4),
(33, '2014/11/17', '', 'Ficha Tecnica', 5),
(34, '2014/11/17', '', 'Ficha Tecnica', 6),
(35, '17/11/2014', 'Alterado', 'Inviavel', 6),
(36, '17/11/2014', 'Alterado', 'Viável', 6),
(37, '17/11/2014', 'Alterado', 'Enviado para cliente', 6),
(38, '01/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 6),
(39, '2014/12/08', '', 'Ficha Tecnica', 7),
(40, '08/12/2014', 'Alterado', 'Viável', 7),
(41, '08/12/2014', 'Alterado', 'Enviado para cliente', 7),
(42, '08/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 7),
(43, '13/12/2014', 'Alterado', 'Enviar outro orçamento para cliente', 6),
(44, '2014/12/13', '', 'Ficha Tecnica', 8),
(45, '2014/12/13', '', 'Ficha Tecnica', 9),
(46, '2014/12/13', '', 'Ficha Tecnica', 10),
(47, '2014/12/13', '', 'Ficha Tecnica', 11),
(48, '13/12/2014', 'Alterado', 'Viável', 3),
(49, '13/12/2014', 'Alterado', 'Enviado para cliente', 3),
(50, '13/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(51, '13/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(52, '13/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 2),
(53, '13/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 2),
(54, '13/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 2),
(55, '13/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 2),
(56, '13/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 2),
(57, '13/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 2),
(58, '13/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(59, '13/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(60, '13/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(61, '13/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(62, '14/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(63, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(64, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(65, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(66, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(67, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(68, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(69, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(70, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(71, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(72, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(73, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(74, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(75, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(76, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(77, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(78, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(79, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(80, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(81, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(82, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(83, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(84, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(85, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(86, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(87, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(88, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(89, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(90, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(91, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(92, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(93, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(94, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(95, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(96, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(97, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(98, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(99, '15/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(100, '15/12/2014', 'Alterado', 'Cliente Rejeitou', 3),
(101, '22/12/2014', 'Alterado', 'Negociar orçamento com cliente', 3),
(102, '22/12/2014', 'Alterado', 'Enviado para cliente', 3),
(103, '22/12/2014', 'Alterado', 'Negociar orçamento com cliente', 3),
(104, '22/12/2014', 'Alterado', 'Enviado para cliente', 3),
(105, '22/12/2014', 'Alterado', 'Negociar orçamento com cliente', 3),
(106, '22/12/2014', 'Alterado', 'Enviado para cliente', 3),
(107, '22/12/2014', 'Alterado', 'Negociar orçamento com cliente', 3),
(108, '15/01/2015', 'Alterado', 'Orçamento aceito pelo cliente', 2),
(109, '19/01/2015', 'Alterado', 'Inviavel', 11),
(110, '19/01/2015', 'Alterado', 'Inviavel', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `LinkOrcamentoB`
--

CREATE TABLE IF NOT EXISTS `LinkOrcamentoB` (
  `IdLinkOrcamnetoB` int(11) NOT NULL,
  `Endereco` varchar(300) NOT NULL,
  `DataEnvio` varchar(20) NOT NULL,
  `IdOportunidade` int(11) NOT NULL,
  `IdOrcamentoB` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `LinkOrcamentoB`
--

INSERT INTO `LinkOrcamentoB` (`IdLinkOrcamnetoB`, `Endereco`, `DataEnvio`, `IdOportunidade`, `IdOrcamentoB`) VALUES
(2, 'orca/index.php?IdOportunidade=1&IdOrcamentoB=2', '23/10/2014', 1, 2),
(4, 'orca/index.php?IdOportunidade=2&IdOrcamentoB=4', '27/10/2014', 2, 4),
(6, 'orca/index.php?IdOportunidade=7&IdOrcamentoB=6', '08/12/2014', 7, 6),
(7, 'orca/index.php?IdOportunidade=3&IdOrcamentoB=7', '13/12/2014', 3, 7),
(8, 'orca/index.php?IdOportunidade=3&IdOrcamentoB=7', '22/12/2014', 3, 7),
(9, 'orca/index.php?IdOportunidade=3&IdOrcamentoB=7', '22/12/2014', 3, 7),
(10, 'orca/index.php?IdOportunidade=3&IdOrcamentoB=7', '22/12/2014', 3, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Oportunidade`
--

CREATE TABLE IF NOT EXISTS `Oportunidade` (
  `IdOportunidade` int(11) NOT NULL,
  `TipoContato` varchar(30) NOT NULL,
  `Origem` varchar(30) NOT NULL,
  `TipoCadastro` varchar(50) NOT NULL,
  `RazaoSocial` varchar(100) NOT NULL,
  `NomeContato` varchar(100) NOT NULL,
  `CnpjCpf` varchar(20) NOT NULL,
  `Atividade` varchar(100) NOT NULL,
  `Celular` varchar(15) NOT NULL,
  `Telefone` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `ServicoSolicitado` varchar(300) NOT NULL,
  `EnderecoArea` varchar(100) NOT NULL,
  `ContribuinteIptu` varchar(50) NOT NULL,
  `ComentariosSolicitacao` text NOT NULL,
  `DataSolicitacao` varchar(20) NOT NULL,
  `DataViabilidade` varchar(20) NOT NULL,
  `DataProrrogacao` varchar(30) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `ValorQueClienteQueria` varchar(255) NOT NULL,
  `Viabilidade` varchar(50) NOT NULL,
  `IdUsuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Oportunidade`
--

INSERT INTO `Oportunidade` (`IdOportunidade`, `TipoContato`, `Origem`, `TipoCadastro`, `RazaoSocial`, `NomeContato`, `CnpjCpf`, `Atividade`, `Celular`, `Telefone`, `Email`, `ServicoSolicitado`, `EnderecoArea`, `ContribuinteIptu`, `ComentariosSolicitacao`, `DataSolicitacao`, `DataViabilidade`, `DataProrrogacao`, `Status`, `ValorQueClienteQueria`, `Viabilidade`, `IdUsuario`) VALUES
(1, 'Novo Cliente', 'Indicação', 'Pessoa Fisica', 'Tairo Roberto', 'Tairo Roberto Miguel de Assunçâo', '019.602.181-23', 'Desenvolvimento', '(41) 2431-24324', '(42) 3143-2432', 'tairoroberto@hotmail.com', 'Desenvolvimento de sistema Mand', 'Rua Esperanca 215', '43243434', 'Os valores estão acima do que planejei', '2014/10/23', '23/10/2014', '', 'Orçamento Aceito', '', 'SIM', 4),
(2, 'Novo Cliente', 'Prospecção', 'Pessoa Juridica', 'Renato Construtor', 'Renato Andrade', '000.000.000-01', 'Chupetinha', '(11) 9898-99898', '(11) 1334-3434', 'tairoroberto@hotmail.com', 'AVCB, licença de Funcionamento condicionada', 'Aluizio Azevedo, 447, sala 2', '3343434343', 'Os valores estão acima do que planejei', '2014/10/27', '27/10/2014', '', 'Orçamento Aceito', 'R$10,00', 'SIM', 4),
(3, 'Novo Cliente', 'Prospecção', 'Pessoa Fisica', 'empresa Ltda', 'Tairo', '000.000.000-01', 'Desenvolvimento', '(53) 4254-35435', '(54) 3254-3543', 'tairoroberto@hotmail.com', 'sem nada', 'Rua Esperanca 215', '54435', 'Os valores estão acima do que planejei', '2014/10/30', '13/12/2014', '', 'Negociar', '200,00', 'SIM', 4),
(4, 'Cliente existente', 'Site', 'Pessoa Fisica', 'Tairo Roberto', 'Tairo 2', '000.000.000-02', 'Desenvolvimento', '(45) 5235-43252', '(53) 2545-4354', 'tairoroberto@hotmail.com', 'uiewyt', 'Rua Esperanca 215555', 'vbafpgçjsdknvm', ' Comentários', '2014/10/31', '', '', 'Ficha Tecnica', '', '', 4),
(5, 'Novo Cliente', 'Prospecção', 'Pessoa Fisica', 'fsdfdf', 'fdfdf', '333.333.333-33', 'ererererere', '(11) 1111-11111', '(11) 1111-1111', 'vasco@freelers.com.br', 'ficha tecnica', 'aluisio', '34343434343', ' Comentários', '2014/11/17', '', '', 'Ficha Tecnica', '', '', 4),
(6, 'Novo Cliente', 'Prospecção', 'Pessoa Fisica', 'Minha empresa Ltda', 'Tairo', '000.000.000-00', 'Desenvolvimento', '(00) 0000-00000', '(00) 0000-0000', 'tairoroberto@hotmail.com', 'Desenvolvimento de sistema Mand', 'Rua Esperanca 215', '32144', 'teste', '2014/11/17', '17/11/2014', '', 'Enviar outro orçamento', '', 'SIM', 4),
(7, 'Novo Cliente', 'Indicação', 'Pessoa Fisica', 'Gustavo Carvalho', 'Gustavo', '333.333.333-33', 'Escola de idiomas', '(11) 1323-23232', '(11) 3035-3000', 'atendimento@mandprojetos.com.br', 'Alvará de Funcionamento', 'Avenida Professor Luciano Gualberto, nº 908', '2014-0.183.100-8', 'Segundo a relação de documentos retirada na Subprefeitura do Butantã, precisaremos de:\r\n- Cópia do CREA e/ou CAU\r\n- Cópia do AVS ou equivalente quando obrigatório\r\n- Cópia do Certificado de Acessibilidade ou equivalente quando obrigatório\r\n- Cópia do Termo de Anuência ou Permissão quando se tratar de imóvel de propriedade estatal\r\n- CEDI – Cadastro de Edificações com a Irregularidade do imóvel\r\n- Relação de Indisponibilidades / Impossibilidades emitido pelo SLEA\r\n- Preenchimento de algumas declarações e atestados que vêm anexo nesta relação\r\nde documentos para efetuação do requerimento.', '2014/12/08', '08/12/2014', '', 'Orçamento Aceito', '', 'SIM', 4),
(8, 'Novo Cliente', 'Indicação', 'Pessoa Fisica', 'Tairo Roberto M.', 'magrelo', '412.343.124-23', 'Desenvolvimento 3', '(41) 2343-44444', '(44) 4444-4444', 'tairoroberto@hotmail.com', 'Desenvolvimento de sistema Mand5435435234545', 'Rua Esperanca 215', '32144545543', '435435vcgwtgtwgrweg ljadvfjwef,frfewfvoejwfbçkeqwfpkwqefvpuewbf', '2014/12/13', '', '', 'Ficha Tecnica', '', '', 4),
(9, 'Novo Cliente', 'Outro', 'Pessoa Juridica', 'Minha empresa Ltda415435', 'Tairo54315145', '53.145.435/2435-24', 'Desenvolvimento 353453245', '(53) 2454-23543', '(53) 4543-2542', 'tairoroberto@hotmail.com', 'Desenvolvimento de sistema ee', 'Rua Esperanca 2153434', '32144545543', ' Comentários', '2014/12/13', '', '', 'Ficha Tecnica', '', '', 5),
(10, 'Cliente existente', 'Indicação', 'Pessoa Fisica', 'Minha empresa Ltda 34234', 'Tairo413241234', '412.344.132-41', 'Desenvolvimento 353453245', '(42) 1343-43434', '(42) 1343-4324', 'tairoroberto@hotmail.com', 'Desenvolvimento de sistema Mand5435435234545', 'Rua Esperanca 215', '32144545543', ' Comentários', '2014/12/13', '', '', 'Ficha Tecnica', '', '', 4),
(11, 'Cliente existente', 'Indicação', 'Pessoa Fisica', 'Minha empresa Ltda545435', 'Magrelo', '543.125.432-54', 'Desenvolvimento43242134', '(43) 2142-34213', '(42) 3141-2341', 'tairoroberto@hotmail.com', 'Desenvolvimento de sistema Mand5435435234545', 'Rua Esperanca 215', '32144', ' Comentários', '2014/12/13', '19/01/2015', '', 'Selecionar', '', 'NÃO', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `OrcamentoAServicos`
--

CREATE TABLE IF NOT EXISTS `OrcamentoAServicos` (
  `IdOrcamentoAServico` int(11) NOT NULL,
  `IdServico` int(11) NOT NULL,
  `Valor` varchar(20) NOT NULL,
  `IdOrcamentoA` int(11) NOT NULL,
  `IdOportunidade` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `OrcamentoAServicos`
--

INSERT INTO `OrcamentoAServicos` (`IdOrcamentoAServico`, `IdServico`, `Valor`, `IdOrcamentoA`, `IdOportunidade`) VALUES
(5, 1, '20,00 ', 2, 1),
(6, 1, '300,00 ', 2, 1),
(7, 1, '3.000,00 ', 2, 1),
(14, 2, '1.000,00 ', 4, 2),
(15, 1, '10.000,00 ', 4, 2),
(16, 2, '1.000,00 ', 4, 2),
(17, 1, '10.000,00 ', 4, 2),
(19, 1, '8.000,00 ', 7, 7),
(20, 1, '2.000,00 ', 7, 7),
(21, 1, '500,00 ', 8, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `OrcamentoBServicos`
--

CREATE TABLE IF NOT EXISTS `OrcamentoBServicos` (
  `IdOrcamentoBServico` int(11) NOT NULL,
  `IdServico` int(11) NOT NULL,
  `Valor` varchar(20) NOT NULL,
  `IdOrcamentoB` int(11) NOT NULL,
  `IdOportunidade` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `OrcamentoBServicos`
--

INSERT INTO `OrcamentoBServicos` (`IdOrcamentoBServico`, `IdServico`, `Valor`, `IdOrcamentoB`, `IdOportunidade`) VALUES
(5, 1, '20,00 ', 2, 1),
(6, 1, '300,00 ', 2, 1),
(7, 1, '2.000,00', 2, 1),
(14, 2, '1.000,00 ', 4, 2),
(15, 1, '10.000,00 ', 4, 2),
(16, 2, '1.000,00 ', 4, 2),
(17, 1, '10.000,00 ', 4, 2),
(19, 1, '8.500,00', 6, 7),
(20, 1, '4.000,00', 6, 7),
(21, 1, '2.000,00', 7, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `OutrosLotesImovel`
--

CREATE TABLE IF NOT EXISTS `OutrosLotesImovel` (
  `IdOutrosLotes` int(11) NOT NULL,
  `SqlOutroLotes` varchar(20) NOT NULL,
  `AreaTerrenoOutrosLotes` varchar(20) NOT NULL,
  `AreaConstruidaOutrosLotes` varchar(20) NOT NULL,
  `TestadaOutrosLotes` varchar(20) NOT NULL,
  `MatriculaOutrosLotes` varchar(50) NOT NULL,
  `IdImovel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `OutrosLotesImovel`
--

INSERT INTO `OutrosLotesImovel` (`IdOutrosLotes`, `SqlOutroLotes`, `AreaTerrenoOutrosLotes`, `AreaConstruidaOutrosLotes`, `TestadaOutrosLotes`, `MatriculaOutrosLotes`, `IdImovel`) VALUES
(1, '444.444.4444-4', '50', '100', '34', '1111111111111', 1),
(2, '333.434.3', '33', '33', '33', '33333333', 1),
(3, '333.33', '33', '333', '33', '33', 1),
(4, '543.532.4523-4', '4324', '2014', '4324', '4234e1f', 2),
(5, '532.453.2453-4', '3444', '4343', '4343', '1111', 2),
(6, '', '', '', '', '', 2),
(7, '524.353.2453-2', '4324', '2014', '4324', '543324hh', 3),
(8, '532.453.4523-4', '3444', '4343', '4343', '4234e1f', 3),
(9, '543.252.4523-4', '4324', '2014', '4324', '4234e1f', 4),
(10, '543.253.2454-3', '3444', '4343', '4343', '4324', 4),
(11, '306.079.0093-5', '', '', '', '', 8),
(12, '306.079.0092-7', '', '', '', '', 8),
(13, '306.079.0091-9', '', '', '', '', 8),
(14, '306.079.0090-0', '', '', '', '', 8),
(15, '306.079.0089-7', '', '', '', '', 8),
(16, '306.079.0088-9', '', '', '', '', 8),
(17, '306.079.0087-0', '', '', '', '', 8),
(18, '306.079.0086-2', '', '', '', '', 8),
(19, '306.079.0085-4', '', '', '', '', 8),
(20, '306.079.0084-6', '', '', '', '', 8),
(21, '306.079.0083-8', '', '', '', '', 8),
(22, '019.006.0002-1', '245', '160', '5,10', '70174', 11),
(23, '019.006.0001-3', '776', '531', '15,3', '79193', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `PermissoesUsuario`
--

CREATE TABLE IF NOT EXISTS `PermissoesUsuario` (
  `IdPermissao` int(11) NOT NULL,
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
  `IdUsuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `PermissoesUsuario`
--

INSERT INTO `PermissoesUsuario` (`IdPermissao`, `Holding`, `Requerente`, `Imovel`, `Oportunidade`, `Orcamento`, `Faq`, `LinksUteis`, `Processos`, `Servicos`, `Tarefas`, `Incorporacao`, `Calendario`, `IdUsuario`) VALUES
(1, 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 5),
(2, 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 1),
(3, 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 2),
(4, 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 3),
(10, 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 4),
(11, 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 6),
(12, 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 7),
(13, 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 11),
(14, 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 12),
(15, '//Invisivel', '//Invisivel', '//Invisivel', '//Invisivel', '//Invisivel', '//Invisivel', '//Invisivel', '//Invisivel', '//Invisivel', '//Invisivel', 'Visualizar/Cadastrar/', 'Visualizar/Cadastrar/', 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ProcessosImovel`
--

CREATE TABLE IF NOT EXISTS `ProcessosImovel` (
  `IdProcessosImovel` int(11) NOT NULL,
  `AnoProcesso` varchar(5) NOT NULL,
  `Interessado` varchar(100) NOT NULL,
  `Assunto` varchar(500) NOT NULL,
  `Situacao` varchar(50) NOT NULL,
  `IdImovel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ProcessosImovel`
--

INSERT INTO `ProcessosImovel` (`IdProcessosImovel`, `AnoProcesso`, `Interessado`, `Assunto`, `Situacao`, `IdImovel`) VALUES
(1, '2001', 'Sebastian', 'AVCB', 'Deferido', 1),
(2, '2014', 'Sebastian', 'regularização', 'Indeferido', 1),
(3, '2012', 'Sebastian', 'Regularização', 'Indeferido', 1),
(4, '2015', 'tairo', 'Assunto Teste', 'Concluido', 2),
(5, '2008', 'Tairo', 'Processos4', 'Encerrado', 2),
(6, '2015', 'tairo', 'Assunto Teste', 'Concluido', 3),
(7, '2000', 'Tairo', 'Processos4', 'Encerrado', 3),
(8, '2015', 'tairo', 'Assunto Teste', 'Concluido', 4),
(9, '2008', 'Tairo', 'Processos1', 'Encerrado', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Responsavel`
--

CREATE TABLE IF NOT EXISTS `Responsavel` (
  `IdResponsavel` int(11) NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `Cpf` int(11) NOT NULL,
  `Rg` varchar(14) NOT NULL,
  `Cep` varchar(9) NOT NULL,
  `Rua` varchar(200) NOT NULL,
  `Numero` varchar(20) NOT NULL,
  `Bairro` varchar(50) NOT NULL,
  `Cidade` varchar(100) NOT NULL,
  `Telefone` varchar(14) NOT NULL,
  `Celular` varchar(14) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `SenhaWebResponsavel` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Responsavel`
--

INSERT INTO `Responsavel` (`IdResponsavel`, `Nome`, `Cpf`, `Rg`, `Cep`, `Rua`, `Numero`, `Bairro`, `Cidade`, `Telefone`, `Celular`, `Email`, `SenhaWebResponsavel`, `created_at`) VALUES
(2, 'Vasco Pinheiro dos Santos', 0, '', '', '', '', '', '', '', '', '', '', '2015-02-05 11:40:18'),
(3, 'Youssef Ahmad Sleiman', 187010, '', '', '', '', '', '', '', '', '', '', '2015-02-05 11:40:18'),
(4, '', 0, '', '', '', '', '', '', '', '', '', '', '2015-02-05 11:40:18'),
(5, '', 0, '', '', '', '', '', '', '', '', '', '', '2015-02-05 11:40:18'),
(6, 'Alberto Menache', 172636, '242.570.367', '05.036-01', 'Rua Cenno Sbrighi', '170', 'Água Branca', 'São Paulo', '(11) 2103-4201', '', 'valerio.oliveira@linx.com.br', '545176', '2015-02-05 11:40:18'),
(7, 'Paulo Sergio Bongiovanni', 51061, '841.112.0', '02.518-10', 'Rua Joaquim Mendes', '207', 'Jardim das Laranjeiras', 'São Paulo', '(11) 9878-2811', '', 'pbongiovani@uol.com.br', '020966', '2015-02-05 11:40:18'),
(8, 'Marco Madjar', 317276, '251.398.134', '01.234-02', 'Rua Itabaquara', '129', 'Pacaembu', 'São Paulo', '(11) 9912-1707', '', 'madjar@uol.com.br', '000000', '2015-02-05 11:40:18'),
(9, '', 0, '', '', '', '', '', '', '', '', '', '111553', '2015-02-06 19:00:10'),
(10, 'Mohamed Ahmad Osman ', 586029, '361.789.81', '02.416-06', 'Francisca Julia', '277', 'Santana', 'São Paulo', '(11) 9474-9901', '', 'atendimento@mandprojetos.com.br', '093106', '2015-02-05 11:40:18'),
(11, 'Marina Pechlivanis Koutsantonis ', 154000, '193.987.77', '05.021-00', 'Rua Cotoxó', '265', 'Perdizes ', 'São Paulo', '(11) 3167-3313', '', 'contato@umbigodomundo.com.br', '199907', '2015-02-05 11:40:18'),
(12, 'Emerson Inácio de Souza ', 319053, '410.689.35', '02.021-03', 'Rua Aluisio Azevedo', '447', 'Santana', 'São Paulo', '(11) 3731-6388', '(11) 9995-2861', 'esouza@urbin-di.com.br', '215404', '2015-02-05 11:40:18'),
(13, 'Onivaldo Castelan Filho', 101188, '178.418.420', '08.210-43', 'Rua Gregôrio Ramalho', '157', 'Itaquera', 'São Paulo', '(11) 2950-050', '(11) 9828-2110', 'ocastelan@terra.com.br', '000000', '2015-02-05 11:40:18'),
(14, '', 0, '', '', '', '', '', '', '', '', '', '', '2015-02-05 11:40:18'),
(15, 'Bruno Cerqueira Cesar Esteves Villar', 317570, '347.222.547', '04.517-05', 'Avenida dos Eucaliptos', '217', 'Indianópolis', 'São Paulo', '', '', 'atendimento@mandprojetos.com.br', '', '2015-02-05 11:40:18'),
(16, 'Marcelo Sertório Fernandes', 222108, '303.494.05', '04.734-00', 'Avenida Adolfo Pinheiro', '02056', 'Santo Amaro', 'São Paulo', '(11) 5579-2322', '', 'marcelo@parkway.com.br', '000000', '2015-02-05 11:40:18'),
(17, '', 0, '', '', '', '', '', '', '', '', '', '', '2015-02-05 11:40:18'),
(18, 'Domingos Vasco', 37161, '116.291.45.', '02.310-01', 'Rua Guaraja', '155', 'Vila Mazzei', 'São Paulo', '(11) 2972-9902', '(11) 9711-1054', 'amanda.macedo@vianovaengenharia.com.br', '020581', '2015-02-05 11:40:18'),
(19, 'Alceu Gustavo Correa', 315749, '', '04.404-03', 'Rua Baquirivu', '590', 'Cidade Ademar', 'São Paulo', '', '', '', '', '2015-02-05 11:40:18'),
(20, 'José Rubens de Macedo Filho', 0, '680.285.81', '', '', '', '', '', '', '', '', '', '2015-02-05 11:40:18'),
(21, 'Eduardo Rocha Azevedo', 0, '', '05.601-00', 'Avenida Lineu de Paula Machado', '1263', 'Jardim Everest', 'São Paulo', '(11) 2161-8340', '', '', '', '2015-02-05 11:40:18'),
(22, 'Paulo Sérgio figueira ', 36523, '104.455.18', '00.000-00', 'Rua Rouxinol', '1041/1004', 'Moema', 'São Paulo', '(11) 2503-0792', '(11) 9844-7766', 'lpv2@uol.com.br', '000000', '2015-02-09 18:02:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `RestricoesImovel`
--

CREATE TABLE IF NOT EXISTS `RestricoesImovel` (
  `IdRestricoesImovel` int(11) NOT NULL,
  `SqlRestricoes` varchar(50) NOT NULL,
  `Tombamento` varchar(10) NOT NULL,
  `AreaManancial` varchar(10) NOT NULL,
  `AreaContaminada` varchar(10) NOT NULL,
  `PatrimonioAmbiental` varchar(10) NOT NULL,
  `ProtecaoAmbiental` varchar(10) NOT NULL,
  `PedenciaFinanceira` varchar(10) NOT NULL,
  `IdImovel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `RestricoesImovel`
--

INSERT INTO `RestricoesImovel` (`IdRestricoesImovel`, `SqlRestricoes`, `Tombamento`, `AreaManancial`, `AreaContaminada`, `PatrimonioAmbiental`, `ProtecaoAmbiental`, `PedenciaFinanceira`, `IdImovel`) VALUES
(1, '222.222.2222-2', 'Não ', 'Não ', 'Não ', 'Não ', 'Não ', 'Não', 1),
(2, '333.333.3333-3', 'Não', 'Sim', 'Não', 'Sim', 'Não', 'Sim', 1),
(3, '444.444.4444-4', 'Sim', 'Não', 'Sim', 'Não', 'Sim', 'Não', 1),
(4, '555.555.5555-5', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim ', 'Sim', 1),
(5, '543.252.3452-3', 'Sim ', 'Sim ', 'Não ', 'Não ', 'Sim ', 'Não', 2),
(6, '523.254.3252-3', 'Sim ', 'Sim ', 'Sim ', 'Sim ', 'Sim ', 'Não', 3),
(7, '543.253.4252-3', 'Não', 'Não', 'Não', 'Não', 'Sim', 'Sim', 3),
(8, '534.253.4254-3', 'Sim ', 'Sim ', 'Não ', 'Não ', 'Não ', 'Não', 4),
(9, '523.454.3253-4', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 4),
(10, '025.016.0055-1', 'Não ', 'Não ', 'Não ', 'Não ', 'Não ', 'Não', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Servicos`
--

CREATE TABLE IF NOT EXISTS `Servicos` (
  `IdServico` int(11) NOT NULL,
  `TituloServico` varchar(100) NOT NULL,
  `ExplicacaoServico` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Servicos`
--

INSERT INTO `Servicos` (`IdServico`, `TituloServico`, `ExplicacaoServico`) VALUES
(2, 'AUTO DE LICENÇA DE FUNCIONAMENTO', '•	Vistoria inloco <br>\r\n•	Elaboração do processo;<br>\r\n•	Acompanhamento  técnico do processo;<br>\r\n•	Responsabilidade técnica do processo;<br>\r\n•	Autuação do  processo;<br>\r\n•	Acompanhamento físico e ou via Simproc;<br>\r\n•	Atendimento de comunique-se;<br>\r\n•	Tramitação junto a Subprefeitura;<br>'),
(3, 'AUTO DE VERIFICAÇÃO DE SEGURANÇA (AVS)', '<p>Estão obrigadas à adaptação as Edificações,  que apresentarem altura superior a 9 (nove) metros, ou população superior a 100 (cem) pessoas por andar. </p>\r\n1.	Vistoria Local;<br>\r\n2.	Elaboração do Memorial Descritivo;<br>\r\n3.	Elaboração do Laudo Técnico de Segurança;<br>\r\n4.	Relatório fotográfico da situação atual;<br>\r\n5.	Relatório descritivo para atendimento aos Parâmetros;<br>\r\n6.	Relatório descritivo, contendo proposta de adaptação ás normas de segurança;<br>\r\n7.	Elaboração dos Laudos Técnicos;<br>\r\n8.	Elaboração Atestado de  Elétrica ;<br>\r\n9.	Elaboração do Atestado de estabilidade;<br>\r\n10.	Elaboração do Atestado de Segurança;<br>\r\n11.	Elaboração do Cronograma de Obras, para atendimento as adaptações, conforme execução prevista, pelos responsáveis técnicos da execução de obra;<br>\r\n12.	Orientação quanto a adequação das peças gráficas, contendo o sistema de segurança.\r\n13.	Orientação quanto ao atendimento de IEOS;<br>\r\n14.	Autuação (protocolo) do processo;<br>\r\n15.	Tramitação e acompanhamento  técnico do processo;<br> \r\nA partir da autuação  do processo, instruído com a documentação solicitada, inicia-se a análise das propostas, atentando para os principais itens:<br>\r\n\r\n• Estabilidade da edificação;<br>\r\n• especificação dos espaços de circulação e vias de escoamento, horizontal e vertical;<br>\r\n• potencial de risco;<br>\r\n• cálculo de lotação;<br>\r\n• dimensionamento das vias de escoamento, das saídas e dos espaços de circulação protegidos;<br>\r\n• compartimentação vertical e horizontal;<br>\r\n• setores de incêndio;<br>\r\n• instalações elétricas;<br>\r\n• sistema de proteção contra descargas atmosféricas;<br>\r\n• sistema de iluminação de emergência;<br>\r\n\r\n• sistemas de detecção e alarme de advertência geral;<br>\r\n• equipamentos de combate à incêndio (extintores, hidrantes, chuveiros automáticos, dentre outros);<br>\r\n• sinalização de segurança;<br>\r\n• instalações permanentes de gás combustível;<br>\r\n• brigada de combate à incêndio;<br>\r\n• inflamáveis depositados;<br>\r\n• aparelhos de transporte vertical.<br><br>\r\n\r\n<p>Esta primeira etapa do processo de AVS conclui-se com a aceitação de todas as propostas de adaptação, com carimbo de aceitação em planta(s) e emissão de Intimação para Execução de Obras e Serviços (IEOS), com prazos previstos no Código de Obras e Edificações-COE (180 dias, prorrogados por mais 180 dias)</p>\r\n\r\n<p>A segunda etapa do processo de AVS consiste na comprovação da conclusão das obras e serviços, através da apresentação dos Atestados  abaixo relacionada:</p>\r\n\r\n· Atestado de Conclusão de Obras;<br>\r\n· Atestado de formação de Brigada de Combate à Incêndio;<br>\r\n· Atestado de instalações elétricas;<br>\r\n· Atestado do sistema de proteção contra descargas elétricas atmosféricas;<br>\r\n· Atestado referente às instalações de gás;<br>\r\n· Atestado de Vistoria do Corpo de Bombeiros (AVCB) e / ou Atestado sobre funcionamento dos equipamentos e segurança;<br>\r\n· Declaração de matérias estocados e manipulados;<br>\r\n· Outros, de acordo com a particularidade dos equipamentos.<br>\r\n\r\nAtendida a IEOS será expedido o AVS, sendo que a sua retirada se dará mediante o cadastramento da Ficha de Inscrição no Cadastro de Manutenção (FICAM).<br>\r\n\r\nOs atestados referente a segunda etapa, propomos ser os responsáveis nomeados e ou contratados para execução e ou acompanhamento.<br>'),
(4, 'APARELHOS DE TRANSPORTE', '<p>Elevadores, esteiras, escadas rolantes e outros aparelhos de transporte.</p><br>\r\n\r\n<b>LICENCIAMENTO</b><br>\r\nTodo aparelho de transporte vertical ou horizontal, de cargas ou de pessoas, necessita de licença para ser instalado e para o seu funcionamento,  por meio do:<br>\r\nAlvará de Instalação, concedido antes da montagem do equipamento e do Alvará de Funcionamento, concedido após instalação.<br><br>\r\n\r\n<p>Para a emissão do Alvará de Instalação, é necessário que a edificação esteja com sua situação regular junto a Municipalidade, ou seja, que possua Alvarás emitidos pela Prefeitura que comprovem essa regularidade. Também os aparelhos a serem instalados devem, nos seus projetos, atenderem as normas específicas emitidas pela ABNT – Associação Brasileira de Normas Técnicas, \r\nconsiderando, se tratar de reforma e a permanência dos mesmos existentes e já em funcionamento, propormos aguardar solicitação em ressalva do Alvara, caso seja necessário.</p>'),
(5, 'TRAMITAÇÃO DE PROCESSO ', '•	Vistoria inloco <br>\r\n•	Analise da situação atual e pretendida;<br>\r\n•	Orientação ao atendimento dos Parâmetros específicos;<br>\r\n•	Acompanhamento técnico do processo;<br>\r\n•	Atendimento do comunique-se;<br>\r\n•	Adequação nas pecas gráficas;<br>\r\n•	Acompanhamento do processo junto a Prefeitura;<br>\r\n•	Emissão de relatório de tramitação.<br>\r\n'),
(6, 'CERTIFICADO DE ACESSIBILIDADE', '<p>Certificado de Acessibilidade, comprova  que a edificação apresenta condições de acesso em segurança das pessoas portadoras de necessidades especiais e mobilidade reduzida.</p> <br>\r\n•	Vistoria inloco;<br>\r\n•	Analise da situação atual e pretendida;<br>\r\n•	Orientação quanto a adequação as Normas;<br>\r\n•	Orientação quanto a localização dos equipamentos;<br>\r\n•	Elaboração e apresentação em pecas gráficas;<br>\r\n•	Memorial descritivo das obras e serviços;<br>\r\n•	Acompanhamento técnico do processo;<br>\r\n•	Atendimento do comunique-se;<br>\r\n•	Acompanhamento do processo junto ao órgão publico;<br>\r\n•	Emissão de relatório de tramitação.<br>\r\n'),
(7, 'ALVARÁ DE  LOCAL DE REUNIÃO', '<p>O Alvara de Funcionamento, comprova que o estabelecimento atende as normas e exigências necessárias para concentração de grande numero de pessoas( lotação superior a 250 pessoas).</p><br>\r\n\r\n•	Vistoria inloco;<br>\r\n•	Elaboração do Memorial Descritivo;<br>\r\n•	Elaboração do Laudo Técnico ;<br>\r\n•	Elaboração Atestado para atendimento aos Parâmetros;<br>\r\n•	Montagem e elaboração do processo;<br>\r\n•	Autuação do processo;<br>\r\n•	Acompanhamento e tramitação junto ao órgão publico;<br>\r\n•	Emissão de relatórios de tramitação; <br>\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ServicosDocumento`
--

CREATE TABLE IF NOT EXISTS `ServicosDocumento` (
  `IdDocumento` int(11) NOT NULL,
  `NomeDocumento` varchar(100) NOT NULL,
  `IdServico` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ServicosDocumento`
--

INSERT INTO `ServicosDocumento` (`IdDocumento`, `NomeDocumento`, `IdServico`) VALUES
(3, 'IPTU', 2),
(4, '', 2),
(5, 'IPTU', 3),
(6, 'Alvarás', 4),
(7, 'iptu', 5),
(8, 'IPTU', 6),
(9, 'IPTU', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `SolicitacaoDocumetosTarefa`
--

CREATE TABLE IF NOT EXISTS `SolicitacaoDocumetosTarefa` (
  `IdSolicitacaoDocUmento` int(11) NOT NULL,
  `IdEmpresa` int(11) NOT NULL,
  `IdRequerente` int(11) NOT NULL,
  `IdImovel` int(11) NOT NULL,
  `IdOportunidade` int(11) NOT NULL,
  `IdTarefa` int(11) NOT NULL,
  `NomeUsuario` varchar(50) NOT NULL,
  `DocumentosSolicitacao` text NOT NULL,
  `DataSolicitacao` varchar(15) NOT NULL,
  `Solicitar` varchar(50) DEFAULT NULL,
  `Recebido` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `SolicitacaoDocumetosTarefa`
--

INSERT INTO `SolicitacaoDocumetosTarefa` (`IdSolicitacaoDocUmento`, `IdEmpresa`, `IdRequerente`, `IdImovel`, `IdOportunidade`, `IdTarefa`, `NomeUsuario`, `DocumentosSolicitacao`, `DataSolicitacao`, `Solicitar`, `Recebido`) VALUES
(1, 1, 2, 1, 0, 8, 'Vasco Pinheiro', 'avcb', '28/10/2014', '31/10/2014', '07/11/2014'),
(2, 0, 0, 0, 0, 9, 'Matheus Camilo', 'Cpf,Cnpj', '30/10/2014', '', ''),
(3, 0, 0, 0, 0, 9, 'Tairo Roberto Miguel de Assunçâo', 'Rg,CNH', '31/10/2014', '', ''),
(4, 0, 0, 0, 4, 9, 'Matheus Camilo', 'IPTU 12222', '31/10/2014', '31/10/2014', '31/10/2014'),
(5, 1, 1, 4, 0, 11, 'Matheus Camilo', 'adfadfadf', '05/11/2014', '05/11/2014', '07/11/2014'),
(6, 1, 2, 1, 0, 8, 'Tairo Roberto Miguel de Assunçâo', 'iptu', '07/11/2014', '07/11/2014', '07/11/2014'),
(7, 0, 0, 0, 7, 26, 'Matheus Camilo', 'Sql certo', '08/12/2014', '08/12/2014', ''),
(18, 4, 4, 1, 0, 23, 'Tairo Roberto Miguel de Assunçâo', 'teste doc 1', '22/12/2014', '21/01/2015', '21/01/2015'),
(19, 5, 5, 1, 0, 24, 'Arthur Karam', 'teste doc 2', '22/12/2014', '', ''),
(20, 0, 0, 0, 7, 26, 'Matheus Camilo', 'teste doc 3', '22/12/2014', '21/01/2015', '21/01/2015'),
(21, 4, 4, 1, 0, 23, 'Tairo Roberto Miguel de Assunçâo', 'teste doc 45', '21/01/2015', '21/01/2015', '21/01/2015'),
(22, 5, 5, 1, 0, 25, 'Matheus Camilo', 'teste doc 44', '21/01/2015', '', ''),
(23, 5, 5, 1, 0, 25, 'Vasco Pinheiro', 'teste doc 411', '21/01/2015', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `TaxasUsuario`
--

CREATE TABLE IF NOT EXISTS `TaxasUsuario` (
  `IdTaxa` int(11) NOT NULL,
  `DescricaoTaxa` varchar(100) NOT NULL,
  `ValorTaxa` varchar(20) NOT NULL,
  `DataTaxa` varchar(20) NOT NULL,
  `checado` varchar(50) NOT NULL,
  `IdUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `TranferenciaEtapaTarefa`
--

CREATE TABLE IF NOT EXISTS `TranferenciaEtapaTarefa` (
  `IdTransferencia` int(11) NOT NULL,
  `IdUsuarioTranferiu` int(11) NOT NULL,
  `IdUsuarioPegou` int(11) NOT NULL,
  `DataTranferencia` varchar(20) NOT NULL,
  `IdEtapaTarefa` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `TranferenciaEtapaTarefa`
--

INSERT INTO `TranferenciaEtapaTarefa` (`IdTransferencia`, `IdUsuarioTranferiu`, `IdUsuarioPegou`, `DataTranferencia`, `IdEtapaTarefa`) VALUES
(2, 2, 3, '07/11/2014', 38),
(13, 1, 1, '01/12/2014', 27),
(15, 1, 1, '01/12/2014', 26),
(17, 1, 1, '22/12/2014', 70);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `IdUsuario` int(11) NOT NULL,
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
  `CreditoUsuario_final` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Usuarios`
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CadastraHistoricoTarefa`
--
ALTER TABLE `CadastraHistoricoTarefa`
  ADD PRIMARY KEY (`IdHistoricoTarefa`);

--
-- Indexes for table `CadastraImovel`
--
ALTER TABLE `CadastraImovel`
  ADD PRIMARY KEY (`IdImovel`);

--
-- Indexes for table `CadastraIncorporacao`
--
ALTER TABLE `CadastraIncorporacao`
  ADD PRIMARY KEY (`IdIncorporacao`);

--
-- Indexes for table `CadastraLinks`
--
ALTER TABLE `CadastraLinks`
  ADD PRIMARY KEY (`IdLink`);

--
-- Indexes for table `CadastraOrcamentoA`
--
ALTER TABLE `CadastraOrcamentoA`
  ADD PRIMARY KEY (`IdOrcamentoA`);

--
-- Indexes for table `CadastraOrcamentoB`
--
ALTER TABLE `CadastraOrcamentoB`
  ADD PRIMARY KEY (`IdOrcamentoB`);

--
-- Indexes for table `CadastraPocesso`
--
ALTER TABLE `CadastraPocesso`
  ADD PRIMARY KEY (`IdProcesso`);

--
-- Indexes for table `CadastraSql`
--
ALTER TABLE `CadastraSql`
  ADD PRIMARY KEY (`IdSql`);

--
-- Indexes for table `CadastraTarefa`
--
ALTER TABLE `CadastraTarefa`
  ADD PRIMARY KEY (`IdTarefa`);

--
-- Indexes for table `CadastroFAQ`
--
ALTER TABLE `CadastroFAQ`
  ADD PRIMARY KEY (`IdCadastraFaq`);

--
-- Indexes for table `CadastroHolding`
--
ALTER TABLE `CadastroHolding`
  ADD PRIMARY KEY (`IdEmpresa`);

--
-- Indexes for table `CadastroRequerente`
--
ALTER TABLE `CadastroRequerente`
  ADD PRIMARY KEY (`IdRequerente`);

--
-- Indexes for table `Categoria`
--
ALTER TABLE `Categoria`
  ADD PRIMARY KEY (`IdCategoria`);

--
-- Indexes for table `ComentariosProcessoImovel`
--
ALTER TABLE `ComentariosProcessoImovel`
  ADD PRIMARY KEY (`IdComentariosProcessoImovel`);

--
-- Indexes for table `Contrato`
--
ALTER TABLE `Contrato`
  ADD PRIMARY KEY (`IdContrato`);

--
-- Indexes for table `DadosAdicionaisImovel`
--
ALTER TABLE `DadosAdicionaisImovel`
  ADD PRIMARY KEY (`IdDadosAdicionais`);

--
-- Indexes for table `DetalheProcesso`
--
ALTER TABLE `DetalheProcesso`
  ADD PRIMARY KEY (`IdDetalheProcesso`);

--
-- Indexes for table `DocumentosUsuario`
--
ALTER TABLE `DocumentosUsuario`
  ADD PRIMARY KEY (`IdDocumento`);

--
-- Indexes for table `EtapaTarefa`
--
ALTER TABLE `EtapaTarefa`
  ADD PRIMARY KEY (`IdEtapaTarefa`);

--
-- Indexes for table `Eventos`
--
ALTER TABLE `Eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `HistoricoImovel`
--
ALTER TABLE `HistoricoImovel`
  ADD PRIMARY KEY (`IdHistoricoImovel`);

--
-- Indexes for table `HistoricoIncorporacao`
--
ALTER TABLE `HistoricoIncorporacao`
  ADD PRIMARY KEY (`IdHistoricoIncorporacao`);

--
-- Indexes for table `HistoricoOportunidade`
--
ALTER TABLE `HistoricoOportunidade`
  ADD PRIMARY KEY (`IdHistoricoOprtunidade`);

--
-- Indexes for table `LinkOrcamentoB`
--
ALTER TABLE `LinkOrcamentoB`
  ADD PRIMARY KEY (`IdLinkOrcamnetoB`);

--
-- Indexes for table `Oportunidade`
--
ALTER TABLE `Oportunidade`
  ADD PRIMARY KEY (`IdOportunidade`);

--
-- Indexes for table `OrcamentoAServicos`
--
ALTER TABLE `OrcamentoAServicos`
  ADD PRIMARY KEY (`IdOrcamentoAServico`);

--
-- Indexes for table `OrcamentoBServicos`
--
ALTER TABLE `OrcamentoBServicos`
  ADD PRIMARY KEY (`IdOrcamentoBServico`);

--
-- Indexes for table `OutrosLotesImovel`
--
ALTER TABLE `OutrosLotesImovel`
  ADD PRIMARY KEY (`IdOutrosLotes`);

--
-- Indexes for table `PermissoesUsuario`
--
ALTER TABLE `PermissoesUsuario`
  ADD PRIMARY KEY (`IdPermissao`);

--
-- Indexes for table `ProcessosImovel`
--
ALTER TABLE `ProcessosImovel`
  ADD PRIMARY KEY (`IdProcessosImovel`);

--
-- Indexes for table `Responsavel`
--
ALTER TABLE `Responsavel`
  ADD PRIMARY KEY (`IdResponsavel`);

--
-- Indexes for table `RestricoesImovel`
--
ALTER TABLE `RestricoesImovel`
  ADD PRIMARY KEY (`IdRestricoesImovel`);

--
-- Indexes for table `Servicos`
--
ALTER TABLE `Servicos`
  ADD PRIMARY KEY (`IdServico`);

--
-- Indexes for table `ServicosDocumento`
--
ALTER TABLE `ServicosDocumento`
  ADD PRIMARY KEY (`IdDocumento`);

--
-- Indexes for table `SolicitacaoDocumetosTarefa`
--
ALTER TABLE `SolicitacaoDocumetosTarefa`
  ADD PRIMARY KEY (`IdSolicitacaoDocUmento`);

--
-- Indexes for table `TaxasUsuario`
--
ALTER TABLE `TaxasUsuario`
  ADD PRIMARY KEY (`IdTaxa`);

--
-- Indexes for table `TranferenciaEtapaTarefa`
--
ALTER TABLE `TranferenciaEtapaTarefa`
  ADD PRIMARY KEY (`IdTransferencia`);

--
-- Indexes for table `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CadastraHistoricoTarefa`
--
ALTER TABLE `CadastraHistoricoTarefa`
  MODIFY `IdHistoricoTarefa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `CadastraImovel`
--
ALTER TABLE `CadastraImovel`
  MODIFY `IdImovel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `CadastraIncorporacao`
--
ALTER TABLE `CadastraIncorporacao`
  MODIFY `IdIncorporacao` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `CadastraLinks`
--
ALTER TABLE `CadastraLinks`
  MODIFY `IdLink` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `CadastraOrcamentoA`
--
ALTER TABLE `CadastraOrcamentoA`
  MODIFY `IdOrcamentoA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `CadastraOrcamentoB`
--
ALTER TABLE `CadastraOrcamentoB`
  MODIFY `IdOrcamentoB` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `CadastraPocesso`
--
ALTER TABLE `CadastraPocesso`
  MODIFY `IdProcesso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `CadastraSql`
--
ALTER TABLE `CadastraSql`
  MODIFY `IdSql` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `CadastraTarefa`
--
ALTER TABLE `CadastraTarefa`
  MODIFY `IdTarefa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `CadastroFAQ`
--
ALTER TABLE `CadastroFAQ`
  MODIFY `IdCadastraFaq` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `CadastroHolding`
--
ALTER TABLE `CadastroHolding`
  MODIFY `IdEmpresa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `CadastroRequerente`
--
ALTER TABLE `CadastroRequerente`
  MODIFY `IdRequerente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `Categoria`
--
ALTER TABLE `Categoria`
  MODIFY `IdCategoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ComentariosProcessoImovel`
--
ALTER TABLE `ComentariosProcessoImovel`
  MODIFY `IdComentariosProcessoImovel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `Contrato`
--
ALTER TABLE `Contrato`
  MODIFY `IdContrato` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `DadosAdicionaisImovel`
--
ALTER TABLE `DadosAdicionaisImovel`
  MODIFY `IdDadosAdicionais` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `DetalheProcesso`
--
ALTER TABLE `DetalheProcesso`
  MODIFY `IdDetalheProcesso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `DocumentosUsuario`
--
ALTER TABLE `DocumentosUsuario`
  MODIFY `IdDocumento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `EtapaTarefa`
--
ALTER TABLE `EtapaTarefa`
  MODIFY `IdEtapaTarefa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `Eventos`
--
ALTER TABLE `Eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `HistoricoImovel`
--
ALTER TABLE `HistoricoImovel`
  MODIFY `IdHistoricoImovel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `HistoricoIncorporacao`
--
ALTER TABLE `HistoricoIncorporacao`
  MODIFY `IdHistoricoIncorporacao` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `HistoricoOportunidade`
--
ALTER TABLE `HistoricoOportunidade`
  MODIFY `IdHistoricoOprtunidade` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `LinkOrcamentoB`
--
ALTER TABLE `LinkOrcamentoB`
  MODIFY `IdLinkOrcamnetoB` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Oportunidade`
--
ALTER TABLE `Oportunidade`
  MODIFY `IdOportunidade` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `OrcamentoAServicos`
--
ALTER TABLE `OrcamentoAServicos`
  MODIFY `IdOrcamentoAServico` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `OrcamentoBServicos`
--
ALTER TABLE `OrcamentoBServicos`
  MODIFY `IdOrcamentoBServico` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `OutrosLotesImovel`
--
ALTER TABLE `OutrosLotesImovel`
  MODIFY `IdOutrosLotes` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `PermissoesUsuario`
--
ALTER TABLE `PermissoesUsuario`
  MODIFY `IdPermissao` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `ProcessosImovel`
--
ALTER TABLE `ProcessosImovel`
  MODIFY `IdProcessosImovel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `Responsavel`
--
ALTER TABLE `Responsavel`
  MODIFY `IdResponsavel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `RestricoesImovel`
--
ALTER TABLE `RestricoesImovel`
  MODIFY `IdRestricoesImovel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Servicos`
--
ALTER TABLE `Servicos`
  MODIFY `IdServico` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ServicosDocumento`
--
ALTER TABLE `ServicosDocumento`
  MODIFY `IdDocumento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `SolicitacaoDocumetosTarefa`
--
ALTER TABLE `SolicitacaoDocumetosTarefa`
  MODIFY `IdSolicitacaoDocUmento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `TaxasUsuario`
--
ALTER TABLE `TaxasUsuario`
  MODIFY `IdTaxa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `TranferenciaEtapaTarefa`
--
ALTER TABLE `TranferenciaEtapaTarefa`
  MODIFY `IdTransferencia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
