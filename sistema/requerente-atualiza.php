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
<script src="includes/Cep/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="includes/Cep/jquery.maskedinput-1.3.min.js" type="text/javascript"></script>
<script src="includes/Cep/BuscaCep.js" type="text/javascript"></script>
<script type="text/javascript" src="includes/js/ValidaCampos.js"></script>

<!--Mascara para inputs-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="assets/plugins/jquery-mask/jquery.maskedinput.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-mask/jquery.mask.js"></script>



<script type="text/javascript">
  jQuery(function($){

   $("#RgRequerente").mask("999.999.999.9999");
   $("#CpfRequerente").mask("999.999.999-99");
   $("#CepRequerente").mask("99.999-999");
   $("#TelefoneRequerente1").mask("(99) 999-99999");
   $("#TelefoneRequerente2").mask("(99) 999-99999");
   $("#CelularRequerente").mask("(99) 9999-99999");

});

  function enviaformRequerenteAtualiza(acao){
    if (acao == "Atualizar") {
      formRequerenteAtualiza.action = "includes/php/AtualizaRequerente.php";
      formRequerenteAtualiza.submit();
    }else{
      formRequerenteAtualiza.action = "includes/php/ExcluirRequerente.php";
      formRequerenteAtualiza.submit();
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
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">

  <?php 
                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/
                     
                        $buscarRequerente = new Conexao();
                        $buscarRequerente->conectar();
                        $buscarRequerente->selecionarDB();

                        $IdRequerente;

                        if (isset($_POST['IdRequerenteAux'])) {
                          $IdRequerente = $_POST['IdRequerenteAux'];
                        }else{
                          $IdRequerente = 1;
                        }                                      
                                            
                        $buscarRequerente->set('sql',"SELECT  * FROM CadastroRequerente 
                                                             WHERE IdRequerente = '$IdRequerente'");

                        $retornoRequerente = mysql_fetch_object($buscarRequerente->executarQuery());  ?> 
     
      
          
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="clearfix"></div>
            <div class="content">
              <div class="page-title"> 
                <h3>Editar - <span class="semi-bold">Requerente</span></h3>
              </div>
              <!-- START FORM -->
              	<form id="formRequerenteAtualiza" name="formRequerenteAtualiza" method="POST" action="includes/php/AtualizaRequerente.php">
              <div class="row">
                <div class="col-md-24">
                  <div class="grid simple">
                
                    <div class="grid-body no-border">
                   
                      <div class="row column-seperation">
                        <div class="col-md-24">
                         <p></p> <p></p>
                         <div class="row form-row">
                      <div class="col-md-6">
 
                          <input name="NomeRequerente" id="NomeRequerente" type="text"  class="form-control" placeholder="Nome Completo" value="<?php echo $retornoRequerente->Nome;?>">   
                      </div>
                      <div class="col-md-3">
                        <input name="CpfRequerente" id="CpfRequerente" type="text"  class="form-control" placeholder="CPF " value="<?php echo $retornoRequerente->Cpf;?>">
                      </div>
                      <div class="col-md-3">
                        <input name="RgRequerente" id="RgRequerente" type="text"  class="form-control" placeholder="RG " value="<?php echo $retornoRequerente->Rg;?>">
                      </div>
                    </div>
                    
                    
                    
                    
                    <div class="row form-row">
                      
                      <div class="col-md-10">
                        <input name="EnderecoRequerente" id="EnderecoRequerente" type="text"  class="form-control" placeholder="Endereço " value="<?php echo $retornoRequerente->Endereco;?>">
                      </div>
                      <div class="col-md-2">
                        <input name="NumeroRequerente" id="NumeroRequerente" type="text"  class="form-control" placeholder="Numero " value="<?php echo $retornoRequerente->Numero;?>">
                      </div>
                    </div>
                    
                    <div class="row form-row">
                      <div class="col-md-5">
 
                          <input name="BairroRequerente" id="BairroRequerente" type="text"  class="form-control" placeholder="Bairro" value="<?php echo $retornoRequerente->Bairro;?>">   
                      </div>
                      <div class="col-md-4">
                        <input name="MunicipioRequerente" id="MunicipioRequerente" type="text"  class="form-control" placeholder="Municipio " value="<?php echo $retornoRequerente->Municipio;?>">
                      </div>
                      <div class="col-md-3">
                        <input name="CepRequerente" id="CepRequerente" type="text" 
                        		onblur="cepRequerente()" onkeypress="return verificaNumeros();" class="form-control" placeholder="CEP " value="<?php echo $retornoRequerente->Cep;?>">
                      </div>
                    </div>
                    
                    <div class="row form-row">
                      <div class="col-md-4">
 
                          <input name="TelefoneRequerente1" id="TelefoneRequerente1" type="text"  class="form-control"
                          			onkeypress="return verificaNumeros();" placeholder="Telefone 1" value="<?php echo $retornoRequerente->Telefone1;?>">   
                      </div>
                      <div class="col-md-4">
                        <input name="TelefoneRequerente2" id="TelefoneRequerente2" type="text"  class="form-control"
                        		onkeypress="return verificaNumeros();" placeholder="Telefone 2 " value="<?php echo $retornoRequerente->Telefone2;?>">
                      </div>
                      <div class="col-md-4">
                        <input name="CelularRequerente" id="CelularRequerente" type="text"  class="form-control"
                        			onkeypress="return verificaNumeros();" placeholder="Celular " value="<?php echo $retornoRequerente->Celular;?>">
                      </div>
                    </div>
                    
                    
                    <div class="row form-row">
                      
                      <div class="col-md-6">
                        <input name="EmailRequerente" id="EmailRequerente" type="text"  class="form-control" placeholder="E-mail " value="<?php echo $retornoRequerente->Email;?>">
                      </div>
                      <div class="col-md-6">
                        <input name="SenhaWeb" id="SenhaWeb" type="text"  class="form-control" placeholder="Senha Web " value="<?php echo $retornoRequerente->SenhaWeb;?>">
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
                       
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="form-actions">
                        <div class="pull-left"></div>
                        <div class="pull-right">
                          <button class="btn btn-primary btn-cons" type="button"
                          			onclick="validaRequerenteAtualiza(); enviaformRequerenteAtualiza('Atualizar');">Atualizar </button>
                          
                          <button class="btn btn-danger btn-cons" type="button"
                          			onclick="enviaformRequerenteAtualiza('Excluir');">Excluir</button>
                        </div>

                         <!--Auxiliares para envio de requerente-->
                         <input type="hidden" name="IdRequerenteAux" id="IdRequerenteAux" value="<?php echo $IdRequerente; ?>">
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
</body>
</html>