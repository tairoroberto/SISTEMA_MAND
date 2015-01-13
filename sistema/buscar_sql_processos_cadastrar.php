<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página  
include('includes/php/conexao/Conexao.class.php');


  if (isset($_POST['id_holding'],$_POST['id_requerente'])) {

     $id_holding = $_POST['id_holding'];
     $id_requerente = $_POST['id_requerente'];

     $buscarSqlProcesso = new Conexao();
     $buscarSqlProcesso->conectar();
     $buscarSqlProcesso->selecionarDB();                      

     $buscarSqlProcesso->set('sql',"SELECT * FROM CadastraImovel
                                           WHERE IdEmpresa = '$id_holding'AND 
                                                 IdRequerente = '$id_requerente' 
                                           GROUP BY IdImovel");
     
     $queryBuscaSql= $buscarSqlProcesso->executarQuery();
      while($retornoSql=mysql_fetch_array($queryBuscaSql)) { 
        echo "<option value=".$retornoSql['IdImovel'].">".$retornoSql['NumeroContribuinte']."</option>";
      }
  }

?>