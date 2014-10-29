<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere a Tarefa ea Etapa 		*/
    /********************************************************************************************/
 
    $atualizaTarefa = new Conexao();
    $atualizaTarefa->conectar();
    $atualizaTarefa->selecionarDB();

    $insereEtapa = new Conexao();
    $insereEtapa->conectar();
    $insereEtapa->selecionarDB();

    $insereHistoricoEtapa = new Conexao();
    $insereHistoricoEtapa->conectar();
    $insereHistoricoEtapa->selecionarDB();
    
   
    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo tarefa-nova.php estão completos				*/
    /********************************************************************************************/

if (isset($_POST['IdTarefaAux'],$_POST['IdEtapaTarefaAux'])) {

      $IdTarefa = $_POST["IdTarefaAux"];
      $IdEtapaTarefa = $_POST["IdEtapaTarefaAux"];
   		  		
   			
   				$insereEtapa->set('sql',"DELETE FROM EtapaTarefa WHERE  IdEtapaTarefa = '$IdEtapaTarefa'");
   				$insereEtapa->executarQuery();

          $insereHistoricoEtapa->set('sql',"DELETE FROM CadastraHistoricoTarefa WHERE IdEtapaTarefa = '$IdEtapaTarefa' ");
          $insereHistoricoEtapa->executarQuery();
   			
   		
   echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Dados deletados'); </script>");
}else{
	 	echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Dados não deletados'); </script>");
}


   		
   	