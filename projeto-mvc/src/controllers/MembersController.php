<?php

namespace Php\Projetomvc\Controllers;

use Php\Projetomvc\Models\DAO\MembersDAO;
use Php\Projetomvc\Models\Domain\Members;

class MembersController
{
    public function index($params)
    {
        $membersDAO = new MembersDAO();
        $result = $membersDAO->getAll();
        $action = $params[1] ?? "";
        $status = $params[2] ?? "";

        $mensagem = $this->getMensagem($action, $status);

        require_once("../src/views/members/indexMembers.php");
    }

    public function insert($params)
    {
        require_once("../src/views/members/insertMembers.php");
    }

    public function new($params)
    {
        $member = new Members(
            0,
            $_POST['name'],
            $_POST['address'],
            $_POST['phone'],
            $_POST['email']
        );

        $membersDAO = new MembersDAO();
        if ($membersDAO->insert($member)) {
            header("location: /members/insert/true");
        } else {
            header("location: /members/insert/false");
        }
    }

    public function update($params)
    {
        $membersDAO = new MembersDAO();
        $member = $membersDAO->getById($params[1]);
        require_once("../src/views/members/updateMembers.php");
    }

    public function edit($params)
    {
        $member = new Members(
            $_POST['member_id'],
            $_POST['name'],
            $_POST['address'],
            $_POST['phone'],
            $_POST['email']
        );

        $membersDAO = new MembersDAO();
        if ($membersDAO->update($member)) {
            header("location: /members/update/true");
        } else {
            header("location: /members/update/false");
        }
    }

    public function delete($params)
    {
        $membersDAO = new MembersDAO();
        $member = $membersDAO->getById($params[1]);
        require_once("../src/views/members/deleteMembers.php");
    }

    public function destroy($params)
    {
        $membersDAO = new MembersDAO();
        if ($membersDAO->delete($_POST['member_id'])) {
            header("location: /members/delete/true");
        } else {
            header("location: /members/delete/false");
        }
    }

    private function getMensagem($action, $status)
    {
        switch ($action) {
            case "insert":
                return $status === "true" ? "Membro inserido com sucesso!" : "Erro ao inserir membro!";
            case "update":
                return $status === "true" ? "Membro alterado com sucesso!" : "Erro ao alterar membro!";
            case "delete":
                return $status === "true" ? "Membro excluído com sucesso!" : "Erro ao excluir membro!";
            default:
                return "";
        }
    }
}

?>
