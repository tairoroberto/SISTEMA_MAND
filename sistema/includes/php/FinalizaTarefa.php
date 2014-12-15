 <?php

	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere a Categoria		*/
    /********************************************************************************************/
 
    $AtualizaSituacaoTarefa = new Conexao();
    $AtualizaSituacaoTarefa->conectar();
    $AtualizaSituacaoTarefa->selecionarDB();

    $AtualizaEtapaTarefa = new Conexao();
    $AtualizaEtapaTarefa->conectar();
    $AtualizaEtapaTarefa->selecionarDB() ;
    
    
    

    if (isset($_POST['IdTarefa'])){

    	$IdTarefa = $_POST['IdTarefa'];
        $SituacaoTarefa = "Finalizada";

    	 	$AtualizaSituacaoTarefa->set('sql',"UPDATE CadastraTarefa SET                                    
				                          SituacaoTarefa = '$SituacaoTarefa'
				                          WHERE 
				                          IdTarefa = '$IdTarefa' ");  
       

        $AtualizaEtapaTarefa->set('sql',"UPDATE EtapaTarefa SET SituacaoEtapaTarefa = 'Finalizar'
                                         WHERE   IdTarefa = '$IdTarefa' ");                                            	 
        $AtualizaEtapaTarefa->executarQuery();
   	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
  if ($AtualizaSituacaoTarefa->executarQuery()) {
	 	echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Tarefa Finalizada'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Tarefa não Finalizada'); </script>");
	 }
}

 

