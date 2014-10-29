<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $insereProcesso = new Conexao();
    $insereProcesso->conectar();
    $insereProcesso->selecionarDB();

if (isset($_POST['SelectHolding'],
          $_POST['SelectRequerente'],
          $_POST['SelectSql'],
          $_POST['NumeroProcesso'],
          $_POST['AssuntoProcesso'])) {       

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/
    $SelectHolding = $_POST['SelectHolding']; 
    $SelectRequerente  = $_POST['SelectRequerente'];
    $SelectSql = $_POST['SelectSql'];
    $NumeroProcesso  = $_POST['NumeroProcesso'];
    $AssuntoProcesso = $_POST['AssuntoProcesso'];
  
    $insereProcesso->set('sql',"INSERT INTO CadastraPocesso(IdEmpresa, IdRequerente,IdImovel,NomeProcesso,AssuntoProcesso) 
                         VALUES ('$SelectHolding','$SelectRequerente','$SelectSql','$NumeroProcesso','$AssuntoProcesso');");

    /********************************************************************************************/
    /*                              Execulta a String SQL                                       */
    /********************************************************************************************/

  if ($insereProcesso->executarQuery()) {
	 	echo("<script type='text/javascript'> location.href='../../processos-cadastrar.php'; alert('Dados cadastrados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../processos-cadastrar.php'; alert('Dados não cadastrados'); </script>");
	 }

}