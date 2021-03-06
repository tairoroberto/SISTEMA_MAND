 <?php

	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include ('../../sistema/includes/php/conexao/Conexao.class.php'); 
    include ('../../sistema/includes/php/conexao/PHPMailer-master/class.phpmailer.php');
    include('EnviarEmail.php');
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/

	$atualizarOportunidade = new Conexao();
    $atualizarOportunidade->conectar();
    $atualizarOportunidade->selecionarDB();

    $insereHistoricoOportunidade = new Conexao();
    $insereHistoricoOportunidade->conectar();
    $insereHistoricoOportunidade->selecionarDB();

  
    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo cadastro-holding.html estão completos		*/
    /********************************************************************************************/
	if(isset($_POST['IdOportunidadeAux'],
			 $_POST['IdOrcamentoBAux'], 
		 	 $_POST['motivo'])){

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/

    	  $IdOportunidade =	$_POST['IdOportunidadeAux']; 
		  $IdOrcamentoB  = $_POST['IdOrcamentoBAux'];
		  $motivo  = $_POST['motivo'];	


		  if (isset($_POST['observacaoValor']) && $_POST['observacaoValor']!= "") {
		 	$observacaoValor  = $_POST['observacaoValor'];
		 	//Atualiza status da oprtunidade
		    $atualizarOportunidade->set('sql',"UPDATE Oportunidade SET Status = 'Rejeitado', 
		  															 ComentariosSolicitacao = '$motivo',
		  															 ValorQueClienteQueria = '$observacaoValor'
		  														 WHERE IdOportunidade = '$IdOportunidade';");
		 }elseif (isset($_POST['observacaoEspe'])&& $_POST['observacaoEspe']!= "") {
		 	$observacaoEspe  = $_POST['observacaoEspe'];
			//Atualiza status da oprtunidade
		    $atualizarOportunidade->set('sql',"UPDATE Oportunidade SET Status = 'Rejeitado', 
		  															 ComentariosSolicitacao = '$motivo',
		  															 ValorQueClienteQueria = '$observacaoEspe'
		  														 WHERE IdOportunidade = '$IdOportunidade';");
		 }elseif (isset($_POST['observacaoOutros'])&& $_POST['observacaoOutros']!= "") {
		 	$observacaoOutros  = $_POST['observacaoOutros'];
		 	//Atualiza status da oprtunidade
		    $atualizarOportunidade->set('sql',"UPDATE Oportunidade SET Status = 'Rejeitado', 
		  															 ComentariosSolicitacao = '$motivo',
		  															 ValorQueClienteQueria = '$observacaoOutros'
		  														 WHERE IdOportunidade = '$IdOportunidade';");
		 } 

		  
  		  $atualizarOportunidade->executarQuery();

  		  //Insere na Tabela HistoricoOportunidade
		  $data = date('d/m/Y');
		  $insereHistoricoOportunidade->set('sql',"INSERT INTO HistoricoOportunidade(DataHistoricoOportunidade, TipoHistoricoOportunidade, Status, IdOportunidade) 
		                           	 				 	   VALUES ('$data','Alterado','Cliente Rejeitou','$IdOportunidade');");
		 

		 if (isset($_POST['observacaoValor']) && $_POST['observacaoValor']!= "") {
		 	$observacaoValor  = $_POST['observacaoValor'];
		 	enviarEmail("atendimento@mandprojetos.com.br","REJEITOU o orçamento, Motivo: ".$motivo.",Observação: ".$observacaoValor." ",$IdOportunidade,$IdOrcamentoB);
		 
		 }elseif (isset($_POST['observacaoEspe']) && $_POST['observacaoEspe'] != "") {
		 	$observacaoEspe  = $_POST['observacaoEspe'];
		 	enviarEmail("atendimento@mandprojetos.com.br","REJEITOU o orçamento, Motivo: ".$motivo.",Observação: ".$observacaoEspe." ",$IdOportunidade,$IdOrcamentoB);
		 
		 }elseif (isset($_POST['observacaoOutros']) && $_POST['observacaoOutros'] != "") {
		 	$observacaoOutros  = $_POST['observacaoOutros'];
		 	enviarEmail("atendimento@mandprojetos.com.br","REJEITOU o orçamento, Motivo: ".$motivo.",Observação: ".$observacaoOutros." ",$IdOportunidade,$IdOrcamentoB);
		 }


		 //atendimento@mandprojetos.com.br trocar     -----     email

		  if (($atualizarOportunidade->executarQuery()) && ($insereHistoricoOportunidade->executarQuery())){
		  	echo("<script type='text/javascript' charset='utf-8'> location.href='http://mandprojetos.com.br'; alert('Obrigado Entraremos em contato'); </script>");
		  }else{
		  	echo("<script type='text/javascript' charset='utf-8'> location.href='http://mandprojetos.com.br'; alert('Erro ao enviar'); </script>");
		  }
}else{
	
} 

?>