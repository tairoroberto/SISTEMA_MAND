<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $insereServico = new Conexao('localhost','root','tairo1507','Mand');
    $insereServico->conectar();
    $insereServico->selecionarDB();

    $insereDocumento = new Conexao('localhost','root','tairo1507','Mand');
    $insereDocumento->conectar();
    $insereDocumento->selecionarDB();

    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo cadastro-holding.html estão completos		*/
    /********************************************************************************************/
$DocumentoArray;
$TituloServico;
$Explicacao;
$Documento;
$VerificaTermino = false;



if (isset($_POST['IdServicoAux'])) {       

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/
    $TituloServico = $_POST['TituloServico']; 
    $Explicacao  = $_POST['Explicacao'];
    $IdServico = $_POST['IdServicoAux'];
  
     /********************************************************************************************/
    /*						Muda a String SQL para inserir no banco								*/
    /********************************************************************************************/
 		   
	 $insereServico->set('sql',"UPDATE Servicos SET TituloServico = '$TituloServico', 
                                                    ExplicacaoServico = '$Explicacao' 
                                                WHERE IdServico = '$IdServico'");  
  
  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
	$insereServico->executarQuery();


    /***********************************************************************************************************/
    /*   Verificar se foram acresentados mais cmpos de documentos e muda a STRING SQL para inserção no banco   */
    /***********************************************************************************************************/
   if(isset($_POST["DocumentoArray"])){
        // Faz loop pelo array dos campos:
        $i = 0;
        $j = 0;
        $DocumentoArray = $_POST["DocumentoArray"];
        $IdDocumento = $_POST["IdDocumentoAux"];

      while($i < count($DocumentoArray) && $j < count($IdDocumento)){
            $insereDocumento->set('sql',"UPDATE ServicosDocumento 
                                         SET NomeDocumento = '$DocumentoArray[$i]'
                                         WHERE IdDocumento = '$IdDocumento[$j]' ");
            $insereDocumento->executarQuery();
            $i++;
            $j++;
      } 
       $VerificaTermino = true; 
   }



  	/**********************************************************************************************************************/
    /*Verifica se campos  foram inseridos com sucesso, se não houver erro retornará para a pagina de cadastro de serviços */
    /**********************************************************************************************************************/
  if ($VerificaTermino = true) {
	 	echo("<script type='text/javascript'> location.href='../../servicos-lista.php'; alert('Dados cadastrados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../servicos-lista.php'; alert('Dados não cadastrados'); </script>");
	 }

}