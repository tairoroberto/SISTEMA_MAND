<?php 
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página  
include('includes/php/conexao/Conexao.class.php');
include("permissoes.php"); //inclui o arquivo que gera o SIDEBAR com as devidas permições
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Mand Gestão de Projetos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->

<!-- Inclui o arquivos para validação de campos-->
<script type="text/javascript" src="includes/js/ValidaCampos.js"></script>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-progressbar.js"></script>

<script type="text/javascript">
  function selecionaUsuarioSolicitacao(){
     formTarefaDetalhe.UsuarioSolicitacao.value = formTarefaDetalhe.SelectEtapaSolicitacao.value;
  }



$(document).ready(function() {
  var bar = $('.progress-bar');
  $(function(){
    $(bar).each(function(){
      bar_width = $(this).attr('aria-valuenow');
      $(this).width(bar_width + '%');
    });
  });
});

</script>

<script type="text/javascript">
 /*********************************************************************************************/
 /*                       Função para Enviar FORM Tarefa para pagina php                      */
 /*********************************************************************************************/
                            
                            
                            
 
 function enviaFormCategoria(acao,idetapa,idtarefa,IdEmpresa,IdRequerente,IdImovel){
    var status;

     if (acao == 'Editar Fase'){   
         document.formTarefaDetalhe.IdTarefaAux.value = idtarefa;
         document.formTarefaDetalhe.IdEtapaTarefaAux.value = idetapa; 

         document.formTarefaDetalhe.HoldingAux.value = IdEmpresa;  
         document.formTarefaDetalhe.RequerenteAux.value = IdRequerente;  
         document.formTarefaDetalhe.SqlAux.value = IdImovel;  

         document.formTarefaDetalhe.action = "editar-etapa-tarefa";
         document.formTarefaDetalhe.submit();      
     } else if (acao == 'Transferir'){
         document.formTarefaDetalhe.IdTarefaAux.value = idtarefa;
         document.formTarefaDetalhe.IdEtapaTarefaAux.value = idetapa; 

         document.formTarefaDetalhe.HoldingAux.value = IdEmpresa;  
         document.formTarefaDetalhe.RequerenteAux.value = IdRequerente;  
         document.formTarefaDetalhe.SqlAux.value = IdImovel;

         document.formTarefaDetalhe.action = "transferir-etapa-tarefa";
         document.formTarefaDetalhe.submit();
     }else if (acao == 'Ficha Tecnica'){
         document.formTarefaDetalhe.IdTarefaAux.value = idtarefa;
         document.formTarefaDetalhe.IdEtapaTarefaAux.value = idetapa; 
         document.formTarefaDetalhe.action = "tarefa-visualizar";
         document.formTarefaDetalhe.submit(); 
     }else if (acao == 'Processos'){
         document.formTarefaDetalhe.IdTarefaAux.value = idtarefa;
         document.formTarefaDetalhe.IdEtapaTarefaAux.value = idetapa; 
         document.formTarefaDetalhe.action = "processos-lista";
         document.formTarefaDetalhe.submit(); 
     }else if (acao == 'Finalizar'){
         status = "Finalizar";
         document.formTarefaDetalhe.IdTarefaAux.value = idtarefa;
         document.formTarefaDetalhe.IdEtapaTarefaAux.value = idetapa;  
         atualizar(document.formTarefaDetalhe.IdTarefaAux.value ,document.formTarefaDetalhe.IdEtapaTarefaAux.value,status);
         document.formTarefaDetalhe.action = "tarefa-visualizar";
         document.formTarefaDetalhe.submit(); 
     }else if (acao == 'Deletar Fase'){
         document.formTarefaDetalhe.IdTarefaAux.value = idtarefa;
         document.formTarefaDetalhe.IdEtapaTarefaAux.value = idetapa;  
         document.formTarefaDetalhe.action = "includes/php/DeletaEtapaTarefa.php";
         document.formTarefaDetalhe.submit(); 
     }else if (acao == "Trabalhando"){

      //Referencia o botão para a variável 
      var botao = document.getElementById("botaoTrabalhar"+idetapa);
      var icone = document.getElementById("iconeEtapaTarefa"+idetapa);

        // Função ajax que verifica o estado da terefa
          var http = false;
              if(navigator.appName == "Microsoft Internet Explorer") {
                http = new ActiveXObject("Microsoft.XMLHTTP");
              } else {
                http = new XMLHttpRequest();
              }

             http.abort();
             http.open("GET", "includes/php/VerificarEtapaTarefa.php?IdEtapaTarefaAux="+idetapa+"", true);
             http.onreadystatechange=function() {
               if(http.readyState == 4) {
                  retorno = http.responseText;  
                  if (retorno == "Trabalhando") {
                    //Muda os atributos do botão e do icone quando o botão é clicado
                    botao.firstChild.data = "Pausado";
                    icone.attributes["class"].value="fa fa-pause";

                    //Atualiza status da Etapa Tarefa  
                    atualizar(idtarefa, idetapa,"Pausado");

                  }else if(retorno == "Pausado") {
                    //Muda os atributos do botão e do icone quando o botão é clicado
                    botao.firstChild.data = "Trabalhando";
                    icone.attributes["class"].value="fa fa-user";

                    //Atualiza status da Etapa Tarefa  
                    atualizar(idtarefa, idetapa,"Trabalhando");

                  }else if(retorno == "Concluida") {
                    //Muda os atributos do botão e do icone quando o botão é clicado
                    botao.firstChild.data = "Etapa Concluida";
                    icone.attributes["class"].value="fa fa-check";
                  }else if(retorno == "Finalizar") {
                    //Muda os atributos do botão e do icone quando o botão é clicado
                    botao.firstChild.data = "Etapa Finalizada";
                    icone.attributes["class"].value="fa fa-check";
                  }           
                }
             }
            http.send(null);

      }      
 }

  function atualizar(IdTarefa,IdEtapa,status){
       var http = false;
          if(navigator.appName == "Microsoft Internet Explorer") {
            http = new ActiveXObject("Microsoft.XMLHTTP");
          } else {
            http = new XMLHttpRequest();
          }

         http.abort();
         http.open("GET", "includes/php/TrabalharEtapaTarefa.php?IdTarefaAux="+IdTarefa+"&IdEtapaTarefaAux="+IdEtapa+"&status="+status+"", true);
         http.onreadystatechange=function() {
           if(http.readyState == 4) {
              retorno = http.responseText;
            }
         }
        http.send(null);
 }

  
 </script>


