<?php

namespace App;

class Area
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
        $this->animals[] = $animal;
    }
}
