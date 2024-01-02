<?php

class Bebras {

    public $spalva = 'ruda';
    private $svoris = 'nezinomas';
    private $ugis = 1.5;


    public function __get($prop) {
        return match ($prop) {
            'ugis' => $this->ugis . ' metrai',
            'svoris' => $this->svoris . ' kg',
            'uodega' => $this->kokiaUodega(),
            default => null,
        };

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