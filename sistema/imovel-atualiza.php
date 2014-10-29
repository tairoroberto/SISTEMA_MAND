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
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/dropzone/css/basic.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="assets/plugins/ios-switch/ios7-switch.css" type="text/css" media="screen">
<link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
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

<link href="assets/plugins/boostrap-slider/css/slider.css" rel="stylesheet" type="text/css"/>


<!-- Inclui o arquivos para validação de campos-->
<script src="includes/Cep/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="includes/Cep/jquery.maskedinput-1.3.min.js" type="text/javascript"></script>
<script src="includes/Cep/BuscaCep.js" type="text/javascript"></script>
<script type="text/javascript" src="includes/js/ValidaCampos.js"></script>
<script type="text/javascript" src="includes/js/CriarComponentes.js"></script>


<!--Mascara para inputs-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="assets/plugins/jquery-mask/jquery.maskedinput.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-mask/jquery.mask.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.maskMoney.min.js"></script>

<script type="text/javascript">
  jQuery(function($){
   $("#CpfCnpj").mask("999.999.999-99");
   $("#Cep").mask("99.999-999");

   $("#NumeroContribuinte").mask("999.999.9999-9");
   $("#MatriculaContribuinte").mask("999.999.999.999.999");
   $("input[id='SqlHistoricoArray']").mask("999.999.9999-9");
   $("input[id='SqlOutrosLotesArray']").mask("999.999.9999-9");
   $("input[id='SqlRetricao']").mask("999.999.9999-9");

});

</script>

<script type="text/javascript">

  jQuery(function($){
   $("#Cep").mask("99.999-999");
   $("#DataHistorico1").mask("99/99/9999");

   $("#ValorTolalIptu").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
   $("#ValorTolalMultas").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
  

});

  function enviarFormImovel(acao){
    if (acao == 'Atualizar') {
      commentForm.action = "includes/php/AtualizaImovel.php";
      commentForm.submit();
    }else{
      commentForm.action = "includes/php/ExcluirImovel.php";
      commentForm.submit();
    }
  }


  function configuraMapa(){
   LocalImovel = document.getElementById("LocalImovel").value
   Cep = document.getElementById("Cep").value
   Codlog = document.getElementById("Codlog").value

   document.getElementById("imagem-mapa").src="http://maps.googleapis.com/maps/api/staticmap?center="+LocalImovel+","+Codlog+"-"+Cep+"&zoom=15&size=900x300&scale=2&markers=size:mid%20Ccolor:red%7C"+LocalImovel+"+"+Codlog+"+"+Cep+"&sensor=false";
  }
</script>

</head>

