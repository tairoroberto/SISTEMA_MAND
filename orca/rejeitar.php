<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Mand Projetos - Orçamento</title>
<link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>
 <form id="formRejeitar" name="formRejeitar" method="post" action="php/RejeitarProposta">
<!--ESQUERDA-->
<div id="col-esq">
<script type="text/javascript">
  function enviar(elem){
        if (elem == "inicio") {
          formRejeitar.action = "index"
          formRejeitar.submit();
        }
      }
</script>
	
    <div id="esq-logo" align="center"><a href="#" onclick="enviar('inicio');"><img src="imagens/logo.png" width="169" height="169" /></a></div>
</div>
<!--ESQUERDA-->


<!--DIREITA-->
<div id="col-dir">
	
    <div id="dir-tit" class="tit">REJEITAR PROPOSTA</div>
    
  <div id="dir-rejeitar">
    	<div id="dir-linha-dados" class="open-20">Qual foi o motivo que te levou a rejeitar nossa proposta?</div>
        <div id="dir-linha-dados" class="open-15">
			 <input type="radio" name="motivo" value="Os valores estão acima do que planejei" id="RadioGroup1_0" checked="true" />
              Os valores estão acima do que planejei
        </div>
        <div id="dir-linha-dados" class="open-15">
        <input type="radio" name="motivo" value="A especificações do orçamento não atendem o que necessito" id="RadioGroup1_0" />
              A especificações do orçamento não atendem o que necessito
    </div>
        <div id="dir-linha-dados" class="open-15">
        <input type="radio" name="motivo" value="O prazo não me atende" id="RadioGroup1_0" />
              O prazo não me atende
    </div>
              
      <!--Auxiliares para envio-->
     <input type="hidden" name="IdOportunidadeAux" id="IdOportunidadeAux" value="<?php echo $_POST['IdOportunidadeAux']; ?>" > 
      <input type="hidden" name="IdOrcamentoBAux" id="IdOrcamentoBAux"  value="<?php echo $_POST['IdOrcamentoBAux']; ?>">      
    </div>
    
  <div id="dir-btn2" align="left" class="open-13">
    
    Qual o valor que tinha em mente?<br />
            <input name="observacao" type="text" class="open-13" id="fdfdf" style="width:500px;" />
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
