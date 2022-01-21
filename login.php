<?php
// print_r($_POST);

$usuario = $_POST['admin'];
$senha = $_POST['userPassword'];

// Verificar login
$loginValido = $usuario == 'admin' && $senha == 'master' ? true : false;

// configurar a session
if ($loginValido == 1) {
    // print_r($loginValido);
    session_start();
    $_SESSION['nome_usuario'] = $usuario;
    $_SESSION['senha_usuario'] = $senha;

    header('Location:home_admin.php');
    die();
} else {
    header('Location:estacionamento_admin.html');
}
