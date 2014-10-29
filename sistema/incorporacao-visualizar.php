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

<link href="assets/plugins/jquery-polymaps/style.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-metrojs/MetroJs.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/shape-hover/css/demo.css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/shape-hover/css/component.css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.theme.css" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" href="assets/plugins/jquery-ricksaw-chart/css/rickshaw.css" type="text/css" media="screen" >
<link href="assets/plugins/jquery-isotope/isotope.css" rel="stylesheet" type="text/css"/>
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
<link href="assets/css/magic_space.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/tiles_responsive.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->

<!-- Inclui o arquivos para validação de campos-->
<script src="includes/Cep/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="includes/Cep/jquery.maskedinput-1.3.min.js" type="text/javascript"></script>
<script src="includes/Cep/BuscaCep.js" type="text/javascript"></script>
<script type="text/javascript" src="includes/js/ValidaCampos.js"></script>
<script type="text/javascript" src="includes/js/CriarComponentes.js"></script>
<!--SCRIPT do mapa-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkyS2gK1LBa3neoDq2iHHvGY3_jD1fi-4&sensor=false"></script>
    
 <script>

 function enviarFormPdf(){
  formPdf.submit();
 }

 
</script>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="" onload="cepIncorporacaoVisualizar(); escondeIncorporacaoVisualizar();">
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
   
  <!-- END SIDEBAR -->   </div>

  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <form id="formIncorporacaoVisualizar" name="formIncorporacaoVisualizar" method="post" action="incorporacao-editar">

       
    <div class="clearfix"></div>
    <div class="content">  
		<div class="page-title">	
			 <h3>Visualizar - <span class="semi-bold">Área</span></h3>		
		</div>

            <!--INICIO DO CÓDIGO DE BUSCA NO BANCO-->
        <?php 
        $IdIncorporacao; 
         if (isset($_POST['IdIncorporacaoAux'])){
            $IdIncorporacao = $_POST['IdIncorporacaoAux'];
         }elseif (isset($_GET['IdIncorporacaoAux'])){
            $IdIncorporacao = $_GET['IdIncorporacaoAux'];
         }
         else{
           /****************************************************************************************************************************/
          /*     FAz uma busca no banco somente para preencher pagina caso não tenha sido selecionada uma empresa na pagna de listagem */
          /****************************************************************************************************************************/
         
            $buscaIncorporacao = new Conexao();
            $buscaIncorporacao->conectar();
            $buscaIncorporacao->selecionarDB(); 

            $buscaIncorporacao->set("sql","SELECT * FROM CadastraIncorporacao ORDER BY IdIncorporacao LIMIT 1 ");

            $retornoIncorporacao = mysql_fetch_object($buscaIncorporacao->executarQuery());
            $IdIncorporacao = $retornoIncorporacao->IdIncorporacao;
                
         }

         
          /********************************************************************************************/
          /*      Variáveis para inserção no banco de dados, insere o Responsável e a empresa         */
          /********************************************************************************************/
         
            $buscaIncorporacao = new Conexao();
            $buscaIncorporacao->conectar();
            $buscaIncorporacao->selecionarDB(); 

            $buscaIncorporacao->set("sql","SELECT  * FROM CadastraIncorporacao
                                                     WHERE IdIncorporacao = '$IdIncorporacao'");

            $retornoIncorporacao = mysql_fetch_object($buscaIncorporacao->executarQuery()); ?>


        		
		<div class="tiles white added-margin   m-b-20">
          <div class="tiles-body">
            <h5>FILTRO</h5>
                 <div class="checkbox check-default">
                      <input id="checkLocal" type="checkbox" value="2" checked="checked"> 
                      <label for="checkLocal">Local</label>

                      <input id="checkProjeto" type="checkbox" value="2" checked="checked">
                      <label for="checkProjeto">Projeto</label>

                      <input id="checkMetragem" type="checkbox" value="2" checked="checked">
                      <label for="checkMetragem">Metragem</label>
                      
                      <input id="checkValorVenda" type="checkbox" value="2" checked="checked">
                      <label for="checkValorVenda">Valor Venda m²</label>

                      <input id="checkZonemaneto" type="checkbox" value="2" checked="checked">
                      <label for="checkZonemaneto">Zonemaneto</label>

                      <input id="checkCaBasico" type="checkbox" value="2" checked="checked">
                      <label for="checkCaBasico">C.A. Básicos</label>

                      <input id="checkCaMaximo" type="checkbox" value="2" checked="checked">
                      <label for="checkCaMaximo">C.A. Máximo</label>

                      <input id="checkAtividade" type="checkbox" value="2" checked="checked">
                      <label for="checkAtividade">Atividade</label>

                      <input id="checkRegiao" type="checkbox" value="2" checked="checked">
                      <label for="checkRegiao">Região</label>

                      <input id="checkMapa" type="checkbox" value="2" checked="checked">
                      <label for="checkMapa">Google Maps</label>
                                         
                      <input id="checkImagem1" type="checkbox" value="2" checked="checked">
                      <label for="checkImagem1">Titulo imagem 1</label>
                      
                      <input id="checkImagem2" type="checkbox" value="2" checked="checked">
                      <label for="checkImagem2">Titulo imagem 2</label>
                      
                      <input id="checkImagem3" type="checkbox" value="2" checked="checked">
                      <label for="checkImagem3">Titulo imagem 3</label>
                      
                      <input id="checkImagem4" type="checkbox" value="2" checked="checked">
                      <label for="checkImagem4">Titulo imagem 4</label>
                      
                      <input id="checkImagem5" type="checkbox" value="2" checked="checked">
                      <label for="checkImagem5">Titulo imagem 5</label>
                      
                      <input id="checkImagem6" type="checkbox" value="2" checked="checked">
                      <label for="checkImagem6">Titulo imagem 6</label>
                       
                      <input id="checkDadosAdicionais" type="checkbox" value="2" checked="checked">
                      <label for="checkDadosAdicionais">Dados Adicionais</label>                      
                       
                       <input id="checkDocumentacao" type="checkbox" value="2" checked="checked">
                      <label for="checkDocumentacao">Documentação</label>

                      <input id="checkHistorico" type="checkbox" value="2" checked="checked">
                       <label for="checkHistorico">Histórico</label>

                  </div>
               <br>
               <button type="button" class="btn btn-white btn-cons" onclick="escondeIncorporacaoVisualizar();">Filtrar</button>

                <?php
                   $NomeArquivo = "Pdf-Incorporação.pdf-".date('d-m-Y').".pdf";
                   if(file_exists("impressao/".$NomeArquivo)){ ?>

                   <a href="impressao/salvar.php?arquivo=<?php echo $NomeArquivo; ?>"><button type='button' class='btn btn-white btn-cons'>Baixar Pdf</button></a>

                 
                 <?php  }else{ ?> 

                 <button type="button" class="btn btn-white btn-cons" onclick="enviarFormPdf();">Exportar</button>  
                <?php  } ?>

            
            <button type="submit" class="btn btn-white btn-cons" onclick="selecionaIncorporacao(<?php echo "$IdIncorporacao"; ?>);">Editar</button>            
          </div>
        </div>
        <!-- BEGIN FICHA -->
        <!-- BLOCO 1 -->
       
         <input type="hidden" id="IdIncorporacaoAux" name="IdIncorporacaoAux" value="<?php echo $IdIncorporacao; ?>">


      <!-- BLOCO 2 -->
        <div  class="row" >
        <!-- TITULO -->
        <div class="tiles green added-margin   m-b-20">
          <div class="tiles-body" >
            <h4 class="text-white no-margin semi-bold"><?php echo "$retornoIncorporacao->SiglaIncorporacao"; ?> - <?php echo "$retornoIncorporacao->BairroIncorporacao"; ?></h4>
            <br>
          </div>
        
        <!-- TITULO -->
        
        
        
        
        
        <div class=" tiles white" >
          
			<div class="p-t-35 p-l-45" >

            <div id="DivLocal">
              <div class="col-md-8  no-padding">
                <h5 class="no-margin">Local</h5>
                <h4><span class="semi-bold"><?php echo $retornoIncorporacao->LocalIncorporacao.", ".$retornoIncorporacao->NumeroIncorporacao.", ".$retornoIncorporacao->CidadeIncorporacao." - ".$retornoIncorporacao->EstadoIncorporacao; ?></span></h4>
              </div>
            </div>

            <div id="DivProjeto">
               <div class="col-md-4  no-padding">
                <h5 class="no-margin">Projeto</h5>
                <h4><span class="semi-bold"><?php echo "$retornoIncorporacao->situacao"; ?></span></h4>
              </div>
            </div>
            
            
            </div>
            
            <div class="p-t-35 p-l-45">

             <div id="DivMetragem"> 
              <div class="col-md-4  no-padding" >
                <h5 class="no-margin">Metragem</h5>
                <h4><span class="semi-bold"><?php echo "$retornoIncorporacao->MetragemIncorporacao"; ?>m²</span></h4>
              </div>
            </div>

            <div id="DivValorVenda">
              <div class="col-md-8  no-padding" >
                <h5 class="no-margin">Valor Venda m²</h5>
                <h4><span class="semi-bold">R$ <?php echo "$retornoIncorporacao->ValorVendaIncorporacao"; ?></span></h4>
              </div>
              </div>
            </div>
            
          <div class="p-t-35 p-l-45">
            <div id="DivZoneamento">   
              <div class="col-md-4  no-padding" >
                <h5 class="no-margin">Zonemaneto</h5>
                <h4><span class="semi-bold"><?php echo "$retornoIncorporacao->ZonemanetoIncorporacao"; ?></span></h4>
              </div>
            </div>
             

          <div id="DivCaBasico"> 
            <div class="col-md-4  no-padding" >
              <h5 class="no-margin">C.A. Básico</h5>
              <h4><span class="semi-bold"><?php echo "$retornoIncorporacao->CaBasicoIncorporacao"; ?></span></h4>
            </div>
          </div>


          <div id="DivCaMaximo">
            <div class="col-md-4  no-padding" >
              <h5 class="no-margin">C.A. Máximo</h5>
              <h4><span class="semi-bold"><?php echo "$retornoIncorporacao->CaMaximoIncorporacao"; ?></span></h4>
            </div>
            </div>
          </div>  
            
            <div class="p-t-35 p-l-45">

          <div id="DivAtividade">  
            <div class="col-md-8  no-padding" >
              <h5 class="no-margin">Atividade</h5>
              <h4><span class="semi-bold"><?php echo "$retornoIncorporacao->AtividadeIncorporacao"; ?></span></h4>
            </div>
           </div>


           <div id="DivRegiao">
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Região</h5>
              <h4><span class="semi-bold"><?php echo "$retornoIncorporacao->BairroIncorporacao"; ?></span></h4>
            </div>
           </div> 
            
            </div>
            
            <!--Auxiliares para o mapa-->
            <!-- Auxiliares para carregar endereço em mapa -->
             <input type="hidden" name="EnderecoAux" id="EnderecoAux" value="<?php echo "$retornoIncorporacao->CepIncorporacao"; ?>" >
             <input type="hidden" name="EnderecoAux2" id="EnderecoAux2" >
             <input type="hidden" name="EnderecoAuxNumero" id="EnderecoAuxNumero" value="<?php echo "$retornoIncorporacao->NumeroIncorporacao"; ?>"  >
            
            <div id="DivMapa">
               <!--INICIO DO MAPA -->
                  <div id="map-canvas" style="width: 100%; height:300px"></div>           
               <!--FIM DO MAPA-->
            </div>
           
            
  			<div class="clearfix"></div>
              
           </div>
         </div>
       </div>
        <!-- BLOCO 2 -->
        




        <!--VER FOTOS AQUI-->
        
         <!-- BLOCO 2 -->
        <div  class="row" id="DivImagem1">
          <!-- TITULO -->
          <?php if ($retornoIncorporacao->Imagem1 != null) { ?>

            <div class="tiles green added-margin   m-b-20">
              <div class="tiles-body">
                <h4 class="text-white no-margin semi-bold"><?php echo "$retornoIncorporacao->TituloFoto1"; ?></h4>
                <br>
             </div>        
        <!-- TITULO -->   
            <div class=" tiles white" >
            <div class="col-md-12  no-padding">

            <?php if ($retornoIncorporacao->Imagem1 != null) {
                echo "<img src='includes/php/fotos/incorporacao/$retornoIncorporacao->Imagem1' width='100%' height='550'>";
              }else{
                echo "";
                }  ?>              

            </div>  
			        <div class="clearfix"></div>
            </div>
          </div>
          <?php } ?>
       </div>
        <!-- BLOCO 2 -->
        



         <!-- BLOCO 2 -->
        <div  class="row" id="DivImagem2">
          <!-- TITULO -->
  <?php if ($retornoIncorporacao->Imagem2 != null) { ?>
            <div class="tiles green added-margin   m-b-20">
              <div class="tiles-body">
                <h4 class="text-white no-margin semi-bold"><?php echo "$retornoIncorporacao->TituloFoto2"; ?></h4>
                <br>
              </div>        
                <!-- TITULO -->
                <div class=" tiles white" >
                    <div class="col-md-12  no-padding">

                      <?php if ($retornoIncorporacao->Imagem2 != null) {
                          echo "<img src='includes/php/fotos/incorporacao/$retornoIncorporacao->Imagem2' width='100%' height='550'>";
                        }else{
                          echo "";
                          }  ?>          
                    </div>
          			   <div class="clearfix"></div>
               </div>
           </div>
           <?php } ?>
       </div>
        <!-- BLOCO 2 -->
        



         <!-- BLOCO 2 -->
        <div  class="row" id="DivImagem3">
        <!-- TITULO -->
        <?php if ($retornoIncorporacao->Imagem3 != null) { ?>
          <div class="tiles green added-margin   m-b-20">
            <div class="tiles-body">
              <h4 class="text-white no-margin semi-bold"><?php echo "$retornoIncorporacao->TituloFoto3"; ?></h4>
              <br>
            </div>        
             <!-- TITULO -->        
            <div class=" tiles white" >
                  <div class="col-md-12  no-padding">           
                    <?php if ($retornoIncorporacao->Imagem3 != null) {
                        echo "<img src='includes/php/fotos/incorporacao/$retornoIncorporacao->Imagem3' width='100%' height='550'>";
                      }else{
                        echo "";
                        }  ?>           
                  </div>
			         <div class="clearfix"></div>        
            </div>
          </div>
          <?php } ?>
       </div>
        <!-- BLOCO 2 -->
        



         <!-- BLOCO 2 -->
        <div  class="row" id="DivImagem4">
          <!-- TITULO -->
          <?php if ($retornoIncorporacao->Imagem4 != null) { ?>
            <div class="tiles green added-margin   m-b-20">
                <div class="tiles-body">
                  <h4 class="text-white no-margin semi-bold"><?php echo "$retornoIncorporacao->TituloFoto4"; ?></h4>
                  <br>
                </div>        
              <!-- TITULO -->       
             <div class=" tiles white" >
                  <div class="col-md-12  no-padding">
                    <?php if ($retornoIncorporacao->Imagem4 != null) {
                        echo "<img src='includes/php/fotos/incorporacao/$retornoIncorporacao->Imagem4' width='100%' height='550'>";
                      }else{
                        echo "";
                        }  ?>             
                  </div>
      			   <div class="clearfix"></div>
            </div>
          </div>
          <?php } ?>
       </div>
        <!-- BLOCO 2 -->
        


        
         <!-- BLOCO 2 -->
        <div  class="row" id="DivImagem5">
          <!-- TITULO -->
          <?php if ($retornoIncorporacao->Imagem5 != null) { ?>
            <div class="tiles green added-margin   m-b-20">
                <div class="tiles-body">
                  <h4 class="text-white no-margin semi-bold"><?php echo "$retornoIncorporacao->TituloFoto5"; ?></h4>
                  <br>
                </div>        
            <!-- TITULO -->
            <div class=" tiles white" >
                    <div class="col-md-12  no-padding">      
                    <?php if ($retornoIncorporacao->Imagem5 != null) {
                        echo "<img src='includes/php/fotos/incorporacao/$retornoIncorporacao->Imagem5' width='100%' height='550'>";
                      }else{
                        echo "";
                        }  ?>          
                   </div>
			           <div class="clearfix"></div>
              </div>
           </div>
           <?php } ?>
       </div>
        <!-- BLOCO 2 -->
        


        
         <!-- BLOCO 2 -->
        <div  class="row" id="DivImagem6">
          <!-- TITULO -->
          <?php if ($retornoIncorporacao->Imagem6 != null) { ?>
             <div class="tiles green added-margin   m-b-20">
                <div class="tiles-body">
                  <h4 class="text-white no-margin semi-bold"><?php echo "$retornoIncorporacao->TituloFoto6"; ?></h4>
                  <br>
                </div>        
              <!-- TITULO -->
              <div class=" tiles white" >
                  <div class="col-md-12  no-padding">      
                    <?php if ($retornoIncorporacao->Imagem6 != null) {
                        echo "<img src='includes/php/fotos/incorporacao/$retornoIncorporacao->Imagem6' width='100%' height='550'>";
                      }else{
                        echo "";
                        }  ?>            
                  </div>
      			     <div class="clearfix"></div>
              </div>
           </div>
           <?php } ?>
       </div>
        <!-- BLOCO 2 -->
        
        

        
         <!-- BLOCO 2 -->
        <div  class="row" id="DivDadosAdicionais">
        <!-- TITULO -->
        <div class="tiles green added-margin   m-b-20">
          <div class="tiles-body">
            <h4 class="text-white no-margin semi-bold">DADOS ADICIONAIS</h4>
            <br>
          </div>
        
        <!-- TITULO -->
        
        
        
        
        
        <div class=" tiles white" >

            <div class="p-t-35 p-l-45">
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Nome Proprietário</h5>
              <h4><span class="semi-bold"><?php echo "$retornoIncorporacao->NomeProprietarioIncorporacao"; ?></span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Tel. Proprietário</h5>
              <h4><span class="semi-bold"><?php echo "$retornoIncorporacao->TelProprietarioIncorporacao"; ?></span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">E-mail Proprietário</h5>
              <h4><span class="semi-bold"><?php echo "$retornoIncorporacao->EmailProprietarioIncorporacao"; ?></span></h4>
            </div>
            </div>
            
            <div class="p-t-35 p-l-45">
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Nome Corretor</h5>
              <h4><span class="semi-bold"><?php echo "$retornoIncorporacao->NomeCorreteorIncorpotacao"; ?></span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Tel. Corretor</h5>
              <h4><span class="semi-bold"><?php echo "$retornoIncorporacao->TelefoneCorretorIncorporacao"; ?></span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">E-mail Corretor</h5>
              <h4><span class="semi-bold"><?php echo "$retornoIncorporacao->EmailCorretorIncorporacao"; ?></span></h4>
            </div>
            </div>
            
            
            
            <div class="p-t-35 p-l-45" id="DivDocumentacao">
            <div class="col-md-12  no-padding">
            <br>
              <h5 class="no-margin"><strong>Documentação</strong></h5>
              <h5>
              <p><?php echo "$retornoIncorporacao->DocumentacaoIncorporacao"; ?></p>
              </h5>
            </div>
            
            </div>
            
                  
        			<div class="clearfix"></div>
          
           </div>
         </div>
       </div>
        <!-- BLOCO 2 -->
        
        

        <!-- BLOCO 2 -->
        <div  class="row" id="DivHistorico">
        <!-- TITULO -->
        <div class="tiles green added-margin   m-b-20">
          <div class="tiles-body">
            <h4 class="text-white no-margin semi-bold">HISTÓRICO</h4>
            <br>
          </div>
        
        <!-- TITULO -->
            <div class=" tiles white" >
		
                        <div class="grid simple ">
                            
                            <div class="grid-body no-border">
                                 
                                    <table class="table no-more-tables">
                                        <thead>
                                            <tr>                                                
                                                <th style="width:10%">DATA</th>
                                                <th style="width:90%">DESCRIÇÃO</th>                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                             /********************************************************************************************/
                                            /*      Variáveis para inserção no banco de dados, busca o hitorico da Incorporação         */
                                            /********************************************************************************************/
                                           
                                              $buscaHistoricoIncorporacao = new Conexao();
                                              $buscaHistoricoIncorporacao->conectar();
                                              $buscaHistoricoIncorporacao->selecionarDB(); 

                                              $buscaHistoricoIncorporacao->set("sql","SELECT  * FROM HistoricoIncorporacao
                                                                                       WHERE IdIncorporacao = '$IdIncorporacao'");

                                               $query3 = $buscaHistoricoIncorporacao->executarQuery();
                                               while($retornoHistoricoIncorporacao = mysql_fetch_object($query3)) { ?>
                                            
                                                <tr>  
                                                  <td class="v-align-middle"><?php echo "$retornoHistoricoIncorporacao->DataHistoricoIncorporacao"; ?></td>
                                                  <td class="v-align-middle"><?php echo "$retornoHistoricoIncorporacao->DescricaoHistoricoIncorporacao"; ?></td>
                                                </tr>

                                              <?php } ?>

                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>                
          </div>            
			<div class="clearfix"></div>
       
        <!-- BLOCO 2 -->
        <!--ENDFICHA -->


   
  </div>
  </form>
 </div>

  <!--Insere o conteudo do buffer na variável  -->
  <form id='formPdf' name='formPdf' method='POST' action='impressao/incorporacao.php'>
  <!--COMEÇO DO VALOR DO CONTENT-->
   <input id='IdIncorporacaoAux' name='IdIncorporacaoAux' value="<?php echo $IdIncorporacao;?>">
   <!--FIM DO VALOR DO CONTENT-->

       <!--checks for send-->
           
      <input type="hidden" name="ckLocal" id="ckLocal" value="1">
      <input type="hidden" name="ckProjeto" id="ckProjeto" value="1">
      <input type="hidden" name="ckMetragem" id="ckMetragem" value="1">
      <input type="hidden" name="ckValorVenda" id="ckValorVenda" value="1">
      <input type="hidden" name="ckZonemaneto" id="ckZonemaneto" value="1">
      <input type="hidden" name="ckCaBasico" id="ckCaBasico" value="1">
      <input type="hidden" name="ckCaMaximo" id="ckCaMaximo" value="1">
      <input type="hidden" name="ckAtividade" id="ckAtividade" value="1">
      <input type="hidden" name="ckRegiao" id="ckRegiao" value="1">
      <input type="hidden" name="ckMapa" id="ckMapa" value="1">
      <input type="hidden" name="ckImagem1" id="ckImagem1" value="1">
      <input type="hidden" name="ckImagem2" id="ckImagem2" value="1">
      <input type="hidden" name="ckImagem3" id="ckImagem3" value="1">
      <input type="hidden" name="ckImagem4" id="ckImagem4" value="1">
      <input type="hidden" name="ckImagem5" id="ckImagem5" value="1">
      <input type="hidden" name="ckImagem6" id="ckImagem6" value="1">
      <input type="hidden" name="ckDadosAdicionais" id="ckDadosAdicionais" value="1">
      <input type="hidden" name="ckDocumentacao" id="ckDocumentacao" value="1">
      <input type="hidden" name="ckHistorico" id="ckHistorico" value="1">


     <!---->
  
  </form>
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
<script src="assets/plugins/jquery-lazyload/jquery.lazyload.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->

<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ricksaw-chart/js/raphael-min.js"></script>
<script src="assets/plugins/jquery-ricksaw-chart/js/d3.v2.js"></script>
<script src="assets/plugins/jquery-ricksaw-chart/js/rickshaw.min.js"></script>
<script src="assets/plugins/jquery-sparkline/jquery-sparkline.js"></script>
<script src="assets/plugins/skycons/skycons.js"></script>
<script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-polymaps/polymaps.min.js" type="text/javascript"></script>
<script src="assets/plugins/shape-hover/js/snap.svg-min.js"></script>
<script src="assets/plugins/jquery-flot/jquery.flot.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript" ></script>
<script src="assets/plugins/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-jvectormap/js/jquery-jvectormap-us-lcc-en.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script>
<script src="assets/js/demo.js" type="text/javascript"></script>
<script src="assets/js/widgets.js" type="text/javascript"></script>
<script type="text/javascript">
        $(document).ready(function () {
            $(".live-tile,.flip-list").liveTile();
        });		

</script>
<!-- END CORE TEMPLATE JS -->
</body>
</html>