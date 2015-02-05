<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $insereDocumentosTarefa = new Conexao();
    $insereDocumentosTarefa->conectar();
    $insereDocumentosTarefa->selecionarDB();

    $buscaUsuario = new Conexao();
    $buscaUsuario->conectar();
    $buscaUsuario->selecionarDB();

    $insereAlerta = new Conexao();
    $insereAlerta->conectar();
    $insereAlerta->selecionarDB();


if (isset($_POST['HoldingAux'],
          $_POST['RequerenteAux'],
          $_POST['SqlAux'],
          $_POST['TarefaAux'],
          $_POST['UsuarioSolicitacao'],
          $_POST['DocumentosEtapaSolicitacao'],
          $_POST['DataSolicitacao'])) {      

      	 /********************************************************************************************/
          /*				      	Atribui os dados vindos do formulário às variáveis do php			         	*/
          /*****************************************************************************************/
          $HoldingAux = $_POST['HoldingAux']; 
          $RequerenteAux  = $_POST['RequerenteAux'];
          $SqlAux = $_POST['SqlAux'];
          $TarefaAux = $_POST['TarefaAux'];
          $UsuarioSolicitacao = $_POST['UsuarioSolicitacao'];
          $DocumentosEtapaSolicitacao = $_POST['DocumentosEtapaSolicitacao'];
          $DataSolicitacao = $_POST['DataSolicitacao'];
          $IdOportunidade = $_POST['IdOportunidadeAux'];
          $Solicitar = "";
          $Recebido = "";

          $buscaUsuario->set('sql',"SELECT * FROM Usuarios 
                                             WHERE NomeExibicao = '$UsuarioSolicitacao' AND 
                                             TipoUsuario != 'Cliente' ");

          $retornoUsuario = mysql_fetch_object($buscaUsuario->executarQuery()); 

          $insereAlerta->set('sql',"INSERT INTO Alerta (IdUsuario,Mensagem,SituacaoAlerta) 
                                    VALUES ('$retornoUsuario->IdUsuario','Solicição de documento - ".$DataSolicitacao."','')");
          $insereAlerta->executarQuery();


          $insereDocumentosTarefa->set('sql',"INSERT INTO SolicitacaoDocumetosTarefa(IdEmpresa,IdRequerente,IdImovel,IdOportunidade,IdTarefa,NomeUsuario,DocumentosSolicitacao,DataSolicitacao, Solicitar, Recebido) 
                               VALUES ('$HoldingAux','$RequerenteAux','$SqlAux','$IdOportunidade','$TarefaAux','$UsuarioSolicitacao','$DocumentosEtapaSolicitacao','$DataSolicitacao','$Solicitar','$Recebido');");


          /********************************************************************************************/
          /*                              Execulta a String SQL                                       */
          /********************************************************************************************/

        if ($insereDocumentosTarefa->executarQuery()) {
    	 	echo("<script type='text/javascript'> location.href='../../tarefa-detalhe?tarefaAux=".$TarefaAux."&HoldingAux=".$HoldingAux."&RequerenteAux=".$RequerenteAux."&SqlAux=".$SqlAux."&IdOportunidadeAux=".$IdOportunidade."'; alert('Documentos Solicitados com sucesso'); </script>");
      	 }else{
      	 	echo("<script type='text/javascript'> location.href='../../tarefa-detalhe?tarefaAux=".$TarefaAux."&HoldingAux=".$HoldingAux."&RequerenteAux=".$RequerenteAux."&SqlAux=".$SqlAux."&IdOportunidadeAux=".$IdOportunidade."'; alert('Documentos não Solicitados'); </script>");
      	 }


}else{
  echo "Nada enviado";
}