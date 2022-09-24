<?php

require __DIR__ . '/../traits/address.php';

class Estate {

    public $flor;
    public $conditions;

    use Address;

    public function __construct($address, $flor, $conditions)
    {
        $this->flor = $flor;
        $this->conditions = $conditions;
        $this->address = $address;
    }
}