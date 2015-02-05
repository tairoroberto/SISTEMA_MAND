<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');

    $deletaAlerta = new Conexao();
    $deletaAlerta->conectar();
    $deletaAlerta->selecionarDB();


if (isset($_POST['idusuario'],
          $_POST['msg'])) {      

      	 /********************************************************************************************/
          /*				      	Atribui os dados vindos do formulário às variáveis do php			         	*/
          /*****************************************************************************************/
          $IdUsuario = $_POST['idusuario']; 
          $msg  = $_POST['msg'];
         
          $deletaAlerta->set('sql',"DELETE FROM Alerta 
                                             WHERE IdUsuario = '$IdUsuario' AND 
                                            	   Mensagem = '$msg' ");

        if ($deletaAlerta->executarQuery()) {
    	 	echo "Deletado";
      	 }else{
      	 	echo "Não deletado";
      	 }


}else{
  echo "Nada enviado";
}