<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere a Categoria		*/
    /********************************************************************************************/
 
    $insereCategoria = new Conexao();
    $insereCategoria->conectar();
    $insereCategoria->selecionarDB();

    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo FAQ-Categoria.html estão completos 			*/
    /********************************************************************************************/

if (isset($_POST['NomeCategoria'],$_POST['SubCategoria'])){

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/

    	  $NomeCategoria =	  $_POST['NomeCategoria']; 
          $SubCategoria =    $_POST['SubCategoria']; 
		  
     /********************************************************************************************/
    /*						Muda a String SQL para inserir no banco								*/
    /********************************************************************************************/
 		   
	 $insereCategoria->set('sql',"INSERT INTO Categoria(NomeCategoria,SubCategoria) 
	 					  VALUES ('$NomeCategoria','$SubCategoria');");  


  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
  if ($insereCategoria->executarQuery()) {
	 	echo("<script type='text/javascript'> location.href='../../FAQ-Categoria.php'; alert('Dados cadastrados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../FAQ-Categoria.php'; alert('Dados não cadastrados'); </script>");
	 }

}