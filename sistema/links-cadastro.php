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
<script type="text/javascript" src="includes/js/ValidaCampos.js"></script>

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
                <h3>Cadastro - <span class="semi-bold">Links</span></h3>
              </div>
              
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border"></div>
                    <div class="grid-body no-border">
                    <form class="form-no-horizontal-spacing" id="formLinks" name="formLinks" method="POST" action="includes/php/CadastraLinks.php">
                      <div class="row column-seperation">
                        <div class="col-md-12">
                          <h4>Novo link</h4>
                         
                          <div class="row form-row">
                            <div class="col-md-4">
                              <input name="NomeExibicao" id="NomeExibicao" type="text"  class="form-control" placeholder="Nome de exeibicão">
                              <input type="hidden" name="NomeExibicaoAux" id="NomeExibicaoAux" >
                            </div>
                            <div class="col-md-8">
                              <input name="Url" id="Url" type="text"  class="form-control" placeholder="http://site.com.br">
                              <input type="hidden" name="UrlAux" id="UrlAux" >
                            </div>
                          </div>
                         <div class="row form-row">
                            <div class="col-md-12">
                            <button class="btn btn-primary btn-cons" type="button"
                            		onclick="validaLinks(); document.forms[0].submit()">Adicionar </button>
                            
                             <button class="btn btn-primary btn-cons" type="button"
                             			onclick="validaLinks();enviaFormLinks('um');" >Editar</button>
                             			
                             <button class="btn btn-primary btn-cons" type="button"
                             				onclick="validaLinks();enviaFormLinks('dois');">Excluir</button>
                              
                            </div>
                          </div>
                         
                          
                        </div>
                        
                        
                </div>
              
            <!-- END FORM -->
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-12">
                        <div class="grid simple ">
                            <div class="grid-title no-border">
                               
                            </div>
                            <div class="grid-body no-border">
                                  
                                   <table class="table table-hover no-more-tables">
                                                <thead>
                                                    <tr>
                                                        <th style="width:20%">Nome</th>
                                                        <th style="width:80%;">Url</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
									                  <?php 
									                    /********************************************************************************************/
									                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
									                    /********************************************************************************************/
									                     
									                        $buscar = new Conexao('localhost','root','tairo1507','Mand');
									                        $buscar->conectar();
									                        $buscar->selecionarDB();                      
									
									                       $buscar->set('sql',"SELECT * FROM `CadastraLinks` ");
									                       
									                        $query= $buscar->executarQuery();
									                       while($retorno=mysql_fetch_array($query)) { 
									                      ?> 
									                           <tr>
									                                   <td onclick="selecionaLinks(this,'nome');"><?php echo $retorno['NomeExibicao'] ?> 
									                                   <td onclick="selecionaLinks(this,'url');"><?php echo $retorno['Url'] ?> </td>  </td>                                                  
									                           </tr>
									 
									                    <?php } ?>      
                                                    
                                                </tbody>
                                            </table>
                            </div>
                        </div>
                    </div>
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