<?php

include "conexao.php";

$descricao = $_POST["descricao"];
$setor = $_POST["setor"];
$prioridade = $_POST["prioridade"];
$status = $_POST["status"];
$data = $_POST["data"];

$sql = "INSERT INTO tarefa (descricao, setor, prioridade, status, data) VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "sssss", $descricao, $setor, $prioridade, $status, $data);
mysqli_stmt_execute($stmt);

header("Location: tela_inicial.php");

?>