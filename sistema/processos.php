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
<!-- Inclui o arquivos para validação de campos-->
<script type="text/javascript" src="includes/js/ValidaCampos.js"></script>

<!--Mascara para inputs-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="assets/plugins/jquery-mask/jquery.maskedinput.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-mask/jquery.mask.js"></script>



<script type="text/javascript">
  jQuery(function($){
    $("#DataDomProcessoDetalhe").mask("99/99/9999");  

});

  function enviarFichaTecnica(num){
      formEnviaFichaTecnica.imovelAux.value = num;
      formEnviaFichaTecnica.action = "imovel-ficha-tecnica";
      formEnviaFichaTecnica.submit();
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
          <div class="row-fluid">
              <div class="row">
                  <div class="col-md-6">                    
                      <div class="grid-body">
                        <?php 
                        /********************************************************************************************/
                        /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                        /********************************************************************************************/
                        $IdProcesso; 
                        $buscarProcesso = new Conexao();
                        $buscarProcesso->conectar();
                        $buscarProcesso->selecionarDB();
                        if (isset($_POST['IdProcessoAux'])) {
                           $IdProcesso = $_POST['IdProcessoAux']; 
                         } else{
                            $IdProcesso = $_GET['IdProcessoAux']; 
                         }
                                            

                       $buscarProcesso->set('sql',"SELECT CadastraPocesso.*,CadastroHolding.*, CadastroRequerente.*, CadastraImovel.*
                                                   FROM CadastroHolding, CadastroRequerente,CadastraImovel
                                                   INNER JOIN `CadastraPocesso`
                                                   WHERE  CadastroHolding.IdEmpresa = CadastraPocesso.IdEmpresa AND
                                                          CadastroRequerente.IdRequerente =  CadastraPocesso.IdRequerente AND
                                                          CadastraImovel.IdImovel = CadastraPocesso.IdImovel AND
                                                          CadastraPocesso.IdProcesso = $IdProcesso ");
                       
                        $retornoProcesso = mysql_fetch_object($buscarProcesso->executarQuery()); ?> 
                        
                         <h4><span class="semi-bold"><?php echo "$retornoProcesso->NumeroContribuinte "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $retornoProcesso->SubPrefeitura"; ?></span></h4>
                         <h4><?php echo $retornoProcesso->LocalImovel.", ".$retornoProcesso->CodLog; ?></h4>
                         <h4><?php echo "$retornoProcesso->NomeFantasia"; ?></h4>                                   
                                                
                      </div>
                  </div>
                      
                  <div class="col-md-6">          
                      <div class="grid-body" align="right">                 
                            <h1 class="light"><?php echo "$retornoProcesso->NomeProcesso"; ?></h1>
                            <h4><?php echo "$retornoProcesso->AssuntoProcesso"; ?></h4>     
                      </div>
                  </div>
            </div>

    <div class="blog-bar">
                  <a href="#" ><i class="icon-eye-open"></i></a> <a href="#" ><i class="icon-comment"></i></a>
    </div>      
        <div class="row-fluid">
            <div class="span12">
               <div class="grid simple ">           
                  <div class="grid-body ">
                    <table class="table" id="example3" >
                      <thead>
                          <tr>
                          <th width="5%">Alertas</th>
                          <th width="20%">Data</th>
                          <th width="20%">Unidade</th>
                          <th width="55%">Descrição</th>
                        </tr>
                      </thead>
                         <tbody>
                                <?php 
                                /********************************************************************************************/
                                /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                                /********************************************************************************************/
                               
                                  $buscarProcessoDetalhe = new Conexao();
                                  $buscarProcessoDetalhe->conectar();
                                  $buscarProcessoDetalhe->selecionarDB(); 
                                 
                                 $buscarProcessoDetalhe->set('sql',"SELECT * FROM DetalheProcesso
                                                             INNER JOIN `CadastraPocesso`
                                                             ON  DetalheProcesso.IdProcesso = $retornoProcesso->IdProcesso 
                                                             GROUP BY IdDetalheProcesso");

                                 $query2= $buscarProcessoDetalhe->executarQuery();
                                 while($retornoProcessoDetalhe=mysql_fetch_object($query2)) { ?> 
                                            
                                       <tr>
                                       <?php
                                         $atencao = ($retornoProcessoDetalhe->DomProcessoDetalhe == "checado") ? "<td><span class='label label-important'>ATENÇÃO</span></td>" : "<td></td>" ;  
                                         echo $atencao;
                                         echo "<td>$retornoProcessoDetalhe->DataProcessoDetalhe</td>";
                                         echo "<td>$retornoProcessoDetalhe->UnidadeProcessoDetahe</td>";
                                         if ($retornoProcessoDetalhe->DomProcessoDetalhe == "checado") {
                                          echo "<td> $retornoProcessoDetalhe->DescricaoProcessoDetahe DOM $retornoProcessoDetalhe->AcaoProcessoDetalhe $retornoProcessoDetalhe->Data</td>";
                                         }else{
                                          echo "<td>$retornoProcessoDetalhe->DescricaoProcessoDetahe</td>";
                                         }?>    

                                      </tr>
                                  <?php }?>
                  
                              </tbody>
                            </table>
                          </div>
                        <br><button class="btn btn-primary btn-cons" type="button"  onclick="enviarFichaTecnica(<?php echo "$retornoProcesso->IdImovel"; ?>);">Ficha Tecnica </button>
                      <a href="tarefa-visualizar"><button class="btn btn-primary btn-cons" type="button">Tarefas </button></a>
                    </div>
                  </div>
                </div>
              </div>



              

  <form id="formProcessoDetalhe" name="formProcessoDetalhe" action="includes/php/DetalhesProcesso.php" method="POST">  
    <div class="admin-bar" id="quick-access" style="display:">
        <div class="admin-bar-inner">
        <div class="row">
            <div class="col-lg-2">
                <input type="text" class="form-control" readonly="true" id="DataProcessoDetalhe" name="DataProcessoDetalhe" value="<?php echo date('d/m/Y');?>">
            </div> 
            <div class="col-lg-2">
                <input type="text" placeholder="Unidade" class="form-control" id="UnidadeProcessoDetahe" name="UnidadeProcessoDetahe">
            </div> 
            <div class="col-lg-2">
                <input type="text" placeholder="Descrição" class="form-control" id="DescricaoProcessoDetahe" name="DescricaoProcessoDetahe">
            </div> 
            <div class="col-lg-1">
            <input  type="hidden" id="DomProcessoDetalheCheck" name="DomProcessoDetalheCheck">
                <input  type="checkbox" value="1" id="DomProcessoDetalhe" name="DomProcessoDetalhe">
                <label for="DomProcessoDetalhe">DOM</label>
                <br>   
            </div>

            <div class="col-lg-2">
               <input type="text" placeholder="Data" class="form-control" id="DataDomProcessoDetalhe" name="DataDomProcessoDetalhe">
               <input type="hidden" id="IdProcesso" name="IdProcesso" value="<?php echo "$IdProcesso";?>">
          </div>
       
          <div class="col-lg-2">
            <select id="SelectAcoesProcessoDetalhe" name="SelectAcoesProcessoDetalhe">
                <option value="Ações">Ações</option>
                <option value="Comunique-se">Comunique-se</option>
                <option value="Em analise">Em analise</option>
                 <option value="Deferido">Deferido</option>
                 <option value="Indeferido">Ineferido</option>
                 <option value="Solicitar Prazo">Solicitar Prazo</option>
                 <option value="Vista">Vista</option>
                 <option value="Agendamento">Agendamento</option>
                 <option value="Concluído">Concluído</option>
              </select>    
        </div> 
          
        </div>       
        <div class="col-md-12">
          
            <button class="btn btn-primary btn-cons " type="button" onclick="validaProcessoDetalhe(); document.forms[0].submit();">Adicionar</button>
          <button class="btn btn-white btn-cons btn-cancel" type="button" onclick="document.forms[0].reset()">Cancel</button>   
          </div>  
        <div class="row">
          
        </div>
      </div>
      
    </div>
  </form>




    <form id="formEnviaFichaTecnica" name="formEnviaFichaTecnica" method="POST">
        <input type="hidden" id="imovelAux" name="imovelAux">
    </form>
    <div class="addNewRow"></div>
  </div>
</div>
<!-- END CONTAINER -->
<?php formBuscaSql(); ?>
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