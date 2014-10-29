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

    
    
    
    

    if (isset($_POST['IdTarefa'],
              $_POST['HoldingAux'],
              $_POST['RequerenteAux'],
              $_POST['SqlAux'])){

        $IdTarefa = $_POST['IdTarefa'];
        $HoldingAux = $_POST['HoldingAux'];
        $RequerenteAux = $_POST['RequerenteAux'];
        $SqlAux = $_POST['SqlAux'];
        $SituacaoTarefa = "Pausada";

            $AtualizaSituacaoTarefa->set('sql',"UPDATE CadastraTarefa SET                                    
                                          SituacaoTarefa = '$SituacaoTarefa'
                                          WHERE 
                                          IdTarefa = '$IdTarefa' AND
                                          IdEmpresa = '$HoldingAux' AND
                                          IdRequerente = '$RequerenteAux' AND
                                          IdImovel = '$SqlAux'");    

    /********************************************************************************************/
    /*                              Execulta a String SQL                                       */
    /********************************************************************************************/
  if ($AtualizaSituacaoTarefa->executarQuery()) {
        echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Tarefa Pausada'); </script>");
     }else{
        echo("<script type='text/javascript'> location.href='../../tarefa-visualizar.php'; alert('Tarefa não Pausada'); </script>");
     }
}

 
