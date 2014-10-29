<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $atualizaImovel = new Conexao();
    $atualizaImovel->conectar();
    $atualizaImovel->selecionarDB();

    $buscarFoto = new Conexao();
    $buscarFoto->conectar();
    $buscarFoto->selecionarDB();
    

    $buscaHolding = new Conexao();
    $buscaHolding->conectar();
    $buscaHolding->selecionarDB();
    
    $buscaRequerente = new Conexao();
    $buscaRequerente->conectar();
    $buscaRequerente->selecionarDB();
    
    $insereHistoricoImovel = new Conexao();
    $insereHistoricoImovel->conectar();
    $insereHistoricoImovel->selecionarDB();
    
    $insereOutrosLotes = new Conexao();
    $insereOutrosLotes->conectar();
    $insereOutrosLotes->selecionarDB();

    $insereProcessos = new Conexao();
    $insereProcessos->conectar();
    $insereProcessos->selecionarDB();

    $insereDadosAdicionais = new Conexao();
    $insereDadosAdicionais->conectar();
    $insereDadosAdicionais->selecionarDB();

    $insereRestricoes = new Conexao();
    $insereRestricoes->conectar();
    $insereRestricoes->selecionarDB();
    
    $QuadraFiscal;
    $NomeQuadraFiscal = null;
    $CaminhoQuadraFiscal;
    
    $Geomapas;
    $NomeGeomapas = null;
    $CaminhoGeomapas;
    
    $ImagemLocal;
    $NomeImagemLocal = null;
    $CaminhoImagemLocal;

    $error =  array();
        
    /********************************************************************************************/
    /*                      Função para inserir imagem3 no banco de dados                       */
    /********************************************************************************************/

// Se o usuário clicou no botão cadastrar efetua as ações
   if (!empty($_FILES['QuadraFiscal'])){


    $QuadraFiscal = $_FILES["QuadraFiscal"];
 
    // Se a foto estiver sido selecionada
    if (!empty($QuadraFiscal["name"])) {
 
        // Largura máxima em pixels
        $largura = 50000000;
        // Altura máxima em pixels
        $altura = 50000000;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 100000000000;
 
        // Verifica se o arquivo é uma imagem
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $QuadraFiscal["type"])){
           $error[1] = "Isso não é uma imagem.";
        } 
 
        // Pega as dimensões da imagem
        $dimensoes = getimagesize($QuadraFiscal["tmp_name"]);
 
        // Verifica se a largura da imagem é maior que a largura permitida
        if($dimensoes[0] > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }
 
        // Verifica se a altura da imagem é maior que a altura permitida
        if($dimensoes[1] > $altura) {
            $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
        }
 
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if($QuadraFiscal["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
        } 
        // Se não houver nenhum erro
        if (count($error) == 0) {
 
            // Pega extensão da imagem
            preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $QuadraFiscal["name"], $ext);
 
            // Gera um nome único para a imagem
            $NomeQuadraFiscal = md5(uniqid(time())) . "." . $ext[1];
 
            // Caminho de onde ficará a imagem
            $CaminhoQuadraFiscal = "fotos/Imovel/" . $NomeQuadraFiscal;
 
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($QuadraFiscal["tmp_name"], $CaminhoQuadraFiscal);
 
        }
 
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "";
            }
        }
    }
}else{
    $NomeQuadraFiscal = null;
}

  
    
    
/********************************************************************************************/
/*                      Função para inserir imagem3 no banco de dados                       */
/********************************************************************************************/

// Se o usuário clicou no botão cadastrar efetua as ações
if (!empty($_FILES['Geomapas'])){


	$Geomapas = $_FILES["Geomapas"];

	// Se a foto estiver sido selecionada
	if (!empty($Geomapas["name"])) {

		// Largura máxima em pixels
		$largura = 50000000;
		// Altura máxima em pixels
		$altura = 50000000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 100000000000;

		// Verifica se o arquivo é uma imagem
		if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $Geomapas["type"])){
			$error[1] = "Isso não é uma imagem.";
		}

		// Pega as dimensões da imagem
		$dimensoes = getimagesize($Geomapas["tmp_name"]);

		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}

		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}

		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($Geomapas["size"] > $tamanho) {
			$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
		// Se não houver nenhum erro
		if (count($error) == 0) {

			// Pega extensão da imagem
			preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $Geomapas["name"], $ext);

			// Gera um nome único para a imagem
			$NomeGeomapas = md5(uniqid(time())) . "." . $ext[1];

			// Caminho de onde ficará a imagem
			$CaminhoGeomapas = "fotos/Imovel/" . $NomeGeomapas;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($Geomapas["tmp_name"], $CaminhoGeomapas);

		}

		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "";
			}
		}
	}
}else{
	$NomeGeomapas = null;
}



