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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
