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