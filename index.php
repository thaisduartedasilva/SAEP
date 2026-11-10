<?php

session_start();

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
        <div>
            <h2>Faça login:<h2>
                <form action= "login.php" method= "POST">
                    <label for="email">Email: </label>
                    <input type="email" name="email">
                    <br>
                    <label for="senha">Senha: </label>
                    <input type="text" name="senha">
                    <br>
                    <a link="tela_inicial.php"><button type="submit">Entrar</button></a>
                </form>
        </div>
    </main>
    
</body>
</html>