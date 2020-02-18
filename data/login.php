<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="icon" type="image/png" href="./img/favicon.png" />
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>TAF1 | Accueil</title>
</head>

<body>
    <?php include_once './templates/header.php' ?>
    <form action="./controllers/login.php" method="$_POST">
        <h1>Connexion</h1>
        <label for="name">Votre nom : </label>
        <input type="text" name="name" id="name" value="jon">
        <label for="password">Votre mot de passe : </label>
        <input type="password" name="password" id="password" value="1234">
        <input type="submit" value="Validé">
    </form>

</body>

</html>