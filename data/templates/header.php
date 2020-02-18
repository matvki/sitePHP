
<header>
    <ul class="flex">
        <li><a href="/">Accueil</a></li>
        <?php if (isset($_SESSION['userName'])) : ?>
            <li><a href="./information.php">Information</a></li>
            <li id="scroll">
                <span><?= $_SESSION['userName'] ?></span>
                <ul>
                    <li><a href="./parametre.php">Paramètre</a></li>
                    <li><a href="./controllers/delog.php">Déconnection</a></li>
                </ul>
            </li>
        <?php else : ?>
            <li><a href="./login.php">Connexion</a></li>
        <?php endif ?>
    </ul>
</header>