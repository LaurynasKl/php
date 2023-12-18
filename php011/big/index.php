<?php

// include    (nenaudoti)
// require    (naudoti)


define('OK', true);


echo '<br> Big INDEX <br>';

include __DIR__ . '/f1.php';

echo '<br> Big INDEX midle <br>';

if (file_exists(__DIR__.'f2.php')) {
    require __DIR__ .'f2.php';
}

require __DIR__ . '/../here.php';


// nenaudoti, rodo kad nemoki suziureti savo kodo
// include_once __DIR__ . '/f1.php'; 


// require __DIR__ . '/f2.php'; // geras budas

// @include __DIR__ . '/f2.php'; // blogai, nenaudoti


echo '<br> Big INDEX end <br>';
