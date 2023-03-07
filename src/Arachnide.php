<?php

namespace App;

class Arachnide extends Anthropode
{
    private $pawNumber = 8;
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}
