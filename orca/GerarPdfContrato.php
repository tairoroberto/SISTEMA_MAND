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
   //$content = curl("http://localhost/git/SISTEMA-MAND/orca/ContratoPdf.php?IdOportunidadeAux2=".$IdOportunidade."&IdOrcamentoBAux2=".$IdOrcamentoB."");

   //printa a página 
   //
  
   print($content);
   //pega o que foi impresso e joga em uma variável
   $content = ob_get_contents();

   //passa o Css para a página
   $stylesheet = file_get_contents('style-orcamento.css'); 

   //instancia a nova classe do Mpdf
   $mpdf = new mPDF('','',0,'',5,5,5,5,9,9,'L');  
   // Passa o css para a classe
   $mpdf->WriteHTML($stylesheet,1);
   //seta a página como pagina completa
   //imprime nossa variável em PDF
   $mpdf->WriteHTML($content,2);    
   //Mostra a saída como download
   //
   $NomeArquivo = "Contrato-Mand-".date('d-m-Y').".pdf";
   $mpdf->Output($NomeArquivo);


   //mudar aqui ver icone de botão do pdf
   //header("Location: http://localhost/git/SISTEMA-MAND/orca/contrato.php?IdOportunidadeAux=".$IdOportunidade."&IdOrcamentoBAux=".$IdOrcamentoB);
   header("Location: http://www.mandprojetos.com.br/orca/contrato.php?IdOportunidadeAux=".$IdOportunidade."&IdOrcamentoBAux=".$IdOrcamentoB);

?>