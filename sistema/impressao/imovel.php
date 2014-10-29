<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        
        <title>Mand Projetos</title>
        
    <link href="print.css" rel="stylesheet" type="text/css">
</head>

<body>
<img src="img/logo.jpg" width="230" height="50" />
   <?php 
       include('../includes/php/conexao/Conexao.class.php');
       $IdImovel; 
             if (isset($_POST['imovelAux'])){
                $IdImovel = $_POST['imovelAux'];
             }elseif (isset($_GET['imovelAux'])) {
               $IdImovel = $_GET['imovelAux'];
             }
       
        /********************************************************************************************/
        /*      Variáveis para inserção no banco de dados, insere o Responsável e a empresa         */
        /********************************************************************************************/
       
          $buscaImovel = new Conexao();
          $buscaImovel->conectar();
          $buscaImovel->selecionarDB(); 

          $buscaImovel->set('sql','SELECT CadastraImovel.*,RazaoSocial, Nome 
                                   FROM CadastroHolding,CadastroRequerente
                                   INNER JOIN CadastraImovel
                                   WHERE CadastroHolding.IdEmpresa = CadastraImovel.IdEmpresa AND
                                         CadastroRequerente.IdRequerente = CadastraImovel.IdRequerente AND
                                         IdImovel = '.$IdImovel.' ');

          $retornoImovel = mysql_fetch_object($buscaImovel->executarQuery());  ?>



<?php if ($_POST['ckRequerente'] == 1) { ?>  

<table width="670" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" class="titulo"><h3><strong>DADOS INICIAS</strong></h3></td>
  </tr>
  <tr>
    <td width="33%"><h5>Data criação</h5></td>
    <td width="33%">&nbsp;</td>
    <td width="33%"><h5>COD.</h5></td>
  </tr>
  <tr>
    <td width="33%"><h4><?php echo $retornoImovel->DataEmissao; ?></h4></td>
    <td width="33%">&nbsp;</td>
    <td width="33%"><h4><?php echo $retornoImovel->CodigoImovel; ?></h4></td>
  </tr>
  <tr>
    <td><h5>Holding</h5></td>
    <td><h5>Requerente</h5></td>
    <td><h5>Nome Exibição</h5></td>
  </tr>
  <tr>
    <td><h4><?php echo $retornoImovel->RazaoSocial; ?></h4></td>
    <td><h4><?php echo $retornoImovel->Nome; ?></h4></td>
    <td><h4><?php echo $retornoImovel->NomeExibicao; ?></h4></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>

<?php } ?>



<?php if ($_POST['ckDadosCadastrais'] == 1) { ?>  
<table width="670" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" class="titulo"><h3><strong>DADOS CADASTRAIS</strong></h3></td>
  </tr>
  <tr>
    <td width="33%"><h5>Contribuinte</h5></td>
    <td width="33%"><h5>Nome Contribuinte</h5></td>
    <td width="33%"><h5>CPF/CNPJ</h5></td>
  </tr>
  <tr>
    <td width="33%"><h4><?php echo $retornoImovel->NumeroContribuinte; ?></h4></td>
    <td width="33%"><h4><?php echo $retornoImovel->NomeContribuinte; ?></h4></td>
    <td width="33%"><h4><?php echo $retornoImovel->CnpjCpf; ?></h4></td>
  </tr>
  <tr>
    <td><h5>Local do Imovel</h5></td>
    <td><h5>CEP</h5></td>
    <td><h5>Codlog</h5></td>
  </tr>
  <tr>
    <td><h4><?php echo $retornoImovel->LocalImovel; ?></h4></td>
    <td><h4><?php echo $retornoImovel->CepImovel; ?></h4></td>
    <td><h4><?php echo $retornoImovel->CodLog; ?></h4></td>
  </tr>
  <tr>
    <td><h5>Area do Terreno</h5></td>
    <td><h5>Testada</h5></td>
    <td><h5>Area Construida</h5></td>
  </tr>
  <tr>
    <td><h4><?php echo $retornoImovel->AreaTerreno; ?>m²</h4></td>
    <td><h4><?php echo $retornoImovel->Testada; ?>m²</h4></td>
    <td><h4><?php echo $retornoImovel->AreaConstruida; ?>m²</h4></td>
  </tr>
  <tr>
    <td><h5>Fração Ideal</h5></td>
    <td><h5>Ano Construção</h5></td>
    <td><h5>Uso do Imovel</h5></td>
  </tr>
  <tr>
    <td><h4><?php echo $retornoImovel->FracaoIdeal; ?></h4></td>
    <td><h4><?php echo $retornoImovel->AnoConstrucao; ?></h4></td>
    <td><h4><?php echo $retornoImovel->UsoImovel; ?></h4></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>

   <?php
   if ($retornoImovel->ImagemMapa != null) { 
      if (file_exists("../includes/php/fotos/Imovel/".$retornoImovel->ImagemMapa)) { ?>
        <tr>
          <td colspan="3"><img src="../includes/php/fotos/Imovel/<?php echo $retornoImovel->ImagemMapa; ?>" width="670" height="235" /></td>
        </tr>
      <?php }  ?>
  <?php }  ?>
  
</table>

<?php } ?>

<!--AQUI-->

<?php if ($_POST['ckQuadraFiscal'] == 1) { ?>
<table width="670" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" class="titulo"><h3><strong>QUADRA FISCAL</strong></h3></td>
  </tr> 
  <tr>  
    <td colspan="3"><?php if ($retornoImovel->QuadraFiscal != null) {
                echo "<img src='../includes/php/fotos/Imovel/".$retornoImovel->QuadraFiscal."' width='670' height='235' />";
              }else{
                echo "";
                }  ?>
    </td>
  </tr>
</table>
<?php }  ?>




<?php if ($_POST['ckOutrosSql'] == 1) { ?> 
<table width="670" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="5" class="titulo"><h3><strong>OUTROS LOTES - SQL</strong></h3></td>
  </tr>
  <!-- BUSCA OUTROS LOTES-->
        <?php $buscarOutrosLotes = new Conexao();
              $buscarOutrosLotes->conectar();
              $buscarOutrosLotes->selecionarDB();
              $buscarOutrosLotes->set('sql','SELECT * FROM OutrosLotesImovel 
                                             INNER JOIN CadastraImovel   
                                             WHERE OutrosLotesImovel.IdImovel = '.$retornoImovel->IdImovel.' 
                                             GROUP BY IdOutrosLotes'); 
             $query2 = $buscarOutrosLotes->executarQuery();
             while($retornoOutrosLotes = mysql_fetch_object($query2)) { ?> 
                  <tr>
                    <td width="20%" align="center"><h5>SQL</h5></td>
                    <td width="20%" align="center"><h5>Area Terreno (m2)</h5></td>
                    <td width="20%" align="center"><h5>Area Construida (m2)</h5></td>
                    <td width="20%" align="center"><h5>Testada</h5></td>
                    <td width="20%" align="center"><h5>Matricula</h5></td>
                  </tr>
                  <tr>
                    <td width="20%" align="center"><h4><?php echo $retornoOutrosLotes->SqlOutroLotes; ?></h4></td>
                    <td width="20%" align="center"><h4><?php echo $retornoOutrosLotes->AreaTerrenoOutrosLotes;  ?></h4></td>
                    <td width="20%" align="center"><h4><?php echo $retornoOutrosLotes->AreaConstruidaOutrosLotes;  ?></h4></td>
                    <td width="20%" align="center"><h4><?php echo $retornoOutrosLotes->TestadaOutrosLotes;  ?></h4></td>
                    <td width="20%" align="center"><h4><?php echo $retornoOutrosLotes->MatriculaOutrosLotes;  ?></h4></td>
                  </tr>
          <?php  } ?>   
  </table>
<?php  } ?> 



<?php if ($_POST['ckHistorico'] == 1) { ?> 
<table width="670" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="5" class="titulo"><h3><strong>HISTÓRICO</strong></h3></td>
  </tr>
    <tr>
        <td width="20%" align="center"><h5>SQL</h5></td>
        <td width="20%" align="center"><h5>DATA/ANO</h5></td>
        <td width="20%" align="center"><h5>AREA TERRENO (m²)</h5></td>
        <td width="20%" align="center"><h5>AREA EDIFICADA (m²)</h5></td>
        <td width="20%" align="center"><h5>SITUAÇÃO</h5></td>
   </tr>
   <!-- BUSCA OUTROS LOTES-->
         <?php $buscarHistorico = new Conexao();
               $buscarHistorico->conectar();
               $buscarHistorico->selecionarDB();
               $buscarHistorico->set('sql','SELECT * FROM HistoricoImovel 
                                             INNER JOIN CadastraImovel   
                                             WHERE HistoricoImovel.IdImovel = '.$retornoImovel->IdImovel.' 
                                             GROUP BY IdHistoricoImovel'); 
               $query2 = $buscarHistorico->executarQuery();
               while($retornoHistorico = mysql_fetch_object($query2)) {  ?> 

                    
                    <tr>
                      <td width="20%" align="center"><h4><?php echo $retornoHistorico->SqlImovel;  ?></h4></td>
                      <td width="20%" align="center"><h4><?php echo $retornoHistorico->Data;  ?></h4></td>
                      <td width="20%" align="center"><h4><?php echo $retornoHistorico->AreaTerrenoHistorico;  ?></h4></td>
                      <td width="20%" align="center"><h4><?php echo $retornoHistorico->AreaEdificada;  ?></h4></td>
                      <td width="20%" align="center"><h4><?php echo $retornoHistorico->SituacaoHistorico;  ?></h4></td>
                      
                    </tr>
                <?php  } ?> 
  </table>
<?php  } ?> 


<?php if ($_POST['ckZoneamento'] == 1) { ?>
<table width="670" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" class="titulo"><h3><strong>ZONEAMENTO</strong></h3></td>
  </tr>
  <tr>
    <td width="33%"><h5>Zona</h5></td>
    <td width="33%"><h5>C.A. Básico</h5></td>
    <td width="33%"><h5>Distrito</h5></td>
  </tr>
  <tr>
    <td width="33%"><h4><?php echo $retornoImovel->Zona; ?></h4></td>
    <td width="33%"><h4><?php echo $retornoImovel->CaBasico; ?></h4></td>
    <td width="33%"><h4><?php echo $retornoImovel->Distrito; ?></h4></td>
  </tr>
  <tr>
    <td><h5>Sub Prefeitura</h5></td>
    <td><h5>C.A. Máximo</h5></td>
    <td><h5>Gabarito</h5></td>
  </tr>
  <tr>
    <td><h4><?php echo $retornoImovel->SubPrefeitura; ?></h4></td>
    <td><h4><?php echo $retornoImovel->CaMaximo; ?></h4></td>
    <td><h4><?php echo $retornoImovel->Gabarito; ?></h4></td>
  </tr>
  <tr>
    <td><h5>T.O.</h5></td>
    <td><h5>Tx Perm.</h5></td>
    <td><h5>Lag. da Via</h5></td>
  </tr>
  <tr>
    <td><h4><?php echo $retornoImovel->ToImovel; ?></h4></td>
    <td><h4><?php echo $retornoImovel->TxPerm; ?>%</h4></td>
    <td><h4><?php echo $retornoImovel->LargVia; ?></h4></td>
  </tr>
  <tr>
  <tr>
    <td><h5>Classificação da Via</h5></td>
    <td><h5>&nbsp;</h5></td>
    <td><h5>&nbsp;</h5></td>
  </tr>
  <tr>
    <td><h4><?php echo $retornoImovel->ClassificacaoVia; ?></h4></td>
    <td><h4>&nbsp;</h4></td>
    <td><h4>&nbsp;</h4></td>
  </tr>
  <tr>
    <td colspan="3"><h5>Comentários</h5></td>
  </tr>
  <tr>
    <td colspan="3"><h5><?php echo $retornoImovel->ComentariosZoneamento; ?></h5></td>
  </tr>
  
</table>

<?php } ?>



<?php if ($_POST['ckOperacaoUrbana'] == 1) { ?>
<table width="670" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" class="titulo"><h3><strong>OPERAÇÃO URBANA</strong></h3></td>
  </tr>
  <tr>
    <td colspan="3"><h4><?php echo $retornoImovel->SituacaoOperacaoUrbana; ?></h4></td>
  </tr>
  <tr>
    <td colspan="3"><h5>Comentários</h5></td>
  </tr>
  <tr>
    <td colspan="3"><h5><?php echo $retornoImovel->ComentariosOperacaoUrbana; ?></h5></td>
  </tr>  
</table>

<?php } ?>




<?php if ($_POST['ckRestricoes'] == 1) { ?>
<table width="670" border="0" cellspacing="0" cellpadding="0">
	<tr>
    <td colspan="7" class="titulo"><h3><strong>RESTRIÇÕES</strong></h3></td>
  </tr>
	<tr>
	  <td width="30%"><h4>SQL</h4></td>
	  <td width="10%"><h4>TOMB.</h4></td>
	  <td width="10%"><h4>A. MAN.</h4></td>
	  <td width="10%"><h4>A. CON.</h4></td>
	  <td width="10%"><h4>PAT. AMB.</h4></td>
	  <td width="10%"><h4>PRO. AMB.</h4></td>
	  <td width="10%"><h4>PEN. FIN.</h4></td>
  </tr>
  <!-- BUSCA RESTRIÇÔES-->
         <?php $buscarRestricoes = new Conexao();
               $buscarRestricoes->conectar();
               $buscarRestricoes->selecionarDB();
               $buscarRestricoes->set('sql','SELECT * FROM RestricoesImovel 
                                             INNER JOIN CadastraImovel   
                                             WHERE RestricoesImovel.IdImovel = '.$retornoImovel->IdImovel.' 
                                             GROUP BY IdRestricoesImovel'); 
               $query3 = $buscarRestricoes->executarQuery();
               while($retornoRestricoes = mysql_fetch_object($query3)) { ?>                                       
              	<tr>
              	  <td><h5><?php echo $retornoRestricoes->SqlRestricoes; ?></h5></td>
              	  <td><h5><?php echo $retornoRestricoes->Tombamento; ?></h5></td>
              	  <td><h5><?php echo $retornoRestricoes->AreaManancial; ?></h5></td>
              	  <td><h5><?php echo $retornoRestricoes->AreaContaminada; ?></h5></td>
              	  <td><h5><?php echo $retornoRestricoes->PatrimonioAmbiental; ?></h5></td>
              	  <td><h5><?php echo $retornoRestricoes->ProtecaoAmbiental; ?></h5></td>
              	  <td><h5><?php echo $retornoRestricoes->PedenciaFinanceira; ?></h5></td>
                </tr>

  <?php } ?>  

  </table>
<?php } ?> 





<?php if ($_POST['ckDividas'] == 1) { ?>
<table width="670" border="0" cellspacing="0" cellpadding="0" style="page-break-before: left;">
  <tr>
    <td colspan="3" class="titulo"><h3><strong>DÍVIDAS</strong></h3></td>
  </tr>
  <tr>
    <td width="33%"><h4>IPTU</h4></td>
    <td width="33%"><h5>&nbsp;</h5></td>
    <td width="33%"><h5>&nbsp;</h5></td>
  </tr>
  <tr>
    <td width="33%"><h5>Exercícios</h5></td>
    <td width="33%"><h4>&nbsp;</h4></td>
    <td width="33%"><h5>Valor Total</h5></td>
  </tr>
   <tr>
    <td colspan="2"><h4><?php echo $retornoImovel->ExerciciosIptu; ?></h4></td>
    <td width="33%"><h4>R$ <?php echo $retornoImovel->ValorTolalIptu; ?></h4></td>
  </tr>
  <tr>
    <td width="33%"><h4>MULTAS</h4></td>
    <td width="33%"><h5>&nbsp;</h5></td>
    <td width="33%"><h5>&nbsp;</h5></td>
  </tr>
  <tr>
    <td width="33%"><h5>Exercícios</h5></td>
    <td width="33%"><h4>&nbsp;</h4></td>
    <td width="33%"><h5>Valor Total</h5></td>
  </tr>
   <tr>
    <td height="18" colspan="2"><h4><?php echo $retornoImovel->ExerciciosMultas; ?></h4></td>
    <td width="33%"><h4>R$ <?php echo $retornoImovel->ValorTolalMultas; ?></h4></td>
  </tr>
  <tr>
    <td colspan="3"><h5>VALOR TOTAL</h5></td>
  </tr>
  <tr>
    <td colspan="3"><h4>R$ <?php echo $retornoImovel->TotalExercicios; ?></h4></td>
  </tr>
  <tr>
    <td colspan="3"><h5>Comentários</h5></td>
  </tr>
  <tr>
    <td colspan="3"><h5><?php echo $retornoImovel->ComentariosDividas; ?></h5></td>
  </tr> 
  
</table>
<?php } ?>




<?php if ($_POST['ckProcessos'] == 1) { ?>
<table width="670" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4" class="titulo"><h3><strong>PROCESSOS</strong></h3></td>
  </tr>
  <tr>
    <td width="25%"><h4>ANO/ PROCESSO</h4></td>
    <td width="25%"><h4>INTERESSADO</h4></td>
    <td width="25%"><h4>ASSUNTO</h4></td>
    <td width="25%"><h4>SITUAÇÃO</h4></td>
  </tr>
  <!-- BUSCA RESTRIÇÔES-->
         <?php $buscarProcessos = new Conexao();
               $buscarProcessos->conectar();
               $buscarProcessos->selecionarDB();
               $buscarProcessos->set("sql",'SELECT * FROM ProcessosImovel 
                                             INNER JOIN CadastraImovel   
                                             WHERE ProcessosImovel.IdImovel = '.$retornoImovel->IdImovel.' 
                                             GROUP BY IdProcessosImovel'); 
               $query4 = $buscarProcessos->executarQuery();
               while($retornoProcessos = mysql_fetch_object($query4)) { ?> 
                  <tr>
                    <td width="25%"><h5>2001</h5></td>
                    <td width="25%"><h5>Vasco Pinheiro dos Santos</h5></td>
                    <td width="25%"><h5>Licença de funcionamento</h5></td>
                    <td width="25%"><h5>Regular</h5></td>
                  </tr>
            <?php } ?>
  
   <tr>
    <td colspan="4"><h5>Comentários</h5></td>
  </tr>
   <?php
               $buscarComentariosProcessos = new Conexao();
               $buscarComentariosProcessos->conectar();
               $buscarComentariosProcessos->selecionarDB();
               $buscarComentariosProcessos->set('sql','SELECT * FROM ComentariosProcessoImovel 
                                             INNER JOIN CadastraImovel   
                                             WHERE ComentariosProcessoImovel.IdImovel = '.$retornoImovel->IdImovel.''); 
              $retornorComentariosProcessos = mysql_fetch_object($buscarComentariosProcessos->executarQuery());  ?>
  <tr>
    <td colspan="4"><h5><?php if ($retornorComentariosProcessos->Comentarios != null) {
                                                       echo $retornorComentariosProcessos->Comentarios;
                                                    }else {
                                                      echo '';
                                                    }?></h5></td>
  </tr>
  
 </table>
<?php } ?>
 
 


<?php if ($_POST['ckGeomapas'] == 1) { ?>
<table width="670" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" class="titulo"><h3><strong>GEOMAPAS</strong></h3></td>
  </tr> 
  <tr>  
    <td colspan="3"><?php if ($retornoImovel->Geomapas != null) {
                echo "<img src='../includes/php/fotos/Imovel/".$retornoImovel->Geomapas."' width='670' height='235' />";
              }else{
                echo "";
                }  ?>
    </td>
  </tr>
</table>
<?php }  ?>





<?php if ($_POST['ckImagemLocal'] == 1) { ?>  

<table width="670" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" class="titulo"><h3><strong>IMAGEM LOCAL</strong></h3></td>
  </tr> 
  <tr>  
    <td colspan="3"><?php if ($retornoImovel->ImagemLocal  != null) {
                echo "<img src='../includes/php/fotos/Imovel/".$retornoImovel->ImagemLocal."' width='670' height='235' />";
              }else{
                echo "";
                }  ?>
    </td>
  </tr>
</table>

<?php }  ?>



</body>
</html>


<?php
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
   //Nome do arquivo
    $NomeArquivo = "Pdf-Imovel-".date('d-m-Y').".pdf";

    $mpdf->Output($NomeArquivo);

   
   // echo("<script type='text/javascript'> location.href='../imovel-ficha-tecnica.php?imovelAux='".$IdImovel."'; </script>");

    header("Location: http://mandprojetos.com.br/sistema/imovel-ficha-tecnica.php?imovelAux=".$IdImovel)
?>
