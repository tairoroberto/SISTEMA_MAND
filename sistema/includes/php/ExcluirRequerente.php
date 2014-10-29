<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $DeletaRequerente = new Conexao('localhost','root','tairo1507','Mand');
    $DeletaRequerente->conectar();
    $DeletaRequerente->selecionarDB();

    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo cadastro-requerente.html estão completos		*/
    /********************************************************************************************/

if (isset($_POST['IdRequerenteAux'])){

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/

		  $IdRequerente  = $_POST['IdRequerenteAux'];
		  

     /********************************************************************************************/
    /*						Muda a String SQL para inserir no banco								*/
    /********************************************************************************************/
 		   
	 $DeletaRequerente->set('sql',"DELETE FROM CadastroRequerente WHERE IdRequerente = '$IdRequerente'");  


  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
  if ($DeletaRequerente->executarQuery()) {
	 	echo("<script type='text/javascript'> location.href='../../requerente-lista.php'; alert('Dados deletados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../requerente-lista.php'; alert('Dados não deletados'); </script>");
	 }

}