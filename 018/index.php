<?php

require __DIR__. '/Afrika.php';
require __DIR__. '/ManoAfrika.php';
require __DIR__. '/Dramblys.php';
require __DIR__. '/Krokodilas.php';

$dramblys = new Dramblys;
$krokodilas = new Krokodilas;

// echo '<pre>';
// var_dump($dramblys);

// echo $dramblys->mano . '<br>';
echo $dramblys->pavadinimas . '<br>';
echo $dramblys->zemynas . '<br>';
echo $dramblys->socialinisTinkas . '<br>';

$dramblys->padainuok();


echo $krokodilas->pavadinimas . '<br>';
echo $krokodilas->zemynas . '<br>';
echo $krokodilas->socialinisTinkas . '<br>';

$krokodilas->padainuok();