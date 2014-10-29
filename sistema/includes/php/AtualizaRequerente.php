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
		  $IdRequerente  = $_POST['IdRequerenteAux'];
		  

     /********************************************************************************************/
    /*						Muda a String SQL para inserir no banco								*/
    /********************************************************************************************/
 		   
	 $insereRequerente->set('sql',"UPDATE CadastroRequerente SET Nome = '$NomeRequerente', 
	 															 Cpf = '$CpfRequerente', 
	 															 Rg = '$RgRequerente', 
	 															 Endereco = '$EnderecoRequerente', 
	 															 Numero = '$NumeroRequerente',
	 															 Bairro = '$BairroRequerente', 
	 															 Municipio = '$MunicipioRequerente', 
	 															 Cep = '$CepRequerente', 
	 															 Telefone1 = '$TelefoneRequerente1', 
	 															 Telefone2 = '$TelefoneRequerente2',
	 															 Celular = '$CelularRequerente', 
	 															 Email = '$EmailRequerente',
	 															 SenhaWeb = '$SenhaWeb' 
	 														  WHERE IdRequerente = '$IdRequerente'");  


  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
  if ($insereRequerente->executarQuery()) {
	 	echo("<script type='text/javascript'> location.href='../../requerente-lista.php'; alert('Dados atualizados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../requerente-lista.php'; alert('Dados não atualizados'); </script>");
	 }

}