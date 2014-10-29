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
  function enviaFormOrcamentoLista(num,status){
        formOrcamentoLista.IdOportunidadeAux.value = num;
        if (status == "Viável") {
            formOrcamentoLista.action = "orcamentoA-cadastro";
            formOrcamentoLista.submit();
        }
        if (status == "Pronta para enviar") {
            formOrcamentoLista.action = "orcamentoB-cadastro";
            formOrcamentoLista.submit();
        }
        if (status == "Enviado") {
            formOrcamentoLista.action = "orcamento-acoes-B";
            formOrcamentoLista.submit();
        }
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
  <a href="#" class="scrollup">Subir</a>
   
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <form id="formOrcamentoLista" name="formOrcamentoLista" method="POST" action="orcamentoA-cadastro.php">    
    <div class="clearfix"></div>
    <div class="content">  
		<div class="page-title"> 
        
      </div>
        
        
        
        
        <div class="row">
                    <div class="col-md-12">
                        <div class="grid simple ">
                            
                            <div class="grid-body no-border">
                                 
                                    <table class="table no-more-tables">
                                        <thead>
                                            <tr>
                                                <th style="width:20%"><h4><span class="semi-bold">Data de envio</span></h4></th>
                                                <th style="width:20%"><h4><span class="semi-bold">Nome cliente</span></h4></th>
                                                <th style="width:60%"><h4><span class="semi-bold">Link gerado para envio</span></h4></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php                     
                                                /**********************************************************************************************/
                                                /*   Variáveis para a busca no banco, retorna os dados da oportunidade castradas             */
                                                /********************************************************************************************/                 
                                                    $buscarLinkOrcamnetoB = new Conexao();
                                                    $buscarLinkOrcamnetoB->conectar();
                                                    $buscarLinkOrcamnetoB->selecionarDB(); 
                                                                              
                                                    $buscarLinkOrcamnetoB->set('sql',"SELECT LinkOrcamentoB.*, CadastraOrcamentoB.*,Oportunidade.* 
                                                                                      FROM CadastraOrcamentoB, Oportunidade  
                                                                                      INNER JOIN LinkOrcamentoB                                                                                 
                                                                                      WHERE LinkOrcamentoB.IdOportunidade = Oportunidade.IdOportunidade AND 
                                                                                            LinkOrcamentoB.IdOrcamentoB = CadastraOrcamentoB.IdOrcamentoB 
                                                                                      GROUP BY LinkOrcamentoB.IdLinkOrcamnetoB
                                                                                      ORDER BY LinkOrcamentoB.IdLinkOrcamnetoB DESC");
                                                       
                                                    $query= $buscarLinkOrcamnetoB->executarQuery();
                                                    while($retornoLinkOrcamnetoB = mysql_fetch_object($query)) { ?> 

                                                      <tr>
                                                       <td class="v-align-middle">
                                                               <?php echo $retornoLinkOrcamnetoB->DataEnvio; ?>                                            
                                                       </td>

                                                       <td class="v-align-middle">
                                                               <?php echo $retornoLinkOrcamnetoB->RazaoSocial; ?>                                            
                                                       </td>

                                                        <td class="v-align-middle">
                                                              <a href="../<?php echo $retornoLinkOrcamnetoB->Endereco; ?>" target = "_blank">
                                                                 http://mandprojetos.com.br/<?php echo $retornoLinkOrcamnetoB->Endereco;?>                                                  
                                                              </a>                                              
                                                         </td>
                                                      </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>
                                 </div>
                             </div>
                          </div>
                      </div>
                   </div>
                </form>
              </div>

        
 </div>
<!-- END CONTAINER --> 
<?php formBuscaSql(); ?>
<!-- END CONTAINER -->

<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script><!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
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