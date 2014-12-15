<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página  
include('includes/php/conexao/Conexao.class.php');
include("permissoes.php"); //inclui o arquivo que gera o SIDEBAR com as devidas permições


  if (isset($_GET['id_holding'],$_GET['id_requerente'])) {
     $id_holding = $_GET['id_holding'];
     $id_requerente = $_GET['id_requerente'];

     $buscarSqlProcesso = new Conexao();
     $buscarSqlProcesso->conectar();
     $buscarSqlProcesso->selecionarDB();                      

     $buscarSqlProcesso->set('sql',"SELECT `IdImovel`,`NumeroContribuinte` 
                                           FROM `CadastraImovel` 
                                           WHERE IdEmpresa = '$id_holding'AND 
                                                 IdRequerente = '$id_requerente' ");
     $buscarSqlProcesso->executarQuery(); 
     $queryBuscaSql= $buscarSqlProcesso->executarQuery();
      while($retornoSql=mysql_fetch_array($queryBuscaSql)) { 
        echo "<option value=".$retornoSql['IdImovel'].">".$retornoSql['NumeroContribuinte']."</option>";
      }
 

  }

 ?>