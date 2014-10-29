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


<script type="text/javascript"> 
 function solicitar(num){ 
  document.formTarefaDocumentos.ContAux.value = num;
  document.formTarefaDocumentos.action = "includes/php/SolicitarDocumento.php";
  document.formTarefaDocumentos.submit();  
}

function receber(num){ 
  document.formTarefaDocumentos.ContAux.value = num;
  document.formTarefaDocumentos.action = "includes/php/ReceberDocumento.php";
  document.formTarefaDocumentos.submit();  
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
  <!-- END SIDEBAR --> 

  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
     
      
          
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="clearfix"></div>
            <div class="content">
              <div class="page-title">               
                <h3>Solicitação - <span class="semi-bold">Documentos</span></h3>
              </div>
              
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border"></div>
                    <div class="grid-body no-border">
                    <form class="form-no-horizontal-spacing" id="formTarefaDocumentos" name="formTarefaDocumentos" method="POST">
                      <div class="row column-seperation">
                        <div class="col-md-12">
                          <h4>Filtro</h4>
                         
                          <div class="row form-row">
                            <div class="col-md-3">
                              <select id="source" style="width:100%">
                              <option value="1">Holding</option>
                   
                   <?php                      
                    /**************************************************************************************/
                    /*                       Busca o Holding  para preencher o select                    */
                    /************************************************************************************/
                     
                        $buscarHolding = new Conexao();
                        $buscarHolding->conectar();
                        $buscarHolding->selecionarDB();                      

                       $buscarHolding->set('sql',"SELECT * FROM `CadastroHolding` ");
                       
                        $query= $buscarHolding->executarQuery();
                       while($retornoHolding=mysql_fetch_array($query)) { 
                      ?> 
                         <option value="<?php echo $retornoHolding['IdEmpresa'] ?>"><?php echo $retornoHolding['RazaoSocial'] ?></option>
                           
                    <?php } ?> 
                  
                  </select>
                            </div>

                <div class="col-md-3">
                    <select id="source" style="width:100%">
                       <option value="1">Requerente</option>
                        <?php                      
                          /**************************************************************************************/
                          /*                       Busca o Holding  para preencher o select                    */
                          /************************************************************************************/
                           
                              $buscarRequerente = new Conexao();
                              $buscarRequerente->conectar();
                              $buscarRequerente->selecionarDB();                      

                             $buscarRequerente->set('sql',"SELECT * FROM `CadastroRequerente` ");
                             
                              $query= $buscarRequerente->executarQuery();
                             while($retornoRequerente=mysql_fetch_array($query)) { 
                            ?> 
                               <option value="<?php echo $retornoRequerente['IdRequerente'] ?>"><?php echo $retornoRequerente['Nome'] ?></option>
                                 
                        <?php } ?>                  
                    </select>
                </div>



              <div class="col-md-3">
                  <select id="source" style="width:100%">
                   
                    <option value="1">SQL</option>
                    <?php                      
                          /**************************************************************************************/
                          /*                       Busca o Holding  para preencher o select                    */
                          /************************************************************************************/
                           
                              $buscarSql = new Conexao();
                              $buscarSql->conectar();
                              $buscarSql->selecionarDB();                      

                             $buscarSql->set('sql',"SELECT * FROM `CadastraImovel` ");
                             
                              $query= $buscarSql->executarQuery();
                             while($retornoSql=mysql_fetch_array($query)) { 
                            ?> 
                               <option value="<?php echo $retornoSql['IdImovel'] ?>"><?php echo $retornoSql['NumeroContribuinte'] ?></option>
                                 
                        <?php } ?> 

                  
                  </select>
             </div>


                            <div class="col-md-3">
                              <button class="btn btn-primary btn-cons" type="button">Filtrar </button>
                              <button class="btn btn-primary btn-cons" type="button" onclick="window.location.reload();">Atualizar </button>
                              <input type="hidden" name="ContAux" id="ContAux" >
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
                                  
                                   <table class="table table-hover no-more-tables">
                                                <thead>
                                                    <tr>
                                                        <th style="width:13%">Holding</th>
                                                        <th style="width:13%;">Requerente</th>
                                                        <th style="width:13%;">SQL</th>
                                                         <th style="width:15%;">Responsável</th>
                                                         <th style="width:15%;">Documento</th>
                                                         <th style="width:10%;">Data solicitação</th>
                                                         <th style="width:10%;">Tarefas pendentes</th>
                                                         <th style="width:5%;">Solicitar</th>
                                                          <th style="width:5%;">Recebido</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                  <?php                      
                                                    /**************************************************************************************/
                                                    /*                       Busca os dados para preencher a tabela                      */
                                                    /************************************************************************************/
                                                     
                                                        $buscarHistoricoTarefa = new Conexao();
                                                        $buscarHistoricoTarefa->conectar();
                                                        $buscarHistoricoTarefa->selecionarDB();  
                                                        $cont = 0; 

                                                        $NomeUsuario = $_SESSION ['usuarioNome']; 
                                                        $usuarioTipo = $_SESSION ['usuarioTipo'];                   

                                                       $buscarHistoricoTarefa->set('sql',"SELECT SolicitacaoDocumetosTarefa.*, RazaoSocial, Nome, NumeroContribuinte 
                                                                                          FROM CadastroHolding, CadastroRequerente, CadastraImovel
                                                                                          INNER JOIN SolicitacaoDocumetosTarefa
                                                                                          WHERE SolicitacaoDocumetosTarefa.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                                                                 SolicitacaoDocumetosTarefa.IdRequerente = CadastroRequerente.IdRequerente AND
                                                                                                 SolicitacaoDocumetosTarefa.IdImovel = CadastraImovel.IdImovel 
                                                                                          ORDER BY IdSolicitacaoDocUmento DESC");
                                                       
                                                        $query= $buscarHistoricoTarefa->executarQuery();
                                                       while($retornoHistoricoTarefa=mysql_fetch_object($query)) { 
                                                              if (($retornoHistoricoTarefa->Solicitar == "") || ($retornoHistoricoTarefa->Recebido == "")) {

                                                              if (($retornoHistoricoTarefa->NomeUsuario == "$NomeUsuario") || ($usuarioTipo == "Administrador")) {?> 

                                                                   <tr>
                                                              <td><?php echo $retornoHistoricoTarefa->RazaoSocial ?></td>
                                                              <td><?php echo $retornoHistoricoTarefa->Nome ?></td>
                                                              <td><?php echo $retornoHistoricoTarefa->NumeroContribuinte ?></td>
                                                              <td><?php echo $retornoHistoricoTarefa->NomeUsuario ?></td>    
                                                              <td><?php echo $retornoHistoricoTarefa->DocumentosSolicitacao ?></td>
                                                              <td><?php echo $retornoHistoricoTarefa->DataSolicitacao ?></td>

                                                              <?php                      
                                                              /**************************************************************************************/
                                                              /*                       Busca as etapas relacionadas com a tarefa                   */
                                                              /************************************************************************************/
                                                               
                                                              $buscarTarefa = new Conexao();
                                                              $buscarTarefa->conectar();
                                                              $buscarTarefa->selecionarDB();                      
                                                             
                                                              $buscarTarefa->set('sql',"SELECT count(EtapaTarefa.IdEtapaTarefa) as countEtapaTarefa
                                                                                                FROM EtapaTarefa
                                                                                                INNER JOIN CadastraTarefa
                                                                                                ON EtapaTarefa.IdTarefa = $retornoHistoricoTarefa->IdTarefa 
                                                                                                GROUP BY CadastraTarefa.IdTarefa");
                                                                 
                                                              $retornoTarefa=mysql_fetch_object($buscarTarefa->executarQuery()) ?> 

                                                              <td><?php echo $retornoTarefa->countEtapaTarefa ?></td>

                                                              <td>
                                                                 <div class="checkbox check-default">
                                                                    <!--CheckBox SOLICITAR-->
                                                                    <!--Verificação para ver se campo SOLICITAR é null, se for cria o check box-->
                                                                    <?php if ($retornoHistoricoTarefa->Solicitar == "") {
                                                                        echo "<input onclick='solicitar(".$retornoHistoricoTarefa->IdSolicitacaoDocUmento.");' id='checkSolicitar".$cont."' type='checkbox' >
                                                                              <label for='checkSolicitar".$cont."'></label>";
                                                                    }else{
                                                                        echo "$retornoHistoricoTarefa->Solicitar";                                                                                                                                               
                                                                      }  ?>
                                                                    
                                                                 </div>  
                                                              
                                                              </td>

                                                              <td>
                                                                 <div class="checkbox check-default">
                                                                 <!--CheckBox RECEBIDO-->
                                                                 <!--Verificação para ver se campo RECEBIDO é null, se for cria o check box-->
                                                                    <?php if ($retornoHistoricoTarefa->Recebido == "") {
                                                                      echo "<input onchange='receber(".$retornoHistoricoTarefa->IdSolicitacaoDocUmento.");' id='checkRecebido".$cont."' type='checkbox' >
                                                                            <label for='checkRecebido".$cont."'></label>";
                                                                    }else{
                                                                        echo "$retornoHistoricoTarefa->Recebido";                                                                                                                                               
                                                                      }  ?>
                                                                 
                                                                 </div>
                                                              </td>                                                        
                                                          </tr>


                                                              <?php } ?>

                                                      <?php $cont++; } } ?> 
                                                    
              
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