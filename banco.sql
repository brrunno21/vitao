CREATE DATABASE IF NOT EXISTS minha_base_de_dados;

USE minha_base_de_dados;

CREATE TABLE IF NOT EXISTS contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL
);