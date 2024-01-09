<?php

class ColorDigit implements RandomColorInterface, RandomDigitInterface {

    public function randomColor() : string {
        $randomIndex = rand(0, count($this->randomColorsArray()) - 1);
        return $this->randomColorsArray()[$randomIndex];
    }

    public function randomColorsArray(): array
    {
        return ['red', 'blue', 'green', 'orange'];
    }

    public function randomDigit() : int {
        return rand(0, 9);
    }
}