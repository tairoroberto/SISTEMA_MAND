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

<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 

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
<script type="text/javascript" src="assets/js/bootstrap.file-input.js"></script>
<!-- END CSS TEMPLATE -->




<script type="text/javascript">
  function selecionaProcesso(num){
    if (formProcessoListaCliente.ProcessoAux[num]) {
        formProcessoListaCliente.IdProcessoAux.value = formProcessoListaCliente.ProcessoAux[num].value; 
        document.formProcessoListaCliente.submit();
    }else{
        formProcessoListaCliente.IdProcessoAux.value = formProcessoListaCliente.ProcessoAux.value; 
        document.formProcessoListaCliente.submit();
    }
}

function enviaFormClienteArea(documento){
    if (documento == "documento") {
        formProcessoListaCliente.action = "includes/php/SalvarDocumentoCliente.php";
        formProcessoListaCliente.submit();
        exit();
    }
}

function validaClienteArea(){
      if (formProcessoListaCliente.Documento.value == "") {
          alert("Selecione um documento para enviar");
          exit();
      } 
}

$(document).ready(function(){
    $('input[type=file]').bootstrapFileInput();
  });
</script>


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
  <form id="formProcessoListaCliente" name="formProcessoListaCliente" method="POST" action="cliente-processos" enctype="multipart/form-data">
    <div class="clearfix"></div>
        <div class="content">
          <div class="row-fluid">


         <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="grid simple ">
                                    <div class="grid-title no-border">
                                          
                                    </div>
                                  <div class="grid-body no-border">
                                           <h3>Solicitação  <span class="semi-bold">Documentos</span></h3>
                                            
                                            <br>
                                          <table class="table table-striped table-flip-scroll cf">
                                              <thead class="cf">
                                                  <tr>
                                                      <th>
                                                            
                                                      </th>
                                                      <th>Data </th>
                                                      <th>Documentos</th>
                                                      <th>Enviar</th>
                                                  </tr>
                                              </thead>
                                              <tbody>                                                 
                                                  
                                                 
                                            <?php    
                                                      /**********************************************************************************************/
                                                      /*   Variáveis para a busca no banco, retorna os dados da oportunidade castradas             */
                                                      /********************************************************************************************/                 
                                                      $buscaDocumentos = new Conexao();
                                                      $buscaDocumentos->conectar();
                                                      $buscaDocumentos->selecionarDB(); 
                                                      $Data = date('d/m/Y');;
                                                      $IdUsuario = $_SESSION['usuarioID'];
                                                                                                                                  
                                                      $buscaDocumentos->set('sql',"SELECT * FROM DocumentosUsuario
                                                                                            WHERE IdUsuario = $IdUsuario "); 
                                                                                                                                                 
                                                      $query= $buscaDocumentos->executarQuery();?>
                                                      <tr>
                                                          <td>
                                                             <span class="label label-important">NEW!</span>
                                                          </td>
                                                          <td><?php echo $Data;?></td>
                                                          <td></td>
                                                          <td> 
                                                            <div class="upload">
                                                                <input type="file" title="Upload..." id="Documento" class="btn btn-primary" name="Documento" title="Upload.."> 
                                                            </div>                                                          
                                                          </td>
                                                      </tr>

                                                      <?php
                                                      while($retornoServicosOrcamentoB = mysql_fetch_object($query)) {  ?>
                                                         
                                                         <tr>
                                                            <td>
                                                               <span class="label label-success">Concluído</span>
                                                            </td>
                                                            <td>02/12/2014</td>
                                                            <td>IPTU</td>
                                                            <td>Enviado</td>
                                                        </tr>

                                                      <?php } ?>
                                                  
                                              </tbody>
                                          </table>
                                          <!--Auxiliar para ,envio de documnento-->
                                          <input type="hidden" id="IdUsuario" name="IdUsuario" value="<?php echo $IdUsuario;?>">
                                          <button class="btn btn-primary btn-cons" type="button"
                                              onclick="validaClienteArea();enviaFormClienteArea('documento');">Salvar Documento </button>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">          
                        <div class="row">
                            <div class="col-md-12">
                                <div class="grid simple ">
                                    <div class="grid-title no-border">
                                          
                                       
                                    </div>
                                    <div class="grid-body no-border">

                                    <?php 

                                     $buscarUsuario = new Conexao();
                                     $buscarUsuario->conectar();
                                     $buscarUsuario->selecionarDB(); 

                                     
                                      
                                      $buscarUsuario->set('sql',"SELECT * FROM Usuarios WHERE  IdUsuario = '$IdUsuario' ");
                                      $retornoUsuario = mysql_fetch_object($buscarUsuario->executarQuery());

                                     ?>
                       <h4>Custos extra <span class="semi-bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "Saldo Inicial:R$ ".$retornoUsuario->CreditoUsuario;?></span></h4>
                       
                                          
                       <br>
                       <table class="table table-bordered no-more-tables">
                        <thead>
                          <tr>
                            
                            <th class="text-center" style="width:5%">Data</th>
                            <th class="text-center" style="width:25%">Descrição</th>
                            <th class="text-center" style="width:20%">Custo</th>
                            <th class="text-center" style="width:20%">Crédito</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php 
                                   
                                                                                                                                                                  
                              /********************************************************************************************/
                             /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                             /********************************************************************************************/
                                                     
                                   $buscarTaxaUsuario = new Conexao();
                                   $buscarTaxaUsuario->conectar();
                                   $buscarTaxaUsuario->selecionarDB(); 

                                   
                                    $creditoCliente = str_replace("." , '' ,$retornoUsuario->CreditoUsuario); 
                                    $creditoCliente = str_replace("," , '.' ,$creditoCliente); 

                                   $buscarTaxaUsuario->set('sql',"SELECT * FROM TaxasUsuario 
                                                                  WHERE  IdUsuario = '$IdUsuario' AND
                                                                         checado = 'cobrado' ");

                                    $queryUsuario = $buscarTaxaUsuario->executarQuery();                                                      
                                    while($retornoTaxaUsuario = mysql_fetch_object($queryUsuario)) {  ?>

                                       <!--recebe o valor do seviço para poder formatar as casas decimais-->
                                       <?php
                                            $ValorTaxa = str_replace("." , '' , $retornoTaxaUsuario->ValorTaxa);  
                                            $ValorTaxa = str_replace("," , '.' , $ValorTaxa );
                                            $creditoCliente =  $creditoCliente - $ValorTaxa; 
                                            $IdTaxa = $retornoTaxaUsuario->IdTaxa;
                                        ?>
                                                    
                                        <tr> <!--Data do orçamento B-->
                                            <td> <?php echo $retornoTaxaUsuario->DataTaxa;?></td>
                                             <!--Titulo so serviço -->
                                             <td class="text-center"><?php echo $retornoTaxaUsuario->DescricaoTaxa;?></td>
                                         
                                              <!--Valor do da taxas  -->
                                              <td class="text-right"><span style="color:#C33;">R$ -<?php echo $retornoTaxaUsuario->ValorTaxa;?></span></td>
                                              <td class="text-center"><span style=" color:#063;">R$ <?php echo number_format($creditoCliente, 2, ',', '.');?></span></td>
                                           
                                            </tr>  

                                         <?php } ?>
                                           
                                        </tbody>
                                       </table>

                                       <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <span class="semi-bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <font color="2E8B57"><?php echo "Saldo Atual:R$ ".number_format($creditoCliente, 2, ',', '.');?> </font>
                                          </span>
                                       </h4>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

        <!--Auxiliar para enviar para pagina de processos-->
          <input type="hidden" name="IdProcessoAux" id="IdProcessoAux" >  
          <div class="page-title"> 
        <h3>Visualizar - <span class="semi-bold">Usuários</span></h3>
      </div>
            <div class="span12">
              <div class="grid simple ">
              
                <div class="grid-body ">
                  <table class="table table-hover table-condensed" id="example">
                    <thead>
                      <tr>
                        <th style="width:3%"></th>
                        <th style="width:23%">Holding</th>
                        <th style="width:23%">Requerente</th>
                        <th style="width:10%">Sql</th>
                        <th style="width:20%">Nome Processo</th>
                        <th style="width:30%">Assunto</th>
                        
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
                            $PermissaoProcesso = $_SESSION['PermissaoProcesso'];                       
                            $cont = 0;

                           if ($PermissaoProcesso != "Todos") {
                               $buscarProcesso->set('sql',"SELECT CadastraPocesso.*,CadastroHolding.*, CadastroRequerente.*, CadastraImovel.*
                                                           FROM CadastroHolding, CadastroRequerente,CadastraImovel
                                                           INNER JOIN `CadastraPocesso`
                                                           ON  CadastraPocesso.IdProcesso = '$PermissaoProcesso' 
                                                           GROUP BY CadastraPocesso.IdProcesso");

                                echo "Teste 2";
                            }


                           
                            $query= $buscarProcesso->executarQuery();
                           while($retornoProcesso=mysql_fetch_object($query)) { ?> 
                           
                              <tr >
                                 <td onclick="selecionaProcesso(<?php echo $cont;?>);">
                                  <a href="#">
                                     <i class="fa fa-paste"> 
                                       <input type="hidden" name="ProcessoAux" id="ProcessoAux" value="<?php echo $retornoProcesso->IdProcesso;?>">                                                   
                                     </i>                                      
                                  </a>  
                                 </td>
                                <td class="v-align-middle"><?php echo $retornoProcesso->RazaoSocial; ?></td>
                                <td class="v-align-middle"><?php echo $retornoProcesso->Nome; ?></td>
                                <td class="v-align-middle"><?php echo $retornoProcesso->NumeroContribuinte; ?></td>
                                <td class="v-align-middle"><?php echo $retornoProcesso->NomeProcesso; ?></td>                        
                                <td class="v-align-middle"><?php echo $retornoProcesso->AssuntoProcesso; ?> </td>
                              </tr>
     
                          <?php $cont++; } ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h3>&nbsp;</h3>
      </form>
    </div>
  </div>
 </div>
<!-- END CONTAINER --> 
<?php formBuscaSql(); ?>
<!-- END CONTAINER -->

<!-- BEGIN CORE JS FRAMEWORK-->  
<!-- BEGIN PAGE LEVEL JS --> 	
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS --> 	

<!-- BEGIN CORE TEMPLATE JS --> 
<script src="assets/js/core.js" type="text/javascript"></script> 
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS --> 


<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script><!-- BEGIN CORE JS FRAMEWORK-->
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