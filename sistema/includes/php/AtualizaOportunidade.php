<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $atualizaOportunidade = new Conexao();
    $atualizaOportunidade->conectar();
    $atualizaOportunidade->selecionarDB(); 

    $insereHistoricoOportunidade = new Conexao();
    $insereHistoricoOportunidade->conectar();
    $insereHistoricoOportunidade->selecionarDB();


    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo cadastro-holding.html estão completos		*/
    /********************************************************************************************/

if (isset($_POST['SelectStatusOportunidade'], 
		  $_POST['IdOportunidadeAux'],
		  $_POST['DataViabilidade'])) {

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/

    	  $SelectStatusOportunidade =	  $_POST['SelectStatusOportunidade']; 
  		  $IdOportunidade  = $_POST['IdOportunidadeAux'];
  		  $DataViabilidade  = $_POST['DataViabilidade'];
          if ($SelectStatusOportunidade == "Viável") {
             /********************************************************************************************************/
            /*  Seleciona o ID do Responsável para poder inserir na TABELA CadastroEmpresa como chave estrangeira   */
           /********************************************************************************************************/
              $atualizaOportunidade->set('sql',"UPDATE Oportunidade SET Status = '$SelectStatusOportunidade',
                                                                        DataViabilidade = '$DataViabilidade',
                                                                        Viabilidade = 'SIM'
                                                                    WHERE IdOportunidade = '$IdOportunidade ';");
              //Insere na Tabela HistoricoOportunidade
              $insereHistoricoOportunidade->set('sql',"INSERT INTO HistoricoOportunidade(DataHistoricoOportunidade, TipoHistoricoOportunidade, Status, IdOportunidade) 
                                                       VALUES ('$DataViabilidade','Alterado','Viável','$IdOportunidade');");
              $insereHistoricoOportunidade->executarQuery();
              /********************************************************************************************/
              /*                                  Execulta a String SQL                                   */
              /********************************************************************************************/
              if ($atualizaOportunidade->executarQuery()) {
              echo("<script type='text/javascript'> location.href='../../orcamento-lista.php'; alert('Dados cadastrados com sucesso'); </script>");
             }else{
              echo("<script type='text/javascript'> location.href='../../orcamento-lista.php'; alert('Dados não cadastrados'); </script>");
             }


          }else{
             /********************************************************************************************************/
            /*  Seleciona o ID do Responsável para poder inserir na TABELA CadastroEmpresa como chave estrangeira   */
           /********************************************************************************************************/
              $atualizaOportunidade->set('sql',"UPDATE Oportunidade SET Status = '$SelectStatusOportunidade',
                                                                        DataViabilidade = '$DataViabilidade',
                                                                        Viabilidade = 'NÃO'
                                                                    WHERE IdOportunidade = '$IdOportunidade ';");
               //Insere na Tabela HistoricoOportunidade
              $insereHistoricoOportunidade->set('sql',"INSERT INTO HistoricoOportunidade(DataHistoricoOportunidade, TipoHistoricoOportunidade, Status, IdOportunidade) 
                                                       VALUES ('$DataViabilidade','Alterado','Inviavel','$IdOportunidade');");
              $insereHistoricoOportunidade->executarQuery();
              /********************************************************************************************/
              /*                                  Execulta a String SQL                                   */
              /********************************************************************************************/
              if ($atualizaOportunidade->executarQuery()) {
              echo("<script type='text/javascript'> location.href='../../oportunidade-lista.php'; alert('Dados cadastrados com sucesso'); </script>");
             }else{
              echo("<script type='text/javascript'> location.href='../../oportunidade-lista.php'; alert('Dados não cadastrados'); </script>");
             }
         }

  	

}