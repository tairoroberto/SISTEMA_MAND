 <?php

    /********************************************************************************************/
    /*                  Inclui a classe de conexão com o banco                                  */
    /********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*          Variáveis para inserção no banco de dados, insere a Categoria       */
    /********************************************************************************************/
 
    $AtualizaLinks = new Conexao('localhost','root','tairo1507','Mand');
    $AtualizaLinks->conectar();
    $AtualizaLinks->selecionarDB();
    $NomeExibicaoAux;
    $UrlAux;

    if ((isset($_POST['NomeExibicao'])) || (isset($_POST['Url']))){
        $NomeExibicao = $_POST['NomeExibicao'];
        $Url = $_POST['Url'];
        $NomeExibicaoAux = $_POST['NomeExibicaoAux'];
        $UrlAux = $_POST['UrlAux'];

            $AtualizaLinks->set('sql',"DELETE FROM CadastraLinks 
                                                              WHERE 
                                                              Url = '$UrlAux' ");
         
    

    /********************************************************************************************/
    /*                              Execulta a String SQL                                       */
    /********************************************************************************************/
  if ($AtualizaLinks->executarQuery()) {
        echo("<script type='text/javascript'> location.href='../../links-cadastro.php'; alert('Dados Deletados com sucesso'); </script>");
     }else{
        echo("<script type='text/javascript'> location.href='../../links-cadastro.php'; alert('Dados não Deletados'); </script>");
     }
}

 
