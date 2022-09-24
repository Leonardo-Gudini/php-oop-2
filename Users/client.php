<?php

require __DIR__ . '/user.php';

class Client extends User {

    public $budget;
    public $preferencies;

    public function __construct($name, $lastname, $password, $street, $civicNumber, $budget, $preferencies = null)
    {
        parent::__construct($name, $lastname, $password, $street, $civicNumber);

        $this->budget = $budget;
        $this->preferencies = $preferencies;
    }

    public function getClientInfo(){
        echo "info cliente: " . $this->name . " " . $this->lastname ."<br>";

    }
    
}