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

    $buscarFoto = new Conexao();
    $buscarFoto->conectar();
    $buscarFoto->selecionarDB();

    $insereHistoricoIncorporacao = new Conexao();
    $insereHistoricoIncorporacao->conectar();
    $insereHistoricoIncorporacao->selecionarDB();  





    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo FAQ-Categoria.html estão completos 			*/
    /********************************************************************************************/

   if (isset($_POST['IdIncorporacaoAux'])){

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/


    $IdIncorporacao =    $_POST['IdIncorporacaoAux'];
   



    $caminho = "fotos/incorporacao/";
        $buscarFoto->set('sql',"SELECT Imagem1,Imagem2,Imagem3,Imagem4,Imagem5,Imagem6,ImagemMapaIncorporacao 
                                FROM CadastraIncorporacao 
                                WHERE IdIncorporacao = '$IdIncorporacao' ");
         
         if( $retornoFoto = mysql_fetch_object($buscarFoto->executarQuery())){
            if ($retornoFoto->Imagem1 != null) {
                unlink($caminho.$retornoFoto->Imagem1);
            }
            if ($retornoFoto->Imagem2 != null) {
                unlink($caminho.$retornoFoto->Imagem2);
            }
            if ($retornoFoto->Imagem3 != null) {
                unlink($caminho.$retornoFoto->Imagem3);
            }
            if ($retornoFoto->Imagem4 != null) {
                unlink($caminho.$retornoFoto->Imagem4);
            }
            if ($retornoFoto->Imagem5 != null) {
                unlink($caminho.$retornoFoto->Imagem5);
            }
            if ($retornoFoto->Imagem6 != null) {
                unlink($caminho.$retornoFoto->Imagem6);
            }

            if ($retornoFoto->ImagemMapaIncorporacao != null) {
                unlink("fotos/incorporacao/".$retornoFoto->ImagemMapaIncorporacao);
            }
          
          } 


     /********************************************************************************************/
     /*                      Muda a String SQL para inserir no banco                             */
     /********************************************************************************************/
         $insereIncorporacao->set('sql',"DELETE FROM CadastraIncorporacao WHERE IdIncorporacao = '$IdIncorporacao'");
         $insereIncorporacao->executarQuery();


    /***********************************************************************************************************/
    /*   Verificar se foram acresentados mais campos de documentos e muda a STRING SQL para inserção no banco   */
    /***********************************************************************************************************/
   if(isset($_POST["DataArray"],$_POST["DescricaoArray"])){
        // Faz loop pelo array dos campos:
        $DataArray = $_POST["DataArray"];
        $DescricaoArray = $_POST["DescricaoArray"];
        $i = 0;
        $j = 0;

        set_time_limit(120);

    while($i < count($DataArray) && $j < count($DescricaoArray)){
        if (($DataArray[$i] != "") && ($DescricaoArray[$j] != "")) {

            $insereHistoricoIncorporacao->set('sql',"DELETE FROM HistoricoIncorporacao 
                                                     WHERE IdIncorporacao = '$IdIncorporacao' ");
            $insereHistoricoIncorporacao->executarQuery();                
            $i++;
            $j++;           
            }

        }
    }

	echo("<script type='text/javascript'> location.href='../../incorporacao-editar-lista.php'; alert('Dados deletados com sucesso'); </script>");
	 
}else{
        echo("<script type='text/javascript'> location.href='../../incorporacao-editar-lista.php'; alert('Dados não deletados'); </script>");
}

