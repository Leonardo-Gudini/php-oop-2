<?php

require __DIR__ . '/../traits/address.php';

class Estate {

    public $flor;
    public $conditions;

    use Address;

    public function __construct($flor, $conditions, $street, $civicNumber)
    {
        $this->flor = $flor;
        $this->conditions = $conditions;
        $this->street = $street;
        $this->civicNumber = $civicNumber;
    }
}