<?php

declare(strict_types=1);
echo '<pre>';

// nieko nenurodzius grazina null
function noReturn() :void { // nieko negrazina
    echo 'I have no return value. <br>';
}

$noReturnValue = noReturn();
var_dump($noReturnValue);
echo '<br>';


function returnInt() :int | string {
    return 4;
}

$returnIndValue = returnInt();
var_dump($returnIndValue);
echo '<br>';

$canIseeIt = 'Yes';

function tryToSeeMe() {

    //nenaudoti. kazkas blogai jeigu reikia naudoti global
    global $canIseeIt; 

    return $canIseeIt;
}

echo '<br>';


$tryToSeeMeValue = tryToSeeMe();
var_dump($tryToSeeMeValue);


function sum(int $a, int $b = 5) :int{
    return $a + $b;
}
echo '<br>';

$sumResult = sum(-8);

var_dump($sumResult);
echo '<br>';

function sumAll(...$number) :int{

}




function withStatic(){
    static $static = 0; // jeigu yra static issaugo buvusia informacija
    $static++;
    echo $static . '<br>';
}

withStatic();
withStatic();
withStatic();
withStatic();
echo '<br>';


function withRecursive($a) {
    if ($a <= 3) {
        echo 'In:'. $a . '<br>';
        withRecursive($a + 1);
    }
    echo 'Out:'. $a . '<br>';
}

withRecursive(1);
echo '<br>';




$anonymous = function() {
    echo 'I am anonymous <br>';
    return function() {
        echo 'I am anonymous function <br>';
    };
};

$anonymous()();

echo '<br><br>';

// function withCallback($callback){
//     echo 'I am function with callback';
//     $callback();
// }

// withCallback();

$farm = [
    [
        'name' => 'Cow',
        'sound' => 'Muuuu',
        'weight' => 500,
    ],
    [
        'name' => 'Pig',
        'sound' => 'Kra kra',
        'weight' => 100,
    ],
    [
        'name' => 'Chicken',
        'sound' => 'Cip cip',
        'weight' => 1,
    ],
    [
        'name' => 'Horse',
        'sound' => 'Iiiiiii',
        'weight' => 800,
    ],
    [
        'name' => 'Sheep',
        'sound' => 'Beeeee',
        'weight' => 200,
    ],
];

$weightPlus1 = array_map(function($animal){
    $animal['weight'] += 1;
    return $animal;
}, $farm);

print_r($weightPlus1);

