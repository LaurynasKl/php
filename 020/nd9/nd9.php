<?php 

require __DIR__. '/MarsoPalydovas.php';

$palydovas = MarsoPalydovas::getPalydovai();
$palydovas1 = MarsoPalydovas::getPalydovai();
$palydovas2 = MarsoPalydovas::getPalydovai();
$palydovas3 = MarsoPalydovas::getPalydovai();

echo '<pre>';

var_dump($palydovas);
var_dump($palydovas1);
var_dump($palydovas2);
var_dump($palydovas3);