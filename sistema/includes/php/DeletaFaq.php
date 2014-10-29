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
    $verificaQuery = false;

    if (isset($_POST['IdCadastraFaqAux'])){    	
    
    $IdCadastraFaq = $_POST['IdCadastraFaqAux'];

    /********************************************************************************************/
    /*                      Função para inserir imagem1 no banco de dados                       */
    /********************************************************************************************/

    $caminho = "fotos/Faq/";
    
       
      		
    $buscar->set('sql',"SELECT `Imagem1`,`Imagem2`,`Imagem3` FROM `CadastroFAQ` WHERE IdCadastraFaq = '$IdCadastraFaq' ");
    
        if( $retorno = mysql_fetch_object($buscar->executarQuery())){
        		if ($retorno->Imagem1 != null) {
        			unlink($caminho.$retorno->Imagem1);
        		}
        		if ($retorno->Imagem2 != null) {
        			unlink($caminho.$retorno->Imagem2);
        		}
        		if ($retorno->Imagem3 != null) {
        			unlink($caminho.$retorno->Imagem3);
        		}   

        		/********************************************************************************************/
        		/*                      Muda a String SQL para inserir no banco                             */
        		/********************************************************************************************/
        		$insereFAQ->set('sql',"DELETE FROM CadastroFAQ
							           WHERE IdCadastraFaq = '$IdCadastraFaq' ");
        		$insereFAQ->executarQuery();
        		echo("<script type='text/javascript'> location.href='../../FAQ-Cadastro.php'; alert('Dados Deletados com sucesso'); </script>");
        		
        }else{
        	echo("<script type='text/javascript'> location.href='../../FAQ-Cadastro.php'; alert('Dados não Deletados'); </script>");
        }
  }


