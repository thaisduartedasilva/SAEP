<?php
include "conexao.php";

$id = $_POST["id"];
$descricao = $_POST["descricao"];
$setor = $_POST["setor"];
$prioridade = $_POST["prioridade"];
$status = $_POST["status"];
$data = $_POST["data"];

$sql = "UPDATE tarefa SET descricao = ?, setor = ?, prioridade= ?, status= ?, data= ? WHERE id = ?";

$stmt = mysqli_prepare($conxao, $sql);
mysqli_stmt_bind_param($stmt, "sssssi", $descricao, $setor, $prioridade, $status, $data, $id);
mysqli_stmt_execute($stmt);

header("Location: tela_inicial.php");
?>