<?php

	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere a Categoria		*/
    /********************************************************************************************/
 
    $insereFAQ = new Conexao();
    $insereFAQ->conectar();
    $insereFAQ->selecionarDB();

    $buscar = new Conexao();
    $buscar->conectar();
    $buscar->selecionarDB();

    $SelectCategoria;
    $NomeFaq;
    $Imagem1;
    $NomeImagem1 = null;
    $CaminhaImagem1;
    $Imagem2;
    $NomeImagem2 = null;
    $CaminhaImagem2;
    $Imagem3;
    $NomeImagem3 = null;
    $CaminhaImagem3;
    $Descricao;
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
            $CaminhaImagem1 = "fotos/Faq/" . $NomeImagem1;
 
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($Imagem1["tmp_name"], $CaminhaImagem1);
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


    /*********************************************************************************************/
    /*                       Função para inserir imagem2 no banco de dados                       */
    /*********************************************************************************************/

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
            $CaminhaImagem2 = "fotos/Faq/" . $NomeImagem2;
 
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($Imagem2["tmp_name"], $CaminhaImagem2);
 
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
            $CaminhaImagem3 = "fotos/Faq/" . $NomeImagem3;
 
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($Imagem3["tmp_name"], $CaminhaImagem3);
 
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
    /*			Verifica se os dados enviados pelo FAQ-Categoria.html estão completos 			*/
    /********************************************************************************************/

   if (isset($_POST['SelectCategoria'],
          $_POST['NomeFaq'],
          $_POST['Descricao'])){

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/

    $SelectCategoria =	  $_POST['SelectCategoria'];
    $NomeFaq =    $_POST['NomeFaq'];         
    $Descricao =    $_POST['Descricao'];

        /********************************************************************************************/
        /*                      Muda a String SQL para inserir no banco                             */
        /********************************************************************************************/
         $insereFAQ->set('sql',"INSERT INTO CadastroFAQ(NomeFaq,Imagem1,Imagem2,Imagem3,Descricao,IdCategoria) 
                              VALUES ('$NomeFaq','$NomeImagem1','$NomeImagem2','$NomeImagem3','$Descricao','$SelectCategoria');");

/********************************************************************************************/
/*								Execulta a String SQL 										*/
/********************************************************************************************/

  if ($insereFAQ->executarQuery()) {
	 	echo("<script type='text/javascript'> location.href='../../FAQ-Cadastro.php'; alert('Dados cadastrados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../FAQ-Cadastro.php'; alert('Dados não cadastrados'); </script>");
	 }

} 

 


