CREATE DATABASE saep_teste;
USE saep_teste;

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(500) NOT NULL,
    email VARCHAR(500) NOT NULL
);

CREATE TABLE tarefa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao TEXT NOT NULL,
    setor TEXT NOT NULL,
    prioridade ENUM ('baixa', 'media', 'alta') NOT NULL,
    data DATETIME NOT NULL,
    status ENUM ('a fazer', 'fazendo', 'feito') NOT NULL DEFAULT 'a fazer',
    id_usuario INT, 
    FOREIGN KEY (id_usuario) REFERENCES usuario(id)   
);