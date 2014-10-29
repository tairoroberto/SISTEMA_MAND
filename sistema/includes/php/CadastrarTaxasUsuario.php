<?php

	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere a Categoria		*/
    /********************************************************************************************/
 
    $insereTaxasUsuario = new Conexao();
    $insereTaxasUsuario->conectar();
    $insereTaxasUsuario->selecionarDB();

    $buscarUsuario = new Conexao();
    $buscarUsuario->conectar();
    $buscarUsuario->selecionarDB();


    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo FAQ-Categoria.html estão completos 			*/
    /********************************************************************************************/

   if (isset($_POST['IdUsuarioAux'],$_POST['DescricaoTaxa'],$_POST['ValorTaxa'])){

       $IdUsuario = $_POST['IdUsuarioAux'];
       $DescricaoTaxa = $_POST['DescricaoTaxa'];
       $ValorTaxa = $_POST['ValorTaxa'];
       $CreditoUsuario;
       $CreditoUsuario_final;
       $DataTaxa = date('d/m/Y');

            /********************************************************************************************/
            /*                      Muda a String SQL para inserir no banco                             */
            /********************************************************************************************/
             $buscarUsuario->set('sql',"SELECT * FROM Usuarios WHERE IdUsuario = '$IdUsuario' ");

             $retoroUsuario = mysql_fetch_object($buscarUsuario->executarQuery());


             //calculo do credito do ususario apos fazer o calculo atualiza a tabela com o novo saldo
             
             $CreditoUsuario = str_replace("." , '' , $retoroUsuario->CreditoUsuario_final); 
             $CreditoUsuario = str_replace("," , '.' ,$CreditoUsuario); 
             
             $ValorTaxaAux = str_replace("." , '' , $ValorTaxa); 
             $ValorTaxaAux = str_replace("," , '.' ,$ValorTaxaAux); 

              
              $CreditoUsuario_final = $CreditoUsuario - $ValorTaxaAux ;
              $CreditoUsuario_final = number_format($CreditoUsuario_final, 2, ',', '.');
                                                                                             


             /********************************************************************************************/
            /*                      Muda a String SQL para inserir no banco                             */
            /********************************************************************************************/
             $buscarUsuario->set('sql',"UPDATE Usuarios SET CreditoUsuario_final = '$CreditoUsuario_final'
                                             WHERE IdUsuario = '$IdUsuario' ");
             $buscarUsuario->executarQuery();

             
            /********************************************************************************************/
            /*                      Muda a String SQL para inserir no banco                             */
            /********************************************************************************************/
             $insereTaxasUsuario->set('sql',"INSERT INTO TaxasUsuario (DescricaoTaxa,ValorTaxa,DataTaxa,checado,IdUsuario) 
                                               VALUES ('$DescricaoTaxa','$ValorTaxa','$DataTaxa','cobrado','$IdUsuario') ");
      

             if ($insereTaxasUsuario->executarQuery()) {
                //Ao acabar de inserir o usuário ele retorna para a pagina de cadstro de usuario
             echo("<script type='text/javascript'> location.href='../../usuario-cadastro?IdUsuarioAux=".$IdUsuario."'; alert('Taxa salva'); </script>");
             }else{
                //Ao acabar de inserir o usuário ele retorna para a pagina de cadstro de usuario
             echo("<script type='text/javascript'> location.href='../../usuario-cadastro?IdUsuarioAux=".$IdUsuario."'; alert('Taxa não salva'); </script>");
             }
        
  

}
 