</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="">

	 <!-- END TOP NAVIGATION MENU -->

	 <!-- BEGIN CHAT TOGGLER -->
    <?php mostarPermissoesChat(); ?>
	   <!-- END CHAT TOGGLER -->
     
      </div> 
      <!-- END TOP NAVIGATION MENU --> 
   
  </div>
  <!-- END TOP NAVIGATION BAR --> 
</div>
<!-- END HEADER -->

    <!-- BEGIN CONTAINER -->
    <!-- aqui começa o container vindo das permissoes do php -->
          <?php mostarPermissoes();?>
    <!-- END SIDEBAR MENU --> 

  </div>
  </div>
  <a href="#" class="scrollup">Subir</a>
   
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
     
      
          
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <form id="formTarefaDetalhe" name="formTarefaDetalhe" method="POST" action="includes/php/CadastraDocumentosTarefa.php">
            <div class="clearfix"></div>
            <div class="content">
              <div class="page-title"></div>
              <!-- START FORM -->

   <!-- INICIO DA LISTA DE TAREFAS -->
        
        <?php
         $tarefaAux;
         $HoldingAux;
         $RequerenteAux;
         $SqlAux; 
         $query;
         $IdOportunidade;
            //Função para conversão de datas
             function converteData($data){
                return (preg_match('/\//',$data)) ? implode('-', array_reverse(explode('/', $data))) : implode('/', array_reverse(explode('-', $data)));
               } 

        //Recebe os auxiliares para fazer a consulta no banco de DADOS
               //usa-se o metodo GET para ver se foram enviados parametros par ao formulario, se não os parametros são pegos pelométodo POST.
         if ((isset($_POST['tarefaAux'])) && 
             ($_POST['HoldingAux'] != 0) && ($_POST['RequerenteAux'] != 0) && ($_POST['SqlAux'] != 0)){

            $tarefaAux = $_POST['tarefaAux'];
            $HoldingAux = $_POST['HoldingAux'];
            $RequerenteAux = $_POST['RequerenteAux'];
            $SqlAux = $_POST['SqlAux'];
            $IdEtapaSeleciona = $_POST['IdEtapaTarefaAux'];
            $IdOportunidade = 0;

            $buscaTarefa2 = new Conexao();
            $buscaTarefa2->conectar();
            $buscaTarefa2->selecionarDB(); 
            $IdEtapaTarefa;

            $buscaTarefa2->set("sql","SELECT CadastraTarefa.*,EtapaTarefa.*, CadastroHolding.*,CadastroRequerente.*,CadastraImovel.* 
                                      FROM EtapaTarefa,CadastroHolding,CadastroRequerente,CadastraImovel
                                      INNER JOIN CadastraTarefa
                                      WHERE  CadastraTarefa.IdTarefa = '$tarefaAux' AND
                                             EtapaTarefa.IdTarefa = '$tarefaAux' AND
                                             CadastroHolding.IdEmpresa = '$HoldingAux'AND
                                             CadastroRequerente.IdRequerente = '$RequerenteAux' AND
                                             CadastraImovel.IdImovel = '$SqlAux'
                                      GROUP BY CadastraTarefa.IdTarefa
                                      LIMIT 1");
            $query = $buscaTarefa2->executarQuery();


         }elseif ((isset($_GET['tarefaAux'])) && 
                 ($_GET['HoldingAux'] != 0) && ($_GET['RequerenteAux'] != 0) && ($_GET['SqlAux'] != 0)){

            $tarefaAux = $_GET['tarefaAux'];
            $HoldingAux = $_GET['HoldingAux'];
            $RequerenteAux = $_GET['RequerenteAux'];
            $SqlAux = $_GET['SqlAux'];
            $IdOportunidade = 0;

            $buscaTarefa2 = new Conexao();
            $buscaTarefa2->conectar();
            $buscaTarefa2->selecionarDB(); 
            $IdEtapaTarefa;

            $buscaTarefa2->set("sql","SELECT CadastraTarefa.*,EtapaTarefa.*, CadastroHolding.*,CadastroRequerente.*,CadastraImovel.* 
                                      FROM EtapaTarefa,CadastroHolding,CadastroRequerente,CadastraImovel
                                      INNER JOIN CadastraTarefa
                                      WHERE  CadastraTarefa.IdTarefa = '$tarefaAux' AND
                                             EtapaTarefa.IdTarefa = '$tarefaAux' AND
                                             CadastroHolding.IdEmpresa = '$HoldingAux'AND
                                             CadastroRequerente.IdRequerente = '$RequerenteAux' AND
                                             CadastraImovel.IdImovel = '$SqlAux'
                                      GROUP BY CadastraTarefa.IdTarefa
                                      LIMIT 1");
            $query= $buscaTarefa2->executarQuery();


         }elseif ((isset($_POST['tarefaAux'],$_POST['HoldingAux'],$_POST['RequerenteAux'],$_POST['SqlAux'])) &&
                    ($_POST['HoldingAux'] == 0) && ($_POST['RequerenteAux'] == 0) && ($_POST['SqlAux'] == 0)){
          //se Holding,sql, e requerente forem = 0
          //entao irá pegar a tarefa das oportunidades

            $tarefaAux = $_POST['tarefaAux'];
            $HoldingAux = $_POST['HoldingAux'];
            $RequerenteAux = $_POST['RequerenteAux'];
            $SqlAux = $_POST['SqlAux'];
            $IdEtapaSeleciona = $_POST['IdEtapaTarefaAux'];
            $IdOportunidade = $_POST['IdOportunidadeAux'];

            $buscaTarefa2 = new Conexao();
            $buscaTarefa2->conectar();
            $buscaTarefa2->selecionarDB(); 
            $IdEtapaTarefa;

            $buscaTarefa2->set('sql',"SELECT CadastraTarefa.*, Oportunidade.* 
                                                 FROM Oportunidade 
                                                 INNER JOIN `CadastraTarefa`
                                                 On  Oportunidade.IdOportunidade = CadastraTarefa.IdOportunidade AND
                                                        SituacaoTarefa != 'Finalizada' AND
                                                        SituacaoTarefa != 'Arquivada' 
                                                  GROUP BY CadastraTarefa.IdTarefa
                                                  LIMIT 1 ");
            $query= $buscaTarefa2->executarQuery();

         }elseif ((isset($_GET['tarefaAux'],$_GET['HoldingAux'],$_GET['RequerenteAux'],$_GET['SqlAux'])) &&
                    ($_GET['HoldingAux'] == 0) && ($_GET['RequerenteAux'] == 0) && ($_GET['SqlAux'] == 0)){
          //se Holding,sql, e requerente forem = 0
          //entao irá pegar a tarefa das oportunidades

            $tarefaAux = $_GET['tarefaAux'];
            $HoldingAux = $_GET['HoldingAux'];
            $RequerenteAux = $_GET['RequerenteAux'];
            $SqlAux = $_GET['SqlAux'];
            $IdOportunidade = $_GET['IdOportunidadeAux'];
            //$IdEtapaSeleciona = $_GET['IdEtapaTarefaAux'];

            $buscaTarefa2 = new Conexao();
            $buscaTarefa2->conectar();
            $buscaTarefa2->selecionarDB(); 
            $IdEtapaTarefa;

            $buscaTarefa2->set('sql',"SELECT CadastraTarefa.*, Oportunidade.* 
                                                 FROM Oportunidade 
                                                 INNER JOIN `CadastraTarefa`
                                                 On  Oportunidade.IdOportunidade = CadastraTarefa.IdOportunidade AND
                                                        SituacaoTarefa != 'Finalizada' AND
                                                        SituacaoTarefa != 'Arquivada' 
                                                  GROUP BY CadastraTarefa.IdTarefa
                                                  LIMIT 1 ");
            $query= $buscaTarefa2->executarQuery();

         }   
         else{
   /****************************************************************************************************************************/
  /*     FAz uma busca no banco somente para preencher pagina caso não tenha sido selecionada uma empresa na pagna de listagem */
  /****************************************************************************************************************************/
 
          $buscaTarefa = new Conexao();
          $buscaTarefa->conectar();
          $buscaTarefa->selecionarDB(); 
          $buscaTarefa->set("sql","SELECT * FROM CadastraTarefa ORDER BY IdTarefa LIMIT 1 ");

          $retornoTarefa = mysql_fetch_object($buscaTarefa->executarQuery());
          $tarefaAux = $retornoTarefa->IdTarefa;  
          $HoldingAux = $retornoTarefa->IdEmpresa;  
          $RequerenteAux = $retornoTarefa->IdRequerente;  
          $SqlAux = $retornoTarefa->IdImovel;        
       }
 




    /*********************************************************************************************/
   /*                   Executa o query para consulta na base de dados                          */
  /*********************************************************************************************/ 

               while($retornoTarefa2=mysql_fetch_object($query)) { 
        ?> 
                 
      <div class="row">
        <div class="col-md-12">
        <div class="tabbable tabs-left">
          <ul class="nav nav-tabs" id="tab-01">
            <li style=" padding:15px;"><?php echo $retornoTarefa2->NomeProjeto ?></li>

             <?php 
                
                $buscaEtapaTarefa = new Conexao();
                $buscaEtapaTarefa->conectar();
                $buscaEtapaTarefa->selecionarDB();

                $buscaUsuario = new Conexao();
                $buscaUsuario->conectar();
                $buscaUsuario->selecionarDB();

                $contEtapa = 0;                
                $IdUsuario = $_SESSION ['usuarioID'];
                $UsuarioTipo = $_SESSION ['usuarioTipo'];


                //Muda a query para buscar as etapas da tarefa
                //Se for o Admin irá ver todas as etapas
                //senão verá somentes as etapas a que o usuario for responsável 
                if ($UsuarioTipo == "Administrador") {

                  $buscaEtapaTarefa->set("sql","SELECT * FROM EtapaTarefa
                             INNER JOIN CadastraTarefa
                             WHERE  EtapaTarefa.IdTarefa = '$tarefaAux'
                             GROUP BY IdEtapaTarefa");
                }else{

                    $buscaEtapaTarefa->set("sql","SELECT * FROM EtapaTarefa
                             INNER JOIN CadastraTarefa
                             WHERE  EtapaTarefa.IdTarefa = '$tarefaAux' AND 
                                    EtapaTarefa.IdUsuario = '$IdUsuario'
                             GROUP BY IdEtapaTarefa");
                }

                

                        $query2= $buscaEtapaTarefa->executarQuery();
                                   while($retornoEtapaTarefa=mysql_fetch_object($query2)) { 
                            ?> 
            <li class="<?php if ($IdEtapaSeleciona == $retornoEtapaTarefa->IdEtapaTarefa) {
              echo "active";
                 }?>"><a href="#tab1<?php echo $retornoEtapaTarefa->IdEtapaTarefa ?>"> 
            <i class="<?php 
            //verificação par ver qual icone usar
            if ($retornoEtapaTarefa->SituacaoEtapaTarefa == "") {
              echo 'fa fa-clock-o';
            }elseif ($retornoEtapaTarefa->SituacaoEtapaTarefa == "Trabalhando") {
              echo 'fa fa-user';
            }elseif ($retornoEtapaTarefa->SituacaoEtapaTarefa == "Pausado") {
              echo 'fa fa-pause';
            }elseif ($retornoEtapaTarefa->SituacaoEtapaTarefa == "Finalizar") {
              echo 'fa fa-check';
            }elseif ($retornoEtapaTarefa->SituacaoEtapaTarefa == "Atrasada") {
              echo 'fa fa-warning';
            } ?>" id="iconeEtapaTarefa<?php echo $retornoEtapaTarefa->IdEtapaTarefa; ?>"></i> 
            <?php echo $retornoEtapaTarefa->TituloEtapa ?></a></li>
            <?php $contEtapa++;}?>


            <!--REfericia a div dos documentos-->
            <li><a href="#tab1e"><i class="fa fa-envelope"> </i> Documentos</a></li>
             </ul>  



      <div class="tab-content">

        <?php 
              //Contador para deixar a tabela selecionada na posição 0;
              $contTabela = 0;
              $query2= $buscaEtapaTarefa->executarQuery();
                   while($retornoEtapaTarefa2=mysql_fetch_object($query2)) { 

                   $buscaUsuario->set("sql","SELECT * FROM Usuarios
                             WHERE  IdUsuario = '$retornoEtapaTarefa2->IdUsuario' "); 

                    $retornoUsuario = mysql_fetch_object($buscaUsuario->executarQuery());?>

            <div class="tab-pane <?php if ($IdEtapaSeleciona == $retornoEtapaTarefa2->IdEtapaTarefa) {
              echo "active";
                    }?>" id="tab1<?php echo $retornoEtapaTarefa2->IdEtapaTarefa ?>">
              <div class="row">
                  <div class="col-md-8">
                    <h3><span class="semi-bold"><?php echo $retornoEtapaTarefa2->TituloEtapa ?></span></h3>
                    <h4><span class="semi-bold">Responsável: <?php echo $retornoUsuario->NomeExibicao ?></span></h4> 
                    <br>
                  </div>
                   <!--INICIO DA AÇÂO-->
                       <div class=" col-md-4 btn-group"> <a class="btn btn-white dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"> Ações<span class="caret"></span> </a>
                          <ul class="dropdown-menu">
                            <li onclick="enviaFormCategoria('Editar Fase',<?php echo $retornoEtapaTarefa2->IdEtapaTarefa;?>,<?php echo $retornoEtapaTarefa2->IdTarefa ?>,<?php echo $retornoTarefa2->IdEmpresa; ?>,<?php echo $retornoTarefa2->IdRequerente; ?>,<?php echo $retornoTarefa2->IdImovel; ?>);"><a>Editar Fase</a></li> 
                            <li onclick="enviaFormCategoria('Transferir',<?php echo $retornoEtapaTarefa2->IdEtapaTarefa;?>,<?php echo $retornoEtapaTarefa2->IdTarefa ?>,<?php echo $retornoTarefa2->IdEmpresa; ?>,<?php echo $retornoTarefa2->IdRequerente; ?>,<?php echo $retornoTarefa2->IdImovel; ?>);"><a>Transferir</a></li> 
                            <li onclick="enviaFormCategoria('Ficha Tecnica',<?php echo $retornoEtapaTarefa2->IdEtapaTarefa;?>,<?php echo $retornoEtapaTarefa2->IdTarefa ?>);"><a>Ficha Tecnica</a></li> 
                            <li onclick="enviaFormCategoria('Processos',<?php echo $retornoEtapaTarefa2->IdEtapaTarefa;?>,<?php echo $retornoEtapaTarefa2->IdTarefa ?>);"><a>Processos</a></li> 
                            <li onclick="enviaFormCategoria('Finalizar',<?php echo $retornoEtapaTarefa2->IdEtapaTarefa;?>,<?php echo $retornoEtapaTarefa2->IdTarefa ?>);"><a>Finalizar</a></li> 
                            <li onclick="enviaFormCategoria('Deletar Fase',<?php echo $retornoEtapaTarefa2->IdEtapaTarefa;?>,<?php echo $retornoEtapaTarefa2->IdTarefa ?>);"><a>Deletar Fase</a></li>                            
                          </ul>
                      </div>
                          <!--FIM DA AÇÂO-->                           

                  <div class="col-md-12">                   
                    <p class="light"><?php echo $retornoEtapaTarefa2->DescricaoEtapa ?></p>
                    <br>
                  </div>

                  <div class="col-md-3">                                <!--Data inicio vem de CadastraTarefa-->
                       <p class="light"><strong>Data Inicio:</strong> <?php echo $retornoTarefa2->DataInicio ?></p>

                                         <!--Data prevista para entrega vem de CadastraTarefa-->
                       <p class="light"><strong>Data Prevista:</strong> <?php echo $retornoTarefa2->DataEntrega ?></p>
                  </div>
                  <div class="col-md-3">      <!--Data para entrega vem de EtapaTarefa-->
                      
                     <!--Função para fazer a subtração da data retornada -->
                        <?php
                            $result1 = converteData($retornoEtapaTarefa2->DataEntregaEtapa);
                            $result2 = converteData($retornoTarefa2->DataInicio);    
                            $result3 = converteData($retornoTarefa2->DataEntrega);                      

                            $DataEntregaEtapa = strtotime("$result1");
                            $DataInicio = strtotime("$result2");
                            $DataEntrega = strtotime("$result3");
                            $dataHoje =  strtotime(date('Y/m/d'));
 
                            $duracao = $DataEntrega - $DataInicio;
                            $diasAtraso = $DataEntrega - $DataEntregaEtapa;   
                            $diasCorridos = $DataEntregaEtapa - $dataHoje;
                            $dias = $dataHoje - $DataInicio;

                            $segundos = 86400;
                            $porcetagem = 0;

                            if((($diasCorridos / $segundos) < 0) && 
                                ($retornoEtapaTarefa2->SituacaoEtapaTarefa != 'Finalizar')) {
                                $porcetagem = 100;
                              }else{
                                $porcetagem = $dias * 100 / $duracao;
                              }

                              $porcetagem = number_format($porcetagem, 0, ',', '.');

                          ?>

                       <p class="light"><strong>Duração Prevista:</strong> <?php echo $duracao / $segundos; ?> dias</p>
                  </div>
                  <div class="col-md-4">          <!--Duração é a subtração de DataEntregaEtapa meno DataInicio-->
                        <p class="light"><strong>Data para entregar etapa:</strong> <?php echo $retornoEtapaTarefa2->DataEntregaEtapa ?> </p>                 
                  </div>                
                    
                    <!--Botão de trabalhar ao clicar altera o status de etapa para "Trabalhando ou Pausado"-->
                     <div class="col-md-12"><br>
                          <button type="button" id="botaoTrabalhar<?php echo $retornoEtapaTarefa2->IdEtapaTarefa;?>" name="botaoTrabalhar<?php echo $retornoEtapaTarefa2->IdEtapaTarefa;?>"
                              <?php if ($retornoEtapaTarefa2->SituacaoEtapaTarefa=="Finalizar") {
                                  echo "disabled='true'";
                                }?> 
                              class="btn btn-primary btn-cons"
                              onclick="enviaFormCategoria('Trabalhando',<?php echo $retornoEtapaTarefa2->IdEtapaTarefa;?>,<?php echo $retornoEtapaTarefa2->IdTarefa ?>);">
                              <?php if ($retornoEtapaTarefa2->SituacaoEtapaTarefa=="Trabalhando") {
                                          echo "Trabalhando";
                                        }elseif($retornoEtapaTarefa2->SituacaoEtapaTarefa=="Pausado"){
                                          echo "Pausado";
                                        }elseif($retornoEtapaTarefa2->SituacaoEtapaTarefa=="Finalizar"){
                                          echo "Etapa Finalizada";
                                        }else{
                                          echo "Trabalhando";
                                        } ?></button>     
                      </div>
                        
                   <div class="col-md-12"><br>
                      <div class="progress progress-striped active progress-large">
                      <?php //Verificação da data 

                              if ((($diasCorridos / $segundos) < 0) && ($retornoEtapaTarefa2->SituacaoEtapaTarefa != 'Finalizar')) {
                                echo "<div aria-valuemin='0' aria-valuenow='".$porcetagem."' class='progress-bar progress-bar-danger animate-progress-bar'>ETAPA COM ATRASO DE: ".number_format($diasCorridos / $segundos, 0, ',', '.')." DIAS</div>";
                              }elseif ((($diasCorridos / $segundos) < 0) && ($retornoEtapaTarefa2->SituacaoEtapaTarefa != 'Finalizar')) {
                                echo "<div aria-valuemin='0' aria-valuenow='".$porcetagem."' class='progress-bar progress-bar-caution animate-progress-bar'>ETAPA FINALIZADA </div>";
                              }elseif ((($diasCorridos / $segundos) > 0) && ($retornoEtapaTarefa2->SituacaoEtapaTarefa != 'Finalizar')) {
                                echo "<div aria-valuemin='0' aria-valuenow='".$porcetagem."'  class='progress-bar'>ETAPA COM ".$dias / $segundos." DIAS DE TRABAHO</div>";
                              }elseif ((($diasCorridos / $segundos) > 0) && ($retornoEtapaTarefa2->SituacaoEtapaTarefa == 'Finalizar')) {
                                echo "<div aria-valuemin='0' aria-valuenow='".$porcetagem."'  class='progress-bar progress-bar-caution animate-progress-bar'>ETAPA FINALIZADA </div>";
                              }elseif ((($diasCorridos / $segundos) == 0) && ($retornoEtapaTarefa2->SituacaoEtapaTarefa != 'Finalizar')){
                                echo "<div aria-valuemin='0' aria-valuenow='".$porcetagem."'  class='progress-bar progress-bar-caution animate-progress-bar'>ETAPA EM ANDAMENTO</div>";
                              }elseif ((($diasCorridos / $segundos) == 0) && ($retornoEtapaTarefa2->SituacaoEtapaTarefa == 'Finalizar')){
                                echo "<div aria-valuemin='0' aria-valuenow='100'  class='progress-bar animate-progress-bar'>ETAPA FINALIZADA </div>";
                              }else{
                                echo "<div aria-valuemin='0' aria-valuenow='100'  class='progress-bar animate-progress-bar'>ETAPA FINALIZADA </div>";
                              }

                         ?>
                                                
                      </div>                    
                   </div>         
              </div>
              
                <h4><br>Histórico</h4>
                <?php 
                    $buscaHistoricoTarefa = new Conexao();
                    $buscaHistoricoTarefa->conectar();
                    $buscaHistoricoTarefa->selecionarDB();
                    $buscaHistoricoTarefa->set("sql","SELECT * FROM CadastraHistoricoTarefa
                                                      WHERE  IdEtapaTarefa = '$retornoEtapaTarefa2->IdEtapaTarefa'
                                                      GROUP BY IdHistoricoTarefa"); 
                    $queryHistorico= $buscaHistoricoTarefa->executarQuery();
                   while($retornoHistoricoTarefa=mysql_fetch_object($queryHistorico)) { ?>

                         <div class="well well-small" >
                            <?php echo $retornoHistoricoTarefa->ConteudoHistoricoTarefa;?>               
                         </div>
                  
                   <?php } ?>

                 <!--Form  para cadastrar o Histórico da tarefa-->
                 <div class="well well-small" >                                  
                     
                     <input type="hidden" name="IdEtapaTarefa[]" id="IdEtapaTarefa" value="<?php echo $retornoEtapaTarefa2->IdEtapaTarefa; ?>" >
                     <input type="hidden" name="IdUsuario[]" id="IdUsuario" value="<?php echo $retornoEtapaTarefa2->IdUsuario; ?>" >
                     <br>   
                 </div> 

            </div>

      <?php $contTabela++; } ?>

      <!--Se o Usuario for o Adiministrador ele pode solicitar documentos-->

        <?php  if ($UsuarioTipo == "Administrador") { ?>

                      <div class="tab-pane " id="tab1e">
               <div class="row">
                 <div class="col-md-12">
                    <h3><span class="semi-bold">Solicitar</span></h3>
                    
                    <div class="col-md-3" >

                           <?php if ($retornoTarefa2->IdImovel == 0) { ?>
                                    <input type="text" id="HoldingSolicitacao" name="HoldingSolicitacao" value="<?php echo "$retornoTarefa2->RazaoSocial"; ?>" class="form-control" readonly="true">
                              <?php }else{ ?>
                                 <input type="text" id="HoldingSolicitacao" name="HoldingSolicitacao" value="<?php echo "$retornoTarefa2->RazaoSocial"; ?>" class="form-control" readonly="true">
                           <?php } ?>     

                    </div>
                    
                     <div class="col-md-3" >

                           <?php if ($retornoTarefa2->IdImovel == 0) { ?>
                                    <input type="text" id="HoldingSolicitacao" name="HoldingSolicitacao" value="<?php echo "$retornoTarefa2->NomeContato"; ?>" class="form-control" readonly="true">
                              <?php }else{ ?>
                                 <input type="text" id="RequerenteSolicitacao" name="RequerenteSolicitacao" placeholder="<?php echo "$retornoTarefa2->Nome"; ?>" value="<?php echo "$retornoTarefa2->Nome"; ?>" class="form-control" readonly="true">
                           <?php } ?>  
                        
                     </div>
                    
                     <div class="col-md-3" >

                            <?php if ($retornoTarefa2->IdImovel == 0) { ?>
                                    <input type="text" id="HoldingSolicitacao" name="HoldingSolicitacao" value="<?php echo "$retornoTarefa2->CnpjCpf"; ?>" class="form-control" readonly="true">
                              <?php }else{ ?>
                                 <input type="text" id="Sqlsolicitacao" name="Sqlsolicitacao" placeholder="<?php echo "$retornoTarefa2->NumeroContribuinte"; ?>" value="<?php echo "$retornoTarefa2->NumeroContribuinte"; ?>" class="form-control" readonly="true">
                           <?php } ?>  

                         
                     </div>
                              
                     <div class="col-md-3" >
                         <input type="text" id="UsuarioSolicitacao" name="UsuarioSolicitacao" placeholder="" class="form-control" readonly="true">
                     </div>
                              
                     <div class="col-md-12" >
                     <br>
                          <input type="text" placeholder="Documentos separados por virgula" class="form-control"  id="DocumentosEtapaSolicitacao" name="DocumentosEtapaSolicitacao">
                     </div>
                    <br>
                    <div class="col-md-4">
                    <br>      

              <?php 
                $buscaEtapa = new Conexao();
                $buscaEtapa->conectar();
                $buscaEtapa->selecionarDB(); 

                $buscaEtapa->set("sql","SELECT EtapaTarefa.*,CadastraTarefa.*,Usuarios.* FROM CadastraTarefa, Usuarios
                                        INNER JOIN EtapaTarefa 
                                        WHERE `EtapaTarefa`.`IdTarefa` = '$tarefaAux' AND 
                                               EtapaTarefa.IdUsuario = Usuarios.IdUsuario 
                                       GROUP BY IdEtapaTarefa");?>

                                                                           
                          <select name="SelectEtapaSolicitacao" id="SelectEtapaSolicitacao" class="select2 form-control" onchange="selecionaUsuarioSolicitacao();"  >
                          <option value="Selecione uma Tarefa">Tarefa Parada</option>
                            <?php
                              $query2= $buscaEtapa->executarQuery();
                                   while($retornoEtapa=mysql_fetch_object($query2)) {?>                            
                                     <option value="<?php echo "$retornoEtapa->NomeExibicao"; ?>"><?php echo "$retornoEtapa->TituloEtapa"; ?></option>                                     
                           <?php }?>
                          </select>                          
                        </div>

                            <div class="col-md-4">
                             <br>
                              <input type="text" name="DataSolicitacao" id="DataSolicitacao" readonly="true" value="<?php echo date('d/m/Y'); ?>" >
                            </div>

                  
                            
                    <br>
                    <div class="col-md-2"><br>                    
                           <button type="button" class="btn btn-primary btn-cons" 
                           onclick="validaSolicitacaoTarefa(); document.forms[0].submit();">Solicitar</button>     
                      </div>
                  </div>                
              </div>      
          </div>


        <?php } ?>

              <!--Auxiliares para envio de dados para for PHP-->
                         <input type="hidden" name="HoldingAux" id="HoldingAux" value="<?php echo $retornoTarefa2->IdEmpresa ?>" >
                          <input type="hidden" name="RequerenteAux" id="RequerenteAux" value="<?php echo $retornoTarefa2->IdRequerente ?>" >
                           <input type="hidden" name="SqlAux" id="SqlAux" value="<?php echo $retornoTarefa2->IdImovel ?>" >
                            <input type="hidden" name="TarefaAux" id="TarefaAux" value="<?php echo $retornoTarefa2->IdTarefa ?>" >
                            <input type="hidden" name="IdOportunidadeAux" id="IdOportunidadeAux" value="<?php echo $IdOportunidade ?>">

                            <!--Auxiliares para retornar para essa página quendo retornar dp formulario php -->
                            <input type="hidden" name="TarefaEnvia" id="TarefaEnvia" value="<?php echo $tarefaAux ?>" > 
                            <input type="hidden" name="HoldingEnvia" id="HoldingEnvia" value="<?php echo $HoldingAux ?>" >
                            <input type="hidden" name="RequerenteEnvia" id="RequerenteEnvia" value="<?php echo $RequerenteAux ?>" >
                            <input type="hidden" name="SqlEnvia" id="SqlEnvia" value="<?php echo $SqlAux?>" >  

                            <!--Auxiliares para retornar para essa página quendo retornar dp formulario php -->
                             <input type="hidden" name="IdTarefaAux" id="IdTarefaAux" >  
                              <input type="hidden" name="IdEtapaTarefaAux" id="IdEtapaTarefaAux" >  
               






            </div>
          </div>
         <br>
      </div>
    </div>
 <?php  }?>

</form>

  </div>
  </div>
  <a href="#" class="scrollup">Subir</a>
   
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  </div>
 </div>
<!-- END CONTAINER --> 
<?php formBuscaSql(); ?>
<!-- END CONTAINER -->

<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<!-- END PAGE LEVEL PLUGINS -->
<!-- PAGE JS -->
<script src="assets/js/tabs_accordian.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
</body>
</html>