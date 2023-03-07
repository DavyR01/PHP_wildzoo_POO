<?php

namespace App;

class Insect extends Anthropode
{
    private $pawNumber = 6;
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}
