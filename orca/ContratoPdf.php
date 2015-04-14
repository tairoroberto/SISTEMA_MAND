<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Mand Projetos - Orçamento</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="formContrato" name="formContrato" method="post" action="EnviaContrato">

<!--ESQUERDA-->
<!-- <div id="col-esq">
	
    <div id="esq-logo" align="center"><a href="#" onclick="enviar('inicio');"><img src="imagens/logo.png" width="169" height="169" /></a></div>
     -->
<?php
    if (($_GET['IdOportunidadeAux2']) && ($_GET['IdOrcamentoBAux2'])) {

    $IdOportunidade = $_GET['IdOportunidadeAux2'];
    $IdOrcamentoB = $_GET['IdOrcamentoBAux2'];

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

<!-- 
     <div id="esq-serv" align="left" class="ver-azu">
        <span class="ver-bra"><?php echo $cont;?> </span> <?php echo $retornoServicosOrcamentoB->TituloServico;?><br />
        <?php 

         $Valor2 = $retornoServicosOrcamentoB->Valor;  
         $Valor2 = str_replace("." , '' , $Valor2 );
         $Valor2 = str_replace("," , '.' , $Valor2 );
         $Valor2 += 0; 

        ?>
        Valor: <span class="ver-bra">R$ <?php echo number_format($Valor2, 2, ',', '.');?></span>

     </div>

     <?php $cont++; 

     $valorServicosAux = str_replace("." , '' , $retornoServicosOrcamentoB->Valor);
     $valorServicosAux = str_replace("," , '.' , $valorServicosAux );
     $valorDosServicos += $valorServicosAux; 


     } }?>

     <div id="esq-serv" align="left" class="ver-azu">
      VALOR SERVIÇOS  <br />
      <span class="ver-bra">R$ <?php echo number_format($valorDosServicos, 2, ',', '.');?></span>      
     </div>

     <div id="esq-serv" align="left" class="ver-azu">
      VALOR TAXAS  <br />
      <span class="ver-bra">R$ <?php
      $taxas=0;
      $taxasAux;
      $taxasAux = str_replace("." , '' , $retornoOportunidade->Taxas);
      $taxasAux = str_replace("," , '.' , $valorServicosAux );
      $taxas += $taxasAux; 

       echo number_format($taxas, 2, ',', '.');


       ?></span>      
     </div>

    <div id="esq-serv" align="left" class="ver-azu">
      VALOR TOTAL  <br />
      <span class="ver-bra">R$ <?php 

      $totalB=0;
      $totalAux;
      $totalAux = str_replace("." , '' , $retornoOportunidade->TotalOrcamentoB);
      $totalAux = str_replace("," , '.' , $totalAux );
      $totalB += $totalAux; 

       echo number_format($totalB, 2, ',', '.');


      ?></span>
     </div>
     

  
</div> -->
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

<?php 
  //pega os dados do contrato faz um explode para separar a parte do valor do orçamento
  $contrato = explode('"#Aqui não deve ser modificado, dados serão preenchidos do orcamento#"', $retornoContrato->DadosContrato);
 ?>

<!-- <strong>DO PREÇO E DAS CONDIÇÕES DE PAGAMENTO</strong> -->
<br />
<?php echo $contrato[0]. " R$"?>  <?php echo $retornoOportunidade->TotalOrcamentoB;?> <?php echo $retornoOportunidade->FormaPagamento?>, com prazo de <?php echo $retornoOportunidade->Prazo?>.
<?php echo $contrato[1]; ?>
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
          formContrato.action = "index.php"
          formContrato.submit();
        }
      }

    function expotarPdf(){
    formExportar.submit();
  }

    </script>


<!--DIREITA-->
</form>

<form id="formExportar" name="formExportar" method="post" action="pdfOrcamento.php">
  <!--Auxiliares para envio-->
     <input type="hidden" name="IdOportunidadeAux2" id="IdOportunidadeAux2" value="<?php echo $IdOportunidade; ?>"> 
     <input type="hidden" name="IdOrcamentoBAux2" id="IdOrcamentoBAux2" value="<?php echo $IdOrcamentoB; ?>"> 
</form>
</body>
</html>
