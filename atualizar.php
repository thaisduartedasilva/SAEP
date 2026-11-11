<?php
include "conexao.php";

$id = $_POST["id"];
$descricao = $_POST["descricao"];
$setor = $_POST["setor"];
$prioridade = $_POST["prioridade"];
$status = $_POST["status"];
$data = $_POST["data"];

$sql = "UPDATE tarefa SET descricao = ?, setor = ?, prioridade= ?, status= ?, data= ? WHERE id = ?";

$stmt = $conexao->prepare($sql);

$stmt->bind_param("sssssi", $descricao, $setor, $prioridade, $status, $data, $id);

$stmt->execute();

header("Location: tela_inicial.php");
exit;

?>