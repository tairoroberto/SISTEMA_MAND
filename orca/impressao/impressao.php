<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        
        <title></title>
        
    <link href="print.css" rel="stylesheet" type="text/css">
</head>

<body>
<img src="img/logo.jpg" width="230" height="50" />


<!-- INCIO DADOS -->

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
    include ('../../sistema/includes/php/conexao/Conexao.class.php');

    $buscaOportunidade = new Conexao();
    $buscaOportunidade->conectar();
    $buscaOportunidade->selecionarDB();



    $buscaOportunidade->set('sql',"SELECT Oportunidade.*, CadastraOrcamentoB.*
                                     FROM CadastraOrcamentoB
                                     INNER JOIN Oportunidade
                                     ON Oportunidade.IdOportunidade = $IdOportunidade AND
                                        CadastraOrcamentoB.IdOrcamentoB = $IdOrcamentoB ");

    $retornoOportunidade = mysql_fetch_object($buscaOportunidade->executarQuery());


    ?>


<table width="670" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" class="titulo"><h3>ORÇAMENTO - Nº <?php echo $retornoOportunidade->IdOportunidade;?></h3></td>
  </tr>
  <tr>
    <td colspan="3" style="background-color:#48bcc0;"><h4 style="color:#FFF;"><strong>DADOS DO CONTRATANTE</strong></h4></td>
  </tr>
  <tr>
    <td width="15%"><h5>Nome:</h5></td>
    <td colspan="2"><h4><strong><?php echo $retornoOportunidade->NomeContato;?></strong></h4></td>
  </tr>
  <tr>
    <td width="15%"><h5>Razão Social:</h5></td>
    <td colspan="2"><h4><strong><?php echo $retornoOportunidade->RazaoSocial;?></strong></h4></td>
  </tr>
  <tr>
    <td width="15%"><h5>CNPJ/CPF:</h5></td>
    <td colspan="2"><h4><strong><?php echo $retornoOportunidade->CnpjCpf;?></strong></h4></td>
  </tr>
  <tr>
    <td width="15%"><h5>Telefone:</h5></td>
    <td colspan="2"><h4><strong><?php if (($retornoOportunidade->Telefone != "") && ($retornoOportunidade->Celular != "")) {
                    echo $retornoOportunidade->Telefone." - ".$retornoOportunidade->Celular;
                }elseif ($retornoOportunidade->Telefone != "") {
                    echo $retornoOportunidade->Telefone;
                }else{
                    echo $retornoOportunidade->Celular;
                }
                ?></strong></h4></td>
  </tr>
   <tr>
    <td width="15%"><h5>E-mail:</h5></td>
    <td colspan="2"><h4><strong><?php echo $retornoOportunidade->Email;?></strong></h4></td>
  </tr>
  <tr>
    <td width="15%"><h5>Endereço:</h5></td>
    <td colspan="2"><h4><strong><?php echo $retornoOportunidade->EnderecoArea;?></strong></h4></td>
  </tr>
  <tr>
    <td colspan="3" >&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" style="background-color:#48bcc0;"><h4 style="color:#FFF;"><strong>DADOS DA CONTRATADA</strong></h4></td>
  </tr>
  <tr>
    <td width="15%"><h5>Razão Social:</h5></td>
    <td colspan="2"><h4><strong>MAND ASSESSORIA NA GESTÃO DE PROJETOS LTDA.</strong></h4></td>
  </tr>
  <tr>
    <td width="15%"><h5>CNPJ:</h5></td>
    <td colspan="2"><h4><strong>13.790.913/0001-09</strong></h4></td>
  </tr>
  <tr>
    <td width="15%"><h5>Telefone:</h5></td>
    <td colspan="2"><h4><strong>(11) 3578-0840</strong></h4></td>
  </tr>
   <tr>
    <td width="15%"><h5>E-mail:</h5></td>
    <td colspan="2"><h4><strong>atendimento@mandprojetos.com.br</strong></h4></td>
  </tr>
  <tr>
    <td width="15%"><h5>Endereço:</h5></td>
    <td colspan="2"><h4><strong>Aluísio Azevedo, nº 447, conj. 03</strong></h4></td>
  </tr>
</table>
<!-- FIM DADOS -->



    <?php
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
}

$cont = 1;
$valorDosServicos = 0;
$query= $buscarServicosOrcamentoB->executarQuery();
while($retornoServicosOrcamentoB = mysql_fetch_object($query)) {  ?>


    <!-- INCIO SERVIÇO -->
    <table width="670" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td colspan="3" style="background-color:#48bcc0;"><h4 style="color:#FFF; text-transform:uppercase;"><strong><?php echo $cont;?>  - <?php echo $retornoServicosOrcamentoB->TituloServico;?></strong></h4></td>
        </tr>
        <tr>
            <td colspan="3">
                <h5>
                    <?php echo $retornoServicosOrcamentoB->ExplicacaoServico;?>
                </h5>
            </td>
        </tr>
    </table>
    <!-- FIM SERVIÇO -->


    <?php $cont++; $valorDosServicos += $retornoServicosOrcamentoB->Valor; } ?>



