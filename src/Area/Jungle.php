<?php

namespace App\Area;

use App\Animal\Animal;


class Jungle extends Area
{
    public function isValid(Animal $animal): bool
    {
        return true;
    }
}
