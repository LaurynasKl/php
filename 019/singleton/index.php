<?php

require __DIR__. '/Cart.php';

$cartOne = Cart::getCart();

$cartTwo = clone $cartOne;


echo '<pre>';


var_dump($cartOne);
var_dump($cartTwo);