<?php

namespace App;

class Mammal extends Animal
{
    private $pawNumber = 4;
    // modification du constructor pour enlever le paramètre pawNumber et inscrire une valeur par défaut pour les mammifères qui sera de 4.
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }

    public function speak(string $lang = 'fr'): string
    {
        if ($lang === 'fr') {
            $message = 'Bienvenue humain, moi aussi je suis un mammifère et mon nom est ';
        } else {
            $message = 'Welcome human, I\'am a mammal too and my name is  ';
        }

        return $message . $this->name;
    }
}
