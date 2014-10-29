<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $DeletaHoldingResponsavel = new Conexao();
    $DeletaHoldingResponsavel->conectar();
    $DeletaHoldingResponsavel->selecionarDB();

    $DeletaHoldingEmpresa = new Conexao();
    $DeletaHoldingEmpresa->conectar();
    $DeletaHoldingEmpresa->selecionarDB();

    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo cadastro-holding.html estão completos		*/
    /********************************************************************************************/

if (isset($_POST['IdHoldingAux'], 
		  $_POST['IdResponsavelAux'])) {

	$IdResponsavel = $_POST['IdResponsavelAux'];
	$IdEmpresa = $_POST['IdHoldingAux'];
    
     /********************************************************************************************/
    /*						Muda a String SQL para inserir no banco								*/
    /********************************************************************************************/
 		   
	 $DeletaHoldingResponsavel->set('sql',"DELETE FROM Responsavel WHERE IdResponsavel = '$IdResponsavel'");  
  
  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
	$DeletaHoldingResponsavel->executarQuery();

    
    /********************************************************************************************/
    /*						Muda a String SQL para inserir no banco								*/
    /********************************************************************************************/
    $DeletaHoldingEmpresa->set('sql',"DELETE FROM CadastroHolding WHERE IdEmpresa = '$IdEmpresa'");
  
  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
  if ($DeletaHoldingEmpresa->executarQuery()) {
	 	echo("<script type='text/javascript'> location.href='../../holding-listar.php'; alert('Dados Deletados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../holding-listar.php'; alert('Dados não Deletados'); </script>");
	 }

}