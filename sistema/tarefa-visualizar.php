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


<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="assets/plugins/bootstrap-progressbar.js"></script>

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

<script type="text/javascript">

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

            <div class="clearfix"></div>
            <div class="content">
              <div class="page-title"></div>
              <!-- START FORM -->
               <div class="row">
                  <div class="col-md-12">
                    
                   <!--Sistema jogar automaticamente as tarefas para ele com base no tempo--> 
                    </div>
                </div>



                 <?php  $i;   $j; ?>




               <?php 

                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/
                     
                        $buscarTarefa = new Conexao();
                        $buscarTarefa->conectar();
                        $buscarTarefa->selecionarDB(); 
                        $i = 0; 

                        $IdUsuario = $_SESSION ['usuarioID'];
                        $UsuarioTipo = $_SESSION ['usuarioTipo'];                   

                       $buscarTarefa->set('sql',"SELECT CadastraTarefa.*, RazaoSocial,Nome, CadastraImovel.* 
                                                 FROM CadastroHolding, CadastroRequerente, CadastraImovel 
                                                 INNER JOIN `CadastraTarefa`
                                                 WHERE  CadastroHolding.IdEmpresa = CadastraTarefa.IdEmpresa AND
                                                        CadastroRequerente.IdRequerente = CadastraTarefa.IdRequerente AND
                                                        CadastraImovel.IdImovel = CadastraTarefa.IdImovel AND
                                                        SituacaoTarefa != 'Finalizada' AND
                                                        SituacaoTarefa != 'Arquivada' 
                                                  GROUP BY CadastraTarefa.IdTarefa");
                       
                        $query = $buscarTarefa->executarQuery();
                       while($retornoTarefa=mysql_fetch_object($query)) { ?>
                        
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border"></div>
                    <div class="grid-body no-border">
                    
                  
                    <form class="form-no-horizontal-spacing" id="formTarefaVisualizar<?php echo "$i"; ?>" name="formTarefaVisualizar<?php echo "$i"; ?>" method="POST" action="tarefa-detalhe">
                      
                      <div class="row column-seperation">
                        <div class="col-md-6">

                        <div class="row form-row">
                            <div class="col-md-9">
                             <h1> <?php echo "# $retornoTarefa->IdTarefa - $retornoTarefa->NomeProjeto"; ?></h1>
                            </div>
                               <div class="col-md-3">
                                 <div class="btn-group"> <a class="btn btn-white dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"> Ações<span class="caret"></span></a>
                                  <ul class="dropdown-menu">

                                  <?php if ($UsuarioTipo == "Administrador") { ?>

                                    <li onclick="document.forms[<?php echo $i; ?>].submit();"><a href="#">Visualizar</a></li>
                                    <li><a onclick="enviaFormCategoria('Editar',<?php echo $i; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Editar</a></li>
                                    <li><a onclick="enviaFormCategoria('Add. Fase',<?php echo $i; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Add. Fase</a></li>
                                    <li><a onclick="enviaFormCategoria('Ficha Tecnica',<?php echo $i; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Ficha Tecnica</a></li>
                                    <li><a onclick="enviaFormCategoria('Processos',<?php echo $i; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Processos</a></li>
                                    <li class="divider"></li>
                                     <li><a onclick="enviaFormCategoria('Finalizar',<?php echo $i; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Finalizar</a></li>
                                    <li><a  onclick="enviaFormCategoria('Arquivar',<?php echo $i; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Arquivar</a></li> 
                                    <li><a  onclick="enviaFormCategoria('Deletar',<?php echo $i; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Deletar</a></li> 
                                  
                                  <?php }else{ ?>
                                   <li onclick="document.forms[<?php echo $i; ?>].submit();"><a href="#">Visualizar</a></li>
                                    <li><a onclick="enviaFormCategoria('Ficha Tecnica',<?php echo $i; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Ficha Tecnica</a></li>
                                    <li><a onclick="enviaFormCategoria('Processos',<?php echo $i; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Processos</a></li>
                                    <li class="divider"></li>
                                     <li><a onclick="enviaFormCategoria('Finalizar',<?php echo $i; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Finalizar</a></li>
                                    <li><a  onclick="enviaFormCategoria('Arquivar',<?php echo $i; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Arquivar</a></li> 

                                  <?php }?>

                                  </ul>
                                </div>                           
                             </div>
                          </div>

                                                   
                          <div class="row form-row">
                            <div class="col-md-12">
                              <p><?php echo "$retornoTarefa->DescricaoProjeto"; ?></p>
                            </div>
                          </div>
                          
                          <div class="row form-row">
                            <div class="col-md-12">
                              <p><strong>Holding:</strong> <?php echo "$retornoTarefa->RazaoSocial"; ?></p>
                              <input type="hidden" name="HoldingAux" value="<?php echo "$retornoTarefa->IdEmpresa"; ?>"> 
                              <input type="hidden" name="IdTarefa" value="<?php echo "$retornoTarefa->IdTarefa"; ?>"> 
                              <input type="hidden" name="NomeProjeto" value="<?php echo "$retornoTarefa->NomeProjeto"; ?>"> 

                              <input type="hidden" name="IdOportunidadeAux" id="IdOportunidadeAux" value="0"> 
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-12">
                              <p><strong>Requerente:</strong> <?php echo "$retornoTarefa->Nome"; ?></p>
                              <input type="hidden" name="RequerenteAux" value="<?php echo "$retornoTarefa->IdRequerente"; ?>">
                            </div>
                          </div>
                          <div class="row form-row">
                          <div class="col-md-4">
                              <p><strong>SQL:</strong> <?php echo "$retornoTarefa->NumeroContribuinte"; ?></p>
                              <input type="hidden" name="SqlAux" value="<?php echo "$retornoTarefa->IdImovel"; ?>">
                            </div>
                            <div class="col-md-8">
                              <p><strong>Endereço:</strong> <?php echo "$retornoTarefa->LocalImovel"; ?></p>
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-12">
                              <p><strong>Inicio:</strong> <?php echo "$retornoTarefa->DataInicio"; ?></p>
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-12">
                              <p><strong>Entrega:</strong> <?php echo "$retornoTarefa->DataEntrega"; ?> </p>
                            </div>
                          </div>
                          
                          
                           
                        </div>

                 <!-- MODELO FORMULARIO 1 COLUNA -->


                 <?php 

                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/
                     
                        $buscarEtapaTarefa = new Conexao();
                        $buscarEtapaTarefa->conectar();
                        $buscarEtapaTarefa->selecionarDB(); 

                        $buscarPorcetagemEtapaTarefa = new Conexao();
                        $buscarPorcetagemEtapaTarefa->conectar();
                        $buscarPorcetagemEtapaTarefa->selecionarDB(); 

                        $buscarQuantidadeEtapaTarefa = new Conexao();
                        $buscarQuantidadeEtapaTarefa->conectar();
                        $buscarQuantidadeEtapaTarefa->selecionarDB(); 

                        $IdUsuario = $_SESSION ['usuarioID'];
                        $UsuarioTipo = $_SESSION ['usuarioTipo'];    

                        //Muda a query para buscar as etapas da tarefa
                        //Se for o Admin irá ver todas as etapas
                        //senão verá somentes as etapas a que o usuario for responsável 
                        if ($UsuarioTipo == "Administrador") {

                          $buscarEtapaTarefa->set('sql',"SELECT EtapaTarefa.*, NomeExibicao 
                                                         FROM Usuarios
                                                         INNER JOIN EtapaTarefa
                                                         WHERE  Usuarios.IdUsuario = EtapaTarefa.IdUsuario AND
                                                                EtapaTarefa.IdTarefa = $retornoTarefa->IdTarefa
                                                         GROUP BY EtapaTarefa.IdEtapaTarefa");

                          //Busca As etapas que estão finalizadas
                          $buscarPorcetagemEtapaTarefa->set('sql',"SELECT count(IdEtapaTarefa) as QuantEtapaFinalizadas
                                                                   FROM EtapaTarefa
                                                                   WHERE  IdTarefa = '$retornoTarefa->IdTarefa' AND 
                                                                          SituacaoEtapaTarefa = 'Finalizar' ");
                          $retornoQuantFinalizadaEtapaTarefa=mysql_fetch_object($buscarPorcetagemEtapaTarefa->executarQuery());

                          //Busca a quantidade de etapas 
                          $buscarQuantidadeEtapaTarefa->set('sql',"SELECT count(IdEtapaTarefa) as QuantEtapaTarefa
                                                                   FROM EtapaTarefa
                                                                   WHERE  IdTarefa = '$retornoTarefa->IdTarefa' ");
                          $retornoQuantEtapaTarefa=mysql_fetch_object($buscarQuantidadeEtapaTarefa->executarQuery());

                        }else{

                          $buscarEtapaTarefa->set('sql',"SELECT EtapaTarefa.*, NomeExibicao FROM Usuarios
                                                         INNER JOIN EtapaTarefa
                                                         WHERE  Usuarios.IdUsuario = EtapaTarefa.IdUsuario AND
                                                                EtapaTarefa.IdTarefa = $retornoTarefa->IdTarefa AND
                                                                EtapaTarefa.IdUsuario = '$IdUsuario'
                                                         GROUP BY EtapaTarefa.IdEtapaTarefa" );
                            
                          //Busca As etapas que estão finalizadas
                          $buscarPorcetagemEtapaTarefa->set('sql',"SELECT count(IdEtapaTarefa) as QuantEtapaFinalizadas
                                                                   FROM EtapaTarefa
                                                                   WHERE  IdTarefa = '$retornoTarefa->IdTarefa' AND
                                                                          IdUsuario = '$IdUsuario' AND  
                                                                          SituacaoEtapaTarefa = 'Finalizar' ");
                          $retornoQuantFinalizadaEtapaTarefa=mysql_fetch_object($buscarPorcetagemEtapaTarefa->executarQuery());

                          //Busca a quantidade de etapas 
                          $buscarQuantidadeEtapaTarefa->set('sql',"SELECT count(IdEtapaTarefa) as QuantEtapaTarefa
                                                                   FROM EtapaTarefa
                                                                   WHERE  IdTarefa = '$retornoTarefa->IdTarefa' ");
                          $retornoQuantEtapaTarefa=mysql_fetch_object($buscarQuantidadeEtapaTarefa->executarQuery());

                    }?>




                        <div class="col-md-6">
                           <div class="row form-row">
                               <div class="col-md-12">
                               <?php if ($retornoQuantFinalizadaEtapaTarefa->QuantEtapaFinalizadas == 0) {
                                  echo "0% Completo";
                                  echo "<div class='col-md-12'>
                                          <div class='progress progress-striped active progress-large'>
                                            <div aria-valuemin='0' aria-valuenow='0'  class='progress-bar progress-bar-success'></div>
                                           </div>                        
                                        </div>";
                               } elseif ($retornoQuantFinalizadaEtapaTarefa->QuantEtapaFinalizadas == $retornoQuantEtapaTarefa->QuantEtapaTarefa) {
                                 echo "100% Completo";
                                 echo "<div class='col-md-12'>
                                          <div class='progress progress-striped active progress-large'>
                                            <div aria-valuemin='0' aria-valuenow='100' class='progress-bar progress-bar-success'></div>
                                           </div>                        
                                        </div>";
                               }else{
                                  $porcetagem = $retornoQuantFinalizadaEtapaTarefa->QuantEtapaFinalizadas * 100 / $retornoQuantEtapaTarefa->QuantEtapaTarefa;
                                  
                                  echo "".number_format($porcetagem, 0, ',', '.')."% Completo";
                                  echo "<div class='col-md-12'>
                                          <div class='progress progress-striped active progress-large'>
                                            <div  aria-valuemin='0' aria-valuenow='".$porcetagem."'  class='progress-bar progress-bar-success'></div>
                                           </div>                        
                                        </div>";
                                } ?>
                                </div>                                
                            </div>
                          <br>
                    <?php 
                       $query2= $buscarEtapaTarefa->executarQuery();
                       while($retornoEtapaTarefa=mysql_fetch_object($query2)) { 
                      ?>


                          <div class="col-md-12" align="right">Previsão de entrega: <?php echo "$retornoEtapaTarefa->DataEntregaEtapa"; ?> </div>
                          <div class="row form-row">
                            <div class="col-md-12"  onclick="selecionaEtapa('<?php echo $i; ?>','<?php echo $retornoEtapaTarefa->IdEtapaTarefa; ?>');">
                            <a href="#">
                              <p> <strong><i class="<?php 
                               if ($retornoEtapaTarefa->SituacaoEtapaTarefa == "Finalizar") {
                                    echo "fa fa-check";
                               }elseif ($retornoEtapaTarefa->SituacaoEtapaTarefa == "Trabalhando") {
                                    echo "fa fa-user";
                               }elseif ($retornoEtapaTarefa->SituacaoEtapaTarefa == "Pausado") {
                                    echo "fa fa-pause";
                               }?>"></i> <?php echo "$retornoEtapaTarefa->TituloEtapa"; ?></strong> - <?php echo "$retornoEtapaTarefa->NomeExibicao"; ?>
                               </p>
                             </a>  
                              <!--Auxiliares para envio de dados para formulário PHP-->
                              <input type="hidden" name="tarefaAux" value="<?php echo "$retornoTarefa->IdTarefa"; ?>">
                            <div class="progress progress-small">
                              <div aria-valuemin='0' aria-valuenow="<?php if ($retornoEtapaTarefa->SituacaoEtapaTarefa == "Finalizar") {
                                echo "100";
                              }else{
                                  echo "25";
                                }?>" class="progress-bar progress-bar-danger"></div>
                            </div>
                            </div>
                          </div>
                      
                      <?php } ?>


                      </div>
                      </div>
                       <!--Auxiliar para enviar de formulario-->
                      <input type="hidden" name="IdTarefaAux" id="IdTarefaAux">
                      <input type="hidden" name="IdEtapaTarefaAux" id="IdEtapaTarefaAux">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
            <?php $i++; } ?>













            <!--Here begin tasks of oportunities-->


            <?php 

                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/
                     
                        $buscarTarefa = new Conexao();
                        $buscarTarefa->conectar();
                        $buscarTarefa->selecionarDB(); 
                        $j = $i; 

                        $IdUsuario = $_SESSION ['usuarioID'];
                        $UsuarioTipo = $_SESSION ['usuarioTipo'];                   

                       $buscarTarefa->set('sql',"SELECT CadastraTarefa.*, Oportunidade.* 
                                                 FROM Oportunidade 
                                                 INNER JOIN `CadastraTarefa`
                                                 ON  CadastraTarefa.IdOportunidade = Oportunidade.IdOportunidade AND
                                                     CadastraTarefa.SituacaoTarefa != 'Finalizada' AND
                                                     CadastraTarefa.SituacaoTarefa != 'Arquivada' 
                                                  GROUP BY CadastraTarefa.IdTarefa");
                       
                        $query = $buscarTarefa->executarQuery();
                       while($retornoTarefa=mysql_fetch_object($query)) { ?>
                        
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border"></div>
                    <div class="grid-body no-border">
                    
                  
                    <form class="form-no-horizontal-spacing" id="formTarefaVisualizar<?php echo "$j"; ?>" name="formTarefaVisualizar<?php echo "$j"; ?>" method="POST" action="tarefa-detalhe">
                      
                      <div class="row column-seperation">
                        <div class="col-md-6">

                        <div class="row form-row">
                            <div class="col-md-9">
                             <h1> <?php echo "# $retornoTarefa->IdTarefa - $retornoTarefa->NomeProjeto"; ?></h1>
                            </div>
                               <div class="col-md-3">
                                 <div class="btn-group"> <a class="btn btn-white dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"> Ações<span class="caret"></span></a>
                                  <ul class="dropdown-menu">

                                  <?php if ($UsuarioTipo == "Administrador") { ?>

                                    <li onclick="document.forms[<?php echo $j; ?>].submit();"><a href="#">Visualizar</a></li>
                                    <li><a onclick="enviaFormCategoria('Editar',<?php echo $j; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Editar</a></li>
                                    <li><a onclick="enviaFormCategoria('Add. Fase',<?php echo $j; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Add. Fase</a></li>
                                    <li><a onclick="enviaFormCategoria('Ficha Tecnica',<?php echo $j; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Ficha Tecnica</a></li>
                                    <li><a onclick="enviaFormCategoria('Processos',<?php echo $j; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Processos</a></li>
                                    <li class="divider"></li>
                                     <li><a onclick="enviaFormCategoria('Finalizar',<?php echo $j; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Finalizar</a></li>
                                    <li><a  onclick="enviaFormCategoria('Arquivar',<?php echo $j; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Arquivar</a></li> 
                                    <li><a  onclick="enviaFormCategoria('Deletar',<?php echo $j; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Deletar</a></li> 
                                  
                                  <?php }else{ ?>
                                   <li onclick="document.forms[<?php echo $j; ?>].submit();"><a href="#">Visualizar</a></li>
                                    <li><a onclick="enviaFormCategoria('Ficha Tecnica',<?php echo $j; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Ficha Tecnica</a></li>
                                    <li><a onclick="enviaFormCategoria('Processos',<?php echo $j; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Processos</a></li>
                                    <li class="divider"></li>
                                     <li><a onclick="enviaFormCategoria('Finalizar',<?php echo $j; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Finalizar</a></li>
                                    <li><a  onclick="enviaFormCategoria('Arquivar',<?php echo $j; ?>,<?php echo $retornoTarefa->IdTarefa; ?>);">Arquivar</a></li> 

                                  <?php }?>

                                  </ul>
                                </div>                           
                             </div>
                          </div>

                                                   
                          <div class="row form-row">
                            <div class="col-md-12">
                              <p><?php echo "$retornoTarefa->DescricaoProjeto"; ?></p>
                            </div>
                          </div>
                          
                          <div class="row form-row">
                            <div class="col-md-12">
                              <p><strong>Holding:</strong> <?php echo "$retornoTarefa->RazaoSocial"; ?></p>
                              <input type="hidden" name="HoldingAux" value="<?php echo "$retornoTarefa->IdEmpresa"; ?>"> 
                              <input type="hidden" name="IdTarefa" value="<?php echo "$retornoTarefa->IdTarefa"; ?>"> 
                              <input type="hidden" name="NomeProjeto" value="<?php echo "$retornoTarefa->NomeProjeto"; ?>"> 

                               <input type="hidden" name="IdOportunidadeAux" id="IdOportunidadeAux" value="<?php echo "$retornoTarefa->IdOportunidade"; ?>"> 
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-12">
                              <p><strong>Requerente:</strong> <?php echo "$retornoTarefa->NomeContato"; ?></p>
                              <input type="hidden" name="RequerenteAux" value="<?php echo "$retornoTarefa->IdRequerente"; ?>">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-5">
                              <p><strong>Cnpj/Cpf:</strong> <?php echo "$retornoTarefa->CnpjCpf"; ?></p>
                              <input type="hidden" name="SqlAux" value="<?php echo "$retornoTarefa->IdImovel"; ?>">
                            </div>
                            <div class="col-md-7">
                              <p><strong>Endereço:</strong> <?php echo "$retornoTarefa->EnderecoArea"; ?></p>
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-12">
                              <p><strong>Inicio:</strong> <?php echo "$retornoTarefa->DataInicio"; ?></p>
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-12">
                              <p><strong>Entrega:</strong> <?php echo "$retornoTarefa->DataEntrega"; ?> </p>
                            </div>
                          </div>
                          
                          
                           
                        </div>

                 <!-- MODELO FORMULARIO 1 COLUNA -->


                 <?php 

                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/
                     
                        $buscarEtapaTarefa = new Conexao();
                        $buscarEtapaTarefa->conectar();
                        $buscarEtapaTarefa->selecionarDB(); 

                        $buscarPorcetagemEtapaTarefa = new Conexao();
                        $buscarPorcetagemEtapaTarefa->conectar();
                        $buscarPorcetagemEtapaTarefa->selecionarDB(); 

                        $buscarQuantidadeEtapaTarefa = new Conexao();
                        $buscarQuantidadeEtapaTarefa->conectar();
                        $buscarQuantidadeEtapaTarefa->selecionarDB(); 

                        $IdUsuario = $_SESSION ['usuarioID'];
                        $UsuarioTipo = $_SESSION ['usuarioTipo'];    

                        //Muda a query para buscar as etapas da tarefa
                        //Se for o Admin irá ver todas as etapas
                        //senão verá somentes as etapas a que o usuario for responsável 
                        if ($UsuarioTipo == "Administrador") {

                          $buscarEtapaTarefa->set('sql',"SELECT EtapaTarefa.*, NomeExibicao 
                                                         FROM Usuarios
                                                         INNER JOIN EtapaTarefa
                                                         WHERE  Usuarios.IdUsuario = EtapaTarefa.IdUsuario AND
                                                                EtapaTarefa.IdTarefa = $retornoTarefa->IdTarefa
                                                         GROUP BY EtapaTarefa.IdEtapaTarefa");

                          //Busca As etapas que estão finalizadas
                          $buscarPorcetagemEtapaTarefa->set('sql',"SELECT count(IdEtapaTarefa) as QuantEtapaFinalizadas
                                                                   FROM EtapaTarefa
                                                                   WHERE  IdTarefa = '$retornoTarefa->IdTarefa' AND 
                                                                          SituacaoEtapaTarefa = 'Finalizar' ");
                          $retornoQuantFinalizadaEtapaTarefa=mysql_fetch_object($buscarPorcetagemEtapaTarefa->executarQuery());

                          //Busca a quantidade de etapas 
                          $buscarQuantidadeEtapaTarefa->set('sql',"SELECT count(IdEtapaTarefa) as QuantEtapaTarefa
                                                                   FROM EtapaTarefa
                                                                   WHERE  IdTarefa = '$retornoTarefa->IdTarefa' ");
                          $retornoQuantEtapaTarefa=mysql_fetch_object($buscarQuantidadeEtapaTarefa->executarQuery());

                        }else{

                          $buscarEtapaTarefa->set('sql',"SELECT EtapaTarefa.*, NomeExibicao FROM Usuarios
                                                         INNER JOIN EtapaTarefa
                                                         WHERE  Usuarios.IdUsuario = EtapaTarefa.IdUsuario AND
                                                                EtapaTarefa.IdTarefa = $retornoTarefa->IdTarefa AND
                                                                EtapaTarefa.IdUsuario = '$IdUsuario'
                                                         GROUP BY EtapaTarefa.IdEtapaTarefa" );
                            
                          //Busca As etapas que estão finalizadas
                          $buscarPorcetagemEtapaTarefa->set('sql',"SELECT count(IdEtapaTarefa) as QuantEtapaFinalizadas
                                                                   FROM EtapaTarefa
                                                                   WHERE  IdTarefa = '$retornoTarefa->IdTarefa' AND
                                                                          IdUsuario = '$IdUsuario' AND  
                                                                          SituacaoEtapaTarefa = 'Finalizar' ");
                          $retornoQuantFinalizadaEtapaTarefa=mysql_fetch_object($buscarPorcetagemEtapaTarefa->executarQuery());

                          //Busca a quantidade de etapas 
                          $buscarQuantidadeEtapaTarefa->set('sql',"SELECT count(IdEtapaTarefa) as QuantEtapaTarefa
                                                                   FROM EtapaTarefa
                                                                   WHERE  IdTarefa = '$retornoTarefa->IdTarefa' ");
                          $retornoQuantEtapaTarefa=mysql_fetch_object($buscarQuantidadeEtapaTarefa->executarQuery());

                    }?>




                        <div class="col-md-6">
                           <div class="row form-row">
                               <div class="col-md-12">
                               <?php if ($retornoQuantFinalizadaEtapaTarefa->QuantEtapaFinalizadas == 0) {
                                  echo "0% Completo";
                                  echo "<div class='col-md-12'>
                                          <div class='progress progress-striped active progress-large'>
                                            <div aria-valuemin='0' aria-valuenow='0'  class='progress-bar progress-bar-success'></div>
                                           </div>                        
                                        </div>";
                               } elseif ($retornoQuantFinalizadaEtapaTarefa->QuantEtapaFinalizadas == $retornoQuantEtapaTarefa->QuantEtapaTarefa) {
                                 echo "100% Completo";
                                 echo "<div class='col-md-12'>
                                          <div class='progress progress-striped active progress-large'>
                                            <div aria-valuemin='0' aria-valuenow='100' class='progress-bar progress-bar-success'></div>
                                           </div>                        
                                        </div>";
                               }else{
                                  $porcetagem = $retornoQuantFinalizadaEtapaTarefa->QuantEtapaFinalizadas * 100 / $retornoQuantEtapaTarefa->QuantEtapaTarefa;
                                  
                                  echo "".number_format($porcetagem, 0, ',', '.')."% Completo";
                                  echo "<div class='col-md-12'>
                                          <div class='progress progress-striped active progress-large'>
                                            <div  aria-valuemin='0' aria-valuenow='".$porcetagem."'  class='progress-bar progress-bar-success'></div>
                                           </div>                        
                                        </div>";
                                } ?>
                                </div>                                
                            </div>
                          <br>
                    <?php 
                       $query2= $buscarEtapaTarefa->executarQuery();
                       while($retornoEtapaTarefa=mysql_fetch_object($query2)) { 
                      ?>


                          <div class="col-md-12" align="right">Previsão de entrega: <?php echo "$retornoEtapaTarefa->DataEntregaEtapa"; ?> </div>
                          <div class="row form-row">
                            <div class="col-md-12"  onclick="selecionaEtapa('<?php echo $j; ?>','<?php echo $retornoEtapaTarefa->IdEtapaTarefa; ?>');">
                            <a href="#">
                              <p> <strong><i class="<?php 
                               if ($retornoEtapaTarefa->SituacaoEtapaTarefa == "Finalizar") {
                                    echo "fa fa-check";
                               }elseif ($retornoEtapaTarefa->SituacaoEtapaTarefa == "Trabalhando") {
                                    echo "fa fa-user";
                               }elseif ($retornoEtapaTarefa->SituacaoEtapaTarefa == "Pausado") {
                                    echo "fa fa-pause";
                               }?>"></i> <?php echo "$retornoEtapaTarefa->TituloEtapa"; ?></strong> - <?php echo "$retornoEtapaTarefa->NomeExibicao"; ?>
                               </p>
                             </a>  
                              <!--Auxiliares para envio de dados para formulário PHP-->
                              <input type="hidden" name="tarefaAux" value="<?php echo "$retornoTarefa->IdTarefa"; ?>">
                            <div class="progress progress-small">
                              <div aria-valuemin='0' aria-valuenow="<?php if ($retornoEtapaTarefa->SituacaoEtapaTarefa == "Finalizar") {
                                echo "100";
                              }else{
                                  echo "25";
                                }?>" class="progress-bar progress-bar-danger"></div>
                            </div>
                            </div>
                          </div>
                      
                      <?php } ?>


                      </div>
                      </div>
                       <!--Auxiliar para enviar de formulario-->
                      <input type="hidden" name="IdTarefaAux" id="IdTarefaAux" value="<?php echo "$retornoTarefa->IdTarefa"; ?>">
                      <input type="hidden" name="IdEtapaTarefaAux" id="IdEtapaTarefaAux">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
            <?php $j++; } ?>






            <!--Here end tasks of oportunities-->

                       

                         <script type="text/javascript">
                            /*********************************************************************************************/
                            /*                       Função para Enviar FORM Tarefa para pagina php                      */
                            /*********************************************************************************************/
                            
                                                        
                            function enviaFormCategoria(acao,n,id){
                              
                              if (acao == 'Finalizar'){                                
                                document.forms[n].action = "includes/php/FinalizaTarefa.php";
                                document.forms[n].submit();

                              } else if (acao == 'Arquivar'){
                                 document.forms[n].action = "includes/php/ArquivaTarefa.php";
                                 document.forms[n].submit();
                              }else if (acao == 'Deletar'){
                                 document.forms[n].action = "includes/php/DeletaTarefa.php";
                                 document.forms[n].submit(); 
                                }else if (acao == 'Pausar'){
                                 document.forms[n].action = "includes/php/PausarTarefa.php";
                                 document.forms[n].submit(); 
                                }else if (acao == 'Editar'){
                                  document.forms[n].IdTarefaAux.value = id;
                                 document.forms[n].action = "tarefa-editar";
                                 document.forms[n].submit(); 
                                }else if (acao == 'Add. Fase'){
                                  document.forms[n].IdTarefaAux.value = id;
                                 document.forms[n].action = "tarefa-add-fase";
                                 document.forms[n].submit(); 
                                }else if (acao == 'Ficha Tecnica'){
                                 document.forms[n].action = "tarefa-visualizar";
                                 document.forms[n].submit(); 
                                }else if (acao == 'Processos'){
                                 document.forms[n].action = "processos-lista";
                                 document.forms[n].submit(); 
                                }
                            }

                            function selecionaEtapa(form,idEtapa){
                                document.forms[form].IdEtapaTarefaAux.value = idEtapa;
                                document.forms[form].submit();
                            }
                          </script>



                          
      
</div>
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
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<!-- END CORE JS FRAMEWORK --> 
<!-- BEGIN PAGE LEVEL JS -->  
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->   

<!-- BEGIN CORE TEMPLATE JS --> 
<script src="assets/js/core.js" type="text/javascript"></script> 
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS --> 
</body>
</html>