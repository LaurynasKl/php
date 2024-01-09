<?php 


class RandomColor extends H1 {

    private $colors = ['skyblue', 'red', 'orange', 'green'];

    public function randomColor() : string {
        return $this->colors[rand(0, count($this->colors) - 1)];
    }
}