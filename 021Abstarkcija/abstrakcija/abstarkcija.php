<?php

require __DIR__. '/H1.php';
require __DIR__. '/RandomColor.php';

$text = new RandomColor();

echo $text->textH1('Hello Raccon!');