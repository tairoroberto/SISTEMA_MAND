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
<!--Mascara para inputs-->
<!--Mascara para inputs-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="assets/plugins/jquery-mask/jquery.maskedinput.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-mask/jquery.mask.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.maskMoney.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.file-input.js"></script>


<script type="text/javascript">
  function enviaFormUsuarioCadastro(acao){
    if (acao == "Atualizar") {
      formCadastroUsuario.action = "includes/php/AtualizaUsuario.php";
      formCadastroUsuario.submit();
      exit();
    }      
  }


  jQuery(function(){

   $("#CreditoUsuario").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
   $("#ValorTaxa").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
   $("#AddCreditoUsuario").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
   
});
 
 function deletarUsuario(){
      formCadastroUsuario.action = "includes/php/DeletaUsuario.php";
      formCadastroUsuario.submit();
      exit();
 }

 function salvarTaxas(){
    formCadastroUsuario.action = "includes/php/CadastrarTaxasUsuario.php";
      formCadastroUsuario.submit();
      exit();
 }

 function addTaxas(){
    formCadastroUsuario.action = "includes/php/AddCreditoUsuario.php";
      formCadastroUsuario.submit();
      exit();
 }

 function enviarEmail(){
     formCadastroUsuario.action = "includes/php/EnviarEmailCliente.php";
      formCadastroUsuario.submit();
      exit();
 }


  $(document).ready(function(){
    $('input[type=file]').bootstrapFileInput();
  });
