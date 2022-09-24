<?php

require __DIR__ . '/user.php';

class Agent extends User {

    public $commission;

    public function __construct($name, $lastname, $password, $commission, $street = null, $civicNumber = null)
    {
        parent::__construct($name, $lastname, $password, $street, $civicNumber);

        $this->commission = $commission;
    }

    public function getAgentInfo(){
        echo "info agente: " . $this->name . " " . $this->lastname ."<br>";
        echo "commissione: " . $this->commission . "<br>";
    }
}