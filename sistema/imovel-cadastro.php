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
  jQuery(function(){
   $("#CpfCnpj").mask("999.999.999-99");
   $("#Cep").mask("99.999-999");

   $("#NumeroContribuinte").mask("999.999.9999-9");
   $("#SqlHistorico1").mask("999.999.9999-9");
   $("#SqlOutrosLotes1").mask("999.999.9999-9");

   $("#SqlRetricao1").mask("999.999.9999-9");
   $("#SqlRetricao2").mask("999.999.9999-9");
   $("#SqlRetricao3").mask("999.999.9999-9");
   $("#SqlRetricao4").mask("999.999.9999-9");
   $("#SqlRetricao5").mask("999.999.9999-9");
   $("#SqlRetricao6").mask("999.999.9999-9");
   $("#SqlRetricao7").mask("999.999.9999-9");
   $("#SqlRetricao8").mask("999.999.9999-9");
   $("#SqlRetricao9").mask("999.999.9999-9");
   $("#SqlRetricao10").mask("999.999.9999-9");

   $("#ValorTolalIptu").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
   $("#ValorTolalMultas").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
   
});

</script>

<script type="text/javascript">
  function configuraMapa(){
   LocalImovel = document.getElementById("LocalImovel").value
 Cep = document.getElementById("Cep").value
 Codlog = document.getElementById("Codlog").value

    document.getElementById("imagem-mapa").src="http://maps.googleapis.com/maps/api/staticmap?center="+LocalImovel+","+Codlog+"-"+Cep+"&zoom=15&size=900x300&scale=2&markers=size:mid%20Ccolor:red%7C"+LocalImovel+"+"+Codlog+"+"+Cep+"&sensor=false";
  }
</script>


</head>

