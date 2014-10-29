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
<link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
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
<script src="assets/plugins/jquery.quicksearch.js" type="text/javascript"></script> 

<!-- END CSS TEMPLATE -->


<script type="text/javascript">
  function selecionaProcesso(num){
    if (formProcessoLista.ProcessoAux[num]) {
        formProcessoLista.IdProcessoAux.value = formProcessoLista.ProcessoAux[num].value; 
        document.formProcessoLista.submit();
    }else{
        formProcessoLista.IdProcessoAux.value = formProcessoLista.ProcessoAux.value; 
        document.formProcessoLista.submit();
    }
}
//busca na tabela


</script>

    <script>
  
    function mudaHolding(){
         mudaId();
          $("#txtHolding").quicksearch("table tbody tr", {
            noResults: '#noresults',
            stripeRows: ['odd', 'even'],
            loader: 'span.loading',
            minValLength: 2
          });
       }

     function mudaRequerente(){
         mudaId();
         $("#txtRequerente").quicksearch("table tbody tr", {
            noResults: '#noresults',
            stripeRows: ['odd', 'even'],
            loader: 'span.loading',
            minValLength: 2
          });
       }

   function mudaImovel(){
         mudaId();
          $("#txtImovel").quicksearch("table tbody tr", {
            noResults: '#noresults',
            stripeRows: ['odd', 'even'],
            loader: 'span.loading',
            minValLength: 2
          });
       }

      function mudaId(){
        formProcessoLista.txtHolding.value = formProcessoLista.SelectHolding.value;
        formProcessoLista.txtRequerente.value = formProcessoLista.SelectRequerente.value;
        formProcessoLista.txtImovel.value = formProcessoLista.SelectImovel.value;
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
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
     
      
          
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="clearfix"></div>
            <div class="content">
              <div class="page-title"> 
                <h3>Consultar - <span class="semi-bold">Processo</span></h3>
              </div>
              
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border"></div>
                    <div class="grid-body no-border">
                    <form class="form-no-horizontal-spacing" id="formProcessoLista" name="formProcessoLista" 
                                action="processos" method="POST">
                      <div class="row column-seperation">
                        <div class="col-md-12">
                          <h4>Filtro</h4>
                          <input type="hidden" id="txtHolding">
                          <input type="hidden" id="txtRequerente">
                          <input type="hidden" id="txtImovel">
                         
                          <div class="row form-row">
                            <div class="col-md-3">
                              <select id="SelectHolding" name="SelectHolding" style="width:100%" onchange="mudaHolding();">
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
                        <option value="<?php echo $retorno['NomeFantasia'] ?>"> <?php echo $retorno['NomeFantasia'] ?>
                        </option>
 
                      <?php } ?>n>

                  
                  </select>
                            </div>
                            <div class="col-md-3">
                              <select id="SelectRequerente" name="SelectRequerente" style="width:100%" onchange="mudaRequerente();">
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
                        <option value="<?php echo $retorno['Nome'] ?>"> <?php echo $retorno['Nome'] ?>
                        </option>
 
                      <?php } ?>
                  </select>
                            </div>
                            <div class="col-md-3">
                              <select id="SelectImovel" name="SelectImovel" style="width:100%" onchange="mudaImovel();">
                              <option value="Imóvel">Imóvel</option>
                  <?php 

                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/
                     
                        $buscar = new Conexao();
                        $buscar->conectar();
                        $buscar->selecionarDB();                      

                       $buscar->set('sql',"SELECT `IdImovel`,`NumeroContribuinte` FROM `CadastraImovel` ");
                       
                        $query= $buscar->executarQuery();
                       while($retorno=mysql_fetch_array($query)) { 
                      ?> 
                        <option value="<?php echo $retorno['NumeroContribuinte'] ?>"> <?php echo $retorno['NumeroContribuinte'] ?>
                        </option>
 
                      <?php } ?>
                      
                  </select>
                            </div>
                            <div class="col-md-1">
                              <input type="hidden" name="IdProcessoAux" id="IdProcessoAux" >
                           <!--<button type="button" class="btn btn-primary btn-cons" onclick="buscarTabela();">Filtrar</button>-->   
                            </div>
                          </div>
                        
                         
                          
                        </div>
                        
                        
                </div>
              
            <!-- END FORM -->
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-12">
                        <div class="grid simple ">
                            <div class="grid-title no-border">
                               
                            </div>
                            <div class="grid-body no-border">
                                  
                                   <table class="table table-hover table-condensed" id="">
                                                <thead>
                                                    <tr>
                                                    	<th style="width:1%"></th>
                                                        <th style="width:15%">Holding</th>
                                                        <th style="width:15%;">Requerente</th>
                                                        <th style="width:15%;">SQL</th>
                                                         <th style="width:27%;">Endereço</th>
                                                         <th style="width:27%;">Assunto</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
    
               <?php 

                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/
                     
                        $buscarProcesso = new Conexao();
                        $buscarProcesso->conectar();
                        $buscarProcesso->selecionarDB(); 
                        $cont = 0;
                       
                       $buscarProcesso->set('sql',"SELECT CadastraPocesso.*,CadastroHolding.*, CadastroRequerente.*, CadastraImovel.*
                                                   FROM CadastroHolding, CadastroRequerente,CadastraImovel
                                                   INNER JOIN `CadastraPocesso`
                                                   WHERE  CadastroHolding.IdEmpresa = CadastraPocesso.IdEmpresa AND
                                                          CadastroRequerente.IdRequerente =  CadastraPocesso.IdRequerente AND
                                                          CadastraImovel.IdImovel = CadastraPocesso.IdImovel ");

                       $query= $buscarProcesso->executarQuery();
                       while($retorno=mysql_fetch_object($query)) {  ?> 

                                          <tr>    
                                             <td onclick="selecionaProcesso(<?php echo $cont;?>);">
                                               <a href="#">
                                                 <i class="fa fa-paste"> 
                                                    <input type="hidden" name="ProcessoAux" id="ProcessoAux" value="<?php echo $retorno->IdProcesso;?>">                                                   
                                                 </i>                                      
                                               </a>  
                                             </td>                            
                                             <td><?php echo $retorno->NomeFantasia ?></td>
                                             <td><?php echo $retorno->Nome ?></td>
                                             <td><?php echo $retorno->NumeroContribuinte ?></td>
                                             <td><?php echo $retorno->Rua.", Nº ".$retorno->Numero ?></td>
                                             <td><?php echo $retorno->AssuntoProcesso ?></td>                                                        
                                          </tr>
                 
                                     <?php $cont++; } ?>                                                     
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

<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<!-- BEGIN CORE JS FRAMEWORK-->

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