<?php

require __DIR__ .'/Bebras.php';

$bebras1 = new Bebras;
$bebras2 = new Bebras;

echo $bebras1->koksSvoris();
echo '<br>';

$bebras1->pasverti();

$bebras1->ugis = 0.9;
echo '<br>';

echo $bebras1->svoris;
echo '<br>';
echo $bebras1->ugis;
echo '<br>';
echo $bebras1->uodega;
echo '<br>';



$bebras1->duotiMaisto(1);

echo $bebras1->koksSvoris();
echo '<br>';


$sb1 = serialize($bebras1);
// echo $sb1;

// echo '<pre>';
// var_dump(unserialize($sb1));


echo $bebras1;
echo '<br>';


$bebras2();