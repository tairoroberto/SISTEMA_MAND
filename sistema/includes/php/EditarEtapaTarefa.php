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

   		// Faz loop pelo array dos campos:
   		$SelectUsuarioArray = $_POST["SelectUsuarioArray"];
   		$TituloArray = $_POST["TituloArray"];
   		$DescricaoArray = $_POST["DescricaoArray"];
   		$DataEntregaArray = $_POST["DataEntregaArray"];
      $IdTarefa = $_POST["IdTarefaAux"];
      $IdEtapaTarefa = $_POST["IdEtapaTarefaAux"];
      $SituacaoEtapaTarefa = "Trabalhando";
   		  		
   		
   		$i = 0;
   		$j = 0;
   		$k = 0;
   		$l = 0;
   		
   	
   		while($i < count($SelectUsuarioArray) && $j < count($TituloArray) && 
   			  $k < count($DescricaoArray) && $l < count($DataEntregaArray)){   	 				
   			
   				$insereEtapa->set('sql',"UPDATE EtapaTarefa SET IdUsuario = '$SelectUsuarioArray[$i]',
                                                          TituloEtapa = '$TituloArray[$j]',
                                                          DescricaoEtapa = '$DescricaoArray[$k]',
                                                          DataEntregaEtapa = '$DataEntregaArray[$l]',
                                                          SituacaoEtapaTarefa = '$SituacaoEtapaTarefa'
                                                      WHERE  IdEtapaTarefa = '$IdEtapaTarefa'");
   				$insereEtapa->executarQuery();
          
          $dia = date('d/m/Y');
          $hora = date("H:i:s");

          $insereHistoricoEtapa->set('sql',"INSERT INTO CadastraHistoricoTarefa(ConteudoHistoricoTarefa,IdEtapaTarefa)
                                            VALUES ('Etapa editada ".$dia." ".$hora."','$IdEtapaTarefa')");
          $insereHistoricoEtapa->executarQuery();
   			
   				$i++;
   				$j++;
   				$k++;
   				$l++;			
   			}
   		

   echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Dados atualizados com sucesso'); </script>");
}else{
	 	echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Dados não atualizados'); </script>");
}


   		
   	