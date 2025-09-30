drop database if exists entrelinhas;
CREATE DATABASE IF NOT EXISTS entrelinhas;
USE entrelinhas;

CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    comentario TEXT NOT NULL,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO contatos (nome, comentario)
VALUES ('paula', 'nao vou convidar mais a mayara (panqueca)');

select * from contatos;

