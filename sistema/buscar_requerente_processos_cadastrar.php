<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página  
include('includes/php/conexao/Conexao.class.php');


  if (isset($_POST['id_holding'])) {

     $id_holding = $_POST['id_holding'];

     $buscarRequerente = new Conexao();
     $buscarRequerente->conectar();
     $buscarRequerente->selecionarDB();

     $buscarRequerente->set('sql',"SELECT CadastroRequerente.Idrequerente,CadastroRequerente.Nome
                                     FROM CadastroRequerente
                                     INNER JOIN CadastraImovel
                                     ON CadastraImovel.IdRequerente = CadastroRequerente.IdRequerente
                                     WHERE CadastraImovel.IdEmpresa = '$id_holding'");
     
     $queryBuscaSql= $buscarRequerente->executarQuery();
      while($retornoRequerente=mysql_fetch_array($queryBuscaSql)) { 
        echo "<option value=".$retornoRequerente['Idrequerente'].">".$retornoRequerente['Nome']."</option>";
      }
  }

 ?>