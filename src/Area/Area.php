<?php

namespace App\Area;

use App\Animal\Animal;

abstract class Area
{
    private string $name;
    private array $animals = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAnimals(): array
    {
        return $this->animals;
    }

    public function addAnimal(Animal $animal)
    {
        if (!$this->isValid($animal)) {
            throw new \Exception('Impossible d\'ajouter '  . $animal->getName() . ' dans ' . $this->getName());
        }
        $this->animals[] = $animal;
    }

    abstract public function isValid(Animal $animal): bool;
}
