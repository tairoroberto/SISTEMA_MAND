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

                      $contHolding = 6;
                      $contRequerente = 5;
                      $contImovel = 5;
                      $contTarefas = 5;
                      $contProcessos = 5;
                      $contOportunidades = 5;
                      $contIncorporação = 5;

                      $linha = 5;

                      $data2 = date('d/m/Y H:i:s');

                     // Set title row bold
                     $objPHPExcel->getActiveSheet()->getStyle('A1:F1')->getFont()->setBold(true);
                     $objPHPExcel->getActiveSheet()->getStyle('A2:AN2')->getFont()->setBold(true);
                     $objPHPExcel->getActiveSheet()->getStyle('A3:AN3')->getFont()->setBold(true);
                     
                     $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Relatório gerado em:');                     
                     $objPHPExcel->getActiveSheet()->setCellValue('B1', "$data2");



                      $contHoldingTitulo = $contHolding - 2 ;  
                     $objPHPExcel->getActiveSheet()->setCellValue("A".$contHoldingTitulo."", 'Holding')
                                                   ->setCellValue('A5', 'Razão Social')
                                                   ->setCellValue('B5', 'Nome Fantasia')
                                                   ->setCellValue('C5', 'Tipo')
                                                   ->setCellValue('D5', 'Atividade');

                      while($retornoEmpresa=mysql_fetch_object($queryEmpresa)) { 

                      $objPHPExcel->getActiveSheet()->setCellValue("A".$contHolding."", "$retornoEmpresa->RazaoSocial");
                      $objPHPExcel->getActiveSheet()->setCellValue("B".$contHolding."", "$retornoEmpresa->NomeFantasia");
                      $objPHPExcel->getActiveSheet()->setCellValue("C".$contHolding."", "$retornoEmpresa->TipoPessoa");
                      $objPHPExcel->getActiveSheet()->setCellValue("D".$contHolding."", "$retornoEmpresa->Atividade"); 

                        $contHolding++;
                      }


                      $contRequerente = $contHolding +3; 
                      $contRequerenteTitulo = $contRequerente -1 ;  
                      $objPHPExcel->getActiveSheet()->setCellValue("A".$contRequerenteTitulo."", 'Requerente')
                                                          ->setCellValue("A".$contRequerente."", 'Nome')
                                                          ->setCellValue("B".$contRequerente."", 'Endereço')
                                                          ->setCellValue("C".$contRequerente."", 'Municipio')
                                                          ->setCellValue("D".$contRequerente."", 'Email');
                                                                              
                      $contRequerente++;
                      while($retornoRequerente=mysql_fetch_object($queryRequerente)) { 

                      $objPHPExcel->getActiveSheet()->setCellValue("A".$contRequerente."", "$retornoRequerente->Nome");
                      $objPHPExcel->getActiveSheet()->setCellValue("B".$contRequerente."", "$retornoRequerente->Endereco, $retornoRequerente->Numero");
                      $objPHPExcel->getActiveSheet()->setCellValue("C".$contRequerente."", "$retornoRequerente->Municipio");
                      $objPHPExcel->getActiveSheet()->setCellValue("D".$contRequerente."", "$retornoRequerente->Email"); 
                       
                        $contRequerente++;
                      }



                      $contImovel = $contRequerente +3; 
                      $contImovelTitulo = $contImovel -1 ;  
                      $objPHPExcel->getActiveSheet()->setCellValue('J3', "   ")
                                                          ->setCellValue("A".$contImovelTitulo."", 'Imóveis')
                                                          ->setCellValue("A".$contImovel."", 'Número do contribuinte')
                                                          ->setCellValue("B".$contImovel."", 'Holding')
                                                          ->setCellValue("C".$contImovel."", 'Requerente')
                                                          ->setCellValue("D".$contImovel."", 'Nome Exibição')
                                                          ->setCellValue("E".$contImovel."", 'Local do Imóvel')
                                                          ->setCellValue("F".$contImovel."", 'Uso do Imóvel');
                      $contImovel++;                                   
                      while ($retornoImovel=mysql_fetch_object($queryImovel)) {

                      $objPHPExcel->getActiveSheet()->setCellValue("A".$contImovel."", "$retornoImovel->NumeroContribuinte");
                      $objPHPExcel->getActiveSheet()->setCellValue("B".$contImovel."", "$retornoImovel->RazaoSocial");
                      $objPHPExcel->getActiveSheet()->setCellValue("C".$contImovel."", "$retornoImovel->Nome");
                      $objPHPExcel->getActiveSheet()->setCellValue("D".$contImovel."", "$retornoImovel->NomeExibicao");
                      $objPHPExcel->getActiveSheet()->setCellValue("E".$contImovel."", "$retornoImovel->LocalImovel, $retornoImovel->CodLog");
                      $objPHPExcel->getActiveSheet()->setCellValue("F".$contImovel."", "$retornoImovel->UsoImovel");
                         
                        $contImovel++;
                      }


                      $contTarefas = $contImovel +3; 
                      $contTarefasTitulo = $contTarefas -1 ;  
                      $objPHPExcel->getActiveSheet()->setCellValue('Q3', "   ")
                                                          ->setCellValue("A".$contTarefasTitulo."", 'Tarefas')
                                                          ->setCellValue("A".$contTarefas."", 'Nome do Projeto')
                                                          ->setCellValue("B".$contTarefas."", 'Data Inicio')
                                                          ->setCellValue("C".$contTarefas."", 'Data Entrega')
                                                          ->setCellValue("D".$contTarefas."", 'Situação da Tarefa'); 
                      $contTarefas++;                                  
                      while ($retornoTarefa=mysql_fetch_object($queryTarefa)) {

                      $objPHPExcel->getActiveSheet()->setCellValue("A".$contTarefas."", "$retornoTarefa->NomeProjeto");
                      $objPHPExcel->getActiveSheet()->setCellValue("B".$contTarefas."", "$retornoTarefa->DataInicio");
                      $objPHPExcel->getActiveSheet()->setCellValue("C".$contTarefas."", "$retornoTarefa->DataEntrega");
                      $objPHPExcel->getActiveSheet()->setCellValue("D".$contTarefas."", "$retornoTarefa->SituacaoTarefa");

                         $contTarefas++;
                      }



                       $contProcessos = $contTarefas +3; 
                       $contProcessosTitulo = $contProcessos -1 ;  
                       $objPHPExcel->getActiveSheet()->setCellValue('V3', "   ");
                       $objPHPExcel->getActiveSheet()->setCellValue("A".$contProcessosTitulo."", 'Processos')
                                                          ->setCellValue("A".$contProcessos."", 'Holding')
                                                          ->setCellValue("B".$contProcessos."", 'Requerente')
                                                          ->setCellValue("C".$contProcessos."", 'SQl')
                                                          ->setCellValue("D".$contProcessos."", 'Nome do Processo')
                                                          ->setCellValue("E".$contProcessos."", 'Situação do Processo'); 

                       $contProcessos++;
                       while ($retornoProcesso=mysql_fetch_object($queryProcesso)) {

                         $objPHPExcel->getActiveSheet()->setCellValue("A".$contProcessos."", "$retornoProcesso->RazaoSocial");
                         $objPHPExcel->getActiveSheet()->setCellValue("B".$contProcessos."", "$retornoProcesso->Nome");
                         $objPHPExcel->getActiveSheet()->setCellValue("C".$contProcessos."", "$retornoProcesso->NumeroContribuinte");
                         $objPHPExcel->getActiveSheet()->setCellValue("D".$contProcessos."", "$retornoProcesso->NomeProcesso");
                         $objPHPExcel->getActiveSheet()->setCellValue("E".$contProcessos."", "$retornoProcesso->AcaoProcessoDetalhe");

                          $contProcessos++;
                      }



                       $contOportunidades = $contProcessos +3; 
                       $contOportunidadesTitulo = $contOportunidades -1 ;  
                       $objPHPExcel->getActiveSheet()->setCellValue('AB3', "   ");
                       $objPHPExcel->getActiveSheet()->setCellValue("A".$contOportunidadesTitulo."", 'Oportunidades')
                                                          ->setCellValue("A".$contOportunidades."", 'Tipo de Contato')
                                                          ->setCellValue("B".$contOportunidades."", 'Origem')
                                                          ->setCellValue("C".$contOportunidades."", 'Razão Social')
                                                          ->setCellValue("D".$contOportunidades."", 'Nome do contato')
                                                          ->setCellValue("E".$contOportunidades."", 'Atividade')
                                                          ->setCellValue("F".$contOportunidades."", 'E-mail'); 
                       $contOportunidades++;                                  
                       while ($retornoOportunidade=mysql_fetch_object($queryOportunidade)) {

                         $objPHPExcel->getActiveSheet()->setCellValue("A".$contOportunidades."", "$retornoOportunidade->TipoContato");
                         $objPHPExcel->getActiveSheet()->setCellValue("B".$contOportunidades."", "$retornoOportunidade->Origem");
                         $objPHPExcel->getActiveSheet()->setCellValue("C".$contOportunidades."", "$retornoOportunidade->RazaoSocial");
                         $objPHPExcel->getActiveSheet()->setCellValue("D".$contOportunidades."", "$retornoOportunidade->NomeContato");
                         $objPHPExcel->getActiveSheet()->setCellValue("E".$contOportunidades."", "$retornoOportunidade->Atividade");
                         $objPHPExcel->getActiveSheet()->setCellValue("F".$contOportunidades."", "$retornoOportunidade->Email");

                          $contOportunidades++;
                      }



                      
                      //Incorporação
                       $contIncorporação = $contOportunidades +3; 
                       $contIncorporacaoTitulo = $contIncorporação -1 ;  
                       $objPHPExcel->getActiveSheet()->setCellValue('AD3', "   ");
                       $objPHPExcel->getActiveSheet()->setCellValue("A".$contIncorporacaoTitulo."", 'Incorporação')
                                                          ->setCellValue("A".$contIncorporação."", 'Sigla')
                                                          ->setCellValue("B".$contIncorporação."", 'TÍtulo')
                                                          ->setCellValue("C".$contIncorporação."", 'Cep')
                                                          ->setCellValue("D".$contIncorporação."", 'Local')
                                                          ->setCellValue("E".$contIncorporação."", 'Numero')
                                                          ->setCellValue("F".$contIncorporação."", 'Estado')
                                                          ->setCellValue("G".$contIncorporação."", 'Cidade')
                                                          ->setCellValue("H".$contIncorporação."", 'Bairro')
                                                          ->setCellValue("I".$contIncorporação."", 'Metragem')
                                                          ->setCellValue("J".$contIncorporação."", 'Valor Venda')
                                                          ->setCellValue("K".$contIncorporação."", 'Atividade')
                                                          ->setCellValue("L".$contIncorporação."", 'Zonemaneto')
                                                          ->setCellValue("M".$contIncorporação."", 'Ca Básico')
                                                          ->setCellValue("N".$contIncorporação."", 'Ca Máximo')
                                                          ->setCellValue("O".$contIncorporação."", 'Nome Proprietário')
                                                          ->setCellValue("P".$contIncorporação."", 'Telefone Proprietário')
                                                          ->setCellValue("Q".$contIncorporação."", 'Email Proprietário')
                                                          ->setCellValue("R".$contIncorporação."", 'Nome Corretor')
                                                          ->setCellValue("S".$contIncorporação."", 'Telefone Corretor')
                                                          ->setCellValue("T".$contIncorporação."", 'Email Corretor')
                                                          ->setCellValue("U".$contIncorporação."", 'Situção')
                                                          ->setCellValue("V".$contIncorporação."", 'Projeto Aprovado')
                                                          ->setCellValue("W".$contIncorporação."", 'Documentação');
                      $contIncorporação++;                                   
                      while ($retornoIncorporacao=mysql_fetch_object($queryIncorporacao)) {

                         $objPHPExcel->getActiveSheet()->setCellValue("A".$contIncorporação."", "$retornoIncorporacao->SiglaIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("B".$contIncorporação."", "$retornoIncorporacao->TituloIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("C".$contIncorporação."", "$retornoIncorporacao->CepIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("D".$contIncorporação."", "$retornoIncorporacao->LocalIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("E".$contIncorporação."", "$retornoIncorporacao->NumeroIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("F".$contIncorporação."", "$retornoIncorporacao->EstadoIncorporacao");

                         $objPHPExcel->getActiveSheet()->setCellValue("G".$contIncorporação."", "$retornoIncorporacao->CidadeIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("H".$contIncorporação."", "$retornoIncorporacao->BairroIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("I".$contIncorporação."", "$retornoIncorporacao->MetragemIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("J".$contIncorporação."", "$retornoIncorporacao->ValorVendaIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("K".$contIncorporação."", "$retornoIncorporacao->AtividadeIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("L".$contIncorporação."", "$retornoIncorporacao->ZonemanetoIncorporacao");

                         $objPHPExcel->getActiveSheet()->setCellValue("M".$contIncorporação."", "$retornoIncorporacao->CaBasicoIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("N".$contIncorporação."", "$retornoIncorporacao->CaMaximoIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("O".$contIncorporação."", "$retornoIncorporacao->NomeProprietarioIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("P".$contIncorporação."", "$retornoIncorporacao->TelProprietarioIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("Q".$contIncorporação."", "$retornoIncorporacao->EmailProprietarioIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("R".$contIncorporação."", "$retornoIncorporacao->NomeCorreteorIncorpotacao");

                         $objPHPExcel->getActiveSheet()->setCellValue("S".$contIncorporação."", "$retornoIncorporacao->TelefoneCorretorIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("T".$contIncorporação."", "$retornoIncorporacao->EmailCorretorIncorporacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("U".$contIncorporação."", "$retornoIncorporacao->situacao");
                         $objPHPExcel->getActiveSheet()->setCellValue("V".$contIncorporação."", "$retornoIncorporacao->ProjetoAprovado");
                         $objPHPExcel->getActiveSheet()->setCellValue("W".$contIncorporação."", "$retornoIncorporacao->DocumentacaoIncorporacao");

                          $contIncorporação++;
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
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contHoldingTitulo.":AB".$contHoldingTitulo."")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contRequerenteTitulo.":AB".$contRequerenteTitulo."")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contImovelTitulo.":AB".$contImovelTitulo."")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contTarefasTitulo.":AB".$contTarefasTitulo."")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contProcessosTitulo.":AB".$contProcessosTitulo."")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contOportunidadesTitulo.":AB".$contOportunidadesTitulo."")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contIncorporacaoTitulo.":AB".$contIncorporacaoTitulo."")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');

                     //Muda a cor da coluna
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contHoldingTitulo.":AB".$contHoldingTitulo."")->getFont()->setBold(true);
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contRequerenteTitulo.":AB".$contRequerenteTitulo."")->getFont()->setBold(true);
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contImovelTitulo.":AB".$contImovelTitulo."")->getFont()->setBold(true);
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contTarefasTitulo.":AB".$contTarefasTitulo."")->getFont()->setBold(true);
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contProcessosTitulo.":AB".$contProcessosTitulo."")->getFont()->setBold(true);
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contOportunidadesTitulo.":AB".$contOportunidadesTitulo."")->getFont()->setBold(true);
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contIncorporacaoTitulo.":AB".$contIncorporacaoTitulo."")->getFont()->setBold(true);


                    $contHoldingTitulo++;
                    $contRequerenteTitulo++;
                    $contImovelTitulo++;
                    $contTarefasTitulo++;
                    $contProcessosTitulo++;
                    $contOportunidadesTitulo++;
                    $contIncorporacaoTitulo++;


                                        //Muda a cor da coluna
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contHoldingTitulo.":AB".$contHoldingTitulo."")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contRequerenteTitulo.":AB".$contRequerenteTitulo."")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contImovelTitulo.":AB".$contImovelTitulo."")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contTarefasTitulo.":AB".$contTarefasTitulo."")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contProcessosTitulo.":AB".$contProcessosTitulo."")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contOportunidadesTitulo.":AB".$contOportunidadesTitulo."")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    $objPHPExcel->getActiveSheet()->getStyle("A".$contIncorporacaoTitulo.":AB".$contIncorporacaoTitulo."")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('BEBEBE');
                    // Set autofilter
                    $objPHPExcel->getActiveSheet()->setAutoFilter('A3:BG1000');                  
                                        
                     
                    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
                    $objWriter->save("php://output");
                    exit;


                    ?>  
                      
