<?php
	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere o Responsável e a empresa		*/
    /********************************************************************************************/
 
    $insereImovel = new Conexao();
    $insereImovel->conectar();
    $insereImovel->selecionarDB();

    $buscarFoto = new Conexao();
    $buscarFoto->conectar();
    $buscarFoto->selecionarDB();

    
    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo imovel-cadastro.html estão completos			*/
    /********************************************************************************************/

if (isset($_POST['IdImovelAux'])) {

	 /********************************************************************************************/
    /*					Atribui os dados vindos do formulário às variáveis do php				*/
    /********************************************************************************************/

    $IdImovel = $_POST['IdImovelAux']; 
		  

      $caminho = "fotos/Imovel/";
    $buscarFoto->set('sql',"SELECT QuadraFiscal,Geomapas,ImagemLocal,ImagemMapa  
                            FROM CadastraImovel 
                            WHERE IdImovel = $IdImovel ");
                     
         if( $retornoFoto = mysql_fetch_object($buscarFoto->executarQuery())){
          if ($retornoFoto->QuadraFiscal != null) {
            unlink($caminho.$retornoFoto->QuadraFiscal);
          }
          if ($retornoFoto->Geomapas != null) {
            unlink($caminho.$retornoFoto->Geomapas);
          }
          if ($retornoFoto->ImagemLocal != null) {
            unlink($caminho.$retornoFoto->ImagemLocal);
          }

          if ($retornoFoto->ImagemMapa != null) {
            unlink("fotos/Imovel/".$retornoFoto->ImagemMapa);
          }
        }
      
		  
     /********************************************************************************************/
    /*						Muda a String SQL para inserir no banco								*/
    /********************************************************************************************/
 		   
	 $insereImovel->set('sql',"DELETE FROM CadastraImovel WHERE IdImovel = '$IdImovel'");  
  
  	/********************************************************************************************/
    /*								Execulta a String SQL 										*/
    /********************************************************************************************/

if ($insereImovel->executarQuery()) {
	echo("<script type='text/javascript'> location.href='../../imoveis-editar-lista.php'; alert('Dados deletados'); </script>");
}else{
	 echo("<script type='text/javascript'> location.href='../../imoveis-editar-lista.php'; alert('Dados não deletados'); </script>");
}

}
   		
   	