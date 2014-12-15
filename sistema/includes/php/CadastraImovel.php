<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $insereImovel = new Conexao();
    $insereImovel->conectar();
    $insereImovel->selecionarDB();

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

    $ImagemLei;
    $NomeImagemLei = null;
    $CaminhoImagemLei;

    $NomeImagemMapa ;

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
/*                      Função para inserir Lei no banco de dados                       */
/********************************************************************************************/

// Se o usuário clicou no botão cadastrar efetua as ações
if (!empty($_FILES['ImagemLei'])){


	$ImagemLei = $_FILES["ImagemLei"];

	// Se a foto estiver sido selecionada
	if (!empty($ImagemLei["name"])) {

		// Largura máxima em pixels
		$largura = 50000000;
		// Altura máxima em pixels
		$altura = 50000000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 100000000000;

		// Verifica se o arquivo é uma imagem
		if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $ImagemLei["type"])){
			$error[1] = "Isso não é uma imagem.";
		}

		// Pega as dimensões da imagem
		$dimensoes = getimagesize($ImagemLei["tmp_name"]);

		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}

		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}

		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($ImagemLei["size"] > $tamanho) {
			$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
		// Se não houver nenhum erro
		if (count($error) == 0) {

			// Pega extensão da imagem
			preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $ImagemLei["name"], $ext);

			// Gera um nome único para a imagem
			$NomeImagemLei = md5(uniqid(time())) . "." . $ext[1];

			// Caminho de onde ficará a imagem
			$CaminhoImagemLei = "fotos/Imovel/" . $NomeImagemLei;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($ImagemLei["tmp_name"], $CaminhoImagemLei);

		}

		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "";
			}
		}
	}
}else{
	$NomeImagemLei = null;
}

    
    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo imovel-cadastro.html estão completos			*/
    /********************************************************************************************/

