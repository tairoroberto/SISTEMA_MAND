<?php

	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere a Categoria		*/
    /********************************************************************************************/
 
    $insereIncorporacao = new Conexao();
    $insereIncorporacao->conectar();
    $insereIncorporacao->selecionarDB();

    $buscarIncorporacao = new Conexao();
    $buscarIncorporacao->conectar();
    $buscarIncorporacao->selecionarDB();

    $insereHistoricoIncorporacao = new Conexao();
    $insereHistoricoIncorporacao->conectar();
    $insereHistoricoIncorporacao->selecionarDB();


    $Imagem1;
    $NomeImagem1 = null;
    $CaminhoImagem1;
    $Imagem2;
    $NomeImagem2 = null;
    $CaminhoImagem2;
    $Imagem3;
    $NomeImagem3 = null;
    $CaminhoImagem3;
    $Imagem4;
    $NomeImagem4 = null;
    $CaminhoImagem4;
    $Imagem5;
    $NomeImagem5 = null;
    $CaminhoImagem5;
    $Imagem6;
    $NomeImagem6 = null;
    $CaminhoImagem6;

    $error =  array();

    /********************************************************************************************/
    /*                      Função para inserir imagem1 no banco de dados                       */
    /********************************************************************************************/

// Se o usuário clicou no botão cadastrar efetua as ações
   if (!empty($_FILES['Imagem1'])){

    $Imagem1 = $_FILES["Imagem1"];
 
    // Se a foto estiver sido selecionada
    if (!empty($Imagem1["name"])) {
 
        // Largura máxima em pixels
        $largura = 50000000;
        // Altura máxima em pixels
        $altura = 50000000;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 100000000000;
 
        // Verifica se o arquivo é uma imagem
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $Imagem1["type"])){
           $error[1] = "Isso não é uma imagem.";
        } 
 
        // Pega as dimensões da imagem
        $dimensoes = getimagesize($Imagem1["tmp_name"]);
 
        // Verifica se a largura da imagem é maior que a largura permitida
        if($dimensoes[0] > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }
 
        // Verifica se a altura da imagem é maior que a altura permitida
        if($dimensoes[1] > $altura) {
            $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
        }
 
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if($Imagem1["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
        } 
        // Se não houver nenhum erro
        if (count($error) == 0) {
 
            // Pega extensão da imagem
            preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $Imagem1["name"], $ext);
 
            // Gera um nome único para a imagem
            $NomeImagem1 = md5(uniqid(time())) . "." . $ext[1];
 
            // Caminho de onde ficará a imagem
            $CaminhoImagem1 = "fotos/incorporacao/" . $NomeImagem1;
 
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($Imagem1["tmp_name"], $CaminhoImagem1);
        }
 
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "";
            }
        }
    }
}else{
    $NomeImagem1 = null;
}


    /********************************************************************************************/
    /*                      Função para inserir imagem2 no banco de dados                       */
    /********************************************************************************************/

// Se o usuário clicou no botão cadastrar efetua as ações
   if (!empty($_FILES['Imagem2'])){

    $Imagem2 = $_FILES["Imagem2"];
 
    // Se a foto estiver sido selecionada
    if (!empty($Imagem2["name"])) {
 
        // Largura máxima em pixels
        $largura = 50000000;
        // Altura máxima em pixels
        $altura = 50000000;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 100000000000;
 
        // Verifica se o arquivo é uma imagem
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $Imagem2["type"])){
           $error[1] = "Isso não é uma imagem.";
        } 
 
        // Pega as dimensões da imagem
        $dimensoes = getimagesize($Imagem2["tmp_name"]);
 
        // Verifica se a largura da imagem é maior que a largura permitida
        if($dimensoes[0] > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }
 
        // Verifica se a altura da imagem é maior que a altura permitida
        if($dimensoes[1] > $altura) {
            $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
        }
 
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if($Imagem2["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
        } 
        // Se não houver nenhum erro
        if (count($error) == 0) {
 
            // Pega extensão da imagem
            preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $Imagem2["name"], $ext);
 
            // Gera um nome único para a imagem
            $NomeImagem2 = md5(uniqid(time())) . "." . $ext[1];
 
            // Caminho de onde ficará a imagem
            $CaminhoImagem2 = "fotos/incorporacao/" . $NomeImagem2;
 
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($Imagem2["tmp_name"], $CaminhoImagem2);
 
            // Insere os dados no banco
            
        }
 
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "";
            }
        }
    }
}else{
    $NomeImagem2 = null;
}


    /********************************************************************************************/
    /*                      Função para inserir imagem3 no banco de dados                       */
    /********************************************************************************************/

