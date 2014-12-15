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
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<!-- END CSS TEMPLATE -->
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
			<h3>Master Page</h3>		
		</div>


    <!--Verifica as tarefas para poder finaliza-las-->

      <?php 

     /********************************************************************************************/
     /*      Variáveis para inserção no banco de dados, insere o Responsável e a empresa         */
     /********************************************************************************************
         
      $buscaImovel = new Conexao();
      $buscaImovel->conectar();
      $buscaImovel->selecionarDB(); 

      $buscaIncorporacao = new Conexao();
      $buscaIncorporacao->conectar();
      $buscaIncorporacao->selecionarDB(); 

      $buscaIncorporacao->set("sql","SELECT * FROM CadastraIncorporacao ");
      $queryIcorporacao = $buscaIncorporacao->executarQuery();
      while ($retornoIncorporacao = mysql_fetch_object($queryIcorporacao)) {
       
          $NomeArquivo2 = "Pdf-Incorporação-".$retornoIncorporacao->IdIncorporacao."-".date('d-m-Y').".pdf";

          foreach (glob("impressao/*.pdf") as $filename) {
            if ($filename == "impressao/".$NomeArquivo2) {
              unlink($filename);
            }                 
          }

      }


      $buscaImovel->set("sql","SELECT * FROM CadastraImovel ");
      $queryImovel = $buscaImovel->executarQuery();
      while ($retornoImovel = mysql_fetch_object($queryImovel)) {

       //Deleta os Pdf antigos
       $NomeArquivo = "Pdf-Imovel-".$retornoImovel->IdImovel."-".date('d-m-Y').".pdf";
     
          foreach (glob("impressao/*.pdf") as $filename) {
            if ($filename == "impressao/".$NomeArquivo) {
              unlink($filename);
            }                 
          }       
      }
     */
      ?>


    </div>
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