if (isset($_POST['DataEmissao'], 
		  $_POST['CodigoImovel'],
		  $_POST['SelectHolding'],
		  $_POST['SelectRequerente'],
		  $_POST['NomeExibicao'],
		
		  $_POST['NumeroContribuinte'],
		  $_POST['MatriculaContribuinte'],
		  $_POST['NomeContribuinte'],
		  $_POST['CpfCnpj'],
		  $_POST['LocalImovel'],
		  $_POST['Cep'],
		  $_POST['Codlog'],
		  $_POST['AreaTerreno'],
		  $_POST['Testada'],
		  $_POST['AreaConstruida'],
		  $_POST['FracaoIdeal'],
		  $_POST['AnoConstrucao'],
		  $_POST['UsoImovel'],

		  $_POST['SituacaoOperacaoUrbana'],
		  $_POST['ComentariosOperacaoUrbana'],
		
		  $_POST['ExerciciosIptu'],
		  $_POST['ValorTolalIptu'],
		  $_POST['ExerciciosMultas'],
		  $_POST['ValorTolalMultas'],
		  $_POST['TotalExercicios'],
		  $_POST['ComentariosDividas'])) {

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/

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


		  $ZonaLei13885  = $_POST['ZonaLei13885'];
		  $CaBasicoLei13885  = $_POST['CaBasicoLei13885'];
		  $DistritoLei13885  = $_POST['DistritoLei13885'];
		  $SubPrefeituraLei13885  = $_POST['SubPrefeituraLei13885'];
		  $CaMaximoLei13885  = $_POST['CaMaximoLei13885'];
		  $GabaritoLei13885  = $_POST['GabaritoLei13885'];
		  $ToImovelLei13885  = $_POST['ToImovelLei13885'];
		  $TxPermLei13885  = $_POST['TxPermLei13885'];
		  $LargViaLei13885  = $_POST['LargViaLei13885'];
		  $ClassificacaoViaLei13885  = $_POST['ClassificacaoViaLei13885'];
		  $PagGeomapasLei13885  = $_POST['PagGeomapasLei13885'];


		  $ZonaLei16050  = $_POST['ZonaLei16050'];
		  $CaBasicoLei16050  = $_POST['CaBasicoLei16050'];
		  $DistritoLei16050  = $_POST['DistritoLei16050'];
		  $SubPrefeituraLei16050  = $_POST['SubPrefeituraLei16050'];
		  $CaMaximoLei16050  = $_POST['CaMaximoLei16050'];
		  $GabaritoLei16050  = $_POST['GabaritoLei16050'];
		  $ToImovelLei16050  = $_POST['ToImovelLei16050'];
		  $TxPermLei16050  = $_POST['TxPermLei16050'];
		  $LargViaLei16050  = $_POST['LargViaLei16050'];
		  $ClassificacaoViaLei16050  = $_POST['ClassificacaoViaLei16050'];
		  $PagGeomapasLei16050  = $_POST['PagGeomapasLei16050'];
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

/*

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

//$url = get_furl("$ImagemMapa");
$ImagemMapa2 = str_replace(" ", "%", $ImagemMapa); 
$url = get_furl("http://maps.googleapis.com/maps/api/staticmap?center=".$ImagemMapa2."&zoom=16&size=900x300&scale=2&markers=color%3arede%7Clabel%3aS%7C11211".$ImagemMapa2."|size:mid&sensor=false");
$ch = curl_init($url);
$fp = fopen('fotos/Imovel/ImagemMapa'.$CodigoImovel."-".$Cep.'.jpg', 'w+b');

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 2);
curl_setopt($ch, CURLOPT_FILE, $fp);
$contents = curl_exec($ch);
curl_close($ch);
*/

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
$EnderecoMapa2 = str_replace(" ", "+", $EnderecoMapa); 
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
 		   
	 $insereImovel->set('sql',"INSERT INTO CadastraImovel(DataEmissao,CodigoImovel,IdEmpresa,NomeEmpresa,IdRequerente,NomeRequerente,NomeExibicao,NumeroContribuinte,
														  MatriculaContribuinte,NomeContribuinte,CnpjCpf,LocalImovel,CepImovel,CodLog,AreaTerreno,
														  Testada,AreaConstruida,FracaoIdeal,AnoConstrucao,UsoImovel,ZonaLei13885,CaBasicoLei13885,DistritoLei13885,
														  SubPrefeituraLei13885,CaMaximoLei13885,GabaritoLei13885,ToImovelLei13885,TxPermLei13885,LargViaLei13885,ClassificacaoViaLei13885,PagGeomapasLei13885,
														  ZonaLei16050,CaBasicoLei16050,DistritoLei16050,SubPrefeituraLei16050,CaMaximoLei16050,GabaritoLei16050,ToImovelLei16050,TxPermLei16050,LargViaLei16050,
														  ClassificacaoViaLei16050,PagGeomapasLei16050,ComentariosZoneamento,SituacaoOperacaoUrbana,ComentariosOperacaoUrbana,ExerciciosIptu,
														  ValorTolalIptu,ExerciciosMultas,ValorTolalMultas,TotalExercicios,ComentariosDividas,
														  QuadraFiscal,Geomapas,ImagemLocal,ImagemMapa,ImagemLei,SituacaoImovel)
												 VALUES  ('$DataEmissao','$CodigoImovel','$retornoHolding->IdEmpresa','$retornoHolding->RazaoSocial','$retornoRequerente->IdRequerente',
												 		  '$retornoRequerente->Nome','$NomeExibicao','$NumeroContribuinte','$MatriculaContribuinte','$NomeContribuinte',
														  '$CpfCnpj','$LocalImovel','$Cep','$Codlog','$AreaTerreno','$Testada','$AreaConstruida',
														  '$FracaoIdeal','$AnoConstrucao','$UsoImovel','$ZonaLei13885','$CaBasicoLei13885','$DistritoLei13885',
														  '$SubPrefeituraLei13885','$CaMaximoLei13885','$GabaritoLei13885','$ToImovelLei13885','$TxPermLei13885','$LargViaLei13885',
														  '$ClassificacaoViaLei13885','$PagGeomapasLei13885', '$ZonaLei16050','$CaBasicoLei16050','$DistritoLei16050',
														  '$SubPrefeituraLei16050','$CaMaximoLei16050','$GabaritoLei16050','$ToImovelLei16050','$TxPermLei16050','$LargViaLei16050',
														  '$ClassificacaoViaLei16050','$PagGeomapasLei16050','$ComentariosZoneamento','$SituacaoOperacaoUrbana',
														  '$ComentariosOperacaoUrbana','$ExerciciosIptu','$ValorTolalIptu','$ExerciciosMultas',
														  '$ValorTolalMultas','$TotalExercicios','$ComentariosDividas','$NomeQuadraFiscal',
														  '$NomeGeomapas','$NomeImagemLocal','ImagemMapa".$CodigoImovel."-".$Cep.".jpg','$NomeImagemLei','$SituacaoImovel');");  
  
  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
	$insereImovel->executarQuery();


	/********************************************************************************************************/
    /*	Seleciona o ID do Responsável para poder inserir na TABELA CadastroEmpresa como chave estrangeira	*/
    /********************************************************************************************************/
   /*
    $insereImovel->set('sql',"SELECT `IdImovel` FROM `CadastraImovel` WHERE CodigoImovel = '$CodigoImovel' AND 
																			IdEmpresa = '$retornoHolding->IdEmpresa' AND 
																			IdRequerente = '$retornoRequerente->IdRequerente' AND 
																			NomeExibicao = '$NomeExibicao' AND 
																			NumeroContribuinte = '$NumeroContribuinte' AND 
																			MatriculaContribuinte = '$MatriculaContribuinte' AND 
																			NomeContribuinte = '$NomeContribuinte' AND 
																			CnpjCpf = '$CpfCnpj' AND 
																			LocalImovel = '$LocalImovel' AND 
																			CepImovel = '$Cep' AND 
																			CodLog = '$Codlog' AND 
																			AreaTerreno = '$AreaTerreno' AND 
																			Testada = '$Testada' AND 
																			AreaConstruida = '$AreaConstruida' AND 
																			FracaoIdeal = '$FracaoIdeal' AND 
																			AnoConstrucao = '$AnoConstrucao' AND 
																			UsoImovel = '$UsoImovel' AND 
																			Zona = '$Zona' AND 
																			CaBasico = '$CaBasico' AND 
																			Distrito = '$Distrito' AND 
																			SubPrefeitura = '$SubPrefeitura' AND 
																			CaMaximo = '$CaMaximo' AND 
																			Gabarito = '$Gabarito' AND 
																			ToImovel = '$ToImovel' AND 
																			TxPerm = '$TxPerm' AND 
																			LargVia = '$LargVia' AND 
																			ClassificacaoVia = '$ClassificacaoVia' AND 
																			PagGeomapas = '$PagGeomapas' AND 
																			ComentariosZoneamento = '$ComentariosZoneamento' AND 
																			SituacaoOperacaoUrbana = '$SituacaoOperacaoUrbana' AND 
																			ComentariosOperacaoUrbana = '$ComentariosOperacaoUrbana' AND 																			
																			ExerciciosIptu = '$ExerciciosIptu' AND 
																			ValorTolalIptu = '$ValorTolalIptu' AND 
																			ExerciciosMultas = '$ExerciciosMultas' AND 
																			ValorTolalMultas = '$ValorTolalMultas' AND 
																			TotalExercicios = '$TotalExercicios' AND 
																			ComentariosDividas = '$ComentariosDividas' AND 
																			QuadraFiscal = '$NomeQuadraFiscal' AND  
																			Geomapas = '$NomeGeomapas' AND  
																			ImagemLocal = '$NomeImagemLocal' ;");
    */
   
    $insereImovel->set('sql',"SELECT `IdImovel` FROM `CadastraImovel` WHERE IdImovel =  LAST_INSERT_ID()");

    $retorno = mysql_fetch_object($insereImovel->executarQuery());
  	  
   /********************************************************************************************/
   /*          			Verififica Campos  do HISTORICO	 e INSERE NO BANCO					   */
   /********************************************************************************************/   
   if(isset($_POST["SqlHistorico1"],
    		$_POST["DataHistorico1"],
    		$_POST["AreaTerrenoHistorico1"],
    		$_POST["AreaEdificadaHistorico1"],
    		$_POST["SituacaoHistorico1"])){
    
    	// Faz loop pelo array dos campos:
    	$SqlHistorico1 = $_POST["SqlHistorico1"];
    	$DataHistorico1 = $_POST["DataHistorico1"];
    	$AreaTerrenoHistorico1 = $_POST["AreaTerrenoHistorico1"];
    	$AreaEdificadaHistorico1 = $_POST["AreaEdificadaHistorico1"];
    	$SituacaoHistorico1 = $_POST["SituacaoHistorico1"];    	  

    	if ($SqlHistorico1 != "") {
    		$insereHistoricoImovel->set('sql',"INSERT INTO HistoricoImovel(SqlImovel,Data,AreaTerrenoHistorico,AreaEdificada,SituacaoHistorico,IdImovel)
    				VALUES ('$SqlHistorico1','$DataHistorico1','$AreaTerrenoHistorico1','$AreaEdificadaHistorico1','$SituacaoHistorico1','$retorno->IdImovel');");
    		$insereHistoricoImovel->executarQuery(); 
    	}
    		      	
    
    }

    /********************************************************************************************/
    /*          			Verififica Campos criados do HISTORICO								 */
    /********************************************************************************************/    
   	if(isset($_POST["SqlHistoricoArray"],
    		$_POST["DataHistoricoArray"],
    		$_POST["AreaTerrenoHistoricoArray"],
    		$_POST["AreaEdificadaHistoricoArray"],
    		$_POST["SituacaoHistoricoArray"])){   		

   		// Faz loop pelo array dos campos:
   		$SqlHistoricoArray = $_POST["SqlHistoricoArray"];
   		$DataHistoricoArray = $_POST["DataHistoricoArray"];
   		$AreaTerrenoHistoricoArray = $_POST["AreaTerrenoHistoricoArray"];
   		$AreaEdificadaHistoricoArray = $_POST["AreaEdificadaHistoricoArray"];
   		$SituacaoHistoricoArray = $_POST["SituacaoHistoricoArray"];   		
   		
   		$i = 0;
   		$j = 0;
   		$k = 0;
   		$l = 0;
   		$m = 0;
   	

   		if ($SqlHistoricoArray[$i] != "") {
   			while($i < count($SqlHistoricoArray) && $j < count($DataHistoricoArray) && 
   			  $k < count($AreaTerrenoHistoricoArray) && $l < count($AreaEdificadaHistoricoArray) &&
   			  $m < count($SituacaoHistoricoArray)){   	 				
   			
   				$insereHistoricoImovel->set('sql',"INSERT INTO HistoricoImovel(SqlImovel, Data, AreaTerrenoHistorico,AreaEdificada,SituacaoHistorico,IdImovel)
   						VALUES ('$SqlHistoricoArray[$i]','$DataHistoricoArray[$j]','$AreaTerrenoHistoricoArray[$k]','$AreaEdificadaHistoricoArray[$l]','$SituacaoHistoricoArray[$m]','$retorno->IdImovel');");
   						$insereHistoricoImovel->executarQuery();
   			
   						$i++;
   						$j++;
   						$k++;
   						$l++;
   						$m++;   			
   			}
   		}
   		
   	}







   /********************************************************************************************/
   /*          			Verififica Campos  de OUTROS LOTES	 e INSERE NO BANCO					*/
   /********************************************************************************************/   
   if(isset($_POST["SqlOutrosLotes1"],
    		$_POST["AreaTerrenoOutrosLotes1"],
    		$_POST["AreaConstruida1"],
    		$_POST["TestadaoutrosLotes1"],
    		$_POST["MatriculaOutrosLotes1"])){
    
    	// Faz loop pelo array dos campos:
    	$SqlOutrosLotes1 = $_POST["SqlOutrosLotes1"];
    	$AreaTerrenoOutrosLotes1 = $_POST["AreaTerrenoOutrosLotes1"];
    	$AreaConstruida1 = $_POST["AreaConstruida1"];
    	$TestadaoutrosLotes1 = $_POST["TestadaoutrosLotes1"];
    	$MatriculaOutrosLotes1 = $_POST["MatriculaOutrosLotes1"];    	  

    	if ($SqlOutrosLotes1 != "") {
    		$insereOutrosLotes->set('sql',"INSERT INTO OutrosLotesImovel(SqlOutroLotes,AreaTerrenoOutrosLotes,AreaConstruidaOutrosLotes,TestadaOutrosLotes,MatriculaOutrosLotes,IdImovel)
    				VALUES ('$SqlOutrosLotes1','$AreaTerrenoOutrosLotes1','$AreaConstruida1','$TestadaoutrosLotes1','$MatriculaOutrosLotes1','$retorno->IdImovel');");
    		$insereOutrosLotes->executarQuery();  
    	}
    		     	
    
    }


    /********************************************************************************************/
    /*          			Verififica Campos criados de OUTROS LOTES					        */
    /********************************************************************************************/    
   	if(isset($_POST["SqlOutrosLotesArray"],
    		$_POST["AreaTerrenoOutrosLotesArray"],
    		$_POST["AreaConstruidaOutrosLotesArray"],
    		$_POST["TestadaoutrosLotesArray"],
    		$_POST["MatriculaOutrosLotesArray"])){   		

   		// Faz loop pelo array dos campos:
   		$SqlOutrosLotesArray = $_POST["SqlOutrosLotesArray"];
   		$AreaTerrenoOutrosLotesArray = $_POST["AreaTerrenoOutrosLotesArray"];
   		$AreaConstruidaOutrosLotesArray = $_POST["AreaConstruidaOutrosLotesArray"];
   		$TestadaoutrosLotesArray = $_POST["TestadaoutrosLotesArray"];
   		$MatriculaOutrosLotesArray = $_POST["MatriculaOutrosLotesArray"];   		
   		
   		$i = 0;
   		$j = 0;
   		$k = 0;
   		$l = 0;
   		$m = 0;

   		if ($SqlOutrosLotesArray[$i] != "") {
   			while($i < count($SqlOutrosLotesArray) && $j < count($AreaTerrenoOutrosLotesArray) && 
   			  $k < count($AreaConstruidaOutrosLotesArray) && $l < count($TestadaoutrosLotesArray) &&
   			  $m < count($MatriculaOutrosLotesArray)){   	 				
   			
   				$insereOutrosLotes->set('sql',"INSERT INTO OutrosLotesImovel(SqlOutroLotes,AreaTerrenoOutrosLotes,AreaConstruidaOutrosLotes,TestadaOutrosLotes,MatriculaOutrosLotes,IdImovel)
   						VALUES ('$SqlOutrosLotesArray[$i]','$AreaTerrenoOutrosLotesArray[$j]','$AreaConstruidaOutrosLotesArray[$k]','$TestadaoutrosLotesArray[$l]','$MatriculaOutrosLotesArray[$m]','$retorno->IdImovel');");
   						$insereOutrosLotes->executarQuery();
   			
   						$i++;
   						$j++;
   						$k++;
   						$l++;
   						$m++;

   					   			
   			}
   		}
   	
   		
   	}





   /********************************************************************************************/
   /*          			Verififica Campos  de PROCESSOS e INSERE NO BANCO					*/
   /********************************************************************************************/   
   if(isset($_POST["AnoProcessoProcesso"],
    		$_POST["InteressadoProcesso"],
    		$_POST["AssuntoProcesso"],
    		$_POST["SituacaoProcesso"],
    		$_POST["ComentariosProcessos"])){
    
    	// Faz loop pelo array dos campos:
    	$AnoProcessoProcesso = $_POST["AnoProcessoProcesso"];
    	$InteressadoProcesso = $_POST["InteressadoProcesso"];
    	$AssuntoProcesso = $_POST["AssuntoProcesso"];
    	$SituacaoProcesso = $_POST["SituacaoProcesso"];
    	$ComentariosProcessos = $_POST["ComentariosProcessos"];
 	  
 		if ($AnoProcessoProcesso != "") {
 			$insereProcessos->set('sql',"INSERT INTO ProcessosImovel(AnoProcesso,Interessado,Assunto,Situacao,IdImovel)
    				VALUES ('$AnoProcessoProcesso','$InteressadoProcesso','$AssuntoProcesso','$SituacaoProcesso','$retorno->IdImovel');");
    		$insereProcessos->executarQuery(); 
 		}	      	
    
    }


    /********************************************************************************************/
    /*          			Verififica Campos criados de PROCESSOS						        */
    /********************************************************************************************/    
   	if(isset($_POST["AnoProcessoProcessoArray"],
    		$_POST["InteressadoProcessoArray"],
    		$_POST["AssuntoProcessoArray"],
    		$_POST["SituacaoProcessoArray"])){   		

   		// Faz loop pelo array dos campos:
   		$AnoProcessoProcessoArray = $_POST["AnoProcessoProcessoArray"];
   		$InteressadoProcessoArray = $_POST["InteressadoProcessoArray"];
   		$AssuntoProcessoArray = $_POST["AssuntoProcessoArray"];
   		$SituacaoProcessoArray = $_POST["SituacaoProcessoArray"];
   	 		
   		
   		$i = 0;
   		$j = 0;
   		$k = 0;
   		$l = 0;
   		
   		if ($AnoProcessoProcessoArray[$i] != "") {
   			while($i < count($AnoProcessoProcessoArray) && $j < count($InteressadoProcessoArray) && 
   			  $k < count($AssuntoProcessoArray) && $l < count($SituacaoProcessoArray)){   	 				
   			
   				$insereProcessos->set('sql',"INSERT INTO ProcessosImovel(AnoProcesso,Interessado,Assunto,Situacao,IdImovel)
   						VALUES ('$AnoProcessoProcessoArray[$i]','$InteressadoProcessoArray[$j]','$AssuntoProcessoArray[$k]','$SituacaoProcessoArray[$l]','$retorno->IdImovel');");
   						$insereProcessos->executarQuery();
   			
   						$i++;
   						$j++;
   						$k++;
   						$l++;
   						   					   			
   			}
   		}   	
   		
   	}


   /*********************************************************************************************/
   /*         		Verififica Campos  de COMENTARIOS DE PROCESSO e INSERE NO BANCO				*/
   /********************************************************************************************/   
   if(isset($_POST["ComentariosProcessos"])){
    
    	// Faz loop pelo array dos campos:
    	$ComentariosProcessos = $_POST["ComentariosProcessos"];
    	if (($ComentariosProcessos != "Comentários" ) ){
    		$insereProcessos->set('sql',"INSERT INTO ComentariosProcessoImovel(Comentarios,IdImovel)
    											VALUES ('$ComentariosProcessos','$retorno->IdImovel');");
    		$insereProcessos->executarQuery();   
    	}else{
    		$ComentariosProcessos = "";
    		$insereProcessos->set('sql',"INSERT INTO ComentariosProcessoImovel(Comentarios,IdImovel)
    											VALUES ('$ComentariosProcessos','$retorno->IdImovel');");
    		$insereProcessos->executarQuery();
    	}    	
    
    }






  /********************************************************************************************/
   /*          			Verififica Campos  de DADOS ADICIONAIS e INSERE NO BANCO					*/
   /********************************************************************************************/   
   if(isset($_POST["TituloDadosAdicionais"],
    		$_POST["ComentariosDadosAdicionais"])){
    
    	// Faz loop pelo array dos campos:
    	$TituloDadosAdicionais = $_POST["TituloDadosAdicionais"];
    	$ComentariosDadosAdicionais = $_POST["ComentariosDadosAdicionais"];
    		if (($TituloDadosAdicionais != "" ) && ($ComentariosDadosAdicionais!= "")){
    		$insereProcessos->set('sql',"INSERT INTO DadosAdicionaisImovel(TituloDadosAdicionais,ComentarioDadosAdicionais,IdImovel)
    				VALUES ('$TituloDadosAdicionais','$ComentariosDadosAdicionais','$retorno->IdImovel');");
    		$insereProcessos->executarQuery();       	
    	}
    }


    /********************************************************************************************/
    /*          			Verififica Campos criados de DADOS ADICIONAIS				        */
    /********************************************************************************************/    
   	if(isset($_POST["TituloDadosAdicionaisArray"],
    		$_POST["ComentariosDadosAdicionaisArray"])){   		

   		// Faz loop pelo array dos campos:
   		$TituloDadosAdicionaisArray = $_POST["TituloDadosAdicionaisArray"];
   		$ComentariosDadosAdicionaisArray = $_POST["ComentariosDadosAdicionaisArray"];
   		
   		$i = 0;
   		$j = 0;

   		if ($TituloDadosAdicionaisArray[$i] != "") {
   			while($i < count($TituloDadosAdicionaisArray) && $j < count($ComentariosDadosAdicionaisArray)){   	 				
   				if (($TituloDadosAdicionaisArray[$i] != "" ) && ($ComentariosDadosAdicionaisArray[$j] != "")){
   				$insereDadosAdicionais->set('sql',"INSERT INTO DadosAdicionaisImovel(TituloDadosAdicionais,ComentarioDadosAdicionais,IdImovel)
   						VALUES ('$TituloDadosAdicionaisArray[$i]','$ComentariosDadosAdicionaisArray[$j]','$retorno->IdImovel');");
   						$insereDadosAdicionais->executarQuery();
   			
   						$i++;
   						$j++;
   						  						   					   			
   			}
   		}
   		}

   		
}

    /********************************************************************************************/
    /*         				Verififica Campos da RESTRIÇÂO 1 e insere no banco		            */
    /********************************************************************************************/    
   	if(isset($_POST["SqlRetricao1"],
    		$_POST["TombamentoRestricao1"],
    		$_POST["AreaManancialRestricao1"],
    		$_POST["AreaContaminadaRestricao1"],
    		$_POST["PatrimonioAmbientalRestricao1"],
    		$_POST["ProtecaoAmbientalRestricao1"],
    		$_POST["PedenciaFinanceiraRestricao1"])){   		

   		// Faz loop pelo array dos campos:
   		$SqlRetricao1 = $_POST["SqlRetricao1"];
   		$TombamentoRestricao1 = $_POST["TombamentoRestricao1"];
   		$AreaManancialRestricao1 = $_POST["AreaManancialRestricao1"];
   		$AreaContaminadaRestricao1 = $_POST["AreaContaminadaRestricao1"];
   		$PatrimonioAmbientalRestricao1 = $_POST["PatrimonioAmbientalRestricao1"];
   		$ProtecaoAmbientalRestricao1 = $_POST["ProtecaoAmbientalRestricao1"];
   		$PedenciaFinanceiraRestricao1 = $_POST["PedenciaFinanceiraRestricao1"];
   		
   		if (($SqlRetricao1 != "" ) && 
   			($TombamentoRestricao1 != "...") && 
   			($AreaManancialRestricao1 != "...") && 
   			($AreaContaminadaRestricao1 != "...") && 
   			($PatrimonioAmbientalRestricao1 != "...") && 
   			($ProtecaoAmbientalRestricao1 != "...") &&
   			($PedenciaFinanceiraRestricao1 != "...") ) {
   			$insereRestricoes->set('sql',"INSERT INTO RestricoesImovel(SqlRestricoes,Tombamento,AreaManancial,AreaContaminada,PatrimonioAmbiental,ProtecaoAmbiental,PedenciaFinanceira,IdImovel)
   						VALUES ('$SqlRetricao1','$TombamentoRestricao1 ','$AreaManancialRestricao1 ','$AreaContaminadaRestricao1 ','$PatrimonioAmbientalRestricao1 ','$ProtecaoAmbientalRestricao1 ','$PedenciaFinanceiraRestricao1','$retorno->IdImovel');");
   						$insereRestricoes->executarQuery();
   		}		
   	}

   	    /********************************************************************************************/
    /*         				Verififica Campos da RESTRIÇÂO 2 e insere no banco		            */
    /********************************************************************************************/    
   	if(isset($_POST["SqlRetricao2"],
    		$_POST["TombamentoRestricao2"],
    		$_POST["AreaManancialRestricao2"],
    		$_POST["AreaContaminadaRestricao2"],
    		$_POST["PatrimonioAmbientalRestricao2"],
    		$_POST["ProtecaoAmbientalRestricao2"],
    		$_POST["PedenciaFinanceiraRestricao2"])){   		

   		// Faz loop pelo array dos campos:
   		$SqlRetricao2 = $_POST["SqlRetricao2"];
   		$TombamentoRestricao2 = $_POST["TombamentoRestricao2"];
   		$AreaManancialRestricao2 = $_POST["AreaManancialRestricao2"];
   		$AreaContaminadaRestricao2 = $_POST["AreaContaminadaRestricao2"];
   		$PatrimonioAmbientalRestricao2 = $_POST["PatrimonioAmbientalRestricao2"];
   		$ProtecaoAmbientalRestricao2 = $_POST["ProtecaoAmbientalRestricao2"];
   		$PedenciaFinanceiraRestricao2 = $_POST["PedenciaFinanceiraRestricao2"];
   		
   			if (($SqlRetricao2 != "" ) && 
   			($TombamentoRestricao2 != "...") && 
   			($AreaManancialRestricao2 != "...") && 
   			($AreaContaminadaRestricao2 != "...") && 
   			($PatrimonioAmbientalRestricao2 != "...") && 
   			($ProtecaoAmbientalRestricao2 != "...") &&
   			($PedenciaFinanceiraRestricao2 != "...") ) {

   			  $insereRestricoes->set('sql',"INSERT INTO RestricoesImovel(SqlRestricoes,Tombamento,AreaManancial,AreaContaminada,PatrimonioAmbiental,ProtecaoAmbiental,PedenciaFinanceira,IdImovel)
   						VALUES ('$SqlRetricao2','$TombamentoRestricao2','$AreaManancialRestricao2','$AreaContaminadaRestricao2','$PatrimonioAmbientalRestricao2','$ProtecaoAmbientalRestricao2','$PedenciaFinanceiraRestricao2','$retorno->IdImovel');");
   						$insereRestricoes->executarQuery();
   		}	 				
   			
   				
   	}
   	    /********************************************************************************************/
    /*         				Verififica Campos da RESTRIÇÂO de 1 a 10 e insere no banco		            */
    /********************************************************************************************/    
   	if(isset($_POST["SqlRetricao3"],
    		$_POST["TombamentoRestricao3"],
    		$_POST["AreaManancialRestricao3"],
    		$_POST["AreaContaminadaRestricao3"],
    		$_POST["PatrimonioAmbientalRestricao3"],
    		$_POST["ProtecaoAmbientalRestricao3"],
    		$_POST["PedenciaFinanceiraRestricao3"])){   		

   		// Faz loop pelo array dos campos:
   		$SqlRetricao3 = $_POST["SqlRetricao3"];
   		$TombamentoRestricao3 = $_POST["TombamentoRestricao3"];
   		$AreaManancialRestricao3 = $_POST["AreaManancialRestricao3"];
   		$AreaContaminadaRestricao3 = $_POST["AreaContaminadaRestricao3"];
   		$PatrimonioAmbientalRestricao3 = $_POST["PatrimonioAmbientalRestricao3"];
   		$ProtecaoAmbientalRestricao3= $_POST["ProtecaoAmbientalRestricao3"];
   		$PedenciaFinanceiraRestricao3 = $_POST["PedenciaFinanceiraRestricao3"];

   			if (($SqlRetricao3 != "" ) && 
   			($TombamentoRestricao3 != "...") && 
   			($AreaManancialRestricao3 != "...") && 
   			($AreaContaminadaRestricao3 != "...") && 
   			($PatrimonioAmbientalRestricao3 != "...") && 
   			($ProtecaoAmbientalRestricao3 != "...") &&
   			($PedenciaFinanceiraRestricao3 != "...") ) {
   			
   				$insereRestricoes->set('sql',"INSERT INTO RestricoesImovel(SqlRestricoes,Tombamento,AreaManancial,AreaContaminada,PatrimonioAmbiental,ProtecaoAmbiental,PedenciaFinanceira,IdImovel)
   						VALUES ('$SqlRetricao3','$TombamentoRestricao3','$AreaManancialRestricao3','$AreaContaminadaRestricao3','$PatrimonioAmbientalRestricao3','$ProtecaoAmbientalRestricao3','$PedenciaFinanceiraRestricao3','$retorno->IdImovel');");
   						$insereRestricoes->executarQuery();
   		} 				
   			
   	}
   	    /********************************************************************************************/
    /*         				Verififica Campos da RESTRIÇÂO de 1 a 10 e insere no banco		            */
    /********************************************************************************************/    
   	if(isset($_POST["SqlRetricao4"],
    		$_POST["TombamentoRestricao4"],
    		$_POST["AreaManancialRestricao4"],
    		$_POST["AreaContaminadaRestricao4"],
    		$_POST["PatrimonioAmbientalRestricao4"],
    		$_POST["ProtecaoAmbientalRestricao4"],
    		$_POST["PedenciaFinanceiraRestricao4"])){   		

   		// Faz loop pelo array dos campos:
   		$SqlRetricao4 = $_POST["SqlRetricao4"];
   		$TombamentoRestricao4 = $_POST["TombamentoRestricao4"];
   		$AreaManancialRestricao4 = $_POST["AreaManancialRestricao4"];
   		$AreaContaminadaRestricao4 = $_POST["AreaContaminadaRestricao4"];
   		$PatrimonioAmbientalRestricao4 = $_POST["PatrimonioAmbientalRestricao4"];
   		$ProtecaoAmbientalRestricao4 = $_POST["ProtecaoAmbientalRestricao4"];
   		$PedenciaFinanceiraRestricao4 = $_POST["PedenciaFinanceiraRestricao4"];
   		
   			if (($SqlRetricao4 != "" ) && 
   			($TombamentoRestricao4 != "...") && 
   			($AreaManancialRestricao4 != "...") && 
   			($AreaContaminadaRestricao4 != "...") && 
   			($PatrimonioAmbientalRestricao4 != "...") && 
   			($ProtecaoAmbientalRestricao4 != "...") &&
   			($PedenciaFinanceiraRestricao4 != "...") ) {

   			  $insereRestricoes->set('sql',"INSERT INTO RestricoesImovel(SqlRestricoes,Tombamento,AreaManancial,AreaContaminada,PatrimonioAmbiental,ProtecaoAmbiental,PedenciaFinanceira,IdImovel)
   						VALUES ('$SqlRetricao4','$TombamentoRestricao4','$AreaManancialRestricao4','$AreaContaminadaRestricao4','$PatrimonioAmbientalRestricao4','$ProtecaoAmbientalRestricao4 ','$PedenciaFinanceiraRestricao4','$retorno->IdImovel');");
   						$insereRestricoes->executarQuery();
   		} 				
   			
   				
   	}
   	 /********************************************************************************************/
    /*         				Verififica Campos da RESTRIÇÂO de 1 a 10 e insere no banco		     */
    /********************************************************************************************/    
   	if(isset($_POST["SqlRetricao5"],
    		$_POST["TombamentoRestricao5"],
    		$_POST["AreaManancialRestricao5"],
    		$_POST["AreaContaminadaRestricao5"],
    		$_POST["PatrimonioAmbientalRestricao5"],
    		$_POST["ProtecaoAmbientalRestricao5"],
    		$_POST["PedenciaFinanceiraRestricao5"])){   		

   		// Faz loop pelo array dos campos:
   		$SqlRetricao5 = $_POST["SqlRetricao5"];
   		$TombamentoRestricao5 = $_POST["TombamentoRestricao5"];
   		$AreaManancialRestricao5 = $_POST["AreaManancialRestricao5"];
   		$AreaContaminadaRestricao5 = $_POST["AreaContaminadaRestricao5"];
   		$PatrimonioAmbientalRestricao5 = $_POST["PatrimonioAmbientalRestricao5"];
   		$ProtecaoAmbientalRestricao5 = $_POST["ProtecaoAmbientalRestricao5"];
   		$PedenciaFinanceiraRestricao5 = $_POST["PedenciaFinanceiraRestricao5"];
   		
   			if (($SqlRetricao5 != "" ) && 
   			($TombamentoRestricao5 != "...") && 
   			($AreaManancialRestricao5 != "...") && 
   			($AreaContaminadaRestricao5 != "...") && 
   			($PatrimonioAmbientalRestricao5 != "...") && 
   			($ProtecaoAmbientalRestricao5 != "...") &&
   			($PedenciaFinanceiraRestricao5 != "...") ) {
   			
   			$insereRestricoes->set('sql',"INSERT INTO RestricoesImovel(SqlRestricoes,Tombamento,AreaManancial,AreaContaminada,PatrimonioAmbiental,ProtecaoAmbiental,PedenciaFinanceira,IdImovel)
   						VALUES ('$SqlRetricao5','$TombamentoRestricao5','$AreaManancialRestricao5','$AreaContaminadaRestricao5','$PatrimonioAmbientalRestricao5','$ProtecaoAmbientalRestricao5 ','$PedenciaFinanceiraRestricao5','$retorno->IdImovel');");
   						$insereRestricoes->executarQuery();
   		}	 				
   			
   				
   	}
   	/********************************************************************************************/
    /*         				Verififica Campos da RESTRIÇÂO de 1 a 10 e insere no banco	        */
    /********************************************************************************************/    
   	if(isset($_POST["SqlRetricao6"],
    		$_POST["TombamentoRestricao6"],
    		$_POST["AreaManancialRestricao6"],
    		$_POST["AreaContaminadaRestricao6"],
    		$_POST["PatrimonioAmbientalRestricao6"],
    		$_POST["ProtecaoAmbientalRestricao6"],
    		$_POST["PedenciaFinanceiraRestricao6"])){   		

   		// Faz loop pelo array dos campos:
   		$SqlRetricao6 = $_POST["SqlRetricao6"];
   		$TombamentoRestricao6 = $_POST["TombamentoRestricao6"];
   		$AreaManancialRestricao6= $_POST["AreaManancialRestricao6"];
   		$AreaContaminadaRestricao6 = $_POST["AreaContaminadaRestricao6"];
   		$PatrimonioAmbientalRestricao6 = $_POST["PatrimonioAmbientalRestricao6"];
   		$ProtecaoAmbientalRestricao6 = $_POST["ProtecaoAmbientalRestricao6"];
   		$PedenciaFinanceiraRestricao6 = $_POST["PedenciaFinanceiraRestricao6"];
   			 				
   			if (($SqlRetricao6 != "" ) && 
   			($TombamentoRestricao6 != "...") && 
   			($AreaManancialRestricao6 != "...") && 
   			($AreaContaminadaRestricao6 != "...") && 
   			($PatrimonioAmbientalRestricao6 != "...") && 
   			($ProtecaoAmbientalRestricao6 != "...") &&
   			($PedenciaFinanceiraRestricao6 != "...") ) {
   			
   			$insereRestricoes->set('sql',"INSERT INTO RestricoesImovel(SqlRestricoes,Tombamento,AreaManancial,AreaContaminada,PatrimonioAmbiental,ProtecaoAmbiental,PedenciaFinanceira,IdImovel)
   						VALUES ('$SqlRetricao6','$TombamentoRestricao6','$AreaManancialRestricao6','$AreaContaminadaRestricao6','$PatrimonioAmbientalRestricao6','$ProtecaoAmbientalRestricao6','$PedenciaFinanceiraRestricao6','$retorno->IdImovel');");
   						$insereRestricoes->executarQuery();
   		}	
   				
   	}
   	 /********************************************************************************************/
    /*         				Verififica Campos da RESTRIÇÂO de 1 a 10 e insere no banco		            */
    /********************************************************************************************/    
   	if(isset($_POST["SqlRetricao7"],
    		$_POST["TombamentoRestricao7"],
    		$_POST["AreaManancialRestricao7"],
    		$_POST["AreaContaminadaRestricao7"],
    		$_POST["PatrimonioAmbientalRestricao7"],
    		$_POST["ProtecaoAmbientalRestricao7"],
    		$_POST["PedenciaFinanceiraRestricao7"])){   		

   		// Faz loop pelo array dos campos:
   		$SqlRetricao7 = $_POST["SqlRetricao7"];
   		$TombamentoRestricao7= $_POST["TombamentoRestricao7"];
   		$AreaManancialRestricao7 = $_POST["AreaManancialRestricao7"];
   		$AreaContaminadaRestricao7 = $_POST["AreaContaminadaRestricao7"];
   		$PatrimonioAmbientalRestricao7 = $_POST["PatrimonioAmbientalRestricao7"];
   		$ProtecaoAmbientalRestricao7 = $_POST["ProtecaoAmbientalRestricao7"];
   		$PedenciaFinanceiraRestricao7 = $_POST["PedenciaFinanceiraRestricao7"];
   		
   			if (($SqlRetricao7 != "" ) && 
   			($TombamentoRestricao7 != "...") && 
   			($AreaManancialRestricao7 != "...") && 
   			($AreaContaminadaRestricao7 != "...") && 
   			($PatrimonioAmbientalRestricao7 != "...") && 
   			($ProtecaoAmbientalRestricao7 != "...") &&
   			($PedenciaFinanceiraRestricao7 != "...") ) {
   			
   			$insereRestricoes->set('sql',"INSERT INTO RestricoesImovel(SqlRestricoes,Tombamento,AreaManancial,AreaContaminada,PatrimonioAmbiental,ProtecaoAmbiental,PedenciaFinanceira,IdImovel)
   						VALUES ('$SqlRetricao7','$TombamentoRestricao7','$AreaManancialRestricao7','$AreaContaminadaRestricao7','$PatrimonioAmbientalRestricao7','$ProtecaoAmbientalRestricao7','$PedenciaFinanceiraRestricao7','$retorno->IdImovel');");
   						$insereRestricoes->executarQuery();
   		} 				
   			
   				
   	}
   	 /********************************************************************************************/
    /*         				Verififica Campos da RESTRIÇÂO de 1 a 10 e insere no banco		            */
    /********************************************************************************************/    
   	if(isset($_POST["SqlRetricao8"],
    		$_POST["TombamentoRestricao8"],
    		$_POST["AreaManancialRestricao8"],
    		$_POST["AreaContaminadaRestricao8"],
    		$_POST["PatrimonioAmbientalRestricao8"],
    		$_POST["ProtecaoAmbientalRestricao8"],
    		$_POST["PedenciaFinanceiraRestricao8"])){   		

   		// Faz loop pelo array dos campos:
   		$SqlRetricao8 = $_POST["SqlRetricao8"];
   		$TombamentoRestricao8 = $_POST["TombamentoRestricao8"];
   		$AreaManancialRestricao8 = $_POST["AreaManancialRestricao8"];
   		$AreaContaminadaRestricao8 = $_POST["AreaContaminadaRestricao8"];
   		$PatrimonioAmbientalRestricao8 = $_POST["PatrimonioAmbientalRestricao8"];
   		$ProtecaoAmbientalRestricao8 = $_POST["ProtecaoAmbientalRestricao8"];
   		$PedenciaFinanceiraRestricao8 = $_POST["PedenciaFinanceiraRestricao8"];
   			 				
   			if (($SqlRetricao8 != "" ) && 
   			($TombamentoRestricao8 != "...") && 
   			($AreaManancialRestricao8 != "...") && 
   			($AreaContaminadaRestricao8 != "...") && 
   			($PatrimonioAmbientalRestricao8 != "...") && 
   			($ProtecaoAmbientalRestricao8 != "...") &&
   			($PedenciaFinanceiraRestricao8 != "...") ) {
   			
   			$insereRestricoes->set('sql',"INSERT INTO RestricoesImovel(SqlRestricoes,Tombamento,AreaManancial,AreaContaminada,PatrimonioAmbiental,ProtecaoAmbiental,PedenciaFinanceira,IdImovel)
   						VALUES ('$SqlRetricao8','$TombamentoRestricao8','$AreaManancialRestricao8','$AreaContaminadaRestricao8','$PatrimonioAmbientalRestricao8','$ProtecaoAmbientalRestricao8','$PedenciaFinanceiraRestricao8','$retorno->IdImovel');");
   						$insereRestricoes->executarQuery();
   		}
   				
   	}
   	 /********************************************************************************************/
    /*         				Verififica Campos da RESTRIÇÂO de 1 a 10 e insere no banco		            */
    /********************************************************************************************/    
   	if(isset($_POST["SqlRetricao9"],
    		$_POST["TombamentoRestricao9"],
    		$_POST["AreaManancialRestricao9"],
    		$_POST["AreaContaminadaRestricao9"],
    		$_POST["PatrimonioAmbientalRestricao9"],
    		$_POST["ProtecaoAmbientalRestricao9"],
    		$_POST["PedenciaFinanceiraRestricao9"])){   		

   		// Faz loop pelo array dos campos:
   		$SqlRetricao9 = $_POST["SqlRetricao9"];
   		$TombamentoRestricao9 = $_POST["TombamentoRestricao9"];
   		$AreaManancialRestricao9 = $_POST["AreaManancialRestricao9"];
   		$AreaContaminadaRestricao9 = $_POST["AreaContaminadaRestricao9"];
   		$PatrimonioAmbientalRestricao9 = $_POST["PatrimonioAmbientalRestricao9"];
   		$ProtecaoAmbientalRestricao9 = $_POST["ProtecaoAmbientalRestricao9"];
   		$PedenciaFinanceiraRestricao9 = $_POST["PedenciaFinanceiraRestricao9"];
   			 				
   			if (($SqlRetricao9 != "" ) && 
   			($TombamentoRestricao9 != "...") && 
   			($AreaManancialRestricao9 != "...") && 
   			($AreaContaminadaRestricao9 != "...") && 
   			($PatrimonioAmbientalRestricao9 != "...") && 
   			($ProtecaoAmbientalRestricao9 != "...") &&
   			($PedenciaFinanceiraRestricao9 != "...") ) {
   			
   			$insereRestricoes->set('sql',"INSERT INTO RestricoesImovel(SqlRestricoes,Tombamento,AreaManancial,AreaContaminada,PatrimonioAmbiental,ProtecaoAmbiental,PedenciaFinanceira,IdImovel)
   						VALUES ('$SqlRetricao9','$TombamentoRestricao9','$AreaManancialRestricao9','$AreaContaminadaRestricao9','$PatrimonioAmbientalRestricao9','$ProtecaoAmbientalRestricao9','$PedenciaFinanceiraRestricao9','$retorno->IdImovel');");
   						$insereRestricoes->executarQuery();
   		}
   				
   	}
   	 /********************************************************************************************/
    /*         				Verififica Campos da RESTRIÇÂO de 1 a 10 e insere no banco		            */
    /********************************************************************************************/    
   	if(isset($_POST["SqlRetricao10"],
    		$_POST["TombamentoRestricao10"],
    		$_POST["AreaManancialRestricao10"],
    		$_POST["AreaContaminadaRestricao10"],
    		$_POST["PatrimonioAmbientalRestricao10"],
    		$_POST["ProtecaoAmbientalRestricao10"],
    		$_POST["PedenciaFinanceiraRestricao10"])){   		

   		// Faz loop pelo array dos campos:
   		$SqlRetricao10 = $_POST["SqlRetricao10"];
   		$TombamentoRestricao10 = $_POST["TombamentoRestricao10"];
   		$AreaManancialRestricao10 = $_POST["AreaManancialRestricao10"];
   		$AreaContaminadaRestricao10 = $_POST["AreaContaminadaRestricao10"];
   		$PatrimonioAmbientalRestricao10 = $_POST["PatrimonioAmbientalRestricao10"];
   		$ProtecaoAmbientalRestricao10 = $_POST["ProtecaoAmbientalRestricao10"];
   		$PedenciaFinanceiraRestricao10 = $_POST["PedenciaFinanceiraRestricao10"];
   	
   		 	if (($SqlRetricao10 != "" ) && 
   			($TombamentoRestricao10 != "...") && 
   			($AreaManancialRestricao10 != "...") && 
   			($AreaContaminadaRestricao10 != "...") && 
   			($PatrimonioAmbientalRestricao10 != "...") && 
   			($ProtecaoAmbientalRestricao10 != "...") &&
   			($PedenciaFinanceiraRestricao10 != "...") ) {
   			
   				$insereRestricoes->set('sql',"INSERT INTO RestricoesImovel(SqlRestricoes,Tombamento,AreaManancial,AreaContaminada,PatrimonioAmbiental,ProtecaoAmbiental,PedenciaFinanceira,IdImovel)
   						VALUES ('$SqlRetricao10','$TombamentoRestricao10','$AreaManancialRestricao10','$AreaContaminadaRestricao10','$PatrimonioAmbientalRestricao10','$ProtecaoAmbientalRestricao10','$PedenciaFinanceiraRestricao10','$retorno->IdImovel');");
   						$insereRestricoes->executarQuery();
   		}				
   			
   			
   	}


   echo("<script type='text/javascript'> location.href='../../imovel-cadastro.php'; alert('Dados cadastrados com sucesso'); </script>");
}else{
	 	echo("<script type='text/javascript'> location.href='../../imovel-cadastro.php'; alert('Dados não cadastrados'); </script>");
}


   		
   	