// Se o usuário clicou no botão cadastrar efetua as ações
   if (!empty($_FILES['Imagem3'])){


    $Imagem3 = $_FILES["Imagem3"];
 
    // Se a foto estiver sido selecionada
    if (!empty($Imagem3["name"])) {
 
        // Largura máxima em pixels
        $largura = 50000000;
        // Altura máxima em pixels
        $altura = 50000000;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 100000000000;
 
        // Verifica se o arquivo é uma imagem
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $Imagem3["type"])){
           $error[1] = "Isso não é uma imagem.";
        } 
 
        // Pega as dimensões da imagem
        $dimensoes = getimagesize($Imagem3["tmp_name"]);
 
        // Verifica se a largura da imagem é maior que a largura permitida
        if($dimensoes[0] > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }
 
        // Verifica se a altura da imagem é maior que a altura permitida
        if($dimensoes[1] > $altura) {
            $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
        }
 
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if($Imagem3["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
        } 
        // Se não houver nenhum erro
        if (count($error) == 0) {
 
            // Pega extensão da imagem
            preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $Imagem3["name"], $ext);
 
            // Gera um nome único para a imagem
            $NomeImagem3 = md5(uniqid(time())) . "." . $ext[1];
 
            // Caminho de onde ficará a imagem
            $CaminhoImagem3 = "fotos/incorporacao/" . $NomeImagem3;
 
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($Imagem3["tmp_name"], $CaminhoImagem3);
 
        }
 
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "";
            }
        }
    }
}else{
    $NomeImagem3 = null;
}




    /********************************************************************************************/
    /*                      Função para inserir imagem1 no banco de dados                       */
    /********************************************************************************************/

// Se o usuário clicou no botão cadastrar efetua as ações
   if (!empty($_FILES['Imagem4'])){

    $Imagem4 = $_FILES["Imagem4"];
 
    // Se a foto estiver sido selecionada
    if (!empty($Imagem4["name"])) {
 
        // Largura máxima em pixels
        $largura = 50000000;
        // Altura máxima em pixels
        $altura = 50000000;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 100000000000;
 
        // Verifica se o arquivo é uma imagem
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $Imagem4["type"])){
           $error[1] = "Isso não é uma imagem.";
        } 
 
        // Pega as dimensões da imagem
        $dimensoes = getimagesize($Imagem4["tmp_name"]);
 
        // Verifica se a largura da imagem é maior que a largura permitida
        if($dimensoes[0] > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }
 
        // Verifica se a altura da imagem é maior que a altura permitida
        if($dimensoes[1] > $altura) {
            $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
        }
 
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if($Imagem4["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
        } 
        // Se não houver nenhum erro
        if (count($error) == 0) {
 
            // Pega extensão da imagem
            preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $Imagem4["name"], $ext);
 
            // Gera um nome único para a imagem
            $NomeImagem4 = md5(uniqid(time())) . "." . $ext[1];
 
            // Caminho de onde ficará a imagem
            $CaminhoImagem4 = "fotos/incorporacao/" . $NomeImagem4;
 
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($Imagem4["tmp_name"], $CaminhoImagem4);
        }
 
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "";
            }
        }
    }
}else{
    $NomeImagem4 = null;
}


    /********************************************************************************************/
    /*                      Função para inserir imagem1 no banco de dados                       */
    /********************************************************************************************/

