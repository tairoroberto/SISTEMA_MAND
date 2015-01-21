<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página  
include('includes/php/conexao/Conexao.class.php');


  if ($_POST['tipo'] == 0) {

     $id_holding = $_POST['id_holding'];

     $buscarRequerente = new Conexao();
     $buscarRequerente->conectar();
     $buscarRequerente->selecionarDB();

     $buscarRequerente->set('sql',"SELECT CadastroRequerente.IdRequerente,CadastroRequerente.Nome
                                     FROM CadastroRequerente
                                     INNER JOIN CadastraImovel
                                     ON CadastraImovel.IdRequerente = CadastroRequerente.IdRequerente
                                     WHERE CadastraImovel.IdEmpresa = '$id_holding'");
     
     $queryBuscaSql= $buscarRequerente->executarQuery();
     if (!is_null($queryBuscaSql)) {
         while($retornoRequerente=mysql_fetch_object($queryBuscaSql)) { 
          echo "<option value='$retornoRequerente->IdRequerente'>".$retornoRequerente->Nome."</option>";
        }
     }else{
      echo "";
     }
      
  }else{
    $id_holding = $_POST['id_holding'];

     $buscarRequerente = new Conexao();
     $buscarRequerente->conectar();
     $buscarRequerente->selecionarDB();

     $buscarRequerente->set('sql',"SELECT * FROM CadastroRequerente ");
     
     $queryBuscaSql= $buscarRequerente->executarQuery();
  
     while($retornoRequerente=mysql_fetch_object($queryBuscaSql)) { 
        echo "<option value='$retornoRequerente->IdRequerente'>".$retornoRequerente->Nome."</option>";
      }

  }

?>