<?php

include "conexao.php";
$resultado = mysqli_query ($conexao, "SELECT * FROM tarefa");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática para o SAEP - Sistema Kanban</title>
</head>
<body>
    <header>
        <h1>Sistema Kanban</h1>
    </header>
    <main>
        <h2>Cadastre uma nova tarefa!</h2>
        <form action="cadastrar.php" method="POST">
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
            <button type="submit">Cadastrar</button>
        </form>

        <h2>Lista de tarefas Cadastradas!</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Usuário</th>
                <th>Descrição</th>
                <th>Setor</th>
                <th>Prioridade</th>
                <th>Status</th>
                <th>Data</th>
                <th>Ação</th>
            </tr>
            <?php while($tarefas = mysqli_fetch_assoc($resultado)){?>
                <tr>
                    <td><?php echo $tarefas["id"]?></td>
                    <td><?php echo $tarefas["id_usuario"]?></td>
                    <td><?php echo $tarefas["descricao"]?></td>
                    <td><?php echo $tarefas["setor"]?></td>
                    <td><?php echo $tarefas["prioridade"]?></td>
                    <td><?php echo $tarefas["status"]?></td>
                    <td><?php echo $tarefas["data"]?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $tarefas["id"]?>">Editar</a>
                        <a href="excluir.php?id=<?php echo $tarefas["id"]?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        
    <main>
    
</body>
</html>