/********************************************************************************************/
/*                      Função para inserir imagem3 no banco de dados                       */
/********************************************************************************************/

// Se o usuário clicou no botão cadastrar efetua as ações
if (!empty($_FILES['ImagemLocal'])){


	$ImagemLocal = $_FILES["ImagemLocal"];

	// Se a foto estiver sido selecionada
	if (!empty($ImagemLocal["name"])) {

		// Largura máxima em pixels
		$largura = 50000000;
		// Altura máxima em pixels
		$altura = 50000000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 100000000000;

		// Verifica se o arquivo é uma imagem
		if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $ImagemLocal["type"])){
			$error[1] = "Isso não é uma imagem.";
		}

		// Pega as dimensões da imagem
		$dimensoes = getimagesize($ImagemLocal["tmp_name"]);

		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}

		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}

		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($ImagemLocal["size"] > $tamanho) {
			$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
		// Se não houver nenhum erro
		if (count($error) == 0) {

			// Pega extensão da imagem
			preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $ImagemLocal["name"], $ext);

			// Gera um nome único para a imagem
			$NomeImagemLocal = md5(uniqid(time())) . "." . $ext[1];

			// Caminho de onde ficará a imagem
			$CaminhoImagemLocal = "fotos/Imovel/" . $NomeImagemLocal;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($ImagemLocal["tmp_name"], $CaminhoImagemLocal);

		}

		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "";
			}
		}
	}
}else{
	$NomeImagemLocal = null;
}

    
    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo imovel-cadastro.html estão completos			*/
    /********************************************************************************************/

