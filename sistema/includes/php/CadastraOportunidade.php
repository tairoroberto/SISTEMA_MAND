<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $insereOportunidade = new Conexao();
    $insereOportunidade->conectar();
    $insereOportunidade->selecionarDB();

    $insereHistoricoOportunidade = new Conexao();
    $insereHistoricoOportunidade->conectar();
    $insereHistoricoOportunidade->selecionarDB();

    $buscaUsuario = new Conexao();
    $buscaUsuario->conectar();
    $buscaUsuario->selecionarDB();


    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo cadastro-holding.html estão completos		*/
    /********************************************************************************************/

if (isset($_POST['TipoContato'], 
		  $_POST['Origem'],
		  $_POST['TipoCadastro'],
		  $_POST['RazaoSocial'],
		  $_POST['NomeContato'],
		  $_POST['CnpjCpf'],
		  $_POST['Atividade'],
		  $_POST['Celular'],
		  $_POST['Telefone'],
		  $_POST['Email'],

		  $_POST['ServicoSolicitado'],
		  $_POST['EnderecoArea'],
		  $_POST['ContribuinteIptu'],
		  $_POST['ComentariosSolicitacao'],
		  $_POST['DataSolicitacao'],
          $_POST['SelectTecnico']
	)) {

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/

    	  $TipoContato =	  $_POST['TipoContato']; 
		  $Origem  = $_POST['Origem'];
		  $TipoCadastro  = $_POST['TipoCadastro'];
		  $RazaoSocial  = $_POST['RazaoSocial'];
		  $NomeContato  = $_POST['NomeContato'];
		  $CnpjCpf  = $_POST['CnpjCpf'];
		  $Atividade  = $_POST['Atividade'];
		  $Celular  = $_POST['Celular'];
		  $Telefone  = $_POST['Telefone'];
		  $Email  = $_POST['Email'];

		  $ServicoSolicitado  = $_POST['ServicoSolicitado'];
		  $EnderecoArea  = $_POST['EnderecoArea'];
		  $ContribuinteIptu  = $_POST['ContribuinteIptu'];
		  $ComentariosSolicitacao  = $_POST['ComentariosSolicitacao'];
		  $DataSolicitacao  = $_POST['DataSolicitacao'];
          $SelectTecnico  = $_POST['SelectTecnico'];
          $DataProrrogacao = '';
   

    /********************************************************************************************/
    /*						Validação da data para inserção no banco							*/
    /********************************************************************************************/		 
    $DataSolicitacao2;

		if (strlen($DataSolicitacao) > 8 ) {
			$DataSolicitacao2 = substr($DataSolicitacao,6,4)."/".substr($DataSolicitacao,3,2)."/".substr($DataSolicitacao,0,2);

		}else{			
		  $DataSolicitacao2 = substr($DataSolicitacao,4,4)."/".substr($DataSolicitacao,2,2)."/".substr($DataSolicitacao,0,2);
		}

    $buscaUsuario->set('sql',"SELECT `IdUsuario` FROM `Usuarios` WHERE `IdUsuario` = '$SelectTecnico';");
    $retornoUsuario = mysql_fetch_object($buscaUsuario->executarQuery());    	  
    
     /********************************************************************************************/
    /*						Muda a String SQL para inserir no banco								*/
    /********************************************************************************************/
 		   
    	$insereOportunidade->set('sql',"INSERT INTO Oportunidade(TipoContato, Origem, TipoCadastro, RazaoSocial, 
                                                                 NomeContato, CnpjCpf, Atividade, Celular,Telefone, Email,ServicoSolicitado,
                                                                 EnderecoArea, ContribuinteIptu, ComentariosSolicitacao, 
                                                                 DataSolicitacao, DataViabilidade,DataProrrogacao, Status,ValorQueClienteQueria,Viabilidade, IdUsuario) 
                            	 				 	   VALUES ('$TipoContato','$Origem','$TipoCadastro','$RazaoSocial',
                                                               '$NomeContato','$CnpjCpf','$Atividade','$Celular','$Telefone','$Email',
                                                               '$ServicoSolicitado','$EnderecoArea','$ContribuinteIptu',
                                                               '$ComentariosSolicitacao','$DataSolicitacao2','','$DataProrrogacao', 'Ficha Tecnica', '','', '$retornoUsuario->IdUsuario');");  
  
  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
  	if ($insereOportunidade->executarQuery()) {
  		$insereOportunidade->set('sql',"SELECT `IdOportunidade` FROM `Oportunidade`  WHERE TipoContato = '$TipoContato' AND  
		  																				   Origem = '$Origem' AND 
		  																				   TipoCadastro  = '$TipoCadastro' AND 
		  																				   RazaoSocial  = '$RazaoSocial' AND 
						                                                                   NomeContato  = '$NomeContato' AND 
						                                                                   Atividade = '$Atividade' AND 
						                                                                   Celular = '$Celular' AND 
						                                                                   Telefone = '$Telefone' AND 
						                                                                   Email = '$Email' AND 
						                                                                   ServicoSolicitado = '$ServicoSolicitado' AND 
						                                                                   EnderecoArea  = '$EnderecoArea' AND 
						                                                                   ContribuinteIptu  = '$ContribuinteIptu' AND 
						                                                                   ComentariosSolicitacao  = '$ComentariosSolicitacao' AND 
						                                                                   DataSolicitacao = '$DataSolicitacao2' AND 
						                                                                   DataViabilidade = '' AND 
						                                                                   Status  = 'Ficha Tecnica' AND 
						                                                                   Viabilidade = ''  AND 
						                                                                   IdUsuario = '$retornoUsuario->IdUsuario'");
		$retornoOprtunidade = mysql_fetch_object($insereOportunidade->executarQuery()); 

		//Insere na Tabela HistoricoOportunidade
		$insereHistoricoOportunidade->set('sql',"INSERT INTO HistoricoOportunidade(DataHistoricoOportunidade, TipoHistoricoOportunidade, Status, IdOportunidade) 
	                            	 				 	   VALUES ('$DataSolicitacao2','','Ficha Tecnica','$retornoOprtunidade->IdOportunidade');");
		$insereHistoricoOportunidade->executarQuery();


	 	echo("<script type='text/javascript'> location.href='../../oportunidade-cadastro.php'; alert('Dados cadastrados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../oportunidade-cadastro.php'; alert('Dados não cadastrados'); </script>");
	 }

}


  