<?php

namespace App\Animal;

final class Crocodilian extends Reptile
{
    private int $pawNumber = 4;
    protected bool $carnivorous = true;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}
