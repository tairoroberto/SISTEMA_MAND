 <?php

	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $insereOrcamentoB = new Conexao();
    $insereOrcamentoB->conectar();
    $insereOrcamentoB->selecionarDB();

	  $atualizarOportunidade = new Conexao();
    $atualizarOportunidade->conectar();
    $atualizarOportunidade->selecionarDB();

    $insereServicoOrcamentoB = new Conexao();
    $insereServicoOrcamentoB->conectar();
    $insereServicoOrcamentoB->selecionarDB();
    
    $insereLinkOrcamentoB = new Conexao();
    $insereLinkOrcamentoB->conectar();
    $insereLinkOrcamentoB->selecionarDB(); 

    $buscaEmailOportunidade = new Conexao();
    $buscaEmailOportunidade->conectar();
    $buscaEmailOportunidade->selecionarDB(); 

    $insereHistoricoOportunidade = new Conexao();
    $insereHistoricoOportunidade->conectar();
    $insereHistoricoOportunidade->selecionarDB();



    $verifica1 = false;
    $verifica2 = false;
    $verifica3 = false;
    $verifica4 = false;
    $verificaArray = false;


    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo cadastro-holding.html estão completos		*/
    /********************************************************************************************/
if(isset($_POST['RazaoSocialOrcamentoB'], 
		  $_POST['NomeContatoOrcamantoB'],
		  $_POST['Taxas'],
		  $_POST['FormaPagamentoOrcamnetoB'],
		  $_POST['PrazoOrcamantoB'],
		  $_POST['ConmentariosOrcamentoB'],
		  $_POST['TotalOrcamentoB'],
		  $_POST['TotalServicos'],
		  $_POST['DataOrcamentoB'],
		  $_POST['IdOrcamentoAAux'],
		  $_POST['IdOportunidadeAux'])){


	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/

    	$RazaoSocialOrcamentoB =	$_POST['RazaoSocialOrcamentoB']; 
		  $NomeContatoOrcamantoB  = $_POST['NomeContatoOrcamantoB'];		  
		  $Taxas  = $_POST['Taxas'];
		  $FormaPagamentoOrcamnetoB  = $_POST['FormaPagamentoOrcamnetoB'];
		  $PrazoOrcamantoB  = $_POST['PrazoOrcamantoB'];
		  $ConmentariosOrcamentoB  = $_POST['ConmentariosOrcamentoB'];
		  $TotalOrcamentoB  = $_POST['TotalOrcamentoB']; 
		  $TotalServicos  = $_POST['TotalServicos']; 
		  $DataOrcamentoB  = $_POST['DataOrcamentoB']; 
		  $IdOrcamentoA  = $_POST['IdOrcamentoAAux']; 
		  $IdOportunidade  = $_POST['IdOportunidadeAux']; 
		  



     /********************************************************************************************/
    /*		Insere ta tabela CadatraOrcamentoB os valores vindo do formulario					*/
    /********************************************************************************************/
 		   
	 $insereOrcamentoB->set('sql',"INSERT INTO CadastraOrcamentoB(RazaoSocial, NomeContato, Taxas, FormaPagamento, Prazo, ComentariosOrcamento, TotalOrcamentoB,TotalServicos,DataOrcamentoB,IdOrcamentoA,IdOportunidade) 
	 					  VALUES ('$RazaoSocialOrcamentoB','$NomeContatoOrcamantoB','$Taxas','$FormaPagamentoOrcamnetoB','$PrazoOrcamantoB','$ConmentariosOrcamentoB','$TotalOrcamentoB','$TotalServicos','$DataOrcamentoB','$IdOrcamentoA','$IdOportunidade');");  
   
  	 $insereOrcamentoB->executarQuery();

  	 //Busca o IdOrcamnetoB inserido no banco para poder usa-lo
  	 $insereOrcamentoB->set('sql',"SELECT `IdOrcamentoB` FROM `CadastraOrcamentoB` WHERE  `IdOportunidade` = '$IdOportunidade' ;");
	 $retornoServico = mysql_fetch_object($insereOrcamentoB->executarQuery()); 


	/********************************************************************************************/
    /*	Pega os valores dos arrays de serviços enviadospelo formulario e insere no banco		*/
    /********************************************************************************************/

  	 if(isset($_POST["ServicoArray"],$_POST["ValorArray"])){
        // Faz loop pelo array dos campos:
		$ServicoArray = $_POST["ServicoArray"];
		$ValorArray = $_POST["ValorArray"];
		$i = 0;
		$j = 0;

	while($i < count($ServicoArray) && $j < count($ValorArray)){
		if ($ServicoArray[$i] != "") {		    

	            $insereServicoOrcamentoB->set('sql',"INSERT INTO OrcamentoBServicos(IdServico, Valor, IdOrcamentoB, IdOportunidade) 
	                                 VALUES ('$ServicoArray[$i]','$ValorArray[$j]','$retornoServico->IdOrcamentoB','$IdOportunidade');");
	            $insereServicoOrcamentoB->executarQuery();            	
				$i++;
				$j++;			

			}
		}   
	}
	
	$DataEnvio = date('d/m/Y');
	//Cria um link de acesso para ser enviado ao cliente
	$Endereco = "orca/index.php?IdOportunidade=".$IdOportunidade."&IdOrcamentoB=".$retornoServico->IdOrcamentoB;

	$insereLinkOrcamentoB->set('sql',"INSERT INTO LinkOrcamentoB(Endereco,DataEnvio, IdOportunidade, IdOrcamentoB) 
		 					  VALUES ('$Endereco','$DataEnvio','$IdOportunidade','$retornoServico->IdOrcamentoB');");  	   
	$insereLinkOrcamentoB->executarQuery();



	// Busca o email da oprtunidade para enviar o endereço de acesso ao orçamento para o cliente 
	$buscaEmailOportunidade->set('sql',"SELECT Email, RazaoSocial FROM Oportunidade
										WHERE IdOportunidade = '$IdOportunidade' ");
	$retornoEmailOportunidade = mysql_fetch_object($buscaEmailOportunidade->executarQuery()); 


require("conexao/PHPMailer-master/class.phpmailer.php");

// Inicia a classe PHPMailer
$mail = new PHPMailer();

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "mail.mandprojetos.com.br"; // Endereço do servidor SMTP
$mail->SMTPSecure = "ssl"; 
$mail->Port = 465;
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Username = 'envia@mandprojetos.com.br'; // Usuário do servidor SMTP
$mail->Password = 'mand123'; // Senha do servidor SMTP

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "atendimento@mandprojetos.com.br"; // Seu e-mail
$mail->FromName = "Mand Projetos"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress($retornoEmailOportunidade->Email);
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Mand | Link de acesso ao orçamento"; // Assunto da mensagem
//retiraq os .. do endereço completando con o endereço corrrento 
//
////"Segue o endereço de acesso ao orçamento <br> \r\n 
		//<a href='http://www.mandprojetos.com.br/sistema_mand/".$Endereco."' target = '_blank'> \r\n Link de acesso ao orçamento Mand Projetos.</a>";
$mail->Body = 
"<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0' />
<title>Mand Gestão de Projetos</title>
<style type='text/css'>
html {
	width:100%
}
::-moz-selection {
background:#63bcd4;
color:#fff
}
::selection {
background:#63bcd4;
color:#fff
}
body {
	background-color:#ecf0f1;
	margin:0;
	padding:0
}
.ReadMsgBody {
	width:100%;
	background-color:#fff
}
.ExternalClass {
	width:100%;
	background-color:#fff
}
a {
	color:#63bcd4;
	text-decoration:none;
	font-weight:400;
	font-style:normal
}
a:hover {
	color:#262626;
	text-decoration:none;
	font-weight:400;
	font-style:normal
}
p, div {
	margin:0!important
}
table {
	border-collapse:collapse
}
@media only screen and (max-width:640px) {
body {
width:auto!important
}
table table {
width:100%!important
}
td[class=full_width] {
width:100%!important
}
div[class=div_scale] {
width:440px!important;
margin:0 auto!important
}
table[class=table_scale] {
width:440px!important;
margin:0 auto!important
}
td[class=td_scale] {
width:440px!important;
margin:0 auto!important
}
img[class=img_scale] {
width:100%!important;
height:auto!important
}
td[class=spacer] {
display:none!important
}
td[class=spacer_spec] {
display:none!important
}
td[class=divider] {
width:100%!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=center] {
text-align:center!important
}
td[class=social_left] {
float:left;
width:400px;
display:block!important;
text-align:center!important;
padding:20px!important
}
td[class=social_right] {
float:left;
width:400px;
display:block!important;
text-align:center!important;
padding:0 20px 20px!important
}
td[class=one_one] {
width:440px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_half] {
width:440px!important;
padding-bottom:0!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_half_last] {
width:440px!important;
margin-top:40px!important;
display:block!important;
float:left;
text-align:inherit!important;
padding:0!important
}
td[class=one_half_alt_last] {
width:440px!important;
margin-top:0!important;
display:block!important;
float:left;
text-align:inherit!important;
padding:0!important
}
td[class=one_third] {
width:440px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=two_third] {
width:440px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=two_third_last] {
width:440px!important;
margin-top:40px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=two_third_alt_last] {
width:440px!important;
margin-top:0!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_third_last] {
width:440px!important;
margin-top:40px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_third_alt_last] {
width:440px!important;
margin-top:0!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_fourth] {
width:85px!important;
display:block!important;
padding-left:20px!important;
padding-bottom:0!important;
float:left;
text-align:inherit!important
}
td[class=one_fourth_last] {
width:85px!important;
margin-top:0!important;
display:block!important;
padding-top:20px!important;
padding-left:20px!important;
float:left;
text-align:inherit!important
}
}
@media only screen and (max-width:479px) {
body {
width:auto!important
}
table table {
width:100%!important
}
td[class=full_width] {
width:100%!important
}
div[class=div_scale] {
width:280px!important;
margin:0 auto!important
}
table[class=table_scale] {
width:280px!important;
margin:0 auto!important
}
td[class=td_scale] {
width:280px!important;
margin:0 auto!important
}
img[class=img_scale] {
width:100%!important;
height:auto!important
}
td[class=spacer] {
display:none!important
}
td[class=spacer_spec] {
display:none!important
}
td[class=divider] {
width:100%!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=center] {
text-align:center!important
}
td[class=social_left] {
float:left;
width:240px;
display:block!important;
text-align:center!important;
padding:20px!important
}
td[class=social_right] {
float:left;
width:240px;
display:block!important;
text-align:center!important;
padding:0 20px 20px!important
}
td[class=one_one] {
width:280px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_half] {
width:280px!important;
padding-bottom:0!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_half_last] {
width:280px!important;
margin-top:40px!important;
display:block!important;
float:left;
text-align:inherit!important;
padding:0!important
}
td[class=one_half_alt_last] {
width:280px!important;
margin-top:0!important;
display:block!important;
float:left;
text-align:inherit!important;
padding:0!important
}
td[class=one_third] {
width:280px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=two_third] {
width:280px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=two_third_last] {
width:280px!important;
margin-top:40px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=two_third_alt_last] {
width:280px!important;
margin-top:0!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_third_last] {
width:280px!important;
margin-top:40px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_third_alt_last] {
width:280px!important;
margin-top:0!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_fourth] {
width:110px!important;
display:block!important;
padding-left:20px!important;
padding-bottom:0!important;
float:left;
text-align:inherit!important
}
td[class=one_fourth_last] {
width:110px!important;
margin-top:0!important;
display:block!important;
padding-top:20px!important;
padding-left:20px!important;
float:left;
text-align:inherit!important
}
}
</style>
</head>
<body bgcolor='#ecf0f1'>
<table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ecf0f1' style='padding: 20px; margin: 0;'>
  <!-- START OF VERTIXAL SPACER BLOCK-->
  <tr>
    <td class='full_width' align='center' width='100%' bgcolor='#ecf0f1' style=''><div class='div_scale' style='width:600px;'>
        <table class='table_scale' width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ecf0f1' style='padding:0; margin: 0;'>
          
        </table>
      </div></td>
  </tr>
  <!-- END OF VERTIXAL SPACER BLOCK-->
  <!-- START OF HEADER FOR LOGO-->
 
  <!-- END OF HEADER FOR LOGO-->
  <!-- START OF VERTIXAL SPACER BLOCK-->
  <tr>
    <td class='full_width' align='center' width='100%' bgcolor='#ecf0f1' style=''><div class='div_scale' style='width:600px;'>
        <table class='table_scale' width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ecf0f1' style='padding:0; margin: 0;'>
          <tr>
            <td class='td_scale' width='600' height='30' bgcolor='#ecf0f1' align='left' valign='middle' style='height: 30px; padding-left:0px; padding-bottom:10px;  font-size:0 ; color:#686868; font-family: Arial,sans-serif; line-height: 0; '>
            
              <p><a href='http://www.mandprojetos.com.br' target='_blank'><br /><br />
              <img src='http://www.mandprojetos.com.br/mails/sistema/images/logo.png' width='215' height='42' /></a></p>
              <p>
            </td>
          </tr>
        </table>
      </div></td>
  </tr>
  <!-- END OF VERTIXAL SPACER BLOCK-->
  <!-- START OF 1/1 COLUMN-->
  <tr>
    <td class='full_width' align='center' width='100%' bgcolor='#ecf0f1' style=''><div class='div_scale' style='width:600px;'>
        <table class='table_scale' width='' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='padding:0; margin: 0;'>
          <tr>
            <td class='full_width' align='left' valign='top' width='600' bgcolor='#ffffff' style=''><table width='100%'>
                <!-- START OF IMAGE-->
                <tr>
                  <td valign='top' style='padding: 0px; font-size:13px ; color:#727272; font-family: Arial,sans-serif; line-height: 23px; '><img class='img_scale' src='http://www.mandprojetos.com.br/mails/sistema/images/img1.jpg' width='600' height='150' alt='image' border='0' style='display: block;' /> </td>
                </tr>
                <!-- END OF IMAGE-->
                <!-- START OF HEADING-->
                <tr>
                  <td align='left' valign='top' style='padding-top: 23px; padding-right: 30px; padding-bottom: 0; padding-left: 30px; font-size:16px ; line-height: 34px; text-transform: none; color:#1f2122; font-family: Arial,sans-serif; '> Olá ".$retornoEmailOportunidade->RazaoSocial."</td>
                </tr>
                <!-- END OF HEADING-->
                <!-- START OF TEXT-->
                <tr>
                  <td align='left' valign='top' style='padding-top: 4px; padding-right: 30px; padding-bottom: 0; padding-left: 30px; font-size:14px ; color:#999b9e; font-family: Arial,sans-serif; line-height: 24px; text-align:justify; '> Já fizemos os levantamentos iniciais para solucionar o seu caso!
 
                    <br />
                    <br />
                    Segue abaixo o link para visualizar o seu orçamento, quais quer dúvidas estamos a disposição pelo e-mail atendimento@mandprojetos.com.br ou (11) 3578-0840<br />
                    <br />
                  <strong>Link: <a href='http://www.mandprojetos.com.br/".$Endereco."' target = '_blank'> Orçamento  </a> <br />
                  <br />
                  </strong></td>

                </tr>
                <!-- END OF TEXT-->
                
                
              </table></td>
          </tr>
        </table> 
      </div>
      <!-- JUST A VERTICAL SPACER--><!-- END OF JUST A VERTICAL SPACER--></td>
  </tr>
  <!-- END OF 1/1 COLUMN-->
  <!-- START OF 1/2 COLUMN TOP IMAGE-->
  <tr>
    <td class='full_width' align='center' width='100%' bgcolor='#ecf0f1' style=''><!-- JUST A VERTICAL SPACER--><!-- END OF JUST A VERTICAL SPACER--></td>
  </tr>
  <!-- END OF 1/2 COLUMN TOP IMAGE-->
  <!-- START OF TESTIMONIAL BLOCK-->
  <tr>
    <td class='full_width' align='center' width='100%' bgcolor='#ecf0f1' style=''>&nbsp;</td>
  </tr>
  <!-- END OF TESTIMONIAL BLOCK-->
  <!-- START OF 1/2 COLUMN WITH LEFT IMAGE-->
  <tr>
    <td class='full_width' align='center' width='100%' bgcolor='#ecf0f1' style=''><!-- JUST A VERTICAL SPACER--><!-- END OF JUST A VERTICAL SPACER--></td>
  </tr>
  <!-- END OF 1/2 COLUMN WITH LEFT IMAGE-->
  <!-- START OF 1/2 COLUMN WITH RIGHT IMAGE-->
  <tr>
    <td class='full_width' align='center' width='100%' bgcolor='#ecf0f1' style=''><!-- JUST A VERTICAL SPACER-->
      <div class='div_scale' style='width:600px; display: block; '>
        <table class='table_scale' width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ecf0f1' style='padding:0; margin: 0;'>
          <tr>
            
          </tr>
        </table>
      </div>
      <!-- END OF JUST A VERTICAL SPACER--></td>
  </tr>
  <!-- END OF 1/2 COLUMN WITH RIGHT IMAGE-->
  
  <!-- START FOOTER AREA-->
  <tr>
    <td class='full_width' align='center' width='100%' bgcolor='#ecf0f1' style=''><div class='div_scale' style='width:600px;'>
        <table class='table_scale' width='' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#e0e7e6' style='padding:0; margin: 0;'>
          <tr>
            <td class='full_width' align='left' valign='top' width='600' bgcolor='#e0e7e6' style=''><table width='100%'>
                <tr>
                  <td height='30' bgcolor='#e0e7e6' style='padding:0; line-height: 0;'><br /></td>
                </tr>
                <!-- START OF TEXT-->
                <tr>
                  <td align='center' valign='top' style='padding: 0px 30px; font-style: italic; font-size:12px ; color:#999b9e; font-family: Arial,sans-serif; line-height: 22px; '> Mand Gestão de Projetos - www.mandprojetos.com.br - (11) 3578-0840<br />
                    <span style='color:#1f2122;'></td>
                </tr>
                <!-- END OF TEXT-->
                <tr>
                  <td height='30' bgcolor='#e0e7e6' style='padding:0; line-height: 0;'><br /></td>
                </tr>
              </table></td>
          </tr>
        </table>
      </div></td>
  </tr>
  <!-- END FOOTER AREA-->
</table>
</body>
</html>";
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo

// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();


	// Exibe uma mensagem de resultado
	if ($enviado) { 

	/********************************************************************************************/
    /*					Atualiza a tabela Oprtunidade com o Status de Enviado					*/
    /********************************************************************************************/
  	 $atualizarOportunidade->set('sql',"UPDATE Oportunidade SET Status = 'Enviado'
                                                            WHERE IdOportunidade = '$IdOportunidade';");
  	 $atualizarOportunidade->executarQuery();

  	 //Insere na Tabela HistoricoOportunidade
  	 $data = date('d/m/Y');
	 $insereHistoricoOportunidade->set('sql',"INSERT INTO HistoricoOportunidade(DataHistoricoOportunidade, TipoHistoricoOportunidade, Status, IdOportunidade) 
	                            	 				 	   VALUES ('$data','Alterado','Enviado para cliente','$IdOportunidade');");
	 $insereHistoricoOportunidade->executarQuery();

		echo("<script type='text/javascript' charset='utf-8'> location.href='../../orcamento-lista.php'; alert('Dados Enviados ao cliente'); </script>");
	
	}else{

	/********************************************************************************************/
    /*					Atualiza a tabela Oprtunidade com o Status de Pronto para enviar		*/
    /********************************************************************************************/
  	 $atualizarOportunidade->set('sql',"UPDATE Oportunidade SET Status = 'Pronto para enviar'
                                                            WHERE IdOportunidade = '$IdOportunidade';");
  	 $atualizarOportunidade->executarQuery();

  	 //Insere na Tabela HistoricoOportunidade
  	 $data = date('d/m/Y');
	 $insereHistoricoOportunidade->set('sql',"INSERT INTO HistoricoOportunidade(DataHistoricoOportunidade, TipoHistoricoOportunidade, Status, IdOportunidade) 
	                            	 				 	   VALUES ('$data','Alterado','Pronto para enviar','$IdOportunidade');");
	 $insereHistoricoOportunidade->executarQuery();

	 echo("<script type='text/javascript' charset='utf-8'> location.href='../../orcamento-lista.php'; alert('Dados não Enviados ao cliente ".$mail->ErrorInfo."'); </script>");
	
	}

} 
?>