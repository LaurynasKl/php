<?php

class Bebras {

    public $spalva = 'ruda';
    private $svoris = 'nezinomas';
    private $ugis = 1.0;


    public function __construct() {
        echo '<br> Bebras atejo <br>';
    }

    public function __destruct() {
        echo '<br> Bebras isejo <br>';
    }

    public function __get($prop) {
        return match ($prop) {
            'ugis' => $this->ugis . ' metrai',
            'svoris' => $this->svoris . ' kg',
            'uodega' => $this->kokiaUodega(),
            default => null,
        };
    }

    public function __set($prop, $val) {
        if ($prop == 'ugis') {
            if ($val < 0.8 || $val > 1.0) {
                echo 'Blogai ivestas ugis';
                return;
            }
            $this->ugis = $val;
        }
    }



    
    public function __toString() {
        return "<br>Bebro spalva: $this->spalva, ugis: $this->ugis";
    }

    public function __invoke() {
        echo '<br> Bebras sako: <br>';
        echo 'Labas <br>';
    }


    public function __serialize(): array {
        return [
            'ugis' => $this->ugis,
            'svoris' => $this->svoris
        ];
    }



    private function kokiaUodega() {
        return 'uodega: ' . rand(20, 30) . ' cm';
    }



    // getteris
    public function koksSvoris() {
        return $this->svoris;
    }

    // setteris
    public function duotiMaisto($kg) {
        if ($kg > 20) {
            echo 'Per daug <br>';
            return;
        }
        if ($kg < 0.1) {
            echo 'Per mazai <br>';
            return;
        }
        if ($kg + $this->svoris > 45) {
            echo 'Bebras jau storas <br>';
            return;
        }
        echo 'Bebras pasertas <br>';
        $this->svoris = $this->svoris + $kg;
    }


    public function pasverti() {
        $this->svoris = rand(5, 45);
    }
}
