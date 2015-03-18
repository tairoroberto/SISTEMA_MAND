<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php// ob_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        
        <title>Mand Projetos</title>
        
    <link href="print.css" rel="stylesheet" type="text/css">

   <script type="text/javascript">
        function imprimir(){
          window.print();
          irPagina();          
        }
    </script>

</head>

<body onload="imprimir();">
<img src="img/logo.jpg" width="230" height="50" />
 <!--INICIO DO CÓDIGO DE BUSCA NO BANCO-->
   <?php 

       include('../includes/php/conexao/Conexao.class.php');
     
        
        $IdIncorporacao; 
         if (isset($_POST['IdIncorporacaoAux'])){
            $IdIncorporacao = $_POST['IdIncorporacaoAux'];
         }elseif (isset($_GET['IdIncorporacaoAux'])){
            $IdIncorporacao = $_GET['IdIncorporacaoAux'];
         }

         
          /********************************************************************************************/
          /*      Variáveis para inserção no banco de dados, insere o Responsável e a empresa         */
          /********************************************************************************************/
         
            $buscaIncorporacao = new Conexao();
            $buscaIncorporacao->conectar();
            $buscaIncorporacao->selecionarDB(); 

            $buscaIncorporacao->set("sql","SELECT  * FROM CadastraIncorporacao
                                                     WHERE IdIncorporacao = '$IdIncorporacao'");

            $retornoIncorporacao = mysql_fetch_object($buscaIncorporacao->executarQuery()); ?>



<table width="670" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" class="titulo"><h3><strong><?php echo "$retornoIncorporacao->SiglaIncorporacao"; ?> - <?php echo "$retornoIncorporacao->BairroIncorporacao"; ?></strong></h3></td>
  </tr>
  <tr>
    
    <?php if ($_POST['ckLocal'] == 1) { ?>  
      <td width="33%"><h5>Local</h5></td>
    <?php } ?>

    <td width="33%">&nbsp;</td>

    <?php if ($_POST['ckProjeto'] == 1) { ?>  
      <td width="33%"><h5>Projeto</h5></td>
    <?php } ?>

  </tr>
  <tr>

    <?php if ($_POST['ckLocal'] == 1) { ?> 
      <td width="33%"><h4><?php echo $retornoIncorporacao->LocalIncorporacao.", ".$retornoIncorporacao->NumeroIncorporacao.", ".$retornoIncorporacao->CidadeIncorporacao." - ".$retornoIncorporacao->EstadoIncorporacao; ?></h4></td>
    <?php } ?>

    <td width="33%">&nbsp;</td>

   <?php if ($_POST['ckProjeto'] == 1) { ?> 
    <td width="33%"><h4><?php echo "$retornoIncorporacao->situacao"; ?></h4></td>
   <?php } ?> 
  </tr>
  <tr>

<?php if ($_POST['ckMetragem'] == 1) { ?> 
    <td><h5>Metragem</h5></td>
<?php } ?> 

<?php if ($_POST['ckValorVenda'] == 1) { ?> 
    <td><h5>Valor Venda m²</h5></td>
<?php } ?> 

  </tr>


 <tr>
  <?php if ($_POST['ckMetragem'] == 1) { ?> 
      <td><h4><?php echo "$retornoIncorporacao->MetragemIncorporacao"; ?>m²</h4></td>
  <?php } ?> 

  <?php if ($_POST['ckValorVenda'] == 1) { ?> 
      <td><h4>R$ <?php echo "$retornoIncorporacao->ValorVendaIncorporacao"; ?></h4></td>
  <?php } ?>   
</tr>


<tr>
  <?php if ($_POST['ckZonemaneto'] == 1) { ?> 
      <td><h5>Zonemaneto Lei 13885</h5></td>
  <?php } ?> 
  <?php if ($_POST['ckCaBasico'] == 1) { ?> 
      <td><h5>C.A. Básico Lei 13885</h5></td>
  <?php } ?> 

  <?php if ($_POST['ckCaMaximo'] == 1) { ?> 
      <td><h5>C.A. Máximo Lei 13885</h5></td>
  <?php } ?>   
</tr>


<tr>
  <?php if ($_POST['ckZonemaneto'] == 1) { ?> 
      <td><h4><?php echo "$retornoIncorporacao->ZonemanetoInc13885  "; ?></h4></td>
  <?php } ?> 
  <?php if ($_POST['ckCaBasico'] == 1) { ?> 
      <td><h4><?php echo "$retornoIncorporacao->CaBasicoInc13885  "; ?></h4></td>
  <?php } ?> 

  <?php if ($_POST['ckCaMaximo'] == 1) { ?> 
      <td><h4>R$ <?php echo "$retornoIncorporacao->CaMaximoInc13885 "; ?></h4></td>
  <?php } ?>   
</tr>

<tr>
  <?php if ($_POST['ckZonemaneto2'] == 1) { ?> 
      <td><h5>Zonemaneto Lei 16050</h5></td>
  <?php } ?> 
  <?php if ($_POST['ckCaBasico2'] == 1) { ?> 
      <td><h5>C.A. Básico Lei 16050</h5></td>
  <?php } ?> 

  <?php if ($_POST['ckCaMaximo2'] == 1) { ?> 
      <td><h5>C.A. Máximo Lei 16050</h5></td>
  <?php } ?>   
</tr>


<tr>
  <?php if ($_POST['ckZonemaneto2'] == 1) { ?> 
      <td><h4><?php echo "$retornoIncorporacao->ZonemanetoInc16050  "; ?></h4></td>
  <?php } ?> 
  <?php if ($_POST['ckCaBasico2'] == 1) { ?> 
      <td><h4><?php echo "$retornoIncorporacao->CaBasicoInc16050  "; ?></h4></td>
  <?php } ?> 

  <?php if ($_POST['ckCaMaximo2'] == 1) { ?> 
      <td><h4>R$ <?php echo "$retornoIncorporacao->CaMaximoInc16050 "; ?></h4></td>
  <?php } ?>   
</tr>


<tr>
  <?php if ($_POST['ckAtividade'] == 1) { ?> 
      <td><h5>Atividade</h5></td>
  <?php } ?> 

  <?php if ($_POST['ckRegiao'] == 1) { ?> 
      <td width="33%"><h5>Região</h5></td>
  <?php } ?> 
</tr>


<tr>
  <?php if ($_POST['ckAtividade'] == 1) { ?> 
      <td><h4><?php echo "$retornoIncorporacao->AtividadeIncorporacao"; ?></h4></td>
  <?php } ?> 

  <?php if ($_POST['ckRegiao'] == 1) { ?> 
    <td width="33%"><h4><?php echo "$retornoIncorporacao->BairroIncorporacao"; ?></h4></td>
  <?php } ?> 
</tr>



<?php if ($_POST['ckMapa'] == 1) { ?> 
  <?php 
    if ($retornoIncorporacao->ImagemMapaIncorporacao != null) { 
      if (file_exists("../includes/php/fotos/incorporacao/".$retornoIncorporacao->ImagemMapaIncorporacao)) { ?>
          <tr>
            <td colspan="3"><img src="../includes/php/fotos/incorporacao/<?php echo $retornoIncorporacao->ImagemMapaIncorporacao; ?>" width="670" height="235" /></td>
          </tr>
        <?php }  ?>
    <?php }  ?>
<?php } ?> 


  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>



<?php if ($_POST['ckImagem1'] == 1) { ?> 
  <?php if ($retornoIncorporacao->Imagem1 != null) { ?>
    <table width="670" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" class="titulo"><h3><strong><?php echo "$retornoIncorporacao->TituloFoto1"; ?></strong></h3></td>
      </tr>  
      <tr>
        <td colspan="3">
        <?php if ($retornoIncorporacao->Imagem1 != null) {
                    echo "<img src='../includes/php/fotos/incorporacao/".$retornoIncorporacao->Imagem1."' width='670' height='235' />";
                  }else{
                    echo "";
                  }  ?>        
        </td>
      </tr>  
    </table>
  <?php }  ?>
<?php } ?> 

<?php if ($_POST['ckImagem2'] == 1) { ?> 
  <?php if ($retornoIncorporacao->Imagem2 != null) { ?>
    <table width="670" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" class="titulo"><h3><strong><?php echo "$retornoIncorporacao->TituloFoto2"; ?></strong></h3></td>
      </tr>  
      <tr>
        <td colspan="3">
        <?php if ($retornoIncorporacao->Imagem2 != null) {
                    echo "<img src='../includes/php/fotos/incorporacao/".$retornoIncorporacao->Imagem2."' width='670' height='235' />";
                  }else{
                    echo "";
                   }  ?>    
        </td>
      </tr>  
    </table>
  <?php }  ?>
<?php } ?> 


<?php if ($_POST['ckImagem3'] == 1) { ?> 
  <?php if ($retornoIncorporacao->Imagem3 != null) { ?>
    <table width="670" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" class="titulo"><h3><strong><?php echo "$retornoIncorporacao->TituloFoto3"; ?></strong></h3></td>
      </tr>  
      <tr>
        <td colspan="3">
        <?php if ($retornoIncorporacao->Imagem3 != null) {
                    echo "<img src='../includes/php/fotos/incorporacao/".$retornoIncorporacao->Imagem3."' width='670' height='235' />";
                  }else{
                    echo "";
                  }  ?>    
        </td>
      </tr>  
    </table>
  <?php }  ?>
<?php } ?> 


<?php if ($_POST['ckImagem4'] == 1) { ?> 
  <?php if ($retornoIncorporacao->Imagem4 != null) { ?>
    <table width="670" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" class="titulo"><h3><strong><?php echo "$retornoIncorporacao->TituloFoto4"; ?></strong></h3></td>
      </tr>  
      <tr>
        <td colspan="3">
        <?php if ($retornoIncorporacao->Imagem4 != null) {
                    echo "<img src='../includes/php/fotos/incorporacao/".$retornoIncorporacao->Imagem4."' width='670' height='235' />";
                  }else{
                    echo "";
                  }  ?>    
        </td>
      </tr>  
    </table>
  <?php }  ?>
<?php } ?> 



<?php if ($_POST['ckImagem5'] == 1) { ?> 
  <?php if ($retornoIncorporacao->Imagem5 != null) { ?>
    <table width="670" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" class="titulo"><h3><strong><?php echo "$retornoIncorporacao->TituloFoto5"; ?></strong></h3></td>
      </tr>  
      <tr>
        <td colspan="3">
        <?php if ($retornoIncorporacao->Imagem5 != null) {
                    echo "<img src='../includes/php/fotos/incorporacao/".$retornoIncorporacao->Imagem5."' width='670' height='235' />";
                  }else{
                    echo "";
                  }  ?>        
        </td>
      </tr>  
    </table>
  <?php }  ?>
<?php } ?> 



<?php if ($_POST['ckImagem6'] == 1) { ?> 
  <?php if ($retornoIncorporacao->Imagem6 != null) { ?>
    <table width="670" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" class="titulo"><h3><strong><?php echo "$retornoIncorporacao->TituloFoto6"; ?></strong></h3></td>
      </tr>  
      <tr>
        <td colspan="3">
        <?php if ($retornoIncorporacao->Imagem6 != null) {
                    echo "<img src='../includes/php/fotos/incorporacao/".$retornoIncorporacao->Imagem6."' width='670' height='235' />";
                  }else{
                    echo "";
                  }  ?>        
        </td>
      </tr>  
    </table>
  <?php }  ?>
<?php } ?> 




<?php if ($_POST['ckDadosAdicionais'] == 1) { ?> 
<table width="670" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="7" class="titulo"><h3><strong>Dados Adicionais</strong></h3></td>
  </tr>

<tr>
    <td width="33%"><h5>Nome Proprietário</h5></td>
    <td width="33%">&nbsp;</td>
    <td width="33%"><h5>Tel. Proprietário</h5></td>
  </tr>
  <tr>
    <td width="33%"><h4><?php echo "$retornoIncorporacao->NomeProprietarioIncorporacao"; ?></h4></td>
    <td width="33%">&nbsp;</td>
    <td width="33%"><h4><?php echo "$retornoIncorporacao->TelProprietarioIncorporacao"; ?></h4></td>
  </tr>
  <tr>
    <td><h5>E-mail Proprietário</h5></td>
    <td><h5>Nome Corretor</h5></td>
    <td><h5>Tel. Corretor</h5></td>
  </tr>
  <tr>
    <td><h4><?php echo "$retornoIncorporacao->EmailProprietarioIncorporacao"; ?></h4></td>
    <td><h4><?php echo "$retornoIncorporacao->NomeCorreteorIncorpotacao"; ?></h4></td>
    <td><h4><?php echo "$retornoIncorporacao->TelefoneCorretorIncorporacao"; ?></h4></td>
  </tr>
  <tr>
    <td><h5>E-mail Corretor</h5></td>

  <?php if ($_POST['ckDocumentacao'] == 1) { ?> 
      <td><h5>Documentação</h5></td>
  <?php } ?> 

  </tr>
  <tr>
    <td><h4><?php echo "$retornoIncorporacao->EmailCorretorIncorporacao"; ?></h4></td>

    <?php if ($_POST['ckDocumentacao'] == 1) { ?> 
       <td><h4><?php echo "$retornoIncorporacao->DocumentacaoIncorporacao"; ?></h4></td>
    <?php } ?> 

  </tr>

</table>
<?php } ?> 


<?php if ($_POST['ckHistorico'] == 1) { ?> 
<table width="670" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="7" class="titulo"><h3><strong>Histórico</strong></h3></td>
  </tr>

  <tr>
    <td width="20%"><h4>Data</h4></td>
    <td width="33%"><h4>Descrição</h4></td>
  </tr>
    <?php
         /********************************************************************************************/
        /*      Variáveis para inserção no banco de dados, busca o hitorico da Incorporação         */
       /********************************************************************************************/
                                           
        $buscaHistoricoIncorporacao = new Conexao();
        $buscaHistoricoIncorporacao->conectar();
        $buscaHistoricoIncorporacao->selecionarDB(); 

        $buscaHistoricoIncorporacao->set("sql","SELECT  * FROM HistoricoIncorporacao
        WHERE IdIncorporacao = '$IdIncorporacao'");

        $query3 = $buscaHistoricoIncorporacao->executarQuery();
        while($retornoHistoricoIncorporacao = mysql_fetch_object($query3)) { ?>
                                                    
            <tr>  
            <td><h4><?php echo "$retornoHistoricoIncorporacao->DataHistoricoIncorporacao"; ?></h4></td>
            <td><h4><?php echo "$retornoHistoricoIncorporacao->DescricaoHistoricoIncorporacao"; ?></h4></td>
            </tr>
    <?php } ?>

</table>
<?php } ?> 

</body>
<script type="text/javascript">
  function irPagina(){
     window.location.href = "http://mandprojetos.com.br/sistema/incorporacao-visualizar.php?IdIncorporacaoAux=<?php echo $IdIncorporacao;?>";
  }
</script>
</html>


<?php
/*
 $content = ob_get_contents();
    include('../includes/php/conexao/MPDF57/mpdf.php');
    ini_set("memory_limit","1G");

    $stylesheet1 = file_get_contents("print.css");
   
   
   //instancia a nova classe do Mpdf
   $mpdf=new mPDF('pt','A4',3,'',8,8,5,14,9,9,'P');
   // Passa o css para a classe
   $mpdf->allow_charset_conversion=true;
   // permite a conversao (opcional)
   $mpdf->charset_in='UTF-8';
   //seta a página como pagina completa
   $mpdf->SetDisplayMode('fullpage');

   // converte todo o PDF para utf-8
   $mpdf->WriteHTML($stylesheet1,1);
   
   //imprime nossa variável em PDF
   $mpdf->WriteHTML($content,2);
   //Mostra a saída como download
   //
   $NomeArquivo = "Pdf-Incorporação-".$IdIncorporacao."-".date('d-m-Y').".pdf";
   $mpdf->Output($NomeArquivo);
   
  header("Location: http://mandprojetos.com.br/sistema/incorporacao-visualizar.php?IdIncorporacaoAux=".$IdIncorporacao);
*/
?>
