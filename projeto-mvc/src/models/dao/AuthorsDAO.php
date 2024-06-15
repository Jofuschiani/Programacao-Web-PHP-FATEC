<?php

namespace Php\Projetomvc\Models\DAO;

use Php\Projetomvc\Models\Domain\Authors;

class AuthorsDAO
{
    private Conexao $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function insert(Authors $authors)
    {
        try {
            $sql = "INSERT INTO Authors (author_id, name, birthdate, nationality) VALUES (:author_id, :name, :birthdate, :nationality)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":author_id", $authors->getid());
            $p->bindValue(":name", $authors->getName());
            $p->bindValue(":birthdate", $authors->getBirthdate());
            $p->bindValue(":nationality", $authors->getNationality());
            return $p->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM Authors";
            return $this->conexao->getConexao()->query($sql);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getById($author_id)
    {
        try {
            $sql = "SELECT * FROM Authors WHERE author_id = :author_id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":author_id", $author_id);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update(Authors $authors)
    {
        try {
            $sql = "UPDATE Authors SET name = :name, birthdate = :birthdate, nationality = :nationality WHERE author_id = :author_id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":name", $authors->getName());
            $p->bindValue(":birthdate", $authors->getBirthdate());
            $p->bindValue(":nationality", $authors->getNationality());
            $p->bindValue(":author_id", $authors->getId());
            return $p->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete($author_id)
    {
        try {
            $sql = "DELETE FROM Authors WHERE author_id = :author_id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":author_id", $author_id);
            return $p->execute();
        } catch (\Exception $e) {
            return false;
        }
    }
}

?>
