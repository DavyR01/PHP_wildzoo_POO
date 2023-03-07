<?php

namespace App;

final class Felid extends Mammal
{
    protected bool $carnivorous = true;
}

// Ce mot clé 'final'interdit de créer une classe qui va hériter de Felid.