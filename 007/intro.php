<!-- 007 -->

<h1>Php start</h1>

<?php

echo ('<h1>Labas</h1>');

$jaja = 25;

?>

<h1>Big</h1>

<?php

// echo $jaja;


$s1 = 'Labas';
$s2 = 'rytas';

// echo $s1 . ' ' . $s2;

$s3 = "$s1 ry\"tas";
$s4 = '$s1 ry\'tas';

echo $s3;
echo'<br>';

echo $s4;
echo'<br>';


$a1 = 'a2';
$a2 = 'a3';
$a3 = 'Labas';

echo $$$a1; // $$$a1 → $$a2 → $a3

echo '<br>';

print $a3;
echo '<br>';

print_r([$a3, $a2, $a1]);

echo '<pre>';
print_r([$a3, $a2, $a1]);
echo '</pre>';

echo '<br>';

var_dump($s3);
echo '<br>';
var_dump('gegutė');