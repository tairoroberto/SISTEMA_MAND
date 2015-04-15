<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Mand Projetos - Orçamento</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../sistema/includes/js/ValidaCampos.js"></script>

<!--Mascara para inputs-->
<script src="../sistema/assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="../sistema/assets/plugins/jquery-mask/jquery.maskedinput.js"></script>
<script type="text/javascript" src="../sistema/assets/plugins/jquery-mask/jquery.mask.js"></script>



<script type="text/javascript">

  function mudaMascaraCnpj(){
    if (formAceitar.radioCnpjCpf.value == "CNPJ") {
     $("#CnpjCpf").mask("99.999.999/9999-99");
     $("#CnpjCpf").val("");
     $("#CnpjCpf").focus(); 
   }else{    
    $("#CnpjCpf").mask("999.999.999-99"); 
    $("#CnpjCpf").val("");  
    $("#CnpjCpf").focus(); 
   }

  }

</script>
</head>

<body onload="mudaMascaraCnpj();">
<form id="formAceitar" name="formAceitar" method="post" action="contrato">

<!--ESQUERDA-->
<div id="col-esq">
	
    <div id="esq-logo" align="center"><a href="#" onclick="enviar('inicio');"><img src="imagens/logo.png" width="169" height="169" /></a></div>
<?php
    if (($_POST['IdOportunidadeAux']) && ($_POST['IdOrcamentoBAux'])) {

    $IdOportunidade = $_POST['IdOportunidadeAux'];
    $IdOrcamentoB = $_POST['IdOrcamentoBAux'];

/********************************************************************************************/
/*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
/********************************************************************************************/
include ('../sistema/includes/php/conexao/Conexao.class.php');

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

     <?php $cont++; } }?>

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
    
</div>
<!--ESQUERDA-->
<?php $cpf = $retornoOportunidade->CnpjCpf;?>


<!--DIREITA-->
<div id="col-dir">
 <script type="text/javascript">
      function enviar(elem){
        if (elem == "inicio") {
          formAceitar.action = "index"
          formAceitar.submit();
        }else if(elem == "contrato"){
          var retornoCnpjCpf = "<?php echo $cpf;?>";
          if (formAceitar.CnpjCpf.value != retornoCnpjCpf) {
            alert("CNPJ/CPF inválido");
            formAceitar.CnpjCpf.value = "";
            formAceitar.CnpjCpf.focus();
            exit();
          }else{         
            formAceitar.submit();
          }
        }
      }


      function Entrar() {  
      if( event.keyCode==13 ) { 
         var retornoCnpjCpf = "<?php echo $cpf;?>";
          if (formAceitar.CnpjCpf.value != retornoCnpjCpf) {
              alert("CNPJ/CPF inválido");
              formAceitar.action = "aceitar"
              formAceitar.submit();
              exit(); 
         }else{            
           enviar("contrato");
           
         }   
      }  
   }

    </script>
	
    <div id="dir-tit" class="tit">CADASTRO</div>
    
  <div id="dir-aceitar1">
    	<div id="dir-linha-dados" class="open-20">Entre com o CPF/CNPJ para confirmar.</div>
    <div id="dir-linha-form1">
    	<table width="100%" height="100%" border="0" cellpadding="2" class="open-15">
  <tr>
    <td width="20%"> 

      <div class="radio">
        <label>
          <input type="radio" name="radioCnpjCpf" id="radioCnpjCpf" value="CPF" checked="checked" onchange="mudaMascaraCnpj();">
          Cpf
        </label>
        <label>
          <input type="radio" name="radioCnpjCpf" id="radioCnpjCpf" value="CNPJ" onchange="mudaMascaraCnpj();">
          Cnpj
        </label>
      </div>
    </td>

    <td width="84%"><input name="CnpjCpf" id="CnpjCpf" type="text"  style="width:300px;" class="open-15" onkeypress="Entrar();" ></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left"><a href="#" onclick="enviar('contrato');" ><img src="imagens/btn-entrar.png" width="198" height="33"  /></a></td>
  </tr>
      </table>
    </div>
       
    
    
  </div>
  
  
  
  
  
  <div id="dir-aceitar2">
    
    
    <!--Auxiliares para envio-->
     <input type="hidden" name="IdOportunidadeAux" id="IdOportunidadeAux" value="<?php echo $_POST['IdOportunidadeAux']; ?>" > 
      <input type="hidden" name="IdOrcamentoBAux" id="IdOrcamentoBAux"  value="<?php echo $_POST['IdOrcamentoBAux']; ?>">        
    
    
  </div>
  
  
  <img src="imagens/roda-pe.png" width="750" height="180" /> 
</div>
<!--DIREITA-->
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

   //Deleta os Pdf antigos
     $NomeArquivo = "Contrato-Mand-".date('d-m-Y').".pdf";
   
        foreach (glob("*.pdf") as $filename) {
          if ($filename == $NomeArquivo) {
            unlink($filename);
          } 
       }  

 ?>