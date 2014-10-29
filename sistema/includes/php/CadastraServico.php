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



if (isset($_POST['TituloServico'],$_POST['Explicacao'],$_POST['Documento'])) {       

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/
    $TituloServico = $_POST['TituloServico']; 
    $Explicacao  = $_POST['Explicacao'];
    $Documento = $_POST['Documento'];
  
     /********************************************************************************************/
    /*						Muda a String SQL para inserir no banco								*/
    /********************************************************************************************/
 		   
	 $insereServico->set('sql',"INSERT INTO Servicos(TituloServico, ExplicacaoServico) 
	 					  VALUES ('$TituloServico','$Explicacao');");  
  
  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
	$insereServico->executarQuery();

    /********************************************************************************************/
    /*                      Muda a String SQL para inserir no banco                             */
    /********************************************************************************************/

    $insereServico->set('sql',"SELECT `IdServico` FROM `Servicos` WHERE `TituloServico` = '$TituloServico' AND 
                                                                        `ExplicacaoServico` = '$Explicacao' ;");
    $retornoServico = mysql_fetch_object($insereServico->executarQuery()); 

    $insereDocumento->set('sql',"INSERT INTO ServicosDocumento(NomeDocumento, IdServico) 
                         VALUES ('$Documento','$retornoServico->IdServico');");

    /********************************************************************************************/
    /*                              Execulta a String SQL                                       */
    /********************************************************************************************/
    $insereDocumento->executarQuery();

    /***********************************************************************************************************/
    /*   Verificar se foram acresentados mais cmpos de documentos e muda a STRING SQL para inserção no banco   */
    /***********************************************************************************************************/
   if(isset($_POST["DocumentoArray"])){
        // Faz loop pelo array dos campos:
     
        foreach($_POST["DocumentoArray"] as $campo) {
            $DocumentoArray  =  $campo;
           
            $insereServico->set('sql',"SELECT `IdServico` FROM `Servicos` WHERE `TituloServico` = '$TituloServico' AND 
                                                                                `ExplicacaoServico` = '$Explicacao' ;");
            $retornoServico = mysql_fetch_object($insereServico->executarQuery()); 

            $insereDocumento->set('sql',"INSERT INTO ServicosDocumento(NomeDocumento, IdServico) 
                                 VALUES ('$DocumentoArray','$retornoServico->IdServico');");

    /********************************************************************************************/
    /*                              Execulta a String SQL                                       */
    /********************************************************************************************/            
            $insereDocumento->executarQuery();

            
        }
        $VerificaTermino = true;
}

  	/**********************************************************************************************************************/
    /*Verifica se campos  foram inseridos com sucesso, se não houver erro retornará para a pagina de cadastro de serviços */
    /**********************************************************************************************************************/
  if ($VerificaTermino = true) {
	 	echo("<script type='text/javascript'> location.href='../../servico-cadastro.php'; alert('Dados cadastrados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../servico-cadastro.php'; alert('Dados não cadastrados'); </script>");
	 }

}