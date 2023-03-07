<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

var_dump(Animal::CENTIMETERS_IN_METER);

$lion = new Animal('lion', 4);
$lion->setCarnivorous(true);
$lion->setSize(70);
$lion->setThreatenedLevel('VU');

$parrot = new Animal('parrot', 2);
$parrot->setSize(30);

$elephant = new Animal('elephant', 4);
$elephant->setThreatenedLevel('LC');

$animals = [$lion, $parrot, $elephant];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';



$year = 1981;
$results = [1981, 1984, 1989, 2008];
$message = 'Non';

if (in_array($year, $results)) { // la fonction in_array vérifie l'existence d'une valeur dans un tableau.
    $message = 'Oui';
};
