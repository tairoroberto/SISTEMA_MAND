-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 15/12/2014 às 19:34
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
-- Estrutura para tabela `CadastraHistoricoTarefa`
--

CREATE TABLE IF NOT EXISTS `CadastraHistoricoTarefa` (
  `IdHistoricoTarefa` int(11) NOT NULL AUTO_INCREMENT,
  `ConteudoHistoricoTarefa` text NOT NULL,
  `IdEtapaTarefa` int(11) NOT NULL,
  PRIMARY KEY (`IdHistoricoTarefa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Fazendo dump de dados para tabela `CadastraHistoricoTarefa`
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
(54, 'Trabalhando em Etapa 08/12/2014 22:39:01', 78);

-- --------------------------------------------------------

--
-- Estrutura para tabela `CadastraImovel`
--

CREATE TABLE IF NOT EXISTS `CadastraImovel` (
  `IdImovel` int(11) NOT NULL AUTO_INCREMENT,
  `DataEmissao` varchar(15) NOT NULL,
  `CodigoImovel` int(11) NOT NULL,
  `IdEmpresa` int(11) NOT NULL,
  `NomeEmpresa` varchar(255) NOT NULL,
  `IdRequerente` int(11) NOT NULL,
  `NomeRequerente` varchar(255) NOT NULL,
  `NomeExibicao` varchar(100) NOT NULL,
  `NumeroContribuinte` varchar(20) NOT NULL,
  `MatriculaContribuinte` varchar(11) NOT NULL,
  `NomeContribuinte` varchar(100) NOT NULL,
  `CnpjCpf` varchar(15) NOT NULL,
  `LocalImovel` varchar(100) NOT NULL,
  `CepImovel` varchar(10) NOT NULL,
  `CodLog` varchar(10) NOT NULL,
  `AreaTerreno` varchar(10) NOT NULL,
  `Testada` varchar(10) NOT NULL,
  `AreaConstruida` varchar(10) NOT NULL,
  `FracaoIdeal` varchar(10) NOT NULL,
  `AnoConstrucao` varchar(10) NOT NULL,
  `UsoImovel` varchar(50) NOT NULL,
  `Zona13885` varchar(50) NOT NULL,
  `CaBasico13885` varchar(50) NOT NULL,
  `Distrito13885` varchar(50) NOT NULL,
  `SubPrefeitura13885` varchar(100) NOT NULL,
  `CaMaximo13885` varchar(50) NOT NULL,
  `Gabarito13885` varchar(50) NOT NULL,
  `ToImovel13885` varchar(50) NOT NULL,
  `TxPerm13885` varchar(30) NOT NULL,
  `LargVia13885` varchar(30) NOT NULL,
  `ClassificacaoVia13885` varchar(50) NOT NULL,
  `PagGeomapas13885` varchar(100) NOT NULL,
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
  `SituacaoOperacaoUrbana` varchar(10) NOT NULL,
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
  `SituacaoImovel` varchar(255) NOT NULL,
  PRIMARY KEY (`IdImovel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Fazendo dump de dados para tabela `CadastraImovel`
--

INSERT INTO `CadastraImovel` (`IdImovel`, `DataEmissao`, `CodigoImovel`, `IdEmpresa`, `NomeEmpresa`, `IdRequerente`, `NomeRequerente`, `NomeExibicao`, `NumeroContribuinte`, `MatriculaContribuinte`, `NomeContribuinte`, `CnpjCpf`, `LocalImovel`, `CepImovel`, `CodLog`, `AreaTerreno`, `Testada`, `AreaConstruida`, `FracaoIdeal`, `AnoConstrucao`, `UsoImovel`, `Zona13885`, `CaBasico13885`, `Distrito13885`, `SubPrefeitura13885`, `CaMaximo13885`, `Gabarito13885`, `ToImovel13885`, `TxPerm13885`, `LargVia13885`, `ClassificacaoVia13885`, `PagGeomapas13885`, `ZonaLei16050`, `CaBasicoLei16050`, `DistritoLei16050`, `SubPrefeituraLei16050`, `CaMaximoLei16050`, `GabaritoLei16050`, `ToImovelLei16050`, `TxPermLei16050`, `LargViaLei16050`, `ClassificacaoViaLei16050`, `PagGeomapasLei16050`, `ComentariosZoneamento`, `SituacaoOperacaoUrbana`, `ComentariosOperacaoUrbana`, `ExerciciosIptu`, `ValorTolalIptu`, `ExerciciosMultas`, `ValorTolalMultas`, `TotalExercicios`, `ComentariosDividas`, `QuadraFiscal`, `Geomapas`, `ImagemLocal`, `ImagemMapa`, `ImagemLei`, `SituacaoImovel`) VALUES
(1, '27/10/2014', 1, 1, 'Holding Teste', 2, 'Vasco Pinheiro dos Santos', 'Imóvel Teste', '434.343.4343-4', '343.434.343', 'Nome do Contribuiente', '333.333.333-33', 'Rua Aluísio Azevedo,Santana,São Paulo,SP', '02.021-030', '447', '100', '23', '200', '1.4', '2012', 'Comercial', 'ZUPI', '1.0', 'SP', 'Santana', '4.0', '2.0', '4.0', '0.2', '4', 'Residencial', '567', '', '', '', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in volutpat enim. Vivamus eget ligula nisl. Aenean sed metus a turpis pellentesque efficitur vitae id velit. Proin dolor sem, pretium a scelerisque sit amet, lacinia quis magna. Donec tortor ex, interdum sit amet cursus quis, venenatis eget ex. Duis sodales at magna semper lobortis. Cras vel fringilla est. Curabitur auctor consequat eros.', 'Sim', '                                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in volutpat enim. Vivamus eget ligula nisl. Aenean sed metus a turpis pellentesque efficitur vitae id velit. Proin dolor sem, pretium a scelerisque sit amet, lacinia quis magna. Donec tortor ex, interdum sit amet cursus quis, venenatis eget ex. Duis sodales at magna semper lobortis. Cras vel fringilla est. Curabitur auctor consequat eros.', '2013 e 2014', '5.000,00', '2014', '20.000,00', '25.000,00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in volutpat enim. Vivamus eget ligula nisl. Aenean sed metus a turpis pellentesque efficitur vitae id velit. Proin dolor sem, pretium a scelerisque sit amet, lacinia quis magna. Donec tortor ex, interdum sit amet cursus quis, venenatis eget ex. Duis sodales at magna semper lobortis. Cras vel fringilla est. Curabitur auctor consequat eros.', 'a1c3d861b38ba3c610e52a3c8f3beb3e.jpg', 'b835bcb19c4a95ebce9e3e8255141315.jpg', '5cf4ce8036344048fc43a15a06ee8b53.jpg', 'ImagemMapa1-02.021-030.jpg', '', ''),
(2, '29/10/2014', 2, 1, 'Holding Teste', 2, 'Vasco Pinheiro dos Santos', 'Empresa Teste', '432.434.4213-4', '454243244', 'Tairo Roberto Miguel de Assunçâo', '142.341.324-43', 'Rua Esperança,Parque Vila Maria,São Paulo,SP', '02.169-130', '215', '675', '6546', '35365', '0.2', '2010', 'Comercial', 'Norte', '7686', 'São Paulo', 'Vila Maria', '4554', '687346', '7908', '787.99', '23', 'Coletora', 'Págiana 23', '', '', '', '', '', '', '', '', '', '', '', '', 'Sim', '', '2009', '54,35', '2003, 2004, 2013', '55,54', '109,89', '', '471ffa12254fa2f1a839f591fe1f4f98.jpg', 'c0cf14c170ec4f567caaee3b1d7f6731.jpg', '6be9d65de277852694f2780c675f03f4.jpg', 'ImagemMapa2-02.169-130.jpg', '', ''),
(4, '29/10/2014', 3, 1, 'Holding Teste', 1, 'Renato Andrade', 'Tairo Roberto Miguel de Assunçâo', '412.342.3142-1', '543.5', 'Tairo Roberto Miguel de Assunçâo', '324.132.421-34', 'Rua Benfica,Jardim Brasil,São Paulo,SP', '02.226-010', '103', '675', '6546', '35365', '4564', '47', 'Residencia ', 'Norte', '7686', 'São Paulo', 'Santana', '4554', '687346', '7908', '787.99', '23', 'Coletora', 'Págiana 23', '', '', '', '', '', '', '', '', '', '', '', '', 'Sim', '                                                                                                                                ', '2009', '534,25', '2003, 2004, 2013', '53,45', '587,70', '', 'ff9ef06bc3cc250797d4f278f119dbb5.jpg', '63d9f9a3d32620c3003a64d09affede8.jpg', 'fd9f3f0b52ff0eb90f56168a71288e24.jpg', 'ImagemMapa3-02.226-010.jpg', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `CadastraIncorporacao`
--

CREATE TABLE IF NOT EXISTS `CadastraIncorporacao` (
  `IdIncorporacao` int(11) NOT NULL AUTO_INCREMENT,
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
  `ImagemMapaIncorporacao` varchar(200) NOT NULL,
  PRIMARY KEY (`IdIncorporacao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `CadastraIncorporacao`
--

INSERT INTO `CadastraIncorporacao` (`IdIncorporacao`, `SiglaIncorporacao`, `TituloIncorporacao`, `CepIncorporacao`, `LocalIncorporacao`, `NumeroIncorporacao`, `EstadoIncorporacao`, `CidadeIncorporacao`, `BairroIncorporacao`, `MetragemIncorporacao`, `ValorVendaIncorporacao`, `AtividadeIncorporacao`, `ZonemanetoInc13885`, `CaBasicoInc13885`, `CaMaximoInc13885`, `ZonemanetoInc16050`, `CaBasicoInc16050`, `CaMaximoInc16050`, `NomeProprietarioIncorporacao`, `TelProprietarioIncorporacao`, `EmailProprietarioIncorporacao`, `NomeCorreteorIncorpotacao`, `TelefoneCorretorIncorporacao`, `EmailCorretorIncorporacao`, `situacao`, `ProjetoAprovado`, `DocumentacaoIncorporacao`, `TituloFoto1`, `Imagem1`, `TituloFoto2`, `Imagem2`, `TituloFoto3`, `Imagem3`, `TituloFoto4`, `Imagem4`, `TituloFoto5`, `Imagem5`, `TituloFoto6`, `Imagem6`, `ImagemMapaIncorporacao`) VALUES
(1, 'MCMV 1', 'Habitação ', '02.416-060', 'Rua Camarajé', '88', 'SP', 'São Paulo', 'Chácara do Encosto', '100000', '100,00', 'Industrial ', 'ZUPI 1', '1', '4', '', '', '', 'Matheus Camilo de Lima', '(99) 9999-9999', 'atendimento1@mandprojetos.com.br', 'João Souza', '(88) 8888-88888', 'aaa@aaaa.com.br', 'Sim', 'MCMV', '', 'Modelo de foto 1', 'e4c22d2fcb390e82172959b454dce200.jpg', 'Teste fot 2', 'aaf213a83b8c1069d38687c7fe814e53.jpg', 'Teste Foto 3', 'cb089a6bed6e43694072ce5696690e18.gif', 'Teste Fot4', 'b35d2dad50938c022f9adc85361dad08.jpg', 'Teste Fot 5', 'c2ce1757ac89f4f835b27fd13ef7ca1b.jpg', 'Teste Fot 5', '3c2c58a94f2e5bc041f3bbdd0bf51efa.png', 'ImagemMapaIncorporacao02.416-060.jpg'),
(2, '456', 'São Paulo', '02.370-020', 'Rua Antônio Pestana', '213', 'SP', 'São Paulo', 'Tremembé', '2', '4.000.000,00', 'Residencial', '1', '8', '8', '', '', '', 'Karam', '(45) 6789-1234', 'xxxxxxxxxxx', 'Jerry', '(97) 8413-2174', 'eeeeeeeeeee', 'Sim', 'Não existe projeto', 'documentação ok', 'mapa', 'b0b0cf6d572543a29c146f20734b9892.jpg', '', '', '', '', '', '', '', '', '', '', 'ImagemMapaIncorporacao02.370-020.jpg'),
(3, 'MTR 16', 'Pátio  Guido Calói', '05.802-140', 'Avenida Guido Caloi', '', 'SP', 'São Paulo', 'Jardim São Luís (Zona Oeste)', '183875,73', '250.000,00', '', 'MB ZPI 01', '1', '1,5', '', '', '', 'Metro', '', '', '', '', '', 'Não', '', '', 'Earth', '474c8ab3f0053a09043793f8c2bbe9c4.png', '', '', '', '', '', '', '', '', '', '', 'ImagemMapaIncorporacao05.802-140.jpg'),
(4, 'rerer', 'Teste', '02.021-030', 'Rua Aluísio Azevedo', '447', 'SP', 'São Paulo', 'Santana', '4545', '454.545,45', 'Rolagem', 'zup', '1.5', '4.0', '', '', '', 'Wagners', '(22) 2222-22222', 'vasco@freelers.com.br', 'vasco', '(11) 1111-11111', 'atendimento.com.br', 'Sim', '', 'Opção de compra\r\n', 'TITULO 1', 'b0bfc5e0c95c41dd20e1bf174fc3e3b4.jpg', 'TITULO 2', '091982b4ae136ed44e3a2fc6d7640271.jpg', 'TITULO 3', '7946ce8b8f7f018180dd972b28e5785d.jpg', 'TITULO 4', '3bfda92a298dae165c5f26eb3cbd34c6.jpg', 'TITULO 5', '10e19b7a4818572beb3af147b4325109.jpg', 'TITULO 6', '95186bf6f49447be9f9ef92d12be4f25.jpg', 'ImagemMapaIncorporacao02.021-030.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `CadastraLinks`
--

CREATE TABLE IF NOT EXISTS `CadastraLinks` (
  `IdLink` int(11) NOT NULL AUTO_INCREMENT,
  `NomeExibicao` varchar(200) NOT NULL,
  `Url` varchar(300) NOT NULL,
  PRIMARY KEY (`IdLink`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `CadastraLinks`
--

INSERT INTO `CadastraLinks` (`IdLink`, `NomeExibicao`, `Url`) VALUES
(1, 'Teste', 'http://globo.com.br');

-- --------------------------------------------------------

--
-- Estrutura para tabela `CadastraOrcamentoA`
--

CREATE TABLE IF NOT EXISTS `CadastraOrcamentoA` (
  `IdOrcamentoA` int(11) NOT NULL AUTO_INCREMENT,
  `RazaoSocial` varchar(100) NOT NULL,
  `NomeContato` varchar(100) NOT NULL,
  `Taxas` varchar(20) NOT NULL,
  `FormaPagamento` varchar(50) NOT NULL,
  `Prazo` varchar(50) NOT NULL,
  `ComentariosOrcamento` text NOT NULL,
  `TotalOrcamentoA` varchar(20) NOT NULL,
  `DataOrcamentoA` varchar(20) NOT NULL,
  `IdOportunidade` int(11) NOT NULL,
  PRIMARY KEY (`IdOrcamentoA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Fazendo dump de dados para tabela `CadastraOrcamentoA`
--

INSERT INTO `CadastraOrcamentoA` (`IdOrcamentoA`, `RazaoSocial`, `NomeContato`, `Taxas`, `FormaPagamento`, `Prazo`, `ComentariosOrcamento`, `TotalOrcamentoA`, `DataOrcamentoA`, `IdOportunidade`) VALUES
(2, 'Tairo Roberto', 'Tairo Roberto Miguel de Assunçâo', '200,00', 'A Prazo', '15 dias', 'tste', '3.520,00', '23/10/2014', 1),
(4, 'Renato Construtor', 'Renato Andrade', '0', 'ASDSADASD', 'ASDASDAS', 'VLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis fermentum ipsum. Sed felis mauris, congue sed turpis nec, sagittis ornare purus. Pellentesque neque felis, dictum sit amet bibendum eget, pulvinar ac metus. Duis in congue dui, sodales ullamcorper dolor. ', '11.000,00', '27/10/2014', 2),
(5, 'Renato Construtor', 'Renato Andrade', '0', 'ASDSADASD', 'ASDASDAS', 'VLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis fermentum ipsum. Sed felis mauris, congue sed turpis nec, sagittis ornare purus. Pellentesque neque felis, dictum sit amet bibendum eget, pulvinar ac metus. Duis in congue dui, sodales ullamcorper dolor. ', '11.000,00', '27/10/2014', 2),
(6, 'Minha empresa Ltda', 'Tairo', '0', 'A Prazo', '15 dias', 'teste', '20,00', '17/11/2014', 6),
(7, 'Gustavo Carvalho', 'Gustavo', '400,00', 'A Combinar', '90 Dias', '•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n', '10.400,00', '08/12/2014', 7),
(11, 'empresa Ltda', 'Tairo', '0', 'A Prazo', '15 dias', '•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill •	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill •	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill •	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill', '107.807,60', '12/12/2014', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `CadastraOrcamentoB`
--

CREATE TABLE IF NOT EXISTS `CadastraOrcamentoB` (
  `IdOrcamentoB` int(11) NOT NULL AUTO_INCREMENT,
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
  `IdOportunidade` int(11) NOT NULL,
  PRIMARY KEY (`IdOrcamentoB`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Fazendo dump de dados para tabela `CadastraOrcamentoB`
--

INSERT INTO `CadastraOrcamentoB` (`IdOrcamentoB`, `RazaoSocial`, `NomeContato`, `Taxas`, `FormaPagamento`, `Prazo`, `ComentariosOrcamento`, `TotalOrcamentoB`, `TotalServicos`, `DataOrcamentoB`, `IdOrcamentoA`, `IdOportunidade`) VALUES
(2, 'Tairo Roberto', 'Tairo Roberto Miguel de Assunçâo', '200,00', 'A Prazo', '15 dias', ' tste ', '2.520,00', '2.320,00', '23/10/2014', 2, 1),
(4, 'Renato Construtor', 'Renato Andrade', '0', 'ASDSADASD', 'ASDASDAS', ' VLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis fermentum ipsum. Sed felis mauris, congue sed turpis nec, sagittis ornare purus. Pellentesque neque felis, dictum sit amet bibendum eget, pulvinar ac metus. Duis in congue dui, sodales ullamcorper dolor.  ', '22.000,00', '22.000,00', '27/10/2014', 4, 2),
(5, 'Minha empresa Ltda', 'Tairo', '0', 'A Prazo', '15 dias', ' teste ', '20,00', '20,00', '17/11/2014', 6, 6),
(6, 'Gustavo Carvalho', 'Gustavo', '400,00', 'A Combinar', '90 Dias', ' •	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n ', '12.900,00', '12.500,00', '08/12/2014', 7, 7),
(10, 'empresa Ltda', 'Tairo', '0', 'A Prazo', '15 dias', ' •	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill •	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill •	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill •	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill ', '107.807,60', '107.807,60', '12/12/2014', 11, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `CadastraPocesso`
--

CREATE TABLE IF NOT EXISTS `CadastraPocesso` (
  `IdProcesso` int(11) NOT NULL AUTO_INCREMENT,
  `IdEmpresa` int(11) NOT NULL,
  `IdRequerente` int(11) NOT NULL,
  `IdImovel` int(11) NOT NULL,
  `NomeProcesso` varchar(100) NOT NULL,
  `AssuntoProcesso` text NOT NULL,
  PRIMARY KEY (`IdProcesso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Fazendo dump de dados para tabela `CadastraPocesso`
--

INSERT INTO `CadastraPocesso` (`IdProcesso`, `IdEmpresa`, `IdRequerente`, `IdImovel`, `NomeProcesso`, `AssuntoProcesso`) VALUES
(1, 1, 1, 1, '343434343', 'REGULARIZAÇÃO'),
(2, 1, 1, 1, '123123123', 'Licença de Funcionamento Condicionada ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `CadastraSql`
--

CREATE TABLE IF NOT EXISTS `CadastraSql` (
  `IdSql` int(11) NOT NULL AUTO_INCREMENT,
  `NomeSql` varchar(50) NOT NULL,
  PRIMARY KEY (`IdSql`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `CadastraTarefa`
--

CREATE TABLE IF NOT EXISTS `CadastraTarefa` (
  `IdTarefa` int(11) NOT NULL AUTO_INCREMENT,
  `IdEmpresa` int(11) NOT NULL,
  `IdRequerente` int(11) NOT NULL,
  `IdImovel` int(11) NOT NULL,
  `IdOportunidade` int(11) NOT NULL,
  `DataInicio` varchar(15) NOT NULL,
  `DataEntrega` varchar(15) NOT NULL,
  `NomeProjeto` varchar(100) NOT NULL,
  `DescricaoProjeto` varchar(200) NOT NULL,
  `SituacaoTarefa` varchar(50) NOT NULL,
  PRIMARY KEY (`IdTarefa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Fazendo dump de dados para tabela `CadastraTarefa`
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
(21, 4, 4, 1, 0, '08/12/2014', '12/12/2014', 'Aquisição da Area - SMDU-17', 'Apresentação completa para viabilizar junto a Portuguesa', ''),
(22, 4, 4, 1, 0, '08/12/2014', '11/12/2014', 'Processo Licença SEGUR 3', 'Processo Licença SEGUR 3', ''),
(23, 4, 4, 1, 0, '08/12/2014', '11/12/2014', 'Cobrança', 'Entrar em contato com o Alves', ''),
(24, 5, 5, 1, 0, '08/12/2014', '11/12/2014', 'Alvará de Reforma', 'Elaborar Projetos simplificado. OBS: online', ''),
(25, 5, 5, 1, 0, '10/12/2014', '17/12/2014', 'IPTU', 'Negociar', ''),
(26, 0, 0, 0, 7, '08/12/2014', '18/12/2014', 'Oportunidade Nova', 'Ver Inicio de oportunidade', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `CadastroFAQ`
--

CREATE TABLE IF NOT EXISTS `CadastroFAQ` (
  `IdCadastraFaq` int(11) NOT NULL AUTO_INCREMENT,
  `NomeFaq` varchar(200) NOT NULL,
  `Imagem1` varchar(300) NOT NULL,
  `Imagem2` varchar(300) NOT NULL,
  `Imagem3` varchar(300) NOT NULL,
  `Descricao` varchar(200) NOT NULL,
  `IdCategoria` int(11) NOT NULL,
  PRIMARY KEY (`IdCadastraFaq`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `CadastroFAQ`
--

INSERT INTO `CadastroFAQ` (`IdCadastraFaq`, `NomeFaq`, `Imagem1`, `Imagem2`, `Imagem3`, `Descricao`, `IdCategoria`) VALUES
(1, 'Teste de FAQ', '26b9f3b0c19a43f62ca54f93ac8e0da1.JPG', '', '', 'Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste TesteTes', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `CadastroHolding`
--

CREATE TABLE IF NOT EXISTS `CadastroHolding` (
  `IdEmpresa` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`IdEmpresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Fazendo dump de dados para tabela `CadastroHolding`
--

INSERT INTO `CadastroHolding` (`IdEmpresa`, `TipoPessoa`, `RazaoSocial`, `NomeFantasia`, `Atividade`, `Cnpj`, `Ccm`, `Cep`, `Rua`, `Numero`, `Bairro`, `Cidade`, `Telefone1`, `Telefone2`, `Email`, `SenhaWebEmpresa`, `SiteEmpresa`, `IdResponsavel`) VALUES
(1, 'juridica', 'Holding Teste', 'Holding Teste Fantasia', 'Transporte', '34.543.434/3434-34', '323232323232', '02.021-030', 'Rua Aluísio Azevedo', '447', 'Santana', 'São Paulo', '(11) 3578-0840', '(11) 9357-8084', 'vasco@freelers.com.br', '', 'www.freelers.com.br', 0),
(2, 'juridica', 'Mand Projetos', 'Mand Projetos', 'Regularização de imoveis ', '00.000.000/0000-00', '0000000000', '02.021-030', 'Rua Aluísio Azevedo', '447', 'Santana', 'São Paulo', '(11) 3578-0840', '', 'atendimento@mandprojetos.com.br', '', 'www.mandprojetos.com.br', 2),
(4, 'juridica', 'Assoc. Portuguesa de Desportos', 'Portuguesa', 'Clube de Futebol', '61.957.981/0001-54', '', '03.034-070', 'Rua Comendador Nestor Pereira', '33', 'Canindé', 'São Paulo', '', '', 'alves@portuguesa.com.br', '', 'http://www.portuguesa.com.br', 4),
(5, 'fisica', 'Jorge ', 'Kupfer', 'Proprietário', '333.333.333-33', '', '04.515-000', 'Avenida Sabiá', '430', 'Indianópolis', 'São Paulo', '', '', 'feelimport@gmail.com', '', '', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `CadastroRequerente`
--

CREATE TABLE IF NOT EXISTS `CadastroRequerente` (
  `IdRequerente` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `Cpf` varchar(14) NOT NULL,
  `Rg` varchar(20) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `Numero` varchar(20) NOT NULL,
  `Bairro` varchar(100) NOT NULL,
  `Municipio` varchar(100) NOT NULL,
  `Cep` varchar(10) NOT NULL,
  `Telefone1` varchar(14) NOT NULL,
  `Telefone2` varchar(14) NOT NULL,
  `Celular` varchar(14) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `SenhaWeb` varchar(50) NOT NULL,
  PRIMARY KEY (`IdRequerente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Fazendo dump de dados para tabela `CadastroRequerente`
--

INSERT INTO `CadastroRequerente` (`IdRequerente`, `Nome`, `Cpf`, `Rg`, `Endereco`, `Numero`, `Bairro`, `Municipio`, `Cep`, `Telefone1`, `Telefone2`, `Celular`, `Email`, `SenhaWeb`) VALUES
(1, 'Renato Andrade', '333.333.333-33', '333.333.333.3333', 'Rua Belchior Paulo', '21', 'Imirim', 'São Paulo', '02.467-110', '(11) 111-1', '(11) 111-1', '(11) 1111-1111', 'renato.andrade@mandprojetos.com.br', ''),
(2, 'Vasco Pinheiro dos Santos', '', '', 'Rua Aluísio Azevedo', '', 'Santana', 'São Paulo', '02.021-030', '', '', '', 'vasco@freelers.com.br', ''),
(4, 'Assoc Portuguesa de Desportos', '61.967.981-00', '', 'Rua Comendador Nestor Pereira', '33', 'Canindé', 'São Paulo', '03.034-070', '(11) 2125-9453', '', '', 'alves@portuguesa.com.br', ''),
(5, 'Jorge Sabia', '333.333.333-33', '', 'Avenida Sabiá', '430', 'Indianópolis', 'São Paulo', '04.515-000', '', '', '', 'feelimport@gmail.com', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Categoria`
--

CREATE TABLE IF NOT EXISTS `Categoria` (
  `IdCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `NomeCategoria` varchar(200) NOT NULL,
  `SubCategoria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IdCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `Categoria`
--

INSERT INTO `Categoria` (`IdCategoria`, `NomeCategoria`, `SubCategoria`) VALUES
(1, 'Teste Master', 'Teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ComentariosProcessoImovel`
--

CREATE TABLE IF NOT EXISTS `ComentariosProcessoImovel` (
  `IdComentariosProcessoImovel` int(11) NOT NULL AUTO_INCREMENT,
  `Comentarios` text NOT NULL,
  `IdImovel` int(11) NOT NULL,
  PRIMARY KEY (`IdComentariosProcessoImovel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `ComentariosProcessoImovel`
--

INSERT INTO `ComentariosProcessoImovel` (`IdComentariosProcessoImovel`, `Comentarios`, `IdImovel`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in volutpat enim. Vivamus eget ligula nisl. Aenean sed metus a turpis pellentesque efficitur vitae id velit. Proin dolor sem, pretium a scelerisque sit amet, lacinia quis magna. Donec tortor ex, interdum sit amet cursus quis, venenatis eget ex. Duis sodales at magna semper lobortis. Cras vel fringilla est. Curabitur auctor consequat eros.', 0),
(2, '', 2),
(3, '', 3),
(4, '', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Contrato`
--

CREATE TABLE IF NOT EXISTS `Contrato` (
  `IdContrato` int(11) NOT NULL AUTO_INCREMENT,
  `DadosMand` text NOT NULL,
  `DoObjetoDoContrato` text NOT NULL,
  `ObrigacoesContratante` text NOT NULL,
  `ObrigacoesContratado` text NOT NULL,
  `PrecoCondicoesPagamento` text NOT NULL,
  `InadDescumpMulta` text NOT NULL,
  `RecisaoIMotivada` text NOT NULL,
  `Doprazo` text NOT NULL,
  `CondicoesGerais` text NOT NULL,
  `DoForo` text NOT NULL,
  PRIMARY KEY (`IdContrato`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `Contrato`
--

INSERT INTO `Contrato` (`IdContrato`, `DadosMand`, `DoObjetoDoContrato`, `ObrigacoesContratante`, `ObrigacoesContratado`, `PrecoCondicoesPagamento`, `InadDescumpMulta`, `RecisaoIMotivada`, `Doprazo`, `CondicoesGerais`, `DoForo`) VALUES
(1, '\r\n\r\n\r\n\r\n\r\n\r\n\r\n<!--[if gte mso 9]><xml>\r\n <o:OfficeDocumentSettings>\r\n  <o:AllowPNG/>\r\n </o:OfficeDocumentSettings>\r\n</xml><![endif]-->\r\n\r\n<!--[if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves/>\r\n  <w:TrackFormatting/>\r\n  <w:PunctuationKerning/>\r\n  <w:ValidateAgainstSchemas/>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF/>\r\n  <w:LidThemeOther>PT-BR</w:LidThemeOther>\r\n  <w:LidThemeAsian>JA</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables/>\r\n   <w:SnapToGridInCell/>\r\n   <w:WrapTextWithPunct/>\r\n   <w:UseAsianBreakRules/>\r\n   <w:DontGrowAutofit/>\r\n   <w:SplitPgBreakAndParaMark/>\r\n   <w:EnableOpenTypeKerning/>\r\n   <w:DontFlipMirrorIndents/>\r\n   <w:OverrideTableStyleHps/>\r\n   <w:UseFELayout/>\r\n  </w:Compatibility>\r\n  <m:mathPr>\r\n   <m:mathFont m:val="Cambria Math"/>\r\n   <m:brkBin m:val="before"/>\r\n   <m:brkBinSub m:val="&#45;-"/>\r\n   <m:smallFrac m:val="off"/>\r\n   <m:dispDef/>\r\n   <m:lMargin m:val="0"/>\r\n   <m:rMargin m:val="0"/>\r\n   <m:defJc m:val="centerGroup"/>\r\n   <m:wrapIndent m:val="1440"/>\r\n   <m:intLim m:val="subSup"/>\r\n   <m:naryLim m:val="undOvr"/>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]--><!--[if gte mso 9]><xml>\r\n <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"\r\n  DefSemiHidden="true" DefQFormat="false" DefPriority="99"\r\n  LatentStyleCount="276">\r\n  <w:LsdException Locked="false" Priority="0" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>\r\n  <w:LsdException Locked="false" Priority="9" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>\r\n  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>\r\n  <w:LsdException Locked="false" Priority="10" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Title"/>\r\n  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>\r\n  <w:LsdException Locked="false" Priority="11" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>\r\n  <w:LsdException Locked="false" Priority="22" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>\r\n  <w:LsdException Locked="false" Priority="20" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="59" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Table Grid"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>\r\n  <w:LsdException Locked="false" Priority="1" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>\r\n  <w:LsdException Locked="false" Priority="34" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>\r\n  <w:LsdException Locked="false" Priority="29" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>\r\n  <w:LsdException Locked="false" Priority="30" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="19" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="21" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="31" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>\r\n  <w:LsdException Locked="false" Priority="32" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>\r\n  <w:LsdException Locked="false" Priority="33" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>\r\n  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>\r\n  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>\r\n </w:LatentStyles>\r\n</xml><![endif]-->\r\n\r\n<!--[if gte mso 10]>\r\n<style>\r\n /* Style Definitions */\r\ntable.MsoNormalTable\r\n	{mso-style-name:"Table Normal";\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-noshow:yes;\r\n	mso-style-priority:99;\r\n	mso-style-parent:"";\r\n	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;\r\n	mso-para-margin-top:0cm;\r\n	mso-para-margin-right:0cm;\r\n	mso-para-margin-bottom:10.0pt;\r\n	mso-para-margin-left:0cm;\r\n	mso-pagination:widow-orphan;\r\n	font-size:12.0pt;\r\n	font-family:Cambria;\r\n	mso-ascii-font-family:Cambria;\r\n	mso-ascii-theme-font:minor-latin;\r\n	mso-hansi-font-family:Cambria;\r\n	mso-hansi-theme-font:minor-latin;\r\n	mso-fareast-language:JA;}\r\n</style>\r\n<![endif]-->\r\n\r\n\r\n\r\n<!--StartFragment-->\r\n\r\n<p class="MsoNormalCxSpFirst" style="text-align:justify;text-justify:inter-ideograph"><b><span style="font-family:Calibri;\r\nmso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-font-family:\r\nArial">CONTRATADA:</span></b><span style="font-family:Calibri;mso-ascii-theme-font:\r\nmajor-latin;mso-hansi-theme-font:major-latin;mso-bidi-font-family:Arial"> <b>MAND ASSESSORIA NA GESTÃO DE PROJETOS\r\nLTDA., </b>pessoa &nbsp;jurídica de direito privado, titular do\r\nCNPJ/MF nº <b>13.790.913/0001-09</b>, estabelecida na Aluísio Azevedo,\r\nnº 447, conj. 03 – CEP: 02021-030, Santana, São Paulo, SP.<o:p></o:p></span></p>\r\n\r\n<!--EndFragment-->', '<br>', 'Cláusula 2ª. O <b>CONTRATANTE</b> deverá fornecer ao <b>CONTRATADO</b> todas as informações necessárias á realização do serviço, devendo especificar os detalhes necessários á perfeita consecução do mesmo, e a forma de como ele deve ser entregue.', 'Cláusula 4ª. É dever do <b>CONTRATADO</b> oferecer ao contratante a cópia do presente instrumento, contendo todas as especificidades da prestação de serviço contratada.', 'Cláusula 5ª. O presente projeto será remunerado pela quantia de', 'Cláusula 6ª. Em caso de inadimplemento por parte do <b>CONTRATANTE</b> quanto ao pagamento do serviço prestado, deverá incidir sobre o valor do presente instrumento, multa contratual de 2% sobre o valor devido, juros de 1% ao mês e correção monetária.', 'Cláusula 8ª. Poderá o presente instrumento ser rescindido por qualquer uma das partes, em qualquer momento, sem que haja qualquer tipo de motivo relevante, não obstante a outra parte deverá ser avisada previamente por escrito, no prazo de 20 dias.', 'Cláusula 10ª. O <b>CONTRATADO</b> assume o compromisso de realizar os serviços contratados dentro do prazo máximo de 90 dias uteis., contados a partir do pagamento da entrada e envio de todo material necessário para o desenvolvimento do projeto. Após a entrega do serviço a <b>CONTRATADA</b> dispõe uma garantia de 30 dias para eventuais ajustes simples, correções, dúvidas ou erros encontrados no projeto. Ultrapassando este prazo, todo ajuste ou correção serão cobrados R$80,00 por hora demandada.', 'Cláusula 11ª. Fica compactuado entre as partes a total inexistência de vínculo trabalhista entre as partes contratantes, excluindo as obrigações previdenciárias e os encargos sociais, não havendo entre <b>CONTRATADO</b> e <b>CONTRATANTE</b> qualquer tipo de relação de subordinação.', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n<!--[if gte mso 9]><xml>\r\n <o:OfficeDocumentSettings>\r\n  <o:AllowPNG/>\r\n </o:OfficeDocumentSettings>\r\n</xml><![endif]-->\r\n\r\n<!--[if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves/>\r\n  <w:TrackFormatting/>\r\n  <w:PunctuationKerning/>\r\n  <w:ValidateAgainstSchemas/>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF/>\r\n  <w:LidThemeOther>PT-BR</w:LidThemeOther>\r\n  <w:LidThemeAsian>JA</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables/>\r\n   <w:SnapToGridInCell/>\r\n   <w:WrapTextWithPunct/>\r\n   <w:UseAsianBreakRules/>\r\n   <w:DontGrowAutofit/>\r\n   <w:SplitPgBreakAndParaMark/>\r\n   <w:EnableOpenTypeKerning/>\r\n   <w:DontFlipMirrorIndents/>\r\n   <w:OverrideTableStyleHps/>\r\n   <w:UseFELayout/>\r\n  </w:Compatibility>\r\n  <m:mathPr>\r\n   <m:mathFont m:val="Cambria Math"/>\r\n   <m:brkBin m:val="before"/>\r\n   <m:brkBinSub m:val="&#45;-"/>\r\n   <m:smallFrac m:val="off"/>\r\n   <m:dispDef/>\r\n   <m:lMargin m:val="0"/>\r\n   <m:rMargin m:val="0"/>\r\n   <m:defJc m:val="centerGroup"/>\r\n   <m:wrapIndent m:val="1440"/>\r\n   <m:intLim m:val="subSup"/>\r\n   <m:naryLim m:val="undOvr"/>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]--><!--[if gte mso 9]><xml>\r\n <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"\r\n  DefSemiHidden="true" DefQFormat="false" DefPriority="99"\r\n  LatentStyleCount="276">\r\n  <w:LsdException Locked="false" Priority="0" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>\r\n  <w:LsdException Locked="false" Priority="9" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>\r\n  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>\r\n  <w:LsdException Locked="false" Priority="10" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Title"/>\r\n  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>\r\n  <w:LsdException Locked="false" Priority="11" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>\r\n  <w:LsdException Locked="false" Priority="22" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>\r\n  <w:LsdException Locked="false" Priority="20" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="59" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Table Grid"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>\r\n  <w:LsdException Locked="false" Priority="1" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>\r\n  <w:LsdException Locked="false" Priority="34" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>\r\n  <w:LsdException Locked="false" Priority="29" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>\r\n  <w:LsdException Locked="false" Priority="30" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="19" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="21" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="31" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>\r\n  <w:LsdException Locked="false" Priority="32" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>\r\n  <w:LsdException Locked="false" Priority="33" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>\r\n  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>\r\n  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>\r\n </w:LatentStyles>\r\n</xml><![endif]-->\r\n\r\n<!--[if gte mso 10]>\r\n<style>\r\n /* Style Definitions */\r\ntable.MsoNormalTable\r\n	{mso-style-name:"Table Normal";\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-noshow:yes;\r\n	mso-style-priority:99;\r\n	mso-style-parent:"";\r\n	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;\r\n	mso-para-margin-top:0cm;\r\n	mso-para-margin-right:0cm;\r\n	mso-para-margin-bottom:10.0pt;\r\n	mso-para-margin-left:0cm;\r\n	mso-pagination:widow-orphan;\r\n	font-size:12.0pt;\r\n	font-family:Cambria;\r\n	mso-ascii-font-family:Cambria;\r\n	mso-ascii-theme-font:minor-latin;\r\n	mso-hansi-font-family:Cambria;\r\n	mso-hansi-theme-font:minor-latin;\r\n	mso-fareast-language:JA;}\r\n</style>\r\n<![endif]-->\r\n\r\n\r\n\r\n<!--StartFragment-->\r\n\r\n<p class="MsoNormalCxSpFirst" style="text-align:justify;text-justify:inter-ideograph"><span style="font-family:Calibri;mso-ascii-theme-font:major-latin;mso-hansi-theme-font:\r\nmajor-latin;mso-bidi-font-family:Arial">As partes elegem, para dirimir\r\nquaisquer dúvidas oriundas deste contrato, o Fórum Regional de Santana do\r\nEstado de São Paulo.</span></p><p class="MsoNormalCxSpFirst" style="text-align:justify;text-justify:inter-ideograph"><span style="font-family: Calibri;">E por estarem justas e contratadas, as\r\npartes firmam o presente instrumento particular em 02 (duas) vias de igual teor\r\ne forma, na melhor forma de direito.</span></p>\r\n\r\n<!--EndFragment-->');

-- --------------------------------------------------------

--
-- Estrutura para tabela `DadosAdicionaisImovel`
--

CREATE TABLE IF NOT EXISTS `DadosAdicionaisImovel` (
  `IdDadosAdicionais` int(11) NOT NULL AUTO_INCREMENT,
  `TituloDadosAdicionais` varchar(50) NOT NULL,
  `ComentarioDadosAdicionais` varchar(300) NOT NULL,
  `IdImovel` int(11) NOT NULL,
  PRIMARY KEY (`IdDadosAdicionais`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Fazendo dump de dados para tabela `DadosAdicionaisImovel`
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
-- Estrutura para tabela `DetalheProcesso`
--

CREATE TABLE IF NOT EXISTS `DetalheProcesso` (
  `IdDetalheProcesso` int(11) NOT NULL AUTO_INCREMENT,
  `DataProcessoDetalhe` varchar(15) NOT NULL,
  `UnidadeProcessoDetahe` varchar(100) NOT NULL,
  `DescricaoProcessoDetahe` varchar(100) NOT NULL,
  `DomProcessoDetalhe` varchar(20) NOT NULL,
  `Data` varchar(15) NOT NULL,
  `AcaoProcessoDetalhe` varchar(50) NOT NULL,
  `IdProcesso` int(11) NOT NULL,
  PRIMARY KEY (`IdDetalheProcesso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Fazendo dump de dados para tabela `DetalheProcesso`
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
(9, '15/12/2014', 'tucuruvi', 'teste com DOM', 'checado', '15/12/2014', 'Indeferido', 1),
(10, '15/12/2014', 'tucuruvi', 'teste com DOM', 'checado', '15/12/2014', 'Deferido', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `DocumentosUsuario`
--

CREATE TABLE IF NOT EXISTS `DocumentosUsuario` (
  `IdDocumento` int(11) NOT NULL AUTO_INCREMENT,
  `NomeDocumento` varchar(300) NOT NULL,
  `data` varchar(20) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  PRIMARY KEY (`IdDocumento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `DocumentosUsuario`
--

INSERT INTO `DocumentosUsuario` (`IdDocumento`, `NomeDocumento`, `data`, `IdUsuario`) VALUES
(1, 'Captura de Tela 2014-10-28 às 10.58.46.png-1adcc50ac91a048f1ce0cdb4a79f481e.png', '28/10/201', 10),
(2, 'Captura de Tela 2014-10-10 às 11.19.41.png-13d0be9678f343e4da3ca571b008df95.png', '28/10/201', 10),
(3, 'customer-processing-order.php-b6fe4d47fbfafc2a6fc1e7c07d4783a2.', '28/10/201', 10),
(4, '10439011_10201064397010840_9143389223390343206_n.jpg-a1919789a996e4870f9d6d48a5a97f30.jpg', '10/11/2014', 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `EtapaTarefa`
--

CREATE TABLE IF NOT EXISTS `EtapaTarefa` (
  `IdEtapaTarefa` int(11) NOT NULL AUTO_INCREMENT,
  `IdUsuario` int(11) NOT NULL,
  `TituloEtapa` varchar(100) NOT NULL,
  `DescricaoEtapa` varchar(200) NOT NULL,
  `DataEntregaEtapa` varchar(15) NOT NULL,
  `SituacaoEtapaTarefa` varchar(100) NOT NULL,
  `IdTarefa` int(11) NOT NULL,
  PRIMARY KEY (`IdEtapaTarefa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Fazendo dump de dados para tabela `EtapaTarefa`
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
(57, 11, 'Relatório Defesa', '', '09/12/2014', 'Trabalhando', 21),
(58, 11, 'Assinatura Presidente Lusa', '', '09/12/2014', 'Trabalhando', 21),
(59, 11, 'Elaboração Contrato', '', '08/12/2014', 'Trabalhando', 21),
(60, 2, 'Assinatura Contrato', '', '09/12/2014', 'Trabalhando', 21),
(61, 11, 'Peça Gráfica ', '', '09/12/2014', 'Trabalhando', 21),
(62, 5, 'Copias Processos', '', '10/12/2014', 'Trabalhando', 21),
(63, 5, 'Montagem', '', '10/12/2014', 'Trabalhando', 21),
(64, 11, 'Reunião Haddad', '', '12/12/2014', 'Trabalhando', 21),
(65, 11, 'Reunião Incorp/ Invest.', '', '12/12/2014', 'Trabalhando', 21),
(66, 4, 'Protocolar Processo', '', '11/12/2014', 'Trabalhando', 21),
(67, 5, 'Solicitar dos. Técnica', '', '08/12/2014', 'Trabalhando', 22),
(68, 5, 'copia Documento', '', '10/12/2014', 'Trabalhando', 22),
(69, 11, 'Junção do Doc. Comum', '', '11/12/2014', 'Trabalhando', 22),
(70, 2, 'Cobrar Notas', '', '11/12/2014', 'Trabalhando', 23),
(71, 12, 'Vistoria', '', '10/12/2014', 'Trabalhando', 24),
(72, 4, 'Correções Plantas', '', '10/12/2014', 'Trabalhando', 24),
(73, 5, 'Atuação Processo', '', '11/12/2014', 'Trabalhando', 24),
(74, 11, 'Instruir Processo alteração', '', '10/12/2014', 'Trabalhando', 25),
(75, 11, 'Apresentar ao Auditor', '', '12/12/2014', 'Trabalhando', 25),
(76, 4, 'Protocolar Processo', '', '15/12/2014', 'Trabalhando', 25),
(77, 2, 'Apresentar Proposta', '', '17/12/2014', 'Trabalhando', 25),
(78, 4, 'Verificar oportunidade', 'Verificar oportunidade nova', '18/12/2014', 'Trabalhando', 26);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Eventos`
--

CREATE TABLE IF NOT EXISTS `Eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `idusuario` int(11) NOT NULL,
  `allDay` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Fazendo dump de dados para tabela `Eventos`
--

INSERT INTO `Eventos` (`id`, `title`, `start`, `end`, `idusuario`, `allDay`) VALUES
(1, 'eee titÃ£o', '2014-10-28 00:00:00', '2014-10-28 00:00:00', 3, 0),
(2, 'Teste', '2014-10-09 00:00:00', '2014-10-09 00:00:00', 2, 0),
(3, 'REUNIAO', '2014-12-18 00:00:00', '2014-12-18 00:00:00', 2, 0),
(4, 'ATENDER COMUNIQUE', '2014-12-24 00:00:00', '2014-12-24 00:00:00', 2, 0),
(5, 'ALORA', '2014-12-20 00:00:00', '2014-12-20 00:00:00', 2, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `HistoricoImovel`
--

CREATE TABLE IF NOT EXISTS `HistoricoImovel` (
  `IdHistoricoImovel` int(11) NOT NULL AUTO_INCREMENT,
  `SqlImovel` varchar(50) NOT NULL,
  `Data` varchar(5) NOT NULL,
  `AreaTerrenoHistorico` varchar(20) NOT NULL,
  `AreaEdificada` varchar(20) NOT NULL,
  `SituacaoHistorico` varchar(50) NOT NULL,
  `IdImovel` int(11) NOT NULL,
  PRIMARY KEY (`IdHistoricoImovel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Fazendo dump de dados para tabela `HistoricoImovel`
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
-- Estrutura para tabela `HistoricoIncorporacao`
--

CREATE TABLE IF NOT EXISTS `HistoricoIncorporacao` (
  `IdHistoricoIncorporacao` int(11) NOT NULL AUTO_INCREMENT,
  `DataHistoricoIncorporacao` varchar(20) NOT NULL,
  `DescricaoHistoricoIncorporacao` varchar(300) NOT NULL,
  `IdIncorporacao` int(11) NOT NULL,
  PRIMARY KEY (`IdHistoricoIncorporacao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Fazendo dump de dados para tabela `HistoricoIncorporacao`
--

INSERT INTO `HistoricoIncorporacao` (`IdHistoricoIncorporacao`, `DataHistoricoIncorporacao`, `DescricaoHistoricoIncorporacao`, `IdIncorporacao`) VALUES
(1, '12/11/2045', 'teste', 2),
(2, '', '', 3),
(3, '01/01/0101', 'EWEWEWEWE', 4),
(4, '44/44/4444', 'EWEWEWEWEWEWEWEW', 4),
(5, '22/22/2222', 'SDSDSDSD', 4),
(6, '22/22/3232', '232323232', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `HistoricoOportunidade`
--

CREATE TABLE IF NOT EXISTS `HistoricoOportunidade` (
  `IdHistoricoOprtunidade` int(11) NOT NULL AUTO_INCREMENT,
  `DataHistoricoOportunidade` varchar(20) NOT NULL,
  `TipoHistoricoOportunidade` varchar(50) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `IdOportunidade` int(11) NOT NULL,
  PRIMARY KEY (`IdHistoricoOprtunidade`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Fazendo dump de dados para tabela `HistoricoOportunidade`
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
(43, '12/12/2014', 'Alterado', 'Viável', 3),
(44, '12/12/2014', 'Alterado', 'Enviado para cliente', 3),
(45, '12/12/2014', 'Alterado', 'Enviar outro orçamento para cliente', 3),
(46, '12/12/2014', 'Alterado', 'Enviado para cliente', 3),
(47, '12/12/2014', 'Alterado', 'Enviar outro orçamento para cliente', 3),
(48, '12/12/2014', 'Alterado', 'Enviado para cliente', 3),
(49, '12/12/2014', 'Alterado', 'Enviar outro orçamento para cliente', 3),
(50, '12/12/2014', 'Alterado', 'Enviado para cliente', 3),
(51, '13/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3),
(52, '14/12/2014', 'Alterado', 'Orçamento aceito pelo cliente', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `LinkOrcamentoB`
--

CREATE TABLE IF NOT EXISTS `LinkOrcamentoB` (
  `IdLinkOrcamnetoB` int(11) NOT NULL AUTO_INCREMENT,
  `Endereco` varchar(300) NOT NULL,
  `DataEnvio` varchar(20) NOT NULL,
  `IdOportunidade` int(11) NOT NULL,
  `IdOrcamentoB` int(11) NOT NULL,
  PRIMARY KEY (`IdLinkOrcamnetoB`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Fazendo dump de dados para tabela `LinkOrcamentoB`
--

INSERT INTO `LinkOrcamentoB` (`IdLinkOrcamnetoB`, `Endereco`, `DataEnvio`, `IdOportunidade`, `IdOrcamentoB`) VALUES
(2, 'orca/index.php?IdOportunidade=1&IdOrcamentoB=2', '23/10/2014', 1, 2),
(4, 'orca/index.php?IdOportunidade=2&IdOrcamentoB=4', '27/10/2014', 2, 4),
(5, 'orca/index.php?IdOportunidade=6&IdOrcamentoB=5', '17/11/2014', 6, 5),
(6, 'orca/index.php?IdOportunidade=7&IdOrcamentoB=6', '08/12/2014', 7, 6),
(10, 'orca/index.php?IdOportunidade=3&IdOrcamentoB=10', '12/12/2014', 3, 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Oportunidade`
--

CREATE TABLE IF NOT EXISTS `Oportunidade` (
  `IdOportunidade` int(11) NOT NULL AUTO_INCREMENT,
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
  `IdUsuario` int(11) NOT NULL,
  PRIMARY KEY (`IdOportunidade`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Fazendo dump de dados para tabela `Oportunidade`
--

INSERT INTO `Oportunidade` (`IdOportunidade`, `TipoContato`, `Origem`, `TipoCadastro`, `RazaoSocial`, `NomeContato`, `CnpjCpf`, `Atividade`, `Celular`, `Telefone`, `Email`, `ServicoSolicitado`, `EnderecoArea`, `ContribuinteIptu`, `ComentariosSolicitacao`, `DataSolicitacao`, `DataViabilidade`, `DataProrrogacao`, `Status`, `ValorQueClienteQueria`, `Viabilidade`, `IdUsuario`) VALUES
(1, 'Novo Cliente', 'Indicação', 'Pessoa Fisica', 'Tairo Roberto', 'Tairo Roberto Miguel de Assunçâo', '019.602.181-23', 'Desenvolvimento', '(41) 2431-24324', '(42) 3143-2432', 'tairoroberto@hotmail.com', 'Desenvolvimento de sistema Mand', 'Rua Esperanca 215', '43243434', 'Os valores estão acima do que planejei', '2014/10/23', '23/10/2014', '', 'Orçamento Aceito', '', 'SIM', 4),
(2, 'Novo Cliente', 'Prospecção', 'Pessoa Juridica', 'Renato Construtor', 'Renato Andrade', '09.090.000/0009-09', 'Chupetinha', '(11) 9898-99898', '(11) 1334-3434', 'renato.andrade@mandprojetos.com.br', 'AVCB, licença de Funcionamento condicionada', 'Aluizio Azevedo, 447, sala 2', '3343434343', 'Os valores estão acima do que planejei', '2014/10/27', '27/10/2014', '', 'Orçamento Aceito', 'R$10,00', 'SIM', 4),
(3, 'Novo Cliente', 'Prospecção', 'Pessoa Fisica', 'empresa Ltda', 'Tairo', '000.000.000-01', 'Desenvolvimento', '(53) 4254-35435', '(54) 3254-3543', 'tairoroberto@hotmail.com', 'sem nada', 'Rua Esperanca 215', '54435', ' Comentários', '2014/10/30', '12/12/2014', '', 'Orçamento Aceito', '', 'SIM', 4),
(4, 'Cliente existente', 'Site', 'Pessoa Fisica', 'Tairo Roberto', 'Tairo 2', '000.000.000-02', 'Desenvolvimento', '(45) 5235-43252', '(53) 2545-4354', 'tairoroberto@hotmail.com', 'uiewyt', 'Rua Esperanca 215555', 'vbafpgçjsdknvm', ' Comentários', '2014/10/31', '', '', 'Ficha Tecnica', '', '', 4),
(5, 'Novo Cliente', 'Prospecção', 'Pessoa Fisica', 'fsdfdf', 'fdfdf', '333.333.333-33', 'ererererere', '(11) 1111-11111', '(11) 1111-1111', 'vasco@freelers.com.br', 'ficha tecnica', 'aluisio', '34343434343', ' Comentários', '2014/11/17', '', '', 'Ficha Tecnica', '', '', 4),
(6, 'Novo Cliente', 'Prospecção', 'Pessoa Fisica', 'Minha empresa Ltda', 'Tairo', '000.000.000-00', 'Desenvolvimento', '(00) 0000-00000', '(00) 0000-0000', 'tairoroberto@hotmail.com', 'Desenvolvimento de sistema Mand', 'Rua Esperanca 215', '32144', 'teste', '2014/11/17', '17/11/2014', '', 'Orçamento Aceito', '', 'SIM', 4),
(7, 'Novo Cliente', 'Indicação', 'Pessoa Fisica', 'Gustavo Carvalho', 'Gustavo', '333.333.333-33', 'Escola de idiomas', '(11) 1323-23232', '(11) 3035-3000', 'atendimento@mandprojetos.com.br', 'Alvará de Funcionamento', 'Avenida Professor Luciano Gualberto, nº 908', '2014-0.183.100-8', 'Segundo a relação de documentos retirada na Subprefeitura do Butantã, precisaremos de:\r\n- Cópia do CREA e/ou CAU\r\n- Cópia do AVS ou equivalente quando obrigatório\r\n- Cópia do Certificado de Acessibilidade ou equivalente quando obrigatório\r\n- Cópia do Termo de Anuência ou Permissão quando se tratar de imóvel de propriedade estatal\r\n- CEDI – Cadastro de Edificações com a Irregularidade do imóvel\r\n- Relação de Indisponibilidades / Impossibilidades emitido pelo SLEA\r\n- Preenchimento de algumas declarações e atestados que vêm anexo nesta relação\r\nde documentos para efetuação do requerimento.', '2014/12/08', '08/12/2014', '', 'Orçamento Aceito', '', 'SIM', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `OrcamentoAServicos`
--

CREATE TABLE IF NOT EXISTS `OrcamentoAServicos` (
  `IdOrcamentoAServico` int(11) NOT NULL AUTO_INCREMENT,
  `IdServico` int(11) NOT NULL,
  `Valor` varchar(20) NOT NULL,
  `IdOrcamentoA` int(11) NOT NULL,
  `IdOportunidade` int(11) NOT NULL,
  PRIMARY KEY (`IdOrcamentoAServico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Fazendo dump de dados para tabela `OrcamentoAServicos`
--

INSERT INTO `OrcamentoAServicos` (`IdOrcamentoAServico`, `IdServico`, `Valor`, `IdOrcamentoA`, `IdOportunidade`) VALUES
(5, 1, '20,00 ', 2, 1),
(6, 1, '300,00 ', 2, 1),
(7, 1, '3.000,00 ', 2, 1),
(14, 2, '1.000,00 ', 4, 2),
(15, 1, '10.000,00 ', 4, 2),
(16, 2, '1.000,00 ', 4, 2),
(17, 1, '10.000,00 ', 4, 2),
(18, 1, '20,00 ', 6, 6),
(19, 1, '8.000,00 ', 7, 7),
(20, 1, '2.000,00 ', 7, 7),
(26, 1, '54.353,25 ', 11, 3),
(27, 1, '53.454,35 ', 11, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `OrcamentoBServicos`
--

CREATE TABLE IF NOT EXISTS `OrcamentoBServicos` (
  `IdOrcamentoBServico` int(11) NOT NULL AUTO_INCREMENT,
  `IdServico` int(11) NOT NULL,
  `Valor` varchar(20) NOT NULL,
  `IdOrcamentoB` int(11) NOT NULL,
  `IdOportunidade` int(11) NOT NULL,
  PRIMARY KEY (`IdOrcamentoBServico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Fazendo dump de dados para tabela `OrcamentoBServicos`
--

INSERT INTO `OrcamentoBServicos` (`IdOrcamentoBServico`, `IdServico`, `Valor`, `IdOrcamentoB`, `IdOportunidade`) VALUES
(5, 1, '20,00 ', 2, 1),
(6, 1, '300,00 ', 2, 1),
(7, 1, '2.000,00', 2, 1),
(14, 2, '1.000,00 ', 4, 2),
(15, 1, '10.000,00 ', 4, 2),
(16, 2, '1.000,00 ', 4, 2),
(17, 1, '10.000,00 ', 4, 2),
(18, 1, '20,00 ', 5, 6),
(19, 1, '8.500,00', 6, 7),
(20, 1, '4.000,00', 6, 7),
(26, 1, '54.353,25 ', 10, 3),
(27, 1, '53.454,35 ', 10, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `OutrosLotesImovel`
--

CREATE TABLE IF NOT EXISTS `OutrosLotesImovel` (
  `IdOutrosLotes` int(11) NOT NULL AUTO_INCREMENT,
  `SqlOutroLotes` varchar(20) NOT NULL,
  `AreaTerrenoOutrosLotes` varchar(20) NOT NULL,
  `AreaConstruidaOutrosLotes` varchar(20) NOT NULL,
  `TestadaOutrosLotes` varchar(20) NOT NULL,
  `MatriculaOutrosLotes` varchar(50) NOT NULL,
  `IdImovel` int(11) NOT NULL,
  PRIMARY KEY (`IdOutrosLotes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Fazendo dump de dados para tabela `OutrosLotesImovel`
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
(10, '543.253.2454-3', '3444', '4343', '4343', '4324', 4);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Fazendo dump de dados para tabela `PermissoesUsuario`
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
-- Estrutura para tabela `ProcessosImovel`
--

CREATE TABLE IF NOT EXISTS `ProcessosImovel` (
  `IdProcessosImovel` int(11) NOT NULL AUTO_INCREMENT,
  `AnoProcesso` varchar(5) NOT NULL,
  `Interessado` varchar(100) NOT NULL,
  `Assunto` varchar(500) NOT NULL,
  `Situacao` varchar(50) NOT NULL,
  `IdImovel` int(11) NOT NULL,
  PRIMARY KEY (`IdProcessosImovel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Fazendo dump de dados para tabela `ProcessosImovel`
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
-- Estrutura para tabela `Responsavel`
--

CREATE TABLE IF NOT EXISTS `Responsavel` (
  `IdResponsavel` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`IdResponsavel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Fazendo dump de dados para tabela `Responsavel`
--

INSERT INTO `Responsavel` (`IdResponsavel`, `Nome`, `Cpf`, `Rg`, `Cep`, `Rua`, `Numero`, `Bairro`, `Cidade`, `Telefone`, `Celular`, `Email`, `SenhaWebResponsavel`) VALUES
(1, 'Vasco Pinheiro dos Santos', 333333, '333.333.333.33', '02.416-06', 'Rua Camarajé', '34', 'Chácara do Encosto', 'São Paulo', '(11) 3434-3434', '', 'vasco@freelers.com.br', ''),
(2, 'Vasco Pinheiro dos Santos', 0, '', '', '', '', '', '', '', '', '', ''),
(3, 'Youssef Ahmad Sleiman', 187010, '', '', '', '', '', '', '', '', '', ''),
(4, '', 0, '', '', '', '', '', '', '', '', '', ''),
(5, '', 0, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `RestricoesImovel`
--

CREATE TABLE IF NOT EXISTS `RestricoesImovel` (
  `IdRestricoesImovel` int(11) NOT NULL AUTO_INCREMENT,
  `SqlRestricoes` varchar(50) NOT NULL,
  `Tombamento` varchar(10) NOT NULL,
  `AreaManancial` varchar(10) NOT NULL,
  `AreaContaminada` varchar(10) NOT NULL,
  `PatrimonioAmbiental` varchar(10) NOT NULL,
  `ProtecaoAmbiental` varchar(10) NOT NULL,
  `PedenciaFinanceira` varchar(10) NOT NULL,
  `IdImovel` int(11) NOT NULL,
  PRIMARY KEY (`IdRestricoesImovel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Fazendo dump de dados para tabela `RestricoesImovel`
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
(9, '523.454.3253-4', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Servicos`
--

CREATE TABLE IF NOT EXISTS `Servicos` (
  `IdServico` int(11) NOT NULL AUTO_INCREMENT,
  `TituloServico` varchar(100) NOT NULL,
  `ExplicacaoServico` text NOT NULL,
  PRIMARY KEY (`IdServico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `Servicos`
--

INSERT INTO `Servicos` (`IdServico`, `TituloServico`, `ExplicacaoServico`) VALUES
(1, 'Auto de Licença', '•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n•	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam enim ac mollis. Curabitur in ipsum eget dolor varius fringill\r\n');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ServicosDocumento`
--

CREATE TABLE IF NOT EXISTS `ServicosDocumento` (
  `IdDocumento` int(11) NOT NULL AUTO_INCREMENT,
  `NomeDocumento` varchar(100) NOT NULL,
  `IdServico` int(11) NOT NULL,
  PRIMARY KEY (`IdDocumento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Fazendo dump de dados para tabela `ServicosDocumento`
--

INSERT INTO `ServicosDocumento` (`IdDocumento`, `NomeDocumento`, `IdServico`) VALUES
(1, 'IPTU', 1),
(2, 'SQL', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `SolicitacaoDocumetosTarefa`
--

CREATE TABLE IF NOT EXISTS `SolicitacaoDocumetosTarefa` (
  `IdSolicitacaoDocUmento` int(11) NOT NULL AUTO_INCREMENT,
  `IdEmpresa` int(11) NOT NULL,
  `IdRequerente` int(11) NOT NULL,
  `IdImovel` int(11) NOT NULL,
  `IdOportunidade` int(11) NOT NULL,
  `IdTarefa` int(11) NOT NULL,
  `NomeUsuario` varchar(50) NOT NULL,
  `DocumentosSolicitacao` text NOT NULL,
  `DataSolicitacao` varchar(15) NOT NULL,
  `Solicitar` varchar(50) DEFAULT NULL,
  `Recebido` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdSolicitacaoDocUmento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Fazendo dump de dados para tabela `SolicitacaoDocumetosTarefa`
--

INSERT INTO `SolicitacaoDocumetosTarefa` (`IdSolicitacaoDocUmento`, `IdEmpresa`, `IdRequerente`, `IdImovel`, `IdOportunidade`, `IdTarefa`, `NomeUsuario`, `DocumentosSolicitacao`, `DataSolicitacao`, `Solicitar`, `Recebido`) VALUES
(1, 1, 2, 1, 0, 8, 'Vasco Pinheiro', 'avcb', '28/10/2014', '31/10/2014', '07/11/2014'),
(2, 0, 0, 0, 0, 9, 'Matheus Camilo', 'Cpf,Cnpj', '30/10/2014', '', ''),
(3, 0, 0, 0, 0, 9, 'Tairo Roberto Miguel de Assunçâo', 'Rg,CNH', '31/10/2014', '', ''),
(4, 0, 0, 0, 4, 9, 'Matheus Camilo', 'IPTU 12222', '31/10/2014', '31/10/2014', '31/10/2014'),
(5, 1, 1, 4, 0, 11, 'Matheus Camilo', 'adfadfadf', '05/11/2014', '05/11/2014', '07/11/2014'),
(6, 1, 2, 1, 0, 8, 'Tairo Roberto Miguel de Assunçâo', 'iptu', '07/11/2014', '07/11/2014', '07/11/2014'),
(7, 0, 0, 0, 7, 26, 'Matheus Camilo', 'Sql certo', '08/12/2014', '08/12/2014', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `TaxasUsuario`
--

CREATE TABLE IF NOT EXISTS `TaxasUsuario` (
  `IdTaxa` int(11) NOT NULL AUTO_INCREMENT,
  `DescricaoTaxa` varchar(100) NOT NULL,
  `ValorTaxa` varchar(20) NOT NULL,
  `DataTaxa` varchar(20) NOT NULL,
  `checado` varchar(50) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  PRIMARY KEY (`IdTaxa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Fazendo dump de dados para tabela `TaxasUsuario`
--

INSERT INTO `TaxasUsuario` (`IdTaxa`, `DescricaoTaxa`, `ValorTaxa`, `DataTaxa`, `checado`, `IdUsuario`) VALUES
(4, 'taxa 1', '3.000,00', '23/10/2014', '', 9),
(5, 'taxa 2', '200,00', '23/10/2014', 'cobrado', 9),
(6, 'taxa 3', '200,00', '23/10/2014', 'cobrado', 9),
(7, 'teste 4', '600,00', '23/10/2014', 'cobrado', 9),
(8, 'Plotagem', '90,00', '28/10/2014', 'cobrado', 10),
(9, 'Plotagem 3', '300,00', '28/10/2014', 'cobrado', 10),
(10, 'Platagem dsdsd', '150,00', '28/10/2014', 'cobrado', 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `TranferenciaEtapaTarefa`
--

CREATE TABLE IF NOT EXISTS `TranferenciaEtapaTarefa` (
  `IdTransferencia` int(11) NOT NULL AUTO_INCREMENT,
  `IdUsuarioTranferiu` int(11) NOT NULL,
  `IdUsuarioPegou` int(11) NOT NULL,
  `DataTranferencia` varchar(20) NOT NULL,
  `IdEtapaTarefa` int(11) NOT NULL,
  PRIMARY KEY (`IdTransferencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Fazendo dump de dados para tabela `TranferenciaEtapaTarefa`
--

INSERT INTO `TranferenciaEtapaTarefa` (`IdTransferencia`, `IdUsuarioTranferiu`, `IdUsuarioPegou`, `DataTranferencia`, `IdEtapaTarefa`) VALUES
(2, 2, 3, '07/11/2014', 38),
(13, 1, 1, '01/12/2014', 27),
(15, 1, 1, '01/12/2014', 26);

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
(9, 'Cliente', 'tairoroberto@hotmail.com', '555', '555', 'Tairo Roberto Miguel de Assunçâo', '', '', '', '', '23/10/2014', '1,2,', '1.000,00', '0,00'),
(10, 'Cliente', 'atendimento@mandprojetos.com.br', 'm@nd', 'm@nd', 'Teste de Cliente', '', '', '', '', '28/10/2014', '1,2,', '590,00', '50,00'),
(11, 'Administrador', 'magali@mandprojetos.com.br', '123456', '123456', 'Magali Bastos', '8:00', '20:00', '12:00', '', '07/11/2014', '', '', ''),
(12, 'Funcionario', 'tecnico3@mandprojetos.com.br', 'm@nd', 'm@nd', 'Arthur Karam', '9:00', '18:00', '12:00', '', '10/11/2014', '', '', ''),
(13, 'Funcionario', 'esouza@urbin-di.com.br', 'm@nd', 'm@nd', 'Emerson Inácio Souza ', '9:00', '18:00', '12:00', '', '10/11/2014', '', '', ''),
(15, 'Cliente', 'tairoroberto@hotmail.com', '12345', '12345', 'Tairo Roberto Miguel de Assunçâo', '', '', '', '', '17/11/2014', '1,2,', '250,00', '250,00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