// Se o usuário clicou no botão cadastrar efetua as ações
   if (!empty($_FILES['Imagem5'])){

    $Imagem5 = $_FILES["Imagem5"];
 
    // Se a foto estiver sido selecionada
    if (!empty($Imagem5["name"])) {
 
        // Largura máxima em pixels
        $largura = 50000000;
        // Altura máxima em pixels
        $altura = 50000000;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 100000000000;
 
        // Verifica se o arquivo é uma imagem
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $Imagem5["type"])){
           $error[1] = "Isso não é uma imagem.";
        } 
 
        // Pega as dimensões da imagem
        $dimensoes = getimagesize($Imagem5["tmp_name"]);
 
        // Verifica se a largura da imagem é maior que a largura permitida
        if($dimensoes[0] > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }
 
        // Verifica se a altura da imagem é maior que a altura permitida
        if($dimensoes[1] > $altura) {
            $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
        }
 
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if($Imagem5["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
        } 
        // Se não houver nenhum erro
        if (count($error) == 0) {
 
            // Pega extensão da imagem
            preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $Imagem5["name"], $ext);
 
            // Gera um nome único para a imagem
            $NomeImagem5 = md5(uniqid(time())) . "." . $ext[1];
 
            // Caminho de onde ficará a imagem
            $CaminhoImagem5 = "fotos/incorporacao/" . $NomeImagem5;
 
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($Imagem5["tmp_name"], $CaminhoImagem5);
        }
 
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "";
            }
        }
    }
}else{
    $NomeImagem5 = null;
}



    /********************************************************************************************/
    /*                      Função para inserir imagem1 no banco de dados                       */
    /********************************************************************************************/

