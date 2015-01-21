<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página  
include('includes/php/conexao/Conexao.class.php');


  if ($_POST['tipo'] == 0) {

     $id_holding = $_POST['id_holding'];
     $id_requerente = $_POST['id_requerente'];

     $buscarSqlProcesso = new Conexao();
     $buscarSqlProcesso->conectar();
     $buscarSqlProcesso->selecionarDB();                      

     $buscarSqlProcesso->set('sql',"SELECT IdImovel, NumeroContribuinte 
                                    FROM CadastraImovel
                                    WHERE IdEmpresa = '$id_holding'AND 
                                          IdRequerente = '$id_requerente' 
                                    GROUP BY IdImovel");
     
     $queryBuscaSql= $buscarSqlProcesso->executarQuery();
      while($retornoSql=mysql_fetch_array($queryBuscaSql)) { 
        echo "<option value=".$retornoSql['IdImovel'].">".$retornoSql['NumeroContribuinte']."</option>";
      }
  }else{
      $id_holding = $_POST['id_holding'];
       $id_requerente = $_POST['id_requerente'];

       $buscarSqlProcesso = new Conexao();
       $buscarSqlProcesso->conectar();
       $buscarSqlProcesso->selecionarDB();                      

       $buscarSqlProcesso->set('sql',"SELECT IdImovel, NumeroContribuinte 
                                    FROM CadastraImovel ");
       
       $queryBuscaSql= $buscarSqlProcesso->executarQuery();
        while($retornoSql=mysql_fetch_array($queryBuscaSql)) { 
          echo "<option value=".$retornoSql['IdImovel'].">".$retornoSql['NumeroContribuinte']."</option>";
        }
  }

?>