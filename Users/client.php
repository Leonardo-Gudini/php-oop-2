<?php

require __DIR__ . '/user.php';

class Client extends User {

    public $budget;
    public $preferencies;

    public function __construct($name, $lastname, $password, $budget, $preferencies = null)
    {
        parent::__construct($name, $lastname, $password);

        $this->budget = $budget;
        $this->preferencies = $preferencies;
    }
    
}