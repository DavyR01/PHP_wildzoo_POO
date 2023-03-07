<?php

namespace App;

final class Crocodilian extends Reptile
{
    private $pawNumber = 4;
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}
