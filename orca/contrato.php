<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Mand Projetos - Orçamento</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
  
function alertaCliente(){
  alert("Em breve entraremos em contato para dar continuidade.");  
}

</script>
</head>

<body onload="alertaCliente();">
<form id="formContrato" name="formContrato" method="post" action="EnviaContrato">

<!--ESQUERDA-->
<div id="col-esq">
	
    <div id="esq-logo" align="center"><a href="#" onclick="enviar('inicio');"><img src="imagens/logo.png" width="169" height="169" /></a></div>
    
<?php
  $IdOportunidade;
  $IdOrcamentoB;

  if (isset($_POST['IdOportunidadeAux'],$_POST['IdOrcamentoBAux'])) {

      $IdOportunidade = $_POST['IdOportunidadeAux'];
      $IdOrcamentoB = $_POST['IdOrcamentoBAux'];

  }elseif (isset($_GET['IdOportunidadeAux'],$_GET['IdOrcamentoBAux'])) {

      $IdOportunidade = $_GET['IdOportunidadeAux'];
      $IdOrcamentoB = $_GET['IdOrcamentoBAux'];
  }


    if ((isset($_POST['IdOportunidadeAux'],$_POST['IdOrcamentoBAux'])) ||
        (isset($_GET['IdOportunidadeAux'],$_GET['IdOrcamentoBAux']))) {


/********************************************************************************************/
/*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
/********************************************************************************************/
include ('../sistema/includes/php/conexao/Conexao.class.php');
include ('../sistema/includes/php/conexao/PHPMailer-master/class.phpmailer.php');
include('php/EnviarEmail.php');

      $buscaOportunidade = new Conexao();
      $buscaOportunidade->conectar();
      $buscaOportunidade->selecionarDB(); 


      $buscaOportunidade->set('sql',"SELECT Oportunidade.*, CadastraOrcamentoB.*
                                     FROM CadastraOrcamentoB 
                                     INNER JOIN Oportunidade
                                     ON Oportunidade.IdOportunidade = $IdOportunidade AND 
                                        CadastraOrcamentoB.IdOrcamentoB = $IdOrcamentoB ");

      $retornoOportunidade = mysql_fetch_object($buscaOportunidade->executarQuery()); 


                          
      /**********************************************************************************************/
      /*   Variáveis para a busca no banco, retorna os dados da oportunidade castradas             */
      /********************************************************************************************/                 
      $buscarServicosOrcamentoB = new Conexao();
      $buscarServicosOrcamentoB->conectar();
      $buscarServicosOrcamentoB->selecionarDB(); 
      $cont = 1;
      $valorDosServicos = 0;
                                                                                  
      $buscarServicosOrcamentoB->set('sql',"SELECT OrcamentoBServicos.*,Servicos.* 
                                            FROM Servicos
                                            INNER JOIN OrcamentoBServicos                                                                                  
                                            ON OrcamentoBServicos.IdOrcamentoB = $IdOrcamentoB AND 
                                               OrcamentoBServicos.IdOportunidade  = $IdOportunidade AND 
                                               OrcamentoBServicos.IdServico = Servicos.IdServico
                                            GROUP BY IdOrcamentoBServico"); 
                                                                                                 
      $query= $buscarServicosOrcamentoB->executarQuery();
      while($retornoServicosOrcamentoB = mysql_fetch_object($query)) {  ?>


     <div id="esq-serv" align="left" class="ver-azu">
        <span class="ver-bra"><?php echo $cont;?> </span> <?php echo $retornoServicosOrcamentoB->TituloServico;?><br />
        
        Valor: <span class="ver-bra">R$ <?php echo $retornoServicosOrcamentoB->Valor;?></span>

     </div>

     <?php $cont++;  } }?>

     <div id="esq-serv" align="left" class="ver-azu">
      VALOR SERVIÇOS  <br />
      <span class="ver-bra">R$ <?php echo $retornoOportunidade->TotalServicos;?></span>      
     </div>

     <div id="esq-serv" align="left" class="ver-azu">
      VALOR TAXAS  <br />
      <span class="ver-bra">R$ <?php echo $retornoOportunidade->Taxas;?></span>      
     </div>

    <div id="esq-serv" align="left" class="ver-azu">
      VALOR TOTAL  <br />
      <span class="ver-bra">R$ <?php echo $retornoOportunidade->TotalOrcamentoB;?></span>
     </div>
 
 <!--    
 <div id="esq-pdf" onclick="expotarPdf();"> <a href="#"><img src="imagens/pdf.png" width="220" height="41" /></a> </div>
 -->


<!--Aqui Pdf-->
 <?php $NomeArquivo = "Contrato-Mand-".date('d-m-Y').".pdf"; ?>

 <?php  if(file_exists($NomeArquivo)){ ?>

      <div id="esq-pdf">&nbsp;&nbsp;&nbsp; 
        <a href="salvar.php?arquivo=<?php echo $NomeArquivo; ?>" style="text-decoration: none">
          <img src="imagens/pdf3.png" width="40" height="30" />
          <font color="FFFFFF">Baixar Pdf </font>
        </a> 
      </div>
    
 <?php }else{ ?>

      <div id="esq-pdf" onclick="expotarPdf();">&nbsp;&nbsp;&nbsp; 
        <a href="#" style="text-decoration: none">
          <img src="imagens/pdf3.png" width="40" height="30" />
          <font color="FFFFFF">Exportar para Pdf </font>
        </a> 
      </div>

 <?php } ?>




    
      <!--Envia o email para cofirmar que cliente ceitou a proposta   -->
      <?php if (isset($_POST['IdOportunidadeAux'],$_POST['IdOrcamentoBAux'])) {

          enviarEmail("atendimento@mandprojetos.com.br"," ACEITOU o orçamento",$IdOportunidade,$IdOrcamentoB);
          //atendimento@mandprojetos.com.br
        } ?>
     
</div>
<!--ESQUERDA-->


<!--DIREITA-->
<div id="col-dir">
	
    <div id="dir-tit" class="tit">CONTRATO</div>
    
  <div id="dir-contrato" align="justify" class="open-15">
  
  <span class="open-20"><strong>CONTRATO DE PRESTAÇÃO DE SERVIÇOS</strong></span></br>
<br />
<br />


  <?php
      /********************************************************************************************/
      /*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
     /********************************************************************************************/
                  $buscaContrato = new Conexao();
                  $buscaContrato->conectar();
                  $buscaContrato->selecionarDB(); 


                  $buscaContrato->set('sql',"SELECT * FROM Contrato WHERE IdContrato = 1");
 
                  $retornoContrato= mysql_fetch_object($buscaContrato->executarQuery()); ?>


<strong>IDENTIFICAÇÃO DAS PARTES CONTRATANTES</br>
</strong><br />

<?php echo $retornoContrato->DadosMand; ?> e de outro lado <strong><?php echo $retornoOportunidade->RazaoSocial;?></strong>, CNPJ/CPF <?php echo $retornoOportunidade->CnpjCpf;?>, residente e domiciliado em <?php echo $retornoOportunidade->EnderecoArea;?>, Telefone Fixo <?php echo $retornoOportunidade->Telefone;?>, Celular <?php echo $retornoOportunidade->Celular;?>, e-mail <?php echo $retornoOportunidade->Email;?>, aqui denominado <strong>CONTRATANTE</strong>. <br />
<br />

<strong>DO OBJETO DO CONTRATO</strong><br />
<?php echo $retornoContrato->DoObjetoDoContrato; ?>
<br /><br />

<strong>OBRIGAÇÕES DO CONTRATANTE</strong><br />
<?php echo $retornoContrato->ObrigacoesContratante; ?>
<br /><br />

<strong>OBRIGAÇÕES DO CONTRATADO</strong><br />
<?php echo $retornoContrato->ObrigacoesContratado; ?>
<br /><br />

<strong>DO PREÇO E DAS CONDIÇÕES DE PAGAMENTO</strong><br />
<?php echo $retornoContrato->PrecoCondicoesPagamento. " R$"?>  <?php echo $retornoOportunidade->TotalOrcamentoB;?> <?php echo $retornoOportunidade->FormaPagamento?>, com prazo de <?php echo $retornoOportunidade->Prazo?>.
<br /><br />

<strong>DO INADIMPLEMENTO, DO DESCUMPRIMENTO E DA MULTA</strong><br />
<?php echo $retornoContrato->InadDescumpMulta; ?>
<br /><br/>

<strong>DA RESCISÃO IMOTIVADA</strong><br />
<?php echo $retornoContrato->RecisaoIMotivada; ?>
<br /><br/>

<strong>DO PRAZO</strong><br />
<?php echo $retornoContrato->Doprazo; ?>
<br/><br/>

<strong>DAS CONDIÇÕES GERAIS</strong><br />
<?php echo $retornoContrato->CondicoesGerais; ?>
<br /><br/>

<strong>DO FORO</strong><br />
<?php echo $retornoContrato->DoForo; ?>
<br /><br />

<img src="imagens/assinaturas.jpg" width="690" height="462" /><br />
<br />
<br />

<br />
<strong><?php echo date('d M Y'); ?> - São Paulo, SP</strong> </div>
  <img src="imagens/roda-pe.png" width="750" height="180" /> 
</div>

<!--Auxiliares para envio-->
     <input type="hidden" name="IdOportunidadeAux" id="IdOportunidadeAux" value="<?php echo $_POST['IdOportunidadeAux']; ?>" > 
      <input type="hidden" name="IdOrcamentoBAux" id="IdOrcamentoBAux"  value="<?php echo $_POST['IdOrcamentoBAux']; ?>">  


 <script type="text/javascript">
      function enviar(elem){
        if (elem == "inicio") {
          formContrato.action = "index"
          formContrato.submit();
        }
      }

    function expotarPdf(){
    formExportar.submit();
  }

    </script>


<!--DIREITA-->
</form>

<form id="formExportar" name="formExportar" method="post" action="GerarPdfContrato.php">
  <!--Auxiliares para envio-->
     <input type="hidden" name="IdOportunidadeAux2" id="IdOportunidadeAux2" value="<?php echo $IdOportunidade; ?>"> 
     <input type="hidden" name="IdOrcamentoBAux2" id="IdOrcamentoBAux2" value="<?php echo $IdOrcamentoB; ?>"> 
</form>
</body>
</html>


<?php 
    //Deleta os Pdf antigos
       $NomeArquivo = "Orçamento-Mand-".date('d-m-Y').".pdf"; 
     
          foreach (glob("*.pdf") as $filename) {
            if ($filename == $NomeArquivo) {
              unlink($filename);
            }
          }   
            
 ?>
