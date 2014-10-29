<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $insereHoldingResponsavel = new Conexao();
    $insereHoldingResponsavel->conectar();
    $insereHoldingResponsavel->selecionarDB();

    $insereHoldingEmpresa = new Conexao();
    $insereHoldingEmpresa->conectar();
    $insereHoldingEmpresa->selecionarDB();

    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo cadastro-holding.html estão completos		*/
    /********************************************************************************************/

if (isset($_POST['TipoPessoa'], 
		  $_POST['RazaoSocial'],
		  $_POST['NomeFantasia'],
		  $_POST['Atividade'],
		  $_POST['Cnpj'],
		  $_POST['Ccm'],
		  $_POST['CepEmpresa'],
		  $_POST['RuaEmpresa'],
		  $_POST['NumeroEmpresa'],
		  $_POST['BairroEmpresa'],
		  $_POST['CidadeEmpresa'],
		  $_POST['Telefone1'],
		  $_POST['Telefone2'],
		  $_POST['EmailEmpresa'],
		  $_POST['SenhaWebEmpresa'],
		  $_POST['SiteEmpresa'],

		  $_POST['NomeResponsavel'],
		  $_POST['CpfResponsavel'],
		  $_POST['RgResponsavel'],
		  $_POST['CepResponsavel'],
		  $_POST['RuaResponsavel'],
		  $_POST['NumeroResponsavel'],
		  $_POST['BairroResponsavel'],
		  $_POST['CidadeResponsavel'],
		  $_POST['TelefoneResponsavel'],
		  $_POST['CelularResponsavel'],
		  $_POST['EmailResponsavel'],
		  $_POST['SenhaWebResponsavel']  
	)) {

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/

    	  $TipoPessoa =	  $_POST['TipoPessoa']; 
		  $RazaoSocial  = $_POST['RazaoSocial'];
		  $NomeFantasia  = $_POST['NomeFantasia'];
		  $Atividade  = $_POST['Atividade'];
		  $Cnpj  = $_POST['Cnpj'];
		  $Ccm  = $_POST['Ccm'];
		  $CepEmpresa  = $_POST['CepEmpresa'];
		  $RuaEmpresa  = $_POST['RuaEmpresa'];
		  $NumeroEmpresa  = $_POST['NumeroEmpresa'];
		  $BairroEmpresa  = $_POST['BairroEmpresa'];
		  $CidadeEmpresa  = $_POST['CidadeEmpresa'];
		  $Telefone1  = $_POST['Telefone1'];
		  $Telefone2  = $_POST['Telefone2'];
		  $EmailEmpresa  = $_POST['EmailEmpresa'];
		  $SenhaWebEmpresa  = $_POST['SenhaWebEmpresa'];
		  $SiteEmpresa  = $_POST['SiteEmpresa'];

		  $NomeResponsavel  = $_POST['NomeResponsavel'];
		  $CpfResponsavel  = $_POST['CpfResponsavel'];
		  $RgResponsavel  = $_POST['RgResponsavel'];
		  $CepResponsavel  = $_POST['CepResponsavel'];
		  $RuaResponsavel  = $_POST['RuaResponsavel'];
		  $NumeroResponsavel  = $_POST['NumeroResponsavel'];
		  $BairroResponsavel  = $_POST['BairroResponsavel'];
		  $CidadeResponsavel  = $_POST['CidadeResponsavel'];
		  $TelefoneResponsavel  = $_POST['TelefoneResponsavel'];
		  $CelularResponsavel  = $_POST['CelularResponsavel'];
		  $EmailResponsavel  = $_POST['EmailResponsavel'];
		  $SenhaWebResponsavel  = $_POST['SenhaWebResponsavel'];
    
     /********************************************************************************************/
    /*						Muda a String SQL para inserir no banco								*/
    /********************************************************************************************/
 		   
	 $insereHoldingResponsavel->set('sql',"INSERT INTO Responsavel(Nome, Cpf, Rg, Cep, Rua, Numero, Bairro, Cidade, Telefone, Celular, Email, SenhaWebResponsavel) 
	 					  VALUES ('$NomeResponsavel','$CpfResponsavel','$RgResponsavel','$CepResponsavel','$RuaResponsavel','$NumeroResponsavel',
	 					  		  '$BairroResponsavel','$CidadeResponsavel','$TelefoneResponsavel','$CelularResponsavel','$EmailResponsavel','$SenhaWebResponsavel');");  
  
  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
	$insereHoldingResponsavel->executarQuery();


	/********************************************************************************************************/
    /*	Seleciona o ID do Responsável para poder inserir na TABELA CadastroHolding como chave estrangeira	*/
    /********************************************************************************************************/
    $insereHoldingResponsavel->set('sql',"SELECT `IdResponsavel` FROM `Responsavel` WHERE `Nome` = '$NomeResponsavel' AND 
    																					  `Cpf` = '$CpfResponsavel' AND 
    																					  `Rg` = '$RgResponsavel' AND 
    																					  `Cep` = '$CepResponsavel' AND
    																					  `Rua` = '$RuaResponsavel' AND 
    																					  `Numero` = '$NumeroResponsavel' AND
    																					  `Bairro` = '$BairroResponsavel' AND
    																					  `Cidade` = '$CidadeResponsavel' AND
    																					  `Telefone` = '$TelefoneResponsavel' AND
    																					  `Celular` = '$CelularResponsavel' AND
    																					  `Email` = '$EmailResponsavel' AND
    																					  `SenhaWebResponsavel` = '$SenhaWebResponsavel'  ;");
    $retorno = mysql_fetch_object($insereHoldingResponsavel->executarQuery()); 

    
    /********************************************************************************************/
    /*						Muda a String SQL para inserir no banco								*/
    /********************************************************************************************/
    $insereHoldingEmpresa->set('sql',"INSERT INTO CadastroHolding(TipoPessoa, RazaoSocial, NomeFantasia, Atividade, 
    												 Cnpj, Ccm, Cep, Rua, Numero, Bairro, Cidade, Telefone1, Telefone2, Email,SenhaWebEmpresa,SiteEmpresa,IdResponsavel) 
    					 VALUES ('$TipoPessoa','$RazaoSocial','$NomeFantasia','$Atividade','$Cnpj','$Ccm','$CepEmpresa','$RuaEmpresa',
    					 		 '$NumeroEmpresa','$BairroEmpresa','$CidadeEmpresa','$Telefone1','$Telefone2','$EmailEmpresa','$SenhaWebEmpresa','$SiteEmpresa','$retorno->IdResponsavel');");
  
  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
  if ($insereHoldingEmpresa->executarQuery()) {
	 	echo("<script type='text/javascript'> location.href='../../holding-cadastro.php'; alert('Dados cadastrados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../holding-cadastro.php'; alert('Dados não cadastrados'); </script>");
	 }

}