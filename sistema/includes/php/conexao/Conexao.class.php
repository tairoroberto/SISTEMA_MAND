<?php

      /******************************************************************************************************                                                      *
      *                 Classe de conexão a banco de dados MySQL Orientado a Objetos                        *
      *                 Autor:  Tairo Roberto                                                               *
      ******************************************************************************************************/
 
   class Conexao {
   /******************************************************************************************************                                                      *
   *                 Declaração dos atributos da classe de conexão                                        *
   *******************************************************************************************************/
   private $host = "localhost"; // Endereço do servidor do banco de dados
   private $usuario = "root"; // Usuário do banco de dados que possua acesso ao schema
   private $senha = "tairo1507"; // Senha do usuário
   private $banco = "mandproj_DB"; // Banco de dados utilizado na conexão
   private $sql = ""; // Consulta a ser executada
 

   /******************************************************************************************************
   *                  Método que conecta ao banco de dados passando                                      *
   *                  os valores necessários para que a conexão ocorra                                   *
   *******************************************************************************************************/
   function conectar(){

      $conexao = mysql_connect($this->host,$this->usuario,$this->senha) or die($this->mensagem(mysql_error()));
      mysql_set_charset('UTF8', $conexao);
      return $conexao;
   }


 

       /******************************************************************************************************
      *                  Método que seleciona o banco de dados com que irá trabalhar                         *
      *******************************************************************************************************/
   function selecionarDB(){
     
      $db = mysql_select_db($this->banco) or die($this->mensagem(mysql_error()));
      if($db){
         return true;
      }else{
         return false;
      }
   }
 
       /******************************************************************************************************
      *                  Método que executa uma query no banco de dados                                      *
      *******************************************************************************************************/
   function executarQuery(){
      $query = mysql_query($this->sql) or die ($this->mensagem(mysql_error()));
      return $query;
   }
 

      /******************************************************************************************************
      *                  Método criado para atribuir os valores as variáveis de conexão,                     *
      *                   muito melhor que criar set's para cada variável                                    *
      *******************************************************************************************************/
   function set($propriedade,$valor){
         $this->$propriedade = $valor;
   }
 


      /******************************************************************************************************
      *             Função para exibir os possíveis erros                                                   *
      *             Separamos em um método, pois este pode ser estilizado, sem alterar outros métodos       *                                                      *
      *******************************************************************************************************/
   function mensagem($erro){
      echo $erro;
   }
}


 
