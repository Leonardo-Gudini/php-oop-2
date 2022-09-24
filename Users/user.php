<?php

require __DIR__ . '/../traits/address.php';

class User {

    public $name;
    public $lastname;
    protected $password;

    use Address;

    public function __construct($name, $lastname, $password)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->password = $password;
    }

}

    




