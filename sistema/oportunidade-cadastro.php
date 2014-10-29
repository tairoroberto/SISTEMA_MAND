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



<script type="text/javascript">
  jQuery(function(){
   $("#Celular").mask("(99) 9999-99999");
   $("#Telefone").mask("(99) 9999-9999");
  });
  function mudaMascaraCnpj(){
    if (formOportunidade.TipoCadastro.value == "Pessoa Juridica") {
     $("#CnpjCpf").mask("99.999.999/9999-99");
   }else{    
    $("#CnpjCpf").mask("999.999.999-99");   
   }

  }

</script>

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body onload="mudaMascaraCnpj();">
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
                <h3>Cadastro - <span class="semi-bold">Nova Oportunidade</span></h3>
              </div>
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border"></div>
                    <div class="grid-body no-border">
                    <form class="form-no-horizontal-spacing" id="formOportunidade" method="Post"
                          action="includes/php/CadastraOportunidade.php">
                      <div class="row column-seperation">
                        <div class="col-md-6">
                          <h4>Cadastro Contato</h4>
                          
                          <div class="row form-row">
                             <div class="col-md-4">
                             <label class="form-label">Tipo</label>
                        <select name="TipoContato" id="TipoContato" class="select2 form-control"  >
                        <option value="Selecionar">Selecionar</option>
                          <option value="Novo Cliente">Novo Cliente</option>
                          <option value="Cliente existente">Cliente existente</option>
                          <option value="Renovação">Renovação</option>
                        </select>
                      </div>
                            <div class="col-md-4">
                            <label class="form-label">Origem</label>
                        <select name="Origem" id="Origem" class="select2 form-control"  >
                          <option value="Selecionar">Selecionar</option>
                          <option value="Prospecção">Prospecção</option>
                          <option value="Indicação">Indicação</option>
                          <option value="Site">Site</option>
                          <option value="Outro">Outro</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                      <label class="form-label">Cadastro</label>
                        <select name="TipoCadastro" id="TipoCadastro" class="select2 form-control"  onchange="mudaPlaceHolderOportunidade();mudaMascaraCnpj();">
                          <option value="Pessoa Juridica">Pessoa Juridica</option>
                          <option value="Pessoa Fisica">Pessoa Fisica</option>                          
                        </select>
                      </div>
                          </div>
                          
                          
                          <div class="row form-row">
                            <div class="col-md-12">
                              <input name="RazaoSocial" id="RazaoSocial" type="text"  
                              			onblur="setDataOportunidadeA();"class="form-control" placeholder="Razão social">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-7">
                              <input name="NomeContato" id="NomeContato"  type="text"  class="form-control" placeholder="Nome do contato">
                            </div>
                            <div class="col-md-5">
                              <input name="CnpjCpf" id="CnpjCpf"  type="text"  class="form-control" placeholder="CNPJ" onkeypress="verificaNumeros();">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-12">
                              <input name="Atividade" id="Atividade" type="text"  class="form-control" placeholder="Atividade">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-6">
                              <input name="Celular" id="Celular" type="text" 
                              		onkeypress="return verificaNumeros();"  class="form-control" placeholder="Celular">
                            </div>
                            <div class="col-md-6">
                              <input name="Telefone" id="Telefone"  type="text" 
                              		onkeypress="return verificaNumeros();" class="form-control" placeholder="Telefone">
                            </div>
                          </div>
                          
                          <div class="row form-row">
                            <div class="col-md-12">
                              <input name="Email" id="Email" type="text"  class="form-control" placeholder="E-mail">
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
                          <h4>Solicitação</h4>
                          <div class="row form-row">
                            <div class="col-md-12">
                              <p>
                                <label class="form-label">Serviços Solicitados</label>
                             	<input type="text"  class="form-control" name="ServicoSolicitado" id="ServicoSolicitado" />
                              </p>
                              
                            </div>
                          </div>
                                                    <div class="row form-row">
                            <div class="col-md-12">
							 <input name="EnderecoArea" id="EnderecoArea" type="text"  class="form-control" placeholder="Endereço">
                            </div>
                            
                          </div>
                          <div class="row form-row">
                            <div class="col-md-12">
							 <input name="ContribuinteIptu" id="ContribuinteIptu" type="text"  class="form-control" placeholder="Contribuinte / IPTU">
                            </div>
                            
                          </div>

                          <div class="row form-row">
                            <div class="col-md-12">
                            <textarea name="ComentariosSolicitacao" id="ComentariosSolicitacao"  rows="3" class="col-lg-12"> Comentários</textarea>
                              
                            </div>
                          </div>
                          <div class="row form-row">
                          <div class="col-md-3" align="right">
								<input type="text" placeholder="20/06/2014" class="form-control" 
										id="DataSolicitacao" name="DataSolicitacao" readonly="true">
                            </div>
                             <div class="col-md-4" align="right">
                            <select name="SelectTecnico" id="SelectTecnico" class="select2 form-control"  >
                          <option value="Selecionar Técnico">Selecionar Técnico</option>
                   <?php
                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/
                     
                        $buscar = new Conexao();
                        $buscar->conectar();
                        $buscar->selecionarDB();                      

                       $buscar->set('sql',"SELECT IdUsuario,NomeExibicao FROM `Usuarios` 
                                                                         WHERE TipoUsuario = 'Funcionario'");
                       
                        $query= $buscar->executarQuery();
                       while($retorno=mysql_fetch_array($query)) { 
                      ?> 
                        <option value="<?php echo $retorno['IdUsuario'] ?>"> <?php echo $retorno['NomeExibicao'] ?>
                        </option>
 
                      <?php } ?>
                          
                        </select>
                        </div>
                            </div>
                      </div>
                      </div>
                      <div class="form-actions">
                        <div class="pull-left"></div>
                        <div class="pull-right">
                          <button class="btn btn-primary btn-cons" type="button"
                          			 onclick="validaOportunidade(); document.forms[0].submit()">Salvar </button>
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