<?php

namespace Php\Projetomvc\Models\DAO;

use Php\Projetomvc\Models\Domain\Members;
use Php\Projetomvc\Models\DAO\Conexao;

class MembersDAO
{
    private Conexao $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function insert(Members $member)
    {
        try {
            $sql = "INSERT INTO Members (name, address, phone, email) VALUES (:name, :address, :phone, :email)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":name", $member->getName());
            $p->bindValue(":address", $member->getAddress());
            $p->bindValue(":phone", $member->getPhone());
            $p->bindValue(":email", $member->getEmail());
            return $p->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM Members";
            return $this->conexao->getConexao()->query($sql);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getById($member_id)
    {
        try {
            $sql = "SELECT * FROM Members WHERE member_id = :member_id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":member_id", $member_id);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update(Members $member)
    {
        try {
            $sql = "UPDATE Members SET name = :name, address = :address, phone = :phone, email = :email WHERE member_id = :member_id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":name", $member->getName());
            $p->bindValue(":address", $member->getAddress());
            $p->bindValue(":phone", $member->getPhone());
            $p->bindValue(":email", $member->getEmail());
            $p->bindValue(":member_id", $member->getMemberId());
            return $p->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete($member_id)
    {
        try {
            $sql = "DELETE FROM Members WHERE member_id = :member_id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":member_id", $member_id);
            return $p->execute();
        } catch (\Exception $e) {
            return false;
        }
    }
}

?>