<!-- BEGIN BODY -->
<body class="" onload="setDataImovel();">
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
                <h3>Cadastro - <span class="semi-bold">Imovel</span></h3>
              </div>
              <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            
              
              <div class="grid-body ">
              <div class="row">
                <form id="commentForm" name="commentForm" enctype="multipart/form-data" method="post" action="includes/php/CadastraImovel.php">
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
              <div class="tab-content">
                      <div class="tab-pane" id="tab1"> <br>
                        <h4 class="semi-bold">Etapa 1 - <span class="light">Dados Iniciais</span></h4>
                        <br>
                        
                        
                        <div class="row form-row">
                      <div class="col-md-3">
                        <label class="form-label">Data emissão:</label>
                        <div class="controls">
                          <input type="text" placeholder="20/06/2014" class="form-control" readonly="true"
                          		name="DataEmissao" id="DataEmissao">
                        </div>
                      </div>
                      
                      <div class="col-md-3">
                        <label class="form-label">COD.:</label>
                        <div class="controls">
                        <?php 		$buscar = new Conexao();
                          			$buscar->conectar();
                          			$buscar->selecionarDB();
                          			$codigoRetornado = 0;
                          			
                          			$buscar->set('sql',"SELECT  count(IdImovel) as countCodigo FROM `CadastraImovel` ORDER BY IdImovel");
                          			$query= $buscar->executarQuery();
                          			while($retorno=mysql_fetch_object($query)){
                          				$codigoRetornado = $retorno->countCodigo;
                          			}
                          			if ($codigoRetornado == null) {
                          				$codigoRetornado = 1;
                          				echo "<input type='text' value='$codigoRetornado' class='form-control' readonly='true'
                          						name='CodigoImovel' id='CodigoImovel'>";
                          				 
                          			}else {
                          				$codigoRetornado++;
                          				echo "<input type='text' value='$codigoRetornado' class='form-control' readonly='true'
                          				name='CodigoImovel' id='CodigoImovel'>";
                          			}
                          			?>
                          
                        </div>
                      </div> 
                    </div>
                    
                   <div class="row form-row">
                   	<div class="col-md-4">
                    	 <br>
                      
                 
                  <label class="form-label">Holding</label>
                   <select name="SelectHolding" id="SelectHolding" class="select2 form-control" >
                     <option>Selecione...</option> 

                        <?php 
                     	include('php/includes/Conexao.class.php');

		                    /********************************************************************************************/
		                    /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
		                    /********************************************************************************************/
	                     
	                        $buscar = new Conexao();
	                        $buscar->conectar();
	                        $buscar->selecionarDB();                      
	
	                       $buscar->set('sql',"SELECT `IdEmpresa`,`RazaoSocial` FROM `CadastroHolding` ");
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
                     <option>Selecionar...</option>                         
                  
                     <?php                      
                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere o Requerente                     */
                    /********************************************************************************************/                     
                        $buscar2 = new Conexao();
                        $buscar2->conectar();
                        $buscar2->selecionarDB();                      

                        $buscar2->set('sql',"SELECT `IdRequerente`, `Nome` FROM `CadastroRequerente` ");
                        $query= $buscar2->executarQuery();
                       while($retorno=mysql_fetch_array($query)) { 
                      ?> 
                        <option value="<?php echo $retorno['IdRequerente'] ?>"> <?php echo $retorno['Nome'] ?>
                        </option>
 
                      <?php } ?>
                      </select>  
                    </div>
                    
                    <div class="col-md-4">
                     <br>
                    <label class="form-label">Nome de exibição</label>
                   <input name="NomeExibicao" id="NomeExibicao" type="text"  class="form-control" placeholder="Nome de exibição">
                    </div>
                    
                   </div> 
                    
                        
                        
                      </div>
                      <div class="tab-pane" id="tab2"> <br>
                        <h4 class="semi-bold">Etapa 2 - <span class="light">Dados cadastrais</span></h4>
                        <br>
                        
                        <div class="row form-row">
                      <div class="col-md-6">
                        <input name="NumeroContribuinte" id="NumeroContribuinte" type="text"  class="form-control" placeholder="Numero do Contribuinte">
                      </div>
                      <div class="col-md-6">
                        <input name="MatriculaContribuinte" id="MatriculaContribuinte" type="text"  class="form-control" placeholder="Matricula">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-8">
                        <input name="NomeContribuinte" id="NomeContribuinte" type="text"  class="form-control" placeholder="Nome do contribuinte">
                      </div>
                      <div class="col-md-4">
                        <input name="CpfCnpj" id="CpfCnpj" type="text"  class="form-control" placeholder="CPF">
                      </div>
                    </div>
                    
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="LocalImovel" id="LocalImovel" type="text"  class="form-control" placeholder="Endereço do imovel">
                      </div>
                    </div>
                        
                        <div class="row form-row">
                      <div class="col-md-6">
                        <input name="Cep" id="Cep" type="text"  class="form-control" placeholder="CEP" onkeypress="return verificaNumeros();" onblur="cepImovelCadastro();">
                      </div>
                      <div class="col-md-6">
                        <input name="Codlog" id="Codlog" type="text"  class="form-control" placeholder="Número" onmouseout="configuraMapa();">
                      </div>
                    </div>
                    
                    <div class="row form-row">
                      <div class="col-md-4">
                        <input name="AreaTerreno" id="AreaTerreno" onkeypress="return verificaNumerosCalculo();" type="text"  class="form-control" placeholder="Area do terreno (m2)">
                      </div>
                      <div class="col-md-4">
                        <input name="Testada" id="Testada" type="text" onkeypress="return verificaNumerosCalculo();"  class="form-control" placeholder="Testada(m)">
                      </div>
                      <div class="col-md-4">
                        <input name="AreaConstruida" id="AreaConstruida" onkeypress="return verificaNumerosCalculo();" type="text"  class="form-control" placeholder="Area construida (m2)">
                      </div>
                    </div>
                        
                        <div class="row form-row">
                      <div class="col-md-4">
                        <input name="FracaoIdeal" id="FracaoIdeal" type="text"  class="form-control" placeholder="Fração ideal">
                      </div>
                      <div class="col-md-4">
                        <input name="AnoConstrucao" id="AnoConstrucao" type="text"  class="form-control" placeholder="Ano Construção">
                      </div>
                      <div class="col-md-4">
                        <input name="UsoImovel" id="UsoImovel" type="text"  class="form-control" placeholder="Uso do imovel">
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
	                         <div class="col-md-3">
	                           <input name="SqlHistorico1" id="SqlHistorico1" type="text"  class="form-control" placeholder="SQL">
	                         </div>
	                         <div class="col-md-2">
	                           <input name="DataHistorico1" id="DataHistorico1" type="text" maxlength="4" class="form-control" placeholder="Data (ano)">
	                         </div>
	                         <div class="col-md-3">
	                           <input name="AreaTerrenoHistorico1" id="AreaTerrenoHistorico1" type="text"  class="form-control" placeholder="Area do terreno (m2)">
	                         </div>
	                         <div class="col-md-2">
	                           <input name="AreaEdificadaHistorico1" id="AreaEdificadaHistorico1" type="text"  class="form-control" placeholder="Area edificada(m2)">
	                         </div>
	                       <div class="col-md-2">
	                        
			                   <select name="SituacaoHistorico1" id="SituacaoHistorico1" class="form-control"  >
			                   <option>Regular</option>
			                   <option>Irregular</option>
			                   </select>  
	                      </div>
                      </div>
     
     
               <!--Começo da div para ser clonada  do HISTORICO-->

					<div class="row form-row" id="DivHistoricoOrigem">
					</div>
                    
                    <div class="row form-row" id="DivHistoricoDestino">
                    </div>
                      
          	
          	   <!--fim da div para ser clonada -->
     
     
     

                    <button type="button" class="btn btn-default btn-cons" onclick="criarCampoHistorico();">Adicionar Linha</button>
                        
                      </div>
                      
                      
                      
                      <div class="tab-pane" id="tab4"> <br>
                        <h4 class="semi-bold">Etapa 4 - <span class="light">Outros lotes</span></h4>
                        <br>
                        
                        
                      <div class="row form-row">
	                      <div class="col-md-3">
	                        <input name="SqlOutrosLotes1" id="SqlOutrosLotes1" type="text"  class="form-control" placeholder="SQL">
	                      </div>
	                      <div class="col-md-2">
	                        <input name="AreaTerrenoOutrosLotes1" id="AreaTerrenoOutrosLotes1" type="text"  class="form-control" placeholder="Area do Terreno(m2)">
	                      </div>
	                      <div class="col-md-2">
	                        <input name="AreaConstruida1" id="AreaConstruida1" type="text"  class="form-control" placeholder="Area Construida(m2)">
	                      </div>
	                       <div class="col-md-2">
	                        <input name="TestadaoutrosLotes1" id="TestadaoutrosLotes1" type="text"  class="form-control" placeholder="Testada">
	                      </div>
	                      <div class="col-md-2">
	                        <input name="MatriculaOutrosLotes1" id="MatriculaOutrosLotes1" type="text"  class="form-control" placeholder="Matricula">
	                      </div>
                      </div>
                    
                    
                     <!--inicio do clone de OUTROS LOTES -->
                           <div class="row form-row" id="divOutrosLotesOrigem">
                           </div>

                           <div class="row form-row" id="divOutrosLotesDestino">
                           </div>

                    <!-- Fim do clone de OUTROS LOTES -->
                    
         
                    
                     <button type="button" class="btn btn-default btn-cons" onclick="criarCampoOutrosLotes();">Adicionar Linha</button>
                    
                        
                      </div>
                      
                      
                       
                      <div class="tab-pane" id="tab5"> <br>
                        <h4 class="semi-bold">Etapa 5 - <span class="light">Zoneamento</span></h4>
                        <br>
                        
                        
                        <div class="row form-row">
                      <div class="col-md-4">
                        <input name="Zona" id="Zona" type="text"  class="form-control" placeholder="Zona">
                      </div>
                      <div class="col-md-4">
                        <input name="CaBasico" id="CaBasico" type="text"  class="form-control" placeholder="C.A. basico">
                      </div>
                      <div class="col-md-4">
                        <input name="Distrito" id="Distrito" type="text"  class="form-control" placeholder="Distrito">
                      </div>
                       
                    </div>
                    <div class="row form-row">
                      <div class="col-md-4">
                        <input name="SubPrefeitura" id="SubPrefeitura" type="text"  class="form-control" placeholder="SubPref.">
                      </div>
                      <div class="col-md-4">
                        <input name="CaMaximo" id="CaMaximo" type="text"  class="form-control" placeholder="C.A. maximo">
                      </div>
                      <div class="col-md-4">
                        <input name="Gabarito" id="Gabarito" type="text"  class="form-control" placeholder="Gabarito">
                      </div>
                       
                    </div>
                    
                    
                    <div class="row form-row">
                      <div class="col-md-4">
                        <input name="ToImovel" id="ToImovel" type="text"  class="form-control" placeholder="T.O.">
                      </div>
                      <div class="col-md-4">
                        <input name="TxPerm" id="TxPerm" type="text"  class="form-control" placeholder="Tx Perm.">
                      </div>
                      <div class="col-md-4">
                        <input name="LargVia" id="LargVia" type="text"  class="form-control" placeholder="Larg. via.">
                      </div>
                       
                    </div>
                        
                        <div class="row form-row">
                      <div class="col-md-4">
                      <input name="ClassificacaoVia" id="ClassificacaoVia" type="text"  class="form-control" placeholder="Classificação da via">
                      </div>
                      <div class="col-md-4">
                      <input name="PagGeomapas" id="PagGeomapas" type="text"  class="form-control" placeholder="Pág. Geomapas">
                      </div>
                        </div>
                        
                        <div class="row form-row">
                      <div class="col-md-12">
                      <textarea name="ComentariosZoneamento" id="ComentariosZoneamento"  rows="5" class="col-lg-12">Comentários</textarea>
                      </div>
                        </div>
                        
                        
                        
                      </div>
                      
                      
                      
                      <div class="tab-pane" id="tab6"> <br>
                        <h4 class="semi-bold">Etapa 6 - <span class="light">Operação Urbana</span></h4>
                        <br>
                        
                        
                        <div class="row form-row">
                        <div class="col-md-2">
                        <select name="SituacaoOperacaoUrbana" id="SituacaoOperacaoUrbana" class="select2 form-control"  >
                   <option>Sim</option>
                   <option>Não</option>
                      </select> 
                      	</div> 
                        
                        <div class="col-md-10">
                        <textarea name="ComentariosOperacaoUrbana" id="ComentariosOperacaoUrbana"  rows="5" class="col-lg-10">Comentários</textarea>
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
  
												 <div class="row form-row">                                        
												  <tr>
												    <td><input name="SqlRetricao1" id="SqlRetricao1" type="text"  class="form-control" placeholder="SQL"> </td>
												    <td><select name="TombamentoRestricao1" id="TombamentoRestricao1" class="select2 form-control"  >
												                  <option>...</option>
												                   <option>Sim</option>
												                   <option>Não</option>
												                      </select> </td>
												    <td><select name="AreaManancialRestricao1" id="AreaManancialRestricao1" class="select2 form-control"  >
												                  <option>...</option>
												                   <option>Sim</option>
												                   <option>Não</option>
												                      </select> </td>
												    <td><select name="AreaContaminadaRestricao1" id="AreaContaminadaRestricao1" class="select2 form-control"  >
												                  <option>...</option>
												                   <option>Sim</option>
												                   <option>Não</option>
												                      </select> </td>
												    <td><select name="PatrimonioAmbientalRestricao1" id="PatrimonioAmbientalRestricao1" class="select2 form-control"  >
												                  <option>...</option>
												                   <option>Sim</option>
												                   <option>Não</option>
												                      </select> </td>
												    <td><select name="ProtecaoAmbientalRestricao1" id="ProtecaoAmbientalRestricao1" class="select2 form-control"  >
												                  <option>...</option>
												                   <option>Sim</option>
												                   <option>Não</option>
												                      </select> </td>
												    <td><select name="PedenciaFinanceiraRestricao1" id="PedenciaFinanceiraRestricao1" class="select2 form-control"  >
												                  <option>...</option>
												                   <option>Sim</option>
												                   <option>Não</option>
												                      </select> </td>
												  </tr>
												</div>  
												  
                         <div class="row form-row">                                        
                          <tr>
                            <td><input name="SqlRetricao2" id="SqlRetricao2" type="text"  class="form-control" placeholder="SQL"> </td>
                            <td><select name="TombamentoRestricao2" id="TombamentoRestricao2" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaManancialRestricao2" id="AreaManancialRestricao2" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaContaminadaRestricao2" id="AreaContaminadaRestricao2" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PatrimonioAmbientalRestricao2" id="PatrimonioAmbientalRestricao2" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="ProtecaoAmbientalRestricao2" id="ProtecaoAmbientalRestricao2" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PedenciaFinanceiraRestricao2" id="PedenciaFinanceiraRestricao2" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                          </tr>
                        </div> 
												 
												 
                         <div class="row form-row">                                        
                          <tr>
                            <td><input name="SqlRetricao3" id="SqlRetricao3" type="text"  class="form-control" placeholder="SQL"> </td>
                            <td><select name="TombamentoRestricao3" id="TombamentoRestricao3" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaManancialRestricao3" id="AreaManancialRestricao3" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaContaminadaRestricao3" id="AreaContaminadaRestricao3" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PatrimonioAmbientalRestricao3" id="PatrimonioAmbientalRestricao3" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="ProtecaoAmbientalRestricao3" id="ProtecaoAmbientalRestricao3" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PedenciaFinanceiraRestricao3" id="PedenciaFinanceiraRestricao3" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                          </tr>
                        </div> 
												 
												 
                         <div class="row form-row">                                        
                          <tr>
                            <td><input name="SqlRetricao4" id="SqlRetricao4" type="text"  class="form-control" placeholder="SQL"> </td>
                            <td><select name="TombamentoRestricao4" id="TombamentoRestricao4" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaManancialRestricao4" id="AreaManancialRestricao4" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaContaminadaRestricao4" id="AreaContaminadaRestricao4" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PatrimonioAmbientalRestricao4" id="PatrimonioAmbientalRestricao4" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="ProtecaoAmbientalRestricao4" id="ProtecaoAmbientalRestricao4" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PedenciaFinanceiraRestricao4" id="PedenciaFinanceiraRestricao4" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                          </tr>
                        </div> 
												 
												 
                         <div class="row form-row">                                        
                          <tr>
                            <td><input name="SqlRetricao5" id="SqlRetricao5" type="text"  class="form-control" placeholder="SQL"> </td>
                            <td><select name="TombamentoRestricao5" id="TombamentoRestricao5" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaManancialRestricao5" id="AreaManancialRestricao5" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaContaminadaRestricao5" id="AreaContaminadaRestricao5" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PatrimonioAmbientalRestricao5" id="PatrimonioAmbientalRestricao5" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="ProtecaoAmbientalRestricao5" id="ProtecaoAmbientalRestricao5" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PedenciaFinanceiraRestricao5" id="PedenciaFinanceiraRestricao5" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                          </tr>
                        </div> 
												 
												 
                         <div class="row form-row">                                        
                          <tr>
                            <td><input name="SqlRetricao6" id="SqlRetricao6" type="text"  class="form-control" placeholder="SQL"> </td>
                            <td><select name="TombamentoRestricao6" id="TombamentoRestricao6" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaManancialRestricao6" id="AreaManancialRestricao6" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaContaminadaRestricao6" id="AreaContaminadaRestricao6" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PatrimonioAmbientalRestricao6" id="PatrimonioAmbientalRestricao6" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="ProtecaoAmbientalRestricao6" id="ProtecaoAmbientalRestricao6" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PedenciaFinanceiraRestricao6" id="PedenciaFinanceiraRestricao6" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                          </tr>
                        </div> 
												 
												 
                         <div class="row form-row">                                        
                          <tr>
                            <td><input name="SqlRetricao7" id="SqlRetricao7" type="text"  class="form-control" placeholder="SQL"> </td>
                            <td><select name="TombamentoRestricao7" id="TombamentoRestricao7" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaManancialRestricao7" id="AreaManancialRestricao7" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaContaminadaRestricao7" id="AreaContaminadaRestricao7" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PatrimonioAmbientalRestricao7" id="PatrimonioAmbientalRestricao7" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="ProtecaoAmbientalRestricao7" id="ProtecaoAmbientalRestricao7" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PedenciaFinanceiraRestricao7" id="PedenciaFinanceiraRestricao7" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                          </tr>
                        </div> 
												 
												 
                         <div class="row form-row">                                        
                          <tr>
                            <td><input name="SqlRetricao8" id="SqlRetricao8" type="text"  class="form-control" placeholder="SQL"> </td>
                            <td><select name="TombamentoRestricao8" id="TombamentoRestricao8" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaManancialRestricao8" id="AreaManancialRestricao8" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaContaminadaRestricao8" id="AreaContaminadaRestricao8" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PatrimonioAmbientalRestricao8" id="PatrimonioAmbientalRestricao8" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="ProtecaoAmbientalRestricao8" id="ProtecaoAmbientalRestricao8" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PedenciaFinanceiraRestricao8" id="PedenciaFinanceiraRestricao8" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                          </tr>
                        </div> 
												 
												 
                         <div class="row form-row">                                        
                          <tr>
                            <td><input name="SqlRetricao9" id="SqlRetricao9" type="text"  class="form-control" placeholder="SQL"> </td>
                            <td><select name="TombamentoRestricao9" id="TombamentoRestricao9" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaManancialRestricao9" id="AreaManancialRestricao9" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaContaminadaRestricao9" id="AreaContaminadaRestricao9" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PatrimonioAmbientalRestricao9" id="PatrimonioAmbientalRestricao9" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="ProtecaoAmbientalRestricao9" id="ProtecaoAmbientalRestricao9" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PedenciaFinanceiraRestricao9" id="PedenciaFinanceiraRestricao9" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                          </tr>
                        </div> 
												 
												 
                         <div class="row form-row">                                        
                          <tr>
                            <td><input name="SqlRetricao10" id="SqlRetricao10" type="text"  class="form-control" placeholder="SQL"> </td>
                            <td><select name="TombamentoRestricao10" id="TombamentoRestricao10" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaManancialRestricao10" id="AreaManancialRestricao10" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="AreaContaminadaRestricao10" id="AreaContaminadaRestricao10" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PatrimonioAmbientalRestricao10" id="PatrimonioAmbientalRestricao10" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="ProtecaoAmbientalRestricao10" id="ProtecaoAmbientalRestricao10" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                            <td><select name="PedenciaFinanceiraRestricao10" id="PedenciaFinanceiraRestricao10" class="select2 form-control"  >
                                          <option>...</option>
                                           <option>Sim</option>
                                           <option>Não</option>
                                              </select> </td>
                          </tr>
                        </div> 
												 
				
 
 
						 
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
                      <input name="ExerciciosIptu" id="ExerciciosIptu" type="text"  class="form-control" placeholder="Exercicio(s)">
                      </div>
                      <div class="col-md-3">
                      <input name="ValorTolalIptu" id="ValorTolalIptu"  onkeypress="verificaNumerosCalculo();" type="text"  class="form-control" placeholder="Valor Total">
                      </div>
                      
                      	</div>
                        
                        <div class="row form-row">
                      <div class="col-md-1">
                     <h4>Multas</h4>
                      </div>
                      <div class="col-md-6">
                      <input name="ExerciciosMultas" id="ExerciciosMultas" type="text"  class="form-control" placeholder="Exercicio(s)">
                      </div>
                      <div class="col-md-3">
                      <input name="ValorTolalMultas" id="ValorTolalMultas" onkeypress="verificaNumerosCalculo();" type="text"  class="form-control" placeholder="Valor Total">
                      </div>
                      
                      	</div>
                        
                        <div class="row form-row">
                      <div class="col-md-1">
                      <h4>TOTAL</h4>
                      </div>
                      <div class="col-md-3">
                      <input type="text" name="TotalExercicios" id="TotalExercicios" placeholder="R$ " class="form-control" readonly="true">
                      
                      </div>
                      <button class="btn btn-primary btn-cons" type="button" onclick="somarValoresDividas('+')">Calcular </button>
                      
                      <div class="row form-row">
                        <div class="col-md-12">
                        <textarea name="ComentariosDividas" id="ComentariosDividas" rows="5" class="col-lg-12">Comentários</textarea>
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
            <div class='col-md-3'>
                     <input name='AnoProcessoProcesso' id='AnoProcessoProcesso' maxlength='4' type='text'  class='form-control' placeholder='Ano/Processo'>
                       </div>
                       <div class='col-md-3'>
                     <input name='InteressadoProcesso' id='InteressadoProcesso' type='text'  class='form-control' placeholder='Interessado'>
                                    </div>
                                    <div class='col-md-3'>
                                     <input name='AssuntoProcesso' id='AssuntoProcesso' type='text'  class='form-control' placeholder='Assunto'>
                      </div>
                        <div class='col-md-3'>
                        <input  name='SituacaoProcesso' id='SituacaoProcesso' type='text'  class='form-control' placeholder='Situação'>
                       </div>               

        </div>
        


 					<!--inicio do clone de OUTROS LOTES -->
                           <div class="row form-row" id="divProcessosOrigem">
                           </div>

                           <div class="row form-row" id="divProcessosDestino">
                           </div>

                    <!-- Fim do clone de OUTROS LOTES -->
                    
                    
