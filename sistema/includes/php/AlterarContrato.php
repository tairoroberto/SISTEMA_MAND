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
                $_POST['DoObjetoDoContrato'],
                $_POST['ObrigacoesContratante'],
                $_POST['ObrigacoesContratado'],
                $_POST['PrecoCondicoesPagamento'],
                $_POST['InadiplenciaDescumplimentoMulta'],
                $_POST['RecisaoIMotivada'],
                $_POST['Doprazo'],
                $_POST['CondicoesGerais'],
                $_POST['DoForo'])){

                $DadosMand = $_POST['DadosMand'];
            	$DoObjetoDoContrato = $_POST['DoObjetoDoContrato'];
            	$ObrigacoesContratante = $_POST['ObrigacoesContratante'];
                $ObrigacoesContratado = $_POST['ObrigacoesContratado'];
                $PrecoCondicoesPagamento = $_POST['PrecoCondicoesPagamento'];
                $InadiplenciaDescumplimentoMulta = $_POST['InadiplenciaDescumplimentoMulta'];
                $RecisaoIMotivada = $_POST['RecisaoIMotivada'];
                $Doprazo = $_POST['Doprazo'];
                $CondicoesGerais = $_POST['CondicoesGerais'];
                $DoForo = $_POST['DoForo'];

            	 	$AtualizaContrato->set('sql',"UPDATE Contrato SET   DadosMand = '$DadosMand',
                                                                        DoObjetoDoContrato = '$DoObjetoDoContrato',
                                                                        ObrigacoesContratante = '$ObrigacoesContratante',
                                                                        ObrigacoesContratado = '$ObrigacoesContratado',
                                                                        PrecoCondicoesPagamento = '$PrecoCondicoesPagamento',
                                                                        InadDescumpMulta = '$InadiplenciaDescumplimentoMulta',
                                                                        RecisaoIMotivada = '$RecisaoIMotivada',
                                                                        Doprazo = '$Doprazo',
                                                                        CondicoesGerais = '$CondicoesGerais',
                                                                        DoForo = '$DoForo'
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

 