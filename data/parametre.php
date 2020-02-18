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
            <form action="./controllers/para.php" method="POST" class="flex">
                <h1>Bienvenue dans vos paramètres!</h1>
                <p>C'est ici que vous pourrez selectionner si vous voulez afficher</p><p id="p2"> les images de tel ou tel page ainsi que leurs texte.</p>
                <div id="pageOne" class="choice">
                    <h3>Vos préférences pour la page d'acceuil: </h3>
                    <div id="picture">
                        <p>Voulez-vous afficher l'image ?</p>
                        <input type="radio" name="pictureI" class="picturePOY" value="yes" <?= ($_SESSION['one']['picture'] == 'yes') ? 'checked': '' ?>>
                        <label for="picturePOY">Oui</label>
                        <input type="radio" name="pictureI" class="picturePON" value="no" <?= ($_SESSION['one']['picture'] == 'no') ? 'checked': '' ?>>
                        <label for="picturePON">Non</label>
                    </div>
                    <div id="text">
                        <p>Voulez-vous afficher le texte ?</p>
                        <input type="radio" name="textI" class="textPOY" value="yes" <?= ($_SESSION['one']['text'] == 'yes') ? 'checked': '' ?>>
                        <label for="textPOY">Oui</label>
                        <input type="radio" name="textI" class="textPON" value="no" <?= ($_SESSION['one']['text'] == 'no') ? 'checked': '' ?>>
                        <label for="textPON">Non</label>
                    </div>
                </div>
                <div id="pageTwo" class="choice">
                    <h3>Vos préférences pour la page d'information: </h3>
                    <div id="picture">
                        <p>Voulez-vous afficher les images ?</p>
                        <input type="radio" name="pictureO" class="picturePTY" value="yes" <?= ($_SESSION['two']['picture'] == 'yes') ? 'checked': '' ?>>
                        <label for="picturePTY">Oui</label>
                        <input type="radio" name="pictureO" class="picturePTN" value="no" <?= ($_SESSION['two']['picture'] == 'no') ? 'checked': '' ?>>
                        <label for="picturePTN">Non</label>
                    </div>
                    <div id="text">
                        <p>Voulez-vous afficher les textes ?</p>
                        <input type="radio" name="textO" class="textPTY" value="yes" <?= ($_SESSION['two']['text'] == 'yes') ? 'checked': '' ?>>
                        <label for="textPTY">Oui</label>
                        <input type="radio" name="textO" class="textPTN" value="no" <?= ($_SESSION['two']['text'] == 'no') ? 'checked': '' ?>>
                        <label for="textPTN">Non</label>
                    </div>
                    <!-- textO pour text other et textI pour text Index -->
                </div>
                <button type="submit">Validé</button>
            </form>
        </main>
    </body>

    </html>
<?php } ?>