<?php

namespace App\Animal;

use Exception;
use RangeException;
use RuntimeException;
use UnexpectedValueException;

abstract class Animal
{
    public const CENTIMETERS_IN_METER = 100;
    public const SIZE_UNIT_CHANGE_LIMIT = 100;
    public const THREATENED_LEVELS = ['NE', 'DD', 'LC', 'NT', 'VU', 'EN', 'CR', 'EW', 'EX',];

    protected string $name;
    private float $size = 100;
    protected bool $carnivorous = false;
    private int $pawNumber;
    private string $threatenedLevel = 'NE';

    public function __construct(string $name, int $pawNumber)
    {
        $this->name = $name;
        $this->setPawNumber($pawNumber);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): float
    {
        return $this->size;
    }

    public function setSize(float $size): void
    {
        if ($size < 0) {
            throw new Exception('The size should be a positive number');
        }
        if ($size > 10000) {
            throw new RangeException('The ' . $this->getName() . ' is too large');
        }

        $this->size = $size;
    }

    public function getPawNumber(): int
    {
        return $this->pawNumber;
    }

    private function setPawNumber(int $pawNumber): void
    {
        if ($pawNumber < 0) {
            $pawNumber = 0;
        }
        $this->pawNumber = $pawNumber;
    }

    public function getThreatenedLevel(): string
    {
        return $this->threatenedLevel;
    }

    public function setThreatenedLevel(string $threatenedLevel = 'NE'): void
    {
        if (!in_array($threatenedLevel, self::THREATENED_LEVELS)) {
            throw new UnexpectedValueException('La menace est incorrecte');
        }

        if ($threatenedLevel == 'EX') {
            throw new RuntimeException('Le ' . $this->getName() . ' ne peut être là, cette espèce est éteinte');
        }

        $this->threatenedLevel = $threatenedLevel;
    }

    public function isCarnivorous(): bool
    {
        return $this->carnivorous;
    }

    public function setCarnivorous(bool $carnivorous): void
    {
        $this->carnivorous = $carnivorous;
    }

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

    public function getSizeWithUnit(): string
    {
        if ($this->getSize() < self::SIZE_UNIT_CHANGE_LIMIT) {
            return $this->getSize() . ' cm';
        } else {
            return ($this->getSize() / self::CENTIMETERS_IN_METER) . ' m';
        }
    }
}
