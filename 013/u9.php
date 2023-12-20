<?php

if ($_SERVER[REQUEST_METHOD]) {
    $vb = $_POST['cb'] ?? [];
    $color = 'white';
    $count = count($cb);
    header('Location: http://localhost/BIT-backend/php/013/u9.php?count='. $count);
    die;
}

// $color = isset($_GET['count']) ? 'white' : 'black';

// $letters = range('A', 'J');
// $random3_10 = rand(3, 10);

if (isset($_GET['count'])) {
    $count = $_GET['count'];
    $color = 'white';
} else{
    $color = 'black';
    $letters = range('A', 'J');
    $random3_10 = rand(3, 10);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uzdavinys 9</title>
</head>
<body style="background-color:<?= $color ?>;">
<!-- <body style="background-color:<?php echo $color ?>;"> -->

<?php if ($color == 'white'): ?>
    <h1 style="color:skyblue;">You have selected <?= $count ?> letters</h1>
    <a href="http://localhost/BIT-backend/php/013/u9.php?">back</a>
    
<?php else : ?>

<form action="" method="post">
    <?php foreach (array_slice($letters, 0,  $random3_10) as $letter): ?>
        <input type="checkbox" name="cb[]" value="<?= $letter ?>">
        <label style="color:skyblue"> <?= $letter ?></label>
    <?php endforeach ?>
    <button type="submit">POST IT</button>
</form>

</body>
</html>

