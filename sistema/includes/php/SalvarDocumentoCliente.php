<?php

	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere a Categoria		*/
    /********************************************************************************************/
 
    $insereDocumento = new Conexao();
    $insereDocumento->conectar();
    $insereDocumento->selecionarDB();

    $CaminhoDocumento;
    $NomeDocumento;
    $error = array();

    /********************************************************************************************/
    /*                      Função para inserir imagem1 no banco de dados                       */
    /********************************************************************************************/

// Se o usuário clicou no botão cadastrar efetua as ações
   if (!empty($_FILES['Documento'])){

    $Documento = $_FILES["Documento"];
 
    // Se a foto estiver sido selecionada
    if (!empty($Documento["name"])) {
 
        // Largura máxima em pixels
        $largura = 50000000;
        // Altura máxima em pixels
        $altura = 50000000;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 100000000000;
 
        
        // Pega as dimensões da imagem
        $dimensoes = getimagesize($Documento["tmp_name"]);
 
        // Verifica se a largura da imagem é maior que a largura permitida
        if($dimensoes[0] > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }
 
        // Verifica se a altura da imagem é maior que a altura permitida
        if($dimensoes[1] > $altura) {
            $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
        }
 
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if($Documento["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
        } 
        // Se não houver nenhum erro
        if (count($error) == 0) {
 
            // Pega extensão da imagem
            preg_match("/.(gif|bmp|png|jpg|jpeg|docx|pdf|doc|txt|odf|xml){1}$/i", $Documento["name"], $ext);
 
            // Gera um nome único para a imagem
            $NomeDocumento = $Documento["name"]."-".md5(uniqid(time())) . "." . $ext[1];
 
            // Caminho de onde ficará a imagem
            $CaminhoDocumento = "../../Documentos-Cliente/" . $NomeDocumento;
 
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($Documento["tmp_name"], $CaminhoDocumento);
        }
 
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "";
            }
        }
    }
}else{
    $NomeDocumento = null;
}


    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo FAQ-Categoria.html estão completos 			*/
    /********************************************************************************************/

   if (isset($_POST['IdUsuario'])){

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/

        $IdUsuario =	  $_POST['IdUsuario'];
        $data = date('d/m/Y');
        /********************************************************************************************/
        /*                      Muda a String SQL para inserir no banco                             */
        /********************************************************************************************/
         $insereDocumento->set('sql',"INSERT INTO DocumentosUsuario(NomeDocumento,data,IdUsuario) 
                              VALUES ('$NomeDocumento','$data',$IdUsuario)");

/********************************************************************************************/
/*								Execulta a String SQL 										*/
/********************************************************************************************/

  if ($insereDocumento->executarQuery()) {
	 	echo("<script type='text/javascript'> location.href='../../cliente-area.php'; alert('Documentos enviados com sucesso'); </script>");
	 }else{
	 	echo("<script type='text/javascript'> location.href='../../cliente-area.php'; alert('Dados não enviados'); </script>");
	 }

} 

 


