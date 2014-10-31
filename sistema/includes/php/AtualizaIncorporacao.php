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

    $buscarFoto = new Conexao();
    $buscarFoto->conectar();
    $buscarFoto->selecionarDB(); 


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
             $_POST['ZonemanetoIncorporacao'],
             $_POST['CaBasicoIncorporacao'],
             $_POST['CaMaximoIncorporacao'],
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
    $ZonemanetoIncorporacao =    $_POST['ZonemanetoIncorporacao'];
    $CaBasicoIncorporacao =    $_POST['CaBasicoIncorporacao'];
    $CaMaximoIncorporacao =    $_POST['CaMaximoIncorporacao'];         
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

    $IdIncorporacao =    $_POST['IdIncorporacaoAux'];



   
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
$url = get_furl("http://maps.googleapis.com/maps/api/staticmap?center=".$LocalIncorporacao2.",".$BairroIncorporacao2.",".$CidadeIncorporacao2.",".$EstadoIncorporacao2."&zoom=16&size=1500x1200&markers=color%3red%7Clabel%3aS%7C11211".$LocalIncorporacao2.",".$BairroIncorporacao2.",".$CidadeIncorporacao2.",".$EstadoIncorporacao2."|size:mid&sensor=false");
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


//aqui
    $caminho = "fotos/incorporacao/";
        $buscarFoto->set('sql',"SELECT Imagem1,Imagem2,Imagem3,Imagem4,Imagem5,Imagem6 
                                FROM CadastraIncorporacao 
                                WHERE IdIncorporacao = '$IdIncorporacao' ");
         
         if( $retornoFoto = mysql_fetch_object($buscarFoto->executarQuery())){
            if (($retornoFoto->Imagem1 != null) && ($NomeImagem1 != null)) {
                unlink($caminho.$retornoFoto->Imagem1);
            }
            if (($retornoFoto->Imagem2 != null) && ($NomeImagem2 != null)) {
                unlink($caminho.$retornoFoto->Imagem2);
            }
            if (($retornoFoto->Imagem3 != null) && ($NomeImagem3 != null)) {
                unlink($caminho.$retornoFoto->Imagem3);
            }
            if (($retornoFoto->Imagem4 != null) && ($NomeImagem4 != null)) {
                unlink($caminho.$retornoFoto->Imagem4);
            }
            if (($retornoFoto->Imagem5 != null) && ($NomeImagem5 != null)) {
                unlink($caminho.$retornoFoto->Imagem5);
            }
            if (($retornoFoto->Imagem6 != null) && ($NomeImagem6 != null)) {
                unlink($caminho.$retornoFoto->Imagem6);
            }
          
          } 

          if( $retornoFoto = mysql_fetch_object($buscarFoto->executarQuery())){
            if (($retornoFoto->Imagem1 != null) && ($NomeImagem1 == null)) {
                $NomeImagem1 = $retornoFoto->Imagem1;
            }
            if (($retornoFoto->Imagem2 != null) && ($NomeImagem2 == null)) {
                $NomeImagem2 = $retornoFoto->Imagem2;
            }
            if (($retornoFoto->Imagem3 != null) && ($NomeImagem3 ==null)) {
                $NomeImagem3 = $retornoFoto->Imagem3;
            }
            if (($retornoFoto->Imagem4 != null) && ($NomeImagem4 == null)) {
                $NomeImagem4 = $retornoFoto->Imagem4;
            }
            if (($retornoFoto->Imagem5 != null) && ($NomeImagem5 == null)) {
                $NomeImagem5 = $retornoFoto->Imagem5;
            }
            if (($retornoFoto->Imagem6 != null) && ($NomeImagem6 == null)) {
                $NomeImagem6 = $retornoFoto->Imagem6;
            }
         
          } 

     /********************************************************************************************/
     /*                      Muda a String SQL para inserir no banco                             */
     /********************************************************************************************/
         $insereIncorporacao->set('sql',"UPDATE  CadastraIncorporacao SET SiglaIncorporacao = '$SiglaIncorporacao',
                                                                          TituloIncorporacao = '$TituloIncorporacao',
                                                                          CepIncorporacao = '$CepIncorporacao',
                                                                          LocalIncorporacao = '$LocalIncorporacao',
                                                                          NumeroIncorporacao = '$NumeroIncorporacao',
                                                                          EstadoIncorporacao = '$EstadoIncorporacao',
                                                                          CidadeIncorporacao = '$CidadeIncorporacao',
                                                                          BairroIncorporacao = '$BairroIncorporacao',
                                                                          MetragemIncorporacao = '$MetragemIncorporacao',
                                                                          ValorVendaIncorporacao = '$ValorVendaIncorporacao',
                                                                          AtividadeIncorporacao = '$AtividadeIncorporacao',
                                                                          ZonemanetoIncorporacao = '$ZonemanetoIncorporacao',
                                                                          CaBasicoIncorporacao = '$CaBasicoIncorporacao',
                                                                          CaMaximoIncorporacao = '$CaMaximoIncorporacao',
                                                                          NomeProprietarioIncorporacao = '$NomeProprietarioIncorporacao',
                                                                          TelProprietarioIncorporacao = '$TelProprietarioIncorporacao',
                                                                          EmailProprietarioIncorporacao = '$EmailProprietarioIncorporacao',
                                                                          NomeCorreteorIncorpotacao = '$NomeCorreteorIncorpotacao',
                                                                          TelefoneCorretorIncorporacao = '$TelefoneCorretorIncorporacao',
                                                                          EmailCorretorIncorporacao = '$EmailCorretorIncorporacao',
                                                                          situacao = '$situacao',
                                                                          ProjetoAprovado = '$ProjetoAprovado',
                                                                          DocumentacaoIncorporacao = '$DocumentacaoIncorporacao',
                                                                          TituloFoto1 = '$TituloFoto1',
                                                                          Imagem1 = '$NomeImagem1',
                                                                          TituloFoto2 = '$TituloFoto2',
                                                                          Imagem2 = '$NomeImagem2',
                                                                          TituloFoto3 = '$TituloFoto3',
                                                                          Imagem3 = '$NomeImagem3',
                                                                          TituloFoto4 = '$TituloFoto4',
                                                                          Imagem4 = '$NomeImagem4',
                                                                          TituloFoto5 = '$TituloFoto5',
                                                                          Imagem5 = '$NomeImagem5',
                                                                          TituloFoto6 = '$TituloFoto6',
                                                                          Imagem6 = '$NomeImagem6',
                                                                          ImagemMapaIncorporacao = 'ImagemMapaIncorporacao".$CepIncorporacao.".jpg' 
                                                                          WHERE IdIncorporacao = '$IdIncorporacao'");
         $insereIncorporacao->executarQuery();


    /***********************************************************************************************************/
    /*   Verificar se foram acresentados mais campos de documentos e muda a STRING SQL para inserção no banco   */
    /***********************************************************************************************************/
   if(isset($_POST["DataArray"],$_POST["DescricaoArray"],$_POST["IdHistoricoIncorporacao"])){
        // Faz loop pelo array dos campos:
        $DataArray = $_POST["DataArray"];
        $DescricaoArray = $_POST["DescricaoArray"]; 
        $IdHistoricoIncorporacao = $_POST["IdHistoricoIncorporacao"]; 
        $i = 0;
        $j = 0;
        $k = 0;

        set_time_limit(120);
if (($DataArray[$i] != "") && ($DescricaoArray[$j] != "")) {
    while($i < count($DataArray) && $j < count($DescricaoArray)){
        

            $insereHistoricoIncorporacao->set('sql',"UPDATE HistoricoIncorporacao SET DataHistoricoIncorporacao = '$DataArray[$i]',
                                                                                      DescricaoHistoricoIncorporacao = '$DescricaoArray[$j]'
                                                                                      WHERE IdHistoricoIncorporacao = '$IdHistoricoIncorporacao[$k]' ");
            $insereHistoricoIncorporacao->executarQuery();                
            $i++;
            $j++; 
            $k++;           
            }
        }
    }

	echo("<script type='text/javascript'> location.href='../../incorporacao-editar-lista.php'; alert('Dados atualizados com sucesso'); </script>");

}else{
        echo("<script type='text/javascript'> location.href='../../incorporacao-editar-lista.php'; alert('Dados não atualizados'); </script>");
}

