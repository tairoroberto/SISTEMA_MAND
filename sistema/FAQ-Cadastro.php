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


<script>
  /*********************************************************************************************/
/*           Função para preencher o campo de Faq ao selecionar item em lista            */
/*             Preenchimento é feito para atualizar e exluir do banco ao clicar em botão     */
/*********************************************************************************************/


function selecionaFaqCadastra(id,nome,descricao){
  
      formFaqCadastro.IdCadastraFaqAux.value = id;
      formFaqCadastro.NomeFaq.value = nome;  
      formFaqCadastro.Descricao.value = descricao;   
}


/*********************************************************************************************/
/*                       Função para Enviar FORM FAQ para pagina php                         */
/*********************************************************************************************/
function enviaFormFaqCadastro(acao){
  if (acao == 'um'){
    document.formFaqCadastro.action = "includes/php/CadastraFaq.php";
    document.formFaqCadastro.submit();
  } else if (acao == 'dois'){
     document.formFaqCadastro.action = "includes/php/AtualizaFaq.php";
     document.formFaqCadastro.submit();
  }else if (acao == 'tres'){
       document.formFaqCadastro.action = "includes/php/DeletaFaq.php";
       document.formFaqCadastro.submit();
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
                <h3>Cadastro - <span class="semi-bold">FAQ</span></h3>
              </div>
              
              <!-- START FORM -->
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border"></div>
                    <div class="grid-body no-border">
                    <form class="form-no-horizontal-spacing" id="formFaqCadastro" name="formFaqCadastro" 
                          method="POST" action="includes/php/CadastraFAQ.php" enctype="multipart/form-data">
                      <div class="row column-seperation">
                        <div class="col-md-12">
                          <h4>Novo FAQ</h4>
                         
                          <div class="row form-row">
                            <div class="col-md-5">
                              <select  id="SelectCategoria" name="SelectCategoria" style="width:100%">
                   
                    <option value="Categoria...">Categoria...</option>
                    <?php 

                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/
                     
                        $buscar = new Conexao();
                        $buscar->conectar();
                        $buscar->selecionarDB();                      

                       $buscar->set('sql',"SELECT * FROM `Categoria` ORDER BY `NomeCategoria` ");
                       
                        $query= $buscar->executarQuery();
                       while($retorno=mysql_fetch_object($query)) { 
                      ?> 
                        <option value="<?php echo $retorno->IdCategoria ?>"> <?php echo $retorno->NomeCategoria; ?>
                        </option>
 
                      <?php } ?>
                  
                  </select>
                            </div>
                            <div class="col-md-7">
                              <input  name="NomeFaq" id="NomeFaq"type="text"  class="form-control" placeholder="Titulo FAQ">
                              <input type="hidden" name="IdCadastraFaqAux" id="IdCadastraFaqAux" >
                            </div>
                          </div>
                          
                          <div class="row form-row">
                            <div class="col-md-5">
                            <input name="Imagem1" id="Imagem1" type="file" accept="image/*" class="filestyle btn btn-primary btn-cons"  />
                            <input name="Imagem2" id="Imagem2" type="file" accept="image/*" class="filestyle btn btn-primary btn-cons"  />
                            <input name="Imagem3" id="Imagem3" type="file" accept="image/*" class="filestyle btn btn-primary btn-cons"  />

                            </div>
                            <div class="col-md-7">
                              <textarea name="Descricao" id="Descricao"  rows="7" class="col-lg-12">Descrição</textarea>
                            </div>
                          </div>
                         <div class="row form-row">
                            <div class="col-md-12">
                            <br>
                            <button class="btn btn-primary btn-cons" type="button"
                            			onclick="validaFaq();enviaFormFaqCadastro('um');">Adicionar </button>
                            
                             <button class="btn btn-primary btn-cons" type="button"
                             		onclick="validaFaq();enviaFormFaqCadastro('dois');">Editar</button>
                             <button class="btn btn-primary btn-cons" type="button"
                             		onclick="validaFaq();enviaFormFaqCadastro('tres');">Excluir</button>
                              
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
                                                        <th style="width:60%">Nome</th>
                                                        <th style="width:40%;">Categoria</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                          <!--Começa aqui-->
                    <?php 

                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/
                     
                        $buscarFAQ = new Conexao();
                        $buscarFAQ->conectar();
                        $buscarFAQ->selecionarDB();                    

                       $buscarFAQ->set('sql',"SELECT CadastroFAQ.*,Categoria.* 
                                              FROM `Categoria` 
                                              INNER JOIN `CadastroFAQ` 
                                              ON `Categoria`.`IdCategoria` = `CadastroFAQ`.`IdCategoria`");
                       
                        $query= $buscarFAQ->executarQuery();
                       while($retorno=mysql_fetch_object($query)) { ?> 
                              <tr>
                                <td onclick="selecionaFaqCadastra('<?php echo $retorno->IdCadastraFaq; ?>','<?php echo $retorno->NomeFaq; ?>','<?php echo $retorno->Descricao; ?>');"><a href="#"><i class="fa fa-paste"></i></a></td>
                                <td><?php echo $retorno->NomeFaq ;?></td> 
                                <td> <?php echo $retorno->NomeCategoria ;?> </td>
                              </tr>
                             
                          <?php } ?>                                                    
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