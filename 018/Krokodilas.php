<?php

class Krokodilas extends ManoAfrika{
 
    public $pavadinimas = 'Krokodilas';
    public $slapva = 'zalias';
    public $svoris = 'nezinomas';
    public $socialinisTinkas = 'TikTok';

    
    public function __construct() {
        parent::__construct();
        echo 'Labas Krokodile <br>';
    }


    public function padainuok() {
        echo 'Krokodilas dainuoja <br>';
        parent::padainuok();
    }

}