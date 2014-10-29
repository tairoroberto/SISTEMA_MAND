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
<link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
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
  jQuery(function($){

   $("#DataInicio").mask("99/99/9999");
   $("#DataEntrega").mask("99/99/9999");
   $("#DataEntregaTarefa1").mask("99/99/9999");
   $("#DataEntregaTarefa2").mask("99/99/9999");
   $("#DataEntregaTarefa3").mask("99/99/9999");
   $("#DataEntregaTarefa4").mask("99/99/9999");

});

  function mascaraData(){
    $("input[id='DataEntragaArray[]']").mask("99/99/9999");
  }

</script>

<script type="text/javascript">

     function CalculaDiferencaDias(){

       data1 = document.getElementById('DataInicio').value;
       data2 = document.getElementById('DataEntrega').value;

       $.ajax({
             
            type: "POST",
            data: { data1:data1, data2:data2 },
             
            url: "verData.php",
            dataType: "html",
            success: function(result){
                $("#labelTotal").html('');
                $("#labelTotal").append(result);
            }
        });
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
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
     
      <form name="formTarefas" id="formTarefas" method="POST" action="includes/php/CadastraTarefas.php">
          
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="clearfix"></div>
            <div class="content">
              <div class="page-title"> 
                <h3>Cadastro - <span class="semi-bold">Projeto</span></h3>
              </div>
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-24">
                  <div class="grid simple">
                    <div class="grid-body no-border">
                   
                     
   
                       <div class="row form-row">
                       <br>
                            <div class="col-md-3">
                              <select id="SelectHolding" name="SelectHolding" style="width:100%" >
                   
                    <option value="Holding">Holding</option>
                           <?php                                
                                /********************************************************************************************/
                                /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
                                /********************************************************************************************/
                                 
                                $buscarHolding = new Conexao();
                                $buscarHolding->conectar();
                                $buscarHolding->selecionarDB();                      

                                $buscarHolding->set('sql',"SELECT `IdEmpresa`,`RazaoSocial` FROM `CadastroHolding` ");
                                $query= $buscarHolding->executarQuery();
                                while($retornoHolding=mysql_fetch_array($query)) { 
                                ?> 
                                <option value="<?php echo $retornoHolding['IdEmpresa'] ?>"> <?php echo $retornoHolding['RazaoSocial'] ?>
                                </option>
             
                              <?php } ?> 

                  
                  </select>
                            </div>
                            <div class="col-md-3">
                              <select id="SelectRequerente" name="SelectRequerente" style="width:100%">
                   
                    <option value="Requerente">Requerente</option>
                              <?php                                
                                /********************************************************************************************/
                                /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
                                /********************************************************************************************/
                                 
                                $buscarRequerente = new Conexao();
                                $buscarRequerente->conectar();
                                $buscarRequerente->selecionarDB();                      

                                $buscarRequerente->set('sql',"SELECT `IdRequerente`,`Nome` FROM `CadastroRequerente` ");
                                $query= $buscarRequerente->executarQuery();
                                while($retornoRequerente=mysql_fetch_array($query)) { 
                                ?> 
                                <option value="<?php echo $retornoRequerente['IdRequerente'] ?>"> <?php echo $retornoRequerente['Nome'] ?>
                                </option>
             
                              <?php } ?> 

                  
                  </select>
                            </div>
                            <div class="col-md-2">
                              <select id="SelectSql" name="SelectSql" style="width:100%">
                   
                    <option value="SQL">SQL</option>
                             <?php                                
                                /********************************************************************************************/
                                /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
                                /********************************************************************************************/
                                 
                                $buscarImovel = new Conexao();
                                $buscarImovel->conectar();
                                $buscarImovel->selecionarDB();                      

                                $buscarImovel->set('sql',"SELECT `IdImovel`,`NumeroContribuinte` FROM `CadastraImovel` ");
                                $query= $buscarImovel->executarQuery();
                                while($retornoImovel=mysql_fetch_array($query)) { 
                                ?> 
                                <option value="<?php echo $retornoImovel['IdImovel'] ?>"> <?php echo $retornoImovel['NumeroContribuinte'] ?>
                                </option>
             
                              <?php } ?> 
                  
                    </select>
            </div>

                        <div class="col-md-2">                        
                                <input name="DataInicio" id="DataInicio" type="text"  class="form-control  date" placeholder="Data de Inicio ">
                           
                        </div>

                        <div class="col-md-2">                            
                                <input name="DataEntrega" id="DataEntrega" type="text"  class="form-control  date" placeholder="Data de Entrega " onblur="CalculaDiferencaDias();" onmouseout="CalculaDiferencaDias();">
                            
                        </div>
                            
                   </div>
                    
                    
                    
                    
                    <div class="row form-row">
                      
                      <div class="col-md-3">
                        <input name="NomeProjeto" id="NomeProjeto" type="text"  class="form-control" placeholder="Nome do Projeto " onblur="CalculaDiferencaDias();">
                      </div>
                      <div class="col-md-9">
                        <input name="DescricaoProjeto" id="DescricaoProjeto" type="text"  class="form-control" placeholder="Descrição " onblur="CalculaDiferencaDias();">
                      </div>
                    </div>
                   
                   <div class="row form-row">
                    <div class="col-md-12">
                     <h4>Etapa 1 </h4>
                    </div>
                    </div>
                    
                    <div class="row form-row">
                    <div class="col-md-2">
                        <select id="SelectResponsavel1" name="SelectResponsavel1" style="width:100%" onchange="CalculaDiferencaDias();">
                   
                    <option value="Responsável">Responsável</option>
                             <?php                                
                                /********************************************************************************************/
                                /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
                                /********************************************************************************************/
                                 
                                $buscarUsuario = new Conexao();
                                $buscarUsuario->conectar();
                                $buscarUsuario->selecionarDB();                      

                                $buscarUsuario->set('sql',"SELECT `IdUsuario`,`NomeExibicao` FROM `Usuarios` 
                                                           WHERE TipoUsuario = 'Administrador' OR 
                                                                 TipoUsuario =  'Funcionario' ");
                                $query= $buscarUsuario->executarQuery();
                                while($retornorUsuario=mysql_fetch_array($query)) { 
                                ?> 
                                <option value="<?php echo $retornorUsuario['IdUsuario'] ?>"> <?php echo $retornorUsuario['NomeExibicao'] ?>
                                </option>
             
                              <?php } ?> 

                  
                  </select>
                      </div>
                      
                      <div class="col-md-2">
                        <input name="TituloTarefa1" id="TituloTarefa1" type="text"  class="form-control" placeholder="Titulo ">
                      </div>
                      <div class="col-md-6">
                        <input name="DescricaoTarefa1" id="DescricaoTarefa1" type="text"  class="form-control" placeholder="Descrição ">
                      </div>
                      <div class="col-md-2">
                        <input name="DataEntregaTarefa1" id="DataEntregaTarefa1" type="text"  class="form-control" placeholder="Data entrega " onblur="CalculaDiferencaDias();" onmouseout="CalculaDiferencaDias();">
                      </div>
                      
                    </div>
                    
                    
                    
                     <div class="row form-row">
                    <div class="col-md-12">
                     <h4>Etapa 2 </h4>
                    </div>
                    </div>
                    
                    <div class="row form-row">
                    <div class="col-md-2">
                        <select id="SelectResponsavel2" name="SelectResponsavel2" style="width:100%">
                   
                    <option value="Responsável">Responsável</option>
                           <?php                                
                                /********************************************************************************************/
                                /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
                                /********************************************************************************************/
                                 
                                $buscarUsuario = new Conexao();
                                $buscarUsuario->conectar();
                                $buscarUsuario->selecionarDB();                      

                                $buscarUsuario->set('sql',"SELECT `IdUsuario`,`NomeExibicao` FROM `Usuarios` 
                                                           WHERE TipoUsuario = 'Administrador' OR 
                                                                 TipoUsuario =  'Funcionario' ");
                                $query= $buscarUsuario->executarQuery();
                                while($retornorUsuario=mysql_fetch_array($query)) { 
                                ?> 
                                <option value="<?php echo $retornorUsuario['IdUsuario'] ?>"> <?php echo $retornorUsuario['NomeExibicao'] ?>
                                </option>
             
                              <?php } ?> 

                  
                  </select>
                      </div>
                      
                      <div class="col-md-2">
                        <input name="TituloTarefa2" id="TituloTarefa2" type="text"  class="form-control" placeholder="Titulo ">
                      </div>
                      <div class="col-md-6">
                        <input name="DescricaoTarefa2" id="DescricaoTarefa2" type="text"  class="form-control" placeholder="Descrição ">
                      </div>
                      <div class="col-md-2">
                        <input name="DataEntregaTarefa2" id="DataEntregaTarefa2" type="text"  class="form-control" placeholder="Data entrega ">
                      </div>
                      
                    </div>
                    


                     <div class="row form-row">
                    <div class="col-md-12">
                     <h4>Etapa 3 </h4>
                    </div>
                    </div>
                    
                    <div class="row form-row">
                    <div class="col-md-2">
                        <select id="SelectResponsavel3" name="SelectResponsavel3" style="width:100%">
                   
                    <option value="Responsável">Responsável</option>
                           <?php                                
                                /********************************************************************************************/
                                /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
                                /********************************************************************************************/
                                 
                                $buscarUsuario = new Conexao();
                                $buscarUsuario->conectar();
                                $buscarUsuario->selecionarDB();                      

                                $buscarUsuario->set('sql',"SELECT `IdUsuario`,`NomeExibicao` FROM `Usuarios` 
                                                           WHERE TipoUsuario = 'Administrador' OR 
                                                                 TipoUsuario =  'Funcionario' ");
                                $query= $buscarUsuario->executarQuery();
                                while($retornorUsuario=mysql_fetch_array($query)) { 
                                ?> 
                                <option value="<?php echo $retornorUsuario['IdUsuario'] ?>"> <?php echo $retornorUsuario['NomeExibicao'] ?>
                                </option>
             
                              <?php } ?> 

                  
                  </select>
                      </div>
                      
                      <div class="col-md-2">
                        <input name="TituloTarefa3" id="TituloTarefa3" type="text"  class="form-control" placeholder="Titulo ">
                      </div>
                      <div class="col-md-6">
                        <input name="DescricaoTarefa3" id="DescricaoTarefa3" type="text"  class="form-control" placeholder="Descrição ">
                      </div>
                      <div class="col-md-2">
                        <input name="DataEntregaTarefa3" id="DataEntregaTarefa3" type="text"  class="form-control" placeholder="Data entrega ">
                      </div>
                      
                    </div>



                     <div class="row form-row">
                    <div class="col-md-12">
                     <h4>Etapa 4 </h4>
                    </div>
                    </div>
                    
                    <div class="row form-row">
                    <div class="col-md-2">
                        <select id="SelectResponsavel4" name="SelectResponsavel4" style="width:100%">
                   
                    <option value="Responsável">Responsável</option>
                           <?php                                
                                /********************************************************************************************/
                                /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
                                /********************************************************************************************/
                                 
                                $buscarUsuario = new Conexao();
                                $buscarUsuario->conectar();
                                $buscarUsuario->selecionarDB();                      

                                $buscarUsuario->set('sql',"SELECT `IdUsuario`,`NomeExibicao` FROM `Usuarios` 
                                                           WHERE TipoUsuario = 'Administrador' OR 
                                                                 TipoUsuario =  'Funcionario' ");
                                $query= $buscarUsuario->executarQuery();
                                while($retornorUsuario=mysql_fetch_array($query)) { 
                                ?> 
                                <option value="<?php echo $retornorUsuario['IdUsuario'] ?>"> <?php echo $retornorUsuario['NomeExibicao'] ?>
                                </option>
             
                              <?php } ?> 

                  
                  </select>
                      </div>
                      
                      <div class="col-md-2">
                        <input name="TituloTarefa4" id="TituloTarefa4" type="text"  class="form-control" placeholder="Titulo ">
                      </div>
                      <div class="col-md-6">
                        <input name="DescricaoTarefa4" id="DescricaoTarefa4" type="text"  class="form-control" placeholder="Descrição ">
                      </div>
                      <div class="col-md-2">
                        <input name="DataEntregaTarefa4" id="DataEntregaTarefa4" type="text"  class="form-control" placeholder="Data entrega ">
                      </div>
                      
                    </div>

                    <!--INICIO DO CLONE DE TAREFAS-->

                    <script type="text/javascript">
                    function insereSelect() {
                     $('select[name="SelectUsuarioArray[]"]').children().remove();
                     $('select[name="SelectUsuarioArray[]"]').append('<option value="Responsável">Responsável</option>');
                              <?php                                
                                /********************************************************************************************/
                                /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
                                /********************************************************************************************/
                                 
                                $buscarUsuario = new Conexao();
                                $buscarUsuario->conectar();
                                $buscarUsuario->selecionarDB();                      

                                $buscarUsuario->set('sql',"SELECT `IdUsuario`,`NomeExibicao` FROM `Usuarios` 
                                                           WHERE TipoUsuario = 'Administrador' OR 
                                                                 TipoUsuario =  'Funcionario' ");
                                $query= $buscarUsuario->executarQuery();
                                while($retornorUsuario=mysql_fetch_array($query)) { 
                                ?> 
                                  $('select[name="SelectUsuarioArray[]"]').append('<option value="<?php echo $retornorUsuario['IdUsuario'] ?>"><?php echo $retornorUsuario['NomeExibicao'] ?></option>');           
                              <?php } ?>     
                     }


                     function verificaTarefa() {
                                var etapa = document.getElementsByName('SelectUsuarioArray[]');
                                var titulo = document.getElementsByName('TituloArray[]');
                                  for (var i in etapa){
                                    if (etapa[i].value == "Responsável" && titulo[i].value != "") {
                                      alert("Selecione um Responsável");
                                      etapa[i].focus();
                                      exit();
                                    }                                                                      
                                  }

                                  for (var j in titulo){
                                    if (titulo[j].value == "" && etapa[j].value != "Responsável") {
                                      alert("Selecione um Titulo...");
                                      titulo[j].focus();
                                      exit();
                                    }                                                                      
                                  }                           
                               }
                  </script>

                          <div name="DivTarefasOrigem" id="DivTarefasOrigem">

                          </div>

                          <div name="DivTarefasDestino" id="DivTarefasDestino" >

                          </div>
                    
                   <!--FIM DO CLONE DE TAREFAS-->


                    
                     <div class="row form-row">
                    <div class="col-md-10">
                    <h4>Dias restantes: <label id="labelTotal"></label></h4>
                    </div>
                    <div class="col-md-2">
                     <button class="btn btn-primary btn-cons" id="btnAdicionar" type="button" onclick="criarCampoTarefa();insereSelect();mascaraData();">Adicionar Etapa </button>
                    </div>
                    </div>
                    
                   </div>
                          
                        </div>
                                               
                            </div>
                          </div>
                                             
                      </div>
                      <div class="form-actions">
                        <div class="pull-left"></div>
                        <div class="pull-right">
                          <button class="btn btn-primary btn-cons" type="button"
                                    onclick="validaTarefa();verificaTarefa();document.formTarefas.submit();">Salvar </button>
                          
                          <button class="btn btn-danger btn-cons" type="button">Cancelar</button>
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
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS --> 	

<!-- BEGIN CORE TEMPLATE JS --> 
<script src="assets/js/core.js" type="text/javascript"></script> 
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS --> 
<script type="text/javascript">
  $(document).ready(function () {
              
             $('#DataInicio').datepicker({
                    format: "dd/mm/yyyy"
                }); 

            $('#DataEntrega').datepicker({
                    format: "dd/mm/yyyy"
                }); 

            $('#DataEntregaTarefa1').datepicker({
                    format: "dd/mm/yyyy"
                }); 

            $('#DataEntregaTarefa2').datepicker({
                    format: "dd/mm/yyyy"
                });
            $('#DataEntregaTarefa3').datepicker({
                    format: "dd/mm/yyyy"
                }); 

            $('#DataEntregaTarefa4').datepicker({
                    format: "dd/mm/yyyy"
                });
            });

  $('#btnAdicionar').click(function(){

     $('.date').datepicker({
                    format: "dd/mm/yyyy"
                });
     $('#DataInicio').datepicker({
                    format: "dd/mm/yyyy"
                }); 

            $('#DataEntrega').datepicker({
                    format: "dd/mm/yyyy"
                }); 

            $('#DataEntregaTarefa1').datepicker({
                    format: "dd/mm/yyyy"
                }); 

            $('#DataEntregaTarefa2').datepicker({
                    format: "dd/mm/yyyy"
                });
            $('#DataEntregaTarefa3').datepicker({
                    format: "dd/mm/yyyy"
                }); 

            $('#DataEntregaTarefa4').datepicker({
                    format: "dd/mm/yyyy"
                });
                       
  });

</script>


</body>
</html>