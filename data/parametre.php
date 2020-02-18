<?php
session_start();
if (!isset($_SESSION['userName'])) {
    header('Location: /');
} else {?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <link rel="icon" type="image/png" href="./img/favicon.png" />
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/parametre.css">
        <title>TAF1 | paramètre</title>
    </head>
    <body>
        <?php include_once './templates/header.php' ?>
        <main class="flex">

        </main>
    </body>
    </html>
<?php } ?>