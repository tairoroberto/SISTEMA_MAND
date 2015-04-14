<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $insereDetalheProcesso = new Conexao();
    $insereDetalheProcesso->conectar();
    $insereDetalheProcesso->selecionarDB();
    $IdProcesso;


if (isset($_POST['DataProcessoDetalhe'],
          $_POST['UnidadeProcessoDetahe'],
          $_POST['DescricaoProcessoDetahe'],
          $_POST['DomProcessoDetalheCheck'],
          $_POST['SelectAcoesProcessoDetalhe'],
          $_POST['IdProcesso'])) {      

          $IdProcesso = $_POST['IdProcesso'];

      	 /********************************************************************************************/
          /*				      	Atribui os dados vindos do formulário às variáveis do php			         	*/
          /*****************************************************************************************/
          $DataProcessoDetalhe = $_POST['DataProcessoDetalhe']; 
          $UnidadeProcessoDetahe  = $_POST['UnidadeProcessoDetahe'];
          $DescricaoProcessoDetahe = $_POST['DescricaoProcessoDetahe'];
          $DomProcessoDetalhe = $_POST['DomProcessoDetalheCheck'];
          $Data = $_POST['DataDomProcessoDetalhe'];
          $AcoesProcessoDetalhe = $_POST['SelectAcoesProcessoDetalhe'];
          $IdProcesso = $_POST['IdProcesso'];


          if ($DomProcessoDetalhe == "checado") {
            //se DOM estiver selecionado insere a data no calendario
             
            $data = explode("/", $Data);
            $start = $data[2]."-".$data[1]."-".$data[0]." 00:00:00";
            $end = $data[2]."-".$data[1]."-".$data[0]." 00:00:00";
            $idusuario = $_POST['idusuario'];
            // connection to the database
            try {
            $bdd = new PDO('mysql:host=localhost;dbname=mandproj_DB', 'mandproj_userDB', 'MandProj@231');
            } catch(Exception $e) {
            exit('Unable to connect to database.');
            }

            // insert the records
            $sql = "INSERT INTO Eventos (title, start, end, idusuario) VALUES (:title, :start, :end, :idusuario)";
            $q = $bdd->prepare($sql);
            $q->execute(array(':title'=>"DOM, Unidade:".$UnidadeProcessoDetahe.", Desc:".$DescricaoProcessoDetahe.", Ação: ".$AcoesProcessoDetalhe, ':start'=>$start, ':end'=>$end,  ':idusuario'=>$idusuario));

          }
        
          $insereDetalheProcesso->set('sql',"INSERT INTO DetalheProcesso(DataProcessoDetalhe,UnidadeProcessoDetahe,DescricaoProcessoDetahe,DomProcessoDetalhe,Data,AcaoProcessoDetalhe,IdProcesso) 
                               VALUES ('$DataProcessoDetalhe','$UnidadeProcessoDetahe','$DescricaoProcessoDetahe','$DomProcessoDetalhe','$Data','$AcoesProcessoDetalhe','$IdProcesso');");

          /********************************************************************************************/
          /*                              Execulta a String SQL                                       */
          /********************************************************************************************/

        if ($insereDetalheProcesso->executarQuery()) {
      	 	echo("<script type='text/javascript'> location.href='../../processos?IdProcessoAux=".$IdProcesso."'; alert('Detalhes de processo inseridos com sucesso'); </script>");
      	 }else{
      	 	echo("<script type='text/javascript'> location.href='../../processos?IdProcessoAux=".$IdProcesso."'; alert('Detalhes de processo não inseridos'); </script>");
      	 }

}