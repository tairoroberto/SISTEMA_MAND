<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Mand Projetos - Orçamento</title>
<link href="style.css" rel="stylesheet" type="text/css" />


<script type="text/javascript">
  function enviar(elem){
        if (elem == "inicio") {
          formRejeitar.action = "index"
          formRejeitar.submit();
        }
      } 

    function escondeDiv() {
      
       if (formRejeitar.RadioGroup1_0.value == "Os valores estão acima do que planejei") {  
          document.getElementById("observacaoEspe").value = "";    
          document.getElementById("observacaoOutros").value = "";    
          document.getElementById("divValorMente").style.display = "block";   
          document.getElementById("divOrcamento").style.display = "none";    
          document.getElementById("divOutros").style.display = "none";              

       }else if (formRejeitar.RadioGroup1_0.value == "A especificações do orçamento não atendem o que necessito") { 
          document.getElementById("observacaoValor").value = ""; 
          document.getElementById("observacaoOutros").value = "";            
          document.getElementById("divOrcamento").style.display = "block";   
          document.getElementById("divValorMente").style.display = "none"; 
          document.getElementById("divOutros").style.display = "none";           

       }else if (formRejeitar.RadioGroup1_0.value == "Outros") {   
          document.getElementById("observacaoValor").value = "";   
          document.getElementById("observacaoEspe").value = "";         
          document.getElementById("divOutros").style.display = "block"; 
          document.getElementById("divValorMente").style.display = "none";   
          document.getElementById("divOrcamento").style.display = "none";

       }else{
          document.getElementById("divOutros").style.display = "none"; 
          document.getElementById("divValorMente").style.display = "none";   
          document.getElementById("divOrcamento").style.display = "none";
       }
    }
</script>
  

</head>

<body onload="escondeDiv();">
 <form id="formRejeitar" name="formRejeitar" method="post" action="php/RejeitarProposta.php">
<!--ESQUERDA-->
<div id="col-esq">
    <div id="esq-logo" align="center"><a href="#" onclick="enviar('inicio');"><img src="imagens/logo.png" width="169" height="169" /></a></div>
</div>
<!--ESQUERDA-->


<!--DIREITA-->
<div id="col-dir">
	
    <div id="dir-tit" class="tit">REJEITAR PROPOSTA</div>
    
  <div id="dir-rejeitar">
    	<div id="dir-linha-dados" class="open-20">Qual foi o motivo que te levou a rejeitar nossa proposta?</div>
        
        <div id="dir-linha-dados-rejeitar" class="open-15">
			        <input type="radio" name="motivo" value="Os valores estão acima do que planejei" id="RadioGroup1_0" checked="true" onchange="escondeDiv();">
              Os valores estão acima do que planejei.
              <div id="divValorMente">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qual o valor que tinha em mente?<br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="observacaoValor" id="observacaoValor" type="text" class="open-13" id="fdfdf" style="width:500px;" />
              </div>

        </div>

        <div id="dir-linha-dados-rejeitar" class="open-15">
              <input type="radio" name="motivo" value="A especificações do orçamento não atendem o que necessito" id="RadioGroup1_0" onchange="escondeDiv();">
              A especificações do orçamento não atendem o que necessito.
              <div id="divOrcamento">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O que você necessita? <br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="observacaoEspe" id="observacaoEspe" type="text" class="open-13" id="fdfdf" style="width:500px;" />
              </div>
        </div>

        <div id="dir-linha-dados-rejeitar" class="open-15">
              <input type="radio" name="motivo" value="Outros" id="RadioGroup1_0" onchange="escondeDiv();">
              Outros.
              <div id="divOutros">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Descreva<br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="observacaoOutros" id="observacaoOutros" type="text" class="open-13" id="fdfdf" style="width:500px;" />
              </div>
        </div>
              
      <!--Auxiliares para envio-->
     <input type="hidden" name="IdOportunidadeAux" id="IdOportunidadeAux" value="<?php echo $_POST['IdOportunidadeAux']; ?>" > 
      <input type="hidden" name="IdOrcamentoBAux" id="IdOrcamentoBAux"  value="<?php echo $_POST['IdOrcamentoBAux']; ?>">      
  </div>
    
  <div id="dir-btn2" align="left" class="open-13">
    
    <br>
    <br>
    <br>
    <br>
    <br />
    <br />
    <a href="#"><img src="imagens/btn-enviar.png" width="210" height="46" onclick="document.forms[0].submit();" /></a> 
    </div>
    
<img src="imagens/roda-pe.png" width="750" height="180" /> 
</div>
<!--DIREITA-->
</form>
</body>
</html>
