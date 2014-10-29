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

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/

    	$SelectHolding =	  $_POST['SelectHolding']; 
		  $SelectRequerente  = $_POST['SelectRequerente'];
		  $SelectSql  = $_POST['SelectSql'];
		  $DataInicio  = $_POST['DataInicio'];
		  $DataEntrega  = $_POST['DataEntrega'];
		  $NomeProjeto  = $_POST['NomeProjeto'];
		  $DescricaoProjeto  = $_POST['DescricaoProjeto'];
      $SituacaoTarefa = "";
      $IdTarefa = $_POST['IdTarefaAux'];
 
 		   
	 $atualizaTarefa->set('sql',"UPDATE CadastraTarefa SET IdEmpresa = '$SelectHolding',
                                                         IdRequerente = '$SelectRequerente',
                                                         IdImovel = '$SelectSql',
                                                         DataInicio = '$DataInicio',
                                                         DataEntrega = '$DataEntrega',
                                                         NomeProjeto = '$NomeProjeto',
                                                         DescricaoProjeto = '$DescricaoProjeto',
                                                         SituacaoTarefa = '$SituacaoTarefa' 
                                                    WHERE IdTarefa = '$IdTarefa'");  
  
  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
	$atualizaTarefa->executarQuery();


    /********************************************************************************************/
    /*          			Verififica Campos criados do HISTORICO								 */
    /********************************************************************************************/    
   	if(isset($_POST["SelectUsuarioArray"],
    		$_POST["TituloArray"],
    		$_POST["DescricaoArray"],
    		$_POST["DataEntregaArray"],
        $_POST["IdEtapaTarefaAux"])){   		

   		// Faz loop pelo array dos campos:
   		$SelectUsuarioArray = $_POST["SelectUsuarioArray"];
   		$TituloArray = $_POST["TituloArray"];
   		$DescricaoArray = $_POST["DescricaoArray"];
   		$DataEntregaArray = $_POST["DataEntregaArray"];
      $IdEtapaTarefa = $_POST["IdEtapaTarefaAux"];
   		  		
   		
   		$i = 0;
   		$j = 0;
   		$k = 0;
   		$l = 0;
      $m = 0;
   		
   	
   		while($i < count($SelectUsuarioArray) && $j < count($TituloArray) && 
   			  $k < count($DescricaoArray) && $l < count($DataEntregaArray)){   	 				
   			
   				$insereEtapa->set('sql',"UPDATE EtapaTarefa SET IdUsuario = '$SelectUsuarioArray[$i]',
                                                          TituloEtapa = '$TituloArray[$j]',
                                                          DescricaoEtapa = '$DescricaoArray[$k]',
                                                          DataEntregaEtapa = '$DataEntregaArray[$l]',
                                                          IdTarefa = '$IdTarefa'
                                                      WHERE  IdEtapaTarefa = '$IdEtapaTarefa[$m]'");
   				$insereEtapa->executarQuery();
   			
   				$i++;
   				$j++;
   				$k++;
   				$l++;
          $m++; 			
   			}
   		}

   echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Dados atualizados com sucesso'); </script>");
}else{
	 	echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Dados não atualizados'); </script>");
}


   		
   	