 <?php

    /********************************************************************************************/
    /*                  Inclui a classe de conexão com o banco                                  */
    /********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*          Variáveis para inserção no banco de dados, insere a Categoria       */
    /********************************************************************************************/
 
    $DeletaSituacaoTarefa = new Conexao();
    $DeletaSituacaoTarefa->conectar();
    $DeletaSituacaoTarefa->selecionarDB();

    if (isset($_POST['IdTarefa'])){

        $IdTarefa = $_POST['IdTarefa'];

            $DeletaSituacaoTarefa->set('sql',"DELETE  FROM EtapaTarefa WHERE IdTarefa = '$IdTarefa' "); 
            $DeletaSituacaoTarefa->executarQuery();

            $DeletaSituacaoTarefa->set('sql',"DELETE  FROM CadastraTarefa
                                                WHERE 
                                                IdTarefa = '$IdTarefa' ");                                                    

    /********************************************************************************************/
    /*                              Execulta a String SQL                                       */
    /********************************************************************************************/
  if ($DeletaSituacaoTarefa->executarQuery()) {
        echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Tarefa Deletada'); </script>");
     }else{
        echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Tarefa não Deletada'); </script>");
     }
}elseif (isset($_POST['IdTarefaAux'])) {
        $IdTarefa = $_POST['IdTarefaAux'];    

            $DeletaSituacaoTarefa->set('sql',"DELETE  FROM EtapaTarefa WHERE IdTarefa = '$IdTarefa' "); 
            $DeletaSituacaoTarefa->executarQuery();

            $DeletaSituacaoTarefa->set('sql',"DELETE  FROM CadastraTarefa
                                                WHERE 
                                                IdTarefa = '$IdTarefa'");  
             

             /********************************************************************************************/
            /*                              Execulta a String SQL                                       */
            /********************************************************************************************/
          if ($DeletaSituacaoTarefa->executarQuery()) {
                echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Tarefa Deletada'); </script>");
             }else{
                echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Tarefa não Deletada'); </script>");
             }
}else{
    echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Tarefa não Deletada'); </script>");
}

 
