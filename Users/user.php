<?php

require __DIR__ . '/../traits/address.php';

class User {

    public $name;
    public $lastname;
    private $password;

    use Address;

    public function __construct($name, $lastname, $password, $street, $civicNumber)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->street = $street;
        $this->civicNumber = $civicNumber;
    }

}

    




