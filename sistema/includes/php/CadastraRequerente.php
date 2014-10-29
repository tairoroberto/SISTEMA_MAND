<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $insereRequerente = new Conexao('localhost','root','tairo1507','Mand');
    $insereRequerente->conectar();
    $insereRequerente->selecionarDB();

    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo cadastro-requerente.html estão completos		*/
    /********************************************************************************************/

if (isset($_POST['NomeRequerente'], 
		  $_POST['CpfRequerente'],
		  $_POST['RgRequerente'],
		  $_POST['EnderecoRequerente'],
		  $_POST['NumeroRequerente'],
		  $_POST['BairroRequerente'],
		  $_POST['MunicipioRequerente'],
		  $_POST['CepRequerente'],
		  $_POST['TelefoneRequerente1'],
		  $_POST['TelefoneRequerente2'],
		  $_POST['CelularRequerente'],
		  $_POST['EmailRequerente'],
		  $_POST['SenhaWeb'])){

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/

    	  $NomeRequerente =	  $_POST['NomeRequerente']; 
		  $CpfRequerente  = $_POST['CpfRequerente'];
		  $RgRequerente  = $_POST['RgRequerente'];
		  $EnderecoRequerente  = $_POST['EnderecoRequerente'];
		  $NumeroRequerente  = $_POST['NumeroRequerente'];
		  $BairroRequerente  = $_POST['BairroRequerente'];
		  $MunicipioRequerente  = $_POST['MunicipioRequerente'];
		  $CepRequerente  = $_POST['CepRequerente'];
		  $TelefoneRequerente1  = $_POST['TelefoneRequerente1'];
		  $TelefoneRequerente2  = $_POST['TelefoneRequerente2'];
		  $CelularRequerente  = $_POST['CelularRequerente'];
		  $EmailRequerente  = $_POST['EmailRequerente'];
		  $SenhaWeb  = $_POST['SenhaWeb'];

     /********************************************************************************************/
    /*						Muda a String SQL para inserir no banco								*/
    /********************************************************************************************/
 		   
	 $insereRequerente->set('sql',"INSERT INTO CadastroRequerente(Nome, Cpf, Rg, Endereco, Numero, Bairro, Municipio, Cep, Telefone1, Telefone2,Celular, Email,SenhaWeb) 
	 					  VALUES ('$NomeRequerente','$CpfRequerente','$RgRequerente','$EnderecoRequerente','$NumeroRequerente',
	 					  	      '$BairroRequerente','$MunicipioRequerente','$CepRequerente','$TelefoneRequerente1',
	 					  	      '$TelefoneRequerente2','$CelularRequerente','$EmailRequerente','$SenhaWeb');");  


  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
  if ($insereRequerente->executarQuery()) {
	 	echo("<script type='text/javascript'> location.href='../../requerente-cadastro.php'; alert('Dados cadastrados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../requerente-cadastro.php'; alert('Dados não cadastrados'); </script>");
	 }

}