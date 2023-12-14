<!-- 009 -->

<?php
echo '<pre>';

$arr = ['raccon', 'rabit', 'fox'];

/*
// dont do this !!!!!
$badArray = array('raccon', 'rabit', 'fox');
print_r($badArray);
*/

// array yra primityvus tipo, todel nera nuorodos, o yra kopija

$arr2 = $arr;
$arr2[0] = 'dog';


// isimti is array
array_pop($arr2);
array_shift($arr2);



//ideti i array
array_push($arr, 'cat'); // lame
$arr[] = 'cat';          // cool

// ideda i gala
$arr[19] = 'cow';

$arr['lauke'] = 'lape';
$arr[''] = 'lape2';
$arr[''] = 'lape3';

$arr[] = 'Cool cat';  
$arr[true] = 'true';
$arr[false] = 'false';

$arr['1'] = '1 stringas';
$arr['01'] = '1 stringas';

$arr['8.7'] = '8.7 float';

//ideda i prieki
array_unshift($arr, 'mouse');
array_unshift($arr, 'Cool cat');

// tvarka islaikoma, bet indeksai padaromi standartiski nuo 0 iki galo
$arr4 = array_values($arr);

print_r($arr2);

print_r($arr);
echo '<br>';

print_r($arr4);
echo '<br>';

// echo count($arr); //ilgis


foreach ($arr as $index => &$value) {
    // $arr[$index] = 'kate winslet';
    // echo "[$index] => $value <br>";
    $value = 'kate winslet';
}

// foreach ($arr as $index => $value) {
//     // $arr[$index] = 'kate winslet';
//     // echo "[$index] => $value <br>";
// }

print_r($arr);
echo '<br>';

$A = 5;
$B = &$A;

$A++;

echo $A, ' ' , $B;

echo '<br>';
