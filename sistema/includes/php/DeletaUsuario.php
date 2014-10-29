<?php

	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere a Categoria		*/
    /********************************************************************************************/
 
    $insereUsuario = new Conexao();
    $insereUsuario->conectar();
    $insereUsuario->selecionarDB();

    $buscarUsuario = new Conexao();
    $buscarUsuario->conectar();
    $buscarUsuario->selecionarDB();

    $buscarImagem = new Conexao();
    $buscarImagem->conectar();
    $buscarImagem->selecionarDB();

    $Imagem1;
    $NomeImagem1 = null;
    $CaminhoImagem1;

    $error =  array();


    $Holding;
    $Requerente;
    $Imovel;
    $Oportunidade;
    $Orcamento;
    $Faq;
    $LinksUteis;
    $Processos;
    $Servicos;
    $Tarefas;
    $Incorporacao;    
    $Calendario;


    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo FAQ-Categoria.html estão completos 			*/
    /********************************************************************************************/

   if (isset($_POST['IdUsuarioAux'])){

    if ($_POST['TipoUsuario'] == "Cliente") {

            $IdUsuario = $_POST['IdUsuarioAux'];

        /********************************************************************************************/
        /*                      Muda a String SQL para inserir no banco                             */
        /********************************************************************************************/
         $insereUsuario->set('sql',"DELETE FROM  Usuarios WHERE IdUsuario = $IdUsuario ");
         $insereUsuario->executarQuery();

         $insereUsuario->set('sql',"DELETE FROM  TaxasUsuario WHERE IdUsuario = $IdUsuario ");
         $insereUsuario->executarQuery();

         //Ao acabar de inserir o usuário ele retorna para a pagina de cadstro de usuario
         echo("<script type='text/javascript'> location.href='../../usuario-lista.php'; alert('Cliente Deletado'); </script>");

        } elseif (isset($_POST['IdUsuarioAux'])){
                 
                        $IdUsuario = $_POST['IdUsuarioAux'];


/***********************************************************************************************/
/*                 Deleta a imagem da pasta para depois poder  deletar do banco                */
/***********************************************************************************************/
     $Caminho = "fotos/Funcionario/";
     $buscarImagem->set('sql',"SELECT Foto FROM `Usuarios`
                                           WHERE IdUsuario = $IdUsuario ");
    
         $retornoImagem = mysql_fetch_object($buscarImagem->executarQuery());
                if ($retornoImagem->Foto != null) {
                    unlink($Caminho.$retornoImagem->Foto);
                } 
              



          /********************************************************************************************/
         /*                      Muda a String SQL para inserir no banco                             */
        /********************************************************************************************/
         $insereUsuario->set('sql',"DELETE FROM Usuarios WHERE IdUsuario = $IdUsuario ");
         $insereUsuario->executarQuery();         
    
         $insereUsuario->executarQuery();
        //Ao acabar de inserir o usuário ele retorna para a pagina de cadstro de usuario
         echo("<script type='text/javascript'> location.href='../../usuario-lista.php'; alert('Deletado com sucesso'); </script>");
           
}else{
    //Ao acabar de inserir o usuário ele retorna para a pagina de cadstro de usuario
         echo("<script type='text/javascript'> location.href='../../usuario-lista.php'; alert('não Deletado'); </script>");
}
}
 
