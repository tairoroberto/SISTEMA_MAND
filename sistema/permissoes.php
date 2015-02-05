




<!--Mostra a SideBar na lateral esquerda de todas as paginas -->

<?php function mostarPermissoes(){?>


<div class="page-container row-fluid">
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu"> 
  <!-- BEGIN MINI-PROFILE -->
   <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 
   <div class="user-info-wrapper">	
	<div class="profile-wrapper">
		<img src="<?php echo 'includes/php/fotos/Funcionario/'.$_SESSION['usuarioFoto'];?>"  
				alt="" data-src="<?php echo 'includes/php/fotos/Funcionario/'.$_SESSION['usuarioFoto'];?>" data-src-retina="<?php echo 'includes/php/fotos/Funcionario/'.$_SESSION['usuarioFoto'];?>" width="69" height="69" />
	</div>
    <div class="user-info">
    <?php $nome = explode(" ", utf8_encode($_SESSION['usuarioNome'])); 
      $UsuarioTipo = utf8_encode($_SESSION['usuarioTipo'])?>
      <div class="greeting"><?php if (count($nome) == 1) {
               echo "<br><br>".$nome[0];
              }else{
                echo $nome[0];
                }?></div>
      <div class="semi-bold"><?php if (count($nome) > 1) {
               echo $nome[1];
              }?></div>
      <div class="status"><?php echo $UsuarioTipo; ?></div>
      <div class="status"><br> <br></div>
    </div>
   </div>
  <!-- END MINI-PROFILE -->
   
   <!-- BEGIN SIDEBAR MENU -->	
	
    <ul>
    <!--Começo das Permissões-->

      <!--Inicio dos LINKS-->  
                    <?php 
                     

                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/
                     
                        $buscarPermissao = new Conexao();
                        $buscarPermissao->conectar();
                        $buscarPermissao->selecionarDB();                      

                        $buscarPermissao->set('sql',"SELECT Usuarios.*, PermissoesUsuario.*
                                                            FROM PermissoesUsuario
                                                            INNER JOIN Usuarios 
                                                            ON Usuarios.IdUsuario = ".$_SESSION['usuarioID']." AND
                                                               PermissoesUsuario.IdUsuario = ".$_SESSION['usuarioID']."
                                                            GROUP BY Usuarios.IdUsuario ");
                       
                        $retornoPermissao = mysql_fetch_object($buscarPermissao->executarQuery()); 
  
    /** Se for o adminstrador pode cadastrar novos usuarios**/
     if ($retornoPermissao->TipoUsuario == "Administrador") {
         echo"<li class=''> <a href='javascript:;'> 
                <i class='fa fa-user'></i> 
                  <span class='title'>Cadastrar Usuário</span> <span class='arrow '>
                  </span> </a><ul class='sub-menu'>
            
                <li > <a href='usuario-cadastro'> Novo</a> </li>
                <li > <a href='usuario-lista'> Visualizar</a> </li>              
              </ul>
            </li> ";                          
	    }?>


     <?php /** Se for o adminstrador pode cadastrar novos usuarios**/
     if ($retornoPermissao->TipoUsuario == "Administrador") {
         echo"<li class=''> <a href='javascript:;'> 
                <i class='glyphicon glyphicon-th-list'></i> 
                  <span class='title'>Alterar Contrato</span> <span class='arrow '>
                  </span> </a><ul class='sub-menu'>
                <li > <a href='contrato'> Alterar</a> </li>              
              </ul>
            </li> ";                          
      }?>

	      
      <li class=""> <a href="javascript:;"> <i class="fa fa-building-o"></i> <span class="title">Holding</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
        	<?php if ($retornoPermissao->Holding == "Visualizar/Cadastrar/") {
        		echo "<li > <a href='holding-cadastro'> Cadastrar</a> </li>";
        		echo "<li > <a href='holding-listar'> Visualizar</a> </li>";
	        	}elseif ($retornoPermissao->Holding == "/Cadastrar/") {
	        		echo "<li > <a href='holding-cadastro'> Cadastrar</a> </li>";
	        	}elseif ($retornoPermissao->Holding == "Visualizar//") {
	        		echo "<li > <a href='holding-listar'> Visualizar</a> </li>";
	        	}else {
	        		echo "<li ><a></a></li>";
	        	} ?>
        </ul>
      </li>
      

      
      <li class=""> <a href="javascript:;"> <i class="fa fa-sitemap"></i> <span class="title">Requerente</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
        	<?php if ($retornoPermissao->Requerente == "Visualizar/Cadastrar/") {
        		echo "<li > <a href='requerente-cadastro'> Cadastrar Requerente</a> </li>";
        		echo "<li > <a href='requerente-lista'> Visualizar Requerentes</a> </li>";
	        	}
	        	  if ($retornoPermissao->Requerente == "/Cadastrar/") {
	        		echo "<li > <a href='requerente-cadastro'> Cadastrar Requerente</a> </li>";
	        	} if ($retornoPermissao->Requerente == "Visualizar//") {
	        		echo "<li > <a href='requerente-lista'> Visualizar Requerentes</a> </li>";
	        	} if ($retornoPermissao->Requerente == "//Invisivel") {
	        		echo "<li ><a></a></li>";
	        	} ?>	 
        </ul>
      </li>

      
      <li class=""> <a href="javascript:;"> <i class="icon-custom-home"></i> <span class="title">Imovel</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
        	<?php if ($retornoPermissao->Imovel == "Visualizar/Cadastrar/") {
        		echo "<li > <a href='imovel-cadastro'>Cadastro</a> </li>";
        		echo "<li > <a href='imoveis-lista'>Visualizar</a> </li>";
            echo "<li > <a href='imoveis-editar-lista'>Editar</a> </li>";
        		echo "<li > <a href='imoveis-encerrados'>Encerrados</a> </li>";
	        	}
	        	  if ($retornoPermissao->Imovel == "/Cadastrar/") {
	        		echo "<li > <a href='imovel-cadastro'>Cadastro</a> </li>";	        		
	        	} if ($retornoPermissao->Imovel == "Visualizar//") {
	        		echo "<li > <a href='imoveis-lista'>Visualizar</a> </li>";
	        		echo "<li > <a href='imoveis-encerrados'>Encerrados</a> </li>";
	        	} if ($retornoPermissao->Imovel == "//Invisivel") {
	        		echo "<li ><a></a></li>";
	        	} ?>	 
        </ul>
      </li>
      
      <li class=""> <a href="javascript:;"> <i class="fa fa-group"></i> <span class="title">Oportunidades</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
       	    <?php if ($retornoPermissao->Oportunidade == "Visualizar/Cadastrar/") {
        		echo "<li > <a href='oportunidade-cadastro'> Nova Oportunidade</a> </li>";
        		echo "<li > <a href='oportunidade-lista'> Visualizar Oprotunidades</a> </li>";
	        	}
	        	  if ($retornoPermissao->Oportunidade == "/Cadastrar/") {
	        		echo "<li > <a href='oportunidade-cadastro'> Nova Oportunidade</a> </li>";
	        	} if ($retornoPermissao->Oportunidade == "Visualizar//") {
	        		echo "<li > <a href='oportunidade-lista'> Visualizar Oprotunidades</a> </li>";
	        	} if ($retornoPermissao->Oportunidade == "//Invisivel") {
	        		echo "<li ><a></a></li>";
	        	} ?>         
        </ul>
      </li>
      


      <li class=""> <a href="javascript:;"> <i class="fa fa-money"></i> <span class="title">Orçamento</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
        	<?php if ($retornoPermissao->Orcamento == "Visualizar/Cadastrar/") {
        		echo "<li > <a href='orcamento-lista'> Lista Orçamentos</a> </li>";
              echo "<li > <a href='orcamentos-enviados '> Orçamentos Enviados</a> </li>"; 
	        	}
	        	  if ($retornoPermissao->Orcamento == "/Cadastrar/") {
	        		echo "<li > <a href='orcamento-lista'> Lista Orçamentos</a> </li>";
              echo "<li > <a href='orcamentos-enviados '> Orçamentos Enviados</a> </li>";      		
	        	} if ($retornoPermissao->Orcamento == "Visualizar//") {
	        		echo "<li > <a href='orcamento-lista'> Lista Orçamentos</a> </li>";
              echo "<li > <a href='orcamentos-enviados '> Orçamentos Enviados</a> </li>"; 
	        	} if ($retornoPermissao->Orcamento == "//Invisivel") {
	        		echo "<li ><a></a></li>";
	        	} ?>   
        </ul>
      </li>
      
      
      
      <li class=""> <a href="javascript:;"> <i class="fa fa-comments"></i>  <span class="title">FAQ</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
        	<?php if ($retornoPermissao->Faq == "Visualizar/Cadastrar/") {
        		echo "<li > <a href='FAQ-Categoria'> Categoria</a> </li>";
        		echo "<li > <a href='FAQ-Cadastro'> Adicionar/ Editar </a> </li>";
        		echo "<li > <a href='FAQ'>FAQ</a> </li>";
	        	}
	        	  if ($retornoPermissao->Faq == "/Cadastrar/") {
	        		echo "<li > <a href='FAQ-Categoria'> Categoria</a> </li>";
        			echo "<li > <a href='FAQ-Cadastro'> Adicionar/ Editar </a> </li>";	        		
	        	} if ($retornoPermissao->Faq == "Visualizar//") {
	        		echo "<li > <a href='FAQ'>FAQ</a> </li>";
	        	} if ($retornoPermissao->Faq == "//Invisivel") {
	        		echo "<li ><a></a></li>";
	        	} ?>  		  
        </ul>
      </li>


      
      <li class=""> <a href="javascript:;"> <i class="fa fa-external-link"></i> <span class="title">Links Uteis</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
        	<?php if ($retornoPermissao->LinksUteis == "Visualizar/Cadastrar/") {
        		echo "<li > <a href='links-cadastro'> Cadastrar</a> </li>";
	        	}
	        	  if ($retornoPermissao->LinksUteis == "/Cadastrar/") {
	        		echo "<li > <a href='links-cadastro'> Cadastrar</a> </li>";        		
	        	} if ($retornoPermissao->LinksUteis == "Visualizar//") {
	        		echo "<li ><a></a></li>";
	        	} if ($retornoPermissao->LinksUteis == "//Invisivel") {
	        		echo "<li ><a></a></li>";
	        	} ?> 		  
        </ul>
      </li>


      
      <li class=""> <a href="javascript:;"> <i class="fa fa-sort-amount-desc"></i> <span class="title">Processos</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
        	<?php if ($retornoPermissao->Processos == "Visualizar/Cadastrar/") {
        		echo "<li > <a href='processos-cadastrar'> Novo</a> </li>";
        		echo "<li > <a href='processos-lista'> Visualizar </a> </li>";
	        	}
	        	  if ($retornoPermissao->Processos == "/Cadastrar/") {
	        		echo "<li > <a href='processos-cadastrar'> Novo</a> </li>";        		
	        	} if ($retornoPermissao->Processos == "Visualizar//") {
	        		echo "<li > <a href='processos-lista'> Visualizar </a> </li>";
	        	} if ($retornoPermissao->Processos == "//Invisivel") {
	        		echo "<li ><a></a></li>";
	        	} ?> 
        </ul>
      </li>


      
      <li class=""> <a href="javascript:;"> <i class="fa fa-file-text"></i><span class="title">Serviços</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
        	<?php if ($retornoPermissao->Servicos == "Visualizar/Cadastrar/") {
        		echo "<li > <a href='servico-cadastro'> Novo</a> </li>";
        		echo "<li > <a href='servicos-lista'> Listar</a> </li>";
	        	}
	        	  if ($retornoPermissao->Servicos == "/Cadastrar/") {
	        		echo "<li > <a href='servico-cadastro'> Novo</a> </li>";        		
	        	} if ($retornoPermissao->Servicos == "Visualizar//") {
	        		echo "<li > <a href='servicos-lista'> Listar</a> </li>";
	        	} if ($retornoPermissao->Servicos == "//Invisivel") {
	        		echo "<li ><a></a></li>";
	        	} ?> 		   
        </ul>
      </li>
      



      <li class=""> <a href="javascript:;"> <i class="fa fa-tasks"></i> <span class="title">Tarefas</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
        	<?php if ($retornoPermissao->Tarefas == "Visualizar/Cadastrar/") {
        			echo "<li > <a href='tarefa-nova'> Cadastrar</a> </li>";
	        		echo "<li > <a href='tarefa-visualizar'> Visualizar</a> </li>";
	        		echo "<li > <a href='tarefa-finalizadas'> Finalizadas</a> </li>";
	        		echo "<li > <a href='tarefa-documentos'> Documentos Solicitados</a> </li>";
	        		echo "<li > <a href='tarefa-documentos-entregues'> Documentos entregues</a> </li>";
	        	}
	        	  if ($retornoPermissao->Tarefas == "/Cadastrar/") {
	        		echo "<li > <a href='tarefa-nova'> Cadastrar</a> </li>";        		
	        	} if ($retornoPermissao->Tarefas == "Visualizar//") {
	        		echo "<li > <a href='tarefa-visualizar'> Visualizar</a> </li>";
					echo "<li > <a href='tarefa-finalizadas'> Finalizadas</a> </li>";
        			echo "<li > <a href='tarefa-documentos'> Documentos Solicitados</a> </li>";
        			echo "<li > <a href='tarefa-documentos-entregues'> Documentos entregues</a> </li>";
	        	} if ($retornoPermissao->Tarefas == "//Invisivel") {
	        		echo "<li ><a></a></li>";
	        	} ?> 
        </ul>
      </li>




     <li class=""> <a href="javascript:;"> <i class="fa fa-building-o"></i> <span class="title">Incorporação</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
        	<?php if ($retornoPermissao->Incorporacao == "Visualizar/Cadastrar/") {
        			echo "<li > <a href='incorporacao-cadastro'> Cadastrar</a> </li>";
	        		echo "<li > <a href='incorporacao-lista'> Visualizar</a> </li>";
              echo "<li > <a href='incorporacao-editar-lista'> Editar</a> </li>";
	        	}
	        	  if ($retornoPermissao->Incorporacao == "/Cadastrar/") {
	        		echo "<li > <a href='incorporacao-cadastro'> Cadastrar</a> </li>";        		
	        	} if ($retornoPermissao->Incorporacao == "Visualizar//") {
	        		echo "<li > <a href='incorporacao-lista'> Visualizar</a> </li>";
	        	} if ($retornoPermissao->Incorporacao == "//Invisivel") {
	        		echo "<li ><a></a></li>";
	        	} ?> 
        </ul>
      </li>



	 	<li class=""> <a href="javascript:;"> <i class="fa fa-calendar"></i> <span class="title">Calendario</span> <span class="arrow "></span> </a>
	        <ul class="sub-menu">
	        	<?php if ($retornoPermissao->Calendario == "Visualizar/Cadastrar/") {
	        			echo "<li > <a href='calendario'> Visualizar</a> </li>";
		        	}
		        	  if ($retornoPermissao->Calendario == "/Cadastrar/") {
		        		echo "<li > <a href='calendario'> Visualizar</a> </li>";        		
		        	} if ($retornoPermissao->Calendario == "Visualizar//") {
		        		echo "<li > <a href='calendario'> Visualizar</a> </li>";
		        	} if ($retornoPermissao->Calendario == "//Invisivel") {
		        		echo "<li ><a></a></li>";
		        	} ?> 
	        </ul>
	      </li>



     
	     <li class=""> <a href="javascript:;"> <i class="fa fa-external-link"></i><span class="title">Links </span> <span class="arrow "></span> </a>
	        <ul class="sub-menu">
			<!--Inicio dos LINKS-->  
	                    <?php 
                    /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/                     
                        $buscar = new Conexao();
                        $buscar->conectar();
                        $buscar->selecionarDB();                      

                        $buscar->set('sql',"SELECT * FROM `CadastraLinks` ");
                       
                        $query= $buscar->executarQuery();
                       while($retorno=mysql_fetch_array($query)) { 
                      ?> 
                              <li > 
                                  <a href="<?php echo $retorno['Url'] ?>" target = "_blank"> 
                                    <?php echo $retorno['NomeExibicao'] ?>
                                  </a> 
                              </li>                            
                    <?php } ?>	    
    			</ul>	
			</li>


    <?php  /** Se for o adminstrador pode Gerar o relatório**/
     if ($retornoPermissao->TipoUsuario == "Administrador") {
         echo"<li class=''> <a href='javascript:;'> 
                <i class='fa fa-list-alt'></i> 
                  <span class='title'>Relatórios</span> <span class='arrow '>
                  </span> </a><ul class='sub-menu'>            
                <li > <a href='relatorios'> Gerar Relatório</a> </li>             
              </ul>
            </li> ";                          
      }?>


		 </div>

	</div>
</div>	
<div class="clearfix"></div>
<?php }  ?>






<!--Mostra o chat Toggle no canto superior direito de todas as paginas -->
<?php function mostarPermissoesChat(){?>
<script type="text/javascript">
  
  function Entrar() {  
      if( event.keyCode==13 ) { 
        document.formBuscaSql.sql.value = $("#SqlBusca").val();
        document.formBuscaSql.submit();       
      }  
   }



</script>

<!--Mascara para inputs-->
<script type="text/javascript" src="assets/plugins/jquery-mask/jquery.maskedinput.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-mask/jquery.mask.js"></script>

<script type="text/javascript">
  jQuery(function($){
    $("#SqlBusca").mask("999.999.9999-9"); 

});

</script>



<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse "> 
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
  <div class="header-seperation"> 
    <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">  
     <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" > <div class="iconset top-menu-toggle-white"></div> </a> </li>     
    </ul>
      <!-- BEGIN LOGO --> 
      <a href="#"></br><img src="assets/img/logo.png" width="106" height="30"/></a>
      <!-- END LOGO --> 
      <ul class="nav pull-right notifcation-center">  
      
         
      </ul>
      </div>
      <!-- END RESPONSIVE MENU TOGGLER --> 
      <div class="header-quick-nav" > 
      <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="pull-left"> 
        
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" >
            <div class="iconset top-reload"></div>
            </a> </li>
          
      <li class="m-r-10 input-prepend inside search-form no-boarder">
        <span class="add-on"> <span class="iconset top-search"></span></span>
        
            <input name="SqlBusca" id="SqlBusca" type="text"  class="no-boarder " placeholder="Pesquisar SQL ou Protocolo" style="width:250px;" onkeypress="Entrar();">
     
     </li>
      </ul>
    </div>

     <?php
              /********************************************************************************************/
             /*       Variáveis para inserção no banco de dados, dados do usuario                        */
            /********************************************************************************************/
                             
                $buscarEtapatarefaUsuario = new Conexao();
                $buscarEtapatarefaUsuario->conectar();
                $buscarEtapatarefaUsuario->selecionarDB(); 
                $IdUsuario = $_SESSION['usuarioID'];        
                
                $buscarEtapatarefaUsuario->set('sql',"SELECT EtapaTarefa.*, count(IdEtapaTarefa) as contadorTarefa
                                                      FROM EtapaTarefa 
                                                      WHERE IdUsuario = '$IdUsuario' AND
                                                              SituacaoEtapaTarefa != 'Finalizar'");
                $retornoUsuarioEtapaTarefa = mysql_fetch_object($buscarEtapatarefaUsuario->executarQuery());  


              /********************************************************************************************/
             /*       Variáveis para inserção no banco de dados, dados do usuario                        */
            /********************************************************************************************/
                             
                $buscarEtapatarefaUsuario2 = new Conexao();
                $buscarEtapatarefaUsuario2->conectar();
                $buscarEtapatarefaUsuario2->selecionarDB(); 
                $IdUsuario = $_SESSION['usuarioID'];        
                
                $buscarEtapatarefaUsuario2->set('sql',"SELECT EtapaTarefa.*, count(IdEtapaTarefa) as contadorTarefa
                                                      FROM EtapaTarefa 
                                                      WHERE IdUsuario = '$IdUsuario' AND
                                                              SituacaoEtapaTarefa = 'Finalizar'");
                $retornoUsuarioEtapaTarefa2 = mysql_fetch_object($buscarEtapatarefaUsuario2->executarQuery()); ?> 

    

     <?php 
          $IdUsuario = $_SESSION['usuarioID'];        
          $dataHoje = date('d/m/Y');

          $buscaAlerta = new Conexao();
          $buscaAlerta->conectar();
          $buscaAlerta->selecionarDB();
          $buscaAlerta->set('sql',"SELECT Alerta.*, count(IdAlerta) as contadorAlerta
                                            FROM Alerta 
                                            WHERE IdUsuario = '$IdUsuario' 
                                            ORDER BY IdAlerta DESC");
          $retornoAlerta = mysql_fetch_object($buscaAlerta->executarQuery());  ?>


     <div class="pull-right"> 
    <div class="chat-toggler">  
        <a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom"  data-content='' data-toggle="dropdown" data-original-title="Notificações">
          <div class="user-details"> 
            <div class="username">
              <!--Icone de notificação de tarefas -->
              <span class="badge badge-important">
                <?php if ($retornoAlerta->IdUsuario == $IdUsuario){
                echo $retornoUsuarioEtapaTarefa->contadorTarefa + $retornoAlerta->contadorAlerta;
                }else{
                  echo $retornoUsuarioEtapaTarefa->contadorTarefa;
                  } ?></span> 
              <!---->
              <?php $nome = explode(" ", utf8_encode($_SESSION['usuarioNome'])); ?>
              <?php echo $nome[0];?> <span class="bold"><?php if (count($nome) > 1) {
               echo $nome[1];
              } ?></span>                
            </div>            
          </div> 
          <div class="iconset top-down-arrow"></div>
        </a>  

        <div id="notification-list" style="display:none">
          <div style="width:300px">

          <!--Mensagens de alerta-->
          <!--Script para deletar alertas-->
            <script type="text/javascript">
                function deletaAlerta(idusuario,msg){
                  $.ajax({
                       url: 'includes/php/DeletaAlerta.php',
                       data: 'idusuario='+ idusuario + "&msg="+msg,
                       type: "POST",
                       success: function(json) {
                           if (json == "Deletado") {
                                location.reload();
                                alert(json);
                            }else{
                              alert(json);
                            }                                         
                       }
                  });                  
              }


            </script>
          <!--Fim script-->

             

            <?php 
            $queryAlerta = $buscaAlerta->executarQuery();
            
            if ($retornoAlerta && $retornoAlerta->IdUsuario == $IdUsuario) {
              while ($retornoAlerta2 = mysql_fetch_object($queryAlerta)) {?>
                <div class="notification-messages info" >
                  <div class="user-profile">
                    <img src="<?php echo 'includes/php/fotos/Funcionario/'.$_SESSION['usuarioFoto'];?>"  alt="" data-src="<?php echo 'includes/php/fotos/Funcionario/'.$_SESSION['usuarioFoto'];?>" data-src-retina="<?php echo 'includes/php/fotos/Funcionario/'.$_SESSION['usuarioFoto'];?>" width="35" height="35">
                  </div>
                  <div class="message-wrapper" onclick="deletaAlerta('<?php echo $IdUsuario; ?>','<?php echo $retornoAlerta2->Mensagem; ?>');">
                    <div class="heading">
                      <?php echo $retornoAlerta2->Mensagem; ?> 
                    </div>
                    <div class="description">
                      <?php echo $retornoAlerta2->Mensagem;?> 
                    </div>
                    <div class="date pull-left">
                    <?php echo $retornoAlerta2->contadorAlerta; ?> 
                    </div>                    
                  </div>
                  <div class="clearfix"></div>                  
                </div>  
            <?php }} ?>   


          <?php

              /********************************************************************************************/
             /*       Variáveis para inserção no banco de dados, dados do usuario                        */
            /********************************************************************************************/
                             
                $buscarTranferencia = new Conexao();
                $buscarTranferencia->conectar();
                $buscarTranferencia->selecionarDB(); 

                $buscarUsuarioTranferiu = new Conexao();
                $buscarUsuarioTranferiu->conectar();
                $buscarUsuarioTranferiu->selecionarDB(); 

                $buscarEtapaTrasnferida = new Conexao();
                $buscarEtapaTrasnferida->conectar();
                $buscarEtapaTrasnferida->selecionarDB(); 

                
                $buscarTranferencia->set('sql',"SELECT * FROM TranferenciaEtapaTarefa 
                                                         WHERE IdUsuarioPegou = '$IdUsuario' AND
                                                               DataTranferencia = '$dataHoje'
                                                         ORDER BY IdTransferencia DESC
                                                         LIMIT 1 ");
                $retornoTranferencia= mysql_fetch_object($buscarTranferencia->executarQuery());  


               if ($retornoTranferencia) { 
                 $buscarUsuarioTranferiu->set('sql',"SELECT * FROM Usuarios 
                                                         WHERE IdUsuario = '$retornoTranferencia->IdUsuarioTranferiu' ");
                $retornoUsuarioTranferiu= mysql_fetch_object($buscarUsuarioTranferiu->executarQuery());  

                 $buscarEtapaTrasnferida->set('sql',"SELECT * FROM EtapaTarefa 
                                                         WHERE IdEtapaTarefa = '$retornoTranferencia->IdEtapaTarefa' ");
                $retornoEtapaTrasnferida = mysql_fetch_object($buscarEtapaTrasnferida->executarQuery());  
              }
           ?>

           <?php if ($retornoTranferencia) { ?>
                <div class="notification-messages info">
                  <div class="user-profile">
                    <img src="includes/php/fotos/Funcionario/<?php echo $retornoUsuarioTranferiu->Foto; ?>"  alt="" data-src="includes/php/fotos/Funcionario/<?php echo $retornoUsuarioTranferiu->Foto; ?>" data-src-retina="includes/php/fotos/Funcionario/<?php echo $retornoUsuarioTranferiu->Foto; ?>" width="35" height="35">
                  </div>
                  <div class="message-wrapper">
                    <div class="heading">
                      <?php echo $retornoUsuarioTranferiu->NomeExibicao; ?> - Transferencia
                    </div>
                    <div class="description">
                      Tranferiu - <?php echo $retornoEtapaTrasnferida->TituloEtapa; ?> - para você.
                    </div>
                    <div class="date pull-left">
                    <?php echo $retornoTranferencia->DataTranferencia; ?> 
                    </div>                    
                  </div>
                  <div class="clearfix"></div>                  
                </div>  
        <?php } ?>   
              



              <div class="notification-messages danger">
                <div class="iconholder">
                  <i class="icon-warning-sign"></i>
                </div>
                <div class="message-wrapper">
                  <div class="heading">
                    Atenção
                  </div>
                 <a href="tarefa-visualizar">
                   <div class="description">
                    <?php echo $retornoUsuarioEtapaTarefa->contadorTarefa; ?> - tarefas com o prazo para acabar                  
                  </div>
                 </a> 
                  <div class="date pull-left">
                  40 min atrás
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>


              <div class="notification-messages sucess">
                <div class="iconholder">
                  <i class="icon-warning-sign"></i>
                </div>
                <div class="message-wrapper">
                 <a href="tarefa-finalizadas">
                   <div class="description">
                    <?php echo $retornoUsuarioEtapaTarefa2->contadorTarefa; ?> - tarefas finalizadas
                  </div>
                 </a> 
                  <div class="date pull-left">
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>




                       
            </div>        
        </div>

        <div class="profile-pic"> 
          <img src="<?php echo 'includes/php/fotos/Funcionario/'.$_SESSION['usuarioFoto'];?>"  alt="" data-src="<?php echo 'includes/php/fotos/Funcionario/'.$_SESSION['usuarioFoto'];?>" data-src-retina="<?php echo 'includes/php/fotos/Funcionario/'.$_SESSION['usuarioFoto'];?>" width="35" height="35" />  
        </div>            
      </div>
     <ul class="nav quick-section ">
      <li class="quicklinks"> 
        <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">            
          <div class="iconset top-settings-dark "></div>  
        </a>
        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                  <li><a href="modelo"> Minha Conta</a>
                  </li>
                  <li><a href="calendario">Meu calendario</a>
                  </li>
                  <li><a href="tarefa-visualizar"> Tarefas <span class="badge badge-important animated bounceIn"><?php echo $retornoUsuarioEtapaTarefa->contadorTarefa; ?></span></a>
                  </li>
                  <li class="divider"></li>                
                  <li><a href="sair"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Sair</a></li>
               </ul>
      </li> 
      
      </ul>
      </div>

<?php }  ?>


<!--Formulário para envio de SQl-->
<?php function formBuscaSql(){?>

<form id="formBuscaSql" name="formBuscaSql" method="POST" action="busca-sql">
    <input type="hidden" id="sql" name="sql">
</form>

<?php }  ?>