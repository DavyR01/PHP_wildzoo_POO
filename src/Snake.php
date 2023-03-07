<?php

namespace App;

final class Snake extends Reptile
{
    private $pawNumber = 0;
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}
