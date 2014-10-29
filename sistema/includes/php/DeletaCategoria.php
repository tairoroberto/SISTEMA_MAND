 <?php

	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere a Categoria		*/
    /********************************************************************************************/
 
    $DeletaCategoria = new Conexao();
    $DeletaCategoria->conectar();
    $DeletaCategoria->selecionarDB();

    if (isset($_POST['IdCategoriaAux'])){
    	$IdCategoria = $_POST['IdCategoriaAux'];

    	 	$DeletaCategoria->set('sql',"DELETE FROM Categoria 
    	 								   WHERE IdCategoria = '$IdCategoria'");
    	 
    

   	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
  if ($DeletaCategoria->executarQuery()) {
	 	echo("<script type='text/javascript'> location.href='../../FAQ-Categoria.php'; alert('Dados Deletados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../FAQ-Categoria.php'; alert('Dados não Deletados'); </script>");
	 }
}

 


