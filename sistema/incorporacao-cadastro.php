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
<link rel="stylesheet" type="text/css" href="assets/plugins/boostrapv3/css/bootstrap.css">
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>

<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="assets/plugins/boostrapv3/js/bootstrap.js"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<!-- END CORE JS FRAMEWORK --> 

<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
<!-- Inclui o arquivos para validação de campos-->
<script type="text/javascript" src="includes/js/ValidaCampos.js"></script>
<script type="text/javascript" src="includes/Cep/BuscaCep.js"></script>
<script type="text/javascript" src="includes/js/CriarComponentes.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.file-input.js"></script>

<!--Mascara para inputs-->
<script type="text/javascript" src="assets/plugins/jquery-mask/jquery.maskedinput.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-mask/jquery.mask.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.maskMoney.min.js"></script>



<script type="text/javascript">

  $(document).ready(function(){
    $('input[type=file]').bootstrapFileInput();
  });

  jQuery(function($){
    $("#CepIncorporacao").mask("99.999-999"); 
    $("#TelProprietarioIncorporacao").mask("(99) 9999-99999"); 
    $("#TelefoneCorretorIncorporacao").mask("(99) 9999-99999"); 
    $("#DataHistorico").mask("99/99/9999");


   $("#ValorVendaIncorporacao").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
 });

  function mascaraData(){
    if (formIncorporacaoCadastro.length > 42) {  
      $("input[id='DataArray[]']").mask("99/99/9999");
    }
  }
  
</script>


