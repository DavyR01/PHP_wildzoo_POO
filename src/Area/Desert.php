<?php

namespace App\Area;

use App\Animal\Animal;

class Desert extends Area
{
    public function isValid(Animal $animal): bool
    {
        return $animal->getPawNumber() >= 4;
    }
}
