<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Read</title>
</head>

<body>
<!-- http://localhost/BIT-backend/php/015crud/read.php -->

    <?php require __DIR__ . '/parts/nav.php' ?>

    <ul class="list-group list-group-flush mt-5">
        <li class="list-group-item">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <b>Box ID</b>
                    </div>
                    <div class="col-2">
                        <b>Amount</b>
                    </div>
                    <div class="col-8">
                        <a href="http://localhost/BIT-backend/php/015crud/show.php?id=<?= $box['boxId'] ?>" class="btn btn-outline-success btn-sm">Show</a>
                    </div>
                </div>
            </div>
        </li>

        <?php $boxes = json_decode(file_get_contents(__DIR__ . '/data/boxes.json'), true) ?>
        <?php foreach ($boxes as $box) : ?>
            <li class="list-group-item">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <?= $box['boxId'] ?>
                        </div>
                        <div class="col-2">
                            <?= $box['amount'] ?>
                        </div>
                        <div class="col-8">
                        <a href="http://localhost/BIT-backend/php/015crud/show.php?id=<?= $box['boxId'] ?>" class="btn btn-outline-success btn-sm">Show</a>
                    </div>
                    </div>
                </div>
            </li>
        <?php endforeach ?>
    </ul>

</body>

</html>