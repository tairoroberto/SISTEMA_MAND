<?php
// Inclui o arquivo com o sistema de segurança
include("../../seguranca.php");

if (isset($_POST['login_Email'], $_POST['login_Senha'])) {
    $Email = $_POST['login_Email'];
    $Senha = $_POST['login_Senha'];
    $caminho = "../../login"; 

    // Utiliza uma função criada no seguranca.php pra validar os dados digitados
    if (validaUsuario($Email, $Senha) == true) {
    // O usuário e a senha digitados foram validados, manda pra página interna
        //Verifica se o usuario é um cliente, se for manda para a area de clientes,
        // Se não for manda para a area de funcionários.
        if (utf8_encode($_SESSION['usuarioTipo']) == "Cliente") {
            header('Location: ../../cliente-area');
        }else{
            header('Location: ../../modelo');
        }
     
    }else {
        // O usuário e/ou a senha são inválidos, manda de volta pro form de login
        // Para alterar o endereço da página de login, verifique o arquivo seguranca.php
        expulsaVisitante2();
        }
 } 
?>