// Se o usuário clicou no botão cadastrar efetua as ações
   if (!empty($_FILES['Imagem6'])){

    $Imagem6 = $_FILES["Imagem6"];
 
    // Se a foto estiver sido selecionada
    if (!empty($Imagem6["name"])) {
 
        // Largura máxima em pixels
        $largura = 50000000;
        // Altura máxima em pixels
        $altura = 50000000;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 100000000000;
 
        // Verifica se o arquivo é uma imagem
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $Imagem6["type"])){
           $error[1] = "Isso não é uma imagem.";
        } 
 
        // Pega as dimensões da imagem
        $dimensoes = getimagesize($Imagem6["tmp_name"]);
 
        // Verifica se a largura da imagem é maior que a largura permitida
        if($dimensoes[0] > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }
 
        // Verifica se a altura da imagem é maior que a altura permitida
        if($dimensoes[1] > $altura) {
            $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
        }
 
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if($Imagem6["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
        } 
        // Se não houver nenhum erro
        if (count($error) == 0) {
 
            // Pega extensão da imagem
            preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $Imagem6["name"], $ext);
 
            // Gera um nome único para a imagem
            $NomeImagem6 = md5(uniqid(time())) . "." . $ext[1];
 
            // Caminho de onde ficará a imagem
            $CaminhoImagem6 = "fotos/incorporacao/" . $NomeImagem6;
 
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($Imagem6["tmp_name"], $CaminhoImagem6);
        }
 
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "";
            }
        }
    }
}else{
    $NomeImagem6 = null;
}



    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo FAQ-Categoria.html estão completos 			*/
    /********************************************************************************************/

   if (isset($_POST['SiglaIncorporacao'],
             $_POST['TituloIncorporacao'],
             $_POST['CepIncorporacao'],
             $_POST['LocalIncorporacao'],
             $_POST['NumeroIncorporacao'],
             $_POST['EstadoIncorporacao'],
             $_POST['CidadeIncorporacao'],
             $_POST['BairroIncorporacao'],
             $_POST['MetragemIncorporacao'],
             $_POST['ValorVendaIncorporacao'],
             $_POST['AtividadeIncorporacao'],
             $_POST['ZonemanetoInc13885'],
             $_POST['CaBasicoInc13885'],
             $_POST['CaMaximoInc13885'],
             $_POST['ZonemanetoInc16050'],
             $_POST['CaBasicoInc16050'],
             $_POST['CaMaximoInc16050'],
             $_POST['NomeProprietarioIncorporacao'],
             $_POST['TelProprietarioIncorporacao'],
             $_POST['EmailProprietarioIncorporacao'],
             $_POST['NomeCorreteorIncorpotacao'],
             $_POST['TelefoneCorretorIncorporacao'],
             $_POST['EmailCorretorIncorporacao'],
             $_POST['situacao'],
             $_POST['ProjetoAprovado'],
             $_POST['DocumentacaoIncorporacao'])){

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/

    $SiglaIncorporacao =	  $_POST['SiglaIncorporacao'];
    $TituloIncorporacao =    $_POST['TituloIncorporacao'];         
    $CepIncorporacao =    $_POST['CepIncorporacao'];
    $LocalIncorporacao =    $_POST['LocalIncorporacao'];
    $NumeroIncorporacao =    $_POST['NumeroIncorporacao'];         
    $EstadoIncorporacao =    $_POST['EstadoIncorporacao'];
    $CidadeIncorporacao =    $_POST['CidadeIncorporacao'];
    $BairroIncorporacao =    $_POST['BairroIncorporacao'];         
    $MetragemIncorporacao =    $_POST['MetragemIncorporacao'];
    $ValorVendaIncorporacao =    $_POST['ValorVendaIncorporacao'];
    $AtividadeIncorporacao =    $_POST['AtividadeIncorporacao'];         
    $ZonemanetoInc13885 =    $_POST['ZonemanetoInc13885'];
    $CaBasicoInc13885 =    $_POST['CaBasicoInc13885'];
    $CaMaximoInc13885 =    $_POST['CaMaximoInc13885'];  
    $ZonemanetoInc16050 =    $_POST['ZonemanetoInc16050'];
    $CaBasicoInc16050 =    $_POST['CaBasicoInc16050'];
    $CaMaximoInc16050 =    $_POST['CaMaximoInc16050'];         
    $NomeProprietarioIncorporacao =    $_POST['NomeProprietarioIncorporacao'];
    $TelProprietarioIncorporacao =    $_POST['TelProprietarioIncorporacao'];
    $EmailProprietarioIncorporacao =    $_POST['EmailProprietarioIncorporacao'];         
    $NomeCorreteorIncorpotacao =    $_POST['NomeCorreteorIncorpotacao'];
    $TelefoneCorretorIncorporacao =    $_POST['TelefoneCorretorIncorporacao'];
    $EmailCorretorIncorporacao =    $_POST['EmailCorretorIncorporacao'];         
    $situacao =    $_POST['situacao'];
    $ProjetoAprovado =    $_POST['ProjetoAprovado'];
    $DocumentacaoIncorporacao =    $_POST['DocumentacaoIncorporacao'];   

    $TituloFoto1 =    $_POST['TituloFoto1'];  
    $TituloFoto2 =    $_POST['TituloFoto2'];  
    $TituloFoto3 =    $_POST['TituloFoto3'];  
    $TituloFoto4 =    $_POST['TituloFoto4'];  
    $TituloFoto5 =    $_POST['TituloFoto5'];  
    $TituloFoto6 =    $_POST['TituloFoto6'];

    //Auxiliar para imagem do mapa


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
$LocalIncorporacao2 = str_replace(" ", "%", $LocalIncorporacao);
$NumeroIncorporacao2 = str_replace(" ", "%", $NumeroIncorporacao);
$EstadoIncorporacao2 = str_replace(" ", "%", $EstadoIncorporacao);
$CidadeIncorporacao2 = str_replace(" ", "%", $CidadeIncorporacao);
$BairroIncorporacao2 = str_replace(" ", "%", $BairroIncorporacao);
//ver aqui para completar o endereço de busca do mapa no google
$url = get_furl("http://maps.googleapis.com/maps/api/staticmap?center=".$LocalIncorporacao2.",".$NumeroIncorporacao2.",".$BairroIncorporacao2.",".$CidadeIncorporacao2.",".$EstadoIncorporacao2."&zoom=16&size=1500x1200&markers=color%3red%7Clabel%3aS%7C11211".$LocalIncorporacao2.",".$NumeroIncorporacao2.",".$BairroIncorporacao2.",".$CidadeIncorporacao2.",".$EstadoIncorporacao2."|size:mid&sensor=false");
$ch = curl_init($url);
$fp = fopen('fotos/incorporacao/ImagemMapaIncorporacao'.$CepIncorporacao.'.jpg', 'wb');

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 2);
curl_setopt($ch, CURLOPT_FILE, $fp);
$contents = curl_exec($ch);
curl_close($ch);


*/


//aqui


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

//Auxiliar para imagem do mapa
$EnderecoMapa  = $LocalIncorporacao.",".$BairroIncorporacao.",".$CidadeIncorporacao.",".$EstadoIncorporacao;


$EnderecoMapa2 = str_replace(" ", "+", $EnderecoMapa); 
$url = get_furl("http://maps.googleapis.com/maps/api/staticmap?center=".$EnderecoMapa2."&zoom=16&size=900x300&scale=2&markers=color%3red%7Clabel%3aS%7C11211".$EnderecoMapa2."|size:mid&sensor=false");
$ch = curl_init($url);

