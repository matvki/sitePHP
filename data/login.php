<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="icon" type="image/png" href="./img/favicon.png" />
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>TAF1 | Connexion</title>
</head>

<body>
    <?php include_once './templates/header.php' ?>
    <?php if (!isset($_SESSION['name']) && !isset($_SESSION['password'])) {
    } elseif (($_SESSION['name'] == 'Jon' || $_SESSION['name'] == 'jon' || $_SESSION['name'] == 'JOn' || $_SESSION['name'] == 'JON' || $_SESSION['name'] == 'jOn' || $_SESSION['name'] == 'jON' || $_SESSION['name'] == 'joN') && ( $_SESSION['password'] == '1234' )){
        header('Location: /');
    }else {
        echo '<script type="text/javascript">window.alert("mauvais identifiant ou mot de passe");</script>';
    } ?>
    <div id="alignCenter" class="flex">
        <form action="./controllers/log.php" method="POST">
            <h1>Connexion</h1>
            <div id="inputForm" class="flex">
                <div class="inputLabel">
                    <label for="name">Votre nom : </label>
                    <input type="text" name="name" id="name" value="jon">
                </div>
                <div class="inputLabel">
                    <label for="password">Votre mot de passe : </label>
                    <input type="password" name="password" id="password" value="1234">
                </div>
                <input id="submit" type="submit" value="Validé">
            </div>
        </form>
    </div>
</body>

</html>