<!-- BEGIN BODY -->
<body class="" >
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
    <div class="page-content">
     
      
          
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="clearfix"></div>
            <div class="content">
              <div class="page-title"> 
                <h3>Editar - <span class="semi-bold">Imovel</span></h3>
              </div>
              <div class="row">
        <div class="col-md-12">
          <div class="grid simple">

          <?php 
                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/
                     
                        $buscarImovel = new Conexao();
                        $buscarImovel->conectar();
                        $buscarImovel->selecionarDB();

                        $IdImovel; 

                        if (isset($_POST['IdImovelAux'])) {
                          $IdImovel = $_POST['IdImovelAux'];
                        }else{
                          $IdImovel = 1;
                        }
                                      
                                            
                        $buscarImovel->set('sql',"SELECT  * FROM CadastraImovel WHERE IdImovel = '$IdImovel'");

                        $retornoImovel = mysql_fetch_object($buscarImovel->executarQuery());  ?> 
            
              
              <div class="grid-body ">
              <div class="row">
                <form id="commentForm" name="commentForm" enctype="multipart/form-data" method="post" action="includes/php/AtualizaImovel.php">
                  <div id="rootwizard" class="col-md-24">
                    <div class="form-wizard-steps">
                      <ul class="wizard-steps">
                        <li data-target="#step1" class=""> <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Dados Iniciais</span> </a> </li>
                        <li data-target="#step2" class=""> <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Dados Cadastrais</span> </a> </li>
                        <li data-target="#step3" class=""> <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Histórico</span> </a> </li>
                        <li data-target="#step4" class=""> <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Outros Lotes</span> </a> </li>
                        <li data-target="#step5" class=""> <a href="#tab5" data-toggle="tab"> <span class="step">5</span> <span class="title">Zoneamento</span> </a> </li>
                        <li data-target="#step6" class=""> <a href="#tab6" data-toggle="tab"> <span class="step">6</span> <span class="title">Operação Urbana</span> </a> </li>
                        <li data-target="#step7" class=""> <a href="#tab7" data-toggle="tab"> <span class="step">7</span> <span class="title">Restrições</span> </a> </li>
                        <li data-target="#step8" class=""> <a href="#tab8" data-toggle="tab"> <span class="step">8</span> <span class="title">Dividas</span> </a> </li>
                        <li data-target="#step9" class=""> <a href="#tab9" data-toggle="tab"> <span class="step">9</span> <span class="title">Processos <br></span></a></li>
                        <li data-target="#step10" class=""> <a href="#tab10" data-toggle="tab"> <span class="step">10</span> <span class="title">Imagens</span> </a> 
                        </li>
                         <li data-target="#step11" class=""> <a href="#tab11" data-toggle="tab"> <span class="step">11</span> <span class="title">Dados Adicionais</span> </a> 
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>


                    <!--Auxiliar para envio para alteração do imóvel-->
                    <input type="hidden" name="IdImovelAux" id="IdImovelAux" value="<?php echo $IdImovel; ?>">
              <div class="tab-content">
                      <div class="tab-pane" id="tab1"> <br>
                        <h4 class="semi-bold">Etapa 1 - <span class="light">Dados Iniciais</span></h4>
                        <br>
                        
                        
                        <div class="row form-row">
                      <div class="col-md-3">
                        <label class="form-label">Data emissão:</label>
                        <div class="controls">
                          <input type="text" placeholder="20/06/2014" class="form-control" readonly="true"
                          		name="DataEmissao" id="DataEmissao" value="<?php echo $retornoImovel->DataEmissao; ?>">
                        </div>
                      </div>
                      
                      <div class="col-md-3">
                        <label class="form-label">COD.:</label>
                        <div class="controls">
                        <input type="text" class="form-control" readonly="true"
                                  name="CodigoImovel" id="CodigoImovel" value="<?php echo $retornoImovel->CodigoImovel; ?>">
                          
                        </div>
                      </div> 
                    </div>
                    
                   <div class="row form-row">
                   	<div class="col-md-4">
                    	 <br>
                      
                 
                  <label class="form-label">Holding</label>
                   <select name="SelectHolding" id="SelectHolding" class="select2 form-control" >

                   <?php                      
                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere o Requerente                     */
                    /********************************************************************************************/                     
                        $buscar = new Conexao();
                        $buscar->conectar();
                        $buscar->selecionarDB();                      
  
                        $buscar->set('sql',"SELECT * FROM CadastroHolding WHERE IdEmpresa = '$retornoImovel->IdEmpresa' ");
                        
                        $retorno=mysql_fetch_array($buscar->executarQuery()); ?> 

                        <option value="<?php echo $retorno['IdEmpresa'] ?>"><?php echo $retorno['RazaoSocial'] ?></option>

                        <?php 

		                    /********************************************************************************************/
		                    /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
		                    /********************************************************************************************/
	                     
	                        $buscar = new Conexao();
	                        $buscar->conectar();
	                        $buscar->selecionarDB();                      
	
	                       $buscar->set('sql',"SELECT * FROM CadastroHolding ");
	                        $query= $buscar->executarQuery();
	                       while($retorno=mysql_fetch_array($query)) { 
	                      ?> 
	                        <option value="<?php echo $retorno['IdEmpresa'] ?>"> <?php echo $retorno['RazaoSocial'] ?>
	                        </option>
 
                        <?php } ?>
                         
                     </select>
 
                    </div>
                    <div class="col-md-4">
                     <br>
                    <label class="form-label">Requerente</label>
                   <select name="SelectRequerente" id="SelectRequerente"  class="select2 form-control"  >                   
                   <?php                      
                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere o Requerente                     */
                    /********************************************************************************************/                     
                        $buscar2 = new Conexao();
                        $buscar2->conectar();
                        $buscar2->selecionarDB();                      

                        $buscar2->set('sql',"SELECT IdRequerente, Nome FROM CadastroRequerente
                                                                       WHERE IdRequerente = '$retornoImovel->IdRequerente'");
                        
                        $retorno1=mysql_fetch_array($buscar2->executarQuery()); ?> 

                        <option value="<?php echo $retorno1['IdRequerente'] ?>"><?php echo $retorno1['Nome'] ?></option>


                     <?php                      
                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere o Requerente                     */
                    /********************************************************************************************/                     
                        $buscar2 = new Conexao();
                        $buscar2->conectar();
                        $buscar2->selecionarDB();                      

                        $buscar2->set('sql',"SELECT IdRequerente, Nome FROM CadastroRequerente ");
                        $query= $buscar2->executarQuery();
                       while($retorno2=mysql_fetch_array($query)) { ?> 

                        <option value="<?php echo $retorno2['IdRequerente'] ?>"><?php echo $retorno2['Nome'] ?></option>
 
                      <?php } ?>
                      </select>  
                    </div>
                    
                    <div class="col-md-4">
                     <br>
                    <label class="form-label">Nome de exibição</label>
                   <input name="NomeExibicao" id="NomeExibicao" type="text"  class="form-control" placeholder="Nome de exibição"
                              value="<?php echo $retornoImovel->NomeExibicao; ?>">
                    </div>
                    
                   </div> 
                    
                        
                        
                      </div>
                      <div class="tab-pane" id="tab2"> <br>
                        <h4 class="semi-bold">Etapa 2 - <span class="light">Dados cadastrais</span></h4>
                        <br>
                        
                        <div class="row form-row">
                      <div class="col-md-6">
                        <input name="NumeroContribuinte" id="NumeroContribuinte" type="text"  class="form-control" placeholder="Numero do Contribuinte" 
                                  value="<?php echo $retornoImovel->NumeroContribuinte; ?>">
                      </div>
                      <div class="col-md-6">
                        <input name="MatriculaContribuinte" id="MatriculaContribuinte" type="text"  class="form-control" placeholder="Matricula" 
                                  value="<?php echo $retornoImovel->MatriculaContribuinte; ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-8">
                        <input name="NomeContribuinte" id="NomeContribuinte" type="text"  class="form-control" placeholder="Nome do contribuinte" 
                                  value="<?php echo $retornoImovel->NomeContribuinte; ?>">
                      </div>
                      <div class="col-md-4">
                        <input name="CpfCnpj" id="CpfCnpj" type="text"  class="form-control" placeholder="CNPJ/CPF"
                                  value="<?php echo $retornoImovel->CnpjCpf; ?>">
                      </div>
                    </div>
                    
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="LocalImovel" id="LocalImovel" type="text"  class="form-control" placeholder="Local do imovel" 
                                  value="<?php echo $retornoImovel->LocalImovel; ?>">
                      </div>
                    </div>
                        
                        <div class="row form-row">
                      <div class="col-md-6">
                        <input name="Cep" id="Cep" type="text"  class="form-control" placeholder="CEP" onkeypress="return verificaNumeros();"  
                                  value="<?php echo $retornoImovel->CepImovel; ?>" onblur="cepImovelCadastro();">
                      </div>
                      <div class="col-md-6">
                        <input name="Codlog" id="Codlog" type="text"  class="form-control" placeholder="Número" 
                                  value="<?php echo $retornoImovel->CodLog; ?>" onblur="configuraMapa();">
                      </div>
                    </div>
                    
                    <div class="row form-row">
                      <div class="col-md-4">
                        <input name="AreaTerreno" id="AreaTerreno" onkeypress="return verificaNumerosCalculo();" type="text"  class="form-control" placeholder="Area do terreno (m2)" 
                                  value="<?php echo $retornoImovel->AreaTerreno; ?>">
                      </div>
                      <div class="col-md-4">
                        <input name="Testada" id="Testada" type="text" onkeypress="return verificaNumerosCalculo();"  class="form-control" placeholder="Testada(m)" 
                                  value="<?php echo $retornoImovel->Testada; ?>">
                      </div>
                      <div class="col-md-4">
                        <input name="AreaConstruida" id="AreaConstruida" onkeypress="return verificaNumerosCalculo();" type="text"  class="form-control" placeholder="Area construida (m2)" 
                                  value="<?php echo $retornoImovel->AreaConstruida; ?>">
                      </div>
                    </div>
                        
                        <div class="row form-row">
                      <div class="col-md-4">
                        <input name="FracaoIdeal" id="FracaoIdeal" type="text"  class="form-control" placeholder="Fração ideal" 
                                  value="<?php echo $retornoImovel->FracaoIdeal; ?>">
                      </div>
                      <div class="col-md-4">
                        <input name="AnoConstrucao" id="AnoConstrucao" type="text"  class="form-control" placeholder="Ano Construção" 
                                  value="<?php echo $retornoImovel->AnoConstrucao; ?>">
                      </div>
                      <div class="col-md-4">
                        <input name="UsoImovel" id="UsoImovel" type="text"  class="form-control" placeholder="Uso do imovel" 
                                  value="<?php echo $retornoImovel->UsoImovel; ?>">
                      </div>
                    </div>

                     <img style='width: 100%; height:300px' id="imagem-mapa" name="imagem-mapa"> 
              <input type="hidden" id="EnderecoMapaAux" name="EnderecoMapaAux">

                        
                      <!-- ATÉ AQUI -->  
                        
                      </div>
					  <div class="tab-pane" id="tab3"> <br>
                        <h4 class="semi-bold">Etapa 3 - <span class="light">Historico</span></h4>
                        <br>   
                        
                        <div class="row form-row" >

                         <?php                      
                            /********************************************************************************************/
                            /*       Variáveis para inserção no banco de dados, insere o Requerente                     */
                            /********************************************************************************************/                     
                                $buscarHistoricoImovel = new Conexao();
                                $buscarHistoricoImovel->conectar();
                                $buscarHistoricoImovel->selecionarDB();                      

                                $buscarHistoricoImovel->set('sql',"SELECT * FROM HistoricoImovel
                                                                               WHERE IdImovel = '$IdImovel'");
                                $queryHistoricoImovel= $buscarHistoricoImovel->executarQuery();
                               while($retornoHistoricoImovel=mysql_fetch_object($queryHistoricoImovel)) {  ?>
                              
                                  <!--Auxiliar para atualização de Historico do imovel-->
                                  <input type="hidden" id="IdHitoricoImovelAux" name="IdHitoricoImovelAux[]" value="<?php echo $retornoHistoricoImovel->IdHistoricoImovel; ?>">
        	                        
                                   <div class="col-md-3">
        	                           <input name="SqlHistoricoArray[]" id="SqlHistoricoArray" type="text"  class="form-control" placeholder="SQL" 
                                                value="<?php echo $retornoHistoricoImovel->SqlImovel; ?>">
        	                         </div>
        	                         <div class="col-md-2">
        	                           <input name="DataHistoricoArray[]" id="DataHistoricoArray" type="text" maxlength="4" class="form-control" placeholder="Data (ano)" 
                                                value="<?php echo $retornoHistoricoImovel->Data; ?>">
        	                         </div>
        	                         <div class="col-md-3">
        	                           <input name="AreaTerrenoHistoricoArray[]" id="AreaTerrenoHistoricoArray" type="text"  class="form-control" placeholder="Area do terreno (m2)" 
                                                value="<?php echo $retornoHistoricoImovel->AreaTerrenoHistorico; ?>">
        	                         </div>
        	                         <div class="col-md-2">
        	                           <input name="AreaEdificadaHistoricoArray[]" id="AreaEdificadaHistoricoArray" type="text"  class="form-control" placeholder="Area edificada(m2)" 
                                                value="<?php echo $retornoHistoricoImovel->AreaEdificada; ?>">
        	                         </div>
        	                       <div class="col-md-2">
        	                        
        			                   <select name="SituacaoHistoricoArray[]" id="SituacaoHistoricoArray" class="form-control" >
        			                   <option value="<?php echo $retornoHistoricoImovel->SituacaoHistorico; ?>"><?php echo $retornoHistoricoImovel->SituacaoHistorico; ?></option>
        			                   <option value="Regular">Regular</option>
                                 <option value="Irregular">Irregular</option>  
                                 </select>  
        	                      </div>

                        <?php } ?>
                      </div>
     
     
               <!--Começo da div para ser clonada  do HISTORICO-->

					<div class="row form-row" id="DivHistoricoOrigem">
					</div>
                    
                    <div class="row form-row" id="DivHistoricoDestino">
                    </div>
                      
          	
          	   <!--fim da div para ser clonada -->
     
     
     

                        
                      </div>
                      
                      
                      
                      <div class="tab-pane" id="tab4"> <br>
                        <h4 class="semi-bold">Etapa 4 - <span class="light">Outros lotes</span></h4>
                        <br>                        
                        
                      <div class="row form-row">

                      <?php                      
                       /********************************************************************************************/
                       /*       Variáveis para inserção no banco de dados, insere o Requerente                     */
                       /********************************************************************************************/                     
                         $buscarOutrosLotes = new Conexao();
                         $buscarOutrosLotes->conectar();
                         $buscarOutrosLotes->selecionarDB();                      

                         $buscarOutrosLotes->set('sql',"SELECT * FROM OutrosLotesImovel
                                                                     WHERE IdImovel = '$IdImovel'");
                         $queryOutrosLotes= $buscarOutrosLotes->executarQuery();
                         while($retornoOutrosLotes=mysql_fetch_object($queryOutrosLotes)) {  ?>


                            <!--Auxiliar para atualização de Outros Lotes do imovel-->
                            <input type="hidden" id="IdOutrosLotesAux" name="IdOutrosLotesAux[]" value="<?php echo $retornoOutrosLotes->IdOutrosLotes; ?>">
                                  
      	                      <div class="col-md-3">
      	                        <input name="SqlOutrosLotesArray[]" id="SqlOutrosLotesArray" type="text"  class="form-control" placeholder="SQL"
                                          value="<?php echo $retornoOutrosLotes->SqlOutroLotes; ?>">
      	                      </div>
      	                      <div class="col-md-2">
      	                        <input name="AreaTerrenoOutrosLotesArray[]" id="AreaTerrenoOutrosLotesArray" type="text"  class="form-control" placeholder="Area do Terreno(m2)"
                                          value="<?php echo $retornoOutrosLotes->AreaTerrenoOutrosLotes; ?>">
      	                      </div>
      	                      <div class="col-md-2">
      	                        <input name="AreaConstruidaOutrosLotesArray[]" id="AreaConstruidaOutrosLotesArray" type="text"  class="form-control" placeholder="Area Construida(m2)"
                                          value="<?php echo $retornoOutrosLotes->AreaConstruidaOutrosLotes; ?>">
      	                      </div>
      	                       <div class="col-md-2">
      	                        <input name="TestadaoutrosLotesArray[]" id="TestadaoutrosLotesArray" type="text"  class="form-control" placeholder="Testada"
                                          value="<?php echo $retornoOutrosLotes->TestadaOutrosLotes; ?>">
      	                      </div>
      	                      <div class="col-md-2">
      	                        <input name="MatriculaOutrosLotesArray[]" id="MatriculaOutrosLotesArray" type="text"  class="form-control" placeholder="Matricula"
                                          value="<?php echo $retornoOutrosLotes->MatriculaOutrosLotes; ?>">
      	                      </div>

                         <?php } ?>
                      </div>
                    
                    
                     <!--inicio do clone de OUTROS LOTES -->
                           <div class="row form-row" id="divOutrosLotesOrigem">
                           </div>

                           <div class="row form-row" id="divOutrosLotesDestino">
                           </div>

                    <!-- Fim do clone de OUTROS LOTES -->
                    
         
                    
                                            
                      </div>
                      
                      
                       
                      <div class="tab-pane" id="tab5"> <br>
                        <h4 class="semi-bold">Etapa 5 - <span class="light">Zoneamento</span></h4>
                        <br>
                        
                        
                        <div class="row form-row">
                      <div class="col-md-4">
                        <input name="Zona" id="Zona" type="text"  class="form-control" placeholder="Zona" 
                                    value="<?php echo $retornoImovel->Zona; ?>">
                      </div>
                      <div class="col-md-4">
                        <input name="CaBasico" id="CaBasico" type="text"  class="form-control" placeholder="C.A. basico" 
                                    value="<?php echo $retornoImovel->CaBasico; ?>">
                      </div>
                      <div class="col-md-4">
                        <input name="Distrito" id="Distrito" type="text"  class="form-control" placeholder="Distrito" 
                                    value="<?php echo $retornoImovel->Distrito; ?>">
                      </div>
                       
                    </div>
                    <div class="row form-row">
                      <div class="col-md-4">
                        <input name="SubPrefeitura" id="SubPrefeitura" type="text"  class="form-control" placeholder="SubPref." 
                                    value="<?php echo $retornoImovel->SubPrefeitura; ?>">
                      </div>
                      <div class="col-md-4">
                        <input name="CaMaximo" id="CaMaximo" type="text"  class="form-control" placeholder="C.A. maximo" 
                                    value="<?php echo $retornoImovel->CaMaximo; ?>">
                      </div>
                      <div class="col-md-4">
                        <input name="Gabarito" id="Gabarito" type="text"  class="form-control" placeholder="Gabarito" 
                                    value="<?php echo $retornoImovel->Gabarito; ?>">
                      </div>
                       
                    </div>
                    
                    
                    <div class="row form-row">
                      <div class="col-md-4">
                        <input name="ToImovel" id="ToImovel" type="text"  class="form-control" placeholder="T.O." 
                                    value="<?php echo $retornoImovel->ToImovel; ?>">
                      </div>
                      <div class="col-md-4">
                        <input name="TxPerm" id="TxPerm" type="text"  class="form-control" placeholder="Tx Perm." 
                                    value="<?php echo $retornoImovel->TxPerm; ?>">
                      </div>
                      <div class="col-md-4">
                        <input name="LargVia" id="LargVia" type="text"  class="form-control" placeholder="Larg. via." 
                                    value="<?php echo $retornoImovel->LargVia; ?>">
                      </div>
                       
                    </div>
                        
                        <div class="row form-row">
                      <div class="col-md-4">
                      <input name="ClassificacaoVia" id="ClassificacaoVia" type="text"  class="form-control" placeholder="Classificação da via" 
                                  value="<?php echo $retornoImovel->ClassificacaoVia; ?>">
                      </div>
                      <div class="col-md-4">
                      <input name="PagGeomapas" id="PagGeomapas" type="text"  class="form-control" placeholder="Pág. Geomapas" 
                                  value="<?php echo $retornoImovel->PagGeomapas; ?>">
                      </div>
                        </div>
                        
                        <div class="row form-row">
                      <div class="col-md-12">
                      <textarea name="ComentariosZoneamento" id="ComentariosZoneamento"  rows="5" class="col-lg-12" 
                                ><?php echo $retornoImovel->ComentariosZoneamento; ?></textarea>
                      </div>
                        </div>
                        
                        
                        
                      </div>
                      
                      
                      
                      <div class="tab-pane" id="tab6"> <br>
                        <h4 class="semi-bold">Etapa 6 - <span class="light">Operação Urbana</span></h4>
                        <br>
                        
                        
                        <div class="row form-row">
                        <div class="col-md-2">
                        <select name="SituacaoOperacaoUrbana" id="SituacaoOperacaoUrbana" class="select2 form-control" >
                   <option value="<?php echo $retornoImovel->SituacaoOperacaoUrbana; ?>"><?php echo $retornoImovel->SituacaoOperacaoUrbana; ?></option>
                      </select> 
                      	</div> 
                        
                        <div class="col-md-10">
                        <textarea name="ComentariosOperacaoUrbana" id="ComentariosOperacaoUrbana"  rows="5" class="col-lg-10">
                                <?php echo $retornoImovel->ComentariosOperacaoUrbana; ?></textarea>
                        </div>
                      </div>
                      
                      
                      
                      </div>
                      
                      
                      <div class="tab-pane" id="tab7"> <br>
                        <h4 class="semi-bold">Etapa 7 - <span class="light">Restrições</span></h4>
                        <br>
                        
                        
                        
                        <div class="row form-row">
                        <div class="col-md-12">
                        
                        <table width="100%" class="table no-more-tables table-bordered">
                        
                        				<thead>
                                            <tr>
                                                <th style="width:15%" >SQL</th>
                                                <th style="width:14%">Tombamento</th>
                                                <th style="width:14%">Area Manancial</th>
                                                <th style="width:14%">Area Contaminada</th>
                                                <th style="width:14%">Patrimonio Ambiental</th>
                                                <th style="width:14%">Proteção Ambiental</th>
                                                <th style="width:14%">Pendencia Financeira</th>
                                            </tr>
                         				</thead>
                                   <tbody>
                                    <?php                      
                                     /********************************************************************************************/
                                     /*       Variáveis para inserção no banco de dados, insere o Requerente                     */
                                     /********************************************************************************************/                     
                                       $buscarRestricoesImovel = new Conexao();
                                       $buscarRestricoesImovel->conectar();
                                       $buscarRestricoesImovel->selecionarDB();                      

                                       $buscarRestricoesImovel->set('sql',"SELECT * FROM RestricoesImovel
                                                                                   WHERE IdImovel = '$IdImovel'");
                                       $queryRestricoesImovel= $buscarRestricoesImovel->executarQuery();
                                       while($retornoRestricoesImovel=mysql_fetch_object($queryRestricoesImovel)) {  ?>
  
              												 <div class="row form-row">   
                                       <!--Auxiliar para atualização das Restrições do imovel-->
                            <input type="hidden" name="IdRestricoesImovelAux[]" id="IdRestricoesImovelAux" value="<?php echo $retornoRestricoesImovel->IdRestricoesImovel; ?>">                                     
              												  <tr>
              												    <td><input name="SqlRetricao[]" id="SqlRetricao" type="text"  class="form-control" placeholder="SQL" value="<?php echo $retornoRestricoesImovel->SqlRestricoes; ?>"> </td>
              												    <td><select name="TombamentoRestricao[]" id="TombamentoRestricao" class="select2 form-control"  >
              												                   <option value="<?php echo $retornoRestricoesImovel->Tombamento; ?>"><?php echo $retornoRestricoesImovel->Tombamento; ?></option>
                                                         <option value="...">...</option>
                                                         <option value="SIM">SIM</option>
                                                         <option value="NÃO">NÃO</option>
              												                      </select> </td>
              												    <td><select name="AreaManancialRestricao[]" id="AreaManancialRestricao" class="select2 form-control"  >
              												                  <option value="<?php echo $retornoRestricoesImovel->AreaManancial; ?>"><?php echo $retornoRestricoesImovel->AreaManancial; ?></option>
              												                  <option value="...">...</option>
                                                        <option value="SIM">SIM</option>
                                                        <option value="NÃO">NÃO</option>    
                                                            </select> </td>
              												    <td><select name="AreaContaminadaRestricao[]" id="AreaContaminadaRestricao" class="select2 form-control"  >
              												                  <option value="<?php echo $retornoRestricoesImovel->AreaContaminada; ?>"><?php echo $retornoRestricoesImovel->AreaContaminada; ?></option>
              												                  <option value="...">...</option>
                                                        <option value="SIM">SIM</option>
                                                        <option value="NÃO">NÃO</option>
                                                           </select> </td>
              												    <td><select name="PatrimonioAmbientalRestricao[]" id="PatrimonioAmbientalRestricao" class="select2 form-control"  >
              												                  <option value="<?php echo $retornoRestricoesImovel->PatrimonioAmbiental; ?>"><?php echo $retornoRestricoesImovel->PatrimonioAmbiental; ?></option>
              												                  <option value="...">...</option>
                                                        <option value="SIM">SIM</option>
                                                        <option value="NÃO">NÃO</option>
                                                            </select> </td>
              												    <td><select name="ProtecaoAmbientalRestricao[]" id="ProtecaoAmbientalRestricao" class="select2 form-control"  >
              												                  <option value="<?php echo $retornoRestricoesImovel->ProtecaoAmbiental; ?>"><?php echo $retornoRestricoesImovel->ProtecaoAmbiental; ?></option>
              												                  <option value="...">...</option>
                                                        <option value="SIM">SIM</option>
                                                        <option value="NÃO">NÃO</option>
                                                            </select> </td>
              												    <td><select name="PedenciaFinanceiraRestricao[]" id="PedenciaFinanceiraRestricao" class="select2 form-control"  >
              												                  <option value="<?php echo $retornoRestricoesImovel->PedenciaFinanceira; ?>"><?php echo $retornoRestricoesImovel->PedenciaFinanceira; ?></option>
              												                  <option value="...">...</option>
                                                        <option value="SIM">SIM</option>
                                                        <option value="NÃO">NÃO</option>
                                                            </select> </td>
              												  </tr>
              												</div> 
                              <?php } ?> 
      						 
      						   </tbody>
      						 </table>
                 </div>                        
              </div>
           </div>
                           
                     
                     
                     
                      
                      <div class="tab-pane" id="tab8"> <br>
                        <h4 class="semi-bold">Etapa 8 - <span class="light">Dividas</span></h4>
                        
                        <br>
                        
                        <div class="row form-row">
                      <div class="col-md-1">
                      <h4>IPTU</h4>
                      </div>
                      <div class="col-md-6">
                      <input name="ExerciciosIptu" id="ExerciciosIptu" type="text"  class="form-control" placeholder="Exercicio(s)"
                              value="<?php echo $retornoImovel->ExerciciosIptu; ?>">
                      </div>
                      <div class="col-md-3">
                      <input name="ValorTolalIptu" id="ValorTolalIptu"  onkeypress="verificaNumerosCalculo();" type="text"  class="form-control" placeholder="Valor Total"
                              value="<?php echo $retornoImovel->ValorTolalIptu; ?>" >
                      </div>
                      
                      	</div>
                        
                        <div class="row form-row">
                      <div class="col-md-1">
                     <h4>Multas</h4>
                      </div>
                      <div class="col-md-6">
                      <input name="ExerciciosMultas" id="ExerciciosMultas" type="text"  class="form-control" placeholder="Exercicio(s)"
                              value="<?php echo $retornoImovel->ExerciciosMultas; ?>" >
                      </div>
                      <div class="col-md-3">
                      <input name="ValorTolalMultas" id="ValorTolalMultas" onkeypress="verificaNumerosCalculo();" type="text"  class="form-control" 
                              value="<?php echo $retornoImovel->ValorTolalMultas; ?>" >
                      </div>
                      
                      	</div>
                        
                        <div class="row form-row">
                      <div class="col-md-1">
                      <h4>TOTAL</h4>
                      </div>
                      <div class="col-md-3">
                      <input type="text" name="TotalExercicios" id="TotalExercicios"  class="form-control" value="<?php echo $retornoImovel->TotalExercicios; ?>" >
                      <input type="hidden" name="TotalExerciciosAux" id="TotalExerciciosAux"  class="form-control" >

                      </div>
                      <button class="btn btn-primary btn-cons" type="button" onclick="somarValoresDividas('+');">Calcular </button>
                      
                      <div class="row form-row">
                        <div class="col-md-12">
                        <textarea name="ComentariosDividas" id="ComentariosDividas" rows="5" class="col-lg-12"><?php echo $retornoImovel->ComentariosDividas; ?></textarea>
                        </div>
                      </div>
                      
                      
                      	</div>
                        
                        
                        
                      </div>
                      
                      
                      
                      <div class="tab-pane" id="tab9"> <br>
                        <h4 class="semi-bold">Etapa 9 - <span class="light">Processos</span></h4>
                        
                        <br>
                        
                        
                        
                            <div class="row form-row">
                        <div class="col-md-12">
                        
                        <table width="100%" class="table no-more-tables table-bordered">
                        
                        <thead>
                           <tr>
                              <th style="width:25%" >Ano/ Processo</th>
                              <th style="width:25%">Interessado</th>
                              <th style="width:25%">Assunto</th>
                              <th style="width:25%">Situação</th>                                                
                           </tr>
                       </thead>

                        </table>
                 <div class="row form-row" id="divProcessosOrigem">

                    <?php                      
                       /********************************************************************************************/
                      /*       Variáveis para inserção no banco de dados, insere o Requerente                     */
                     /********************************************************************************************/                     
                       $buscarProcessoImovel = new Conexao();
                       $buscarProcessoImovel->conectar();
                       $buscarProcessoImovel->selecionarDB();                      

                       $buscarProcessoImovel->set('sql',"SELECT * FROM ProcessosImovel
                                                                    WHERE IdImovel = '$IdImovel'");
                       $queryProcessoImovel= $buscarProcessoImovel->executarQuery();
                            while($retornoProcessoImovel=mysql_fetch_object($queryProcessoImovel)) {  ?>
                            
                            <!--Auxiliar para atualização dos processos do imovel-->
                            <input type="hidden" name="IdProcessosImovelAux[]" id="IdProcessosImovelAux" value="<?php echo $retornoProcessoImovel->IdProcessosImovel; ?>">
                             
                              <div class='col-md-3'>
                               <input name='AnoProcessoProcessoArray[]' id='AnoProcessoProcessoArray' maxlength='4' type='text'  class='form-control' placeholder='Ano/Processo'
                                          value="<?php echo $retornoProcessoImovel->AnoProcesso; ?>">
                                 </div>
                                 <div class='col-md-3'>
                               <input name='InteressadoProcessoArray[]' id='InteressadoProcessoArray' type='text'  class='form-control' placeholder='Interessado'
                                          value="<?php echo $retornoProcessoImovel->Interessado; ?>">
                                              </div>
                                              <div class='col-md-3'>
                                               <input name='AssuntoProcessoArray[]' id='AssuntoProcessoArray' type='text'  class='form-control' placeholder='Assunto'
                                                          value="<?php echo $retornoProcessoImovel->Assunto; ?>">
                                </div>
                                  <div class='col-md-3'>
                                  <input  name='SituacaoProcessoArray[]' id='SituacaoProcessoArray' type='text'  class='form-control' placeholder='Situação'
                                              value="<?php echo $retornoProcessoImovel->Situacao; ?>">
                                 </div>  

                           <?php } ?>             

                     </div>
              


 					<!--inicio do clone de OUTROS LOTES -->
                           <div class="row form-row" id="divProcessosOrigem">
                           </div>

                           <div class="row form-row" id="divProcessosDestino">
                           </div>

                    <!-- Fim do clone de OUTROS LOTES -->
                    


                      <div class="row form-row">
                       <!-- Fim do clone de OUTROS LOTES -->
                    <?php                      
                       /********************************************************************************************/
                      /*       Variáveis para inserção no banco de dados, insere o Requerente                     */
                     /********************************************************************************************/                     
                       $buscarComentarioProcessoImovel = new Conexao();
                       $buscarComentarioProcessoImovel->conectar();
                       $buscarComentarioProcessoImovel->selecionarDB();                      

                       $buscarComentarioProcessoImovel->set('sql',"SELECT * FROM ComentariosProcessoImovel
                                                                    WHERE IdImovel = '$IdImovel'");
                     
                       $retornoComentarioProcessoImovel=mysql_fetch_object($buscarComentarioProcessoImovel->executarQuery()); ?>


                      <!--Auxiliar para atualização dos processos do imovel-->
                            <input type="hidden" name="IdComentariosProcessoImovelAux" id="IdComentariosProcessoImovelAux" 
                            value="<?php echo $retornoComentarioProcessoImovel->IdComentariosProcessoImovel; ?>">

                        <div class="col-md-12">
                        <textarea name="ComentariosProcessos" id="ComentariosProcessos" rows="5" class="col-lg-12"><?php echo $retornoComentarioProcessoImovel->Comentarios; ?></textarea>
                        </div>
                      </div>
                      
                        </div>
                        
                        </div>
                        
                        
                        
                      </div>
                      
                      
                      <div class="tab-pane" id="tab10"> <br>
                        <h4 class="semi-bold">Etapa 10 - <span class="light">Imagens</span></h4>

                        <br>
                        
                        <div class="row form-row">
                        	<div class="col-md-4">
                            Quadra Fiscal
                        <input name="QuadraFiscal" id="QuadraFiscal" type="file"  accept="image/*" multiple class="dropzone no-border"  />
                        	</div>
                            <div class="col-md-4">
                             Geomapas
                        <input name="Geomapas" id="Geomapas" type="file" accept="image/*" multiple class="dropzone no-border"  />
                        	</div>
                            <div class="col-md-4">
                             Imagem Local
                        <input name="ImagemLocal" id="ImagemLocal" type="file" accept="image/*" multiple class="dropzone no-border"  />
                        	</div>
                        </div>
                        </div>
                        
                        
                        
                         <div class="tab-pane" id="tab11"> <br>
                        <h4 class="semi-bold">Etapa 11 - <span class="light">Dados Adicionais</span></h4>

                        <br>
                        
                             <div class="row form-row">
                              <?php                      
                                   /********************************************************************************************/
                                  /*       Variáveis para inserção no banco de dados, insere o Requerente                     */
                                 /********************************************************************************************/                     
                                   $buscarDadosAdicionaisImovel = new Conexao();
                                   $buscarDadosAdicionaisImovel->conectar();
                                   $buscarDadosAdicionaisImovel->selecionarDB();                      

                                   $buscarDadosAdicionaisImovel->set('sql',"SELECT * FROM DadosAdicionaisImovel
                                                                                WHERE IdImovel = '$IdImovel'");
                                   $queryDadosAdicionaisImovel= $buscarDadosAdicionaisImovel->executarQuery();
                                        while($retornoDadosAdicionaisImovel=mysql_fetch_object($queryDadosAdicionaisImovel)) {  ?>

                                        <!--Auxiliar para atualização dos processos do imovel-->
                                          <input type="hidden" name="IdDadosAdicionaisAux[]" id="IdDadosAdicionaisAux" 
                                                    value="<?php echo $retornoDadosAdicionaisImovel->IdDadosAdicionais; ?>">
                                                    
                                        <div class="col-md-3">
                                             <input name="TituloDadosAdicionaisArray[]" id="TituloDadosAdicionaisArray" type="text"  class="form-control" placeholder="Titulo"
                                                      value="<?php echo $retornoDadosAdicionaisImovel->TituloDadosAdicionais; ?>">  
                                          </div>
                                          <div class="col-md-9">
                                             <input name="ComentariosDadosAdicionaisArray[]" id="ComentariosDadosAdicionaisArray" type="text"  class="form-control" placeholder="Comentário"
                                                      value="<?php echo $retornoDadosAdicionaisImovel->ComentarioDadosAdicionais; ?>">  
                                        </div>

                                  <?php } ?>
                            </div>
                            
                                                      
                           <!-- INICIO DO CLONE ADICIONAIS -->
                           
                           <div class="row form-row" id="divAdicionaisOrigem">	                        	
                           </div>
                           <div class="row form-row" id="divAdicionaisDestino">	                        	
                           </div>
                           
                           <!-- FIM DO CLONE ADICIONAIS -->
                           
                         <div class="row form-row">
                         	 	<div class="col-md-8">                                                         
                          		</div>

                           
                            	<div class="col-md-4">
                               <br><br><br>                 
                          			<button class="btn btn-primary btn-cons" type="button" onclick="validaImovel();somarValoresDividas('+');cepImovelCadastro(); enviarFormImovel('Atualizar');">Atualizar </button>
                                <button class="btn btn-danger btn-cons" type="button" onclick="enviarFormImovel('Excluir');">Excluir </button>
                           		</div>    
                        </div>
                      

                      </div>
                      
                      <ul class=" wizard wizard-actions">
                        <li class="previous first" style="display:none;"><a href="javascript:;" class="btn">&nbsp;&nbsp;First&nbsp;&nbsp;</a></li>
                        <li class="previous"><a href="javascript:;" class="btn">&nbsp;&nbsp;Voltar &nbsp;&nbsp;</a></li>
                        <li class="next last" style="display:none;"><a href="javascript:;" class="btn btn-primary">&nbsp;&nbsp;Last&nbsp;&nbsp;</a></li>
                        <li class="next" ><a href="javascript:;" class="btn btn-primary">&nbsp;&nbsp; Avançar &nbsp;&nbsp;</a></li>
                      </ul>
                    </div>
                  </div>
                                  </form>
              </div>
            </div>
          </div>
        </div>
                
                       
 	 </div>
    </div>
  </div>
  
  <span class=" "><a href="#tab1" data-toggle="tab"><span class="title">Dados Iniciais</span></a></span>
                      
     <div class="form-actions">
         <div class="pull-left"></div>
            <a href="#" class="scrollup">Subir</a>
   
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
 
 
 
 
 
 
 
 
 
 
 
 
 
<!-- END CONTAINER --> 
<?php formBuscaSql(); ?>
<!-- END CONTAINER -->

<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="assets/js/form_validations.js" type="text/javascript"></script>
<script src="assets/js/form_elements.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/demo.js" type="text/javascript"></script>
<script src="assets/plugins/dropzone/dropzone-amd-module.js"></script>
<script src="assets/plugins/dropzone/dropzone-amd-module.min.js"></script>
<script src="assets/plugins/dropzone/dropzone.js"></script>
<script src="assets/plugins/dropzone/dropzone.min.js"></script>

<!-- END CORE TEMPLATE JS -->
<!-- END JAVASCRIPTS -->


</body>
</html>