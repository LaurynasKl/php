<!-- 008 -->

<?php

$jonas = rand(5, 25);
$petras = rand(10, 20);

echo "Jonas: $jonas Petras: $petras <br>";

if ($jonas > $petras) {
    echo 'Laimejo Jonas';
} else if($jonas < $petras){
    echo 'Laimejo Petras';
} else {
    echo 'Lygiosios';
}

echo '<br>';

$vienas = 12;
// $rezultatas = 1 == $vienas ? 'Yes' : 'No';
$rezultatas = 1 == $vienas ? '1' : (2 == $vienas ? '2' : 'DoNotKnow');
echo $rezultatas;

echo '<br>';

// isset() tikrina ar yra kintamasis
$kas = null;
var_dump(isset($kas));
echo '<br>';

$kas1 = 5;
var_dump(isset($kas1));
echo '<br>';

var_dump($kas2 ?? 8 === null);

echo '<br>';


for ($i = 1;$i <= 15;$i++){
    if (rand(0, 10)> 9){
        break;
    }
    echo $i;
    echo '<br>';
}
echo 'Ciklo pabaiga';


