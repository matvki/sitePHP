<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" type="image/png" href="./img/favicon.png" />
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>TAF1 | Accueil</title>
</head>
<body>
    <?php include_once './templates/header.php' ?>
    <div id="alignCenter" class="flex">
        <form action="./controllers/login.php" method="$_POST">
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