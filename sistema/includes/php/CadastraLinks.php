<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $insereLink = new Conexao('localhost','root','tairo1507','Mand');
    $insereLink->conectar();
    $insereLink->selecionarDB();


if (isset($_POST['NomeExibicao'],
          $_POST['Url'])) {       



	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/
    $NomeExibicao = $_POST['NomeExibicao']; 
    $Url  = $_POST['Url'];

   $UrlCompleta = $Url;

  
    $insereLink->set('sql',"INSERT INTO CadastraLinks(NomeExibicao, Url) 
                         VALUES ('$NomeExibicao','$UrlCompleta');");

    /********************************************************************************************/
    /*                              Execulta a String SQL                                       */
    /********************************************************************************************/

  if ($insereLink->executarQuery()) {
	 	echo("<script type='text/javascript'> location.href='../../links-cadastro.php'; alert('Dados cadastrados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../links-cadastro.php'; alert('Dados não cadastrados'); </script>");
	 }



}