<button type="button" class="btn btn-default btn-cons" onclick="criarCampoProcessos();">Adicionar Linha</button>

<div class="row form-row">
                        <div class="col-md-12">
                        <textarea name="ComentariosProcessos" id="ComentariosProcessos" rows="5" class="col-lg-12">Comentários</textarea>
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
	                        	<div class="col-md-3">
	                               <input name="TituloDadosAdicionais" id="TituloDadosAdicionais" type="text"  class="form-control" placeholder="Titulo">	
	                            </div>
	                            <div class="col-md-9">
	                               <input name="ComentariosDadosAdicionais" id="ComentariosDadosAdicionais" type="text"  class="form-control" placeholder="Comentário">	
	                        	</div>
                            </div>
                            
                                                      
                           <!-- INICIO DO CLONE ADICIONAIS -->
                           
                           <div class="row form-row" id="divAdicionaisOrigem">	                        	
                           </div>
                           <div class="row form-row" id="divAdicionaisDestino">	                        	
                           </div>
                           
                           <!-- FIM DO CLONE ADICIONAIS -->
                           
                         <div class="row form-row">
                         	 	<div class="col-md-10">                             
                          			<button class="btn btn-default btn-cons" type="button" onclick=" criarCampoAdicionais();">Adicionar Linha </button>
                          		</div>
                           
                            	<div class="col-md-2">                             
                          			<button class="btn btn-primary btn-cons" type="button" onclick="validaImovel(); somarValoresDividas('+'); document.forms[0].submit()">Finalizar </button>
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