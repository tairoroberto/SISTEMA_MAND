 <?php

	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/

	$atualizarOportunidade = new Conexao();
    $atualizarOportunidade->conectar();
    $atualizarOportunidade->selecionarDB();

    $insereHistoricoOportunidade = new Conexao();
    $insereHistoricoOportunidade->conectar();
    $insereHistoricoOportunidade->selecionarDB();

    $deletarOrcamentoB = new Conexao();
    $deletarOrcamentoB->conectar();
    $deletarOrcamentoB->selecionarDB();


    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo cadastro-holding.html estão completos		*/
    /********************************************************************************************/
	if(isset($_POST['IdOportunidadeAux'], 
		 	 $_POST['SelectAcoes'])){


	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/

    	  $IdOportunidade =	$_POST['IdOportunidadeAux']; 
		  $SelectAcoes  = $_POST['SelectAcoes'];		  
		  $Data  = $_POST['Data'];
      $DataProrrogacao = $_POST['DataProrrogacao'];

		  if ($SelectAcoes == "Enviar Orçamento") {
		  	//Atualiza status da oprtunidade
		  	$atualizarOportunidade->set('sql',"UPDATE Oportunidade SET Status = 'Enviar outro orçamento' WHERE IdOportunidade = '$IdOportunidade';");
  			$atualizarOportunidade->executarQuery();

  			//Deleta o orçamento enviado anteriormente
  			$deletarOrcamentoB->set('sql',"DELETE FROM  CadastraOrcamentoA WHERE IdOportunidade = '$IdOportunidade';");  			
  			$deletarOrcamentoB->executarQuery();	

  			//Deleta o orçamento enviado anteriormente
  			$deletarOrcamentoB->set('sql',"DELETE FROM  CadastraOrcamentoB WHERE IdOportunidade = '$IdOportunidade';");  			
  			$deletarOrcamentoB->executarQuery();	

  			//Deleta o Link enviado anteriormente
  			$deletarOrcamentoB->set('sql',"DELETE FROM  LinkOrcamentoB WHERE IdOportunidade = '$IdOportunidade';");  			
  			$deletarOrcamentoB->executarQuery();

  			//Deleta o Serviço enviado anteriormente
  			$deletarOrcamentoB->set('sql',"DELETE FROM  OrcamentoAServicos WHERE IdOportunidade = '$IdOportunidade';");  			
  			$deletarOrcamentoB->executarQuery();	

  			//Deleta o Serviço enviado anteriormente
  			$deletarOrcamentoB->set('sql',"DELETE FROM  OrcamentoBServicos WHERE IdOportunidade = '$IdOportunidade';");  			
  			$deletarOrcamentoB->executarQuery();	

  			 //Insere na Tabela HistoricoOportunidade
		  	 $data = date('d/m/Y');
			 $insereHistoricoOportunidade->set('sql',"INSERT INTO HistoricoOportunidade(DataHistoricoOportunidade, TipoHistoricoOportunidade, Status, IdOportunidade) 
			                            	 				 	   VALUES ('$data','Alterado','Enviar outro orçamento para cliente','$IdOportunidade');");
			 $insereHistoricoOportunidade->executarQuery();

			 echo("<script type='text/javascript' charset='utf-8'> location.href='../../orcamento-lista.php'; alert('Dados Alterados'); </script>");	  	
				  
		  }
		  if ($SelectAcoes == "Negociar") {
			//Atualiza status da oprtunidade
		  	$atualizarOportunidade->set('sql',"UPDATE Oportunidade SET Status = 'Negociar' WHERE IdOportunidade = '$IdOportunidade';");
  			$atualizarOportunidade->executarQuery();

  /*  //Deleta o orçamento enviado anteriormente
  			$deletarOrcamentoB->set('sql',"DELETE FROM  CadastraOrcamentoA WHERE IdOportunidade = '$IdOportunidade';");  			
  			$deletarOrcamentoB->executarQuery();	

			//Deleta o orçamento enviado anteriormente
  			$deletarOrcamentoB->set('sql',"DELETE FROM  CadastraOrcamentoB WHERE IdOportunidade = '$IdOportunidade';");  			
  			$deletarOrcamentoB->executarQuery();	

  			//Deleta o Link enviado anteriormente
  			$deletarOrcamentoB->set('sql',"DELETE FROM  LinkOrcamentoB WHERE IdOportunidade = '$IdOportunidade';");  			
  			$deletarOrcamentoB->executarQuery();

  			//Deleta o Serviço enviado anteriormente
  			$deletarOrcamentoB->set('sql',"DELETE FROM  OrcamentoAServicos WHERE IdOportunidade = '$IdOportunidade';");  			
  			$deletarOrcamentoB->executarQuery();	

  			//Deleta o Serviço enviado anteriormente
  			$deletarOrcamentoB->set('sql',"DELETE FROM  OrcamentoBServicos WHERE IdOportunidade = '$IdOportunidade';");  			
  			$deletarOrcamentoB->executarQuery();	*/

  			//Insere na Tabela HistoricoOportunidade
		  	 $data = date('d/m/Y');
			 $insereHistoricoOportunidade->set('sql',"INSERT INTO HistoricoOportunidade(DataHistoricoOportunidade, TipoHistoricoOportunidade, Status, IdOportunidade) 
			                            	 				 	   VALUES ('$data','Alterado','Negociar orçamento com cliente','$IdOportunidade');");
			 $insereHistoricoOportunidade->executarQuery();

			 echo("<script type='text/javascript' charset='utf-8'> location.href='../../orcamento-lista.php'; alert('Dados Alterados'); </script>");	
		  	
		  }
		  if ($SelectAcoes == "Prorrogar") {
        $Consideracoes  = $_POST['Consideracoes'];
		  	//Atualiza status da oprtunidade
		  	$atualizarOportunidade->set('sql',"UPDATE Oportunidade SET Status = 'Prorrogar',
                                                                   ComentariosSolicitacao = '$Consideracoes',
                                                                   DataProrrogacao = '$DataProrrogacao'
                                                               WHERE IdOportunidade = '$IdOportunidade';");
  			$atualizarOportunidade->executarQuery();

  		
  		 //Insere na Tabela HistoricoOportunidade
		   $data = date('d/m/Y');
			 $insereHistoricoOportunidade->set('sql',"INSERT INTO HistoricoOportunidade(DataHistoricoOportunidade, TipoHistoricoOportunidade, Status, IdOportunidade) 
			                            	 				 	   VALUES ('$data','Alterado','Prorrogar orçamento para cliente até ".$DataProrrogacao.":','$IdOportunidade');");
			 $insereHistoricoOportunidade->executarQuery();

			 echo("<script type='text/javascript' charset='utf-8'> location.href='../../orcamento-lista.php'; alert('Dados Alterados'); </script>");	
		  	
		  }
		  if ($SelectAcoes == "Fechar") {
		  	//Atualiza status da oprtunidade
		  	$atualizarOportunidade->set('sql',"UPDATE Oportunidade SET Status = 'Fechado' WHERE IdOportunidade = '$IdOportunidade';");
  			$atualizarOportunidade->executarQuery();
  			
  			//Insere na Tabela HistoricoOportunidade
		  	 $data = date('d/m/Y');
			 $insereHistoricoOportunidade->set('sql',"INSERT INTO HistoricoOportunidade(DataHistoricoOportunidade, TipoHistoricoOportunidade, Status, IdOportunidade) 
			                            	 				 	   VALUES ('$data','Alterado','Projeto Fechado','$IdOportunidade');");
			 $insereHistoricoOportunidade->executarQuery();

			 echo("<script type='text/javascript' charset='utf-8'> location.href='../../orcamento-lista.php'; alert('Dados Alterados'); </script>");
		  	
		  }
		  if ($SelectAcoes == "Perdido") {
		  	$Consideracoes  = $_POST['Consideracoes'];
		  	//Atualiza status da oprtunidade
		  	$atualizarOportunidade->set('sql',"UPDATE Oportunidade SET Status = 'Perdido', ComentariosSolicitacao = '$Consideracoes' WHERE IdOportunidade = '$IdOportunidade';");
  			$atualizarOportunidade->executarQuery();

  			//Insere na Tabela HistoricoOportunidade
		  	 $data = date('d/m/Y');
			 $insereHistoricoOportunidade->set('sql',"INSERT INTO HistoricoOportunidade(DataHistoricoOportunidade, TipoHistoricoOportunidade, Status, IdOportunidade) 
			                            	 				 	   VALUES ('$data','Alterado','Projeto Perdido','$IdOportunidade');");
			 $insereHistoricoOportunidade->executarQuery();

			 echo("<script type='text/javascript' charset='utf-8'> location.href='../../orcamento-lista.php'; alert('Dados Alterados'); </script>");
		  	
		  }	
} 
?>