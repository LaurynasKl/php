<?php


// file_put_contents('text.txt', 'Are you still here?');


$fileContent = file_get_contents('https://www.vz.lt/');

$fileContent = str_replace('Prenumeruoti', 'Bebrai Jega', $fileContent);


echo $fileContent;