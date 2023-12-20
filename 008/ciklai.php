<?php

echo 'Su break <br>';

for ($k = 1;$k <= 5;$k++){
    echo "<b> Didelis: $k </b><br>";

    for ($i = 1;$i <= 10;$i++){
        if (rand(0, 10)> 9){
            break 2;
        }
        echo "Mazas $i <br>";
    }
    echo 'Ciklo pabaiga';
    echo '<br>';
}
echo '<br> Su continue <br>';


for ($k = 1;$k <= 5;$k++){
    echo "<b> Didelis: $k </b><br>";

    for ($i = 1;$i <= 10;$i++){
        if (rand(0, 10)> 9){
            continue 2; //break 1
        }
        echo "Mazas $i <br>";
    }
    echo 'Ciklo pabaiga';
    echo '<br>';
}

$text = 'labas';
