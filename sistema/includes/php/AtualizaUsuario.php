<?php

	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere a Categoria		*/
    /********************************************************************************************/
 
    $insereUsuario = new Conexao();
    $insereUsuario->conectar();
    $insereUsuario->selecionarDB();

    $buscarUsuario = new Conexao();
    $buscarUsuario->conectar();
    $buscarUsuario->selecionarDB();

    $buscarImagem = new Conexao();
    $buscarImagem->conectar();
    $buscarImagem->selecionarDB();

    $buscarTaxasUsuario = new Conexao();
    $buscarTaxasUsuario->conectar();
    $buscarTaxasUsuario->selecionarDB();

    $Imagem1;
    $NomeImagem1 = null;
    $CaminhoImagem1;

    $error =  array();


    $Holding;
    $Requerente;
    $Imovel;
    $Oportunidade;
    $Orcamento;
    $Faq;
    $LinksUteis;
    $Processos;
    $Servicos;
    $Tarefas;
    $Incorporacao;    
    $Calendario;


    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo FAQ-Categoria.html estão completos 			*/
    /********************************************************************************************/

   if (isset($_POST['TipoUsuario'])){

    if ($_POST['TipoUsuario'] == "Cliente") {

            $TipoUsuario =    $_POST['TipoUsuario'];
            $Email =    $_POST['Email'];         
            $Senha =    $_POST['Senha'];
            $ConfirmaSenha =    $_POST['ConfirmaSenha'];
            $NomeExibicao =    $_POST['NomeExibicao'];
            $DataCadastro = $_POST['DataCadastro'];

            $SelectProcesso = $_POST['SelectProcesso'];
            $CreditoUsuario = $_POST['CreditoUsuario'];
            $IdUsuario = $_POST['IdUsuarioAux'];



        $insereUsuario->set('sql',"SELECT * FROM Usuarios WHERE IdUsuario = '$IdUsuario'");
        $retorUsuario = mysql_fetch_object($insereUsuario->executarQuery());


        //verifica se o novo valor é igual ao antigo
        if ($retorUsuario->CreditoUsuario_final == $CreditoUsuario) {
        /********************************************************************************************/
        /*                      Muda a String SQL para inserir no banco                             */
        /********************************************************************************************/
         $insereUsuario->set('sql',"UPDATE  Usuarios SET TipoUsuario = '$TipoUsuario',
                                                         Email = '$Email',
                                                         Senha = '$Senha',
                                                         ConfirmaSenha = '$ConfirmaSenha',
                                                         NomeExibicao = '$NomeExibicao',
                                                         Foto = '$NomeImagem1',
                                                         PermissaoProcesso = '$SelectProcesso'
                                                      WHERE IdUsuario = $IdUsuario ");
        }else{

            
         /********************************************************************************************/
        /*                      Muda a String SQL para inserir no banco                             */
        /********************************************************************************************/
         $insereUsuario->set('sql',"UPDATE  Usuarios SET TipoUsuario = '$TipoUsuario',
                                                         Email = '$Email',
                                                         Senha = '$Senha',
                                                         ConfirmaSenha = '$ConfirmaSenha',
                                                         NomeExibicao = '$NomeExibicao',
                                                         Entrada = '',
                                                         Saida = '',
                                                         Almoco = '',
                                                         Foto = '$NomeImagem1',
                                                         DataCadastro = '$DataCadastro',
                                                         PermissaoProcesso = '$SelectProcesso'
                                                      WHERE IdUsuario = $IdUsuario ");
        }

         $insereUsuario->executarQuery();



         //Ao acabar de inserir o usuário ele retorna para a pagina de cadstro de usuario
         echo("<script type='text/javascript'> location.href='../../usuario-lista.php'; alert('Cliente Atualizado'); </script>");

        } elseif (isset($_POST['Email'],
                         $_POST['Senha'],
                         $_POST['ConfirmaSenha'],
                         $_POST['NomeExibicao'],
                         $_POST['Entrada'],
                         $_POST['Saida'],
                         $_POST['Almoco'],
                         $_POST['IdUsuarioAux'])){

                        $TipoUsuario =    $_POST['TipoUsuario'];
                        $Email =    $_POST['Email'];         
                        $Senha =    $_POST['Senha'];
                        $ConfirmaSenha =    $_POST['ConfirmaSenha'];
                        $NomeExibicao =    $_POST['NomeExibicao'];         
                        $Entrada =    $_POST['Entrada'];
                        $Saida =    $_POST['Saida'];
                        $Almoco =    $_POST['Almoco'];  
                        $DataCadastro = $_POST['DataCadastro'];
                        $IdUsuario = $_POST['IdUsuarioAux'];
        /****************************************************************************************************/
        /*  Faz a verificação pra ver quais são as permições colocando as permissões enviadas nas variaveis */
        /****************************************************************************************************/       

     $Holding = $_POST['HoldingVisualizarAux']."/".$_POST['HoldingCadastrarAux']."/".$_POST['HoldingInvisivelAux'];

     $Requerente = $_POST['RequerenteVisualizarAux']."/".$_POST['RequerenteCadastrarAux']."/".$_POST['RequerenteInvisivelAux'];
             
     $Imovel = $_POST['ImovelVisualizarAux']."/".$_POST['ImovelCadastrarAux']."/".$_POST['ImovelInvisiveAux'];
                
     $Oportunidade = $_POST['OportunidadeVisualizarAux']."/".$_POST['OportunidadeCadastrarAux']."/".$_POST['OportunidadeInvisivelAux'];

     $Orcamento = $_POST['OrcamentoVisualizarAux']."/".$_POST['OrcamentoCadastrarAux']."/".$_POST['OrcamentoInvisivelAux'];

     $Faq = $_POST['FaqVisualizarAux']."/".$_POST['FaqCadastrarAux']."/".$_POST['FaqInvisivelAux'];

     $LinksUteis = $_POST['LinksUteisVisualizarAux']."/".$_POST['LinksUteisCadastrarAux']."/".$_POST['LinksUteisInvisivelAux'];

     $Processos = $_POST['ProcessosVisualizarAux']."/".$_POST['ProcessosCadastrarAux']."/".$_POST['ProcessosInvisivelAux'];

     $Servicos = $_POST['ServicosVisualizarAux']."/".$_POST['ServicosCadastrarAux']."/".$_POST['ServicosInvisivelAux'];

     $Tarefas = $_POST['TarefasVisualizarAux']."/".$_POST['TarefasCadastrarAux']."/".$_POST['TarefasInvisivelAux'];

     $Incorporacao = $_POST['IncorporacaoVisualizarAux']."/".$_POST['IncorporacaoCadastrarAux']."/".$_POST['IncorporacaoInvisivelAux'];

     $Calendario = $_POST['CalendarioVisualizarAux']."/".$_POST['CalendarioCadastrarAux']."/".$_POST['CalendarioInvisivelAux'];
                


/***********************************************************************************************/
/*                 Deleta a imagem da pasta para depois poder  deletar do banco                */
/***********************************************************************************************/
     $Caminho = "fotos/Funcionario/";
     $buscarImagem->set('sql',"SELECT Foto FROM `Usuarios`
                                           WHERE IdUsuario = $IdUsuario ");
    
         $retornoImagem = mysql_fetch_object($buscarImagem->executarQuery());
                if ($retornoImagem->Foto != null) {
                    unlink($Caminho.$retornoImagem->Foto);
                } 
              



    /********************************************************************************************/
    /*                      Função para inserir imagem1 no banco de dados                       */
    /********************************************************************************************/

// Se o usuário clicou no botão cadastrar efetua as ações
   if (!empty($_FILES['Foto'])){

    $Imagem1 = $_FILES["Foto"];
 
    // Se a foto estiver sido selecionada
    if (!empty($Imagem1["name"])) {
 
        // Largura máxima em pixels
        $largura = 50000000;
        // Altura máxima em pixels
        $altura = 50000000;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 100000000000;
 
        // Verifica se o arquivo é uma imagem
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $Imagem1["type"])){
           $error[1] = "Isso não é uma imagem.";
        } 
 
        // Pega as dimensões da imagem
        $dimensoes = getimagesize($Imagem1["tmp_name"]);
 
        // Verifica se a largura da imagem é maior que a largura permitida
        if($dimensoes[0] > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }
 
        // Verifica se a altura da imagem é maior que a altura permitida
        if($dimensoes[1] > $altura) {
            $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
        }
 
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if($Imagem1["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
        } 
        // Se não houver nenhum erro
        if (count($error) == 0) {
 
            // Pega extensão da imagem
            preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $Imagem1["name"], $ext);
 
            // Gera um nome único para a imagem
            $NomeImagem1 = md5(uniqid(time())) . "." . $ext[1];
 
            // Caminho de onde ficará a imagem
            $CaminhoImagem1 = "fotos/Funcionario/" . $NomeImagem1;
 
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($Imagem1["tmp_name"], $CaminhoImagem1);
        }
 
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "";
            }
        }
    }
}else{
    $NomeImagem1 = null;
}




          /********************************************************************************************/
         /*                      Muda a String SQL para inserir no banco                             */
        /********************************************************************************************/
         $insereUsuario->set('sql',"UPDATE Usuarios SET TipoUsuario = '$TipoUsuario',
                                                        Email = '$Email',
                                                        Senha = '$Senha',
                                                        ConfirmaSenha = '$ConfirmaSenha',
                                                        NomeExibicao = '$NomeExibicao',
                                                        Entrada = '$Entrada',
                                                        Saida = '$Saida',
                                                        Almoco = '$Almoco',
                                                        Foto = '$NomeImagem1',
                                                        DataCadastro = '$DataCadastro',
                                                        PermissaoProcesso = '',
                                                        CreditoUsuario = ''
                                                     WHERE IdUsuario = $IdUsuario ");
         $insereUsuario->executarQuery();

         
          /********************************************************************************************/
         /*                      Muda a String SQL para inserir no banco                             */
        /********************************************************************************************/
         $insereUsuario->set('sql',"UPDATE PermissoesUsuario SET Holding = '$Holding',
                                                                 Requerente = '$Requerente',
                                                                 Imovel = '$Imovel',
                                                                 Oportunidade = '$Oportunidade',
                                                                 Orcamento = '$Orcamento',
                                                                 Faq = '$Faq',
                                                                 LinksUteis = '$LinksUteis',
                                                                 Processos = '$Processos',
                                                                 Servicos = '$Servicos',
                                                                 Tarefas = '$Tarefas',
                                                                 Incorporacao = '$Incorporacao',
                                                                 Calendario = '$Calendario'
                                                              WHERE   IdUsuario = '$IdUsuario' ");
         $insereUsuario->executarQuery();
        //Ao acabar de inserir o usuário ele retorna para a pagina de cadstro de usuario
         echo("<script type='text/javascript'> location.href='../../usuario-lista.php'; alert('Atualizado com sucesso'); </script>");
           
}else{
    //Ao acabar de inserir o usuário ele retorna para a pagina de cadstro de usuario
         echo("<script type='text/javascript'> location.href='../../usuario-lista.php'; alert('não Atualizado'); </script>");
}
}
 
