<?php

namespace Php\Projetomvc\Models\DAO;

use Php\Projetomvc\Models\Domain\Loans;
use Php\Projetomvc\Models\DAO\Conexao;

class LoansDAO
{
    private Conexao $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function insert(Loans $loan)
    {
        try {
            $sql = "INSERT INTO Loans (book_id, member_id, loan_date, return_date) VALUES (:book_id, :member_id, :loan_date, :return_date)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":book_id", $loan->getBookId());
            $p->bindValue(":member_id", $loan->getMemberId());
            $p->bindValue(":loan_date", $loan->getLoanDate());
            $p->bindValue(":return_date", $loan->getReturnDate());
            return $p->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM Loans";
            return $this->conexao->getConexao()->query($sql);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getById($loan_id)
    {
        try {
            $sql = "SELECT * FROM Loans WHERE loan_id = :loan_id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":loan_id", $loan_id);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update(Loans $loan)
    {
        try {
            $sql = "UPDATE Loans SET book_id = :book_id, member_id = :member_id, loan_date = :loan_date, return_date = :return_date WHERE loan_id = :loan_id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":book_id", $loan->getBookId());
            $p->bindValue(":member_id", $loan->getMemberId());
            $p->bindValue(":loan_date", $loan->getLoanDate());
            $p->bindValue(":return_date", $loan->getReturnDate());
            $p->bindValue(":loan_id", $loan->getLoanId());
            return $p->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete($loan_id)
    {
        try {
            $sql = "DELETE FROM Loans WHERE loan_id = :loan_id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":loan_id", $loan_id);
            return $p->execute();
        } catch (\Exception $e) {
            return false;
        }
    }
}

?>
