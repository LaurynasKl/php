<?php

echo '<pre>';

$animals = require __DIR__ .'/animals.php';

$json = json_encode($animals);

file_put_contents(__DIR__.'/animals.json', $json);

$getJson = file_get_contents(__DIR__.'/animals.json');

$data = json_decode($getJson);

foreach($data as $animal){
    echo $animal . '<br>';
}


'</pre>';