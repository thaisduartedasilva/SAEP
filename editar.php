<?php

include "conexao.php";

$id = $_GET["id"];

$sql = "SELECT * FROM tarefa WHERE id = ?";

$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);

$tarefas = mysqli_fetch_assoc($resultado);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar tarefa</title>
</head>
<body>
    <header>
        <h1>Sistema Kanban</h1>
    </header>
    <main>
        <h2>Edite uma tarefa!</h2>
        <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $tarefas["id"] ?>">
            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" required>
            <br>
            <label for="setor">Setor: </label>
            <input type="text" name="setor" required>
            <br>
            <label for="prioridade" name="prioridade">Prioridade:</label>
            <select name="prioridade" id="prioridade" required>
                <option value="baixa">Baixa</option>
                <option value="media">Média</option>
                <option value="alta">Alta</option>
            </select>
            <br>
            <label for="status" name="status">Status:</label>
            <select name="status" id="status" required>
                <option value="a fazer">A fazer</option>
                <option value="fazendo">Fazendo</option>
                <option value="feito">Feito</option>
            </select>
            <br>
            <label for="data" name="data">Data: </label>
            <input type="date" name="data" required>
            <br>
            <button type="submit">Atualizar</button>
        </form>
    </main>
    
</body>
</html>