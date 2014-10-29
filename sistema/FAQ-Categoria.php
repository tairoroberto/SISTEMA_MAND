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
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="includes/js/ValidaCampos.js"></script>
<script type="text/javascript" src="includes/js/CriarComponentes.js"></script>


<script >
  /*********************************************************************************************/
/*           Função para preencher o campo de categoria ao selecionar item em lista          */
/*             Preenchimento é feito para atualizar banco ao clicar em botão                 */
/*********************************************************************************************/


function selecionaFaq(id,categoria,subCategoria){
   formCategoria.IdCategoriaAux.value = id; 
   formCategoria.NomeCategoria.value = categoria;   
   formCategoria.SubCategoria.value = subCategoria;
}

/*********************************************************************************************/
/*                       Função para Enviar FORM FAQ para pagina php                         */
/*********************************************************************************************/
function enviaFormCategoria(acao){
  if (acao == 'um'){
    document.formCategoria.action = "includes/php/CadastraCategoria.php";
    document.formCategoria.submit();
  } else if (acao == 'dois'){
     document.formCategoria.action = "includes/php/AtualizaCategoria.php";
     document.formCategoria.submit();
  }else if (acao == 'tres'){
       document.formCategoria.action = "includes/php/DeletaCategoria.php";
       document.formCategoria.submit();
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
     
      
          
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="clearfix"></div>
            <div class="content">
              <div class="page-title"> 
                <h3>Categoria - <span class="semi-bold">FAQ</span></h3>
              </div>
              
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border"></div>
                    <div class="grid-body no-border">
                    <form class="form-no-horizontal-spacing" id="formCategoria" name="formCategoria" 
                          method="POST" action="includes/php/CadastraCategoria.php">
                      <div class="row column-seperation">
                        <div class="col-md-12">
                          <h4>Nova Categoria</h4>
                         
                          <div class="row form-row">
                            <div class="col-md-8">
                              <input name="NomeCategoria" id="NomeCategoria"	 type="text"  class="form-control" placeholder="Nome Categoria">
                            	<input type="hidden" name="IdCategoriaAux" id="IdCategoriaAux" >
                            </div>
                            <div class="col-md-4">
                              <input name="SubCategoria" id="SubCategoria"   type="text"  class="form-control" placeholder="Sub Categoria">
                               </div>
                          </div>
                         <div class="row form-row">
                            <div class="col-md-12">
                            <button class="btn btn-primary btn-cons" type="button"
                            		onclick="validaCategoria();enviaFormCategoria('um');">Adicionar </button>
                            
                             <button class="btn btn-primary btn-cons" type="button"
                             		onclick="validaCategoria();enviaFormCategoria('dois');">Editar</button>
                             <button class="btn btn-primary btn-cons" type="button"
                             			onclick="validaCategoria();enviaFormCategoria('tres');">Excluir</button>
                              
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
                                                        <th style="width:1%">Editar</th>
                                                        <th style="width:80%">Nome</th>
                                                        <th style="width:20%;">Sub-categorias</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                          <!--Começa aqui-->
                    <?php 

                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/
                     
                        $buscar = new Conexao();
                        $buscar->conectar();
                        $buscar->selecionarDB();                      

                       $buscar->set('sql',"SELECT * FROM `Categoria` ORDER BY `NomeCategoria`");
                       
                        $query= $buscar->executarQuery();
                        $i = 0;
                       while($retorno=mysql_fetch_object($query)) { ?> 
                          <tr>
                            <td onclick="selecionaFaq('<?php echo $retorno->IdCategoria; ?>','<?php echo $retorno->NomeCategoria; ?>','<?php echo $retorno->SubCategoria; ?>');"><a href="#"><i class="fa fa-paste"></i></a></td>
                            <td ><?php echo $retorno->NomeCategoria; ?> </td> 
                            <td><?php echo $retorno->SubCategoria; ?></td>
                          </tr>
                       
                        <?php $i++;} ?>
                                                                   
                        </tbody>
                      </table>
                   </div>
                 </div>
               </div>
             </form>
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