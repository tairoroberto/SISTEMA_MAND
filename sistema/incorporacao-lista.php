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
  /*********************************************************************************************/
  /*           Função para preencher o campo de incorporação ao selecionar item em lista       */
  /*             Preenchimento é feito para atualizar banco ao clicar em botão                 */
  /*********************************************************************************************/

    function selecionaIncorporacao(item,valor){

    formIncorporacaoLista.IdIncorporacaoAux.value = valor; 
    document.formIncorporacaoLista.submit(); 
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

  <!-- BEGIN PAGE CONTAINER-->

  <div class="page-content">
   
        
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

        <div class="clearfix"></div>
        <div class="content">
          <div class="row-fluid">
          
          <div class="page-title"> 
          <h3>Visualizar - <span class="semi-bold">Incorporação</span></h3>
           </div>
            <div class="span12">
              <div class="grid simple ">
              <form name="formIncorporacaoLista" id="formIncorporacaoLista" method="POST"
                        action="incorporacao-visualizar">
                <div class="grid-body ">
                  <input type="hidden" id="IdIncorporacaoAux" name="IdIncorporacaoAux">
                  <table class="table table-hover table-condensed" id="example">
                    <thead>
                      <tr>
                        <th style="width:1%"> </th>
                        <th style="width:7%">Sigla</th>
                        <th style="width:13%">Titulo</th>
                        <th style="width:13%">Bairro</th>
                        <th style="width:13%">Cidade</th>
                        <th style="width:13%">Metragem</th>
                        <th style="width:13%">Valor m²</th>
                        <th style="width:13%">Projeto</th>
                        <th style="width:13%">Atividade</th>
                      </tr>

                    </thead>
                    <tbody>
                    
                    <?php 
                    /********************************************************************************************/
                    /*                       Busca o conteudo da tabela incorporação                            */
                    /********************************************************************************************/
                     
                        $buscarIncorporacao = new Conexao();
                        $buscarIncorporacao->conectar();
                        $buscarIncorporacao->selecionarDB();                      

                       $buscarIncorporacao->set('sql',"SELECT * FROM `CadastraIncorporacao` ORDER BY `IdIncorporacao` ");
                       
                        $query= $buscarIncorporacao->executarQuery();
                       while($retornoIncorporacao = mysql_fetch_object($query)) { 
                      ?> 
                        <tr>
                          <td onclick="selecionaIncorporacao(this,<?php echo $retornoIncorporacao->IdIncorporacao ?>);"><a href="#"><i class="fa fa-paste"></i>
                          </a></td>
                          <td class="v-align-middle"><?php echo $retornoIncorporacao->SiglaIncorporacao ?></td>
                          <td class="v-align-middle"><?php echo $retornoIncorporacao->TituloIncorporacao ?></td>
                          <td class="v-align-middle"><?php echo $retornoIncorporacao->BairroIncorporacao ?></td>
                          <td class="v-align-middle"><?php echo $retornoIncorporacao->CidadeIncorporacao ?></td>
                          <td class="v-align-middle"><?php echo $retornoIncorporacao->MetragemIncorporacao ?></td>
                          <td class="v-align-middle">R$ <?php echo $retornoIncorporacao->ValorVendaIncorporacao ?></td>
                          <td class="v-align-middle"><?php echo $retornoIncorporacao->situacao ?></a></td>
                          <td class="v-align-middle"><?php echo $retornoIncorporacao->AtividadeIncorporacao ?></td>      
                        </tr>
 
                      <?php } ?>                      
                      
                    </tbody>
                  </table>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h3>&nbsp;</h3>
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