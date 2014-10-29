<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $insereHistoricoTarefa = new Conexao();
    $insereHistoricoTarefa->conectar();
    $insereHistoricoTarefa->selecionarDB();

if (isset($_POST['ConteudoHistoricoTarefa'],
          $_POST['DataHistocico'],
          $_POST['HoraHistorico'],
          $_POST['IdEtapaTarefa'],
          $_POST['IdUsuario'])){    

      	 /********************************************************************************************/
          /*				      	Atribui os dados vindos do formulário às variáveis do php			         	*/
          /*****************************************************************************************/
          $ConteudoHistoricoTarefa = $_POST['ConteudoHistoricoTarefa']; 
          $DataHistocico  = $_POST['DataHistocico'];
          $HoraHistorico = $_POST['HoraHistorico'];
          $IdEtapaTarefa = $_POST['IdEtapaTarefa'];
          $IdUsuario = $_POST['IdUsuario'];
          
            $i = 0;
            $j = 0;
            $k = 0;
            $l = 0;
            $m = 0;
    
     if (count($ConteudoHistoricoTarefa) > 0){ 
      while($i < count($ConteudoHistoricoTarefa) && $j < count($DataHistocico) && 
          $k < count($HoraHistorico) && $l < count($IdEtapaTarefa) && $m < count($IdUsuario)){  

              if ($ConteudoHistoricoTarefa[$i] != "") {
                $insereHistoricoTarefa->set('sql',"INSERT INTO CadastraHistoricoTarefa(ConteudoHistoricoTarefa, DataHistocico, HoraHistorico,IdEtapaTarefa,IdUsuario)
              VALUES ('$ConteudoHistoricoTarefa[$i]','$DataHistocico[$j]','$HoraHistorico[$k]','$IdEtapaTarefa[$l]','$IdUsuario[$m]');");
              $insereHistoricoTarefa->executarQuery();
              
              }              
        
                $i++;
                $j++;
                $k++;
                $l++;
                $m++; 
              
          }                  
        }
         
         //vParemetros para serem enviados de volta para a pagima tarefa-detalhe.php.
        $TarefaEnvia = $_POST['TarefaEnvia'];
        $HoldingEnvia = $_POST['HoldingEnvia'];
        $RequerenteEnvia = $_POST['RequerenteEnvia'];
        $SqlEnvia = $_POST['SqlEnvia'];

   echo("<script type='text/javascript'> location.href='../../tarefa-detalhe.php?tarefaAux=".$TarefaEnvia."&HoldingAux=".$HoldingEnvia."&RequerenteAux=".$RequerenteEnvia."&SqlAux=".$SqlEnvia."';</script>");
}else{
    echo("<script type='text/javascript'> location.href='../../tarefa-detalhe.php';</script>");
}