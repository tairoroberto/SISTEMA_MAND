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

<!-- Inclui o arquivos para validação de campos-->
<script type="text/javascript" src="includes/js/ValidaCampos.js"></script>

<!--Mascara para inputs-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="assets/plugins/jquery-mask/jquery.maskedinput.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-mask/jquery.mask.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.maskMoney.min.js"></script>

<script type="text/javascript">
  jQuery(function(){

   $("#Valor1").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
   $("#Valor2").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
   $("#Valor3").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
   $("#Valor4").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
   $("#Taxas").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
  });

   function mudaMascara(){
       $("input[id='ValorArray[]']").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
  }

</script>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body onload="mudaMascara();">
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
         <div class="clearfix"></div>
            <div class="content">
              <div class="page-title"> 
                <h3>Negociar - <span class="semi-bold"> Orçamento</span></h3>
              </div>
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border"></div>
                    <div class="grid-body no-border">
                    <form class="form-no-horizontal-spacing" id="forOrcamentoBCadastro" name="forOrcamentoBCadastro" method="POST"
                                          action="includes/php/NegociarOrcamentoB.php">
                       <?php 
                                  /********************************************************************************************/
                                  /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
                                  /********************************************************************************************/
                                   
                                  $buscaOportunidade = new Conexao();
                                  $buscaOportunidade->conectar();
                                  $buscaOportunidade->selecionarDB(); 
                                  $IdOportunidade = $_POST['IdOportunidadeAux'];

                                  $buscaOportunidade->set('sql',"SELECT CadastraOrcamentoB.*, Oportunidade.* 
                                                                 FROM Oportunidade
                                                                 INNER JOIN CadastraOrcamentoB
                                                                 ON CadastraOrcamentoB.IdOportunidade = $IdOportunidade AND 
                                                                    Oportunidade.IdOportunidade = $IdOportunidade ");

                                 $retornoOportunidade = mysql_fetch_object($buscaOportunidade->executarQuery()); ?>


                      <div class="row column-seperation">
                        <div class="col-md-6">
                          <h4>Serviçcos</h4>                          

                             <?php                     
                                /**********************************************************************************************/
                                /*   Variáveis para a busca no banco, retorna os dados da oportunidade castradas             */
                                /********************************************************************************************/                 
                                    $buscarServicosOrcamentoB = new Conexao();
                                    $buscarServicosOrcamentoB->conectar();
                                    $buscarServicosOrcamentoB->selecionarDB(); 
                                    $cont = 1;
                                                                            
                                    $buscarServicosOrcamentoB->set('sql',"SELECT OrcamentoBServicos.*,Servicos.* 
                                                                          FROM Servicos
                                                                          INNER JOIN OrcamentoBServicos                                                                                  
                                                                          ON OrcamentoBServicos.IdOrcamentoB = $retornoOportunidade->IdOrcamentoB AND 
                                                                             OrcamentoBServicos.IdOportunidade  = $IdOportunidade AND 
                                                                             OrcamentoBServicos.IdServico = Servicos.IdServico
                                                                          GROUP BY IdOrcamentoBServico"); 
                                                     
                                    $query= $buscarServicosOrcamentoB->executarQuery();
                                    while($retornoServicosOrcamentoB = mysql_fetch_object($query)) { ?> 

                                        <div class="row form-row">

                                        <!--Campo auxiliar para IdServico-->
                                        <input type="hidden" name="IdServicoArray[]" id="IdServicoArray[]" value="<?php echo $retornoServicosOrcamentoB->IdOrcamentoBServico; ?>">
                                           <div class="col-md-8">
                                              <label class="form-label">Serviço <?php echo $cont; ?></label>
                                                <input type="text" name="Servico[]" id="Servico[]" 
                                                        readonly="true" value="<?php echo $retornoServicosOrcamentoB->TituloServico; ?>" >
                                                <input type="hidden" name="ServicoArray[]" id="ServicoArray[]" value="<?php echo $retornoServicosOrcamentoB->IdServico; ?>">
                                           </div>
                                           <div class="col-md-4">
                                                <label class="form-label">Valor</label>
                                                <input name="ValorArray[]" id="ValorArray[]" type="text"  class="form-control" value="<?php echo $retornoServicosOrcamentoB->Valor; ?>" 
                                                      onblur="somarValoresOrcamentoB();" onkeypress="verificaNumerosCalculo();">                                                
                                            </div>                     
                                        </div>
                                  <?php $cont++; } ?>






                      
                           <div class="row form-row">
                             <div class="col-md-8">
                                <label class="form-label">Taxas</label>                        
                            </div>
                            <div class="col-md-4">
                                <input name="Taxas" id="Taxas" type="text"  class="form-control" value="<?php echo $retornoOportunidade->Taxas;?>"
                                    onblur="somarValoresOrcamentoB();">
                            </div>                     
                          </div>
                          
                          
                          <div class="row form-row">
                            <div class="col-md-8">
                              <label class="form-label">TOTAL</label>
                            </div>
                            <div class="col-md-4">
                              <input  id="TotalOrcamentoB" name ="TotalOrcamentoB" type="text" class="form-control" value="<?php echo $retornoOportunidade->TotalOrcamentoB;?>" readonly="true">
                              <input type="hidden" name="TotalServicos" id="TotalServicos">
                            </div>
                            </div>
                            
                        </div>
                        
                  <!--MODELO FORMULARIO 1 COLUNA -->
                          <div class="col-md-6">
                            <h4>Complemento</h4>
                            <div class="row form-row">
                              <div class="col-md-12">
                                <input name="RazaoSocialOrcamentoB" id="RazaoSocialOrcamentoB" type="text"  class="form-control" value="<?php echo $retornoOportunidade->RazaoSocial;?>" readonly="true">
                              </div>
                            </div>
                            <div class="row form-row">
                              <div class="col-md-12">
                                <input name="NomeContatoOrcamantoB" id="NomeContatoOrcamantoB" type="text"  class="form-control" value="<?php echo $retornoOportunidade->NomeContato;?>" readonly="true">
                              </div>
                            </div>


                            <div class="row form-row">
                               <div class="col-md-12">
                                   <label class="form-label">Forma de Pagamento</label>
                               </div>
                               <div class="col-md-12">
                                   <input name="FormaPagamentoOrcamnetoB" id="FormaPagamentoOrcamnetoB" type="text"  
                                       onmouseover="somarValoresOrcamentoB();" class="form-control" value="<?php echo $retornoOportunidade->FormaPagamento;?>">
                               </div>
                            </div>
                          


                            <div class="row form-row">
                               <div class="col-md-12">
                                   <label class="form-label">Prazo</label>
                               </div>
                               <div class="col-md-8">
                                   <input name="PrazoOrcamantoB" id="PrazoOrcamantoB" type="text"  class="form-control" 
                                          onmouseover="somarValoresOrcamentoB();" value="<?php echo $retornoOportunidade->Prazo;?>">
                               </div>
                                <div class="col-md-4">
                                          <input name="DataOrcamentoB" id="DataOrcamentoB" type="text"  class="form-control" 
                                          onmouseover="somarValoresOrcamentoB();" value="<?php echo $retornoOportunidade->DataOrcamentoB;?>" readonly="true">
                               </div>
                            </div>
                          


                         <div class="row form-row">
                             <div class="col-md-12">
                                 <label class="form-label"> Considerações</label>
                             </div>                           
                            <div class="col-md-12">
                                <textarea name="ConmentariosOrcamentoB" id="ConmentariosOrcamentoB" rows="3" class="col-lg-12" > <?php echo $retornoOportunidade->ComentariosOrcamento;?> </textarea>                              
                            </div>
                          </div>
                          <!--Auxiliares que recebem os valores que serão enviados para para serem inseridos no banco-->                          
                          <input type="hidden" name="IdOrcamentoBAux" id="IdOrcamentoBAux" value="<?php echo $retornoOportunidade->IdOrcamentoB;?>">
                          <input type="hidden" name="IdOportunidadeAux" id="IdOportunidadeAux" value="<?php echo $retornoOportunidade->IdOportunidade;?>">                          
                      </div>
                    </div>


                      <div class="form-actions">
                        <div class="pull-left"></div>
                        <div class="pull-right">
                          <button class="btn btn-primary btn-cons" type="button" onclick="somarValoresOrcamentoB();document.forms[0].submit();">Enviar para cliente</button>
                          <a href="orcamento-lista"><button class="btn btn-danger btn-cons" type="button">Cancelar</button></a>
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