$fp = fopen('fotos/incorporacao/ImagemMapaIncorporacao'.$CepIncorporacao.'.jpg', 'wb');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 2);
curl_setopt($ch, CURLOPT_FILE, $fp);
$contents = curl_exec($ch);

curl_close($ch);

//aqui fim


     /********************************************************************************************/
     /*                      Muda a String SQL para inserir no banco                             */
     /********************************************************************************************/
         $insereIncorporacao->set('sql',"INSERT INTO CadastraIncorporacao(SiglaIncorporacao,
                                                                          TituloIncorporacao,
                                                                          CepIncorporacao,
                                                                          LocalIncorporacao,
                                                                          NumeroIncorporacao,
                                                                          EstadoIncorporacao,
                                                                          CidadeIncorporacao,
                                                                          BairroIncorporacao,
                                                                          MetragemIncorporacao,
                                                                          ValorVendaIncorporacao,
                                                                          AtividadeIncorporacao,
                                                                          ZonemanetoInc13885,
                                                                          CaBasicoInc13885,
                                                                          CaMaximoInc13885,
                                                                          ZonemanetoInc16050,
                                                                          CaBasicoInc16050,
                                                                          CaMaximoInc16050,
                                                                          NomeProprietarioIncorporacao,
                                                                          TelProprietarioIncorporacao,
                                                                          EmailProprietarioIncorporacao,
                                                                          NomeCorreteorIncorpotacao,
                                                                          TelefoneCorretorIncorporacao,
                                                                          EmailCorretorIncorporacao,
                                                                          situacao,
                                                                          ProjetoAprovado,
                                                                          DocumentacaoIncorporacao,
                                                                          TituloFoto1,
                                                                          Imagem1,
                                                                          TituloFoto2,
                                                                          Imagem2,
                                                                          TituloFoto3,
                                                                          Imagem3,
                                                                          TituloFoto4,
                                                                          Imagem4,
                                                                          TituloFoto5,
                                                                          Imagem5,
                                                                          TituloFoto6,
                                                                          Imagem6,
                                                                          ImagemMapaIncorporacao) 
                                                                  VALUES ('$SiglaIncorporacao',
                                                                          '$TituloIncorporacao',
                                                                          '$CepIncorporacao',
                                                                          '$LocalIncorporacao',
                                                                          '$NumeroIncorporacao',
                                                                          '$EstadoIncorporacao',
                                                                          '$CidadeIncorporacao',
                                                                          '$BairroIncorporacao',
                                                                          '$MetragemIncorporacao',
                                                                          '$ValorVendaIncorporacao',
                                                                          '$AtividadeIncorporacao',
                                                                          '$ZonemanetoInc13885',
                                                                          '$CaBasicoInc13885',
                                                                          '$CaMaximoInc13885',
                                                                          '$ZonemanetoInc16050',
                                                                          '$CaBasicoInc16050',
                                                                          '$CaMaximoInc16050',
                                                                          '$NomeProprietarioIncorporacao',
                                                                          '$TelProprietarioIncorporacao',
                                                                          '$EmailProprietarioIncorporacao',
                                                                          '$NomeCorreteorIncorpotacao',
                                                                          '$TelefoneCorretorIncorporacao',
                                                                          '$EmailCorretorIncorporacao',
                                                                          '$situacao',
                                                                          '$ProjetoAprovado',
                                                                          '$DocumentacaoIncorporacao',
                                                                          '$TituloFoto1',
                                                                          '$NomeImagem1',
                                                                          '$TituloFoto2',
                                                                          '$NomeImagem2',
                                                                          '$TituloFoto3',
                                                                          '$NomeImagem3',
                                                                          '$TituloFoto4',
                                                                          '$NomeImagem4',
                                                                          '$TituloFoto5',
                                                                          '$NomeImagem5',
                                                                          '$TituloFoto6',
                                                                          '$NomeImagem6',
                                                                          'ImagemMapaIncorporacao".$CepIncorporacao.".jpg');");
         $insereIncorporacao->executarQuery();

