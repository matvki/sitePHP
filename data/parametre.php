<?php
session_start();
if (!isset($_SESSION['userName'])) {
    header('Location: /');
} else { ?>
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
            <form action="./controller/para.php" method="POST">
                <h1>Bienvenu dans vos paramètres!</h1>
                <p>C'est ici que vous pourrez selectionner si vous voulez afficher les images de tel ou tel page ainsi que leurs texte.</p>
                <div id="pageOne">
                    <h3>Vos préférences pour la page d'acceuil: </h3>
                    <div id="picture">
                        <p>Voulez-vous afficher l'image ?</p>
                        <input type="radio" name="picture" id="picturePOY" value="yes">
                        <label for="picturePOY">Oui</label>
                        <input type="radio" name="picture" id="picturePON" value="no">
                        <label for="picturePON">Non</label>
                    </div>
                    <div id="text">
                        <p>Voulez-vous afficher le texte ?</p>
                        <input type="radio" name="text" id="textPOY" value="yes">
                        <label for="textPOY">Oui</label>
                        <input type="radio" name="text" id="textPON" value="no">
                        <label for="textPON">Non</label>
                    </div>
                </div>
                <div id="pageOne">
                    <h3>Vos préférences pour la page d'information: </h3>
                    <div id="picture">
                        <p>Voulez-vous afficher les images ?</p>
                        <input type="radio" name="picture" id="picturePTY" value="yes">
                        <label for="picturePTY">Oui</label>
                        <input type="radio" name="picture" id="picturePTN" value="no">
                        <label for="picturePTN">Non</label>
                    </div>
                    <div id="text">
                        <p>Voulez-vous afficher les textes ?</p>
                        <input type="radio" name="text" id="textPTY" value="yes">
                        <label for="textPTY">Oui</label>
                        <input type="radio" name="text" id="textPTN" value="no">
                        <label for="textPTN">Non</label>
                    </div>
                </div>
                <div id="pageTwo">

                </div>
            </form>
        </main>
    </body>

    </html>
<?php } ?>