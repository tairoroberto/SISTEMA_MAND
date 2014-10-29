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
<link href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
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
<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->

<!-- END HEADER -->

    <!-- BEGIN CONTAINER -->
    <!-- aqui começa o container vindo das permissoes do php -->
      <?php mostarPermissoes();?>
    <!-- END SIDEBAR MENU --> 
    
  </div>
  </div>
  <a href="#" class="scrollup">Subir</a>
   
  <!-- END SIDEBAR --> 
<!-- BEGIN CONTAINER -->
<div class="page-container row"> 
   <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper">
      <div class="user-info-wrapper">
        <div class="profile-wrapper"> <img src="<?php echo 'includes/php/fotos/Funcionario/'.$_SESSION['usuarioFoto'];?>"  alt="" data-src="<?php echo 'includes/php/fotos/Funcionario/'.$_SESSION['usuarioFoto'];?>" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" /> </div>
        <div class="user-info">
          <div class="greeting">Welcome</div>
          <div class="username">John <span class="semi-bold">Smith</span></div>
          <div class="status">Status<a href="#">
            <div class="status-icon green"></div>
            Online</a></div>
        </div>
      </div>
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
      <p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
      <ul>
        <li class="start"> <a href="index.php"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="arrow"></span> </a> 
		   <ul class="sub-menu">
            <li > <a href="dashboard_v1.php"> Dashboard v1 </a> </li>
            <li class="active"> <a href="index.php "> Dashboard v2 <span class=" label label-info pull-right m-r-30">NEW</span></a></li>
          </ul>
		</li>
        <li class=""> <a href="widgets.php"> <i class="fa fa-envelope"></i> <span class="title">Widgets</span> <span class="label label-important pull-right ">HOT</span></a> </li>
        <li class=""> <a href="email.php"> <i class="fa fa-envelope"></i> <span class="title">Email</span> <span class=" badge badge-disable pull-right ">203</span></a> </li>
        <li class=""> <a href="../../frontend/index.php"> <i class="fa fa-flag"></i>  <span class="title">Frontend</span></a></li>
        <li class=""> <a href="javascript:;"> <i class="fa fa-file-text"></i> <span class="title">Layouts</span> <span class="arrow "></span> </a>
            <ul class="sub-menu">
              <li > <a href="layout_options.php"> Layout Options </a> </li>
              <li > <a href="boxed_layout.php">Boxed Layout </a> </li>
              <li > <a href="extended_layout.php">Extended Layout</a> </li>
            </ul>
        </li>             
        <li class=""> <a href="javascript:;"> <i class="icon-custom-ui"></i> <span class="title">UI Elements</span> <span class="arrow "></span> </a>
          <ul class="sub-menu">
            <li > <a href="typography.php"> Typography </a> </li>
            <li > <a href="messages_notifications.php"> Messages & Notifications </a> </li>
            <li > <a href="notifications.php"> Notifications </a> </li>
            <li > <a href="icons.php">Icons</a> </li>
            <li > <a href="buttons.php">Buttons</a> </li>
            <li > <a href="tabs_accordian.php"> Tabs & Accordions </a> </li>
            <li > <a href="sliders.php">Sliders</a> </li>
            <li > <a href="group_list.php">Group list </a> </li>
          </ul>
        </li>
        <li class=""> <a href="javascript:;"> <i class="icon-custom-form"></i> <span class="title">Forms</span> <span class="arrow"></span> </a>
          <ul class="sub-menu">
            <li > <a href="form_elements.php">Form Elements </a> </li>
            <li > <a href="form_validations.php">Form Validations</a> </li>
          </ul>
        </li>
        <li class=""> <a href="javascript:;"> <i class="icon-custom-portlets"></i> <span class="title">Grids</span> <span class="arrow"></span> </a>
          <ul class="sub-menu">
            <li > <a href="grids_simple.php">Simple Grids</a> </li>
            <li > <a href="grids_draggable.php">Draggable Grids </a> </li>
          </ul>
        </li>
        <li class=""> <a href="javascript:;"> <i class="icon-custom-thumb"></i> <span class="title">Tables</span> <span class="arrow"></span> </a>
          <ul class="sub-menu">
            <li > <a href="tables.php"> Basic Tables </a> </li>
            <li > <a href="datatables.php"> Data Tables </a> </li>
          </ul>
        </li>
        <li > <a href="javascript:;"> <i class="icon-custom-map"></i> <span class="title">Maps</span> <span class="arrow "></span> </a>
          <ul class="sub-menu">
            <li > <a href="google_map.php"> Google Maps </a> </li>
            <li > <a href="vector_map.php"> Vector Maps </a> </li>
          </ul>
        </li>
        <li class=""> <a href="charts.php"> <i class="icon-custom-chart"></i> <span class="title">Charts</span> </a> </li>
        <li class="active open"> <a href="javascript:;"> <i class="icon-custom-extra"></i> <span class="title">Extra</span> <span class="arrow open"></span> </a>
          <ul class="sub-menu">
            <li > <a href="user-profile.php"> User Profile </a> </li>
            <li > <a href="time_line.php"> Time line </a> </li>
            <li class="active"> <a href="support_ticket.php"> Support Ticket </a> </li>
            <li > <a href="gallery.php"> Gallery</a> </li>
            <li class=""><a href="calender.php"> Calendar</a> </li>
            <li > <a href="search_results.php"> Search Results </a> </li>
            <li > <a href="invoice.php"> Invoice </a> </li>
            <li > <a href="404.php"> 404 Page </a> </li>
            <li > <a href="500.php"> 500 Page </a> </li>
            <li > <a href="blank_template.php"> Blank Page </a> </li>
            <li > <a href="login.php"> Login </a> </li>
            <li > <a href="login_v2.php">Login v2</a> </li>
            <li > <a href="lockscreen.php"> Lockscreen </a> </li>
          </ul>
        </li>
        <li class=""> <a href="javascript:;"> <i class="fa fa-folder-open"></i> <span class="title">Menu Levels</span> <span class="arrow "></span> </a>
          <ul class="sub-menu">
            <li > <a href="javascript:;"> Level 1 </a> </li>
            <li > <a href="javascript:;"> <span class="title">Level 2</span> <span class="arrow "></span> </a>
              <ul class="sub-menu">
                <li > <a href="javascript:;"> Sub Menu </a> </li>
                <li > <a href="javascript:;"> Sub Menu </a> </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="hidden-lg hidden-md hidden-xs" id="more-widgets" > <a href="javascript:;"> <i class="fa fa-plus"></i></a>
          <ul class="sub-menu">
            <li class="side-bar-widgets">
              <p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"><i class="icon-plus"></i></a></span></p>
              <ul class="folders" >
                <li><a href="#">
                  <div class="status-icon green"></div>
                  My quick tasks </a> </li>
                <li><a href="#">
                  <div class="status-icon red"></div>
                  To do list </a> </li>
                <li><a href="#">
                  <div class="status-icon blue"></div>
                  Projects </a> </li>
                <li class="folder-input" style="display:none">
                  <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" id="folder-name">
                </li>
              </ul>
              <p class="menu-title">PROJECTS </p>
              <div class="status-widget">
                <div class="status-widget-wrapper">
                  <div class="title">Freelancer<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
                  <p>Redesign home page</p>
                </div>
              </div>
              <div class="status-widget">
                <div class="status-widget-wrapper">
                  <div class="title">envato<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
                  <p>Statistical report</p>
                </div>
              </div>
            </li>
          </ul>
        </li>
      </ul>
      <div class="side-bar-widgets">
        <p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"> <i class="fa fa-plus"></i></a></span></p>
        <ul class="folders" >
          <li><a href="#">
            <div class="status-icon green"></div>
            My quick tasks </a> </li>
          <li><a href="#">
            <div class="status-icon red"></div>
            To do list </a> </li>
          <li><a href="#">
            <div class="status-icon blue"></div>
            Projects </a> </li>
          <li class="folder-input" style="display:none">
            <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" >
          </li>
        </ul>
        <p class="menu-title">PROJECTS </p>
        <div class="status-widget">
          <div class="status-widget-wrapper">
            <div class="title">Freelancer<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
            <p>Redesign home page</p>
          </div>
        </div>
        <div class="status-widget">
          <div class="status-widget-wrapper">
            <div class="title">envato<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
            <p>Statistical report</p>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
  <div class="footer-widget">
    <div class="progress transparent progress-small no-radius no-margin">
      <div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" ></div>
    </div>
    <div class="pull-right">
      <div class="details-status"> <span data-animation-duration="560" data-value="86" class="animate-number"></span>% </div>
      <a href="lockscreen.php"><i class="fa fa-power-off"></i></a></div>
  </div>
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
      
      <div class="page-title"> 
        <h3>Tarefas</h3>
        <div class="pull-right actions">
          <button class="btn btn-primary btn-cons" type="button" id="btn-new-ticket">Nova Tarefa</button>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple transparent" id="new-ticket-wrapper" style="display:none">
           
            
            
            <div class="grid-body">
              <form class="" id="new-ticket-form">
                <div class="row form-row">
                  <div class="col-md-6">
                    <label class="form-label">Titulo da Tarefa</label>
                        <div class="controls">
                          <input type="text" class="form-control">
                        </div>
                  </div>
                  <div class="col-md-3">
                    <label class="form-label">Responsável</label>
                        <div class="controls">
                        <select id="remote" style="width:100%">
                    <option value="1">Selecionar</option>
                    <option value="1">Usuario</option>
                    <option value="1">Usuario</option>
                    <option value="1">Usuario</option>
                    <option value="1">Usuario</option>
                    <option value="1">Usuario</option>
                  </select>
                   </div>
                  </div>
                  <div class="col-md-3">
                   <label class="form-label">Data Entrega</label>
                    <div class="input-append success date  no-padding">
                    <input type="text" class="form-control">
                    <span class="add-on"><span class="arrow"></span><i class="fa fa-th"></i></span> </div>
                   </div> 
                    
                </div>
                <div class="row form-row">
                  <div class="col-md-4">
                   <label class="form-label">Tipo da Tarefa</label>
                        <div class="controls">
                          <input type="text" class="form-control">
                        </div>
                  </div>
                     <div class="col-md-2">
                   <label class="form-label">Esforço estimado</label>
                        <div class="controls">
                          <input type="text" class="form-control">
                        </div>
                  </div>
                  <div class="col-md-3">
                    <label class="form-label">Holding</label>
                        <div class="controls">
                        <select id="remote" style="width:100%">
                    <option value="1">Selecionar</option>
                    <option value="1">holding 1</option>
                    <option value="1">holding 1</option>
                    <option value="1">holding 1</option>
                    <option value="1">holding 1</option>
                    <option value="1">holding 1</option>
                  </select>
                   </div>
                   </div>
                   
                   <div class="col-md-3">
                    <label class="form-label">Cliente</label>
                        <div class="controls">
                        <select id="remote" style="width:100%">
                    <option value="1">Selecionar</option>
                    <option value="1">SQL | Nome</option>
                    <option value="1">SQL | Nome</option>
                    <option value="1">SQL | Nome</option>
                    <option value="1">SQL | Nome</option>
                    <option value="1">SQL | Nome</option>
                  </select>
                   </div>
                   </div>
                  </div>
                </div>
                <div class="row form-row">
                  <div class="col-md-12">
                    <textarea rows="8" class="form-control" id="txtMessage"  placeholder="Comentários"></textarea>
                  </div>
                </div>
                <div class="row form-row">
                  <div class="col-md-12 margin-top-10">
                    
                    <div class="pull-right">
                      <button class="btn btn-cons" type="button" id="btn-close-ticket">Fechar</button>
                      <button class="btn btn-primary btn-cons" type="submit" >Abrir tarefa</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <h4>&nbsp;&nbsp; Tarefas <span class="semi-bold">Abertas</span></h4>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple no-border">
            <div class="grid-title no-border descriptive clickable">
             <p>  <span class="text-success bold">Holding</span>&nbsp;>&nbsp;<span class="text-success bold">Cliente</span></p>
               
              <p><span class="text-success bold">Ticket #456&nbsp;&nbsp;</span><font size="+1"> Titulo da tarefa  </font> &nbsp;&nbsp;<span class="label label-warning">ATENÇÃO</span></p>
              
              <div class="col-md-6">
              <div class="progress">
                      <div data-percentage="0%"  style="width: 70%;"  class="progress-bar progress-bar-warning" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
              </div>
              
              <p>
              <div class="fa-hover col-md-8 col-sm-8" style=" color:#999; size:10px;">
              <i class="fa fa-check"></i> Estimativa de entrega: 18/06/2014 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="fa fa-clock-o"></i> Esforço estimado: 02:30 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="fa fa-calendar"></i> Limite: 19/06/2014 
              </div>
             
              </p>
              
              
               
    
             
              <div class="actions"> <a class="view" href="javascript:;"><i class="fa fa-search"></i></a> <a class="remove" href="javascript:;"><i class="fa fa-times"></i></a> </div>
            </div>
            <div class="grid-body  no-border" style="display:none">
              <div class="post">
                
                <div class="info-wrapper">
                  <div class="info">
                  Levantamento AVCB 
                  <br>
                  Finalização em Autocad
                  
            
                  
                  
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <br>
              <div class="form-actions">
                <div class="post col-md-12">
                  
                  <div class="info-wrapper">
                    <div class="info"> Olá,<br>
                      <br>
                      O Arquivo veio com erro<br>
                      <br>
                     
                      <hr>
                      <p class="small-text">Atualizado  10/29/13 as 07:21</p>
                    </div>
                    <div class="form-group">
                      <label class="form-label"><i class="fa fa-reply"></i>&nbsp;Comentar</label>
                      <div class="controls">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <h4>Tarefas <span class="semi-bold">Transferidas</span></h4>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple no-border">
            <div class="grid-title no-border descriptive clickable">
              <h4 class="semi-bold">Too many down times</h4>
              <p ><span class="text-success bold">Ticket #456</span> - Created on 10/29/13 at 06:33 - Last reply About 1 Month ago by alex&nbsp;&nbsp;<span class="label label-important">ALERT</span></p>
              <div class="actions"> <a class="expand" href="javascript:;"><i class="fa fa-search"></i></a> <a class="view" href="javascript:;"><i class="fa fa-times"></i></a> </div>
            </div>
            <div class="grid-body  no-border" style="display:none">
              <div class="post">
                <div class="user-profile-pic-wrapper">
                  <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/profiles/c2x.jpg" data-src="assets/img/profiles/c.jpg" src="assets/img/profiles/c.jpg" alt=""> </div>
                </div>
                <div class="info-wrapper">
                  <div class="info"> Hi I have installed agent to monitor the usage of the droplet done via Anturis <br>
                    and lately there was a lot of down time. One that caught my eye was this <br>
                    Incident report<br>
                    <br>
                    New Critical Incident started at 13:10 MST on Monday, October 28 <br>
                    Critical Incident started at 13:10 MST on Monday, October 28 with ace has ended at 13:51 MST on Monday, October 28.<br>
                    <br>
                    Incident duration was 41 minutes.<br>
                    <br>
                    The server did not respond for 41 minutes.As you see 41 minutes is a big deal for us as we are going to lose alot of revenue we need you guys to check if these records are correct and if so why and will this happen again? or do we need to purchase some sort of cluster ? this is a very critical situation <br>
                    <br>
                    Waiting for your reply </div>
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <br>
              <div class="form-actions">
                <div class="post col-md-12">
                  <div class="user-profile-pic-wrapper">
                    <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/profiles/c2x.jpg" data-src="assets/img/profiles/c.jpg" src="assets/img/profiles/c.jpg" alt=""> </div>
                  </div>
                  <div class="info-wrapper">
                    <div class="info"> Hi,<br>
                      <br>
                      Thank you for reaching us, We are looking into this issue and will update you.<br>
                      <br>
                      Alex<br>
                      <hr>
                      <p>Posted on 10/29/13 at 07:21</p>
                    </div>
                    <div class="form-group">
                      <label class="form-label"><i class="fa fa-reply"></i>&nbsp;Amount</label>
                      <div class="input-with-icon  right"> <i class=""></i>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple no-border">
            <div class="grid-title no-border descriptive clickable">
              <h4 class="semi-bold">Domain Propergation</h4>
              <p ><span class="text-success bold">Ticket #885</span> - Created on 10/19/13 at 06:33 - Last reply About 1 Month ago by support&nbsp;&nbsp;<span class="label label-important">ALERT</span></p>
              <div class="actions"> <a class="expand" href="javascript:;"><i class="fa fa-search"></i></a> <a class="view" href="javascript:;"><i class="fa fa-times"></i></a> </div>
            </div>
            <div class="grid-body  no-border" style="display:none">
              <div class="post">
                <div class="user-profile-pic-wrapper">
                  <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/profiles/c2x.jpg" data-src="assets/img/profiles/c.jpg" src="assets/img/profiles/c.jpg" alt=""> </div>
                </div>
                <div class="info-wrapper">
                  <div class="info"> Hi I have installed agent to monitor the usage of the droplet done via Anturis <br>
                    and lately there was a lot of down time. One that caught my eye was this <br>
                    Incident report<br>
                    <br>
                    New Critical Incident started at 13:10 MST on Monday, October 28 <br>
                    Critical Incident started at 13:10 MST on Monday, October 28 with ace has ended at 13:51 MST on Monday, October 28.<br>
                    <br>
                    Incident duration was 41 minutes.<br>
                    <br>
                    The server did not respond for 41 minutes.As you see 41 minutes is a big deal for us as we are going to lose alot of revenue we need you guys to check if these records are correct and if so why and will this happen again? or do we need to purchase some sort of cluster ? this is a very critical situation <br>
                    <br>
                    Waiting for your reply </div>
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <br>
              <div class="form-actions">
                <div class="post col-md-12">
                  <div class="user-profile-pic-wrapper">
                    <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/profiles/c2x.jpg" data-src="assets/img/profiles/c.jpg" src="assets/img/profiles/c.jpg" alt=""> </div>
                  </div>
                  <div class="info-wrapper">
                    <div class="info"> Hi,<br>
                      <br>
                      Thank you for reaching us, We are looking into this issue and will update you.<br>
                      <br>
                      Alex<br>
                      <hr>
                      <p>Posted on 10/29/13 at 07:21</p>
                    </div>
                    <div class="form-group">
                      <label class="form-label"><i class="fa fa-reply"></i>&nbsp;Amount</label>
                      <div class="input-with-icon  right"> <i class=""></i>
                        <input type="text" class="form-control" >
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple no-border ">
            <div class="grid-title no-border descriptive clickable">
              <h4 class="semi-bold">How to access via Putty</h4>
              <p ><span class="text-success bold">Ticket #152</span> - Created on 10/09/13 at 06:33 - Last reply About 1 Month ago by support&nbsp;&nbsp;</p>
              <div class="actions"> <a class="expand" href="javascript:;"><i class="fa fa-search"></i></a> <a class="view" href="javascript:;"><i class="fa fa-times"></i></a> </div>
            </div>
            <div class="grid-body  no-border" style="display:none">
              <div class="post">
                <div class="user-profile-pic-wrapper">
                  <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/profiles/c2x.jpg" data-src="assets/img/profiles/c.jpg" src="assets/img/profiles/c.jpg" alt=""> </div>
                </div>
                <div class="info-wrapper">
                  <div class="info"> Hi I have installed agent to monitor the usage of the droplet done via Anturis <br>
                    and lately there was a lot of down time. One that caught my eye was this <br>
                    Incident report<br>
                    <br>
                    New Critical Incident started at 13:10 MST on Monday, October 28 <br>
                    Critical Incident started at 13:10 MST on Monday, October 28 with ace has ended at 13:51 MST on Monday, October 28.<br>
                    <br>
                    Incident duration was 41 minutes.<br>
                    <br>
                    The server did not respond for 41 minutes.As you see 41 minutes is a big deal for us as we are going to lose alot of revenue we need you guys to check if these records are correct and if so why and will this happen again? or do we need to purchase some sort of cluster ? this is a very critical situation <br>
                    <br>
                    Waiting for your reply </div>
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <br>
              <div class="form-actions">
                <div class="post col-md-12">
                  <div class="user-profile-pic-wrapper">
                    <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/profiles/c2x.jpg" data-src="assets/img/profiles/c.jpg" src="assets/img/profiles/c.jpg" alt=""> </div>
                  </div>
                  <div class="info-wrapper">
                    <div class="info"> Hi,<br>
                      <br>
                      Thank you for reaching us, We are looking into this issue and will update you.<br>
                      <br>
                      Alex<br>
                      <hr>
                      <p>Posted on 10/29/13 at 07:21</p>
                    </div>
                    <div class="form-group">
                      <label class="form-label"><i class="fa fa-reply"></i>&nbsp;Amount</label>
                      <div class="input-with-icon  right"> <i class=""></i>
                        <input type="text" class="form-control" >
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
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
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>

<!-- END CORE JS FRAMEWORK -->
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<!-- END CORE PLUGINS -->
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
<script src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="assets/js/support_ticket.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
</body>
</html>