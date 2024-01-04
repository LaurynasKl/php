<?php 

require __DIR__. '/Kibiras1.php';

$kibiras1 = new Kibiras1;

$kibiras1->prideti1akmeni();
$kibiras1->pridetiDaugAkmenu(5);

echo $kibiras1->kiekPririnktaAkmenu(). '<br>';