<!-- INCIO INVESTIMENTO -->
<table width="670" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" style="background-color:#48bcc0;"><h4 style="color:#FFF;"><strong>INVESTIMENTO</strong></h4></td>
  </tr>
  <tr>
    <td width="15%"><h5>Serviços:</h5></td>
    <td colspan="2"><h4><strong>R$ <?php echo $retornoOportunidade->TotalServicos;?></strong></h4></td>
  </tr>
  <tr>
    <td width="15%"><h5>*Taxas:</h5></td>
    <td colspan="2"><h4><strong>R$ <?php echo $retornoOportunidade->Taxas;?></strong></h4></td>
  </tr>
  <tr>
    <td colspan="3"><h6>*Os valores das taxas são para xerox, plotagens entre outros custos, caso esse valor não seja utilizado, ou tenha uma sobra, será abatido da última parcela.</h6></td>
    
  </tr>
  <tr>
    <td width="15%"><h5>Forma de pagamento:</h5></td>
    <td colspan="2"><h4><strong> <?php echo $retornoOportunidade->FormaPagamento;?> </strong>,Prazo <?php echo $retornoOportunidade->Prazo;?></h4></td>
  </tr> 
</table>
<!-- FIM INVESTIMENTOS -->

<!-- INCIO considerações -->
<table width="670" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" style="background-color:#48bcc0;"><h4 style="color:#FFF;"><strong>CONSIDERAÇÕES</strong></h4></td>
  </tr>
  
  <tr>
    <td colspan="3"><h5><?php echo $retornoOportunidade->ComentariosOrcamento;?></h5></td>
    
  </tr>
  
</table>
<!-- FIM considerações -->


<?php
/********************************************************************************************/
/*       Variáveis para inserção no banco de dados, insere o Responsável e a empresa        */
/********************************************************************************************/
$buscaContrato = new Conexao();
$buscaContrato->conectar();
$buscaContrato->selecionarDB();


$buscaContrato->set('sql',"SELECT * FROM Contrato WHERE IdContrato = 1");

$retornoContrato= mysql_fetch_object($buscaContrato->executarQuery()); ?>


<table width="670" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td colspan="3" style="background-color:#48bcc0;"><h4 style="color:#FFF;"><strong>IDENTIFICAÇÃO DAS PARTES CONTRATANTES</strong></h4></td>
    </tr>

    <tr>
        <td colspan="3"><h5><?php echo $retornoContrato->DadosMand; ?> e de outro lado <strong><?php echo $retornoOportunidade->RazaoSocial;?></strong>, CNPJ/CPF <?php echo $retornoOportunidade->CnpjCpf;?>, residente e domiciliado em <?php echo $retornoOportunidade->EnderecoArea;?>, Telefone Fixo <?php echo $retornoOportunidade->Telefone;?>, Celular <?php echo $retornoOportunidade->Celular;?>, e-mail <?php echo $retornoOportunidade->Email;?>, aqui denominado <strong>CONTRATANTE</strong>. </h5></td>

    </tr>
    <tr>
        <td colspan="3">
            <h5>
                <?php
                //pega os dados do contrato faz um explode para separar a parte do valor do orçamento
                $contrato = explode('"#Aqui não deve ser modificado, dados serão preenchidos do orcamento#"', $retornoContrato->DadosContrato);
                ?>
                <?php echo $contrato[0]. " R$"?>  <?php echo $retornoOportunidade->TotalOrcamentoB;?> <?php echo $retornoOportunidade->FormaPagamento?>, com prazo de <?php echo $retornoOportunidade->Prazo?>.
                <?php echo $contrato[1]; ?>
            </h5>
        </td>

    </tr>

</table>


<!-- INCIO ASSINATURAS -->
<table width="670" border="0" cellspacing="0" cellpadding="0">
  
  
  <tr>
    <td colspan="2"><h5>
    	<br /><br /><br />
    	<br />
    	<br />
    </h5></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><h4><strong>MAND ASSESSORIA NA GESTÃO DE PROJETOS LTDA.</strong></h4></td>
  </tr>
  <tr>
    <td colspan="2"><h5>
    	<br /><br /><br />
    	<br />
    	<br />
    </h5></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><h4><strong><?php echo $retornoOportunidade->RazaoSocial;?></strong></h4></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><h4>&nbsp;</h4>
    <h4><strong>&nbsp;</strong></h4></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><h4><strong>&nbsp;</strong></h4></td>
  </tr>
  
  <tr>
  	<td width="50%"><h4><strong>TESTEMUNHA 1</strong><br />
  	  <br />
  	</h4></td>
    <td width="50%"><h4><strong>TESTEMUNHA 2</strong><br />
      <br />
    </h4></td>
  </tr>
  <tr>
  	<td width="50%"><h4><strong>Nome:</strong><br />
  	  <br />
  	</h4></td>
    <td width="50%"><h4><strong>Nome:</strong></h4></td>
  </tr>
  <tr>
  	<td width="50%"><h4><strong>RG:</strong><br />
  	  <br />
  	</h4></td>
    <td width="50%"><h4><strong>RG:</strong></h4></td>
  </tr>
  <tr>
  	<td width="50%"><h4><strong>ASS.:</strong><br />
  	  <br />
  	</h4></td>
    <td width="50%"><h4><strong>ASS.:</strong></h4></td>
  </tr>

    <?php
    $mes = array();
    $mes[1] ='Janeiro';
    $mes[2] ='Fevereiro';
    $mes[3] ='Março';
    $mes[4] ='Abril';
    $mes[5] ='Maio';
    $mes[6] ='Junho';
    $mes[7] ='Julho';
    $mes[8] ='Agosto';
    $mes[9] ='Setembro';
    $mes[10]='Outubro';
    $mes[11]='Novembro';
    $mes[12]='Dezembro';
    $data   = date('n');
    ?>
  
  <tr>
    <td colspan="2" align="right"><h4><strong><br />
      <br />
      São Paulo, <?php echo date("d")?> de <?php echo $mes[$data]?> de <?php echo date("Y")?></strong></h4></td>
  
</table>
<!-- FIM ASSINATURAS -->


</body>
</html>
