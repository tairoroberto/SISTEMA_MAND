 <?php

    /********************************************************************************************/
    /*                  Inclui a classe de conexão com o banco                                  */
    /********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*          Variáveis para inserção no banco de dados, insere a Categoria       */
    /********************************************************************************************/
 
    $SolicitarDocumento = new Conexao();
    $SolicitarDocumento->conectar();
    $SolicitarDocumento->selecionarDB();

    
    if (isset($_POST['ContAux'])){

        $ContAux = $_POST['ContAux'];
        $dataSolicitacao = date('d/m/Y');
       
          $SolicitarDocumento->set('sql',"UPDATE SolicitacaoDocumetosTarefa SET                                    
                                          Solicitar = '$dataSolicitacao'
                                          WHERE 
                                          IdSolicitacaoDocUmento = '$ContAux' ");    

    /********************************************************************************************/
    /*                              Execulta a String SQL                                       */
    /********************************************************************************************/
  if ($SolicitarDocumento->executarQuery()) {
        echo("<script type='text/javascript'> location.href='../../tarefa-documentos.php'; alert('Documentos Solicitados'); </script>");
     }else{
        echo("<script type='text/javascript'> location.href='../../tarefa-documentos.php'; alert('Documentos não Solicitados'); </script>");
     }
}

 
