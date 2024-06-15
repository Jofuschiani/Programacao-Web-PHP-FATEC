<?php

namespace Php\Projetomvc\Controllers;

use Php\Projetomvc\Models\DAO\LoansDAO;
use Php\Projetomvc\Models\DAO\BooksDAO;
use Php\Projetomvc\Models\DAO\MembersDAO;
use Php\Projetomvc\Models\Domain\Loans;

class LoansController
{
    public function index($params)
    {
        $loansDAO = new LoansDAO();
        $result = $loansDAO->getAll();
        $action = $params[1] ?? "";
        $status = $params[2] ?? "";

        $mensagem = $this->getMensagem($action, $status);

        require_once("../src/views/loans/indexLoans.php");
    }

    public function insert($params)
    {
        $booksDAO = new BooksDAO();
        $membersDAO = new MembersDAO();

        $books = $booksDAO->getAll();
        $members = $membersDAO->getAll();

        require_once("../src/views/loans/insertLoans.php");
    }

    public function new($params)
    {
        $loan = new Loans(
            0,
            $_POST['book_id'],
            $_POST['member_id'],
            $_POST['loan_date'],
            $_POST['return_date']
        );

        $loansDAO = new LoansDAO();
        if ($loansDAO->insert($loan)) {
            header("location: /loans/insert/true");
        } else {
            header("location: /loans/insert/false");
        }
    }

    public function update($params)
    {
        $loansDAO = new LoansDAO();
        $loan = $loansDAO->getById($params[1]);

        $booksDAO = new BooksDAO();
        $membersDAO = new MembersDAO();

        $books = $booksDAO->getAll();
        $members = $membersDAO->getAll();

        require_once("../src/views/loans/updateLoans.php");
    }

    public function edit($params)
    {
        $loan = new Loans(
            $_POST['loan_id'],
            $_POST['book_id'],
            $_POST['member_id'],
            $_POST['loan_date'],
            $_POST['return_date']
        );

        $loansDAO = new LoansDAO();
        if ($loansDAO->update($loan)) {
            header("location: /loans/update/true");
        } else {
            header("location: /loans/update/false");
        }
    }

    public function delete($params)
    {
        $loansDAO = new LoansDAO();
        $loan = $loansDAO->getById($params[1]);

        require_once("../src/views/loans/deleteLoans.php");
    }

    public function destroy($params)
    {
        $loansDAO = new LoansDAO();
        if ($loansDAO->delete($_POST['loan_id'])) {
            header("location: /loans/delete/true");
        } else {
            header("location: /loans/delete/false");
        }
    }

    private function getMensagem($action, $status)
    {
        switch ($action) {
            case "insert":
                return $status === "true" ? "Empréstimo registrado com sucesso!" : "Erro ao registrar empréstimo!";
            case "update":
                return $status === "true" ? "Empréstimo atualizado com sucesso!" : "Erro ao atualizar empréstimo!";
            case "delete":
                return $status === "true" ? "Empréstimo excluído com sucesso!" : "Erro ao excluir empréstimo!";
            default:
                return "";
        }
    }
}

?>
