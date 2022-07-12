<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <?php include_once "./views/lucky-ticket-form.php" ?>

        <?php if (isset($_SESSION["lucky-tickets"])) { ?>
            <div class="result">
                <p class="tickets-result">Count of lucky tickets: <?= $_SESSION["lucky-tickets"] ?></p>
            </div>
        <?php } ?>

        <?php include_once "./views/comment-form.php" ?>
        <?php if (isset($_SESSION["phone"]) && isset($_SESSION["comment"])) { ?>
            <div class="result">
                <h4><?= $_SESSION["phone"] ?></h4>
                <p><?= $_SESSION["comment"] ?></p>
            </div>
        <?php } ?>
        <?php session_destroy() ?>
    </div>
</body>

</html>