 <?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $insereOrcamentoA = new Conexao();
    $insereOrcamentoA->conectar();
    $insereOrcamentoA->selecionarDB();

    $insereServicoOrcamentoA = new Conexao();
    $insereServicoOrcamentoA->conectar();
    $insereServicoOrcamentoA->selecionarDB();

	$atualizarOportunidade = new Conexao();
    $atualizarOportunidade->conectar();
    $atualizarOportunidade->selecionarDB();

    $verifica1 = false;
    $verifica2 = false;
    $verifica3 = false;
    $verifica4 = false;
    $verificaArray = false;


    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo cadastro-holding.html estão completos		*/
    /********************************************************************************************/
if(isset($_POST['SelectRazaoSocial'], 
		  $_POST['SelectNomeContato'],
		  $_POST['Taxas'],
		  $_POST['FormaDePagamento'],
		  $_POST['Prazo'],
		  $_POST['ComentariosOrcamentoA'],
		  $_POST['TotalOrcamentoA'],
		  $_POST['DataOrcamentoA'],
      $_POST['IdOportunidadeAux'])){


	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/

    	$SelectRazaoSocial =	$_POST['SelectRazaoSocial']; 
		  $SelectNomeContato  = $_POST['SelectNomeContato'];		  
		  $Taxas  = $_POST['Taxas'];
		  $FormaDePagamento  = $_POST['FormaDePagamento'];
		  $Prazo  = $_POST['Prazo'];
		  $ComentariosOrcamentoA  = $_POST['ComentariosOrcamentoA'];
		  $TotalOrcamentoA  = $_POST['TotalOrcamentoA']; 
		  $DataOrcamentoA  = $_POST['DataOrcamentoA'];
      $IdOportunidade  = $_POST['IdOportunidadeAux']; 


     /********************************************************************************************/
    /*						Muda a String SQL para inserir no banco								*/
    /********************************************************************************************/
 		   
	 $insereOrcamentoA->set('sql',"INSERT INTO CadastraOrcamentoA(RazaoSocial, NomeContato, Taxas, FormaPagamento, Prazo, ComentariosOrcamento, TotalOrcamentoA, DataOrcamentoA,IdOportunidade) 
	 					  VALUES ('$SelectRazaoSocial','$SelectNomeContato','$Taxas','$FormaDePagamento','$Prazo','$ComentariosOrcamentoA','$TotalOrcamentoA','$DataOrcamentoA','$IdOportunidade');");  
   
  	 $insereOrcamentoA->executarQuery();

  	 $atualizarOportunidade->set('sql',"UPDATE Oportunidade SET Status = 'Pronto para enviar'
                                                            WHERE IdOportunidade = '$IdOportunidade';");
  	 $atualizarOportunidade->executarQuery();


}

$insereOrcamentoA->set('sql',"SELECT `IdOrcamentoA` FROM `CadastraOrcamentoA`  WHERE `IdOportunidade` = '$IdOportunidade' ;");
$retornoServico = mysql_fetch_object($insereOrcamentoA->executarQuery()); 

if(isset($_POST['SelectServico1'],$_POST['Valor1'])){
			$SelectServico1  = $_POST['SelectServico1'];
		  	$Valor1  = $_POST['Valor1'];


		   if ($SelectServico1 != "Selecionar...") {		    

            $insereServicoOrcamentoA->set('sql',"INSERT INTO OrcamentoAServicos(IdServico, Valor, IdOrcamentoA,IdOportunidade) 
                                 VALUES ('$SelectServico1','$Valor1 ','$retornoServico->IdOrcamentoA','$IdOportunidade');");
            $insereServicoOrcamentoA->executarQuery();

            $verifica1 = true;
		   }


		}


if(isset($_POST['SelectServico2'],$_POST['Valor2'])){
		    $SelectServico2  = $_POST['SelectServico2'];
		    $Valor2  = $_POST['Valor2'];

			if ($SelectServico2 != "Selecionar...") {

            $insereServicoOrcamentoA->set('sql',"INSERT INTO OrcamentoAServicos(IdServico, Valor, IdOrcamentoA,IdOportunidade) 
                                 VALUES ('$SelectServico2','$Valor2 ','$retornoServico->IdOrcamentoA','$IdOportunidade');");
            $insereServicoOrcamentoA->executarQuery();

            $verifica2 = true;
			}

		}


if(isset($_POST['SelectServico3'],$_POST['Valor3'])){
			$SelectServico3  = $_POST['SelectServico3'];
		    $Valor3  = $_POST['Valor3'];

			if ($SelectServico3 != "Selecionar...") {
            $insereServicoOrcamentoA->set('sql',"INSERT INTO OrcamentoAServicos(IdServico, Valor, IdOrcamentoA,IdOportunidade) 
                                 VALUES ('$SelectServico3','$Valor3 ','$retornoServico->IdOrcamentoA','$IdOportunidade');");
            $insereServicoOrcamentoA->executarQuery();

            $verifica3 = true;
			}

		}


if(isset($_POST['SelectServico4'],$_POST['Valor4'])){
			$SelectServico4  = $_POST['SelectServico4'];
		    $Valor4  = $_POST['Valor4'];

			if ($SelectServico4 != "Selecionar...") {

            $insereServicoOrcamentoA->set('sql',"INSERT INTO OrcamentoAServicos(IdServico, Valor, IdOrcamentoA,IdOportunidade) 
                                 VALUES ('$SelectServico4','$Valor4 ','$retornoServico->IdOrcamentoA','$IdOportunidade');");
            $insereServicoOrcamentoA->executarQuery();

            $verifica4 = true;
			}
		    
		}


if(isset($_POST["SelectServicoArray"],$_POST["ValorArray"])){
        // Faz loop pelo array dos campos:
		$SelectServicoArray = $_POST["SelectServicoArray"];
		$ValorArray = $_POST["ValorArray"];
		$i = 0;
		$j = 0;

    set_time_limit(120);

	while($i < count($SelectServicoArray) && $j < count($ValorArray)){
		if ($SelectServicoArray[$i] != "Selecionar...") {

            $insereServicoOrcamentoA->set('sql',"INSERT INTO OrcamentoAServicos(IdServico, Valor, IdOrcamentoA,IdOportunidade) 
                                 VALUES ('$SelectServicoArray[$i]','$ValorArray[$j]','$retornoServico->IdOrcamentoA','$IdOportunidade');");
            $insereServicoOrcamentoA->executarQuery();
            	
			$i++;
			$j++;			
		}

	}          
      
       $verificaArray = true;	
}


  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
  if (($verifica1 = true) &&
  	  ($verifica2 = true) &&
  	  ($verifica3 = true) &&
  	  ($verifica4 = true) &&
  	  ($verificaArray = true)) {
		echo("<script type='text/javascript'> location.href='../../orcamento-lista.php'; alert('Dados cadastrados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../orcamento-lista.php'; alert('Dados não cadastrados'); </script>");
	 }





