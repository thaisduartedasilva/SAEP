<?php
include "conexao.php";

$id = $_GET["id"];
$sql = "DELETE * FROM tarefas WHERE id = ?";

$stmt = mysqli_prepare($conexao; $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

header("Location: tela_inicial.php");
?>