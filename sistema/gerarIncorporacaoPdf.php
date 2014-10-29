<?php 
include('includes/php/conexao/MPDF57/mpdf.php');
  
  //Pega o método GET enviado pelo formulário
	$IdIncorporacao = $_POST['content'];
  
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
   $content = curl("http://www.mandprojetos.com.br/sistema_mand/SISTEMA-MAND-3/pdfIncorporacao.php?IdIncorporacaoAux=".$IdIncorporacao.""); //string with data
   //$content = curl("http://localhost/git/SISTEMA-MAND/SISTEMA-MAND-ECLIPSE-1/SISTEMA-MAND-3/pdfIncorporacao.php?IdIncorporacaoAux=".$IdIncorporacao."");
   //printa a página 
   print($content);
   //pega o que foi impresso e joga em uma variável
   $content = ob_get_contents();

   //passa o Css para a página
   $stylesheet = file_get_contents('assets/css/style.css');
   $stylesheet2 = file_get_contents('assets/plugins/boostrapv3/css/bootstrap.min.css');   

   //instancia a nova classe do Mpdf
   $mpdf=new mPDF();  
   // Passa o css para a classe
   $mpdf->WriteHTML($stylesheet,1);
   $mpdf->WriteHTML($stylesheet2,1);
   //seta a página como pagina completa
   $mpdf->SetDisplayMode('fullpage');
   $mpdf->list_indent_first_level = 0;
   //imprime nossa variável em PDF
   $mpdf->WriteHTML($content,2);    
   //Mostra a saída como download
   $mpdf->Output('Pdf-Incorporação.pdf','D');
   exit; 


?>