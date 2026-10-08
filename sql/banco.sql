CREATE DATABASE crud;

USE crud;
CREATE TABLE pessoa (
    id_pessoa INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL
);

-- seeds
INSERT INTO PESSOA (nome) VALUES ('Paulo'), ('Maria'), ('Vinicius'), ('Joana');