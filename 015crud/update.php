<?php 
session_start();


$id = $_GET['id'] ?? 0;

if (!$id) {
    header('Location: http://localhost/BIT-backend/php/015crud/read.php');
    exit;
}

$boxes - json_decode(file_get_contents(__DIR__ . '/data/boxes.json'), true);

foreach ($boxes as $index => $box) {
    if ($box['boxId'] == $id) {
        $box['amount'] = (int) $_POST['amount'];
        $boxes[$index] = $box;
        break;
    }
}

file_put_contents(__DIR__ . '/data/boxes.json', json_encode($boxes, JSON_PRETTY_PRINT), true);

header('Location: http://localhost/BIT-backend/php/015crud/read.php');