if (isset($_POST['IdImovelAux'])) {

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/
    	  $IdImovel =	  $_POST['IdImovelAux']; 
    	  $DataEmissao =	  $_POST['DataEmissao']; 
		  $CodigoImovel  = $_POST['CodigoImovel'];
		  $SelectHolding  = $_POST['SelectHolding'];
		  $SelectRequerente  = $_POST['SelectRequerente'];
		  $NomeExibicao  = $_POST['NomeExibicao'];

		  $NumeroContribuinte  = $_POST['NumeroContribuinte'];
		  $MatriculaContribuinte  = $_POST['MatriculaContribuinte'];
		  $NomeContribuinte  = $_POST['NomeContribuinte'];
		  $CpfCnpj  = $_POST['CpfCnpj'];
		  $LocalImovel  = $_POST['LocalImovel'];
		  $Cep  = $_POST['Cep'];
		  $Codlog  = $_POST['Codlog'];
		  $AreaTerreno  = $_POST['AreaTerreno'];
		  $Testada  = $_POST['Testada'];
		  $AreaConstruida  = $_POST['AreaConstruida'];
		  $FracaoIdeal  = $_POST['FracaoIdeal'];
		  $AnoConstrucao  = $_POST['AnoConstrucao'];
		  $UsoImovel  = $_POST['UsoImovel'];

		  $Zona  = $_POST['Zona'];
		  $CaBasico  = $_POST['CaBasico'];
		  $Distrito  = $_POST['Distrito'];
		  $SubPrefeitura  = $_POST['SubPrefeitura'];
		  $CaMaximo  = $_POST['CaMaximo'];
		  $Gabarito  = $_POST['Gabarito'];
		  $ToImovel  = $_POST['ToImovel'];
		  $TxPerm  = $_POST['TxPerm'];
		  $LargVia  = $_POST['LargVia'];
		  $ClassificacaoVia  = $_POST['ClassificacaoVia'];
		  $PagGeomapas  = $_POST['PagGeomapas'];
		  $ComentariosZoneamento  = $_POST['ComentariosZoneamento'];

		  $SituacaoOperacaoUrbana  = $_POST['SituacaoOperacaoUrbana'];
		  $ComentariosOperacaoUrbana  = $_POST['ComentariosOperacaoUrbana'];

		  $ExerciciosIptu  = $_POST['ExerciciosIptu'];
		  $ValorTolalIptu  = $_POST['ValorTolalIptu'];
		  $ExerciciosMultas  = $_POST['ExerciciosMultas'];
		  $ValorTolalMultas  = $_POST['ValorTolalMultas'];
		  $TotalExercicios  = $_POST['TotalExercicios'];
		  $ComentariosDividas  = $_POST['ComentariosDividas'];
		  $EnderecoMapa  = $_POST['EnderecoMapaAux'];
		  $SituacaoImovel  = "";


		  if ($ComentariosDividas == "Comentários") {
		  	$ComentariosDividas = "";
		  }if ($ComentariosZoneamento =="Comentários") {
		  	$ComentariosZoneamento = "";
		  }if ($ComentariosOperacaoUrbana =="Comentários") {
		  	$ComentariosOperacaoUrbana = "";
		  }



		$caminho = "fotos/Imovel/";
		$buscarFoto->set('sql',"SELECT QuadraFiscal,Geomapas,ImagemLocal,ImagemMapa,CodigoImovel 
								FROM CadastraImovel 
								WHERE IdImovel = $IdImovel ");
         
         if( $retornoFoto = mysql_fetch_object($buscarFoto->executarQuery())){
         	if (($retornoFoto->QuadraFiscal != null) && ($NomeQuadraFiscal != null)) {
         		unlink($caminho.$retornoFoto->QuadraFiscal);
         	}
         	if (($retornoFoto->Geomapas != null) && ($NomeGeomapas != null)) {
         		unlink($caminho.$retornoFoto->Geomapas);
         	}
         	if (($retornoFoto->ImagemLocal != null) && ($NomeImagemLocal != null)) {
         		unlink($caminho.$retornoFoto->ImagemLocal);
         	}
		  
		  }	

		  if( $retornoFoto = mysql_fetch_object($buscarFoto->executarQuery())){
            if (($retornoFoto->QuadraFiscal != null) && ($NomeQuadraFiscal == null)) {
                $NomeQuadraFiscal = $retornoFoto->QuadraFiscal;
            }
            if (($retornoFoto->Geomapas != null) && ($NomeGeomapas == null)) {
                $NomeGeomapas = $retornoFoto->Geomapas;
            }
            if (($retornoFoto->ImagemLocal != null) && ($NomeImagemLocal ==null)) {
                $NomeImagemLocal = $retornoFoto->ImagemLocal;
            }
          }	


		    


 function get_furl($url) {
    $furl = false;
// First check response headers
    $headers = get_headers($url);
// Test for 301 or 302
    if(preg_match('/^HTTP\/\d\.\d\s+(301|302)/',$headers[0])) {
        foreach($headers as $value) {
            if(substr(strtolower($value), 0, 9) == "location:") {
                $furl = trim(substr($value, 9, strlen($value)));
            }
        }
    }
// Set final URL
    $furl = ($furl) ? $furl : $url;
    return $furl;
}


function recebe_imagem ($url_origem,$arquivo_destino){ 
	$minha_curl = curl_init ($url_origem); 
	$fs_arquivo = fopen ($arquivo_destino, "w+b"); 
	curl_setopt ($minha_curl, CURLOPT_FILE, $fs_arquivo); 
	curl_setopt ($minha_curl, CURLOPT_HEADER, 0); 
	curl_exec ($minha_curl); 
	curl_close ($minha_curl); 
	fclose ($fs_arquivo); 
} 

//$url = get_furl("$ImagemMapa");
$EnderecoMapa2 = str_replace(" ", "%", $EnderecoMapa); 
$url = get_furl("http://maps.googleapis.com/maps/api/staticmap?center=".$EnderecoMapa2."&zoom=16&size=900x300&scale=2&markers=color%3red%7Clabel%3aS%7C11211".$EnderecoMapa2."|size:mid&sensor=false");
$ch = curl_init($url);

$fp = fopen('fotos/Imovel/ImagemMapa'.$CodigoImovel."-".$Cep.'.jpg', 'wb');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 2);
curl_setopt($ch, CURLOPT_FILE, $fp);
$contents = curl_exec($ch);

curl_close($ch);


 $buscaHolding->set('sql',"SELECT `IdEmpresa`, RazaoSocial FROM `CadastroHolding` WHERE IdEmpresa = '$SelectHolding' ");
 $retornoHolding = mysql_fetch_object($buscaHolding->executarQuery());
		  
 $buscaRequerente->set('sql',"SELECT `IdRequerente`, Nome FROM `CadastroRequerente` WHERE IdRequerente = '$SelectRequerente' ");
 $retornoRequerente = mysql_fetch_object($buscaRequerente->executarQuery());
		  

		  
     /********************************************************************************************/
    /*						Muda a String SQL para inserir no banco								*/
    /********************************************************************************************/
 		   
	 $atualizaImovel->set('sql',"UPDATE CadastraImovel  SET DataEmissao = '$DataEmissao',
	 													  CodigoImovel = '$CodigoImovel',
	 													  IdEmpresa = '$SelectHolding',
	 													  NomeEmpresa = '$retornoHolding->RazaoSocial',
	 													  IdRequerente = '$SelectRequerente',
	 													  NomeRequerente = '$retornoRequerente->Nome',
	 													  NomeExibicao = '$NomeExibicao',
	 													  NumeroContribuinte = '$NumeroContribuinte',
														  MatriculaContribuinte = '$MatriculaContribuinte',
														  NomeContribuinte = '$NomeContribuinte',
														  CnpjCpf = '$CpfCnpj',
														  LocalImovel = '$LocalImovel',
														  CepImovel = '$Cep',
														  CodLog = '$Codlog',
														  AreaTerreno = '$AreaTerreno',
														  Testada = '$Testada',
														  AreaConstruida = '$AreaConstruida',
														  FracaoIdeal = '$FracaoIdeal',
														  AnoConstrucao = '$AnoConstrucao',
														  UsoImovel = '$UsoImovel',
														  Zona = '$Zona',
														  CaBasico = '$CaBasico',
														  Distrito = '$Distrito',
														  SubPrefeitura = '$SubPrefeitura',
														  CaMaximo = '$CaMaximo',
														  Gabarito = '$Gabarito',
														  ToImovel = '$ToImovel',
														  TxPerm = '$TxPerm',
														  LargVia = '$LargVia',
														  ClassificacaoVia = '$ClassificacaoVia',
														  PagGeomapas = '$PagGeomapas',
														  ComentariosZoneamento = '$ComentariosZoneamento',
														  SituacaoOperacaoUrbana = '$SituacaoOperacaoUrbana',
														  ComentariosOperacaoUrbana = '$ComentariosOperacaoUrbana',
														  ExerciciosIptu = '$ExerciciosIptu',
														  ValorTolalIptu = '$ValorTolalIptu',
														  ExerciciosMultas = '$ExerciciosMultas',
														  ValorTolalMultas = '$ValorTolalMultas',
														  TotalExercicios = '$TotalExercicios',
														  ComentariosDividas = '$ComentariosDividas',
														  QuadraFiscal = '$NomeQuadraFiscal',
														  Geomapas = '$NomeGeomapas',
														  ImagemLocal = '$NomeImagemLocal',
														  ImagemMapa = 'ImagemMapa".$CodigoImovel."-".$Cep.".jpg',
														  SituacaoImovel = '$SituacaoImovel'
												 	WHERE IdImovel = '$IdImovel' ");  
  
  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
	$atualizaImovel->executarQuery();



    /********************************************************************************************/
    /*          			Verififica Campos criados do HISTORICO								 */
    /********************************************************************************************/    
   	if(isset($_POST["SqlHistoricoArray"],
    		$_POST["DataHistoricoArray"],
    		$_POST["AreaTerrenoHistoricoArray"],
    		$_POST["AreaEdificadaHistoricoArray"],
    		$_POST["SituacaoHistoricoArray"],
    		$_POST["IdHitoricoImovelAux"])){   		

   		// Faz loop pelo array dos campos:
   		$SqlHistoricoArray = $_POST["SqlHistoricoArray"];
   		$DataHistoricoArray = $_POST["DataHistoricoArray"];
   		$AreaTerrenoHistoricoArray = $_POST["AreaTerrenoHistoricoArray"];
   		$AreaEdificadaHistoricoArray = $_POST["AreaEdificadaHistoricoArray"];
   		$SituacaoHistoricoArray = $_POST["SituacaoHistoricoArray"]; 
   		$IdHitoricoImovel = $_POST["IdHitoricoImovelAux"]; 


   		$i = 0;
   		$j = 0;
   		$k = 0;
   		$l = 0;
   		$m = 0;
   		$n = 0;
   	
   		while($i < count($SqlHistoricoArray) && $j < count($DataHistoricoArray) && 
   			  $k < count($AreaTerrenoHistoricoArray) && $l < count($AreaEdificadaHistoricoArray) &&
   			  $m < count($SituacaoHistoricoArray)){   	 				
   			 
   				$insereHistoricoImovel->set('sql',"UPDATE HistoricoImovel SET  SqlImovel = '$SqlHistoricoArray[$i]', 
   																			   Data = '$DataHistoricoArray[$j]', 
   																			   AreaTerrenoHistorico = '$AreaTerrenoHistoricoArray[$k]',
   																			   AreaEdificada = '$AreaEdificadaHistoricoArray[$l]',
   																			   SituacaoHistorico = '$SituacaoHistoricoArray[$m]',
   																			   IdImovel = '$IdImovel' 
   																		  WHERE IdHistoricoImovel = '$IdHitoricoImovel[$n]'");
   				$insereHistoricoImovel->executarQuery();
   			
   				$i++;
   				$j++;
   				$k++;
   				$l++;
   				$m++;
   				$n++;   			
   			}
   		}






    /********************************************************************************************/
    /*          			Verififica Campos criados de OUTROS LOTES					        */
    /********************************************************************************************/    
   	if(isset($_POST["SqlOutrosLotesArray"],
    		$_POST["AreaTerrenoOutrosLotesArray"],
    		$_POST["AreaConstruidaOutrosLotesArray"],
    		$_POST["TestadaoutrosLotesArray"],
    		$_POST["MatriculaOutrosLotesArray"],
    		$_POST["IdOutrosLotesAux"])){   		

   		// Faz loop pelo array dos campos:
   		$SqlOutrosLotesArray = $_POST["SqlOutrosLotesArray"];
   		$AreaTerrenoOutrosLotesArray = $_POST["AreaTerrenoOutrosLotesArray"];
   		$AreaConstruidaOutrosLotesArray = $_POST["AreaConstruidaOutrosLotesArray"];
   		$TestadaoutrosLotesArray = $_POST["TestadaoutrosLotesArray"];
   		$MatriculaOutrosLotesArray = $_POST["MatriculaOutrosLotesArray"];  
   		$IdOutrosLotes = $_POST["IdOutrosLotesAux"];  

   				
   		
   		$i = 0;
   		$j = 0;
   		$k = 0;
   		$l = 0;
   		$m = 0;
   		$n = 0;
   	
   		while($i < count($SqlOutrosLotesArray) && $j < count($AreaTerrenoOutrosLotesArray) && 
   			  $k < count($AreaConstruidaOutrosLotesArray) && $l < count($TestadaoutrosLotesArray) &&
   			  $m < count($MatriculaOutrosLotesArray)){   	 				
   			
   				$insereOutrosLotes->set('sql',"UPDATE OutrosLotesImovel SET SqlOutroLotes = '$SqlOutrosLotesArray[$i]',
   																		    AreaTerrenoOutrosLotes = '$AreaTerrenoOutrosLotesArray[$j]',
   																		    AreaConstruidaOutrosLotes = '$AreaConstruidaOutrosLotesArray[$k]',
   																		    TestadaOutrosLotes = '$TestadaoutrosLotesArray[$l]',
   																		    MatriculaOutrosLotes = '$MatriculaOutrosLotesArray[$m]',
   																		    IdImovel = '$IdImovel'
   																		WHERE IdOutrosLotes = '$IdOutrosLotes[$n]' ");
   						$insereOutrosLotes->executarQuery();
   			
   						$i++;
   						$j++;
   						$k++;
   						$l++;
   						$m++;
   						$n++;

   					   			
   			}
   		}




    /********************************************************************************************/
    /*          			Verififica Campos criados de PROCESSOS						        */
    /********************************************************************************************/    
   	if(isset($_POST["AnoProcessoProcessoArray"],
    		$_POST["InteressadoProcessoArray"],
    		$_POST["AssuntoProcessoArray"],
    		$_POST["SituacaoProcessoArray"],
    		$_POST["IdProcessosImovelAux"])){   		

   		// Faz loop pelo array dos campos:
   		$AnoProcessoProcessoArray = $_POST["AnoProcessoProcessoArray"];
   		$InteressadoProcessoArray = $_POST["InteressadoProcessoArray"];
   		$AssuntoProcessoArray = $_POST["AssuntoProcessoArray"];
   		$SituacaoProcessoArray = $_POST["SituacaoProcessoArray"];
   		$IdProcessosImovel = $_POST["IdProcessosImovelAux"];
   	 		
   		
   		$i = 0;
   		$j = 0;
   		$k = 0;
   		$l = 0;
   		$m = 0;
   		
   	
   		while($i < count($AnoProcessoProcessoArray) && $j < count($InteressadoProcessoArray) && 
   			  $k < count($AssuntoProcessoArray) && $l < count($SituacaoProcessoArray)){   	 				
   			
   				$insereProcessos->set('sql',"UPDATE ProcessosImovel SET AnoProcesso = '$AnoProcessoProcessoArray[$i]',
   																		Interessado = '$InteressadoProcessoArray[$j]',
   																		Assunto = '$AssuntoProcessoArray[$k]',
   																		Situacao = '$SituacaoProcessoArray[$l]',
   																		IdImovel = '$IdImovel'
   																	WHERE IdProcessosImovel = '$IdProcessosImovel[$m]' ");
   						$insereProcessos->executarQuery();
   			
   						$i++;
   						$j++;
   						$k++;
   						$l++;
   						$m++;
   						   					   			
   			}
   		}


   /*********************************************************************************************/
   /*         		Verififica Campos  de COMENTARIOS DE PROCESSO e INSERE NO BANCO				*/
   /********************************************************************************************/   
   if(isset($_POST["ComentariosProcessos"],$_POST["IdComentariosProcessoImovelAux"])){
    
    	// Faz loop pelo array dos campos:
    	$ComentariosProcessos = $_POST["ComentariosProcessos"];
    	$IdComentariosProcessoImovel = $_POST["IdComentariosProcessoImovelAux"];

    	if (($ComentariosProcessos != "" ) ){
    		$insereProcessos->set('sql',"UPDATE ComentariosProcessoImovel SET Comentarios = '$ComentariosProcessos',
    																		  IdImovel = '$IdImovel'
    																	  WHERE IdComentariosProcessoImovel = '$IdComentariosProcessoImovel' ");
    		$insereProcessos->executarQuery();   
    	}else{
    		$ComentariosProcessos = "";
    		$insereProcessos->set('sql',"UPDATE ComentariosProcessoImovel SET Comentarios = '$ComentariosProcessos',
    																		  IdImovel = '$IdImovel'
    																	  WHERE IdComentariosProcessoImovel = '$IdComentariosProcessoImovel' ");
    		$insereProcessos->executarQuery();
    	}    	
    
    }



    /********************************************************************************************/
    /*          			Verififica Campos criados de DADOS ADICIONAIS				        */
    /********************************************************************************************/    
   	if(isset($_POST["TituloDadosAdicionaisArray"],
    		 $_POST["ComentariosDadosAdicionaisArray"],
    		 $_POST["IdDadosAdicionaisAux"])){   		

   		// Faz loop pelo array dos campos:
   		$TituloDadosAdicionaisArray = $_POST["TituloDadosAdicionaisArray"];
   		$ComentariosDadosAdicionaisArray = $_POST["ComentariosDadosAdicionaisArray"];
   		$IdDadosAdicionais = $_POST["IdDadosAdicionaisAux"];
   		
   		$i = 0;
   		$j = 0;
   		$k = 0;

   		while($i < count($TituloDadosAdicionaisArray) && $j < count($ComentariosDadosAdicionaisArray)){   	 				
   				if (($TituloDadosAdicionaisArray[$i] != "" ) && ($ComentariosDadosAdicionaisArray[$j] != "")){

   				$insereDadosAdicionais->set('sql',"UPDATE DadosAdicionaisImovel SET TituloDadosAdicionais = '$TituloDadosAdicionaisArray[$i]',
   																					ComentarioDadosAdicionais = '$ComentariosDadosAdicionaisArray[$j]',
   																					IdImovel = '$IdImovel'
   																				WHERE IdDadosAdicionais = '$IdDadosAdicionais[$k]' ");
   						$insereDadosAdicionais->executarQuery();
   			
   						$i++;
   						$j++;
   						$k++;
   						  						   					   			
   			}
   		}
}

    /********************************************************************************************/
    /*         				Verififica Campos da RESTRIÇÂO 1 e insere no banco		            */
    /********************************************************************************************/    
  	if(isset($_POST["SqlRetricao"],
    		$_POST["TombamentoRestricao"],
    		$_POST["AreaManancialRestricao"],
    		$_POST["AreaContaminadaRestricao"],
    		$_POST["PatrimonioAmbientalRestricao"],
    		$_POST["ProtecaoAmbientalRestricao"],
    		$_POST["PedenciaFinanceiraRestricao"],
    		$_POST["IdRestricoesImovelAux"])){   		

   		// Faz loop pelo array dos campos:
   		$SqlRetricao = $_POST["SqlRetricao"];
   		$TombamentoRestricao = $_POST["TombamentoRestricao"];
   		$AreaManancialRestricao = $_POST["AreaManancialRestricao"];
   		$AreaContaminadaRestricao = $_POST["AreaContaminadaRestricao"];
   		$PatrimonioAmbientalRestricao = $_POST["PatrimonioAmbientalRestricao"];
   		$ProtecaoAmbientalRestricao = $_POST["ProtecaoAmbientalRestricao"];
   		$PedenciaFinanceiraRestricao = $_POST["PedenciaFinanceiraRestricao"];
   		$IdRestricoesImovel = $_POST["IdRestricoesImovelAux"];

   		$i = 0;
   		$j = 0;
   		$k = 0;
   		$l = 0;
   		$m = 0;
   		$n = 0;
   		$o = 0;
   		$p = 0;


		while($i < count($SqlRetricao) && $j < count($TombamentoRestricao) &&
			  $k < count($AreaManancialRestricao) && $l < count($AreaContaminadaRestricao) &&
			  $m < count($PatrimonioAmbientalRestricao) && $n < count($ProtecaoAmbientalRestricao) &&
			  $o < count($PedenciaFinanceiraRestricao)){   	 

   			if (($SqlRetricao[$i] != "" ) && 
	   			($TombamentoRestricao[$j] != "...") ||
	   			($AreaManancialRestricao[$k] != "...") ||
	   			($AreaContaminadaRestricao[$l] != "...") || 
	   			($PatrimonioAmbientalRestricao[$m] != "...") || 
	   			($ProtecaoAmbientalRestricao[$n] != "...") ||
	   			($PedenciaFinanceiraRestricao[$o] != "...") ) {

	   			$insereRestricoes->set('sql',"UPDATE RestricoesImovel SET SqlRestricoes = '$SqlRetricao[$i]',
	   																	  Tombamento = '$TombamentoRestricao[$j]',
	   																	  AreaManancial = '$AreaManancialRestricao[$k]',
	   																	  AreaContaminada = '$AreaContaminadaRestricao[$l]',
	   																	  PatrimonioAmbiental = '$PatrimonioAmbientalRestricao[$m]',
	   																	  ProtecaoAmbiental = '$ProtecaoAmbientalRestricao[$n]',
	   																	  PedenciaFinanceira = '$PedenciaFinanceiraRestricao[$o]',
	   																	  IdImovel = '$IdImovel'
	   																  WHERE IdRestricoesImovel = '$IdRestricoesImovel[$p]' ");
	   					$insereRestricoes->executarQuery();
			   			$i++;
						$j++;
						$k++;
						$l++;
						$m++;
						$n++;
						$o++;
						$p++;
		   		}			   					  						   					   			
   			
   		}

   	}




 echo("<script type='text/javascript'> location.href='../../imoveis-editar-lista.php'; alert('Dados atualizados com sucesso'); </script>");
}else{
	 	echo("<script type='text/javascript'> location.href='../../imoveis-editar-lista.php'; alert('Dados não atualizados'); </script>");
}


   		
   	