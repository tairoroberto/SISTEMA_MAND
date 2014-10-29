<?php

 $data1 = $_POST['data1'];
 $data2 = $_POST['data2'];

 $segundos = 86400;
  //Função para conversão de datas
      function converteData($data){
         return (preg_match('/\//',$data)) ? implode('-', array_reverse(explode('/', $data))) : implode('/', array_reverse(explode('-', $data)));
       }

         $resultData1 = converteData($data1);
         $resultData2 = converteData($data2);                          

         $resultData1 = strtotime($resultData1);
         $resultData2 = strtotime($resultData2);
 		  
 		 $diferenca = ($resultData2 - $resultData1)/$segundos;

 		 echo number_format($diferenca, 0, ',', '.');

?>