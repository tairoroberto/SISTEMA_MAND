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

    $IdImovel;

    
    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo imovel-cadastro.html estão completos			*/
    /********************************************************************************************/

if (isset($_POST['IdImovelEncerra'])) {

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/
    	  $IdImovel =	  $_POST['IdImovelEncerra']; 
    
		  
     /********************************************************************************************/
    /*						Muda a String SQL para inserir no banco								*/
    /********************************************************************************************/
 		   
	 $atualizaImovel->set('sql',"UPDATE CadastraImovel  SET SituacaoImovel = 'Encerrado'
												 	    WHERE IdImovel = '$IdImovel' ");  
  
  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/
	$atualizaImovel->executarQuery();



 echo("<script type='text/javascript'> location.href='../../imovel-ficha-tecnica?imovelAux=".$IdImovel."'; alert('Imóvel encerrado com sucesso'); </script>");
}else{
	 	echo("<script type='text/javascript'> location.href='../../imovel-ficha-tecnica?imovelAux=".$IdImovel."'; alert('Imóvel não encerrado'); </script>");
}


   		
   	