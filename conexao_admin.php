<?php
include_once('verifica_sessao.php');

if ($_SESSION['nome_usuario'] == 'admin' && $_SESSION['senha_usuario'] == 'master') {
    include_once('estacionamentoDao_admin.php');
}

define("SERVER", "localhost");
define("USER", "root");
define("PASS", "root");
define("DB", "estacionamento");

function criaConexao()
{
    // Criando conexao com o banco estacionamento
    try {
        $conexao_admin = new PDO('mysql:host=' . SERVER . ';dbname=' . DB, USER, PASS);
        return $conexao_admin;
    } catch (PDOException $e) {
        echo "Erro na conexão. Erro gerado: " . $e->getMessage();
    }
}
