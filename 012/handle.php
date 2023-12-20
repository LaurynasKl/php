<?php

if ($_SERVER['REQUEST_METHOD'] == 'post') {
    $kas = $_POST['kas'] ?? '';
    header('Location: http://localhost/BIT-backend/php/php012/handle.php/');
    exit;
}
// GET 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WEB MECHANIC</h1>
    <h2><?php echo $kas ?? 'Nieko nera' ?> </h2>

<form action="http://localhost/BIT-backend/php/php012/handle.php/" method="post">
    <input type="text" name="kas">
    <button type="submit">POST IT</button>
</form>
    
</body>
</html>

