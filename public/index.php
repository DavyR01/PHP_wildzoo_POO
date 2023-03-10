<?php

require '../vendor/autoload.php';

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

use App\Animal\Bird;
use App\Area\Desert;
use App\Area\Jungle;
use App\Area\Cage;
use App\Area\Box;
use App\Animal\Equid;
use App\Animal\Felid;
use App\Animal\Snake;
use App\Animal\Animal;
use App\Animal\Insect;
use App\Animal\Mammal;
use App\Animal\Spider;
use App\Area\Aquarium;
use App\Animal\Arachnide;
use App\Animal\Crocodilian;
use App\Animal\Fish;

// $abstractAnimal = new Animal('abstract', 0);

$elephant = new Mammal('elephant');
try {
    $elephant->setThreatenedLevel('LC');
} catch (UnexpectedValueException $exception) {
    $errors[]  = $exception->getMessage();
} catch (RuntimeException $exception) {
    $smallErrors[]  = $exception->getMessage();
}

$elephant->setSize(400);

$lion = new Felid('lion');
try {
    $lion->setSize(100);
} catch (RangeException $exception) {
    $smallErrors[]  = $exception->getMessage();
} catch (Exception $exception) {
    $errors[]  = $exception->getMessage();
}

$lion->setThreatenedLevel('VU');

$tiger = new Felid('tiger');
$tiger->setSize(150);
$tiger->setThreatenedLevel('EN');

$zebra = new Equid('zebra');
$zebra->setSize(120);
$zebra->setThreatenedLevel('EN');

$parrot = new Bird('parrot');
$parrot->setSize(30);

// $alligator = new Crocodilian('alligator'); // indiquera un message d'erreur (Abstract class Fish obligatoire et non Crocodilian)
// $alligator->setSize(180);

$shark = new Fish('shark');
$shark->setSize(180);

$python = new Snake('python');
$python->setSize(300);

$tarentula = new Spider('tarentula');
$tarentula->setSize(10);

$scorpio = new Arachnide('scorpio');
$scorpio->setSize(15);
$scorpio->setCarnivorous(true);

$bee = new Insect('bee');
$bee->setSize(2);



$animals = [$elephant, $lion, $tiger, $zebra, $parrot, $shark, $python, $scorpio, $tarentula, $bee];

try {
    $jungle = new Jungle('jungle');
    $jungle->addAnimal($parrot);
    $jungle->addAnimal($shark);
    $jungle->addAnimal($tarentula);
    $jungle->addAnimal($tiger);

    $desert = new Desert('desert');
    $desert->addAnimal($scorpio);
    // $desert->addAnimal($parrot); // indiquera un message d'erreur (Abstract méthod isValid sur pawNumber)

    $aquarium = new Aquarium('aquarium');
    $aquarium->addAnimal($shark);

    # Animaux dangereux
    $cage = new Cage('cage');
    $cage->addAnimal($lion);
    $cage->addAnimal($tiger);
    $cage->addAnimal($python);
    // $cage->addAnimal($bee); // Impossible car not dangerous

    # Animaux avec taille < 50
    $box = new Box('box');
    $box->addAnimal($bee);
    $box->addAnimal($tarentula);
    $box->addAnimal($scorpio);
    $box->addAnimal($parrot);
    // $box->addAnimal($zebra); // Impossible car !size < 50

    $areas = [$aquarium, $jungle, $desert, $cage, $box];
} catch (Exception $exception) {
    $errors[] = $exception->getMessage();
}

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
