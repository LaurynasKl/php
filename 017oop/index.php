<?php

require __DIR__ . '/Nso.php';

$nso1 = new Nso(2, 'orange');

$nso2 = $nso1; // by reference

$nso3 = new Nso(3);

echo '<pre>';


echo $nso1->speed . '<br>';

$nso1->speed = 'slow';

echo $nso1->speed . '<br>';

$nso1->goFly();


$nso1->changeColor('blue');



// $nso1->goSwim();


// echo $nso1->color . '<br>';


print_r($nso1);
print_r($nso2);
print_r($nso3);