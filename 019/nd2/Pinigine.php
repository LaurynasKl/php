<?php

class Pinigine {
    private $popieriniai = 0;
    private $metaliniai = 0;

    public function ideti($kiekis){
        if ($kiekis < 0) {
            return;
        }
        if ($kiekis >= 2) {
            $this->popieriniai += $kiekis;
        } else {
            $this->metaliniai += $kiekis;
        }
    }

    public function skaiciuoti() {
        echo ($this->popieriniai + $this->metaliniai). '<br>';
    }

}