<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $insereServico = new Conexao('localhost','root','tairo1507','Mand');
    $insereServico->conectar();
    $insereServico->selecionarDB();

    $insereDocumento = new Conexao('localhost','root','tairo1507','Mand');
    $insereDocumento->conectar();
    $insereDocumento->selecionarDB();

    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo cadastro-holding.html estão completos		*/
    /********************************************************************************************/
$DocumentoArray;
$TituloServico;
$Explicacao;
$Documento;
$VerificaTermino = false;



if (isset($_POST['IdServicoAux'])) {       

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/
    $TituloServico = $_POST['TituloServico']; 
    $Explicacao  = $_POST['Explicacao'];
    $IdServico = $_POST['IdServicoAux'];
  
     /********************************************************************************************/
    /*						Muda a String SQL para inserir no banco								*/
    /********************************************************************************************/
 		   
	 $insereServico->set('sql',"DELETE FROM Servicos WHERE IdServico = '$IdServico'");  
  
  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
	 

   $insereDocumento->set('sql',"DELETE FROM ServicosDocumento WHERE IdServico = '$IdServico' ");   

  	/**********************************************************************************************************************/
    /*Verifica se campos  foram inseridos com sucesso, se não houver erro retornará para a pagina de cadastro de serviços */
    /**********************************************************************************************************************/
  if (($insereServico->executarQuery()) && ($insereDocumento->executarQuery())) {
	 	echo("<script type='text/javascript'> location.href='../../servicos-lista.php'; alert('Dados deletados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../servicos-lista.php'; alert('Dados não deletados'); </script>");
	 }

}