<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Mand Projetos - Orçamento</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
  function enviar(form){
    if (form == 'aceitar') {
      formIndex.action = "aceitar"
      formIndex.submit();
    }
    if (form == 'rejeitar') {
      formIndex.action = "rejeitar"
      formIndex.submit();
    }
  }

  function expotarPdf(){
    formExportar.submit();
  }

</script>
<!-- END CSS TEMPLATE -->
</head>

<body>
<form id="formIndex" name="formIndex" method="post" action="aceitar">

<!--ESQUERDA-->
<div id="col-esq">
<div id="esq-logo" align="center"><img src="imagens/logo.png" width="169" height="169" /></div>
 <?php
    $IdOportunidade;
    $IdOrcamentoB;
    $valorDosServicos = 0;

 if (isset($_GET['IdOportunidade'],$_GET['IdOrcamentoB'])){
      $IdOportunidade = $_GET['IdOportunidade'];
      $IdOrcamentoB = $_GET['IdOrcamentoB'];
 }else{
      $IdOportunidade = $_POST['IdOportunidadeAux'];
      $IdOrcamentoB = $_POST['IdOrcamentoBAux'];
 }



  if (($IdOportunidade != null) && ($IdOrcamentoB != null)) {


/********************************************************************************************/
/*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
/********************************************************************************************/
include ('../sistema/includes/php/conexao/Conexao.class.php');

      $buscaOportunidade = new Conexao();
      $buscaOportunidade->conectar();
      $buscaOportunidade->selecionarDB(); 
      


      $buscaOportunidade->set('sql',"SELECT CadastraOrcamentoB.*, Oportunidade.* 
                                     FROM Oportunidade
                                     INNER JOIN CadastraOrcamentoB
                                     ON CadastraOrcamentoB.IdOportunidade = $IdOportunidade AND 
                                        CadastraOrcamentoB.IdOrcamentoB = $IdOrcamentoB ");

      $retornoOportunidade = mysql_fetch_object($buscaOportunidade->executarQuery()); 


                          
      /**********************************************************************************************/
      /*   Variáveis para a busca no banco, retorna os dados da oportunidade castradas             */
      /********************************************************************************************/                 
      $buscarServicosOrcamentoB = new Conexao();
      $buscarServicosOrcamentoB->conectar();
      $buscarServicosOrcamentoB->selecionarDB(); 
      $cont = 1;
                                                                                        
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

     <?php   $cont++;   } }?>

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
     
     <div id="esq-pdf" onclick="expotarPdf();"> <a href="#"><img src="imagens/pdf.png" width="220" height="41" /></a> </div>
    
    
</div>
<!--ESQUERDA-->




<!--DIREITA-->
<div id="col-dir">
	
    <div id="dir-tit" class="tit">ORÇAMENTO</div>
    
  <div id="dir-dados-pessoais">
    	<div id="dir-linha-dados" class="open-20">DADOS DO CLIENTE</div>
        <div id="dir-linha-dados" class="open-15">Nome: <?php echo $retornoOportunidade->NomeContato;?></div>
        <div id="dir-linha-dados" class="open-15">Telefone: <?php if (($retornoOportunidade->Telefone != "") && ($retornoOportunidade->Celular != "")) {
                                                                        echo $retornoOportunidade->Telefone." - ".$retornoOportunidade->Celular;
                                                                  }elseif ($retornoOportunidade->Telefone != "") {
                                                                        echo $retornoOportunidade->Telefone;
                                                                  }else{
                                                                    echo $retornoOportunidade->Celular;
                                                                  }
                                                                ?>
        </div>
        <div id="dir-linha-dados" class="open-15">E-mail: <?php echo $retornoOportunidade->Email;?></div>
    </div>

  <!--Busca os serviços co  a descrção-->
    <?php 
    $cont = 1;
    $valorDosServicos = 0;
    $query= $buscarServicosOrcamentoB->executarQuery();
      while($retornoServicosOrcamentoB = mysql_fetch_object($query)) {  ?> 
    
     <div id="dir-tit-serv" class="open-20-bra"><?php echo $cont;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $retornoServicosOrcamentoB->TituloServico;?></div>
     <div id="dir-linha-serv" class="open-15" align="justify"> <?php echo $retornoServicosOrcamentoB->ExplicacaoServico;?>  </div>

     <?php $cont++; $valorDosServicos += $retornoServicosOrcamentoB->Valor; } ?>

    

      <div id="dir-dados-pessoais">
    	<div id="dir-linha-dados" class="open-20">VALORES</div>
        <div id="dir-linha-dados" class="open-15">Serviços R$ <?php echo $retornoOportunidade->TotalServicos;?></div>
        <div id="dir-linha-dados" class="open-15">Taxas R$ <?php echo $retornoOportunidade->Taxas;?></div>
        <div id="dir-linha-dados" class="open-15">TOTAL <strong>R$ <?php echo $retornoOportunidade->TotalOrcamentoB;?></strong></div>
      
    </div>
    
      <div id="dir-dados-pessoais">
    	<div id="dir-linha-dados" class="open-20">FORMA DE PAGAMENTO</div>
        <div id="dir-linha-dados" class="open-15"><?php echo $retornoOportunidade->FormaPagamento;?></div>
        <div id="dir-linha-dados" class="open-20">PRAZO</div>
        <div id="dir-linha-dados" class="open-15"><?php echo $retornoOportunidade->Prazo;?></div>
        <div id="dir-linha-dados" class="open-15"><?php echo $retornoOportunidade->ComentariosOrcamento;?>- <strong>Data: <?php echo $retornoOportunidade->DataOrcamentoB;?></strong></div>
        


  </div>
    
 <div id="dir-btn" align="left">
   <a href="#"><img src="imagens/btn-rejeitar.png" width="210" height="46" onclick="enviar('rejeitar')" /></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="#"><img src="imagens/btn-aceitar.png" width="210" height="46" onclick="enviar('aceitar')"  /></a>

     

     <!--Auxiliares para envio-->
     <input type="hidden" name="IdOportunidadeAux" id="IdOportunidadeAux" value="<?php echo $IdOportunidade; ?>"> 
     <input type="hidden" name="IdOrcamentoBAux" id="IdOrcamentoBAux" value="<?php echo $IdOrcamentoB; ?>">    
     


    <p class="open-13"> *Clique no botão acima se desejar fechar negócio e preencher o cadastro com seus dados. Após o cadastro um contrato será gerado automaticamente. Qualquer dúvida entre em contato conosco (11) 3578-0840</p>
 </div>
 
<img src="imagens/roda-pe.png" width="750" height="180" /> 
</div>
<!--DIREITA-->
</form>
<form id="formExportar" name="formExportar" method="post" action="pdfOrcamento.php">
  <!--Auxiliares para envio-->
     <input type="hidden" name="IdOportunidadeAux2" id="IdOportunidadeAux2" value="<?php echo $IdOportunidade; ?>"> 
     <input type="hidden" name="IdOrcamentoBAux2" id="IdOrcamentoBAux2" value="<?php echo $IdOrcamentoB; ?>"> 
</form>

</body>
</html>
