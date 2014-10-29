-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 23/10/2014 às 09:03
-- Versão do servidor: 5.5.40-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.18-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `mand_limpa`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `Zona` varchar(50) NOT NULL,
  `CaBasico` varchar(50) NOT NULL,
  `Distrito` varchar(50) NOT NULL,
  `SubPrefeitura` varchar(100) NOT NULL,
  `CaMaximo` varchar(50) NOT NULL,
  `Gabarito` varchar(50) NOT NULL,
  `ToImovel` varchar(50) NOT NULL,
  `TxPerm` varchar(30) NOT NULL,
  `LargVia` varchar(30) NOT NULL,
  `ClassificacaoVia` varchar(50) NOT NULL,
  `PagGeomapas` varchar(100) NOT NULL,
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
  `SituacaoImovel` varchar(255) NOT NULL,
  PRIMARY KEY (`IdImovel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `ZonemanetoIncorporacao` varchar(15) NOT NULL,
  `CaBasicoIncorporacao` varchar(15) NOT NULL,
  `CaMaximoIncorporacao` varchar(15) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `CadastraLinks`
--

CREATE TABLE IF NOT EXISTS `CadastraLinks` (
  `IdLink` int(11) NOT NULL AUTO_INCREMENT,
  `NomeExibicao` varchar(200) NOT NULL,
  `Url` varchar(300) NOT NULL,
  PRIMARY KEY (`IdLink`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `DataInicio` varchar(15) NOT NULL,
  `DataEntrega` varchar(15) NOT NULL,
  `NomeProjeto` varchar(100) NOT NULL,
  `DescricaoProjeto` varchar(200) NOT NULL,
  `SituacaoTarefa` varchar(50) NOT NULL,
  PRIMARY KEY (`IdTarefa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Categoria`
--

CREATE TABLE IF NOT EXISTS `Categoria` (
  `IdCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `NomeCategoria` varchar(200) NOT NULL,
  `SubCategoria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IdCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ComentariosProcessoImovel`
--

CREATE TABLE IF NOT EXISTS `ComentariosProcessoImovel` (
  `IdComentariosProcessoImovel` int(11) NOT NULL AUTO_INCREMENT,
  `Comentarios` text NOT NULL,
  `IdImovel` int(11) NOT NULL,
  PRIMARY KEY (`IdComentariosProcessoImovel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(1, '<b>Mand Projetos</b> , reconhecida como <b>NOME FANTASIA</b>, com sede a Aluizio Azevedo, 447 - sala 3, Bairro Santana, São Paulo/SP, CEP 02021-030, inscrita no CNPJ 00.000.000/0000-00, aqui denominada <b>CONTRATADA</b>', 'Cláusula 1ª. É objeto do presente contrato a prestação de serviços de: <b>SERVIÇOS WEB</b>,<b> IDENTIDADE VISUAL</b>, conforme detalhes descritos no anexo I.', 'Cláusula 2ª. O <b>CONTRATANTE</b> deverá fornecer ao <b>CONTRATADO</b> todas as informações necessárias á realização do serviço, devendo especificar os detalhes necessários á perfeita consecução do mesmo, e a forma de como ele deve ser entregue.', 'Cláusula 4ª. É dever do <b>CONTRATADO</b> oferecer ao contratante a cópia do presente instrumento, contendo todas as especificidades da prestação de serviço contratada.', 'Cláusula 5ª. O presente projeto será remunerado pela quantia de', 'Cláusula 6ª. Em caso de inadimplemento por parte do <b>CONTRATANTE</b> quanto ao pagamento do serviço prestado, deverá incidir sobre o valor do presente instrumento, multa contratual de 2% sobre o valor devido, juros de 1% ao mês e correção monetária.', 'Cláusula 8ª. Poderá o presente instrumento ser rescindido por qualquer uma das partes, em qualquer momento, sem que haja qualquer tipo de motivo relevante, não obstante a outra parte deverá ser avisada previamente por escrito, no prazo de 20 dias.', 'Cláusula 10ª. O <b>CONTRATADO</b> assume o compromisso de realizar os serviços contratados dentro do prazo máximo de 90 dias uteis., contados a partir do pagamento da entrada e envio de todo material necessário para o desenvolvimento do projeto. Após a entrega do serviço a <b>CONTRATADA</b> dispõe uma garantia de 30 dias para eventuais ajustes simples, correções, dúvidas ou erros encontrados no projeto. Ultrapassando este prazo, todo ajuste ou correção serão cobrados R$80,00 por hora demandada.', 'Cláusula 11ª. Fica compactuado entre as partes a total inexistência de vínculo trabalhista entre as partes contratantes, excluindo as obrigações previdenciárias e os encargos sociais, não havendo entre <b>CONTRATADO</b> e <b>CONTRATANTE</b> qualquer tipo de relação de subordinação.', 'Cláusula 14ª. As partes elegem o foro tal da Comarca da Capital de São Paulo, como único e competente, para reconhecer e dirimir quaisquer questões oriundas do presente contrato, com expressa renúncia de qualquer outro foro, por mais privilegiado que seja. E por estarem justos e contratados, firmam o presente contrato em 2 (duas) vias de igual teor e forma, na presença de 02 (duas) testemunhas.');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `DocumentosUsuario`
--

CREATE TABLE IF NOT EXISTS `DocumentosUsuario` (
  `IdDocumento` int(11) NOT NULL AUTO_INCREMENT,
  `NomeDocumento` varchar(300) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  PRIMARY KEY (`IdDocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `ValorQueClienteQueria` varchar(20) NOT NULL,
  `Viabilidade` varchar(50) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  PRIMARY KEY (`IdOportunidade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Servicos`
--

CREATE TABLE IF NOT EXISTS `Servicos` (
  `IdServico` int(11) NOT NULL AUTO_INCREMENT,
  `TituloServico` varchar(100) NOT NULL,
  `ExplicacaoServico` text NOT NULL,
  PRIMARY KEY (`IdServico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ServicosDocumento`
--

CREATE TABLE IF NOT EXISTS `ServicosDocumento` (
  `IdDocumento` int(11) NOT NULL AUTO_INCREMENT,
  `NomeDocumento` varchar(100) NOT NULL,
  `IdServico` int(11) NOT NULL,
  PRIMARY KEY (`IdDocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `SolicitacaoDocumetosTarefa`
--

CREATE TABLE IF NOT EXISTS `SolicitacaoDocumetosTarefa` (
  `IdSolicitacaoDocUmento` int(11) NOT NULL AUTO_INCREMENT,
  `IdEmpresa` int(11) NOT NULL,
  `IdRequerente` int(11) NOT NULL,
  `IdImovel` int(11) NOT NULL,
  `IdTarefa` int(11) NOT NULL,
  `NomeUsuario` varchar(50) NOT NULL,
  `DocumentosSolicitacao` text NOT NULL,
  `DataSolicitacao` varchar(15) NOT NULL,
  `Solicitar` varchar(50) DEFAULT NULL,
  `Recebido` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdSolicitacaoDocUmento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Fazendo dump de dados para tabela `Usuarios`
--

INSERT INTO `Usuarios` (`IdUsuario`, `TipoUsuario`, `Email`, `Senha`, `ConfirmaSenha`, `NomeExibicao`, `Entrada`, `Saida`, `Almoco`, `Foto`, `DataCadastro`, `PermissaoProcesso`, `CreditoUsuario`, `CreditoUsuario_final`) VALUES
(1, 'Administrador', 'tairoroberto@hotmail.com', '123', '123', 'Tairo Roberto Miguel de Assunçâo', '10:0011', '18:00', '14:00', 'f2c121c4cc09ef20a14c0ca824b5df44.jpg', '28/08/2014', '', '', ''),
(2, 'Administrador', 'vasco.pinheiro@mandprojetos.com.br', 'mand', 'mand', 'Vasco Pinheiro', '09:00', '19:00', '2:00', '4ab237c4d15d78900ea743e80ff47f82.jpg', '01/09/2014', '', '', ''),
(3, 'Administrador', 'renato.andrade@mandprojetos.com.br', 'm@nd', 'm@nd', 'Renato Andrade', '09:00', '19:00', '2hrs', '62230b4d645507cbe61d8ba7990f7c32.jpg', '01/09/2014', '', '', ''),
(4, 'Funcionario', 'tecnico1@mandprojetos.com.br', '2232', '2232', 'Matheus Camilo', '9:00', '16:00', '1:00', '721848620480c4de9fd1798c69d9453e.jpg', '01/09/2014', '', '', ''),
(5, 'Funcionario', 'tecnico2@mandprojetos.com.br', '2262', '2262', 'Bruna Morata', '9:00', '18:00', '1:00', 'fc3f64af0441016f5785a6454b51beb2.jpg', '01/09/2014', '', '', ''),
(6, 'Funcionario', 'tairoroberto@hotmail.com', '12345', '12345', 'Tairo Roberto Miguel de Assunçâo', '10:00', '18:00', '14:00', '1af0d7fda6fce3cbfc9d450774c950e6.jpg', '15/09/2014', '', '', ''),
(7, 'Funcionario', 'tairoroberto@hotmail.com', '111', '111', 'Tairo Roberto Miguel de Assunçâo', '10:00', '18:00', '14:00', '865d6a0fef0966f33d8225f59c21fc62.jpg', '15/09/2014', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
