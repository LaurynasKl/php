<?php

$farm = [
    [
        'name' => 'Cow',
        'sound' => 'Moo',
        'price' => 1000,
    ],
    [
        'name' => 'Pig',
        'sound' => 'Oink',
        'price' => 500,
    ],
    [
        'name' => 'Chicken',
        'sound' => 'Cluck',
        'price' => 250,
    ],
    [
        'name' => 'Horse',
        'sound' => 'Neigh',
        'price' => 5000,
    ],
    [
        'name' => 'Sheep',
        'sound' => 'Baa',
        'price' => 750,
    ],
];

echo '<pre>';

print_r($farm);

function sortBySound($a, $b){
    return $a['sound'] <=> $b['sound'];
};

$sortByName = function($a, $b) {
    return $a['name'] <=> $b['name'];
};

usort($farm, fn($a, $b) => $b['price'] <=> $a['price']);
usort($farm, 'sortBySound');
usort($farm, $sortByName);
// print_r($farm);



$persons = [
    [
        'name' => 'Paul',
        'wife' => 'Jane',
    ],
    [
        'name' => 'Peter',
        'wife' => 'Mary',
    ],
    [
        'name' => 'Paul',
        'wife' => 'Sue',
    ],
    [
        'name' => 'Mark',
        'wife' => 'Kate',
    ],
    [
        'name' => 'Paul',
        'wife' => 'Anne',
    ],
];

// sort by name and wife

usort($persons, function($a, $b){
    if ($a['name'] == $b['name']) {
        return $a['wife'] <=> $b['wife'];
    }
    return $a['name'] <=> $b['name'];
});

print_r($persons);



// normalus darbo uzbaigimas
// exit;
// exit('stop');

// die; kodas zemiau sitos eilutes nebebus vykdomas
// klaida kode
// die; 
// die('stop'); 