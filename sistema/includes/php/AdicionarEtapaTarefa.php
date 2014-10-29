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
    
   
    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo tarefa-nova.php estão completos				*/
    /********************************************************************************************/

if (isset($_POST['IdTarefaAux'])) {

	$IdTarefa = $_POST['IdTarefaAux'];
  $SituacaoEtapaTarefa = "Trabalhando";

	   /********************************************************************************************/
   /*          			Verififica Campos  do HISTORICO	 e INSERE NO BANCO					   */
   /********************************************************************************************/   
   if(isset($_POST["SelectResponsavel1"],
    		$_POST["TituloTarefa1"],
    		$_POST["Descricaotarefa1"],
    		$_POST["DataEntregaTarefa1"])){
    
    	// Faz loop pelo array dos campos:
    	$SelectResponsavel1 = $_POST["SelectResponsavel1"];
    	$TituloTarefa1 = $_POST["TituloTarefa1"];
    	$Descricaotarefa1 = $_POST["Descricaotarefa1"];
    	$DataEntregaTarefa1 = $_POST["DataEntregaTarefa1"];

    	if (($SelectResponsavel1 != "Responsável") && ($TituloTarefa1 != "") && ($Descricaotarefa1 != "") && ($DataEntregaTarefa1 !="")) {
    		$insereEtapa->set('sql',"INSERT INTO EtapaTarefa(IdUsuario,TituloEtapa,DescricaoEtapa,DataEntregaEtapa,SituacaoEtapaTarefa,IdTarefa)
    				VALUES ('$SelectResponsavel1','$TituloTarefa1','$Descricaotarefa1','$DataEntregaTarefa1','$SituacaoEtapaTarefa','$IdTarefa');");
    		$insereEtapa->executarQuery();       	
         }
    }

    /********************************************************************************************/
   /*          			Verififica Campos  do HISTORICO	 e INSERE NO BANCO					   */
   /********************************************************************************************/   
   if(isset($_POST["SelectResponsavel2"],
    		$_POST["TituloTarefa2"],
    		$_POST["DescricaoTarefa2"],
    		$_POST["DataEntregaTarefa2"])){
    
    	// Faz loop pelo array dos campos:
    	$SelectResponsavel2 = $_POST["SelectResponsavel2"];
    	$TituloTarefa2 = $_POST["TituloTarefa2"];
    	$DescricaoTarefa2 = $_POST["DescricaoTarefa2"];
    	$DataEntregaTarefa2 = $_POST["DataEntregaTarefa2"];
    	if (($SelectResponsavel2 != "Responsável") && ($TituloTarefa2 != "") && ($DescricaoTarefa2 != "") && ($DataEntregaTarefa2 !="")) {
    		$insereEtapa->set('sql',"INSERT INTO EtapaTarefa(IdUsuario,TituloEtapa,DescricaoEtapa,DataEntregaEtapa,SituacaoEtapaTarefa,IdTarefa)
    				VALUES ('$SelectResponsavel2','$TituloTarefa2','$DescricaoTarefa2','$DataEntregaTarefa2','$SituacaoEtapaTarefa','$IdTarefa');");
    		$insereEtapa->executarQuery();  
    	}
    }



    /********************************************************************************************/
   /*          			Verififica Campos  do HISTORICO	 e INSERE NO BANCO					   */
   /********************************************************************************************/   
   if(isset($_POST["SelectResponsavel3"],
    		$_POST["TituloTarefa3"],
    		$_POST["DescricaoTarefa3"],
    		$_POST["DataEntregaTarefa3"])){
    
    	// Faz loop pelo array dos campos:
    	$SelectResponsavel3 = $_POST["SelectResponsavel3"];
    	$TituloTarefa3 = $_POST["TituloTarefa3"];
    	$DescricaoTarefa3 = $_POST["DescricaoTarefa3"];
    	$DataEntregaTarefa3 = $_POST["DataEntregaTarefa3"];
    	if (($SelectResponsavel3 != "Responsável") && ($TituloTarefa3 != "") && ($DescricaoTarefa3 != "") && ($DataEntregaTarefa3 !="")) {
    		$insereEtapa->set('sql',"INSERT INTO EtapaTarefa(IdUsuario,TituloEtapa,DescricaoEtapa,DataEntregaEtapa,SituacaoEtapaTarefa,IdTarefa)
    				VALUES ('$SelectResponsavel3','$TituloTarefa3','$DescricaoTarefa3','$DataEntregaTarefa3','$SituacaoEtapaTarefa','$IdTarefa');");
    		$insereEtapa->executarQuery();  
    	}
    }




    /********************************************************************************************/
   /*          			Verififica Campos  do HISTORICO	 e INSERE NO BANCO					   */
   /********************************************************************************************/   
   if(isset($_POST["SelectResponsavel4"],
    		$_POST["TituloTarefa4"],
    		$_POST["DescricaoTarefa4"],
    		$_POST["DataEntregaTarefa4"])){
    
    	// Faz loop pelo array dos campos:
    	$SelectResponsavel4 = $_POST["SelectResponsavel4"];
    	$TituloTarefa4 = $_POST["TituloTarefa4"];
    	$DescricaoTarefa4 = $_POST["DescricaoTarefa4"];
    	$DataEntregaTarefa4 = $_POST["DataEntregaTarefa4"];
    	if (($SelectResponsavel4 != "Responsável") && ($TituloTarefa4 != "") && ($DescricaoTarefa4 != "") && ($DataEntregaTarefa4 !="")) {
    		$insereEtapa->set('sql',"INSERT INTO EtapaTarefa(IdUsuario,TituloEtapa,DescricaoEtapa,DataEntregaEtapa,SituacaoEtapaTarefa,IdTarefa)
    				VALUES ('$SelectResponsavel4','$TituloTarefa4','$DescricaoTarefa4','$DataEntregaTarefa4','$SituacaoEtapaTarefa','$IdTarefa');");
    		$insereEtapa->executarQuery();  
    	}
    }

    /********************************************************************************************/
    /*          			Verififica Campos criados do HISTORICO								 */
    /********************************************************************************************/    
   	if(isset($_POST["SelectUsuarioArray"],
    		$_POST["TituloArray"],
    		$_POST["DescricaoArray"],
    		$_POST["DataEntregaArray"])){   		

   		// Faz loop pelo array dos campos:
   		$SelectUsuarioArray = $_POST["SelectUsuarioArray"];
   		$TituloArray = $_POST["TituloArray"];
   		$DescricaoArray = $_POST["DescricaoArray"];
   		$DataEntregaArray = $_POST["DataEntregaArray"];
   		  		
   		
   		$i = 0;
   		$j = 0;
   		$k = 0;
   		$l = 0;
   		
   	
   		while($i < count($SelectUsuarioArray) && $j < count($TituloArray) && 
   			  $k < count($DescricaoArray) && $l < count($DataEntregaArray)){   	 				
   			if (($SelectUsuarioArray[$i] != "Responsável") && ($TituloArray[$j] != "") && ($DescricaoArray[$k] != "") && ($DataEntregaArray[$l] !="")) {
   				$insereEtapa->set('sql',"INSERT INTO EtapaTarefa(IdUsuario,TituloEtapa,DescricaoEtapa,DataEntregaEtapa,SituacaoEtapaTarefa,IdTarefa)
   						VALUES ('$SelectUsuarioArray[$i]','$TituloArray[$j]','$DescricaoArray[$k]','$DataEntregaArray[$l]','$SituacaoEtapaTarefa','$IdTarefa');");
   						$insereEtapa->executarQuery();
   			
   						$i++;
   						$j++;
   						$k++;
   						$l++; 
   				}			
   			}
   		}


   echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Etapas Adicionadas'); </script>");
}else{
	 	echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Etapas não Adicionadas'); </script>");
}


   		
   	