</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="">
  <!-- BEGIN TOP NAVIGATION BAR -->

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
                <h3>Cadastro - <span class="semi-bold">Área</span></h3>
              </div>
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border"></div>
                    <div class="grid-body no-border">
                    <form class="form-no-horizontal-spacing" id="formIncorporacaoCadastro" name="formIncorporacaoCadastro"
                              method="POST" action="includes/php/CadastraIncorporacao.php" enctype="multipart/form-data">
                      <div class="row column-seperation">
                        <div class="col-md-6">
                          
                          
                          <div class="row form-row">
                            <div class="col-md-2">
                              <input name="SiglaIncorporacao" id="SiglaIncorporacao" type="text"  class="form-control" placeholder="Sigla">
                            </div>
                            <div class="col-md-10">
                              <input name="TituloIncorporacao" id="TituloIncorporacao" type="text"  class="form-control" placeholder="Título">
                            </div>
                          </div>
                          
                          
                          
                          <div class="row form-row">
                            <div class="col-md-6">
                              <input name="CepIncorporacao" id="CepIncorporacao" type="text"  class="form-control" placeholder="CEP">
                            </div>
                            <div class="col-md-6">
                              <button type="button" class="btn btn-primary btn-cons" onclick="cepIncorporacao();">Buscar endereço</button>
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-8">
                              <input name="LocalIncorporacao" id="LocalIncorporacao" type="text"  class="form-control" placeholder="Local">
                            </div>
                            <div class="col-md-4">
                              <input name="NumeroIncorporacao" id="NumeroIncorporacao" type="text"  class="form-control" placeholder="Numero">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-2">
                              <input name="EstadoIncorporacao" id="EstadoIncorporacao" type="text"  class="form-control" placeholder="Estado">
                            </div>
                            <div class="col-md-5">
                              <input name="CidadeIncorporacao" id="CidadeIncorporacao" type="text"  class="form-control" placeholder="Cidade">
                            </div>
                            <div class="col-md-5">
                              <input name="BairroIncorporacao" id="BairroIncorporacao" type="text"  class="form-control" placeholder="Bairro">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-2">
                              <input name="MetragemIncorporacao" id="MetragemIncorporacao" type="text"  class="form-control" placeholder="Metragem">
                            </div>
                            <div class="col-md-3">
                              <input name="ValorVendaIncorporacao" id="ValorVendaIncorporacao" type="text"  class="form-control" placeholder="Valor Venda m²">
                            </div>
                             
                            
                            <div class="col-md-7">
                              <input name="AtividadeIncorporacao" id="AtividadeIncorporacao" type="text"  class="form-control" placeholder="Atividade">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-4">
                              <input name="ZonemanetoIncorporacao" id="ZonemanetoIncorporacao" type="text"  class="form-control" placeholder="Zonemaneto">
                            </div>
                            <div class="col-md-4">
                              <input name="CaBasicoIncorporacao" id="CaBasicoIncorporacao" type="text"  class="form-control" placeholder="CA Básico">
                            </div>
                            <div class="col-md-4">
                              <input name="CaMaximoIncorporacao" id="CaMaximoIncorporacao" type="text"  class="form-control" placeholder="CA Máximo">
                            </div>
                          </div>
                           <div class="row form-row">
                            <div class="col-md-4">
                              <input name="NomeProprietarioIncorporacao" id="NomeProprietarioIncorporacao" type="text"  class="form-control" placeholder="Nome Proprietário">
                            </div>
                            <div class="col-md-4">
                              <input name="TelProprietarioIncorporacao" id="TelProprietarioIncorporacao" type="text"  class="form-control" placeholder="Tel. Proprietário">
                            </div>
                            <div class="col-md-4">
                              <input name="EmailProprietarioIncorporacao" id="EmailProprietarioIncorporacao" type="text"  class="form-control" placeholder="E-mail Proprietário">
                            </div>
                          </div>
                          
                          <div class="row form-row">
                            <div class="col-md-4">
                              <input name="NomeCorreteorIncorpotacao" id="NomeCorreteorIncorpotacao" type="text"  class="form-control" placeholder="Nome Corretor">
                            </div>
                            <div class="col-md-4">
                              <input name="TelefoneCorretorIncorporacao" id="TelefoneCorretorIncorporacao" type="text"  class="form-control" placeholder="Tel. Corretor">
                            </div>
                            <div class="col-md-4">
                              <input name="EmailCorretorIncorporacao" id="EmailCorretorIncorporacao" type="text"  class="form-control" placeholder="E-mail Corretor">
                            </div>
                          </div>
                        </div>
         
                 <!-- MODELO FORMULARIO 1 COLUNA -->
                        <div class="col-md-6">
                          
                          <div class="row form-row">
                            <div class="col-md-2">
                              <div class="radio">
                                <input id="aprovado" type="radio" name="situacao" value="Sim" checked="checked">
                                <label for="aprovado">Sim</label>
                                <input id="naoaprovado" type="radio" name="situacao" value="Não">
                                <label for="naoaprovado">Não</label>
                              </div>
                            </div>
                            <div class="col-md-10">
                              <input name="ProjetoAprovado" id="ProjetoAprovado" type="text"  class="form-control" placeholder="Projeto Aprovado">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-12">
                              <textarea id="DocumentacaoIncorporacao" name="DocumentacaoIncorporacao" placeholder="Documentação" class="form-control" rows="5"></textarea>
                            </div>
                          </div>
                          
                          <div class="row form-row">
                            <div class="col-md-2">
                             <input name="TituloFoto1" id="TituloFoto1" type="text"  class="form-control" placeholder="Titulo 3">                             
                              <input type="file" title="Upload.." id="Imagem1" name="Imagem1"  class="btn btn-primary">
                            </div>
                            <div class="col-md-2">
                             <input name="TituloFoto2" id="TituloFoto2" type="text"  class="form-control" placeholder="Titulo 2">
                              <input type="file" title="Upload.." id="Imagem2" name="Imagem2"  class="btn btn-primary">
                            </div>
                            <div class="col-md-2">
                             <input name="TituloFoto3" id="TituloFoto3" type="text"  class="form-control" placeholder="Titulo 3">
                              <input type="file" title="Upload.." id="Imagem3" name="Imagem3"  class="btn btn-primary">
                            </div>
                            <div class="col-md-2">
                             <input name="TituloFoto4" id="TituloFoto4" type="text"  class="form-control" placeholder="Titulo 4">
                              <input type="file" title="Upload.." id="Imagem4" name="Imagem4"  class="btn btn-primary">
                            </div>
                            <div class="col-md-2">
                             <input name="TituloFoto5" id="TituloFoto5" type="text"  class="form-control" placeholder="Titulo 5">
                              <input type="file" title="Upload.." id="Imagem5" name="Imagem5"  class="btn btn-primary">
                            </div>
                            <div class="col-md-2">
                             <input name="TituloFoto6" id="TituloFoto6" type="text"  class="form-control" placeholder="Titulo 6">
                              <input type="file" title="Upload.." id="Imagem6" name="Imagem6"  class="btn btn-primary">
                            </div>
                          </div>


                        <div class="row form-row">
                          <div class="col-md-12"> <h5><strong>HISTÓRICO</strong></h5></div>
                        </div>         
                          <div class="row form-row">
                            <div class="col-md-3">     
                              <input name="DataHistorico" id="DataHistorico" type="text"  class="form-control" placeholder="Data">
                            </div>
                            <div class="col-md-9">                         
                              <input name="DescricaoHistorico" id="DescricaoHistorico" type="text"  class="form-control" placeholder="Descrição">
                            </div>
                          </div>   

                          <!--INICIO DO CLONE DE HISTORICO INCORPORAÇÂO-->                      
                          <div class="row form-row" id="DivIncorporacaoOrigem">                            
                          </div> 

                          <div class="row form-row" id="DivIncorporacaoDestino">                            
                          </div>
                          <!--FIM DO CLONE DE HISTORICO INCORPORAÇÂO-->    



                          <div class="row form-row">
                            <div class="col-md-2">  
                            </div>
                            <div class="col-md-10" align="right">
                            <button type="button" class="btn btn-white btn-cons" onclick="criarCampoIncorporacao();mascaraData();"><strong>+ Linha</strong></button>
                              
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      </div>
                      <div class="form-actions">
                        <div class="pull-left"></div>
                        <div class="pull-right">
                          <button class="btn btn-primary btn-cons" type="button" onclick="validaIncorporacaoCadastro(); document.forms[0].submit()">Salvar </button>
                          
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