<?php
//const yra globali, gali patekti visur

define('MY_CONST', 'My constant value');

// not recommender, negalima constantu is mazuju raidziu
define('small', 'small value');

define('MY_ARRAY', [
    'key' => 'value',
    'key2' => 'value2',
]);

echo MY_CONST;
echo '<br>';
echo small;
echo '<br>';
echo MY_ARRAY['key'];
echo '<br>';
echo '<br>';


function myFunction(){
    echo MY_CONST;
    echo '<br>';
    echo small;
    echo '<br>';
    echo MY_ARRAY['key'];
}

myFunction();


// php predefined constants
echo '<br><br><br>';

echo PHP_INT_MIN;
echo '<br>';
echo PHP_INT_MAX;

echo '<br><br><br>';



// magic constant
echo __DIR__; // parodo pilna kelia iki sito folderio


// always use absolute path !!!  (taip yra saugiau)
file_put_contents(__DIR__.'/test1.txt', 'test1'); // absolute path

file_put_contents('test2.txt', 'test2'); // relative path

