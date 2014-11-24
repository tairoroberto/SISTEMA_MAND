<?php 
include('seguranca.php'); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página  
include('includes/php/conexao/Conexao.class.php');
include('permissoes.php'); //inclui o arquivo que gera o SIDEBAR com as devidas permições
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='content-type' content='text/html;charset=UTF-8' />
<meta charset='utf-8' />
<title>Mand Gestão de Projetos</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
<meta content='' name='description' />
<meta content='' name='author' />

<link href='assets/plugins/jquery-polymaps/style.css' rel='stylesheet' type='text/css' media='screen'/>
<link href='assets/plugins/jquery-metrojs/MetroJs.css' rel='stylesheet' type='text/css' />
<link rel='stylesheet' type='text/css' href='assets/plugins/shape-hover/css/demo.css' />
<link rel='stylesheet' type='text/css' href='assets/plugins/shape-hover/css/component.css' />
<link rel='stylesheet' type='text/css' href='assets/plugins/owl-carousel/owl.carousel.css' />
<link rel='stylesheet' type='text/css' href='assets/plugins/owl-carousel/owl.theme.css' />
<link href='assets/plugins/pace/pace-theme-flash.css' rel='stylesheet' type='text/css' media='screen'/>
<link href='assets/plugins/jquery-slider/css/jquery.sidr.light.css' rel='stylesheet' type='text/css' media='screen'/>
<link rel='stylesheet' href='assets/plugins/jquery-ricksaw-chart/css/rickshaw.css' type='text/css' media='screen' >
<link href='assets/plugins/jquery-isotope/isotope.css' rel='stylesheet' type='text/css'/>
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href='assets/plugins/boostrapv3/css/bootstrap.min.css' rel='stylesheet' type='text/css'/>
<link href='assets/plugins/boostrapv3/css/bootstrap-theme.min.css' rel='stylesheet' type='text/css'/>
<link href='assets/plugins/font-awesome/css/font-awesome.css' rel='stylesheet' type='text/css'/>
<link href='assets/css/animate.min.css' rel='stylesheet' type='text/css'/>
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href='assets/css/style.css' rel='stylesheet' type='text/css'/>
<link href='assets/css/responsive.css' rel='stylesheet' type='text/css'/>
<link href='assets/css/custom-icon-set.css' rel='stylesheet' type='text/css'/>
<link href='assets/css/magic_space.css' rel='stylesheet' type='text/css'/>
<link href='assets/css/tiles_responsive.css' rel='stylesheet' type='text/css'/>
<!-- END CSS TEMPLATE -->


<!-- Inclui o arquivos para validação de campos-->
<script src='assets/plugins/jquery-1.8.3.min.js' type='text/javascript'></script>
<script src='includes/Cep/jquery.maskedinput-1.3.min.js' type='text/javascript'></script>
<script src='includes/Cep/BuscaCep.js' type='text/javascript'></script>
<script type='text/javascript' src='includes/js/ValidaCampos.js'></script>
<script type='text/javascript' src='includes/js/CriarComponentes.js'></script>
<script type='text/javascript' src='assets/plugins/jsPDF/jspdf.js'></script>
<!--SCRIPT do mapa-->
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAkyS2gK1LBa3neoDq2iHHvGY3_jD1fi-4&sensor=false'></script>
    
<script>
 

 function enviarFormPdf(){
  formPdf.submit();
 }

function encerraImovel(){
  formEncerra.submit();
}

 
</script>


