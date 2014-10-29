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
<script type="text/javascript" src="includes/js/CriarComponentes.js"></script>
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
       $("input[id='ValorArray']").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
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
    <div class="page-content">
     
      
          
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="clearfix"></div>
            <div class="content">
              <div class="page-title"> 
                <h3>Cadastro - <span class="semi-bold">Novo Orçamento</span></h3>
              </div>
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border"></div>
                    <div class="grid-body no-border">
                    <form class="form-no-horizontal-spacing" id="formOrcamentoA" name="formOrcamentoA" method="POST" action="includes/php/CadastraOrcamentoA.php">
                      <div class="row column-seperation">
                        <div class="col-md-6">
                          <h4>Serviços</h4>
                          
                          <div class="row form-row">
                             <div class="col-md-12">
                             <label class="form-label">Razao Social</label>
                                <select name="SelectRazaoSocial" id="SelectRazaoSocial" class="select2 form-control"  >
                                      <?php 
                                       
                                        /********************************************************************************************/
                                        /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
                                        /*             Pega o id da oportunidade que foi enviado via POST                           */
                                        /********************************************************************************************/
                                        $IdOportunidade = $_POST['IdOportunidadeAux'];
                                        $buscar = new Conexao();
                                        $buscar->conectar();
                                        $buscar->selecionarDB();                      

                                        $buscar->set('sql',"SELECT RazaoSocial FROM Oportunidade
                                                                               WHERE IdOportunidade = $IdOportunidade ");
                                        $query= $buscar->executarQuery();
                                        while($retorno=mysql_fetch_array($query)) { 
                                        ?> 
                                        <option value="<?php echo $retorno['RazaoSocial'] ?>"> <?php echo $retorno['RazaoSocial'] ?>
                                        </option>
                     
                                      <?php } ?> 
                                </select>
                           </div>
                       </div>
                          
                  <div class="row form-row">
                     <div class="col-md-12">
                        <label class="form-label">Nome do Contato</label>
                        <select name="SelectNomeContato" id="SelectNomeContato" class="select2 form-control"  >
	                            <?php 
	                                /********************************************************************************************/
	                                /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
	                                /********************************************************************************************/
	                                 
	                                $buscar = new Conexao();
	                                $buscar->conectar();
	                                $buscar->selecionarDB(); 
	
	                                $buscar->set('sql',"SELECT NomeContato FROM Oportunidade
                                                                         WHERE IdOportunidade = $IdOportunidade");
	                                $query= $buscar->executarQuery();
	                                while($retorno=mysql_fetch_array($query)) { 
	                                 ?> 
	                                 <option value="<?php echo $retorno['NomeContato'] ?>"> <?php echo $retorno['NomeContato'] ?>
	                                 </option>
	             
	                              <?php } ?>
                            </select>
                      </div>
                  </div>
                          
                          
                 <div class="row form-row">
                     <div class="col-md-8">
                        <label class="form-label">Serviço 1</label>
                        <select name="SelectServico1" id="SelectServico1" class="select2 form-control"  >
                          <option value="Selecionar...">Selecionar...</option>
                         <?php 
                                  /********************************************************************************************/
                                  /*             Variáveis para inserção no banco de dados, Serviço                           */
                                  /********************************************************************************************/                                   
                                  $buscarServico1 = new Conexao();
                                  $buscarServico1->conectar();
                                  $buscarServico1->selecionarDB(); 
  
                                  $buscarServico1->set('sql',"SELECT IdServico, TituloServico FROM `Servicos`");
                                  $query= $buscarServico1->executarQuery();
                                  while($retornoServico1=mysql_fetch_array($query)) { 
                                   ?> 
                                   <option value="<?php echo $retornoServico1['IdServico'] ?>"> <?php echo $retornoServico1['TituloServico'] ?>
                                   </option>
               
                                <?php } ?>
                        </select>
                     </div>
                     <div class="col-md-4">
                        <label class="form-label">Valor</label>
                        <input name="Valor1" id="Valor1" type="text"  class="form-control" placeholder="R$ 8.000,00"  onkeypress="verificaNumerosCalculo();"
                            onblur="somarValoresOrcamentoA();">
                      </div>
                     
                 </div>
                          
                 <div class="row form-row">
                      <div class="col-md-8">
                        <label class="form-label">Serviço 2</label>
                        <select name="SelectServico2" id="SelectServico2" class="select2 form-control"  >
                          <option value="Selecionar...">Selecionar...</option>
                          <?php 
                                  /********************************************************************************************/
                                  /*             Variáveis para inserção no banco de dados, Serviço                           */
                                  /********************************************************************************************/                                   
                                  $buscarServico2 = new Conexao();
                                  $buscarServico2->conectar();
                                  $buscarServico2->selecionarDB(); 
  
                                  $buscarServico2->set('sql',"SELECT IdServico, TituloServico FROM `Servicos`");
                                  $query= $buscarServico2->executarQuery();
                                  while($retornoServico2=mysql_fetch_array($query)) { 
                                   ?> 
                                   <option value="<?php echo $retornoServico2['IdServico'] ?>"> <?php echo $retornoServico2['TituloServico'] ?>
                                   </option>
               
                                <?php } ?>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label class="form-label">Valor</label>
                        <input name="Valor2" id="Valor2"type="text"  class="form-control" placeholder="R$ 8.000,00"  onkeypress="verificaNumerosCalculo();"
                            onblur="somarValoresOrcamentoA();">
                      </div>
                     
                 </div>
                          
                 <div class="row form-row">
                     <div class="col-md-8">
                        <label class="form-label">Serviço 3</label>
                        <select name="SelectServico3" id="SelectServico3" class="select2 form-control"  >
                          <option value="Selecionar...">Selecionar...</option>
                              <?php 
                                  /********************************************************************************************/
                                  /*             Variáveis para inserção no banco de dados, Serviço                           */
                                  /********************************************************************************************/                                   
                                  $buscarServico3 = new Conexao();
                                  $buscarServico3->conectar();
                                  $buscarServico3->selecionarDB(); 
  
                                  $buscarServico3->set('sql',"SELECT IdServico, TituloServico FROM `Servicos` ");
                                  $query= $buscarServico3->executarQuery();
                                  while($retornoServico3=mysql_fetch_array($query)) { 
                                   ?> 
                                   <option value="<?php echo $retornoServico3['IdServico'] ?>"> <?php echo $retornoServico3['TituloServico'] ?>
                                   </option>
               
                                <?php } ?>
                        </select>
                     </div>
                       <div class="col-md-4">
                        <label class="form-label">Valor</label>
                        <input name="Valor3" id="Valor3" type="text"  class="form-control" placeholder="R$ 8.000,00"  onkeypress="verificaNumerosCalculo();"
                            onblur="somarValoresOrcamentoA();">
                      </div>
                     
                   </div>
                          
                  <div class="row form-row">
                      <div class="col-md-8">
                        <label class="form-label">Serviço 4</label>
                          <select name="SelectServico4" id="SelectServico4" class="select2 form-control"  >
                            <option value="Selecionar...">Selecionar...</option>
	                           <?php 
                                  /********************************************************************************************/
                                  /*             Variáveis para inserção no banco de dados, Serviço                           */
                                  /********************************************************************************************/                                   
                                  $buscarServico4 = new Conexao();
                                  $buscarServico4->conectar();
                                  $buscarServico4->selecionarDB(); 
  
                                  $buscarServico4->set('sql',"SELECT IdServico, TituloServico FROM `Servicos` ");
                                  $query= $buscarServico4->executarQuery();
                                  while($retornoServico4=mysql_fetch_array($query)) { 
                                   ?> 
                                   <option value="<?php echo $retornoServico4['IdServico'] ?>"> <?php echo $retornoServico4['TituloServico'] ?>
                                   </option>
               
                                <?php } ?>
                         </select>
                      </div>
                      <div class="col-md-4">
                        <label class="form-label">Valor</label>
                        <input name="Valor4" id="Valor4" type="text"  class="form-control" placeholder="R$ 8.000,00" onkeypress="verificaNumerosCalculo();"
                            onblur="somarValoresOrcamentoA();">
                      </div>
                     
                  </div>
                          
                          
                          
                          <!--INICIO CLONE -->
                           <script type="text/javascript">
                              function insereSelect() {
                               $('select[name="SelectServicoArray[]"]').children().remove();
                               $('select[name="SelectServicoArray[]"]').append('<option value="Selecionar...">Selecionar...</option>');
                                        <?php                                
                                          /********************************************************************************************/
                                          /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
                                          /********************************************************************************************/
                                           
                                          $buscarServicos = new Conexao();
                                          $buscarServicos->conectar();
                                          $buscarServicos->selecionarDB();                      

                                          $buscarServicos->set('sql',"SELECT `IdServico`,`TituloServico` FROM `Servicos` ");
                                          $query= $buscarServicos->executarQuery();
                                          while($retornoServicos=mysql_fetch_array($query)) { 
                                          ?> 
                                            $('select[name="SelectServicoArray[]"]').append('<option value="<?php echo $retornoServicos['IdServico'] ?>"><?php echo $retornoServicos['TituloServico'] ?></option>');           
                                        <?php } ?>     
                               }

                               function verificaServico2() {
                                var servico = document.getElementsByName('SelectServicoArray[]');
                                var valor = document.getElementsByName('ValorArray[]');
                                  for (var i in servico){
                                    if (servico[i].value == "Selecionar..." && valor[i].value != 0) {
                                      alert("Selecione um Serviço...");
                                      servico[i].focus();
                                      exit();
                                    }                                                                      
                                  }

                                  for (var j in valor){
                                    if (valor[j].value == 0 && servico[j].value != "Selecionar...") {
                                      alert("Selecione um Valor...");
                                      valor[j].focus();
                                      exit();
                                    }                                                                      
                                  }                           
                               }
                            </script>
                          <div class="row form-row" id="DivServicos2Origem">

                          </div>

                           <div class="row form-row" id="DivServicos2Destino">

                          </div>
                          <!--FIM CLONE-->
                          
                          
                                                   
                           <div class="row form-row">
                             <div class="col-md-8">
                            <button class="btn btn-primary btn-cons" type="button"
                            			onclick="criarCampoServicos2();insereSelect();mudaMascara();">Adicionar Serviço </button>
                      </div>
                     
                          </div>
                          
                      
                           <div class="row form-row">
                             <div class="col-md-8">
                             <label class="form-label">Taxas</label>
                        
                      </div>
                            <div class="col-md-4">
                            
                        <input name="Taxas" id="Taxas" type="text"  class="form-control" placeholder="R$ 1.000,00"  onkeypress="verificaNumerosCalculo();" onblur="somarValoresOrcamentoA();">
                        <input type="hidden" name="IdOportunidadeAux" name="IdOportunidadeAux" value="<?php echo $IdOportunidade;?>">
                      </div>
                     
                          </div>
                          
                          
                          
                            
                          
                          
                        </div>
                        <!-- MODELO FORMULARIO 2 COLUNAS 
                             
                    <div class="row form-row">
                      <div class="col-md-6">
                        <input name="1" id="1" type="text"  class="form-control" placeholder="Razão social">
                      </div>
                      <div class="col-md-6">
                        <input name="2" id="2" type="text"  class="form-control" placeholder="Nome Fantasia ">
                      </div>
                    </div>
                    
                     MODELO FORMULARIO 2 COLUNAS -->
                        <!--  MODELO FORMULARIO 1 COLUNA
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="1" id="1" type="text"  class="form-control" placeholder="Razão social">
                      </div> 
                     </div>
                  MODELO FORMULARIO 1 COLUNA -->
                        <div class="col-md-6">
                          <h4 >Complemento</h4>
                          
                          <div class="row form-row">
                            <div class="col-md-12">
                             <label class="form-label">Forma de Pagamento</label>
                             </div>
                             <div class="col-md-12">
							 <input name="FormaDePagamento" id="FormaDePagamento" 
							 		onblur="somarValoresOrcamentoA(); verificaServico2();" type="text"  class="form-control" placeholder="(ato, 30 e 60 dias) a vista 5% de desconto">
                            </div>
                            </div>
                          
							<div class="row form-row">
                            <div class="col-md-12">
                             <label class="form-label">Prazo</label>
                             </div>
                             <div class="col-md-12">
							 <input name="Prazo" id="Prazo"  type="text"  
							 			onblur="somarValoresOrcamentoA(); verificaServico2();"class="form-control" placeholder="90 dias após fechamento">
                            </div>
                            </div>
                          
                          <div class="row form-row">
                          <div class="col-md-12">
                             <label class="form-label"> Considerações</label>
                             
                           
                            <textarea name="ComentariosOrcamentoA" id="ComentariosOrcamentoA"  rows="3" class="col-lg-12"></textarea>
                              
                            </div>
                          </div>
                          
                          <div class="row form-row">
                            <div class="col-md-2">
                              <label class="form-label">TOTAL</label>
                            </div>
                            <div class="col-md-4">
                              <input type="text" placeholder="R$ 33.000,00"
                              		id="TotalOrcamentoA" name="TotalOrcamentoA" class="form-control" readonly = "true">
                            </div>
                            <div class="col-md-2">
                              <label class="form-label">DATA</label>
                            </div>
                            <div class="col-md-4">
                              <input type="text" placeholder="10/10/2015"
                                  id="DataOrcamentoA" name="DataOrcamentoA" class="form-control" readonly = "true" value="<?php echo date('d/m/Y');?>">
                            </div>
                            </div>
                            
                          
                      </div>
                      </div>
                      <div class="form-actions">
                        <div class="pull-left"></div>
                        <div class="pull-right">
                          <button class="btn btn-primary btn-cons" type="button"
                          			onclick="somarValoresOrcamentoA(); validaOrcamentoA();verificaServico2();document.formOrcamentoA.submit();">Salvar </button>
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