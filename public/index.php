<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$lion = new Animal();
$lion->name = 'lion';
$lion->pawNumber = 4;
$lion->carnivorous = true;
$lion->size = 70;
$lion->threatenedLevel = 'VU';
// echo $lion->speak('fr');
// echo $lion->speak('en');
// echo $lion->speak();

$parrot = new Animal();
$parrot->name = 'parrot';
$parrot->pawNumber = 2;
$parrot->carnivorous = true;
$parrot->size = 30;

$elephant = new Animal();
$elephant->name = 'elephant';
$elephant->pawNumber = 4;
$elephant->threatenedLevel = 'LC';

$animals = [$lion, $parrot, $elephant];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
