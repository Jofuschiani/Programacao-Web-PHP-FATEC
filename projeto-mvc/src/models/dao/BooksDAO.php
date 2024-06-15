<?php

namespace Php\Projetomvc\Models\DAO;

use Php\Projetomvc\Models\Domain\Books;
use Php\Projetomvc\Models\DAO\Conexao;

class BooksDAO
{
    private Conexao $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function insert(Books $books)
    {
        try {
            $sql = "INSERT INTO Books (book_id, title, author_id, genre, published_year) VALUES (:book_id, :title, :author_id, :genre, :published_year)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":book_id", $books->getBookId());
            $p->bindValue(":title", $books->getTitle());
            $p->bindValue(":author_id", $books->getAuthorId());
            $p->bindValue(":genre", $books->getGenre());
            $p->bindValue(":published_year", $books->getPublishedYear());
            return $p->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM Books";
            return $this->conexao->getConexao()->query($sql);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getById($book_id)
    {
        try {
            $sql = "SELECT * FROM Books WHERE book_id = :book_id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":book_id", $book_id);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update(Books $book)
    {
        try {
            $sql = "UPDATE Books SET title = :title, author_id = :author_id, genre = :genre, published_year = :published_year WHERE book_id = :book_id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":title", $book->getTitle());
            $p->bindValue(":author_id", $book->getAuthorId());
            $p->bindValue(":genre", $book->getGenre());
            $p->bindValue(":published_year", $book->getPublishedYear());
            $p->bindValue(":book_id", $book->getBookId());
            return $p->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete($book_id)
    {
        try {
            $sql = "DELETE FROM Books WHERE book_id = :book_id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":book_id", $book_id);
            return $p->execute();
        } catch (\Exception $e) {
            return false;
        }
    }
}

?>
