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
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="includes/Cep/jquery.maskedinput-1.3.min.js" type="text/javascript"></script>
<script src="includes/Cep/BuscaCep.js" type="text/javascript"></script>
<script type="text/javascript" src="includes/js/ValidaCampos.js"></script>


  <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-wysihtml5/style/jHtmlArea.css">

<script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/scripts/jHtmlArea-0.8.js"></script>

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="">
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
              <div class="page-title"> 
                <h3>Alterar - <span class="semi-bold">Contrato</span></h3>
              </div>
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border"></div>
                    <div class="grid-body no-border">
                    <form class="form-no-horizontal-spacing" id="formContrato" name="formContrato" method="post" action="includes/php/AlterarContrato.php">
                      
                        <div class="col-md-12">
                          <br><br><br>
                        </div>

                        <?php
                        /********************************************************************************************/
                        /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
                        /********************************************************************************************/
                              $buscaContrato = new Conexao();
                              $buscaContrato->conectar();
                              $buscaContrato->selecionarDB(); 


                              $buscaContrato->set('sql',"SELECT * FROM Contrato WHERE IdContrato = 1");

                              $retornoContrato= mysql_fetch_object($buscaContrato->executarQuery()); ?>
                          
                          
                    
                      <div class="col-md-12">

                          <div class="row form-row">
                            <label>DADOS DA MAND PROJETOS</label>
                            <div class="col-md-10">
                              <textarea class="textarea" style="width: 100%; height: 200px" name="DadosMand" id="DadosMand"  rows="3" class="col-lg-12"><?php echo $retornoContrato->DadosMand;?></textarea>                              
                            </div>
                          </div><br>


                         <div class="row form-row">
                            <label>DO OBJETO DO CONTRATO</label>
                            <div class="col-md-10">
                              <textarea class="textarea" style="width: 100%; height: 200px" name="DoObjetoDoContrato" id="DoObjetoDoContrato"  rows="3" class="col-lg-12"><?php echo $retornoContrato->DoObjetoDoContrato; ?></textarea>                              
                            </div>
                          </div><br>

                          <div class="row form-row">
                            <label>OBRIGAÇÕES DO CONTRATANTE</label>
                            <div class="col-md-10">
                              <textarea class="textarea" style="width: 100%; height: 200px" name="ObrigacoesContratante" id="ObrigacoesContratante"  rows="3" class="col-lg-12"><?php echo $retornoContrato->ObrigacoesContratante; ?></textarea>                              
                            </div>
                          </div><br>

                          <div class="row form-row">
                            <label>OBRIGAÇÕES DO CONTRATADO</label>
                            <div class="col-md-10">
                              <textarea class="textarea" style="width: 100%; height: 200px" name="ObrigacoesContratado" id="ObrigacoesContratado"  rows="3" class="col-lg-12"><?php echo $retornoContrato->ObrigacoesContratado; ?></textarea>                              
                            </div>
                          </div><br>

                          <div class="row form-row">
                            <label>DO PREÇO E DAS CONDIÇÕES DE PAGAMENTO</label>
                            <div class="col-md-10">
                              <textarea class="textarea" style="width: 100%; height: 200px" name="PrecoCondicoesPagamento" id="PrecoCondicoesPagamento"  rows="3" class="col-lg-12"><?php echo $retornoContrato->PrecoCondicoesPagamento; ?></textarea>                              
                            </div>
                          </div><br>

                          <div class="row form-row">
                            <label>DO INADIMPLEMENTO, DO DESCUMPRIMENTO E DA MULTA</label>
                            <div class="col-md-10">
                              <textarea class="textarea" style="width: 100%; height: 200px" name="InadiplenciaDescumplimentoMulta" id="InadiplenciaDescumplimentoMulta"  rows="3" class="col-lg-12"><?php echo $retornoContrato->InadDescumpMulta; ?></textarea>                              
                            </div>
                          </div><br>

                          <div class="row form-row">
                            <label>DA RESCISÃO IMOTIVADA</label>
                            <div class="col-md-10">
                              <textarea class="textarea" style="width: 100%; height: 200px" name="RecisaoIMotivada" id="RecisaoIMotivada"  rows="3" class="col-lg-12"><?php echo $retornoContrato->RecisaoIMotivada; ?></textarea>                              
                            </div>
                          </div><br>

                          <div class="row form-row">
                            <label>DO PRAZO</label>
                            <div class="col-md-10">
                              <textarea class="textarea" style="width: 100%; height: 200px" name="Doprazo" id="Doprazo"  rows="3" class="col-lg-12"><?php echo $retornoContrato->Doprazo; ?></textarea>                              
                            </div>
                          </div><br>

                          <div class="row form-row">
                            <label>DAS CONDIÇÕES GERAIS</label>
                            <div class="col-md-10">
                              <textarea class="textarea" style="width: 100%; height: 200px" name="CondicoesGerais" id="CondicoesGerais"  rows="3" class="col-lg-12"><?php echo $retornoContrato->CondicoesGerais; ?></textarea>                              
                            </div>
                          </div><br>

                          <div class="row form-row">
                            <label>DO FORO</label>
                            <div class="col-md-10">
                              <textarea class="textarea" style="width: 100%; height: 200px" name="DoForo" id="DoForo"  rows="3" class="col-lg-12"><?php echo $retornoContrato->DoForo; ?></textarea>                              
                            </div>
                          </div><br>
                        
                      </div>

                      <div class="form-actions">
                        <div class="pull-left"></div>
                        <div class="pull-right">
                          <button class="btn btn-success btn-cons" type="button"
                          				onclick="document.forms[0].submit()"> Salvar</button>
                          <button class="btn btn-danger btn-cons" type="button"
                          				onclick="document.forms[0].reset()">Cancelar</button>
                        </div>


                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- END FORM -->
          </div>
        </div>
      </div>
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

<script type="text/javascript">

  $(function(){
    $('.textarea').htmlarea(); //$('.textarea').wysihtml5();
  });

</script>
</body>
</html>