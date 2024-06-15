<?php

namespace Php\Projetomvc\Models\Domain;

class Authors
{
    private $id;
    private $name;
    private $birthdate;
    private $nationality;

    public function __construct($id, $name, $birthdate, $nationality)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setBirthdate($birthdate);
        $this->setNationality($nationality);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBirthdate()
    {
        return $this->birthdate;
    }

    public function getNationality()
    {
        return $this->nationality;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }
}

?>
