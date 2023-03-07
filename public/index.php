<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';
// require __DIR__ . '/../src/Other/Animal.php';
require __DIR__ . '/../src/Area.php';

use App\Animal;
use App\Area;
// use App\Other\Animal as OtherAnimal;

// ***************Animals***************
$lion = new Animal('lion', 4);
$lion->setCarnivorous(true);
$lion->setSize(70);
$lion->setThreatenedLevel('VU');

$parrot = new Animal('parrot', 2);
$parrot->setSize(30);

$elephant = new Animal('elephant', 4);
$elephant->setThreatenedLevel('LC');

// Création tableaux animaux
$animals = [$lion, $parrot, $elephant];

// *********Area****************
$savana = new Area('savana');
$desert = new Area('desert');
$jungle = new Area('jungle');
$savana->addAnimal($lion);
$savana->addAnimal($elephant);
$jungle->addAnimal($parrot);

$areas = [$savana, $desert, $jungle];


/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
