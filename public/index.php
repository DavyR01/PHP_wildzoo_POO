<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';
require __DIR__ . '/../src/Mammal.php';
require __DIR__ . '/../src/Felid.php';
require __DIR__ . '/../src/Equid.php';
require __DIR__ . '/../src/Bird.php';
require __DIR__ . '/../src/Reptile.php';
require __DIR__ . '/../src/Crocodilian.php';
require __DIR__ . '/../src/Snake.php';
require __DIR__ . '/../src/Anthropode.php';
require __DIR__ . '/../src/Arachnide.php';
require __DIR__ . '/../src/Spider.php';
require __DIR__ . '/../src/Insect.php';
require __DIR__ . '/../src/Area.php';

use App\Area;
use App\Animal;
use App\Bird;
use App\Mammal;
use App\Felid;
use App\Equid;
use App\Reptile;
use App\Crocodilian;
use App\Snake;
use App\Anthropode;
use App\Arachnide;
use App\Spider;
use App\Insect;

// *************** Mammal **********************
$lion = new Felid('lion');
// $lion->setCarnivorous(true);
$lion->setSize(70);
$lion->setThreatenedLevel('VU');

$tiger = new Felid('tiger');
$zebra = new Felid('zebra');

$elephant = new Mammal('elephant');
$elephant->setThreatenedLevel('LC');

// *************** Bird ************************
$parrot = new Bird('parrot');
$parrot->setSize(30);

// *************** Reptile *********************
$alligator = new Crocodilian('alligator');
$python = new Snake('python');


// *************** Anthropode ************************
$scorpio = new Arachnide('scorpio');
$tarantula = new Spider('tarantula');
$bee = new Insect('bee', 0);



$animals = [$lion, $parrot, $elephant, $tiger, $alligator, $zebra, $python, $scorpio, $tarantula, $bee];

$savana = new Area('savana');
$savana->addAnimal($lion);
$savana->addAnimal($elephant);
$jungle = new Area('jungle');
$jungle->addAnimal($parrot);

$areas = [$savana, $jungle];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
