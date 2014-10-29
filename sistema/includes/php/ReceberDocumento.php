 <?php

    /********************************************************************************************/
    /*                  Inclui a classe de conexão com o banco                                  */
    /********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*          Variáveis para inserção no banco de dados, insere a Categoria       */
    /********************************************************************************************/
 
    $ReceberDocumento = new Conexao();
    $ReceberDocumento->conectar();
    $ReceberDocumento->selecionarDB();

    
    if (isset($_POST['ContAux'])){

        $ContAux = $_POST['ContAux'];
        $dataSolicitacao = date('d/m/Y');
       
          $ReceberDocumento->set('sql',"UPDATE SolicitacaoDocumetosTarefa SET                                    
                                          Recebido = '$dataSolicitacao'
                                          WHERE 
                                          IdSolicitacaoDocUmento = '$ContAux' ");    

    /********************************************************************************************/
    /*                              Execulta a String SQL                                       */
    /********************************************************************************************/
  if ($ReceberDocumento->executarQuery()) {
        echo("<script type='text/javascript'> location.href='../../tarefa-documentos.php'; alert('Documentos Recebidos'); </script>");
     }else{
        echo("<script type='text/javascript'> location.href='../../tarefa-documentos.php'; alert('Documentos não Recebidos'); </script>");
     }
}

 
