<?php

namespace Php\Projetomvc\Models\Domain;

class Members
{
    private $memberId;
    private $name;
    private $address;
    private $phone;
    private $email;

    public function __construct($memberId, $name, $address, $phone, $email)
    {
        $this->setMemberId($memberId);
        $this->setName($name);
        $this->setAddress($address);
        $this->setPhone($phone);
        $this->setEmail($email);
    }

    public function getMemberId()
    {
        return $this->memberId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}

?>
