<?php

session_start();

require_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM usuario WHERE email = ? AND senha = ?";

    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, "ss", $email, $senha);
};

header("Location: tela_inicial.php");

?>