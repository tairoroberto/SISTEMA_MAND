 <?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere a Categoria		*/
    /********************************************************************************************/
 
    $AtualizaContrato = new Conexao();
    $AtualizaContrato->conectar();
    $AtualizaContrato->selecionarDB();

    $NomeCategoria;
    $NomeCategoriaAux;

      if (isset($_POST['DadosMand'],
                $_POST['DadosContrato'])){

                $DadosMand = $_POST['DadosMand'];
            	$DadosContrato = $_POST['DadosContrato'];

        	 	$AtualizaContrato->set('sql',"UPDATE Contrato SET   DadosMand = '$DadosMand',
                                                                    DadosContrato = '$DadosContrato'
                        				                         WHERE IdContrato = 1 ");


   	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
  if ($AtualizaContrato->executarQuery()) {
	 	echo("<script type='text/javascript' charset='utf-8'> location.href='../../contrato.php'; alert('Dados Atualizados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript' charset='utf-8'> location.href='../../contrato.php'; alert('Dados não Atualizados'); </script>");
	 }
}

 