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
<script type="text/javascript">
  function enviaFormOportunidadeLista(num){
        formOportunidadeLista.IdOportunidadeAux.value = num;
        formOportunidadeLista.submit();
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
  </div>
  </div>
  <a href="#" class="scrollup">Subir</a>
   
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <form id="formOportunidadeLista" name="formOportunidadeLista" method="POST" action="oportunidade-acoes">
    
    <div class="clearfix"></div>
    <div class="content">  
		<div class="page-title"> 
        <h3>Visualizar - <span class="semi-bold">Oportunidades</span></h3>
      </div>
        
        
        
        
        <div class="row">
                    <div class="col-md-12">
                        <div class="grid simple ">
                            
                            <div class="grid-body no-border">
                                 
                                    <table class="table no-more-tables">
                                        <thead>
                                            <tr>
                                                <th style="width:1%"></th>
                                                <th style="width:9%">Cliente</th>
                                                <th style="width:11%">Endereço</th>
                                                <th style="width:11%">Serviço</th>
                                                <th style="width:6%">Status</th>
                                                <th style="width:6%">Data Inicio</th>
                                                <th style="width:10%">Viabilidade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php                     
                                              /**********************************************************************************************/
                                              /*   Variáveis para a busca no banco, retorna os dados da oportunidade castradas             */
                                              /********************************************************************************************/                 
                                                  $buscarOportunidade = new Conexao();
                                                  $buscarOportunidade->conectar();
                                                  $buscarOportunidade->selecionarDB(); 
                                                                            
                                                  $buscarOportunidade->set('sql',"SELECT * FROM Oportunidade                                                                                  
                                                                                           WHERE Oportunidade.Status != 'Viável' AND 
                                                                                                 Oportunidade.Status != 'Pronto para enviar' AND 
                                                                                                 Oportunidade.Status != 'Enviado' AND 
                                                                                                 Oportunidade.Status != 'Prorrogar' AND 
                                                                                                 Oportunidade.Status != 'Negociar' AND
                                                                                                 Oportunidade.Status != 'Enviar outro orçamento' AND
                                                                                                 Oportunidade.Status != 'Perdido' AND 
                                                                                                 Oportunidade.Status != 'Fechado' AND 
                                                                                                 Oportunidade.Status != 'Rejeitado' AND 
                                                                                                 Oportunidade.Status != 'Orçamento Aceito'

                                                                                           GROUP BY IdOportunidade");
                                                     
                                                  $query= $buscarOportunidade->executarQuery();
                                                  while($retornoOportunidade = mysql_fetch_object($query)) { ?> 

                                                      <tr>   
                                                          <td onclick="enviaFormOportunidadeLista(<?php echo $retornoOportunidade->IdOportunidade;?>)"> <a href="#"><i class="fa fa-paste"></i></a> </td>                                            
                                                          <td class="v-align-middle"><?php echo $retornoOportunidade->RazaoSocial;?></td>
                                                          <td class="v-align-middle"><span class="muted"><?php echo $retornoOportunidade->EnderecoArea;?></span></td>
                                                          <td class="v-align-middle"><span class="muted"><?php echo $retornoOportunidade->ServicoSolicitado;?></span>
                                                          </td>
                                                          <td><?php echo $retornoOportunidade->Status;?></span></td>
                                                          <td><span class="muted"><?php echo $retornoOportunidade->DataSolicitacao;?></span></td>
                                                          <td class="v-align-middle">
                                                              <?php echo $retornoOportunidade->Viabilidade;?>
                                                          </td>
                                                      </tr>

                                                  <?php } ?>

                                                  <!--Auxiliares para envio ao serem selecionados -->
                                                  <input type="hidden" name="IdOportunidadeAux" id="IdOportunidadeAux">
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
        
    </div>
  </div>

  
 </div>
<!-- END CONTAINER --> 
<?php formBuscaSql(); ?>
<!-- END CONTAINER -->

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