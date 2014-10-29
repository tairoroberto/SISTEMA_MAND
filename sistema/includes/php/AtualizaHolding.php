<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $atualizaHoldingResponsavel = new Conexao();
    $atualizaHoldingResponsavel->conectar();
    $atualizaHoldingResponsavel->selecionarDB();

    $atualizaHoldingEmpresa = new Conexao();
    $atualizaHoldingEmpresa->conectar();
    $atualizaHoldingEmpresa->selecionarDB();

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
		  $_POST['EmailResponsavel']
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

		  $IdResponsavel = $_POST['IdResponsavelAux'];
		  $IdEmpresa = $_POST['IdHoldingAux'];
    
     /********************************************************************************************/
    /*						Muda a String SQL para atualizar no banco								*/
    /********************************************************************************************/
 	
	 $atualizaHoldingResponsavel->set('sql',"UPDATE Responsavel SET
	 															 Nome = '$NomeResponsavel', 
	 															  Cpf = '$CpfResponsavel', 
	 															  Rg = '$RgResponsavel', 
	 															  Cep = '$CepResponsavel', 
	 															  Rua = '$RuaResponsavel', 
	 															  Numero = '$NumeroResponsavel', 
	 															  Bairro = '$BairroResponsavel', 
	 															  Cidade = '$CidadeResponsavel', 
	 															  Telefone = '$TelefoneResponsavel', 
	 															  Celular = '$CelularResponsavel', 
	 															  Email = '$EmailResponsavel',
	 															  SenhaWebResponsavel = '$SenhaWebResponsavel' 
	 														    WHERE IdResponsavel = '$IdResponsavel'");  
  
  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
	$atualizaHoldingResponsavel->executarQuery();

    
    /********************************************************************************************/
    /*						Muda a String SQL para atualizar no banco								*/
    /********************************************************************************************/
	 $atualizaHoldingEmpresa->set('sql',"UPDATE CadastroHolding SET
	 															  TipoPessoa = '$TipoPessoa', 
	 															  RazaoSocial = '$RazaoSocial', 
	 															  NomeFantasia = '$NomeFantasia', 
	 															  Atividade = '$Atividade', 
	 															  Cnpj = '$Cnpj', 
	 															  Ccm = '$Ccm', 
	 															  Cep = '$CepEmpresa', 
	 															  Rua = '$RuaEmpresa', 
	 															  Numero = '$NumeroEmpresa', 
	 															  Bairro = '$BairroEmpresa', 
	 															  Cidade = '$CidadeEmpresa',
	 															  Telefone1 = '$Telefone1',
	 															  Telefone2 = '$Telefone2',
	 															  Email = '$EmailEmpresa',
	 															  SenhaWebEmpresa = '$SenhaWebEmpresa',
	 															  SiteEmpresa = '$SiteEmpresa'
	 														    WHERE IdEmpresa = '$IdEmpresa'");  
  
  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
  if ($atualizaHoldingEmpresa->executarQuery()) {
	 	echo("<script type='text/javascript'> location.href='../../holding-listar.php'; alert('Dados atualizados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../holding-listar.php'; alert('Dados não atualizados'); </script>");
	 }

}