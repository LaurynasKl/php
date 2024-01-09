<?php

abstract class H1 {

    abstract public function randomColor() : string;

    public function textH1($text) {
        return '<h1 style="color:'.$this->randomColor().';"> '.$text.'</h1>';
    }
}