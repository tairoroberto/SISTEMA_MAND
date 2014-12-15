 <?php

    /********************************************************************************************/
    /*                  Inclui a classe de conexão com o banco                                  */
    /********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*          Variáveis para inserção no banco de dados, insere a Categoria       */
    /********************************************************************************************/
 
    $AtualizaSituacaoTarefa = new Conexao();
    $AtualizaSituacaoTarefa->conectar();
    $AtualizaSituacaoTarefa->selecionarDB();

    
    
    
    

    if (isset($_POST['IdTarefa'])){

        $IdTarefa = $_POST['IdTarefa'];
        $SituacaoTarefa = "Arquivada";

            $AtualizaSituacaoTarefa->set('sql',"UPDATE CadastraTarefa SET                                    
                                          SituacaoTarefa = '$SituacaoTarefa'
                                          WHERE 
                                          IdTarefa = '$IdTarefa' ");    

    /********************************************************************************************/
    /*                              Execulta a String SQL                                       */
    /********************************************************************************************/
  if ($AtualizaSituacaoTarefa->executarQuery()) {
        echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Tarefa Arquivada'); </script>");
     }else{
        echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Tarefa não Arquivada'); </script>");
     }
}

 
