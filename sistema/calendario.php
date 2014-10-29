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
<script type="text/javascript" src="assets/plugins/jquery.min.js"></script>

<script>

   $(document).ready(function() {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    var idusuario = <?php echo $_SESSION ['usuarioID'];?>

    var calendar = $('#calendar').fullCalendar({
     editable: true,
     header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
     },
     
     events: "includes/php/calendario/events.php?idusuario=<?php echo $_SESSION ['usuarioID'];?>",
     
     // Convert the allDay from string to boolean
     eventRender: function(event, element, view) {
      if (event.allDay === 'true') {
       event.allDay = true;
      } else {
       event.allDay = false;
      }
     },
     selectable: true,
     selectHelper: true,
     select: function(start, end, allDay) {
     var title = prompt('Titulo do evento');     
     if (title) {
     var start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
     var end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
     $.ajax({
     url: 'includes/php/calendario/add_events.php',
     data: 'title='+ title+'&start='+ start +'&end='+ end +'&idusuario='+ idusuario ,
     type: "POST",
     success: function(json) {
     //Mensagem de alerta quendo evento for adicionado alert('Evento adicionado com sucesso');
     }
     });
     calendar.fullCalendar('renderEvent',
     {
     title: title,
     start: start,
     end: end,
     allDay: allDay
     },
     true // make the event "stick"
     );
     }
     calendar.fullCalendar('unselect');
     },
     
     editable: true,
     eventDrop: function(event, delta) {
     var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
     $.ajax({
     url: 'includes/php/calendario/update_events.php',
     data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&idusuario='+idusuario+'&id='+ event.id,
     type: "POST",
     success: function(json) {
      alert("Atualizado com sucesso");
     }
     });
     },
     eventResize: function(event) {
     var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
     $.ajax({
      url: 'includes/php/calendario/update_events.php',
      data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&idusuario='+idusuario+'&id='+ event.id,
      type: "POST",
      success: function(json) {
       alert("Atualizado com sucesso");
      }
     });

  },

  eventClick: function(event) {
        var decision = confirm("Deseja excluir este evento?"); 
        if (decision) {
        $.ajax({
        type: "POST",
        url: "includes/php/calendario/delete_events.php",

        data: "&id=" + event.id
        });
        $('#calendar').fullCalendar('removeEvents', event.id);

        } else {
        }
       }
     
    });
    
   });

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
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>

    <div class="content" align="center">
      <div class="row" style="max-height:600px;" >
       <div class="col-md-9 tiles white ">
            <div class="tiles-body">
              <div class="full-calender-header">
               
                <div class="clearfix"></div>
              </div>
              <div id='calendar'></div>
            </div>
          </div>
      </div>
      <br>
    </div>
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
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui-touch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- PAGE JS -->


<!-- BEGIN CORE TEMPLATE JS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
</body>
</html>