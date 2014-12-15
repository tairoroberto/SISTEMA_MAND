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
<script type="text/javascript">
  /*
var req;

function loadSelect(){
    req = null;
    var url = 'buscar_sql_processos_cadastrar.php';
    var id_holding = document.getElementById('SelectHolding').value;
    var id_requerente = document.getElementById('SelectRequerente').value;
    // Procura por um objeto nativo (Mozilla/Safari)
    if (window.XMLHttpRequest) {
        req = new XMLHttpRequest();
        req.onreadystatechange = processReqChange;
        req.open("GET", url+'?id_holding='+id_holding+'&id_requerente='+id_requerente, true);
        req.send(null);
    // Procura por uma versao ActiveX (IE)
    } else if (window.ActiveXObject) {
        req = new ActiveXObject("Microsoft.XMLHTTP");
        if (req) {
            req.onreadystatechange = processReqChange;
            req.open("GET", url+'?id_holding='+id_holding+'&id_requerente='+id_requerente, true);
            req.send();
        }
    }
}

function processReqChange(){
    // apenas quando o estado for "completado"
    if (req.readyState == 4) {
        // apenas se o servidor retornar "OK"
        if (req.status == 200) {
            // procura pela div id="atualiza" e insere o conteudo
            // retornado nela, como texto HTML
            document.getElementById('SelectSql').innerHTML = req.responseText;
        } else {
            alert("Houve um problema ao obter os dados:\n" + req.statusText);
        }
    }
}
*/

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
            <div class="clearfix"></div>
            <div class="content">
              <div class="page-title"> 
                <h3>Cadastrar - <span class="semi-bold">Processo</span></h3>
              </div>
              
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border"></div>
                    <div class="grid-body no-border">
                    <form class="form-no-horizontal-spacing" id="formProcesso" name="formProcesso" method="POST" 
                            action="includes/php/CadastraProcesso.php">
                      <div class="row column-seperation">
                        <div class="col-md-12">      
                          <div class="row form-row">

                            <div class="col-md-4">
                              <select id="SelectHolding" name="SelectHolding" style="width:100%" >                   
                                  <option value="Holding">Holding</option>
                                  <?php
                                   
                                  /********************************************************************************************/
                                  /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                                  /********************************************************************************************/
                                   
                                      $buscar = new Conexao();
                                      $buscar->conectar();
                                      $buscar->selecionarDB();                      

                                     $buscar->set('sql',"SELECT `IdEmpresa`,`NomeFantasia` FROM `CadastroHolding` ");
                                     
                                      $query= $buscar->executarQuery();
                                     while($retorno=mysql_fetch_array($query)) { 
                                    ?> 
                                      <option value="<?php echo $retorno['IdEmpresa'] ?>"> <?php echo $retorno['NomeFantasia'] ?>
                                      </option>               
                                    <?php } ?>                                
                                </select>
                            </div>                            
                            
                            <div class="col-md-4">
                              <select id="SelectRequerente" name="SelectRequerente" style="width:100%" >                   
                                   <option value="Requerente">Requerente</option>
                                  <?php 

                                  /********************************************************************************************/
                                  /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                                  /********************************************************************************************/
                                   
                                      $buscar = new Conexao();
                                      $buscar->conectar();
                                      $buscar->selecionarDB();                      

                                     $buscar->set('sql',"SELECT `IdRequerente`,`Nome` FROM `CadastroRequerente` ");
                                     
                                      $query= $buscar->executarQuery();
                                     while($retorno=mysql_fetch_array($query)) { 
                                    ?> 
                                      <option value="<?php echo $retorno['IdRequerente'] ?>"> <?php echo $retorno['Nome'] ?>
                                      </option>               
                                    <?php } ?>                                
                                </select>
                            </div>
                            
                            
                            <div class="col-md-4"  id="div_sql_processo">
                              <select  id="SelectSql" name="SelectSql" style="width:100%" >                   
                                  <option value="SQL">SQL</option>
                                  <?php 

                                  /********************************************************************************************/
                                  /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                                  /*******************************************************************************************/
                                   
                                      $buscar = new Conexao();
                                      $buscar->conectar();
                                      $buscar->selecionarDB();                      

                                     $buscar->set('sql',"SELECT `IdImovel`,`NumeroContribuinte` FROM `CadastraImovel` ");
                                     
                                      $query= $buscar->executarQuery();
                                     while($retorno=mysql_fetch_array($query)) { 
                                    ?> 
                                     <option value="<?php echo $retorno['IdImovel'] ?>"> <?php echo $retorno['NumeroContribuinte'] ?>
                                      </option>             
                                    <?php }  ?>                                
                                </select>
                            </div>
                           
                        </div>





                        <div class="row form-row">
                            <div class="col-md-4">
                            <input name="NumeroProcesso" id="NumeroProcesso" type="text"  class="form-control" placeholder="Numero do processo">
                            </div>
                            <div class="col-md-8">
                            <input name="AssuntoProcesso" id="AssuntoProcesso" type="text"  class="form-control" placeholder="Assunto">
                            </div>
                            </div>
                         <div class="row form-row">
                          <div class="col-md-8">
                         <button class="btn btn-primary btn-cons" type="button"
                         			onclick="validaProcesso(); document.forms[0].submit()">Cadastrar </button>
                         </div>
                         </div> 
                        </div>
                        
                        
                </div>
              
            <!-- END FORM -->
              
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