<?php
session_start();
include_once("../dao/manipuladados.php");

// Verifica se o formulário foi enviado

$username = $_POST["username"];
$password = $_POST["password"];

$dadosLogin = new ManipulaDados();
$dadosLogin->setTable("tb_usuario");

    if ($dadosLogin->validarLogin($username, $password,)!=0) {
        $_SESSION['username'] = $username;
        header("location: principal.php");
    } else {
        echo "Credenciais inválidas. Tente novamente.";
        header("location: index.php");
    } 
?>
