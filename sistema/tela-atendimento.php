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
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/plugins/jquery-polymaps/style.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-metrojs/MetroJs.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/shape-hover/css/demo.css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/shape-hover/css/component.css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.theme.css" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" href="assets/plugins/jquery-ricksaw-chart/css/rickshaw.css" type="text/css" media="screen" >
<link href="assets/plugins/jquery-isotope/isotope.css" rel="stylesheet" type="text/css"/>
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
<link href="assets/css/magic_space.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/tiles_responsive.css" rel="stylesheet" type="text/css"/>
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
  
  
   
       <div class="row" style="margin-top:80px;"> 
       <!-- BEGIN DASHBOARD TILES -->
      <div class="col-md-3 col-sm-6">
        <div class="live-tile slide ha m-b-20" data-speed="750" data-delay="3000" data-mode="carousel">
          <div class="slide-front ha tiles green added-margin ">
            <div class="p-t-15 p-l-15 p-r-15 p-b-15">
              <h4 class="text-black no-margin semi-bold">Today's Visits</h4>
              <h2 class="text-white no-margin p-t-15 bold"><span data-animation-duration="900" data-value="810" class="animate-number">0</span></h2>
              <p class="text-white  p-b-5">views</p>
              <div class="progress transparent progress-small">
                <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="26.8%"></div>
              </div>
              <i class="fa fa-camera m-r-10"></i> <i class="fa fa-cog m-r-10 fa-lg"></i> <i class="fa fa-map-marker m-r-10 fa-lg"></i>
              <div class="overlayer bottom-right">
                <div class="p-r-15 p-b-15"> <i class="fa fa-globe fa fa-5x"></i> </div>
              </div>
            </div>
          </div>
          <div class="slide-back ha tiles green added-margin">
            <div class="p-t-15 p-l-15 p-r-15 p-b-15">
              <h4 class="text-black no-margin semi-bold">Overview</h4>
            </div>
            <div class="overlayer bottom-left fullwidth">
              <div class="overlayer-wrapper">
                <div class="p-t-20 p-l-20 p-r-20 p-b-20">
                  <p class="bold">Webarch Dashboard</p>
                  <p >2,567 USD <span class="m-l-10"><i class="fa fa-sort-desc"></i> 2%</span></p>
                  <p class="bold p-t-15">Front-end Design</p>
                  <p >1,420 USD <span class="m-l-10"><i class="fa fa-sort-desc"></i> 1%</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="tiles blue added-margin   m-b-20">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <h4 class="text-black no-margin semi-bold">Today's Sales</h4>
            <h2 class="text-white bold "><span data-animation-duration="900" data-value="245" class="animate-number">0</span></h2>
            <h4 class="text-black semi-bold  ">New comments</h4>
            <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 4% higher <span class="blend">than last month</span></span></div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="tiles white added-margin  m-b-20">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title text-black">OVERALL SALES </div>
            <h3 class="text-black bold "><span data-animation-duration="900" data-value="4458" class="animate-number">0</span></h3>
            <div class="progress transparent progress-small no-radius no-margin">
              <div class="progress-bar progress-bar-black animate-progress-bar" data-percentage="79%" ></div>
            </div>
            <p class="text-black  p-t-5 p-b-5 small-text">webarch 258 USD</p>
            <div class="progress transparent progress-small no-radius no-margin ">
              <div class="progress-bar progress-bar-black animate-progress-bar" data-percentage="58%" ></div>
            </div>
            <p class="text-black p-t-5 small-text">revox 258 USD</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="tiles white added-margin  m-b-20">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title text-black">OVERALL VISITS </div>
            <h3 class="text-black bold "><span data-animation-duration="900" data-value="15489" class="animate-number">0</span></h3>
            <div class="progress transparent progress-small no-radius no-margin">
              <div class="progress-bar progress-bar-black animate-progress-bar" data-percentage="45%" ></div>
            </div>
            <p class="text-black  p-t-5 p-b-5 small-text">webarch 258 USD</p>
            <div class="progress transparent progress-small no-radius no-margin ">
              <div class="progress-bar progress-bar-black animate-progress-bar" data-percentage="20%" ></div>
            </div>
            <p class="text-black p-t-5 small-text">revox 258 USD</p>
          </div>
        </div>
      </div>
      <!-- END DASHBOARD TILES -->
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
<script src="assets/plugins/jquery-lazyload/jquery.lazyload.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->

<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ricksaw-chart/js/raphael-min.js"></script>
<script src="assets/plugins/jquery-ricksaw-chart/js/d3.v2.js"></script>
<script src="assets/plugins/jquery-ricksaw-chart/js/rickshaw.min.js"></script>
<script src="assets/plugins/jquery-sparkline/jquery-sparkline.js"></script>
<script src="assets/plugins/skycons/skycons.js"></script>
<script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-polymaps/polymaps.min.js" type="text/javascript"></script>
<script src="assets/plugins/shape-hover/js/snap.svg-min.js"></script>
<script src="assets/plugins/jquery-flot/jquery.flot.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript" ></script>
<script src="assets/plugins/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-jvectormap/js/jquery-jvectormap-us-lcc-en.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script>
<script src="assets/js/demo.js" type="text/javascript"></script>
<script src="assets/js/widgets.js" type="text/javascript"></script>
<script type="text/javascript">
        $(document).ready(function () {
            $(".live-tile,.flip-list").liveTile();
        });		

</script>
<!-- END CORE TEMPLATE JS -->
</body>
</html>