</script>

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="" onload="verificaPermissao();escondePermissao();">

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
                <h3>Novo - <span class="semi-bold">Usuário</span></h3>
              </div>
              <!-- START FORM -->
             <form class="form-no-horizontal-spacing" id="formCadastroUsuario" name="formCadastroUsuario" 
                                action="includes/php/CadastraUsuario.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border"></div>
                    <div class="grid-body no-border">
                    


             <div class="row column-seperation">

             <?php ///se IdUsuario vier pelo metodo POST
                $IdUsuario;
                
             if (isset($_POST['IdUsuarioAux'])){
                  $IdUsuario = $_POST['IdUsuarioAux'];

                         /********************************************************************************************/
                        /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                        /********************************************************************************************/
                         
                           $buscarUsuario = new Conexao();
                           $buscarUsuario->conectar();
                           $buscarUsuario->selecionarDB();                    

                           $buscarUsuario->set('sql',"SELECT * FROM Usuarios WHERE IdUsuario = '$IdUsuario'");
                                                      
                           $retornoUsuario = mysql_fetch_object($buscarUsuario->executarQuery());            
                  }elseif (isset($_GET['IdUsuarioAux'])){
                  
                          $IdUsuario = $_GET['IdUsuarioAux'];

                         /********************************************************************************************/
                        /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                        /********************************************************************************************/
                         
                           $buscarUsuario = new Conexao();
                           $buscarUsuario->conectar();
                           $buscarUsuario->selecionarDB();                    

                           $buscarUsuario->set('sql',"SELECT * FROM Usuarios WHERE IdUsuario = '$IdUsuario'");
                                                      
                           $retornoUsuario = mysql_fetch_object($buscarUsuario->executarQuery());            
                  }?>
                  <!--Auxiliar para enviao de formulario para atualizar o cadastro do usuario-->
                  <input type="hidden" id="IdUsuarioAux" name="IdUsuarioAux" value="<?php echo $IdUsuario; ?>">



                     <!--Primeira coluna-->
                        <div class="col-md-6" >
                           <h4>Dados</h4>
                            <div class="row form-row">
                              <div class="col-md-9">

                                <div class="radio">
                                  <input id="Funcionario" type="radio" name="TipoUsuario" value="Funcionario" <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) {
                                    if ($retornoUsuario->TipoUsuario == "Funcionario") {
                                     echo "checked='true'";
                                    }                                    
                                  }else{echo "checked='true'";} ?>  onchange="escondePermissao();">
                                  <label for="Funcionario">Funcionário</label>

                                  <input id="Administrador" type="radio" name="TipoUsuario" value="Administrador" <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) {
                                    if ($retornoUsuario->TipoUsuario == "Administrador") {
                                     echo "checked='true'";
                                    }                                    
                                  }else{echo "";} ?> onchange="escondePermissao();">
                                  <label for="Administrador">Administrador</label>

                                  <input id="Cliente" type="radio" name="TipoUsuario" value="Cliente" <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) {
                                    if ($retornoUsuario->TipoUsuario == "Cliente") {
                                     echo "checked='true'";
                                    }                                    
                                  }else{echo "";} ?>  onchange="escondePermissao();">
                                  <label for="Cliente">Cliente</label>                                 
                                </div>
                              </div>

                              <div class="col-md-3">
                                    <input name="DataCadastro" id="DataCadastro" type="text" readonly="true" class="form-control" 
                                    <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) {
                                            echo "value='".$retornoUsuario->DataCadastro."'";                        
                                  }else{echo "value='".date('d/m/Y')."'";} ?> >
                              </div>
                            </div>

                            <div class="row form-row">
                              <div class="col-md-6">
                                <input name="Email" id="Email" type="text"  class="form-control" 
                                     <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) {
                                            echo "value='".$retornoUsuario->Email."'";                        
                                  }else{echo "";} ?>  placeholder="E-mail">
                              </div>

                              <div class="col-md-3">
                                <input name="Senha" id="Senha" type="text"  class="form-control" 
                                <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) {
                                            echo "value='".$retornoUsuario->Senha."'";                        
                                  }else{echo "";} ?> placeholder="Senha">
                              </div>

                              <div class="col-md-3">
                                <input name="ConfirmaSenha" id="ConfirmaSenha" type="text" 
                                <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) {
                                            echo "value='".$retornoUsuario->ConfirmaSenha."'";                        
                                  }else{echo "";} ?> class="form-control" placeholder="Con. Senha">
                              </div>
                            </div>

                            <div class="row form-row">
                              <div class="col-md-12">
                                <input name="NomeExibicao" id="NomeExibicao" type="text" 
                                  <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) {
                                            echo "value='".$retornoUsuario->NomeExibicao."'";                        
                                  }else{echo "";} ?> class="form-control" placeholder="Nome de Exibição">
                              </div>
                            </div>
                            

                          <!--A partir daqui colunas somem se chebox cliente for selecionado-->  
                          <div id="coluna1" name="coluna1">
                            <div class="row form-row">
                                <div class="col-md-12">
                                  <h4>Jornada</h4>
                                </div>
                              </div>
                            <div class="row form-row">

                              <div class="col-md-4">
                                <input name="Entrada" id="Entrada" type="text" 
                                <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) {
                                            echo "value='".$retornoUsuario->Entrada."'";                        
                                  }else{echo "";} ?> class="form-control" placeholder="Entrada">
                              </div>

                              <div class="col-md-4">
                                <input name="Saida" id="Saida" type="text" 
                                <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) {
                                            echo "value='".$retornoUsuario->Saida."'";                        
                                  }else{echo "";} ?> class="form-control" placeholder="Saida">
                              </div>

                              <div class="col-md-4">
                                <input name="Almoco" id="Almoco" type="text" 
                                <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) {
                                            echo "value='".$retornoUsuario->Almoco."'";                        
                                  }else{echo "";} ?> class="form-control" placeholder="Almoço">
                              </div>
                            </div>
                            
                            <div class="row form-row">
                                <div class="col-md-9">
                                <h4>Foto</h4>
                                   <input name="Foto" id="Foto" title="Buscar Foto" type="file" accept="image/*" class="filestyle btn btn-primary btn-cons" /> 
                                </div>
                              </div>                            
                          </div>

                                  <!--INICIO PERMISSÃO USUARIO-->
                      <div id="DivPermissaoUsuario">
                            <h4>Permissões do Cliente</h4>
                              
                              <div class="row form-row">
                                 <div class="col-md-12">
                                  <label class="form-label">Processos</label>
                                  <select name="SelectProcesso" id="SelectProcesso" style="width:100%"  class="select2 form-control"  >
                                  <option value="Todos">Selecione o processo</option>
                                   <?php
                                    /********************************************************************************************/
                                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                                    /********************************************************************************************/
                                     
                                        $buscar = new Conexao();
                                        $buscar->conectar();
                                        $buscar->selecionarDB();                      

                                       $buscar->set('sql',"SELECT * FROM CadastraPocesso ");
                                       
                                        $query= $buscar->executarQuery();
                                       while($retorno=mysql_fetch_array($query)) { 
                                      ?> 
                                        <option value="<?php echo $retorno['IdProcesso'] ?>"> <?php echo $retorno['NomeProcesso'] ?>
                                        </option>
                 
                                      <?php } ?>
                                  </select>
                                </div>

                    <!--
                            <div class="col-md-6">
                            <label class="form-label">Oportunidade</label>
                              <select name="SelectOportunidade" id="SelectOportunidade"  style="width:100%" multiple  class="select2 form-control"  onchange="mudaPlaceHolderOportunidade();">
                                 <?php
                                    /********************************************************************************************/
                                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                                    /********************************************************************************************/
                                   /*  
                                        $buscar = new Conexao();
                                        $buscar->conectar();
                                        $buscar->selecionarDB();                      

                                       $buscar->set('sql',"SELECT * FROM Oportunidade");
                                       
                                        $query= $buscar->executarQuery();
                                       while($retorno=mysql_fetch_array($query)) { 
                                      ?> 
                                        <option value="<?php echo $retorno['IdOportunidade'] ?>"> <?php echo $retorno['RazaoSocial'] ?>
                                        </option>
                 
                                      <?php } */?>                        
                              </select>
                            </div>
                        -->

                        <!-- Credito do usuario-->
                          
                         </div> 



                          <div class="col-md-4">
                           <label>Crédito do usuário</label>
                              <input name="CreditoUsuario" id="CreditoUsuario" type="text" 
                              <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) {
                                            echo "value='".$retornoUsuario->CreditoUsuario_final."'";
                                            echo "readonly='true'";                        
                                  }else{echo "";} ?> class="form-control" placeholder="R$ 100,00"  onkeypress="verificaNumerosCalculo();">
                           </div> 

                      <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) { ?>
                           <div class="col-md-4">
                           <label>Adicionar Crédito</label>
                              <input name="AddCreditoUsuario" id="AddCreditoUsuario" type="text" class="form-control" placeholder="R$ 100,00"  onkeypress="verificaNumerosCalculo();">
                           </div> 
                           <div class="col-md-3">
                           <label>&nbsp;&nbsp;</label>
                              <button type="button" class="btn btn-primary" onclick="addTaxas();">Add Crédito</button>
                           </div> 
                        <?php } ?>



                    <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) { ?>
                           <div class="row form-row col-md-12"> 
                            
                         <!-- Taxas do usuario-->
                           <div class="col-md-4">
                           <label>Taxa</label>
                              <input name="DescricaoTaxa" id="DescricaoTaxa" type="text" class="form-control" placeholder="Descrição ">
                           </div>


                             <div class="col-md-4">
                           <label>Valor</label>
                              <input name="ValorTaxa" id="ValorTaxa" type="text" class="form-control" placeholder="R$ 100,00"  onkeypress="verificaNumerosCalculo();">
                           </div>

                             <div class="col-md-4">
                           <label>&nbsp;</label>
                           <button type="button" class="btn btn-primary" onclick="salvarTaxas();">&nbsp;&nbsp;Salvar taxas &nbsp;</button>
                           </div>

                           </div>

                         

                           <?php } ?>

                      </div>
                      <!--FIM PERMISSÃO USUARIO-->


                         <div id="DivEmailCliente" class="col-md-4">
                         <br><br>
                         <br><br>
                            <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux'])) && ($retornoUsuario->TipoUsuario == "Cliente")) {
                                            echo "<button class='btn btn-primary btn-cons' type='button' onclick='enviarEmail();'>Enviar e-mail de novidades para Cliente </button>";                      
                                  }
                            ?>
                        </div>
                            
                       </div>


                        <!--Segunda coluna-->
                    
                        <div class="col-md-3" id="coluna2">
                          <h4>Previlégios</h4>
                          
                            <div class="row form-row">
                              <div class="col-md-12">
                                <h5>Holding</h5>
                              </div>
                            </div>                          
                          
                          <div class="row form-row">
                            <div class="col-md-12">
                              <div class="checkbox ">
                                <div id="DivHolding">
                                  <input id="checkHoldingVisualizar" type="checkbox" value="Visualizar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkHoldingVisualizar">Visualizar</label>
                                  <input id="checkHoldingCadastrar" type="checkbox" value="Cadastrar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkHoldingCadastrar">Cadastrar</label>
                                  <input type="hidden" name="HoldingVisualizarAux" id="HoldingVisualizarAux">
                                  <input type="hidden" name="HoldingCadastrarAux" id="HoldingCadastrarAux">
                                </div>                                
                                <div id="DivHoldingInvisivel">
                                  <input id="checkHoldingInvisivel" type="checkbox" value="Invisivel"  onclick="verificaPermissao();">
                                  <label for="checkHoldingInvisivel">Invisível</label>  
                                  <input type="hidden" name="HoldingInvisivelAux" id="HoldingInvisivelAux">     
                                </div>
                               </div>
                             </div>
                          </div>

                          
                          <div class="row form-row">
                            <div class="col-md-12">
                              <h5>Requerente</h5>
                            </div>
                          </div>
                          
                          
                          <div class="row form-row">
                             <div class="col-md-12">
                               <div class="checkbox check-default">
                               <div id="DivRequerente">
                                 <input id="checkRequerenteVisualizar" type="checkbox" value="Visualizar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkRequerenteVisualizar">Visualizar</label>
                                  <input id="checkRequerenteCadastrar" type="checkbox" value="Cadastrar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkRequerenteCadastrar">Cadastrar</label>
                                  <input type="hidden" name="RequerenteVisualizarAux" id="RequerenteVisualizarAux">
                                  <input type="hidden" name="RequerenteCadastrarAux" id="RequerenteCadastrarAux">
                               </div>
                               <div id="DivRequerenteInvisivel">
                                 <input id="checkRequerenteInvisivel" type="checkbox" value="Invisivel"  onclick="verificaPermissao();">
                                  <label for="checkRequerenteInvisivel">Invisível</label>
                                  <input type="hidden" name="RequerenteInvisivelAux" id="RequerenteInvisivelAux">
                               </div>                                     
                                </div>
                             </div>
                          </div>
                          
                          <div class="row form-row">
                            <div class="col-md-12">
                              <h5>Imovel</h5>
                            </div>
                          </div>
                          
                          
                          <div class="row form-row">
                            <div class="col-md-12">
                              <div class="checkbox check-default">
                              <div id="DivImovel">
                                <input id="checkImovelVisualizar" type="checkbox" value="Visualizar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkImovelVisualizar">Visualizar</label>
                                  <input id="checkImovelCadastrar" type="checkbox" value="Cadastrar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkImovelCadastrar">Cadastrar</label>
                                  <input type="hidden" name="ImovelVisualizarAux" id="ImovelVisualizarAux">
                                  <input type="hidden" name="ImovelCadastrarAux" id="ImovelCadastrarAux">
                              </div>
                              <div id="DivImovelInvisivel">
                                <input id="checkImovelInvisivel" type="checkbox" value="Invisivel"  onclick="verificaPermissao();">
                                  <label for="checkImovelInvisivel">Invisível</label>
                                  <input type="hidden" name="ImovelInvisiveAux" id="ImovelInvisiveAux">
                              </div>
                                </div>
                             </div>
                          </div>

                           <div class="row form-row">
                            <div class="col-md-12">
                              <h5>Oportunidade</h5>
                            </div>
                          </div>

                          <div class="row form-row">
                            <div class="col-md-12">
                               <div class="checkbox check-default">
                               <div id="DivOportunidade">
                                  <input id="checkOportunidadeVisualizar" type="checkbox" value="Visualizar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkOportunidadeVisualizar">Visualizar</label>
                                  <input id="checkOportunidadeCadastrar" type="checkbox" value="Cadastrar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkOportunidadeCadastrar">Cadastrar</label>
                                  <input type="hidden" name="OportunidadeVisualizarAux" id="OportunidadeVisualizarAux">
                                  <input type="hidden" name="OportunidadeCadastrarAux" id="OportunidadeCadastrarAux">
                               </div>
                               <div id="DivOportunidadeInvisivel">
                                  <input id="checkOportunidadeInvisivel" type="checkbox" value="Invisivel"  onclick="verificaPermissao();">
                                  <label for="checkOportunidadeInvisivel">Invisível</label> 
                                  <input type="hidden" name="OportunidadeInvisivelAux" id="OportunidadeInvisivelAux">
                               </div>
                                  
                                                       
                                </div>
                             </div>
                          </div>


                           <div class="row form-row">
                            <div class="col-md-12">
                              <h5>Orçamento</h5>
                            </div>
                          </div>
                          

                          
                          <div class="row form-row">
                             <div class="col-md-12">
                               <div class="checkbox check-default">
                               <div id="DivOrcamento">
                                 <input id="checkOrcamentoVisualizar" type="checkbox" value="Visualizar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkOrcamentoVisualizar">Visualizar</label>
                                  <input id="checkOrcamentoCadastrar" type="checkbox" value="Cadastrar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkOrcamentoCadastrar">Cadastrar</label>
                                  <input type="hidden" name="OrcamentoVisualizarAux" id="OrcamentoVisualizarAux">
                                  <input type="hidden" name="OrcamentoCadastrarAux" id="OrcamentoCadastrarAux">
                               </div>
                               <div id="DivOrcamentoInvisivel">
                                 <input id="checkOrcamentoInvisivel" type="checkbox" value="Invisivel"  onclick="verificaPermissao();">
                                  <label for="checkOrcamentoInvisivel">Invisível</label>  
                                  <input type="hidden" name="OrcamentoInvisivelAux" id="OrcamentoInvisivelAux">  
                               </div>     
                                </div>
                             </div>
                          </div>


                           <div class="row form-row">
                            <div class="col-md-12">
                              <h5>FAQ</h5>
                            </div>
                          </div>
                          
                          


                          <div class="row form-row">
                            <div class="col-md-12">
                               <div class="checkbox check-default">
                               <div id="DivFaq">
                                 <input id="checkFaqVisualizar" type="checkbox" value="Visualizar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkFaqVisualizar">Visualizar</label>
                                  <input id="checkFaqCadastrar" type="checkbox" value="Cadastrar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkFaqCadastrar">Cadastrar</label>
                                  <input type="hidden" name="FaqVisualizarAux" id="FaqVisualizarAux">
                                  <input type="hidden" name="FaqCadastrarAux" id="FaqCadastrarAux">
                               </div>                                  
                                  <div id="DivFaqInvisivel">
                                    <input id="checkFaqInvisivel" type="checkbox" value="Invisivel"  onclick="verificaPermissao();">
                                  <label for="checkFaqInvisivel">Invisível</label>
                                  <input type="hidden" name="FaqInvisivelAux" id="FaqInvisivelAux">
                                  </div>
                                  
                                 </div>
                              </div>
                          </div>                         
                          
                        </div>
                        



                         <!--Terceira coluna-->
                        <div class="col-md-3" id="coluna3">                          
                          
                          <div class="row form-row">
                            <div class="col-md-12">
                              <h5>Links Uteis</h5>
                            </div>
                          </div>
                          
                          
                          <div class="row form-row">
                            <div class="col-md-12">
                              <div class="checkbox check-default">
                              <div id="DivLinksUteis">
                                <input id="checkLinksUteisVisualizar" type="checkbox" value="Visualizar" checked="checked" onclick="verificaPermissao();">
                                <label for="checkLinksUteisVisualizar">Visualizar</label>
                                <input id="checkLinksUteisCadastrar" type="checkbox" value="Cadastrar" checked="checked" onclick="verificaPermissao();">
                                <label for="checkLinksUteisCadastrar">Cadastrar</label>
                                <input type="hidden" name="LinksUteisVisualizarAux" id="LinksUteisVisualizarAux">
                                <input type="hidden" name="LinksUteisCadastrarAux" id="LinksUteisCadastrarAux">
                              </div>
                              <div id="DivLinksUteisInvisivel">
                                <input id="checkLinksUteisInvisivel" type="checkbox" value="Invisivel"  onclick="verificaPermissao();">
                                <label for="checkLinksUteisInvisivel">Invisível</label>
                                <input type="hidden" name="LinksUteisInvisivelAux" id="LinksUteisInvisivelAux">
                              </div>
                                </div>
                            </div>
                          </div>


                          
                           <div class="row form-row">
                            <div class="col-md-12">
                              <h5>Processos</h5>
                            </div>
                          </div>
                          
                          
                          <div class="row form-row">
                            <div class="col-md-12">
                              <div class="checkbox check-default">
                              <div id="DivProcessos">
                                <input id="checkProcessosVisualizar" type="checkbox" value="Visualizar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkProcessosVisualizar">Visualizar</label>
                                  <input id="checkProcessosCadastrar" type="checkbox" value="Cadastrar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkProcessosCadastrar">Cadastrar</label>
                                  <input type="hidden" name="ProcessosVisualizarAux" id="ProcessosVisualizarAux">
                                  <input type="hidden" name="ProcessosCadastrarAux" id="ProcessosCadastrarAux">
                              </div>                                  
                                  <div id="DivProcessosInvisivel">
                                    <input id="checkProcessosInvisivel" type="checkbox" value="Invisivel"  onclick="verificaPermissao();">
                                  <label for="checkProcessosInvisivel">Invisível</label>
                                  <input type="hidden" name="ProcessosInvisivelAux" id="ProcessosInvisivelAux">
                                  </div>                                  
                                </div>
                             </div>
                          </div>
                          


                           <div class="row form-row">
                            <div class="col-md-12">
                              <h5>Serviços</h5>
                            </div>
                          </div>
                          
                          <div class="row form-row">
                            <div class="col-md-12">
                              <div class="checkbox check-default">
                              <div id="DivServicos">
                                <input id="checkServicosVisualizar" type="checkbox" value="Visualizar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkServicosVisualizar">Visualizar</label>
                                  <input id="checkServicosCadastrar" type="checkbox" value="Cadastrar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkServicosCadastrar">Cadastrar</label>
                                  <input type="hidden" name="ServicosVisualizarAux" id="ServicosVisualizarAux">
                                  <input type="hidden" name="ServicosCadastrarAux" id="ServicosCadastrarAux">
                              </div>
                              <div id="DivServicosInvisivel">
                                <input id="checkServicosInvisivel" type="checkbox" value="Invisivel"  onclick="verificaPermissao();">
                                  <label for="checkServicosInvisivel">Invisível</label>
                                  <input type="hidden" name="ServicosInvisivelAux" id="ServicosInvisivelAux"> 
                              </div>
                                </div>
                             </div>
                          </div>


                           <div class="row form-row">
                            <div class="col-md-12">
                              <h5>Tarefas</h5>
                            </div>
                          </div>
                          
                          

                          <div class="row form-row">
                            <div class="col-md-12">
                              <div class="checkbox check-default">
                              <div id="DivTarefas">
                                <input id="checkTarefasVisualizar" type="checkbox" value="Visualizar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkTarefasVisualizar">Visualizar</label>
                                  <input id="checkTarefasCadastrar" type="checkbox" value="Cadastrar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkTarefasCadastrar">Cadastrar</label>
                                  <input type="hidden" name="TarefasVisualizarAux" id="TarefasVisualizarAux">
                                  <input type="hidden" name="TarefasCadastrarAux" id="TarefasCadastrarAux">
                              </div>
                              <div id="DivTarefasInvisivel">
                                <input id="checkTarefasInvisivel" type="checkbox" value="Invisivel"  onclick="verificaPermissao();">
                                  <label for="checkTarefasInvisivel">Invisível</label>
                                  <input type="hidden" name="TarefasInvisivelAux" id="TarefasInvisivelAux">
                              </div>                                  
                                </div>
                             </div>
                          </div>


                           <div class="row form-row">
                            <div class="col-md-12">
                              <h5>Incorporação</h5>
                            </div>
                          </div>
                          
                          
                          <div class="row form-row">
                            <div class="col-md-12">
                              <div class="checkbox check-default">
                              <div id="DivIncorporacao">
                                <input id="checkIncorporacaoVisualizar" type="checkbox" value="Visualizar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkIncorporacaoVisualizar">Visualizar</label>
                                  <input id="checkIncorporacaoCadastrar" type="checkbox" value="Cadastrar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkIncorporacaoCadastrar">Cadastrar</label>
                                  <input type="hidden" name="IncorporacaoVisualizarAux" id="IncorporacaoVisualizarAux">
                                  <input type="hidden" name="IncorporacaoCadastrarAux" id="IncorporacaoCadastrarAux">
                              </div>
                              <div id="DivIncorporacaoinvisivel">
                                <input id="checkIncorporacaoInvisivel" type="checkbox" value="Invisivel"  onclick="verificaPermissao();">
                                  <label for="checkIncorporacaoInvisivel">Invisível</label>
                                  <input type="hidden" name="IncorporacaoInvisivelAux" id="IncorporacaoInvisivelAux">
                              </div>
                                </div>
                             </div>
                          </div>


                           <div class="row form-row">
                            <div class="col-md-12">
                              <h5>Calendário</h5>
                            </div>
                          </div>
                          
                          
                          <div class="row form-row">
                            <div class="col-md-12">
                              <div class="checkbox check-default">
                              <div id="DivCalendario">
                                <input id="checkCalendarioVisualizar" type="checkbox" value="Visualizar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkCalendarioVisualizar">Visualizar</label>
                                  <input id="checkCalendarioCadastrar" type="checkbox" value="Cadastrar" checked="checked" onclick="verificaPermissao();">
                                  <label for="checkCalendarioCadastrar">Cadastrar</label>
                                  <input type="hidden" name="CalendarioVisualizarAux" id="CalendarioVisualizarAux">
                                  <input type="hidden" name="CalendarioCadastrarAux" id="CalendarioCadastrarAux">
                              </div>                                  
                                  <div id="DivCalendarioInvisivel">
                                    <input id="checkCalendarioInvisivel" type="checkbox" value="Invisivel"  onclick="verificaPermissao();">
                                  <label for="checkCalendarioInvisivel">Invisível</label>
                                  <input type="hidden" name="CalendarioInvisivelAux" id="CalendarioInvisivelAux">   
                                  </div>                                                                 
                                 </div>
                             </div>

                          </div>
                          <br><br>              
                           
                      </div>




                 </div>                 

                     </div>
                      <div class="form-actions">
                        <div class="pull-left"></div>
                        <div class="pull-right">
                        <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) {
                                            echo "";                        
                                  }else{echo "<button class='btn btn-primary btn-cons' type='button' onclick='validaUsuarioCadstro();document.formCadastroUsuario.submit();'>Salvar </button>";} ?>
                          
                          <button class="btn btn-white btn-cons" type="button" <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) {
                                            echo "";                        
                                          }else{echo "disabled";}?> onclick="validaUsuarioCadstro();enviaFormUsuarioCadastro('Atualizar');">Alterar</button>
                          
                          <?php if ((isset($_POST['IdUsuarioAux'])) || (isset($_GET['IdUsuarioAux']))) {
                                            echo "<button class='btn btn-danger btn-cons' type='button' onclick='deletarUsuario();'>Excluir </button>";                      
                                  }else{
                                    echo "<button class='btn btn-danger btn-cons' type='button' onclick='document.formCadastroUsuario.reset();'>Cancelar </button>";  
                                  }?>

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