<?php
$data = date('d-m-Y');
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"Relatório".$data .".xlsx\"");
header("Cache-Control: max-age=0");

/** Include PHPExcel */
require_once('includes/php/conexao/PHPExcel/Classes/PHPExcel.php');

$objPHPExcel = new PHPExcel();

include('includes/php/conexao/Conexao.class.php');

         
                     /********************************************************************************************/
                    /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                    /********************************************************************************************/
                     
                        $buscarEmpresa = new Conexao();
                        $buscarEmpresa->conectar();
                        $buscarEmpresa->selecionarDB(); 
                        
                    
                    if (isset($_POST['checkHoldingTodas'])) {
                        $buscarEmpresa->set('sql',"SELECT * FROM CadastroHolding ");
                    }elseif ($_POST['SelectHolding'] != "Todos...") {
                      $IdEmpresa = $_POST['SelectHolding'];
                      $buscarEmpresa->set('sql',"SELECT * FROM CadastroHolding WHERE IdEmpresa = '$IdEmpresa' ");
                    }elseif ((isset($_POST['checkHoldingFisica'])) && ($_POST['checkHoldingFisica'] == "Pessoa Fisica")) {
                      $buscarEmpresa->set('sql',"SELECT * FROM CadastroHolding WHERE TipoPessoa = 'fisica' ");
                    }elseif ((isset($_POST['checkHoldingJuridica'])) && ($_POST['checkHoldingJuridica'] == "Pessoa Juridica")) {
                      $buscarEmpresa->set('sql',"SELECT * FROM CadastroHolding WHERE TipoPessoa = 'juridica' ");
                    }




                      /********************************************************************************************/
                      /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                      /********************************************************************************************/
                             
                                $buscarRequerente = new Conexao();
                                $buscarRequerente->conectar();
                                $buscarRequerente->selecionarDB(); 
                            
                            if (isset($_POST['checkRequerenteTodos'])) {
                                $buscarRequerente->set('sql',"SELECT * FROM CadastroRequerente ");
                            }elseif ($_POST['SelectRequerente'] != "Todos...") {
                              $IdRequerente = $_POST['SelectRequerente'];
                              $buscarRequerente->set('sql',"SELECT * FROM CadastroRequerente WHERE IdRequerente = '$IdRequerente' ");
                            }




                             /********************************************************************************************/
                            /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                            /********************************************************************************************/
                          
                                $buscarImovel = new Conexao();
                                $buscarImovel->conectar();
                                $buscarImovel->selecionarDB(); 
                            
                            if (isset($_POST['checkImovelTodos'])) {
                                $buscarImovel->set('sql',"SELECT CadastraImovel.*,RazaoSocial,Nome 
                                                          FROM CadastroHolding,CadastroRequerente
                                                          INNER JOIN  CadastraImovel 
                                                          WHERE CadastraImovel.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                             CadastraImovel.IdRequerente = CadastroRequerente.IdRequerente " );
                            }elseif ($_POST['SelectImovel'] != "Todos...") {
                              $IdImovel = $_POST['SelectImovel'];
                              $buscarImovel->set('sql',"SELECT CadastraImovel.*,RazaoSocial,Nome 
                                                          FROM CadastroHolding,CadastroRequerente
                                                          INNER JOIN  CadastraImovel 
                                                          WHERE CadastraImovel.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                             CadastraImovel.IdRequerente = CadastroRequerente.IdRequerente AND 
                                                             IdImovel = '$IdImovel'
                                                          GROUP BY CadastraImovel.IdImovel ");
                            }






                             /********************************************************************************************/
                            /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                            /********************************************************************************************/
                             
                              $buscarTarefa = new Conexao();
                                $buscarTarefa->conectar();
                                $buscarTarefa->selecionarDB(); 

                            // Busca todas as tarefas
                            if (isset($_POST['checkTarefasTodas'])) {
                                $buscarTarefa->set('sql',"SELECT CadastraTarefa.*,RazaoSocial,Nome
                                                          FROM CadastroHolding,CadastroRequerente
                                                          INNER JOIN  CadastraTarefa 
                                                          WHERE CadastraTarefa.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                             CadastraTarefa.IdRequerente = CadastroRequerente.IdRequerente " );
                            }

                            // Busca todas as tarefas concluidas
                            elseif (isset($_POST['checkTarefasConcluidas'])) {
                                $buscarTarefa->set('sql',"SELECT CadastraTarefa.*,RazaoSocial,Nome
                                                          FROM CadastroHolding,CadastroRequerente
                                                          INNER JOIN  CadastraTarefa 
                                                          WHERE CadastraTarefa.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                             CadastraTarefa.IdRequerente = CadastroRequerente.IdRequerente AND 
                                                             SituacaoTarefa = 'Finalizada' " );
                            }

                            // Busca todas as tarefas Pusadas
                            elseif (isset($_POST['checkTarefasPausadas'])) {
                                $buscarTarefa->set('sql',"SELECT CadastraTarefa.*,RazaoSocial,Nome
                                                          FROM CadastroHolding,CadastroRequerente
                                                          INNER JOIN  CadastraTarefa 
                                                          WHERE CadastraTarefa.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                             CadastraTarefa.IdRequerente = CadastroRequerente.IdRequerente AND 
                                                             SituacaoTarefa = 'Pausada' " );
                            }

                             // Busca todas as tarefas Pusadas
                            elseif (isset($_POST['checkTarefasAtrasadas'])) {
                                $buscarTarefa->set('sql',"SELECT CadastraTarefa.*,RazaoSocial,Nome
                                                          FROM CadastroHolding,CadastroRequerente
                                                          INNER JOIN  CadastraTarefa 
                                                          WHERE CadastraTarefa.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                             CadastraTarefa.IdRequerente = CadastroRequerente.IdRequerente AND 
                                                             SituacaoTarefa = 'Atrasada' " );
                            }

                            // Busca todas as tarefas Pusadas
                            elseif (isset($_POST['checkTarefasEmAndamento'])) {
                                $buscarTarefa->set('sql',"SELECT CadastraTarefa.*,RazaoSocial,Nome
                                                          FROM CadastroHolding,CadastroRequerente
                                                          INNER JOIN  CadastraTarefa 
                                                          WHERE CadastraTarefa.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                             CadastraTarefa.IdRequerente = CadastroRequerente.IdRequerente AND 
                                                             SituacaoTarefa = 'Em Andamento' " );
                            }

                            // Busca todas as tarefas com ducumentos a espera
                            elseif (isset($_POST['checkTarefasEperaDocumentos'])) {
                                $buscarTarefa->set('sql',"SELECT SolicitacaoDocumetosTarefa.*,CadastraTarefa.*,RazaoSocial,Nome
                                                          FROM CadastraTarefa, CadastroHolding, CadastroRequerente 
                                                          INNER JOIN  SolicitacaoDocumetosTarefa 
                                                          WHERE SolicitacaoDocumetosTarefa.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                             SolicitacaoDocumetosTarefa.IdRequerente = CadastroRequerente.IdRequerente AND
                                                             SolicitacaoDocumetosTarefa.IdTarefa = CadastraTarefa.IdTarefa AND 
                                                             SolicitacaoDocumetosTarefa.Solicitar = '' AND
                                                             SolicitacaoDocumetosTarefa.Recebido = ''
                                                             GROUP BY SolicitacaoDocumetosTarefa.IdSolicitacaoDocUmento  " );
                            }

                            // Busca todas as tarefas com ducumentos a Solicitados
                            elseif (isset($_POST['checkTarefasDocumentoSolicitado'])) {
                                $buscarTarefa->set('sql',"SELECT SolicitacaoDocumetosTarefa.*,CadastraTarefa.*,RazaoSocial,Nome
                                                          FROM CadastraTarefa, CadastroHolding, CadastroRequerente 
                                                          INNER JOIN  SolicitacaoDocumetosTarefa 
                                                          WHERE SolicitacaoDocumetosTarefa.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                             SolicitacaoDocumetosTarefa.IdRequerente = CadastroRequerente.IdRequerente AND
                                                             SolicitacaoDocumetosTarefa.IdTarefa = CadastraTarefa.IdTarefa AND 
                                                             SolicitacaoDocumetosTarefa.Solicitar != '' AND
                                                             SolicitacaoDocumetosTarefa.Recebido = ''
                                                             GROUP BY SolicitacaoDocumetosTarefa.IdSolicitacaoDocUmento  " );
                            }

                            // Busca todas as tarefas com ducumentos Recebidos
                            elseif (isset($_POST['checkTArefasDocumentoRecebido'])) {
                                $buscarTarefa->set('sql',"SELECT SolicitacaoDocumetosTarefa.*,CadastraTarefa.*,RazaoSocial,Nome
                                                          FROM CadastraTarefa, CadastroHolding, CadastroRequerente 
                                                          INNER JOIN  SolicitacaoDocumetosTarefa 
                                                          WHERE SolicitacaoDocumetosTarefa.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                             SolicitacaoDocumetosTarefa.IdRequerente = CadastroRequerente.IdRequerente AND
                                                             SolicitacaoDocumetosTarefa.IdTarefa = CadastraTarefa.IdTarefa AND 
                                                             SolicitacaoDocumetosTarefa.Solicitar != '' AND
                                                             SolicitacaoDocumetosTarefa.Recebido != ''
                                                             GROUP BY SolicitacaoDocumetosTarefa.IdSolicitacaoDocUmento  " );
                            }

                            // Busca todas a tarefa do Holding selecionado
                            elseif ($_POST['SelectTarefas'] != "Todos...") {
                              $IdEmpresa = $_POST['SelectTarefas'];
                              $buscarTarefa->set('sql',"SELECT CadastraTarefa.*,RazaoSocial,Nome
                                                          FROM CadastroHolding,CadastroRequerente
                                                          INNER JOIN  CadastraTarefa 
                                                          WHERE CadastraTarefa.IdEmpresa = '$IdEmpresa'AND
                                                             CadastraTarefa.IdRequerente = CadastroRequerente.IdRequerente 
                                                          GROUP BY CadastraTarefa.IdTarefa");
                            }







                             /********************************************************************************************/
                            /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                            /********************************************************************************************/
                             
                             $buscarProcesso = new Conexao();
                                $buscarProcesso->conectar();
                                $buscarProcesso->selecionarDB(); 
                            

                            //Busca todos os processos
                            if (isset($_POST['checkProcessoTodos'])) {
                                $buscarProcesso->set('sql',"SELECT CadastraPocesso.*,RazaoSocial,Nome,NumeroContribuinte, DetalheProcesso.*
                                                          FROM CadastroHolding,CadastroRequerente, CadastraImovel, DetalheProcesso
                                                          INNER JOIN  CadastraPocesso 
                                                          WHERE CadastraPocesso.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                                CadastraPocesso.IdRequerente = CadastroRequerente.IdRequerente AND
                                                                CadastraPocesso.IdImovel = CadastraImovel.IdImovel AND
                                                                CadastraPocesso.IdProcesso = DetalheProcesso.IdProcesso 
                                                          GROUP BY CadastraPocesso.IdProcesso " );
                            }

                            //Busca todos os processos em Comunique-se
                            if (isset($_POST['checkProcessosComunique']) && !isset($_POST['checkProcessoTodos'])) {
                                $buscarProcesso->set('sql',"SELECT CadastraPocesso.*,RazaoSocial,Nome,NumeroContribuinte, DetalheProcesso.*
                                                          FROM CadastroHolding,CadastroRequerente, CadastraImovel, DetalheProcesso
                                                          INNER JOIN  CadastraPocesso 
                                                          WHERE CadastraPocesso.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                                CadastraPocesso.IdRequerente = CadastroRequerente.IdRequerente AND
                                                                CadastraPocesso.IdImovel = CadastraImovel.IdImovel AND
                                                                CadastraPocesso.IdProcesso = DetalheProcesso.IdProcesso AND
                                                                DetalheProcesso.AcaoProcessoDetalhe = 'Comunique-se'
                                                          GROUP BY CadastraPocesso.IdProcesso " );
                            }


                            //Busca todos os processos em Comunique-se
                            if (isset($_POST['checkProcessosAnalise']) && !isset($_POST['checkProcessoTodos'])) {
                                $buscarProcesso->set('sql',"SELECT CadastraPocesso.*,RazaoSocial,Nome,NumeroContribuinte, DetalheProcesso.*
                                                          FROM CadastroHolding,CadastroRequerente, CadastraImovel, DetalheProcesso
                                                          INNER JOIN  CadastraPocesso 
                                                          WHERE CadastraPocesso.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                                CadastraPocesso.IdRequerente = CadastroRequerente.IdRequerente AND
                                                                CadastraPocesso.IdImovel = CadastraImovel.IdImovel AND
                                                                CadastraPocesso.IdProcesso = DetalheProcesso.IdProcesso AND
                                                                DetalheProcesso.AcaoProcessoDetalhe = 'Em analise'
                                                          GROUP BY CadastraPocesso.IdProcesso " );
                            }


                            //Busca todos os processos  Deferidos
                            if (isset($_POST['checkProcessosDeferido']) && !isset($_POST['checkProcessoTodos']) && !isset($_POST['checkProcessoTodos'])) {
                                $buscarProcesso->set('sql',"SELECT CadastraPocesso.*,RazaoSocial,Nome,NumeroContribuinte, DetalheProcesso.*
                                                          FROM CadastroHolding,CadastroRequerente, CadastraImovel, DetalheProcesso
                                                          INNER JOIN  CadastraPocesso 
                                                          WHERE CadastraPocesso.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                                CadastraPocesso.IdRequerente = CadastroRequerente.IdRequerente AND
                                                                CadastraPocesso.IdImovel = CadastraImovel.IdImovel AND
                                                                CadastraPocesso.IdProcesso = DetalheProcesso.IdProcesso AND
                                                                DetalheProcesso.AcaoProcessoDetalhe = 'Deferido'
                                                          GROUP BY CadastraPocesso.IdProcesso " );
                            }


                            //Busca todos os processos  Indeferidos
                            if (isset($_POST['checkProcessosIndeferido']) && !isset($_POST['checkProcessoTodos'])) {
                                $buscarProcesso->set('sql',"SELECT CadastraPocesso.*,RazaoSocial,Nome,NumeroContribuinte, DetalheProcesso.*
                                                          FROM CadastroHolding,CadastroRequerente, CadastraImovel, DetalheProcesso
                                                          INNER JOIN  CadastraPocesso 
                                                          WHERE CadastraPocesso.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                                CadastraPocesso.IdRequerente = CadastroRequerente.IdRequerente AND
                                                                CadastraPocesso.IdImovel = CadastraImovel.IdImovel AND
                                                                CadastraPocesso.IdProcesso = DetalheProcesso.IdProcesso AND
                                                                DetalheProcesso.AcaoProcessoDetalhe = 'Indeferido'
                                                          GROUP BY CadastraPocesso.IdProcesso " );
                            }


                             //Busca todos os processos  com Prazos solicitados
                            if (isset($_POST['checkProcessoPrazo']) && !isset($_POST['checkProcessoTodos'])) {
                                $buscarProcesso->set('sql',"SELECT CadastraPocesso.*,RazaoSocial,Nome,NumeroContribuinte, DetalheProcesso.*
                                                          FROM CadastroHolding,CadastroRequerente, CadastraImovel, DetalheProcesso
                                                          INNER JOIN  CadastraPocesso 
                                                          WHERE CadastraPocesso.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                                CadastraPocesso.IdRequerente = CadastroRequerente.IdRequerente AND
                                                                CadastraPocesso.IdImovel = CadastraImovel.IdImovel AND
                                                                CadastraPocesso.IdProcesso = DetalheProcesso.IdProcesso AND
                                                                DetalheProcesso.AcaoProcessoDetalhe = 'Solicitar Prazo'
                                                          GROUP BY CadastraPocesso.IdProcesso " );
                            }


                              //Busca todos os processos  Indeferidos
                            if (isset($_POST['checkProcessoVisita']) && !isset($_POST['checkProcessoTodos'])) {
                                $buscarProcesso->set('sql',"SELECT CadastraPocesso.*,RazaoSocial,Nome,NumeroContribuinte, DetalheProcesso.*
                                                          FROM CadastroHolding,CadastroRequerente, CadastraImovel, DetalheProcesso
                                                          INNER JOIN  CadastraPocesso 
                                                          WHERE CadastraPocesso.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                                CadastraPocesso.IdRequerente = CadastroRequerente.IdRequerente AND
                                                                CadastraPocesso.IdImovel = CadastraImovel.IdImovel AND
                                                                CadastraPocesso.IdProcesso = DetalheProcesso.IdProcesso AND
                                                                DetalheProcesso.AcaoProcessoDetalhe = 'Vista'
                                                          GROUP BY CadastraPocesso.IdProcesso " );
                            }


                              //Busca todos os processos  Indeferidos
                            if (isset($_POST['checkProcessosAgendamento']) && !isset($_POST['checkProcessoTodos'])) {
                                $buscarProcesso->set('sql',"SELECT CadastraPocesso.*,RazaoSocial,Nome,NumeroContribuinte, DetalheProcesso.*
                                                          FROM CadastroHolding,CadastroRequerente, CadastraImovel, DetalheProcesso
                                                          INNER JOIN  CadastraPocesso 
                                                          WHERE CadastraPocesso.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                                CadastraPocesso.IdRequerente = CadastroRequerente.IdRequerente AND
                                                                CadastraPocesso.IdImovel = CadastraImovel.IdImovel AND
                                                                CadastraPocesso.IdProcesso = DetalheProcesso.IdProcesso AND
                                                                DetalheProcesso.AcaoProcessoDetalhe = 'Agendamento'
                                                          GROUP BY CadastraPocesso.IdProcesso " );
                            }


                              //Busca todos os processos  Indeferidos
                            if (isset($_POST['checkProcessosConcluidos']) && !isset($_POST['checkProcessoTodos'])) {
                                $buscarProcesso->set('sql',"SELECT CadastraPocesso.*,RazaoSocial,Nome,NumeroContribuinte, DetalheProcesso.*
                                                          FROM CadastroHolding,CadastroRequerente, CadastraImovel, DetalheProcesso
                                                          INNER JOIN  CadastraPocesso 
                                                          WHERE CadastraPocesso.IdEmpresa = CadastroHolding.IdEmpresa AND
                                                                CadastraPocesso.IdRequerente = CadastroRequerente.IdRequerente AND
                                                                CadastraPocesso.IdImovel = CadastraImovel.IdImovel AND
                                                                CadastraPocesso.IdProcesso = DetalheProcesso.IdProcesso AND
                                                                DetalheProcesso.AcaoProcessoDetalhe = 'Concluído'
                                                          GROUP BY CadastraPocesso.IdProcesso " );
                            }









                             /********************************************************************************************/
                            /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                            /********************************************************************************************/
                             
                                $buscarOportunidade = new Conexao();
                                $buscarOportunidade->conectar();
                                $buscarOportunidade->selecionarDB(); 
                            
                            //Busca todas as oportunidades
                            if (isset($_POST['checkOportunidadeTodas'])) {
                                $buscarOportunidade->set('sql',"SELECT * FROM Oportunidade" );
                            }


                            //Busca todas as oportunidades por tipo
                            elseif (isset($_POST['checkOportunidadeTipo'])) {
                              $buscarOportunidade->set('sql',"SELECT * FROM Oportunidade");
                            }


                            //Busca todas as oportunidades por origem
                            elseif (isset($_POST['checkOportunidadeOrigem'])) {
                              $buscarOportunidade->set('sql',"SELECT * FROM Oportunidade");
                            }


                            //Busca todas as oportunidades por Pessoa Fisica
                            elseif (isset($_POST['checkOportunidadeFisica'])) {
                              $buscarOportunidade->set('sql',"SELECT * FROM Oportunidade
                                                              WHERE TipoCadastro = 'Pessoa Fisica' ");
                            }


                            //Busca todas as oportunidades por Pessoa Juridica
                            elseif (isset($_POST['checkOportunidadeJuridica'])) {
                              $buscarOportunidade->set('sql',"SELECT * FROM Oportunidade
                                                              WHERE TipoCadastro = 'Pessoa Juridica' ");
                            }


                            //Busca todas as oportunidades por Viabilidade
                            elseif (isset($_POST['checkOportunidadeInviavel'])) {
                              $buscarOportunidade->set('sql',"SELECT * FROM Oportunidade
                                                              WHERE Status = 'Inviavel' ");
                            }


                            //Busca todas as oportunidades por Viabilidade
                            elseif (isset($_POST['checkOportunidadeViavel'])) {
                              $buscarOportunidade->set('sql',"SELECT * FROM Oportunidade
                                                              WHERE Status = 'Viável' ");
                            }


                            //Busca todas as oportunidades por Data
                            elseif (isset($_POST['checkOportunidadeDataEnvio'])) {
                              $buscarOportunidade->set('sql',"SELECT * FROM Oportunidade ");
                            }


                            //Busca todas as oportunidades por Negociando
                            elseif (isset($_POST['checkOportunidadeNegociando'])) {
                              $buscarOportunidade->set('sql',"SELECT * FROM Oportunidade
                                                              WHERE Status = 'Negociar' ");
                            }


                            //Busca todas as oportunidades por Prorrogado
                            elseif (isset($_POST['checkOportunidadeProrrogado'])) {
                              $buscarOportunidade->set('sql',"SELECT * FROM Oportunidade
                                                              WHERE Status = 'Prorrogar' ");
                            }


                            //Busca todas as oportunidades por Fechado
                            elseif (isset($_POST['checkOportunidadeFechado'])) {
                              $buscarOportunidade->set('sql',"SELECT * FROM Oportunidade
                                                              WHERE Status = 'Fechado' ");
                            }


                            //Busca todas as oportunidades por Perdido
                            elseif (isset($_POST['checkOportunidadePerdido'])) {
                              $buscarOportunidade->set('sql',"SELECT * FROM Oportunidade
                                                              WHERE Status = 'Perdido' ");
                            }

                            //Busca todas as oportunidades por Reais Fechado
                            elseif (isset($_POST['checkOportunidadeReaisFechado'])) {
                              $buscarOportunidade->set('sql',"SELECT * FROM Oportunidade
                                                              WHERE Status = 'Orçamento Aceito' ");
                            }


                            //Busca todas as oportunidades por Perdido
                            elseif (isset($_POST['checkOportunidadeReaisPerdido'])) {
                              $buscarOportunidade->set('sql',"SELECT * FROM Oportunidade
                                                              WHERE Status = 'Perdido' ");
                            }else{
                              $buscarOportunidade->set('sql',"SELECT * FROM Oportunidade ");
                            }


                             /********************************************************************************************/
                            /*       Variáveis para inserção no banco de dados, insere a OPORTUNIDADE e a empresa        */
                            /********************************************************************************************/
                             
                             $buscarIncorporacao = new Conexao();
                             $buscarIncorporacao->conectar();
                             $buscarIncorporacao->selecionarDB(); 

                            //Busca todas as Incorporacaoes por Perdido
                            if (isset($_POST['checkIncorporacaoTodas'])) {
                              $buscarIncorporacao->set('sql',"SELECT * FROM CadastraIncorporacao ");
                            }else{
                              $IdIncorporacao = $_POST['SelectIncorporacao'];
                              $buscarIncorporacao->set('sql',"SELECT * 
                                                              FROM CadastraIncorporacao 
                                                              WHERE IdIncorporacao = '$IdIncorporacao' ");
                            }


                     // Set active sheet index to the first sheet, so Excel opens this as the first sheet
                       $objPHPExcel->setActiveSheetIndex(0); 
                  
                          

                       $queryEmpresa= $buscarEmpresa->executarQuery();
                       $queryRequerente= $buscarRequerente->executarQuery();
                       $queryImovel= $buscarImovel->executarQuery();
                       $queryTarefa= $buscarTarefa->executarQuery();
                       $queryProcesso= $buscarProcesso->executarQuery();
                       $queryOportunidade= $buscarOportunidade->executarQuery();
                       $queryIncorporacao= $buscarIncorporacao->executarQuery();

                      $ArrayHolding;
                      $ArrayRequerente;
                      $ArrayImovel;
                      $ArrayTarefas;
                      $ArrayProcessos;
                      $ArrayOportunidades;

                      $ContHolding = 5;
                      $ContRequerente = 5;
                      $ContImovel = 5;
                      $ContTarefas = 5;
                      $ContProcessos = 5;
                      $ContOportunidades = 5;
                      $ContIncorporacao = 5;

                      $linha = 5;
                      $data2 = date('d/m/Y H:i:s');

                     // Set title row bold
                     $objPHPExcel->getActiveSheet()->getStyle('A1:F1')->getFont()->setBold(true);
                     $objPHPExcel->getActiveSheet()->getStyle('A2:AN2')->getFont()->setBold(true);
                     $objPHPExcel->getActiveSheet()->getStyle('A3:AN3')->getFont()->setBold(true);
                     
                     $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Relatório gerado em:');
                     $objPHPExcel->getActiveSheet()->setCellValue('B1', "$data2");
                     $objPHPExcel->getActiveSheet()->setCellValue('A3', 'Holding')
                                                   ->setCellValue('A4', 'Razão Social')
                                                   ->setCellValue('B4', 'Nome Fantasia')
                                                   ->setCellValue('C4', 'Tipo')
                                                   ->setCellValue('D4', 'Atividade');

                      while($retornoEmpresa=mysql_fetch_object($queryEmpresa)) { 

                      $objPHPExcel->getActiveSheet()->setCellValue("A".$ContHolding."", "$retornoEmpresa->RazaoSocial");
                      $objPHPExcel->getActiveSheet()->setCellValue("B".$ContHolding."", "$retornoEmpresa->NomeFantasia");
                      $objPHPExcel->getActiveSheet()->setCellValue("C".$ContHolding."", "$retornoEmpresa->TipoPessoa");
                      $objPHPExcel->getActiveSheet()->setCellValue("D".$ContHolding."", "$retornoEmpresa->Atividade"); 

                        $ContHolding++;
                      }


                     
                      $objPHPExcel->getActiveSheet()->setCellValue("E3", "   ")
                                                          ->setCellValue("F3", 'Requerente')
                                                          ->setCellValue("F4", 'Nome')
                                                          ->setCellValue("G4", 'Endereço')
                                                          ->setCellValue("H4", 'Municipio')
                                                          ->setCellValue("I4", 'Email');

                      while($retornoRequerente=mysql_fetch_object($queryRequerente)) { 

                      $objPHPExcel->getActiveSheet()->setCellValue("F".$ContRequerente."", "$retornoRequerente->Nome");
                      $objPHPExcel->getActiveSheet()->setCellValue("G".$ContRequerente."", "$retornoRequerente->Endereco, $retornoRequerente->Numero");
                      $objPHPExcel->getActiveSheet()->setCellValue("H".$ContRequerente."", "$retornoRequerente->Municipio");
                      $objPHPExcel->getActiveSheet()->setCellValue("I".$ContRequerente."", "$retornoRequerente->Email"); 
                       
                        $ContRequerente++;
                      }


                      $objPHPExcel->getActiveSheet()->setCellValue('J3', "   ")
                                                          ->setCellValue('K3', 'Imóveis')
                                                          ->setCellValue('K4', 'Número do contribuinte')
                                                          ->setCellValue('L4', 'Holding')
                                                          ->setCellValue('M4', 'Requerente')
                                                          ->setCellValue('N4', 'Nome Exibição')
                                                          ->setCellValue('O4', 'Local do Imóvel')
                                                          ->setCellValue('P4', 'Uso do Imóvel');

                      while ($retornoImovel=mysql_fetch_object($queryImovel)) {

                      $objPHPExcel->getActiveSheet()->setCellValue("K".$ContImovel."", "$retornoImovel->NumeroContribuinte");
                      $objPHPExcel->getActiveSheet()->setCellValue("L".$ContImovel."", "$retornoImovel->RazaoSocial");
                      $objPHPExcel->getActiveSheet()->setCellValue("M".$ContImovel."", "$retornoImovel->Nome");
                      $objPHPExcel->getActiveSheet()->setCellValue("N".$ContImovel."", "$retornoImovel->NomeExibicao");
                      $objPHPExcel->getActiveSheet()->setCellValue("O".$ContImovel."", "$retornoImovel->LocalImovel, $retornoImovel->CodLog");
                      $objPHPExcel->getActiveSheet()->setCellValue("P".$ContImovel."", "$retornoImovel->UsoImovel");
                         
                        $ContImovel++;
                      }


                      $objPHPExcel->getActiveSheet()->setCellValue('Q3', "   ")
                                                          ->setCellValue('R3', 'Tarefas')
                                                          ->setCellValue('R4', 'Nome do Projeto')
                                                          ->setCellValue('S4', 'Data Inicio')
                                                          ->setCellValue('T4', 'Data Entrega')
                                                          ->setCellValue('U4', 'Situação da Tarefa'); 

                       while ($retornoTarefa=mysql_fetch_object($queryTarefa)) {

                      $objPHPExcel->getActiveSheet()->setCellValue("R".$ContTarefas."", "$retornoTarefa->NomeProjeto");
                      $objPHPExcel->getActiveSheet()->setCellValue("S".$ContTarefas."", "$retornoTarefa->DataInicio");
                      $objPHPExcel->getActiveSheet()->setCellValue("T".$ContTarefas."", "$retornoTarefa->DataEntrega");
                      $objPHPExcel->getActiveSheet()->setCellValue("U".$ContTarefas."", "$retornoTarefa->SituacaoTarefa");

                         $ContTarefas++;
                      }


                       $objPHPExcel->getActiveSheet()->setCellValue('V3', "   ");
                       $objPHPExcel->getActiveSheet()->setCellValue('W3', 'Processos')
                                                          ->setCellValue('W4', 'Holdind')
                                                          ->setCellValue('X4', 'Requerente')
                                                          ->setCellValue('Y4', 'SQl')
                                                          ->setCellValue('Z4', 'Nome do Processo')
                                                          ->setCellValue('AA4', 'Situação do Processo'); 

                       while ($retornoProcesso=mysql_fetch_object($queryProcesso)) {

                         $objPHPExcel->getActiveSheet()->setCellValue("W".$ContProcessos."", "$retornoProcesso->RazaoSocial");
                         $objPHPExcel->getActiveSheet()->setCellValue("X".$ContProcessos."", "$retornoProcesso->Nome");
                         $objPHPExcel->getActiveSheet()->setCellValue("Y".$ContProcessos."", "$retornoProcesso->NumeroContribuinte");
                         $objPHPExcel->getActiveSheet()->setCellValue("Z".$ContProcessos."", "$retornoProcesso->NomeProcesso");
                         $objPHPExcel->getActiveSheet()->setCellValue("AA".$ContProcessos."", "$retornoProcesso->AcaoProcessoDetalhe");

                          $ContProcessos++;
                      }


                       $objPHPExcel->getActiveSheet()->setCellValue('AB3', "   ");
                       $objPHPExcel->getActiveSheet()->setCellValue('AI3', "   ");
                       $objPHPExcel->getActiveSheet()->setCellValue('AC3', 'Oportunidades')
                                                          ->setCellValue('AC4', 'Tipo de Contato')
                                                          ->setCellValue('AD4', 'Origem')
                                                          ->setCellValue('AE4', 'Razão Social')
                                                          ->setCellValue('AF4', 'Nome do contato')
                                                          ->setCellValue('AG4', 'Atividade')
                                                          ->setCellValue('AH4', 'E-mail'); 

                       while ($retornoOportunidade=mysql_fetch_object($queryOportunidade)) {

                         $objPHPExcel->getActiveSheet()->setCellValue("AC".$ContOportunidades."", "$retornoOportunidade->TipoContato");
                         $objPHPExcel->getActiveSheet()->setCellValue("AD".$ContOportunidades."", "$retornoOportunidade->Origem");
                         $objPHPExcel->getActiveSheet()->setCellValue("AE".$ContOportunidades."", "$retornoOportunidade->RazaoSocial");
                         $objPHPExcel->getActiveSheet()->setCellValue("AF".$ContOportunidades."", "$retornoOportunidade->NomeContato");
                         $objPHPExcel->getActiveSheet()->setCellValue("AG".$ContOportunidades."", "$retornoOportunidade->Atividade");
                         $objPHPExcel->getActiveSheet()->setCellValue("AH".$ContOportunidades."", "$retornoOportunidade->Email");

                          $ContOportunidades++;
                      }



                      
                      //Incorporação
                       $objPHPExcel->getActiveSheet()->setCellValue('AD3', "   ");
                       $objPHPExcel->getActiveSheet()->setCellValue('BF4', "   ");
                       $objPHPExcel->getActiveSheet()->setCellValue('AJ3', 'Incorporação')
                                                          ->setCellValue('AJ4', 'Sigla')
                                                          ->setCellValue('AK4', 'TÍtulo')
                                                          ->setCellValue('AL4', 'Cep')
                                                          ->setCellValue('AM4', 'Local')
                                                          ->setCellValue('AN4', 'Numero')
                                                          ->setCellValue('AO4', 'Estado')
                                                          ->setCellValue('AP4', 'Cidade')
                                                          ->setCellValue('AQ4', 'Bairro')
                                                          ->setCellValue('AR4', 'Metragem')
                                                          ->setCellValue('AS4', 'Valor Venda')
                                                          ->setCellValue('AT4', 'Atividade')
                                                          ->setCellValue('AU4', 'Zonemaneto')
                                                          ->setCellValue('AV4', 'Ca Básico')
                                                          ->setCellValue('AW4', 'Ca Máximo')
                                                          ->setCellValue('AX4', 'Nome Proprietário')
                                                          ->setCellValue('AY4', 'Telefone Proprietário')
                                                          ->setCellValue('AZ4', 'Email Proprietário')
                                                          ->setCellValue('BA4', 'Nome Corretor')
                                                          ->setCellValue('BC4', 'Telefone Corretor')
                                                          ->setCellValue('BD4', 'Email Corretor')
                                                          ->setCellValue('BE4', 'Situção')
                                                          ->setCellValue('BF4', 'Projeto Aprovado')
                                                          ->setCellValue('BG4', 'Documentação');

                      while ($retornoIncorporacao=mysql_fetch_object($queryIncorporacao)) {

                         $objPHPExcel->getActiveSheet()->setCellValue("AJ".$ContIncorporacao."", "$retornoIncorporacao->SiglaIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("AK".$ContIncorporacao."", "$retornoIncorporacao->TituloIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("AL".$ContIncorporacao."", "$retornoIncorporacao->CepIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("AM".$ContIncorporacao."", "$retornoIncorporacao->LocalIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("AN".$ContIncorporacao."", "$retornoIncorporacao->NumeroIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("AO".$ContIncorporacao."", "$retornoIncorporacao->EstadoIncorporacao");

                         $objPHPExcel->getActiveSheet()->setCellValue("AP".$ContIncorporacao."", "$retornoIncorporacao->CidadeIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("AQ".$ContIncorporacao."", "$retornoIncorporacao->BairroIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("AR".$ContIncorporacao."", "$retornoIncorporacao->MetragemIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("AS".$ContIncorporacao."", "$retornoIncorporacao->ValorVendaIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("AT".$ContIncorporacao."", "$retornoIncorporacao->AtividadeIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("AU".$ContIncorporacao."", "$retornoIncorporacao->ZonemanetoIncorporacao");

                         $objPHPExcel->getActiveSheet()->setCellValue("AV".$ContIncorporacao."", "$retornoIncorporacao->CaBasicoIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("AW".$ContIncorporacao."", "$retornoIncorporacao->CaMaximoIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("AX".$ContIncorporacao."", "$retornoIncorporacao->NomeProprietarioIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("AY".$ContIncorporacao."", "$retornoIncorporacao->TelProprietarioIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("AZ".$ContIncorporacao."", "$retornoIncorporacao->EmailProprietarioIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("BA".$ContIncorporacao."", "$retornoIncorporacao->NomeCorreteorIncorpotacao");

                         $objPHPExcel->getActiveSheet()->setCellValue("BC".$ContIncorporacao."", "$retornoIncorporacao->TelefoneCorretorIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("BD".$ContIncorporacao."", "$retornoIncorporacao->EmailCorretorIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("BE".$ContIncorporacao."", "$retornoIncorporacao->situacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("BF".$ContIncorporacao."", "$retornoIncorporacao->ProjetoAprovado");
                         $objPHPExcel->getActiveSheet()->setCellValue("BG".$ContIncorporacao."", "$retornoIncorporacao->DocumentacaoIncorporacao");

                          $ContIncorporacao++;
                      }


                    //Deixa as coluna com redimensionamento automatico
                    $objPHPExcel->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("F")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("G")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("H")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("I")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("J")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("K")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("L")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("M")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("N")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("O")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("P")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("Q")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("R")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("S")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("T")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("U")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("V")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("W")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("X")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("Y")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("Z")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AA")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AB")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AC")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AD")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AE")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AF")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AG")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AH")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AI")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AJ")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AK")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AL")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AM")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AN")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AO")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AP")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AQ")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AR")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AS")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AT")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AU")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AV")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AW")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AX")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AY")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("AZ")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("BA")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("BB")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("BC")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("BD")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("BE")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("BF")->setAutoSize(true);
                    $objPHPExcel->getActiveSheet()->getColumnDimension("BG")->setAutoSize(true);




                    //Muda a cor da coluna
                    $objPHPExcel->getActiveSheet()->getStyle('E3:E400')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle('J3:J400')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle('Q3:Q400')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle('V3:V400')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle('AB3:AB400')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle('AI3:AI400')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle('BH3:BH400')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');


                    // Set autofilter
                    $objPHPExcel->getActiveSheet()->setAutoFilter('A4:BG1000');                  
                    
                    
                     
                    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
                    $objWriter->save("php://output");
                    exit;


                    ?>  
                      
