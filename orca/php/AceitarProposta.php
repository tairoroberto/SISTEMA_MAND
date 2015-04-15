<?php
include ('../../sistema/includes/php/conexao/Conexao.class.php');
include ('../../sistema/includes/php/conexao/PHPMailer-master/class.phpmailer.php');
include('EnviarEmail.php');

$IdOportunidade;
$IdOrcamentoB;

if (($_POST['IdOportunidadeAux']) && ($_POST['IdOrcamentoBAux'])) {

    $IdOportunidade = $_POST['IdOportunidadeAux'];
    $IdOrcamentoB = $_POST['IdOrcamentoBAux'];


        //atendimento@mandprojetos.com.br
        enviarEmail("atendimento@mandprojetos.com.br"," ACEITOU o orçamento",$IdOportunidade,$IdOrcamentoB);
        echo("<script type='text/javascript' charset='utf-8'> location.href='http://mandprojetos.com.br'; alert('Obrigado Entraremos em contato'); </script>");
    }

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

