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
<script type="text/javascript" src="includes/js/MascaraValidacao.js"></script>
<!--Mascara para inputs-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="assets/plugins/jquery-mask/jquery.maskedinput.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-mask/jquery.mask.js"></script>



<script type="text/javascript">
  jQuery(function($){
    $("#Telefone1").mask("(99) 9999-99999");
   $("#Telefone2").mask("(99) 9999-99999");
   $("#CepEmpresa").mask("99.999-999");

   $("#CpfResponsavel").mask("999.999.999-99");
   $("#CepResponsavel").mask("99.999-999");
   $("#TelefoneResponsavel").mask("(99) 9999-99999");
   $("#CelularResponsavel").mask("(99) 9999-99999");
   $("#RgResponsavel").mask("999.999.999.9999");
   

});
  function mudaMascaraCnpj(){
    if (formHoldingAtualiza.PessoaJuridica.checked == true) {
    $("#Cnpj").mask("99.999.999/9999-99");    
   }else{
    $("#Cnpj").mask("999.999.999-99");
   }

  }

  function enviarFormHoldingAtualiza(acao){
    if (acao == "Atualizar") {
      formHoldingAtualiza.action = "includes/php/AtualizaHolding.php";
      formHoldingAtualiza.submit();
    }else{
      formHoldingAtualiza.action = "includes/php/ExcluirHolding.php";
      formHoldingAtualiza.submit();
    }    
    
  }
  



