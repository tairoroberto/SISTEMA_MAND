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
<script type="text/javascript" src="includes/js/CriarComponentes.js"></script>

<script type="text/javascript">
  function enviarTarefa(acao){
    if (acao == 'Atualizar') {
      document.formTarefas.action = "includes/php/EditarTarefa.php";
      document.formTarefas.submit();
    }else{
      document.formTarefas.action = "includes/php/DeletaTarefa.php";
      document.formTarefas.submit();
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
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">


  <?php  $IdTarefa;

         if (isset($_POST['IdTarefaAux'])) {
            $IdTarefa = $_POST['IdTarefaAux'];
          } 

             /********************************************************************************************/
            /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
           /********************************************************************************************/
                     
              $buscarTarefa = new Conexao();
              $buscarTarefa->conectar();
              $buscarTarefa->selecionarDB();                      

              $buscarTarefa->set('sql',"SELECT CadastraTarefa.*, RazaoSocial,Nome, CadastraImovel.* 
                                             FROM CadastroHolding, CadastroRequerente, CadastraImovel 
                                             INNER JOIN `CadastraTarefa`
                                             WHERE  CadastroHolding.IdEmpresa = CadastraTarefa.IdEmpresa AND
                                                    CadastroRequerente.IdRequerente = CadastraTarefa.IdRequerente AND
                                                    CadastraImovel.IdImovel = CadastraTarefa.IdImovel AND
                                                    IdTarefa = '$IdTarefa'  
                                             GROUP BY CadastraTarefa.IdTarefa");

           $retornoTarefa = mysql_fetch_object($buscarTarefa->executarQuery()); ?>
     
      <form name="formTarefas" id="formTarefas" method="POST" >
          
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="clearfix"></div>
            <div class="content">
              <div class="page-title"> 
                <h3>Editar - <span class="semi-bold">Projeto</span></h3>
              </div>
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-24">
                  <div class="grid simple">
                    <div class="grid-body no-border">
                   
                     
   
                       <div class="row form-row">
                       <br>
                            <div class="col-md-3">
                              <select id="SelectHolding" name="SelectHolding" style="width:100%" >
                   
                    <option value="<?php echo $retornoTarefa->IdEmpresa; ?>"><?php echo $retornoTarefa->RazaoSocial; ?></option>
                           <?php                                
                                /********************************************************************************************/
                                /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
                                /********************************************************************************************/
                                 
                                $buscarHolding = new Conexao();
                                $buscarHolding->conectar();
                                $buscarHolding->selecionarDB();                      

                                $buscarHolding->set('sql',"SELECT `IdEmpresa`,`RazaoSocial` FROM `CadastroHolding` ");
                                $query= $buscarHolding->executarQuery();
                                while($retornoHolding=mysql_fetch_array($query)) { 
                                ?> 
                                <option value="<?php echo $retornoHolding['IdEmpresa'] ?>"> <?php echo $retornoHolding['RazaoSocial'] ?>
                                </option>
             
                              <?php } ?> 

                  
                  </select>
                            </div>
                            <div class="col-md-3">
                              <select id="SelectRequerente" name="SelectRequerente" style="width:100%">
                   
                           <option value="<?php echo $retornoTarefa->IdRequerente; ?>"><?php echo $retornoTarefa->Nome; ?></option>
                              <?php                                
                                /********************************************************************************************/
                                /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
                                /********************************************************************************************/
                                 
                                $buscarRequerente = new Conexao();
                                $buscarRequerente->conectar();
                                $buscarRequerente->selecionarDB();                      

                                $buscarRequerente->set('sql',"SELECT `IdRequerente`,`Nome` FROM `CadastroRequerente` ");
                                $query= $buscarRequerente->executarQuery();
                                while($retornoRequerente=mysql_fetch_array($query)) { 
                                ?> 
                                <option value="<?php echo $retornoRequerente['IdRequerente'] ?>"> <?php echo $retornoRequerente['Nome'] ?>
                                </option>
             
                              <?php } ?> 

                  
                  </select>
                            </div>
                            <div class="col-md-2">
                              <select id="SelectSql" name="SelectSql" style="width:100%">
                   
                        <option value="<?php echo $retornoTarefa->IdImovel; ?>"><?php echo $retornoTarefa->NumeroContribuinte; ?></option>
                             <?php                                
                                /********************************************************************************************/
                                /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
                                /********************************************************************************************/
                                 
                                $buscarImovel = new Conexao();
                                $buscarImovel->conectar();
                                $buscarImovel->selecionarDB();                      

                                $buscarImovel->set('sql',"SELECT `IdImovel`,`NumeroContribuinte` FROM `CadastraImovel` ");
                                $query= $buscarImovel->executarQuery();
                                while($retornoImovel=mysql_fetch_array($query)) { 
                                ?> 
                                <option value="<?php echo $retornoImovel['IdImovel'] ?>"> <?php echo $retornoImovel['NumeroContribuinte'] ?>
                                </option>
             
                              <?php } ?> 

                  
                  </select>
                            </div>
                            <div class="col-md-2">
                             <input name="DataInicio" id="DataInicio" type="text"  class="form-control" placeholder="Data de Inicio " 
                                      value="<?php echo $retornoTarefa->DataInicio; ?>">
                              
                            </div>
                            <div class="col-md-2">
                             <input name="DataEntrega" id="DataEntrega" type="text"  class="form-control" placeholder="Data de Entrega " 
                                      value="<?php echo $retornoTarefa->DataEntrega; ?>">
                              
                            </div>
                   </div>
                    
                    
                    
                    
                    <div class="row form-row">
                      
                      <div class="col-md-3">
                        <input name="NomeProjeto" id="NomeProjeto" type="text"  class="form-control" placeholder="Nome do Projeto "
                                  value="<?php echo $retornoTarefa->NomeProjeto; ?>">
                      </div>
                      <div class="col-md-9">
                        <input name="DescricaoProjeto" id="DescricaoProjeto" type="text"  class="form-control" placeholder="Descrição "
                                  value="<?php echo $retornoTarefa->DescricaoProjeto; ?>">
                      </div>
                    </div>



                    <!--Inicio da etapa-->
                    <?php 

                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/
                     
                        $buscarEtapaTarefa = new Conexao();
                        $buscarEtapaTarefa->conectar();
                        $buscarEtapaTarefa->selecionarDB(); 
                        $cont = 0;  
                        $contTitulo = 1;                  

                        $buscarEtapaTarefa->set('sql',"SELECT EtapaTarefa.*, Usuarios.* 
                                                       FROM Usuarios
                                                       INNER JOIN `EtapaTarefa`
                                                       WHERE  Usuarios.IdUsuario = EtapaTarefa.IdUsuario AND
                                                              EtapaTarefa.IdTarefa = $retornoTarefa->IdTarefa
                                                       GROUP BY EtapaTarefa.IdEtapaTarefa");

                        $query2 = $buscarEtapaTarefa->executarQuery();
                        while($retornoEtapaTarefa=mysql_fetch_object($query2)) { ?>
                   
                   <div class="row form-row">
                    <div class="col-md-12">
                     <h4>Etapa <?php echo $contTitulo; ?> </h4>
                    </div>
                    </div>
                    
                    <div class="row form-row">
                    <div class="col-md-2">
                        <select id="SelectUsuarioArray[]" name="SelectUsuarioArray[]" style="width:100%">
                   
                    <option value="<?php echo $retornoEtapaTarefa->IdUsuario; ?>"><?php echo $retornoEtapaTarefa->NomeExibicao; ?></option>
                             <?php                                
                                /********************************************************************************************/
                                /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
                                /********************************************************************************************/
                                 
                                $buscarUsuario = new Conexao();
                                $buscarUsuario->conectar();
                                $buscarUsuario->selecionarDB();                      

                                $buscarUsuario->set('sql',"SELECT `IdUsuario`,`NomeExibicao` FROM `Usuarios` WHERE TipoUsuario != 'Cliente'");
                                $query= $buscarUsuario->executarQuery();
                                while($retornorUsuario=mysql_fetch_array($query)) { 
                                ?> 
                                <option value="<?php echo $retornorUsuario['IdUsuario'] ?>"> <?php echo $retornorUsuario['NomeExibicao'] ?>
                                </option>
             
                              <?php } ?> 

                  
                  </select>
                      </div>
                      
                      <!--Auxiliar para atualização de etapaTarefa-->
                      <input type="hidden" name="IdEtapaTarefaAux[]" id="IdEtapaTarefaAux[]" value="<?php echo $retornoEtapaTarefa->IdEtapaTarefa; ?>">

                      <div class="col-md-2">
                        <input name="TituloArray[]" id="TituloArray[]" type="text"  class="form-control" placeholder="Titulo "
                                  value="<?php echo $retornoEtapaTarefa->TituloEtapa; ?>">
                      </div>
                      <div class="col-md-6">
                        <input name="DescricaoArray[]" id="DescricaoArray[]" type="text"  class="form-control" placeholder="Descrição "
                                  value="<?php echo $retornoEtapaTarefa->DescricaoEtapa; ?>">
                      </div>
                      <div class="col-md-2">
                        <input name="DataEntregaArray[]" id="DataEntregaArray[]" type="text"  class="form-control" placeholder="Data entrega "
                                  value="<?php echo $retornoEtapaTarefa->DataEntregaEtapa; ?>">
                      </div>
                      
                    </div>

                    <?php $cont++;$contTitulo++; } ?> 
                    <!--Fim da etapa-->

                    <!--Auxiliar para envio de formulario-->
                    <input type="hidden" name="IdTarefaAux" id="IdTarefaAux" value="<?php echo $IdTarefa; ?>">                                               
               </div>
             </div>
                                             
             </div>
                <div class="form-actions">
                   <div class="pull-left"></div>
                      <div class="pull-right">
                         <button class="btn btn-primary btn-cons" type="button"
                                    onclick="validaTarefa();enviarTarefa('Atualizar');">Atualizar </button>                         
                          <button class="btn btn-danger btn-cons" type="button"
                                    onclick="enviarTarefa('Excluir');">Excluir</button>
                        </div>
                      </div>
                    </form>
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