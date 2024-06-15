<?php

namespace Php\Projetomvc\Models\Domain;

class Loans
{
    private $loanId;
    private $bookId;
    private $memberId;
    private $loanDate;
    private $returnDate;

    public function __construct($loanId, $bookId, $memberId, $loanDate, $returnDate)
    {
        $this->setLoanId($loanId);
        $this->setBookId($bookId);
        $this->setMemberId($memberId);
        $this->setLoanDate($loanDate);
        $this->setReturnDate($returnDate);
    }

    public function getLoanId()
    {
        return $this->loanId;
    }

    public function getBookId()
    {
        return $this->bookId;
    }

    public function getMemberId()
    {
        return $this->memberId;
    }

    public function getLoanDate()
    {
        return $this->loanDate;
    }

    public function getReturnDate()
    {
        return $this->returnDate;
    }

    public function setLoanId($loanId)
    {
        $this->loanId = $loanId;
    }

    public function setBookId($bookId)
    {
        $this->bookId = $bookId;
    }

    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }

    public function setLoanDate($loanDate)
    {
        $this->loanDate = $loanDate;
    }

    public function setReturnDate($returnDate)
    {
        $this->returnDate = $returnDate;
    }
}

?>
