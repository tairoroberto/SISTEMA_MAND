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

<!-- BEGIN PLUGIN CSS -->
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- END PLUGIN CSS -->

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

<link href="assets/plugins/boostrap-slider/css/slider.css" rel="stylesheet" type="text/css"/>

<!-- Inclui o arquivos para validação de campos-->
<script type="text/javascript" src="includes/js/ValidaCampos.js"></script>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body >
<!-- BEGIN HEADER -->

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
    <!-- END SIDEBAR --> 

  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <form id="formRelatorio" name="formRelatorio" method="POST" action="GeraRelatorio2">    
    <div class="clearfix"></div>
    <div class="content">  
		<div class="page-title"> 
        <h3>Gerar <span class="semi-bold">Relatórios</span></h3>
      </div>
      
      
      
     <!-- BEGIN DROPDOWN CONTROLS-->
      <div class="row">
        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Holding</h4>
              
            </div>
            <div class="grid-body no-border">
              <div class="row">
              
                <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkHoldingTodas" name="checkHoldingTodas" type="checkbox" checked="true" value="Todas" >
                      <label for="checkHoldingTodas">Todas</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkHoldingFisica" name="checkHoldingFisica" checked="true" type="checkbox" value="Pessoa Fisica" >
                      <label for="checkHoldingFisica">Pessoa Física</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkHoldingJuridica" name="checkHoldingJuridica" checked="true" type="checkbox" value="Pessoa Juridica" >
                      <label for="checkHoldingJuridica">Pessoa Jurídica</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <select id="SelectHolding" name="SelectHolding" style="width:100%" multiple onchange="verificaRelatorioHolding();" >
                      <option value="Todos..." selected="true">Todos...</option>
                      <?php 
                        /********************************************************************************************/
                        /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                        /********************************************************************************************/                     
                            $buscarHolding = new Conexao();
                            $buscarHolding->conectar();
                            $buscarHolding->selecionarDB();                      

                            $buscarHolding->set('sql',"SELECT * FROM `CadastroHolding` ");
                           
                            $query= $buscarHolding->executarQuery();
                           while($retornoHolding=mysql_fetch_object($query)) { 
                          ?> 
                              <option value="<?php echo $retornoHolding->IdEmpresa;?>"><?php echo $retornoHolding->RazaoSocial;?></option>                           
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  
              </div>
            </div>
          </div>
        </div>
        
        
        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Requerente</h4>
              
            </div>
            <div class="grid-body no-border">
              <div class="row">
              
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkRequerenteTodos" name="checkRequerenteTodos" checked="true" type="checkbox" value="Todos" >
                      <label for="checkRequerenteTodos">Todos</label>
                    </div>
                  </div>
                                   
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <select id="SelectRequerente" name="SelectRequerente" style="width:100%"  multiple onchange="verificaRelatorioRequerente()">
                      <option value="Todos..." selected="true">Todos...</option>
                        <?php 
                          /********************************************************************************************/
                          /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                          /********************************************************************************************/                     
                              $buscarRequerente = new Conexao();
                              $buscarRequerente->conectar();
                              $buscarRequerente->selecionarDB();                      

                              $buscarRequerente->set('sql',"SELECT * FROM `CadastroRequerente` ");
                             
                              $query= $buscarRequerente->executarQuery();
                             while($retornoRequerente=mysql_fetch_object($query)) { 
                            ?> 
                                <option value="<?php echo $retornoRequerente->IdRequerente;?>"><?php echo $retornoRequerente->Nome;?></option>                           
                          <?php } ?>
                  </select>
                    </div>
                  </div>
                  
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Imóveis</h4>
              
            </div>
            <div class="grid-body no-border">
              <div class="row">
              
                <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkImovelTodos" name="checkImovelTodos" checked="true" type="checkbox" value="Todos">
                      <label for="checkImovelTodos">Todos</label>
                    </div>
                  </div>
                  
                  
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <select id="SelectImovel" name="SelectImovel" style="width:100%"  multiple onchange="verificaRelatorioImovel();">
                      <option value="Todos..." selected="true">Todos...</option>
                       <?php 
                          /********************************************************************************************/
                          /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                          /********************************************************************************************/                     
                              $buscarImovel = new Conexao();
                              $buscarImovel->conectar();
                              $buscarImovel->selecionarDB();                      

                              $buscarImovel->set('sql',"SELECT * FROM `CadastraImovel` ");
                             
                              $query= $buscarImovel->executarQuery();
                             while($retornoImovel=mysql_fetch_object($query)) { 
                            ?> 
                                <option value="<?php echo $retornoImovel->IdImovel;?>"><?php echo $retornoImovel->NumeroContribuinte;?></option>                           
                          <?php } ?>
                  </select>
                    </div>
                  </div>
                  
              </div>
            </div>
          </div>
        </div>
        
      </div>
	  <!-- END DROPDOWN CONTROLS-->
      
      
      
      
      
      
      <!-- BEGIN DROPDOWN CONTROLS-->
      <div class="row">
        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Tarefas</h4>
              
            </div>
            <div class="grid-body no-border">
              <div class="row">
              
                <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkTarefasTodas" name="checkTarefasTodas" checked="true" type="checkbox" value="Todas">
                      <label for="checkTarefasTodas">Todas</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkTarefasConcluidas" name="checkTarefasConcluidas" type="checkbox" checked="true" value="Concluidas">
                      <label for="checkTarefasConcluidas">Concluídas</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkTarefasAtrasadas" name="checkTarefasAtrasadas" type="checkbox" checked="true" value="Concluidas">
                      <label for="checkTarefasAtrasadas">Atrasadas</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkTarefasEmAndamento" name="checkTarefasEmAndamento" type="checkbox" checked="true" value="Concluidas">
                      <label for="checkTarefasEmAndamento">Em Andamento</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkTarefasPausadas" name="checkTarefasPausadas" type="checkbox" checked="true" value="Pausadas">
                      <label for="checkTarefasPausadas">Pausadas</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkTarefasEperaDocumentos" name="checkTarefasEperaDocumentos" type="checkbox" checked="true" value="EsperaDocumentos">
                      <label for="checkTarefasEperaDocumentos">Espera de Documento (parada)</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkTarefasDocumentoSolicitado" name="checkTarefasDocumentoSolicitado" type="checkbox" checked="true" value="DocumentoSolicitados">
                      <label for="checkTarefasDocumentoSolicitado">Documentos Solicitados</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkTArefasDocumentoRecebido" name="checkTArefasDocumentoRecebido" type="checkbox" checked="true" value="DocumentosRecebidos">
                      <label for="checkTArefasDocumentoRecebido">Documetnos Recebidos</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <select id="SelectTarefas" name="SelectTarefas" style="width:100%" multiple onchange="verificaRelatorioTarefa();">
                      <option value="Todos..." selected="true">Todos...</option>
                        <?php 
                          /********************************************************************************************/
                          /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                          /********************************************************************************************/                     
                              $buscarTarefa = new Conexao();
                              $buscarTarefa->conectar();
                              $buscarTarefa->selecionarDB();                      

                              $buscarTarefa->set('sql',"SELECT CadastraTarefa.*,CadastroHolding.*
                                                        FROM CadastroHolding
                                                        INNER JOIN CadastraTarefa 
                                                        ON CadastraTarefa.IdEmpresa = CadastroHolding.IdEmpresa
                                                        GROUP BY  CadastroHolding.IdEmpresa ");
                             
                              $query= $buscarTarefa->executarQuery();
                             while($retornoTarefa=mysql_fetch_object($query)) { 
                            ?> 
                                <option value="<?php echo $retornoTarefa->IdEmpresa;?>"><?php echo $retornoTarefa->RazaoSocial;?></option>                           
                          <?php } ?>
                    
                  </select>
                    </div>
                  </div>
                  
              </div>
            </div>
          </div>
        </div>
        
        
        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Processos</h4>
              
            </div>
            <div class="grid-body no-border">
              <div class="row">
              
                <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkProcessoTodos" name="checkProcessoTodos" type="checkbox" checked="true" value="Todos">
                      <label for="checkProcessoTodos">Todos</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkProcessosComunique" name="checkProcessosComunique" checked="true" type="checkbox" value="Comunique-se">
                      <label for="checkProcessosComunique">Comunique-se</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkProcessosAnalise" name="checkProcessosAnalise" type="checkbox" checked="true" value="Analise">
                      <label for="checkProcessosAnalise">Analise</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkProcessosDeferido" name="checkProcessosDeferido" type="checkbox" checked="true" value="Deferido">
                      <label for="checkProcessosDeferido">Deferido</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkProcessosIndeferido" name="checkProcessosIndeferido" type="checkbox" checked="true" value="Indeferido">
                      <label for="checkProcessosIndeferido">Indeferido</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkProcessoPrazo" name="checkProcessoPrazo" type="checkbox" checked="true" value="Prazo">
                      <label for="checkProcessoPrazo">Prazo</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkProcessoVisita" name="checkProcessoVisita" type="checkbox" checked="true" value="Visita">
                      <label for="checkProcessoVisita">Visita</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkProcessosAgendamento" name="checkProcessosAgendamento" type="checkbox" checked="true" value="Agendamento">
                      <label for="checkProcessosAgendamento">Agendamento</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkProcessosConcluidos" name="checkProcessosConcluidos" type="checkbox" checked="true" value="Concluidos">
                      <label for="checkProcessosConcluidos">Concluidos</label>
                    </div>
                  </div>
                  
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Oportunidades</h4>
              
            </div>
            <div class="grid-body no-border">
              <div class="row">
              
                <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkOportunidadeTodas" name="checkOportunidadeTodas" type="checkbox" checked="true" value="Todas">
                      <label for="checkOportunidadeTodas">Todas</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkOportunidadeTipo" name="checkOportunidadeTipo" type="checkbox" checked="true" value="Tipo">
                      <label for="checkOportunidadeTipo">Tipo</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkOportunidadeOrigem" type="checkbox" checked="true" value="Origem">
                      <label for="checkOportunidadeOrigem">Origem</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkOportunidadeFisica" name="checkOportunidadeFisica" type="checkbox" checked="true" value="Pessoa Fisica">
                      <label for="checkOportunidadeFisica">Pessoa Física</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkOportunidadeJuridica" name="checkOportunidadeJuridica" type="checkbox" checked="true" value="Pessoa Juridica">
                      <label for="checkOportunidadeJuridica">Pessoa Jurídica</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkOportunidadeInviavel" name="checkOportunidadeInviavel" type="checkbox" checked="true" value="Inviavel">
                      <label for="checkOportunidadeInviavel">Inviavel</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkOportunidadeViavel" name="checkOportunidadeViavel" type="checkbox" checked="true" value="Viavel">
                      <label for="checkOportunidadeViavel">Gerar Orçamento</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkOportunidadeDataEnvio" name="checkOportunidadeDataEnvio" type="checkbox" checked="true" value="DataEnvio">
                      <label for="checkOportunidadeDataEnvio">Data de Envio</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkOportunidadeNegociando" name="checkOportunidadeNegociando" type="checkbox" checked="true" value="Negociando">
                      <label for="checkOportunidadeNegociando">Negociando</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkOportunidadeProrrogado" name="checkOportunidadeProrrogado" type="checkbox" checked="true" value="Prorrogado">
                      <label for="checkOportunidadeProrrogado">Prorogado</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkOportunidadeFechado" name="checkOportunidadeFechado" type="checkbox" checked="true" value="Fechado">
                      <label for="checkOportunidadeFechado">Fechado</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkOportunidadePerdido" name="checkOportunidadePerdido" type="checkbox" checked="true" value="Perdido">
                      <label for="checkOportunidadePerdido">Perdido</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkOportunidadeReaisFechado" name="checkOportunidadeReaisFechado" type="checkbox" checked="true" value="ReaisFechado">
                      <label for="checkOportunidadeReaisFechado">Reais Fechado</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkOportunidadeReaisPerdido" name="checkOportunidadeReaisPerdido" type="checkbox" checked="true" value="ReaisPerdido">
                      <label for="checkOportunidadeReaisPerdido">Reais Perdidos</label>
                    </div>
                  </div>                     
              </div>
            </div>
          </div>
        </div>



        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Incorporação</h4>
              
            </div>
            <div class="grid-body no-border">
              <div class="row">
              
                <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkIncorporacaoTodas" name="checkIncorporacaoTodas" type="checkbox" checked="true" value="Todas" >
                      <label for="checkIncorporacaoTodas">Todas</label>
                    </div>
                  </div>                  
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <select id="SelectIncorporacao" name="SelectIncorporacao" style="width:100%" multiple onchange="verificaRelatorioIncorporacao();" >
                      <option value="Todos..." selected="true">Todos...</option>
                      <?php 
                        /********************************************************************************************/
                        /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                        /********************************************************************************************/                     
                            $buscarHolding = new Conexao();
                            $buscarHolding->conectar();
                            $buscarHolding->selecionarDB();                      

                            $buscarHolding->set('sql',"SELECT * FROM `CadastraIncorporacao` ");
                           
                            $query= $buscarHolding->executarQuery();
                           while($retornoIncorporacao=mysql_fetch_object($query)) { 
                          ?> 
                              <option value="<?php echo $retornoIncorporacao->IdIncorporacao;?>"><?php echo $retornoIncorporacao->TituloIncorporacao;?></option>                           
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  
              </div>
            </div>
          </div>
        </div>
        
        
      </div>
	  <!-- END DROPDOWN CONTROLS-->
	  
                
      
      
      
      
       <!-- BEGIN DATEPICKER CONTROLS-->
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Gerar <span class="semi-bold">Relatório</span></h4>
              
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-4">
                  <h3><input id="checkPeriodo" name="checkPeriodo" type="checkbox" value="1"> Periodo</h3>
                  
                  <div class="input-append success date col-md-10 col-lg-6 no-padding">
                    <input type="text" id="PeriodoInicio" name="PeriodoInicio" class="form-control">
                    <span class="add-on"><span class="arrow"></span><i class="fa fa-th"></i></span> </div>
                    
                 

                  <div class="clearfix"></div>
                  <p>Até</p>
                  <div class="input-append success date col-md-10 col-lg-6 no-padding ">
                    <input type="text" id="PeriodoFim" name="PeriodoFim"  class="form-control">
                    <span class="add-on"><span class="arrow"></span><i class="fa fa-th"></i></span> 
                  </div>
                    
                 
                  <div class="clearfix"></div>
                </div>
                                 <div class="col-md-4">
                  <h3><input id="checkDias" name="checkDias" type="checkbox" value="1"> Dias</h3>
                  
                  <br>
                  <select id="SelectDias" name="SelectDias" style="width:100%">
                    <option value="AK">.....</option>
                    <option value="AK">5</option>
                    <option value="HI">10</option>
                    <option value="HI">20</option>
                    <option value="HI">30</option>
                    <option value="HI">60</option>
                    <option value="HI">90</option>
                    <option value="HI">120</option>
                    <option value="HI">360</option>
                    
                    
                  </select>
                </div>
                
                
                <div class="col-md-4">
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  
                  
                  <p align="right"><button type="button" class="btn btn-primary btn-cons" onclick="document.forms[0].submit();">Gerar</button></p>             
                            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  
    </div>
    </form>
  </div>
  
 </div>
<!-- END CONTAINER --> 
<?php formBuscaSql(); ?>
<!-- END CONTAINER -->

<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>

<!-- END CORE JS FRAMEWORK -->
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-inputmask/jquery.inputmask.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-autonumeric/autoNumeric.js" type="text/javascript"></script>
<script src="assets/plugins/ios-switch/ios7-switch.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js" type="text/javascript"></script>
<script src="assets/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script type="text/javascript">
  $(document).ready(function () {
              
             $('#PeriodoInicio').datepicker({
                    format: "dd/mm/yyyy"
                }); 

                $('#PeriodoFim').datepicker({
                    format: "dd/mm/yyyy"
                });  

            
            });
</script>

<!-- END JAVASCRIPTS -->
</body>
</html>