<?php
// print_r($_POST);

$usuario = $_POST['userName'];
$senha = $_POST['userPassword'];

// Verificar login
$loginValido = TRUE;

// configurar a session
if ($loginValido) {

    session_start();
    $_SESSION['nome_usuario'] = $usuario;
    $_SESSION['senha_usuario'] = $senha;
    $_SESSION['id_usuario'] = 10;
    

    header('Location:home_admin.php');
    die();

} else {
    header('Location:estacionamento_admin.html');
}
