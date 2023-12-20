<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>

    <h1>WEB mechanic!</h1>

    <a href="http://localhost/BIT-backend/php/php012/webMechanika.php/?kas=kazkas">linkas kazkas</a>
    <a href="http://localhost/BIT-backend/php/php012/webMechanika.php/?kas=kitas">linkas kitas</a>
    <a href="http://localhost/BIT-backend/php/php012/webMechanika.php/?kas=kitas&kitas=kitasDalykas">linkas dar kitas</a>

    <?php
    print_r($_GET);

    print_r($_POST);

    print_r($_SERVER['REQUEST_METHOD']);


    if (($_GET['kas'] ?? '') == 'kazkas') {
        echo '<h2>Labas Kazkas </h2>';
    }
    if (($_GET['kas'] ?? '') == 'kitas') {
        echo '<h2>Labas Kitas </h2>';
    }

    ?>
    
    <form action="http://localhost/BIT-backend/php/php012/webMechanika.php/" method="get">
        <input type="text" name="kas">
        <input type="color" name="kitas">
        <input type="hidden" name="a" value="5">
        <button type="submit">GET</button>
    </form>

    <form action="http://localhost/BIT-backend/php/php012/webMechanika.php/?z=88" method="post">
        <input type="text" name="kas">
        <input type="color" name="kitas">
        <input type="hidden" name="a" value="5">
        <button type="submit">POST</button>
    </form>

    </pre>

</body>
</html>

<!-- 
    // get - kai norim kazka gauti is serverio 
    // post - 

// Query -  GET, POST
// Body     POST
// Params   GET, POST
-->


