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
<!-- BEGIN PLUGIN CSS -->
<link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
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
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse "> 
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
	<div class="header-seperation"> 
		<ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
		 <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" > <div class="iconset top-menu-toggle-white"></div> </a> </li>		 
		</ul>
      <!-- BEGIN LOGO -->	
      <a href="#"></br><img src="assets/img/logo.png" width="106" height="30"/></a>
      <!-- END LOGO --> 
      
      </div>
      <!-- END RESPONSIVE MENU TOGGLER --> 
      <div class="header-quick-nav" > 
      <!-- BEGIN TOP NAVIGATION MENU -->
	  <div class="pull-left"></div>
	 <!-- END TOP NAVIGATION MENU -->
 <!-- BEGIN CHAT TOGGLER -->
      <div class="pull-right"> </div>
	   <!-- END CHAT TOGGLER -->
      </div> 
      <!-- END TOP NAVIGATION MENU --> 
   
  </div>
  <!-- END TOP NAVIGATION BAR --> 
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu"> 
  <!-- BEGIN MINI-PROFILE -->
   <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 
   <div class="user-info-wrapper">  

  <?php $nome = explode(" ", utf8_encode($_SESSION['usuarioNome'])); ?>

    <div class="user-info">
     <div class="status">Bem vindo,</div>
     <div class="greeting"><?php if ($nome[0]){
       echo $nome[0];
     } ;?></div>
    <div class="semi-bold"><?php if (count($nome ) > 1) {
      echo $nome[1];
    } ;?> </div>
   
      
    </div>
   </div>
  <!-- END MINI-PROFILE -->
   
<!-- BEGIN SIDEBAR MENU -->	
	
    
	
	
			</div>
		</div>
	</div>	
	<div class="clearfix"></div>
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
          <div class="row-fluid">
          
         
      

<div class="row">

          <div class="col-md-6">
          
          
           <div class="grid-body">
                        <?php 
                        /********************************************************************************************/
                        /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                        /********************************************************************************************/
                         
                        $buscarProcesso = new Conexao();
                        $buscarProcesso->conectar();
                        $buscarProcesso->selecionarDB(); 
                        $IdProcesso = $_POST['IdProcessoAux'];                     

                       $buscarProcesso->set('sql',"SELECT CadastraPocesso.*,CadastroHolding.*, CadastroRequerente.*, CadastraImovel.*
                                                   FROM CadastroHolding, CadastroRequerente,CadastraImovel
                                                   INNER JOIN `CadastraPocesso`
                                                   WHERE  CadastroHolding.IdEmpresa = CadastraPocesso.IdEmpresa AND
                                                          CadastroRequerente.IdRequerente =  CadastraPocesso.IdRequerente AND
                                                          CadastraImovel.IdImovel = CadastraPocesso.IdImovel AND
                                                          CadastraPocesso.IdProcesso = $IdProcesso ");
                       
                        $retornoProcesso = mysql_fetch_object($buscarProcesso->executarQuery()); ?> 
                        
                            <h4><span class="semi-bold"><?php echo "$retornoProcesso->NumeroContribuinte "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$retornoProcesso->SubPrefeitura; ?></span></h4>
                         <h4><?php echo $retornoProcesso->LocalImovel.", ".$retornoProcesso->CodLog; ?></h4>
                         <h4><?php echo "$retornoProcesso->NomeFantasia"; ?></h4>                                   
                                                
                      </div>
                  </div>
                      
                  <div class="col-md-6">          
                      <div class="grid-body" align="right">                 
                            <h1 class="light"><?php echo "$retornoProcesso->NomeProcesso"; ?></h1>
                            <h4><?php echo "$retornoProcesso->AssuntoProcesso"; ?></h4>     
                      </div>
                  </div>
            </div>

    <div class="blog-bar">
         <a href="#" ><i class="icon-eye-open"></i></a> <a href="#" ><i class="icon-comment"></i></a>
    </div>    


      
    <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            
            <div class="grid-body ">
              <table class="table" id="example" >
                <thead>
                  <tr>
                  	<th width="5%">Alertas</th>
                    <th width="20%">Data</th>
                    <th width="20%">Unidade</th>
                    <th width="55%">Descrição</th>
                  </tr>
                </thead>
                <tbody>
                            <?php 
                                /********************************************************************************************/
                                /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                                /********************************************************************************************/
                               
                                  $buscarProcessoDetalhe = new Conexao();
                                  $buscarProcessoDetalhe->conectar();
                                  $buscarProcessoDetalhe->selecionarDB(); 
                                 
                                 $buscarProcessoDetalhe->set('sql',"SELECT * FROM DetalheProcesso
                                                             INNER JOIN `CadastraPocesso`
                                                             ON  DetalheProcesso.IdProcesso = $retornoProcesso->IdProcesso 
                                                             GROUP BY IdDetalheProcesso");

                                 $query2= $buscarProcessoDetalhe->executarQuery();
                                 while($retornoProcessoDetalhe=mysql_fetch_object($query2)) { ?> 
                                            
                                       <tr>
                                       <?php
                                         $atencao = ($retornoProcessoDetalhe->DomProcessoDetalhe == "checado") ? "<td><span class='label label-important'>ATENÇÃO</span></td>" : "<td></td>" ;  
                                         echo $atencao;
                                         echo "<td>$retornoProcessoDetalhe->DataProcessoDetalhe</td>";
                                         echo "<td>$retornoProcessoDetalhe->UnidadeProcessoDetahe</td>";
                                         if ($retornoProcessoDetalhe->DomProcessoDetalhe == "checado") {
                                          echo "<td> $retornoProcessoDetalhe->DescricaoProcessoDetahe DOM $retornoProcessoDetalhe->AcaoProcessoDetalhe $retornoProcessoDetalhe->Data</td>";
                                         }else{
                                          echo "<td>$retornoProcessoDetalhe->DescricaoProcessoDetahe</td>";
                                         }?>    

                                      </tr>
                                  <?php }?>
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

<!-- END CONTAINER -->
<?php formBuscaSql(); ?>
<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
<script src="assets/plugins/jquery-datatable/extra/js/TableTools.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="assets/js/datatables.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script>
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
<!-- END JAVASCRIPTS -->
</body>
</html>