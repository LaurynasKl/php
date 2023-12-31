<?php

class MarsoPalydovas {

    private static $vardai = ['Deimas', 'Fobas'];
    private static $palydovai = [];
    private $vardas;

    public static function getPalydovai() {

        $sukurta = count(self::$palydovai);

        if ($sukurta < count(self::$vardai)) {
            return self::$palydovai[] = new self(self::$vardai[$sukurta]);
        }
        return self::$palydovai[rand(0, 1)];
    }

    private function __construct($vardas)
    {
        $this->vardas = $vardas;
    }

}