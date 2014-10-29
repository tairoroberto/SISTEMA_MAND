<?php
include('includes/php/conexao/MPDF57/mpdf.php');
ini_set("memory_limit","1G");
  
  //Pega o método GET enviado pelo formulário
	$IdImovel = $_POST['content'];
  
  //função cUrl para pegar o conteudo da pagina
  function curl($url){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,$url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
      $return = curl_exec($ch);     
      curl_close ($ch);
      return $return;
  }

  //Starta o buffer para armazernar o conteúdo 
   ob_start();
   //recebe a pagina pela função
   //$content = curl("http://www.mandprojetos.com.br/sistema_mand/SISTEMA-MAND-3/pdfImovel2.php?imovelAux=".$IdImovel.""); //string with data
   $content = curl("http://localhost/git/SISTEMA-MAND/SISTEMA-MAND-ECLIPSE-1/SISTEMA-MAND-3/impressao/imovel.php");
    //printa a página 
  print($content);
   //pega o que foi impresso e joga em uma variável
  $content = ob_get_contents();
   
   //var_dump($content);




$stylesheet1 = file_get_contents("impressao/print.css");

 
   //passa o Css para a página
   //$stylesheet = file_get_contents('assets/css/style.css');
   //$stylesheet2 = file_get_contents('assets/plugins/boostrapv3/css/bootstrap.min.css');   
   
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
   $mpdf->Output('Pdf-Imovel.pdf','D');
   exit; 

?>