<?php

require __DIR__ . '/user.php';

class Agent extends User {

    public $commission;

    public function __construct($name, $lastname, $password, $commission)
    {
        parent::__construct($name, $lastname, $password);

        $this->commission = $commission;
    }
}