<?php

namespace Php\Projetomvc\Controllers;

use Php\Projetomvc\Models\DAO\BooksDAO;
use Php\Projetomvc\Models\DAO\AuthorsDAO;
use Php\Projetomvc\Models\Domain\Books;

class BooksController
{
    public function index($params)
    {
        $booksDAO = new BooksDAO();
        $result = $booksDAO->getAll();
        $action = $params[1] ?? "";
        $status = $params[2] ?? "";

        $mensagem = $this->getMensagem($action, $status);

        require_once("../src/views/books/indexBooks.php");
    }

    public function insert($params)
    {
        $authorsDAO = new AuthorsDAO();
        $authors = $authorsDAO->getAll();
        require_once("../src/views/books/insertBooks.php");
    }

    public function new($params)
    {
        $books = new Books(
            0,
            $_POST['title'],
            $_POST['author_id'],
            $_POST['genre'],
            $_POST['published_year']
        );

        $booksDAO = new BooksDAO();
        if ($booksDAO->insert($books)) {
            header("location: /books/insert/true");
        } else {
            header("location: /books/insert/false");
        }
    }

    public function update($params)
    {
        $authorsDAO = new AuthorsDAO();
        $authors = $authorsDAO->getAll();
        $booksDAO = new BooksDAO();
        $books = $booksDAO->getById($params[1]);
        require_once("../src/views/books/updateBooks.php");
    }

    public function edit($params)
    {
        $books = new Books(
            $_POST['book_id'],
            $_POST['title'],
            $_POST['author_id'],
            $_POST['genre'],
            $_POST['published_year']
        );

        $authorsDAO = new AuthorsDAO();
        $authors = $authorsDAO->getAll();
        $booksDAO = new BooksDAO();
        if ($booksDAO->update($books)) {
            header("location: /books/update/true");
        } else {
            header("location: /books/update/false");
        }
    }

    public function delete($params)
    {
        $booksDAO = new BooksDAO();
        $books = $booksDAO->getById($params[1]);
        require_once("../src/views/books/deleteBooks.php");
    }

    public function destroy($params)
    {
        $booksDAO = new BooksDAO();
        if ($booksDAO->delete($_POST['book_id'])) {
            header("location: /books/delete/true");
        } else {
            header("location: /books/delete/false");
        }
    }

    private function getMensagem($action, $status)
    {
        switch ($action) {
            case "insert":
                return $status === "true" ? "Livro inserido com sucesso!" : "Erro ao inserir livro!";
            case "update":
                return $status === "true" ? "Livro alterado com sucesso!" : "Erro ao alterar livro!";
            case "delete":
                return $status === "true" ? "Livro excluído com sucesso!" : "Erro ao excluir livro!";
            default:
                return "";
        }
    }
}

?>
