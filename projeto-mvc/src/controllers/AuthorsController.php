<?php

namespace Php\Projetomvc\Controllers;

use Php\Projetomvc\Models\DAO\AuthorsDAO;
use Php\Projetomvc\Models\Domain\Authors;

class AuthorsController
{
    public function index($params)
    {
        $authorsDAO = new AuthorsDAO();
        $result = $authorsDAO->getAll();
        $action = $params[1] ?? "";
        $status = $params[2] ?? "";

        if ($action == "insert" && $status == "true")
            $mensagem = "Autor inserido com sucesso!";
        elseif ($action == "insert" && $status == "false")
            $mensagem = "Erro ao inserir autor!";
        elseif ($action == "update" && $status == "true")
            $mensagem = "Autor alterado com sucesso!";
        elseif ($action == "update" && $status == "false")
            $mensagem = "Erro ao alterar autor!";
        elseif ($action == "delete" && $status == "true")
            $mensagem = "Autor excluído com sucesso!";
        elseif ($action == "delete" && $status == "false")
            $mensagem = "Erro ao excluir autor!";
        else
            $mensagem = "";

        require_once("../src/views/authors/indexAuthors.php");
    }

    public function insert($params)
    {
        require_once("../src/views/authors/insertAuthors.php");
    }

    public function new($params)
    {
        $authors = new Authors(
            0,
            $_POST['name'],
            $_POST['birthdate'],
            $_POST['nationality']
        );

        $authorsDAO = new AuthorsDAO();
        if ($authorsDAO->insert($authors)) {
            header("location: /authors/insert/true");
        } else {
            header("location: /authors/insert/false");
        }
    }

    public function update($params)
    {
        $authorsDAO = new AuthorsDAO();
        $authors = $authorsDAO->getById($params[1]);
        require_once("../src/views/authors/updateAuthors.php");
    }

    public function edit($params)
    {
        $authors = new Authors(
            $_POST['author_id'],
            $_POST['name'],
            $_POST['birthdate'],
            $_POST['nationality']
        );
       

        $authorsDAO = new AuthorsDAO();
        if ($authorsDAO->update($authors)) {
            header("location: /authors/update/true");
        } else {
            header("location: /authors/update/false");
        }
    }

    public function delete($params)
    {
        $authorsDAO = new AuthorsDAO();
        $authors = $authorsDAO->getById($params[1]);
        require_once("../src/views/authors/deleteAuthors.php");
    }

    public function destroy($params)
    {
        $authorsDAO = new AuthorsDAO();
        if ($authorsDAO->delete($_POST['author_id'])) {
            header("location: /authors/delete/true");
        } else {
            header("location: /authors/delete/false");
        }
    }
}


