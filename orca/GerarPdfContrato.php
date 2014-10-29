<?php 
include('../sistema/includes/php/conexao/MPDF57/mpdf.php');
  
  //Pega o método GET enviado pelo formulário
   $IdOportunidade = $_POST['IdOportunidadeAux2'];
   $IdOrcamentoB = $_POST['IdOrcamentoBAux2'];

   

  
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
   $content = curl("http://www.mandprojetos.com.br/orca/ContratoPdf.php?IdOportunidadeAux2=".$IdOportunidade."&IdOrcamentoBAux2=".$IdOrcamentoB."");
   //printa a página 
   //
   //
   print($content);
   //pega o que foi impresso e joga em uma variável
   $content = ob_get_contents();

   //passa o Css para a página
   $stylesheet = file_get_contents('style-orcamento.css'); 

   //instancia a nova classe do Mpdf
   $mpdf=new mPDF();  
   // Passa o css para a classe
   $mpdf->WriteHTML($stylesheet,1);
   //seta a página como pagina completa
   //imprime nossa variável em PDF
   $mpdf->WriteHTML($content,2);    
   //Mostra a saída como download
   $mpdf->Output('Contrato.pdf','D');
   exit; 

?>