</script>

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="" onload="mudaMascaraCnpj();">
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

   <!--Inicio da tabela com requerentes-->

                    <?php 
                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/
                     
                        $buscarEmpresa = new Conexao();
                        $buscarEmpresa->conectar();
                        $buscarEmpresa->selecionarDB();

                        $buscarResponsavel = new Conexao();
                        $buscarResponsavel->conectar();
                        $buscarResponsavel->selecionarDB();

                        $IdEmpresa; 
                        $IdResponsavel;

                        if (isset($_POST['IdHoldingAux'],$_POST['IdResponsavelAux'])) {
                          $IdEmpresa = $_POST['IdHoldingAux'];
                          $IdResponsavel = $_POST['IdResponsavelAux'];
                        }else{
                          $IdEmpresa = 1;
                          $IdResponsavel = 1;
                        }
                                      
                                            
                        $buscarEmpresa->set('sql',"SELECT  * FROM CadastroHolding 
                                                             WHERE IdEmpresa = '$IdEmpresa'");

                        $retornoEmpresa = mysql_fetch_object($buscarEmpresa->executarQuery());  

                        $buscarResponsavel->set('sql',"SELECT  * FROM Responsavel 
                                                             WHERE IdResponsavel = '$IdResponsavel'");

                        $retornoResponsavel = mysql_fetch_object($buscarResponsavel->executarQuery()); ?> 
     
      
          
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="clearfix"></div>
            <div class="content">
              <div class="page-title"> 
                <h3>Editar - <span class="semi-bold">Holding</span></h3>

              </div>
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border"></div>
                    <div class="grid-body no-border">
                    <form class="form-no-horizontal-spacing" id="formHoldingAtualiza" name="formHoldingAtualiza" method="post" action="includes/php/AtualizaHolding.php">
                      <div class="row column-seperation">
                        <div class="col-md-6">
                          <h4>Editar Empresa</h4>
                          <div class="row form-row">
                            <div class="col-md-8">
                              <div class="radio">

                                <input id="PessoaJuridica" type="radio" name="TipoPessoa" value="juridica" 
                                    <?php if ($retornoEmpresa->TipoPessoa == "juridica") {
                                      echo " checked='true' ";
                                    }  ?> onchange="mudaPlaceHolderHolding();mudaMascaraCnpj()">

                                <label for="PessoaJuridica">Pessoa Juridica</label>
                                <input id="PessoaFisica" type="radio" name="TipoPessoa" 
                                    <?php if ($retornoEmpresa->TipoPessoa == "fisica") {
                                      echo " checked='true' ";
                                    }  ?>value="fisica" onchange="mudaPlaceHolderHolding();mudaMascaraCnpj()">

                                <label for="PessoaFisica">Pessoa Fisica</label>
                              </div>
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-12">
                              <input name="RazaoSocial" id="RazaoSocial" type="text"  class="form-control" placeholder="Razão social" 
                                  value="<?php echo $retornoEmpresa->RazaoSocial; ?>">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-12">
                              <input name="NomeFantasia" id="NomeFantasia" type="text"  class="form-control" placeholder="Nome Fantasia"
                                  value="<?php echo $retornoEmpresa->NomeFantasia; ?>">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-12">
                              <input name="Atividade" id="Atividade" type="text"  class="form-control" placeholder="Atividade"
                                value="<?php echo $retornoEmpresa->Atividade; ?>">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-6">

                             <input name="Cnpj" id="Cnpj" type="text" maxlength="18" class="form-control" placeholder="CNPJ"
                                value="<?php echo $retornoEmpresa->Cnpj; ?>" >
                               
                            </div>
                            <div class="col-md-6">
                              <input name="Ccm" id="Ccm" type="text"  class="form-control" placeholder="CCM"
                                  value="<?php echo $retornoEmpresa->Ccm; ?>" >
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-6">
                              <input name="CepEmpresa" id="CepEmpresa" type="text"  maxlength="10" 
                              			onkeypress="return verificaNumeros();" class="form-control" placeholder="CEP"
                                    value="<?php echo $retornoEmpresa->Cep; ?>" >
                            </div>
                            <div class="col-md-6">
                              <button type="button" class="btn btn-primary btn-cons"
                              			onclick="cepEmpresa()">Buscar endereço</button>
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-8">
                              <input name="RuaEmpresa" id="RuaEmpresa" type="text"  class="form-control" placeholder="Local"
                              value="<?php echo $retornoEmpresa->Rua; ?>">
                            </div>
                            <div class="col-md-4">
                              <input name="NumeroEmpresa" id="NumeroEmpresa" type="text"  class="form-control" placeholder="Numero"
                                  value="<?php echo $retornoEmpresa->Numero; ?>">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-6">
                              <input name="BairroEmpresa" id="BairroEmpresa" type="text"  class="form-control" placeholder="Bairro"
                                    value="<?php echo $retornoEmpresa->Bairro; ?>">
                            </div>
                            <div class="col-md-6">
                              <input name="CidadeEmpresa" id="CidadeEmpresa" type="text"  class="form-control" placeholder="Cidade"
                                  value="<?php echo $retornoEmpresa->Cidade; ?>">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-6">
                              <input name="Telefone1" id="Telefone1" type="text"  class="form-control"
                              			onkeypress="return verificaNumeros();" maxlength="15" placeholder="Telefone 1"
                                    value="<?php echo $retornoEmpresa->Telefone1; ?>">
                            </div>
                            <div class="col-md-6">
                              <input name="Telefone2" id="Telefone2" type="text"  class="form-control"
                              			onkeypress="return verificaNumeros();" placeholder="Telefone 2"
                                        value="<?php echo $retornoEmpresa->Telefone2; ?>">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-6">
                              <input name="EmailEmpresa" id="EmailEmpresa" type="text"  class="form-control" placeholder="E-mail"
                                       value="<?php echo $retornoEmpresa->Email; ?>">
                            </div>
                            <div class="col-md-6">
                              <input name="SenhaWebEmpresa" id="SenhaWebEmpresa" type="text"  class="form-control" placeholder="Senha Web"
                                    value="<?php echo $retornoEmpresa->SenhaWebEmpresa; ?>">
                            </div>
                          </div>
                           <div class="row form-row">
                            
                            <div class="col-md-12">
                              <input name="SiteEmpresa" id="SiteEmpresa" type="text"  class="form-control" placeholder="Site"
                                    value="<?php echo $retornoEmpresa->SiteEmpresa; ?>">
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
                          <h4>Editar Responsável legal</h4>
                          <div class="row form-row">
                            <div class="col-md-12">
                              <input name="NomeResponsavel" id="NomeResponsavel" type="text"  class="form-control" placeholder="Nome" 
                                    value="<?php echo $retornoResponsavel->Nome; ?>">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-6">
                              <input name="CpfResponsavel" id="CpfResponsavel" type="text"  
                              			onkeypress="return verificaNumeros();" class="form-control" placeholder="CPF"
                                        value="<?php echo $retornoResponsavel->Cpf; ?>">
                            </div>
                            <div class="col-md-6">
                              <input name="RgResponsavel" id="RgResponsavel" type="text"  class="form-control" placeholder="RG "
                                    value="<?php echo $retornoResponsavel->Rg; ?>">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-6">
                              <input name="CepResponsavel" id="CepResponsavel" type="text"  class="form-control" placeholder="CEP"
                                    value="<?php echo $retornoResponsavel->Cep; ?>">
                            </div>
                            <div class="col-md-6">
                              <button type="button" class="btn btn-primary btn-cons"
                              			onclick="cepResponsavel()">Buscar endereço</button>
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-8">
                              <input name="RuaResponsavel" id="RuaResponsavel" type="text"  class="form-control" placeholder="Rua"
                                    value="<?php echo $retornoResponsavel->Rua; ?>">
                            </div>
                            <div class="col-md-4">
                              <input name="NumeroResponsavel" id="NumeroResponsavel" type="text"  class="form-control" placeholder="Numero"
                                    value="<?php echo $retornoResponsavel->Numero; ?>">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-6">
                              <input name="BairroResponsavel" id="BairroResponsavel" type="text"  class="form-control" placeholder="Bairro"
                                    value="<?php echo $retornoResponsavel->Bairro; ?>">
                            </div>
                            <div class="col-md-6">
                              <input name="CidadeResponsavel" id="CidadeResponsavel" type="text"  class="form-control" placeholder="Cidade"
                                    value="<?php echo $retornoResponsavel->Cidade; ?>">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-6">
                              <input name="TelefoneResponsavel" id="TelefoneResponsavel" type="text"
                              			onkeypress="return verificaNumeros();"  class="form-control" placeholder="Telefone 1"
                                          value="<?php echo $retornoResponsavel->Telefone; ?>">
                            </div>
                            <div class="col-md-6">
                              <input name="CelularResponsavel" id="CelularResponsavel" type="text"  
                              			onkeypress="return verificaNumeros();" class="form-control" placeholder="Celular"
                                          value="<?php echo $retornoResponsavel->Celular; ?>">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-6">
                              <input name="EmailResponsavel" id="EmailResponsavel" type="text"  class="form-control" placeholder="E-mail"
                                    value="<?php echo $retornoResponsavel->Email; ?>">
                            </div>
                            <div class="col-md-6">
                              <input name="SenhaWebResponsavel" id="SenhaWebResponsavel" type="text"  class="form-control" placeholder="Senha Web"
                                    value="<?php echo $retornoResponsavel->SenhaWebResponsavel; ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="form-actions">
                        <div class="pull-left"></div>
                        <div class="pull-right">
                          <button class="btn btn-success btn-cons" type="button"
                          				onclick="validaHoldingAtualiza(); enviarFormHoldingAtualiza('Atualizar');">Atualizar </button>
                          <button class="btn btn-danger btn-cons" type="button"
                          				onclick="enviarFormHoldingAtualiza('Excluir');">Excluir</button>
                        </div>
                      </div>
                       <!--Auxiliar para envio de formuário-->
                      <input type="hidden" id="IdHoldingAux" name="IdHoldingAux" value="<?php echo $IdEmpresa; ?>">
                      <input type="hidden" id="IdResponsavelAux" name="IdResponsavelAux" value="<?php echo $IdResponsavel; ?>">

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