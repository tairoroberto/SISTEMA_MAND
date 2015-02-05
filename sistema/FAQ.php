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
	<!-- BEGIN PLUGIN CSS -->
	<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="assets/plugins/jquery-superbox/css/style.css" rel="stylesheet" type="text/css" media="screen"/>
	<!-- END PLUGIN CSS -->
	<!-- BEGIN CSS TEMPLATE -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>

	<link rel="stylesheet" type="text/css" href="assets/plugins/jquery-superbox/css/jquery.superbox.css">
	<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>

	<!--<script src="assets/plugins/jquery-superbox/js/superbox.js" type="text/javascript"></script>-->
	<script src="assets/plugins/jquery-superbox/js/jquery.superbox.js" type="text/javascript"></script>
	<!-- END CSS TEMPLATE -->
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
		<div class="page-title"></div>
		<!-- START FORM -->




		<div class="row">
			<div class="col-md-12">
				<div class="tabbable tabs-left">
					<ul class="nav nav-tabs" id="tab-01">
						<li style=" padding:15px;">FAQ</li>
						<?php
						/**********************************************************************************************/
						/*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
						/********************************************************************************************/
						$buscarCategoria = new Conexao();
						$buscarCategoria->conectar();
						$buscarCategoria->selecionarDB();

						$buscarFaq = new Conexao();
						$buscarFaq->conectar();
						$buscarFaq->selecionarDB();
						$contGategoria1 = 0;
						$contGategoria2 = 0;


						$buscarCategoria->set('sql',"SELECT * FROM Categoria ");

						$queryCategoria= $buscarCategoria->executarQuery();
						while($retornoCategoria = mysql_fetch_object($queryCategoria)) { ?>


							<li class="<?php if ($contGategoria1 == 0) { echo 'active'; } ?>">
								<a href="#tabela<?php echo $retornoCategoria->IdCategoria; ?>">  <?php echo $retornoCategoria->NomeCategoria; ?></a>
							</li>
							<?php $contGategoria1++; } ?>

					</ul>



					<div class="tab-content">


						<?php
						$queryCategoria2= $buscarCategoria->executarQuery();
						while($retornoCategoria2 = mysql_fetch_object($queryCategoria2)) { ?>

							<div class="tab-pane <?php if ($contGategoria2 == 0) { echo 'active'; } ?>" id="tabela<?php echo $retornoCategoria2->IdCategoria ?>">
								<div class="row">
									<div class="col-md-12">
										<h3><span class="semi-bold"><?php echo $retornoCategoria2->NomeCategoria; ?></span></h3>

										<div class="col-md-12">
											<!--Begin acordion-->
											<div class="panel-group" id="accordion" data-toggle="collapse">


												<?php
												/**********************************************************************************************/
												/*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
												/********************************************************************************************/
												$buscarFaq = new Conexao();
												$buscarFaq->conectar();
												$buscarFaq->selecionarDB();
												$cont2 = 0;

												$buscarFaq->set('sql',"SELECT *	FROM  CadastroFAQ
										  WHERE IdCategoria = $retornoCategoria2->IdCategoria");?>

												<div class="panel panel-default">

													<?php  $queryFaq= $buscarFaq->executarQuery();
													while($retornoFaqConteudo = mysql_fetch_object($queryFaq)) { ?>

														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $retornoFaqConteudo->IdCadastraFaq; ?>">
																	<?php echo $retornoFaqConteudo->NomeFaq; ?>
																</a>
															</h4>
														</div>
														<br>


														<?php
														$buscarFaq->set('sql',"SELECT *	FROM  CadastroFAQ
										  WHERE IdCategoria = $retornoCategoria2->IdCategoria
										  GROUP BY IdCadastraFaq");

														$queryFaq2= $buscarFaq->executarQuery();
														while($retornoFaqConteudo2 = mysql_fetch_object($queryFaq2)) { ?>
															<div id="collapse<?php echo $retornoFaqConteudo->IdCadastraFaq; ?>" class="panel-collapse collapse">
																<div class="panel-body">
																	<p><!-- DESCRIÇÃO DA FAQ -->
																		<?php echo $retornoFaqConteudo->Descricao?>
																	</p>
																	<div class="superbox">
																		<?php if ($retornoFaqConteudo->Imagem1 != null) {
																			echo "<a href='includes/php/fotos/Faq/".$retornoFaqConteudo->Imagem1."'  rel='superbox[gallery][my_gallery]'> <img src='includes/php/fotos/Faq/".$retornoFaqConteudo->Imagem1."' alt='' width='100' height='100' > </a>";
																		}if ($retornoFaqConteudo->Imagem2 != null) {
																			echo "<a href='includes/php/fotos/Faq/".$retornoFaqConteudo->Imagem2."'  rel='superbox[gallery][my_gallery]'> <img src='includes/php/fotos/Faq/".$retornoFaqConteudo->Imagem2."' alt='' width='100' height='100' > </a>";
																		}if ($retornoFaqConteudo->Imagem3 != null) {
																			echo "<a href='includes/php/fotos/Faq/".$retornoFaqConteudo->Imagem3."'  rel='superbox[gallery][my_gallery]'> <img src='includes/php/fotos/Faq/".$retornoFaqConteudo->Imagem3."' alt='' width='100' height='100'> </a>";
																		}?>
																		<div class="superbox-float"></div>

																	</div>
																	<!-- /SuperBox -->
																</div>
															</div>
														<?php } } ?>
												</div>
												<!--End acordion-->
											</div>
										</div>
									</div>
								</div>
							</div>


							<?php $contGategoria2++; } ?>



					</div>


				</div>
			</div>
			<br>
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

<!-- END CONTAINER -->

<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- PAGE JS -->
<script src="assets/js/tabs_accordian.js" type="text/javascript"></script>



<!-- END PAGE LEVEL PLUGINS -->
<script>
	$(function(){
		$.superbox.settings = {
			boxId: "superbox", // Id attribute of the "superbox" element
			boxClasses: "", // Class of the "superbox" element
			overlayOpacity: .8, // Background opaqueness
			boxWidth: "600", // Default width of the box
			boxHeight: "400", // Default height of the box
			loadTxt: "Loading...", // Loading text
			closeTxt: "x", // "Close" button text
			prevTxt: "", // "Previous" button text
			nextTxt: "" // "Next" button text
		};
		$.superbox();
	});


</script>
<!-- BEGIN CORE TEMPLATE JS -->

<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script>
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
</body>
</html>