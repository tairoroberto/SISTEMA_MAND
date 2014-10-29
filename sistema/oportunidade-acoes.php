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
<!-- BEGIN PLUGIN CSS -->
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/ios-switch/ios7-switch.css" rel="stylesheet" type="text/css" media="screen">
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
<script type="text/javascript">
  function validarAcoesOportunidade(){
      if (formOportunidadeAcoes.SelectStatusOportunidade.value == "Selecionar") {
          alert("Selecione a ação");
          formOportunidadeAcoes.SelectStatusOportunidade.focus();
          exit();
      }
  }

</script>
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
  </div>
  </div>
  <a href="#" class="scrollup">Subir</a>
   
  <!-- END SIDEBAR -->   <div class="page-content">
     
      
          
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="clearfix"></div>
            <div class="content">
              <div class="page-title"> 
                <h3>Ações - <span class="semi-bold">Oportunidade</span></h3>
              </div>
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border"></div>
                    <div class="grid-body no-border">
                    <form class="form-no-horizontal-spacing" id="formOportunidadeAcoes" name="formOportunidadeAcoes"
                                  method="POST" action="includes/php/AtualizaOportunidade.php">
                      <div class="row column-seperation">
                       

                       <!--Inicio da primeira coluna-->
                        <div class="col-md-6">
                        <table class="table no-more-tables">
                                        <thead>
                                            <tr>
                                                
                                                <th style="width:20%">Data</th>
                                                <th style="width:40%">Tipo de alteração</th>
                                                <th style="width:40%">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                          <h4>Historico</h4>
                               <?php                     
                                  /**********************************************************************************************/
                                  /*   Variáveis para a busca no banco, retorna os dados da oportunidade castradas             */
                                  /********************************************************************************************/   
                                       $IdOportunidade = $_POST['IdOportunidadeAux'];              
                                       $buscarHistoricoOportunidade = new Conexao();
                                       $buscarHistoricoOportunidade->conectar();
                                       $buscarHistoricoOportunidade->selecionarDB(); 
                                                                            
                                       $buscarHistoricoOportunidade->set('sql',"SELECT * FROM HistoricoOportunidade                                                                                  
                                                                                WHERE IdOportunidade = '$IdOportunidade '
                                                                                GROUP BY IdHistoricoOprtunidade");
                                                     
                                       $query= $buscarHistoricoOportunidade->executarQuery();
                                       while($retornoHistoricoOportunidade = mysql_fetch_object($query)) { ?> 
                                          <tr>
                                            <td><label class="form-label"><?php echo $retornoHistoricoOportunidade->DataHistoricoOportunidade;?></label></td>
                                            <td align="center"><label class="form-label"><?php echo $retornoHistoricoOportunidade->TipoHistoricoOportunidade;?></label></td>
                                            <td><label class="form-label">Status: <?php echo $retornoHistoricoOportunidade->Status;?></label></td>

                                          </tr>
                                   <?php } ?>  
                               </tbody>
                          </table>                              
                      </div>

               <!--  MODELO FORMULARIO 1 COLUNA -->
                     <div class="col-md-6">
                         <h4>Nova Ação</h4>
                          
                           <div class="row form-row">
                             <div class="col-md-8">
                             <label class="form-label">Ação</label>
                                <select name="SelectStatusOportunidade" id="SelectStatusOportunidade" class="select2 form-control"  >
                                  <option value="Selecionar">Selecionar</option>
                                  <option value="Viável">Gerar orçamento</option>
                                  <option value="Inviavel">Inviavel</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                            <label class="form-label">Data</label>
                            <input id="DataViabilidade" name="DataViabilidade" type="text" class="form-control" readonly="true" value="<?php echo date('d/m/Y');?>">

                            <!--Auxiliares para envia do form -->
                            <input type="hidden" id="IdOportunidadeAux" name="IdOportunidadeAux" value="<?php echo $_POST['IdOportunidadeAux'];?>">
                            <input type="hidden" id="IdSolicitacaoAux" name="IdSolicitacaoAux" value="<?php echo $_POST['IdSolicitacaoAux'];?>">
                        
                          </div>                     
                          </div>
                      </div>


                      </div>
                      <div class="form-actions">
                        <div class="pull-left"></div>
                        <div class="pull-right">
                          <button class="btn btn-primary btn-cons" type="button" onclick="validarAcoesOportunidade();document.forms[0].submit();">Enviar </button>
                          <button class="btn btn-danger btn-cons" type="button" onclick="document.forms[0].submit();">Cancelar</button>
                        </div>
                      </div>
                    
                  </div>
                </div>
              </div>
            </div>
            </form>
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
<script src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js" type="text/javascript"></script>
<script src="assets/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="assets/js/form_elements.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- END JAVASCRIPTS -->
</body>
</html>