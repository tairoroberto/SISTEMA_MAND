 <?php

	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere a Categoria		*/
    /********************************************************************************************/
 
    $AtualizaCategoria = new Conexao();
    $AtualizaCategoria->conectar();
    $AtualizaCategoria->selecionarDB();

    if (isset($_POST['IdCategoriaAux'])){
    	$NomeCategoria = $_POST['NomeCategoria'];
    	$SubCategoria = $_POST['SubCategoria'];
        $IdCategoria = $_POST['IdCategoriaAux'];

    	 	$AtualizaCategoria->set('sql',"UPDATE Categoria SET                                    
				                          NomeCategoria = '$NomeCategoria',
                                          SubCategoria = '$SubCategoria'
				                          WHERE 
				                          	IdCategoria = '$IdCategoria'");
    	 
    

   	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
  if ($AtualizaCategoria->executarQuery()) {
	 	echo("<script type='text/javascript'> location.href='../../FAQ-Categoria.php'; alert('Dados Atualizados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../FAQ-Categoria.php'; alert('Dados não Atualizados'); </script>");
	 }
}

 


