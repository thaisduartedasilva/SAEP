<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "saep_teste";

$conexao = new sqli ($host, $usuario, $senha, $banco);

if ($conexao->connect_erro){
    die ("Erro na conexão com o banco de dados " $conexao->connetc_erro);
    
};

$conexao = set_charset (utf8mb4); 

?>