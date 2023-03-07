<?php

class Animal
{
    public string $name;
    private float $size = 100;
    public bool $carnivorous = false;
    public int $pawNumber;
    public string $threatenedLevel = 'NE';

    public function speak(string $lang = 'fr'): string
    {
        if ($lang === 'fr') {
            $message = 'Bienvenue au zoo, je suis un ';
        } else {
            $message = 'Welcome to the zoo, I\'am a ';
        }

        return $message . $this->name;
    }

    public function isDangerous(): bool
    {
        return $this->size > 50 && $this->carnivorous === true;
    }

    // Constructor
    public function __construct(string $name, int $pawNumber)
    {
        $this->name = $name;
        $this->setPawNumber($pawNumber);
    }
    public function getSize(): float
    {
        return $this->size;
    }
    public function setSize(int $size): void
    {
        if ($size <= 0) {
            $size = 1;
        }
        $this->size = $size;
    }
    private function setPawNumber(int $pawNumber): void
    {
        if ($pawNumber < 0) {
            $pawNumber = 0;
        }
        $this->pawNumber = $pawNumber;
    }
    public function getName(string $name)
    {
        return $this->name;
    }
}
