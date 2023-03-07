<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$lion = new Animal('lion', 4);
// $lion->name = 'lion';
// var_dump($lion);
// $lion->pawNumber = 4;
$lion->carnivorous = true;
// $lion->size = 70;
// echo $lion->getSize();
$lion->setSize(70);
$lion->threatenedLevel = 'VU';

$parrot = new Animal('parrot', 2);
// $parrot->name = 'parrot';
// $parrot->pawNumber = 2;
// $parrot->size = 30;
$parrot->setSize(30);

$elephant = new Animal('elephant', 4);
// $elephant->name = 'elephant';
// $elephant->pawNumber = 4;
$elephant->threatenedLevel = 'LC';

$animals = [$lion, $parrot, $elephant];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
