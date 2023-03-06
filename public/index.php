<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$animal1 = new Animal();
$animal2 = new Animal();
$animal3 = new Animal();

// var_dump(($animal1));
// var_dump(($animal2));
// var_dump(($animal3));

$animals = [$animal1, $animal2, $animal3];

// $animals = [$animal1, $animal2];


/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