/*
         $buscarIncorporacao->set('sql',"SELECT IdIncorporacao FROM `CadastraIncorporacao`  WHERE SiglaIncorporacao = '$SiglaIncorporacao' AND
                                                                                                 TituloIncorporacao = '$TituloIncorporacao' AND
                                                                                                 CepIncorporacao = '$CepIncorporacao' AND
                                                                                                 LocalIncorporacao = '$LocalIncorporacao' AND
                                                                                                 NumeroIncorporacao = '$NumeroIncorporacao' AND
                                                                                                 EstadoIncorporacao = '$EstadoIncorporacao' AND
                                                                                                 CidadeIncorporacao = '$CidadeIncorporacao' AND
                                                                                                 BairroIncorporacao = '$BairroIncorporacao' AND
                                                                                                 MetragemIncorporacao = '$MetragemIncorporacao' AND
                                                                                                 ValorVendaIncorporacao = '$ValorVendaIncorporacao' AND
                                                                                                 AtividadeIncorporacao = '$AtividadeIncorporacao' AND
                                                                                                 ZonemanetoIncorporacao = '$ZonemanetoIncorporacao' AND
                                                                                                 CaBasicoIncorporacao = '$CaBasicoIncorporacao' AND
                                                                                                 CaMaximoIncorporacao = '$CaMaximoIncorporacao' AND
                                                                                                 NomeProprietarioIncorporacao = '$NomeProprietarioIncorporacao' AND
                                                                                                 TelProprietarioIncorporacao = '$TelProprietarioIncorporacao' AND
                                                                                                 EmailProprietarioIncorporacao = '$EmailProprietarioIncorporacao' AND
                                                                                                 NomeCorreteorIncorpotacao =  '$NomeCorreteorIncorpotacao' AND
                                                                                                 TelefoneCorretorIncorporacao = '$TelefoneCorretorIncorporacao' AND
                                                                                                 EmailCorretorIncorporacao = '$EmailCorretorIncorporacao' AND
                                                                                                 situacao = '$situacao' AND
                                                                                                 ProjetoAprovado = '$ProjetoAprovado' AND
                                                                                                 DocumentacaoIncorporacao = '$DocumentacaoIncorporacao' ");     
        
    */
        $buscarIncorporacao->set('sql',"SELECT `IdIncorporacao` FROM `CadastraIncorporacao` WHERE IdIncorporacao =  LAST_INSERT_ID()");
        $retornoIncorporacao = mysql_fetch_object($buscarIncorporacao->executarQuery());  


/********************************************************************************************/
/*								Execulta a String SQL 										*/
/********************************************************************************************/
   if (isset($_POST['DataHistorico'],$_POST['DescricaoHistorico'])){
        $DataHistorico =    $_POST['DataHistorico'];
        $DescricaoHistorico =    $_POST['DescricaoHistorico']; 
        
        $insereHistoricoIncorporacao->set('sql',"INSERT INTO HistoricoIncorporacao (DataHistoricoIncorporacao, DescricaoHistoricoIncorporacao, IdIncorporacao) 
                                               VALUES('$DataHistorico','$DescricaoHistorico','$retornoIncorporacao->IdIncorporacao')");
        $insereHistoricoIncorporacao->executarQuery();
   }



    /***********************************************************************************************************/
    /*   Verificar se foram acresentados mais campos de documentos e muda a STRING SQL para inserção no banco   */
    /***********************************************************************************************************/
   if(isset($_POST["DataArray"],$_POST["DescricaoArray"])){
        // Faz loop pelo array dos campos:
        $DataArray = $_POST["DataArray"];
        $DescricaoArray = $_POST["DescricaoArray"];
        $i = 0;
        $j = 0;
if (($DataArray[$i] != "") && ($DescricaoArray[$j] != "")) {
    while($i < count($DataArray) && $j < count($DescricaoArray)){        

            $insereHistoricoIncorporacao->set('sql',"INSERT INTO HistoricoIncorporacao(DataHistoricoIncorporacao, DescricaoHistoricoIncorporacao, IdIncorporacao) 
                                 VALUES ('$DataArray[$i]','$DescricaoArray[$j]','$retornoIncorporacao->IdIncorporacao');");
            $insereHistoricoIncorporacao->executarQuery();                
            $i++;
            $j++; 
                      
            }

        }
    }

	echo("<script type='text/javascript'> location.href='../../incorporacao-cadastro.php'; alert('Dados cadastrados com sucesso'); </script>");
	 
}else{
        echo("<script type='text/javascript'> location.href='../../incorporacao-cadastro.php'; alert('Dados não cadastrados'); </script>");
}

