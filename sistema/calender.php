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
<title>Webarch - Responsive Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen"/>
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
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
      <div class="row" style="max-height:600px;">
        <div class="tiles row tiles-container red no-padding">
          <div class="col-md-4 tiles red no-padding">
            <div class="tiles-body">
              <div class="calender-options-wrapper">
                <h3 class="text-white semi-bold" id="calender-current-day"></h3>
                <h2 class="text-white" id="calender-current-date"></h2>
                <div id='external-events' class="hide-inphone events-wrapper">
                  <div class="events-heading">&nbsp;Draggable Events</div>
                  <div class='external-event'>My Event 1</div>
                  <div class='external-event'>My Event 2</div>
                  <div class='external-event'>My Event 3</div>
                  <div class='external-event'>My Event 4</div>
                  <div class='external-event'>My Event 5</div>
				  
                  <div class="checkbox check-default p-t-20">
                    <input type="checkbox" value="1" id='drop-remove'>
                    <label for="drop-remove">Keep Me Signed in</label>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 tiles white no-padding">
            <div class="tiles-body">
              <div class="full-calender-header">
                <div class="pull-left">
                  <div class="btn-group ">
                    <button class="btn btn-success" id="calender-prev"><i class="fa fa-angle-left"></i></button>
                    <button class="btn btn-success" id="calender-next"><i class="fa fa-angle-right"></i></button>
                  </div>
                </div>
                <div class="pull-right">
                  <div data-toggle="buttons-radio" class="btn-group">
                    <button class="btn btn-primary active" type="button" id="change-view-month">Mês</button>
                    <button class="btn btn-primary " type="button" id="change-view-week">Semana</button>
                    <button class="btn btn-primary" type="button" id="change-view-day">Dia</button>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div id='calendar'></div>
            </div>
          </div>
        </div>
      </div>
      <br>
    </div>
  </div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN CHAT --> 
<div id="sidr" class="chat-window-wrapper">
	<div id="main-chat-wrapper" >
	<div class="chat-window-wrapper fadeIn" id="chat-users" >
		<div class="chat-header">	
		<div class="pull-left">
			<input type="text" placeholder="search">
		</div>		
			<div class="pull-right">
				<a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
			</div>			
		</div>	
		<div class="side-widget">
		   <div class="side-widget-title">group chats</div>
		    <div class="side-widget-content">
			 <div id="groups-list">
				<ul class="groups" >
					<li><a href="#"><div class="status-icon green"></div>Office work</a></li>
					<li><a href="#"><div class="status-icon green"></div>Personal vibes</a></li>
				</ul>
			</div>
			</div>
		</div>
		<div class="side-widget fadeIn">
		   <div class="side-widget-title">favourites</div>
		   <div id="favourites-list">
		    <div class="side-widget-content" >
				<div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
					<div class="user-profile">
						<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<span class="badge badge-important">3</span>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
					<div class="user-profile">
						<img src="assets/img/profiles/c.jpg"  alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>					
			</div>
			</div>
		</div>
		<div class="side-widget">
		   <div class="side-widget-title">more friends</div>
			 <div class="side-widget-content" id="friends-list">
				<div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
					<div class="user-profile">
						<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
					<div class="user-profile">
						<img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>		
				<div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
					<div class="user-profile">
						<img src="assets/img/profiles/c.jpg"  alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
					<div class="user-profile">
						<img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>				
			</div>		
		</div>
	</div>

	<div class="chat-window-wrapper fadeIn" id="messages-wrapper" style="display:none">
	<div class="chat-header">	
		<div class="pull-left">
			<input type="text" placeholder="search">
		</div>		
			<div class="pull-right">
				<a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
			</div>					
		</div>
	<div class="clearfix"></div>	
	<div class="chat-messages-header">
	<div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
	<a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
	</div>
	<div class="chat-messages">
		<div class="sent_time">Yesterday 11:25pm</div>
		<div class="user-details-wrapper " >
			<div class="user-profile">
				<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
			</div>
			<div class="user-details">
			  <div class="bubble">	
					Hello, You there?
			   </div>
			</div>					
			<div class="clearfix"></div>
		   <div class="sent_time off">Yesterday 11:25pm</div>
		</div>		
		<div class="user-details-wrapper ">
			<div class="user-profile">
				<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
			</div>
			<div class="user-details">
			  <div class="bubble">	
					How was the meeting?
			   </div>
			</div>					
			<div class="clearfix"></div>
			<div class="sent_time off">Yesterday 11:25pm</div>
		</div>
		<div class="user-details-wrapper ">
			<div class="user-profile">
				<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
			</div>
			<div class="user-details">
			  <div class="bubble">	
					Let me know when you free
			   </div>
			</div>					
			<div class="clearfix"></div>
			<div class="sent_time off">Yesterday 11:25pm</div>
		</div>
		<div class="sent_time ">Today 11:25pm</div>
		<div class="user-details-wrapper pull-right">
			<div class="user-details">
			  <div class="bubble sender">	
					Let me know when you free
			   </div>
			</div>					
			<div class="clearfix"></div>
			<div class="sent_time off">Sent On Tue, 2:45pm</div>
		</div>		
	</div>
	</div>
	<div class="chat-input-wrapper" style="display:none">
		<textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
	</div>
	<div class="clearfix"></div>
	</div>
</div>
<!-- END CHAT --> 
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
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui-touch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- PAGE JS -->
<script src="assets/js/calender.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
</body>
</html>