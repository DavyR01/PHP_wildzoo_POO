<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$lion = new Animal();
$parrot = new Animal();
$python = new Animal();

// var_dump(($lion));
// var_dump(($parrot));
// var_dump(($python));

$animals = [$lion, $parrot, $python];

$lion->name = "lion";
$lion->pawNumber = "4";
$lion->carnivorous = true;
$lion->size = 50;
$lion->threatenedLevel = "VU";


$parrot->name = "parrot";
$parrot->size = 50;
$parrot->pawNumber = "2";
$parrot->threatenedLevel = "LC";

$python->name = "python";
$python->size = 50;
$python->pawNumber = "0";
$python->threatenedLevel = "LC";

echo 'Bonjour, je suis un ' . $lion->name . " et j'ai " . $lion->pawNumber . " patte(s)";

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