</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<!-- Quando carrega chama a função para carregar o CEP-->
<body class='' onload='cepImovelFichaTecnica();'>
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
  <a href='#' class='scrollup'>Subir</a>
   
  <!-- END SIDEBAR -->   </div>

  <!-- BEGIN PAGE CONTAINER-->  
  <div class='page-content' id="render_me"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <form id='formImovelFichaTecnica' name='formImovelFichaTecnica'>
    
    <div class='clearfix'></div>
    <div class='content'>  
    <div class='page-title'>  
       <h3>Visualizar - <span class='semi-bold'>Ficha Tecnica</span></h3>   

                 <?php $IdImovel; 
             if (isset($_POST['imovelAux'])){
                $IdImovel = $_POST['imovelAux'];
             }elseif (isset($_GET['imovelAux'])) {
               $IdImovel = $_GET['imovelAux'];
             }
       
        /********************************************************************************************/
        /*      Variáveis para inserção no banco de dados, insere o Responsável e a empresa         */
        /********************************************************************************************/
       
          $buscaImovel = new Conexao();
          $buscaImovel->conectar();
          $buscaImovel->selecionarDB(); 

          $buscaImovel->set("sql","SELECT CadastraImovel.*,RazaoSocial, Nome 
                                   FROM CadastroHolding,CadastroRequerente
                                   INNER JOIN CadastraImovel
                                   WHERE CadastroHolding.IdEmpresa = CadastraImovel.IdEmpresa AND
                                         CadastroRequerente.IdRequerente = CadastraImovel.IdRequerente AND
                                         IdImovel = '$IdImovel'");

          $retornoImovel = mysql_fetch_object($buscaImovel->executarQuery());

              ?>

              
    </div>
    <div class="tiles white added-margin   m-b-20">
          <div class="tiles-body">
            <h5>FILTRO</h5>
                <div class='checkbox check-default'>
                      <input id='checkRequerente' type='checkbox' value='1' checked='checked' onchange='escondeImovelFichaTecnica();'>
                      <label for='checkRequerente'>Dados do Requerente</label>                      

                      <input id='checkDadosCadastrais' type='checkbox' value='1' checked='checked' onchange='escondeImovelFichaTecnica();'>
                      <label for='checkDadosCadastrais'>Dados Cadastrais</label>

                      <input id='checkHistorico' type='checkbox' value='1' checked='checked' onchange='escondeImovelFichaTecnica();'>
                      <label for='checkHistorico'>Histórico</label>

                      <input id='checkProcessos' type='checkbox' value='1' checked='checked' onchange='escondeImovelFichaTecnica();'>
                      <label for='checkProcessos'>Processos</label>
                                         
                      <input id='checkOutrosSql' type='checkbox' value='1' checked='checked' onchange='escondeImovelFichaTecnica();'>
                      <label for='checkOutrosSql'>Outros SQL</label>

                      <input id='checkZoneamento' type='checkbox' value='1' checked='checked' onchange='escondeImovelFichaTecnica();'>
                      <label for='checkZoneamento'>Zonemaneto</label>

                      <input id='checkOperacaoUrbana' type='checkbox' value='1' checked='checked' onchange='escondeImovelFichaTecnica();'>
                      <label for='checkOperacaoUrbana'>Operação Urbana</label>

                      <input id='checkRestricoes' type='checkbox' value='1'checked='checked'  onchange='escondeImovelFichaTecnica();'>
                      <label for='checkRestricoes'>Restrições</label>

                      <input id='checkDividas' type='checkbox' value='1' checked='checked' onchange='escondeImovelFichaTecnica();'>
                      <label for='checkDividas'>Dividas</label>

                      <input id='checkQuadraFiscal' type='checkbox' value='1' checked='checked' onchange='escondeImovelFichaTecnica();'>
                      <label for='checkQuadraFiscal'>Quadra fiscal</label>

                      <input id='checkGeomapas' type='checkbox' value='1' checked='checked' onchange='escondeImovelFichaTecnica();'>
                      <label for='checkGeomapas'>Geomapas</label>

                      <input id='checkImagemLocal' type='checkbox' value='1' checked='checked' onchange='escondeImovelFichaTecnica();'>
                      <label for='checkImagemLocal'>Imagem do local</label>
                </div>                 
            <br>

           <?php
           $NomeArquivo = "Pdf-Imovel-".$IdImovel."-".date('d-m-Y').".pdf";
           if(file_exists("impressao/".$NomeArquivo)){ ?>

           <a href="impressao/salvar.php?arquivo=<?php echo $NomeArquivo; ?>"><button type='button' class='btn btn-white btn-cons'>Baixar Pdf</button></a>

         
         <?php  }else{ ?> 

         <button type='button' class='btn btn-white btn-cons' id="btnExportar"
                    onclick="enviarFormPdf();">Exportar</button>
        <?php  } ?>

         

                    <?php if ($_SESSION['usuarioTipo'] == "Administrador") {?> 
                      <button type='button' class='btn btn-white btn-cons' id="btnExportar"
                          onclick="encerraImovel();">Encerrar Imóvel</butto>
                    <?php } ?>  



          </div>
        </div>
        <!-- BEGIN FICHA -->
        <!-- BLOCO 1 -->
        <div  class="row" id="DivDadosIniciais">
        
             <a href="processo-pesquisa?idImovel=<?php echo $retornoImovel->IdImovel; ?>"><button class="btn btn-primary btn-cons" type="button">Processos</button></a> 
             <a href="tarefa-visualizar"><button class="btn btn-primary btn-cons" type="button">Tarefas</button></a> 
              <!-- TITULO -->
              <div class="tiles green added-margin   m-b-20">
                <div class="tiles-body" >
                  <h4 class="text-white no-margin semi-bold">DADOS INCIAIS</h4>
                  <br>
                </div>
              
              <!-- TITULO -->
              
   
              
              
              
              <div class=" tiles white" >
                
            <div class="p-t-35 p-l-45">
                  <div class="col-md-8  no-padding">
                    <h5 class="no-margin">Data criação</h5>
                    <h4><span class="semi-bold"><?php echo "$retornoImovel->DataEmissao"; ?></span></h4>
                  </div>
                  <div class="col-md-4  no-padding">
                    <h5 class="no-margin">COD.</h5>
                    <h4><span class="semi-bold"><?php echo "$retornoImovel->CodigoImovel"; ?></span></h4>
                  </div>
                  </div>
                  
                  <div class="p-t-35 p-l-45">
                  <div class="col-md-4  no-padding">
                    <h5 class="no-margin">Holding</h5>
                    <h4><span class="semi-bold"><?php echo "$retornoImovel->RazaoSocial"; ?></span></h4>
                  </div>
                  <div class="col-md-4  no-padding">
                    <h5 class="no-margin">Requerente</h5>
                    <h4><span class="semi-bold"><?php echo "$retornoImovel->Nome"; ?></span></h4>
                  </div>
                  <div class="col-md-4  no-padding">
                    <h5 class="no-margin">Nome Exibição</h5>
                    <h4><span class="semi-bold"><?php echo "$retornoImovel->NomeExibicao"; ?></span></h4>
                  </div>
                  
            <div class="clearfix"></div>
                  
         
          
        
        
              </div>
           </div> 
         </div>
       </div>
        <!-- BLOCO 1 -->
        
        
        
        
        
        
        
        
         <!-- BLOCO 2 -->
        <div  class="row" id="DivDadosCadastrais">
        <!-- TITULO -->
        <div class="tiles green added-margin   m-b-20" >
          <div class="tiles-body" >
            <h4 class="text-white no-margin semi-bold">DADOS CADASTRAIS</h4>
            <br>
          </div>
        
        <!-- TITULO -->
        
        
        
        
        
        <div class=" tiles white" >
          
      <div class="p-t-35 p-l-45">
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Contribuinte</h5>
              <h4><span class="semi-bold"><?php echo "$retornoImovel->NumeroContribuinte"; ?></span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Nome Contribuinte</h5>
              <h4><span class="semi-bold"><?php echo "$retornoImovel->NomeContribuinte"; ?></span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">CPF/CNPJ</h5>
              <h4><span class="semi-bold"><?php echo "$retornoImovel->CnpjCpf"; ?></span></h4>
            </div>
            </div>
            
            <div class="p-t-35 p-l-45">
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Local do Imovel</h5>
              <h4><span class="semi-bold"><?php echo "$retornoImovel->LocalImovel"; ?></span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">CEP</h5>
              <h4><span class="semi-bold"><?php echo "$retornoImovel->CepImovel"; ?></span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Codlog</h5>
              <h4><span class="semi-bold"><?php echo "$retornoImovel->CodLog"; ?></span></h4>
            </div>
            <input type="hidden" name="Endereco" id="Endereco" value="<?php echo "$retornoImovel->LocalImovel, $retornoImovel->CodLog - $retornoImovel->CepImovel"; ?>" >
           
            <!-- Auxiliares para carregar endereço em mapa -->
             <input type="hidden" name="EnderecoAux" id="EnderecoAux" value="<?php echo "$retornoImovel->CepImovel"; ?>" >
             <input type="hidden" name="EnderecoAux2" id="EnderecoAux2" >
             <input type="hidden" name="EnderecoAuxNumero" id="EnderecoAuxNumero" value="<?php echo "$retornoImovel->CodLog"; ?>"  >
            </div>
            
            <div class="p-t-35 p-l-45">
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Area do Terreno</h5>
              <h4><span class="semi-bold"><?php echo "$retornoImovel->AreaTerreno"; ?>m²</span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Testada</h5>
              <h4><span class="semi-bold"><?php echo "$retornoImovel->Testada"; ?>m</span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Area Construida</h5>
              <h4><span class="semi-bold"><?php echo "$retornoImovel->AreaConstruida"; ?>m²</span></h4>
            </div>
            </div>
            <div class="p-t-35 p-l-45">
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Fração Ideal</h5>
              <h4><span class="semi-bold"><?php echo "$retornoImovel->FracaoIdeal"; ?></span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Ano Construção</h5>
              <h4><span class="semi-bold"><?php echo "$retornoImovel->AnoConstrucao"; ?></span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Uso do Imovel</h5>
              <h4><span class="semi-bold"><?php echo "$retornoImovel->UsoImovel"; ?></span></h4>
            </div>
            </div>

            <!--INICIO DO MAPA -->
            
            <div id="map-canvas" style="width: 100%; height:300px"></div>           
            <!--FIM DO MAPA-->
      <div class="clearfix"></div>
            
         
          
        
        
            </div>
           </div>
       </div>
        <!-- BLOCO 2 -->
        
        


         <!-- BLOCO 2 -->
        <div  class="row" id="DivQuadraFiscal">
        <!-- TITULO -->
        <div class="tiles green added-margin   m-b-20">
          <div class="tiles-body">
            <h4 class="text-white no-margin semi-bold">QUADRA FISCAL</h4>
            <br>
          </div>
        
        <!-- TITULO -->
        
        
        
        
        
        <div class=" tiles white" >
          
      
            
           
            <div class="col-md-12  no-padding">
            
           <?php if ($retornoImovel->QuadraFiscal != null) {
                echo "<img src='includes/php/fotos/Imovel/".$retornoImovel->QuadraFiscal."' width='100%' height='600'>";
              }else{
                echo "";
                }  ?>
              
            
          </div>
           
            
      <div class="clearfix"></div>
            
         
          
        
        
            </div>
          </div>
       </div>
        <!-- BLOCO 2 -->
        
        
        <!-- BLOCO 2 -->
        <div  class="row" id="DivOutrosLotes">
        <!-- TITULO -->
        <div class="tiles green added-margin   m-b-20">
          <div class="tiles-body">
            <h4 class="text-white no-margin semi-bold">OUTROS LOTES - SQL</h4>
            <br>
          </div>        
        <!-- TITULO -->


        <!-- BUSCA OUTROS LOTES-->
        <?php $buscarOutrosLotes = new Conexao();
              $buscarOutrosLotes->conectar();
              $buscarOutrosLotes->selecionarDB();
              $buscarOutrosLotes->set("sql","SELECT * FROM OutrosLotesImovel 
                                             INNER JOIN CadastraImovel   
                                             WHERE OutrosLotesImovel.IdImovel = '$retornoImovel->IdImovel' 
                                             GROUP BY IdOutrosLotes"); ?>
        
        <div class=" tiles white" >
        <?php   $query2 = $buscarOutrosLotes->executarQuery();
                       while($retornoOutrosLotes = mysql_fetch_object($query2)) { 
                      ?> 

            <div class="p-t-35 p-l-45">
              <div class="col-md-3  no-padding">
                <h5 class="no-margin">SQL</h5>
                <h4><span class="semi-bold"><?php echo "$retornoOutrosLotes->SqlOutroLotes";  ?></span></h4>
              </div>
              <div class="col-md-2  no-padding">
                <h5 class="no-margin">Area Terreno (m2)</h5>
                <h4><span class="semi-bold"><?php echo "$retornoOutrosLotes->AreaTerrenoOutrosLotes";  ?></span></h4>
              </div>
              <div class="col-md-2  no-padding">
                <h5 class="no-margin">Area Construida (m2)</h5>
                <h4><span class="semi-bold"><?php echo "$retornoOutrosLotes->AreaConstruidaOutrosLotes";  ?></span></h4>
              </div>
              <div class="col-md-2  no-padding">
                <h5 class="no-margin">Testada</h5>
                <h4><span class="semi-bold"><?php echo "$retornoOutrosLotes->TestadaOutrosLotes";  ?></span></h4>
              </div>
              <div class="col-md-2  no-padding">
                <h5 class="no-margin">Matricula</h5>
                <h4><span class="semi-bold"><?php echo "$retornoOutrosLotes->MatriculaOutrosLotes";  ?></span></h4>
              </div>
            </div>
          <?php  } ?>
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

         <!-- BUSCA OUTROS LOTES-->
         <?php $buscarHistorico = new Conexao();
               $buscarHistorico->conectar();
               $buscarHistorico->selecionarDB();
               $buscarHistorico->set("sql","SELECT * FROM HistoricoImovel 
                                             INNER JOIN CadastraImovel   
                                             WHERE HistoricoImovel.IdImovel = '$retornoImovel->IdImovel' 
                                             GROUP BY IdHistoricoImovel"); ?>
        
        <div class=" tiles white" >  
           <div class="p-t-35 p-l-45">

            <?php   $query2 = $buscarHistorico->executarQuery();
                       while($retornoHistorico = mysql_fetch_object($query2)) { 
                      ?> 
            <div class="col-md-3  no-padding">
              <h5 class="no-margin">SQL</h5><hr>
              <h4><span class="semi-bold"><?php echo "$retornoHistorico->SqlImovel";  ?></span></h4><hr>
            </div>
            <div class="col-md-2  no-padding">
              <h5 class="no-margin">DATA/ANO</h5><hr>
              <h4><span class="semi-bold"><?php echo "$retornoHistorico->Data";  ?></span></h4><hr>
            </div>
            <div class="col-md-2  no-padding">
              <h5 class="no-margin">AREA TERRENO (m²)</h5><hr>
              <h4><span class="semi-bold"><?php echo "$retornoHistorico->AreaTerrenoHistorico";  ?></span></h4><hr>
            </div>
            <div class="col-md-2  no-padding">
              <h5 class="no-margin">AREA EDIFICADA (m²) </h5><hr>
              <h4><span class="semi-bold"><?php echo "$retornoHistorico->AreaEdificada";  ?></span></h4><hr>
            </div>
            <div class="col-md-2  no-padding">
              <h5 class="no-margin">SITUAÇÃO</h5><hr>
              <h4><span class="semi-bold"><?php echo "$retornoHistorico->SituacaoHistorico";  ?></span></h4><hr>
            </div>


          <?php } ?>

            </div> 
            
      <div class="clearfix"></div>
            
         
          
        
        
             </div>
           </div>
       </div>
        <!-- BLOCO 2 -->
   
        
        
        
        
        
        
        
          
        
         <!-- BLOCO 2 -->
        <div  class="row" id="DivZoneamento">
        <!-- TITULO -->
        <div class="tiles green added-margin   m-b-20">
          <div class="tiles-body">
            <h4 class="text-white no-margin semi-bold">ZONEAMENTO</h4>
            <br>
          </div>
        
        <!-- TITULO -->
        
        
        
        
        
        <div class=" tiles white" >
          
      <div class="p-t-35 p-l-45">
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Zona</h5>
              <h4><span class="semi-bold"><?php echo $retornoImovel->Zona; ?></span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">C.A. Básico</h5>
              <h4><span class="semi-bold"><?php echo $retornoImovel->CaBasico; ?></span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Distrito</h5>
              <h4><span class="semi-bold"><?php echo $retornoImovel->Distrito; ?></span></h4>
            </div>
            </div>
            
            <div class="p-t-35 p-l-45">
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Sub Prefeitura</h5>
              <h4><span class="semi-bold"><?php echo $retornoImovel->SubPrefeitura; ?></span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">C.A. Máximo</h5>
              <h4><span class="semi-bold"><?php echo $retornoImovel->CaMaximo; ?></span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Gabarito</h5>
              <h4><span class="semi-bold"><?php echo $retornoImovel->Gabarito; ?></span></h4>
            </div>
            </div>
            
            <div class="p-t-35 p-l-45">
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">T.O.</h5>
              <h4><span class="semi-bold"><?php echo $retornoImovel->ToImovel; ?></span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Tx Perm.</h5>
              <h4><span class="semi-bold"><?php echo $retornoImovel->TxPerm; ?></span></h4>
            </div>
            <div class="col-md-4  no-padding">
              <h5 class="no-margin">Lag. da VIa</h5>
              <h4><span class="semi-bold"><?php echo $retornoImovel->LargVia; ?></span></h4>
            </div>
            </div>
            <div class="p-t-35 p-l-45">
             <div class="col-md-12  no-padding">
              <h5 class="no-margin">Classificação da Via</h5>
              <h4><span class="semi-bold"><?php echo $retornoImovel->ClassificacaoVia; ?></span></h4>
            </div>
            
           
            </div>
            
            <div class="p-t-35 p-l-45">
            <div class="col-md-12  no-padding">
              <h5 class="no-margin">Comentários</h5>
              <h4><?php echo $retornoImovel->ComentariosZoneamento; ?></h4>
            </div>
            
            
           
            </div>
            
            
            
      <div class="clearfix"></div>
            
         
          
        
        
            </div>
          </div>
       </div>
        <!-- BLOCO 2 -->
        
        
        
        
        
         <!-- BLOCO 2 -->
        <div  class="row" id="DivOperacaoUrbana">
        <!-- TITULO -->
        <div class="tiles green added-margin   m-b-20">
          <div class="tiles-body">
            <h4 class="text-white no-margin semi-bold">OPERAÇÃO URBANA</h4>
            <br>
          </div>
        
        <!-- TITULO -->
        
        
        
        
        
        <div class=" tiles white" >
          
      
            
            
            
          
            <div class="p-t-35 p-l-45">
             <div class="col-md-12  no-padding">
              
              <h4><span class="semi-bold"><?php echo $retornoImovel->SituacaoOperacaoUrbana; ?></span></h4>
            </div>
            
           
            </div>
            
            <div class="p-t-35 p-l-45">
            <div class="col-md-12  no-padding">
              <h5 class="no-margin">Comentários</h5>
              <h4><?php echo $retornoImovel->ComentariosOperacaoUrbana; ?></h4>
            </div>
            
            
           
            </div>
            
            
            
      <div class="clearfix"></div>
            
         
          
        
        
            </div>
          </div>
       </div>
        <!-- BLOCO 2 -->
        
        
        
        
        
        
        <!-- BLOCO 2 -->
        <div  class="row" id="DivRestricoes">
        <!-- TITULO -->
        <div class="tiles green added-margin   m-b-20">
          <div class="tiles-body">
            <h4 class="text-white no-margin semi-bold">RESTRIÇÕES</h4>
            <br>
          </div>
        
        <!-- TITULO -->
        <!-- BUSCA RESTRIÇÔES-->
         <?php $buscarRestricoes = new Conexao();
               $buscarRestricoes->conectar();
               $buscarRestricoes->selecionarDB();
               $buscarRestricoes->set("sql","SELECT * FROM RestricoesImovel 
                                             INNER JOIN CadastraImovel   
                                             WHERE RestricoesImovel.IdImovel = '$retornoImovel->IdImovel'
                                             GROUP BY IdRestricoesImovel "); ?>
       

        <div class=" tiles white" >
          
    
                        <div class="grid simple ">
                            
                            <div class="grid-body no-border">
                                 
                                    <table class="table no-more-tables">
                                        <thead>
                                            <tr>
                                                
                                                <th style="width:14%">SQL</th>
                                                <th style="width:14%">TOMBAMENTO</th>
                                                <th style="width:14%">AREA MANANCIAL</th>
                                                <th style="width:14%">AREA CONTAMINADA</th>
                                                <th style="width:14%">PATRIMONIO AMBIENTAL</th>
                                                <th style="width:14%">PROTEÇÃO AMBIENTAL</th>
                                                <th style="width:14%">PENDENCIA FINANCEIRA</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php   $query3 = $buscarRestricoes->executarQuery();
                                               while($retornoRestricoes = mysql_fetch_object($query3)) { 
                                              ?> 
                         
                                              <tr>  
                                                <td class="v-align-middle"><?php echo $retornoRestricoes->SqlRestricoes; ?></td>
                                                <td class="v-align-middle"><?php echo $retornoRestricoes->Tombamento; ?></td>
                                                <td class="v-align-middle"><?php echo $retornoRestricoes->AreaManancial; ?></td>
                                                <td class="v-align-middle"><?php echo $retornoRestricoes->AreaContaminada; ?></td>
                                                <td class="v-align-middle"><?php echo $retornoRestricoes->PatrimonioAmbiental; ?></td>
                                                <td class="v-align-middle"><?php echo $retornoRestricoes->ProtecaoAmbiental; ?></td>
                                                <td class="v-align-middle"><?php echo $retornoRestricoes->PedenciaFinanceira; ?></td>
                                               
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
   
        
        
        
           
        
         <!-- BLOCO 2 -->
        <div  class="row" id="DivDividas">
        <!-- TITULO -->
        <div class="tiles green added-margin   m-b-20">
          <div class="tiles-body">
            <h4 class="text-white no-margin semi-bold">DIVIDAS</h4>
            <br>
          </div>
        
        <!-- TITULO -->
        
        
        
        
        
        <div class=" tiles white" >
            <div class="p-t-35 p-l-45">
            <div class="col-md-12  no-padding">
              <h4><span class="semi-bold">IPTU</span></h4>
            </div>
            
            </div>
            
      <div class="p-t-35 p-l-45">
            <div class="col-md-6  no-padding">
              <h5 class="no-margin">Exercicio(s)</h5>
              <h4><span class="semi-bold"><?php echo $retornoImovel->ExerciciosIptu; ?></span></h4>
            </div>
            <div class="col-md-6  no-padding">
            <h5 class="no-margin">Valor Total</h5>
              <h4><span class="semi-bold">R$ <?php echo $retornoImovel->ValorTolalIptu; ?></span></h4>
            </div>
            </div>
            
            <div class="p-t-35 p-l-45">
            <div class="col-md-12  no-padding">
              <h4><span class="semi-bold">MULTAS</span></h4>
            </div>
            
            </div>
            
      <div class="p-t-35 p-l-45">
            <div class="col-md-6  no-padding">
              <h5 class="no-margin">Exercicio(s)</h5>
              <h4><span class="semi-bold"><?php echo $retornoImovel->ExerciciosMultas; ?></span></h4>
            </div>
            <div class="col-md-6  no-padding">
            <h5 class="no-margin">Valor Total</h5>
              <h4><span class="semi-bold">R$ <?php echo $retornoImovel->ValorTolalMultas; ?></span></h4>
            </div>
            </div>
            
            
            
      <div class="p-t-35 p-l-45">
            <div class="col-md-12  no-padding">
             <h5 class="no-margin">TOTAL DIVIDAS</h5>
              <h4><span class="semi-bold">R$ <?php echo $retornoImovel->TotalExercicios; ?></span></h4>
            </div>
            </div>
            
            <div class="p-t-35 p-l-45">
            <div class="col-md-12  no-padding">
              <h5 class="no-margin">Comentários</h5>
              <h4><?php echo $retornoImovel->ComentariosDividas; ?></h4>
            </div>
            
            
           
            </div>
            
            
           
            
            
            
            
      <div class="clearfix"></div>
            
         
          
        
        
            </div>
          </div>
       </div>
        <!-- BLOCO 2 -->
        
        
        
              
        <!-- BLOCO 2 -->
        <div  class="row" id="DivProcessos">
        <!-- TITULO -->
        <div class="tiles green added-margin   m-b-20">
          <div class="tiles-body">
            <h4 class="text-white no-margin semi-bold">PROCESSOS</h4>
            <br>
          </div>
        
        <!-- TITULO -->
         <!-- BUSCA RESTRIÇÔES-->
         <?php $buscarProcessos = new Conexao();
               $buscarProcessos->conectar();
               $buscarProcessos->selecionarDB();
               $buscarProcessos->set("sql","SELECT * FROM ProcessosImovel 
                                             INNER JOIN CadastraImovel   
                                             WHERE ProcessosImovel.IdImovel = '$retornoImovel->IdImovel' 
                                             GROUP BY IdProcessosImovel"); ?>
        
        
        
        
        <div class=" tiles white" >
          
    
                        <div class="grid simple ">
                            
                            <div class="grid-body no-border">
                                 
                                    <table class="table no-more-tables">
                                        <thead>
                                            <tr>
                                                
                                                <th style="width:15%">ANO/ PROCESSO</th>
                                                <th style="width:30%">INTERESSADO</th>
                                                <th style="width:30%">ASSUNTO</th>
                                                <th style="width:25%">SITUAÇÃO</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            

                                            <?php   $query4 = $buscarProcessos->executarQuery();
                                               while($retornoProcessos = mysql_fetch_object($query4)) { 
                                              ?> 


                                              <tr>  
                                                <td class="v-align-middle"><?php echo $retornoProcessos->AnoProcesso; ?></td>
                                                 <td class="v-align-middle"><?php echo $retornoProcessos->Interessado; ?></td>
                                                  <td class="v-align-middle"><?php echo $retornoProcessos->Assunto; ?></td>
                                                   <td class="v-align-middle"><?php echo $retornoProcessos->Situacao; ?></td>                                                
                                             </tr>

                                           <?php } ?>
                                       
                                            
                                        </tbody>
                                    </table>
                            </div>
                        
                   <!-- BUSCA RESTRIÇÔES-->
         <?php $buscarComentariosProcessos = new Conexao();
               $buscarComentariosProcessos->conectar();
               $buscarComentariosProcessos->selecionarDB();
               $buscarComentariosProcessos->set("sql","SELECT * FROM ComentariosProcessoImovel 
                                             INNER JOIN CadastraImovel   
                                             WHERE ComentariosProcessoImovel.IdImovel = '$retornoImovel->IdImovel' "); 
              $retornorComentariosProcessos = mysql_fetch_object($buscarComentariosProcessos->executarQuery());  ?>                                           
                
                <div class="p-t-35 p-l-45">
            <div class="col-md-12  no-padding">
              <h5 class="no-margin">Comentários</h5>
              <h4><?php if ($retornorComentariosProcessos->Comentarios != null) {
                 echo "$retornorComentariosProcessos->Comentarios";
              }else {
                echo "";
              }?></h4>
            </div>
            
            
           
            
        
    
            
            
            
            
            
      <div class="clearfix"></div>
            
         
          
                 </div>
                </div>
             </div>
          </div>
        </div>
        
       
        <!-- BLOCO 2 -->
        
        
        
          
        
        
        
        
         <!-- BLOCO 2 -->
        <div  class="row" id="DivGeomapas">
        <!-- TITULO -->
        <div class="tiles green added-margin   m-b-20">
          <div class="tiles-body">
            <h4 class="text-white no-margin semi-bold">GEOMAPAS</h4>
            <br>
          </div>
        
        <!-- TITULO -->
        
        
        
        
        
        <div class=" tiles white" >
          
      
            
           
            <div class="col-md-12  no-padding">
            
           <?php if ($retornoImovel->Geomapas != null) {
                echo "<img src='includes/php/fotos/Imovel/".$retornoImovel->Geomapas."' width='100%' height='600'>";
              }else{
                echo "";
                }  ?>
              
            
          </div>
           
            
      <div class="clearfix"></div>
            
         
          
        
        
              </div>
           </div>
       </div>
        <!-- BLOCO 2 -->
        



         <!-- BLOCO 2 -->
        <div  class="row" id="DivImagemLocal">
        <!-- TITULO -->
        <div class="tiles green added-margin   m-b-20">
          <div class="tiles-body">
            <h4 class="text-white no-margin semi-bold">IMAGEM LOCAL</h4>
            <br>
          </div>
        
        <!-- TITULO -->
        
        
        
        
        
        <div class=" tiles white" >
          
      
            
           
            <div class="col-md-12  no-padding">
            
           
           <?php if ($retornoImovel->ImagemLocal != null) {
                echo " <img src='includes/php/fotos/Imovel/".$retornoImovel->ImagemLocal."' width='100%' height='600' >";
              }else{
                echo "";
                }  ?>
               
            
          </div>
           
            
      <div class="clearfix"></div>
            
   
        
             </div>
          </div>
       </div>
        <!-- BLOCO 2 -->
        
        
        
        <!--ENDFICHA -->
          
        
        
   
  </div>
  </form>
 </div>

  <!--Insere o conteudo do buffer na variável  -->
  <form id='formPdf' name='formPdf' method='POST' action='impressao/imovel.php'>
  <!--COMEÇO DO VALOR DO CONTENT-->
   <input type="hidden" id='imovelAux' name='imovelAux' value="<?php echo $IdImovel;?>">
   <!--FIM DO VALOR DO CONTENT-->  

      <!--checks for send-->
           
            <input type="hidden" name="ckRequerente" id="ckRequerente" value="1">
            <input type="hidden" name="ckDadosCadastrais" id="ckDadosCadastrais" value="1">
            <input type="hidden" name="ckHistorico" id="ckHistorico" value="1">
            <input type="hidden" name="ckProcessos" id="ckProcessos" value="1">
            <input type="hidden" name="ckOutrosSql" id="ckOutrosSql" value="1">
            <input type="hidden" name="ckZoneamento" id="ckZoneamento" value="1">
            <input type="hidden" name="ckOperacaoUrbana" id="ckOperacaoUrbana" value="1">
            <input type="hidden" name="ckRestricoes" id="ckRestricoes" value="1">
            <input type="hidden" name="ckDividas" id="ckDividas" value="1">
            <input type="hidden" name="ckQuadraFiscal" id="ckQuadraFiscal" value="1">
            <input type="hidden" name="ckGeomapas" id="ckGeomapas" value="1">
            <input type="hidden" name="ckImagemLocal" id="ckImagemLocal" value="1">

     <!---->
  </form>

  <form id='formEncerra' name='formEncerra' method='POST' action='includes/php/EncerraImovel.php'>
  <!--COMEÇO DO VALOR DO CONTENT-->
   <input type="hidden" id='IdImovelEncerra' name='IdImovelEncerra' value="<?php echo $IdImovel;?>">
   <!--FIM DO VALOR DO CONTENT-->  
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
