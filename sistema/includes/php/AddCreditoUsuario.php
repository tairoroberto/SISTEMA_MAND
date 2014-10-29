<?php

	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere a Categoria		*/
    /********************************************************************************************/
 
    $buscarUsuario = new Conexao();
    $buscarUsuario->conectar();
    $buscarUsuario->selecionarDB();

    $buscarTaxasUsuario = new Conexao();
    $buscarTaxasUsuario->conectar();
    $buscarTaxasUsuario->selecionarDB();    


    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo FAQ-Categoria.html estão completos 			*/
    /********************************************************************************************/

   if (isset($_POST['IdUsuarioAux'],$_POST['AddCreditoUsuario'])){

       $IdUsuario = $_POST['IdUsuarioAux'];
       $AddCreditoUsuario = $_POST['AddCreditoUsuario'];
       

            /********************************************************************************************/
            /*                      Muda a String SQL para inserir no banco                             */
            /********************************************************************************************/
             $buscarUsuario->set('sql',"SELECT * FROM Usuarios WHERE IdUsuario = '$IdUsuario' ");

             $retornoUsuario = mysql_fetch_object($buscarUsuario->executarQuery());


             //calculo do credito do ususario apos fazer o calculo atualiza a tabela com o novo saldo
             
             $CreditoUsuario = str_replace("." , '' , $retornoUsuario->CreditoUsuario_final); 
             $CreditoUsuario = str_replace("," , '.' ,$CreditoUsuario); 
             
             $ValorAdd = str_replace("." , '' , $AddCreditoUsuario); 
             $ValorAdd = str_replace("," , '.' ,$ValorAdd); 

              
              $valor = $CreditoUsuario + $ValorAdd;
              $valor = number_format($valor, 2, ',', '.');




         $buscarTaxasUsuario->set('sql',"UPDATE TaxasUsuario SET checado = '' WHERE IdUsuario = '$IdUsuario' ");
         $buscarTaxasUsuario->executarQuery();


             /********************************************************************************************/
            /*                      Muda a String SQL para inserir no banco                             */
            /********************************************************************************************/
             $buscarUsuario->set('sql',"UPDATE Usuarios SET CreditoUsuario = '$valor',
                                                            CreditoUsuario_final = '$valor'        
                                             WHERE IdUsuario = '$IdUsuario' ");
             
             if ($buscarUsuario->executarQuery()) {
                //Ao acabar de inserir o usuário ele retorna para a pagina de cadstro de usuario
             echo("<script type='text/javascript'> location.href='../../usuario-cadastro?IdUsuarioAux=".$IdUsuario."'; alert('Credito adicionado'); </script>");
             }else{
                //Ao acabar de inserir o usuário ele retorna para a pagina de cadstro de usuario
             echo("<script type='text/javascript'> location.href='../../usuario-cadastro?IdUsuarioAux=".$IdUsuario."'; alert('Credito não adicionado'); </script>");
             }
        
  

}
 
