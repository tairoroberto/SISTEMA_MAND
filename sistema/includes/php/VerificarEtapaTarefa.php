<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere a Tarefa ea Etapa 		*/
    /********************************************************************************************/
 

    $buscaEtapaTarefa = new Conexao();
    $buscaEtapaTarefa->conectar();
    $buscaEtapaTarefa->selecionarDB();

   
    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo tarefa-nova.php estão completos				*/
    /********************************************************************************************/

if (isset($_GET['IdEtapaTarefaAux'])) {

          $IdEtapaTarefa = $_GET['IdEtapaTarefaAux'];

   				$buscaEtapaTarefa->set('sql',"SELECT SituacaoEtapaTarefa FROM  EtapaTarefa WHERE  IdEtapaTarefa = '$IdEtapaTarefa'");
   				$retorno = mysql_fetch_object($buscaEtapaTarefa->executarQuery());

          echo $retorno->SituacaoEtapaTarefa;

  }

   		
   	