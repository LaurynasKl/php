<?php
session_start();

$_SESSION['mano_sesija'] = 'skanus sesija';
$_SESSION['logged'] = 'yes sesija';

setcookie('mano_saldainis', 'skanus');
setcookie('mano_saldainis2', 'dar skanesnis', time() + 3600);
setcookie('mano_saldainis3', 'labai skanus', time() - 3600);  // istrinti cookie, laikas turi buti - (time() - 100)
