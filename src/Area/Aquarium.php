<?php

namespace App\Area;

use App\Animal\Animal;
use App\Animal\Fish;

class Aquarium extends Area
{
    public function isValid(Animal $animal): bool
    {
        return $animal instanceof Fish;
    }
}
