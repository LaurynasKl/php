<?php

require __DIR__. '/Paint.php';
require __DIR__. '/Stories.php';
require __DIR__. '/Sing.php';
require __DIR__. '/Person.php';

$person = new Person;

$person->sayHello();
$person->sing();
$person->tellStory();
$person->paint();
$person->scrolling();
$person->scrolling2();


echo $person->song;
