-- Criação do banco de dados
CREATE DATABASE Biblioteca;

-- Selecionar o banco de dados
USE Biblioteca;

-- Criação da tabela de Autores
CREATE TABLE Authors (
    author_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    birthdate DATE,
    nationality VARCHAR(100)
);

-- Criação da tabela de Livros
CREATE TABLE Books (
    book_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author_id INT,
    genre VARCHAR(100),
    published_year YEAR,
    FOREIGN KEY (author_id) REFERENCES Authors(author_id)
);

-- Criação da tabela de Membros
CREATE TABLE Members (
    member_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255),
    phone VARCHAR(15),
    email VARCHAR(100)
);

-- Criação da tabela de Empréstimos
CREATE TABLE Loans (
    loan_id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT,
    member_id INT,
    loan_date DATE NOT NULL,
    return_date DATE,
    book_name VARCHAR(255),
    member_name VARCHAR(255),
    FOREIGN KEY (book_id) REFERENCES Books(book_id),
    FOREIGN KEY (member_id) REFERENCES Members(member_id)
);

