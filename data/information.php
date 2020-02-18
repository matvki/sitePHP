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
        <link rel="stylesheet" href="./css/headerFooter.css">
        <link rel="stylesheet" href="./css/info.css">
        <title>TAF1 | Information</title>
    </head>

    <body>
        <?php include_once './templates/header.php' ?>
        <main class="flex">
            <?php if (!isset($_SESSION['userName'])) : ?>
                <p class="unlog">Veuillez vous <a href="./login.php" class="unlog"> connecter</a></p>
            <?php else : ?>
                <h1>Tous sur la F1</h1>
                <div class="element flex first">
                    <?php if ($_SESSION['two']['picture'] == 'yes') : ?>
                        <div class="picture">
                            <img src="./img/podium.jpeg" alt="">
                        </div>
                    <?php endif ?>
                    <?php
                    if ($_SESSION['two']['text'] == 'yes') : ?>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, omnis. Exercitationem cupiditate repellendus vitae est nemo sequi porro voluptatem esse alias repellat! Eius ipsum rem soluta blanditiis amet accusamus cumque.
                            Vero eum repudiandae facilis dolores perspiciatis ratione? Nulla ipsam tenetur in pariatur quod corporis doloribus, esse repellat cupiditate! Fuga velit laboriosam sint amet sapiente dolore dolores ad natus, fugit quod?
                            Aperiam, aliquid itaque? Earum laboriosam temporibus totam facilis numquam dicta reprehenderit eveniet! Cum facilis vitae quas ipsum accusantium similique vero iste ducimus impedit eos! Ullam corrupti ipsum nam in tempora!
                            Non, expedita eius aperiam necessitatibus ad, error aut quibusdam, quo doloremque dicta corrupti. Quos reiciendis, quam in neque inventore officia natus voluptatibus iure vel voluptates mollitia distinctio perspiciatis quasi. Corporis!
                            Corrupti quasi commodi saepe reprehenderit molestias deleniti minima. Voluptatibus illum dolorem debitis fugit, exercitationem iusto quidem sapiente quo. Dolorem expedita sequi dolorum officiis blanditiis similique labore exercitationem non culpa ipsa.
                            Enim, itaque aspernatur exercitationem a cumque perferendis amet sequi neque omnis repellat sunt ad maiores modi est! Nemo aperiam accusantium ipsam maiores vero unde eaque quam harum, eveniet consectetur aut!
                        </p>
                    <?php endif ?>
                </div>
                <div class="element flex">
                    <?php if ($_SESSION['two']['picture'] == 'yes') : ?>
                        <div class="picture">
                            <img src="./img/lewis.jpg" alt="">
                        </div>
                    <?php endif ?>
                    <?php
                    if ($_SESSION['two']['text'] == 'yes') : ?>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, omnis. Exercitationem cupiditate repellendus vitae est nemo sequi porro voluptatem esse alias repellat! Eius ipsum rem soluta blanditiis amet accusamus cumque.
                            Vero eum repudiandae facilis dolores perspiciatis ratione? Nulla ipsam tenetur in pariatur quod corporis doloribus, esse repellat cupiditate! Fuga velit laboriosam sint amet sapiente dolore dolores ad natus, fugit quod?
                            Aperiam, aliquid itaque? Earum laboriosam temporibus totam facilis numquam dicta reprehenderit eveniet! Cum facilis vitae quas ipsum accusantium similique vero iste ducimus impedit eos! Ullam corrupti ipsum nam in tempora!
                            Non, expedita eius aperiam necessitatibus ad, error aut quibusdam, quo doloremque dicta corrupti. Quos reiciendis, quam in neque inventore officia natus voluptatibus iure vel voluptates mollitia distinctio perspiciatis quasi. Corporis!
                            Corrupti quasi commodi saepe reprehenderit molestias deleniti minima. Voluptatibus illum dolorem debitis fugit, exercitationem iusto quidem sapiente quo. Dolorem expedita sequi dolorum officiis blanditiis similique labore exercitationem non culpa ipsa.
                            Enim, itaque aspernatur exercitationem a cumque perferendis amet sequi neque omnis repellat sunt ad maiores modi est! Nemo aperiam accusantium ipsam maiores vero unde eaque quam harum, eveniet consectetur aut!
                        </p>
                    <?php endif ?>
                </div>
                <div class="element flex">
                    <?php if ($_SESSION['two']['picture'] == 'yes') : ?>
                        <div class="picture">
                            <img src="./img/pitstop.jpg" alt="">
                        </div>
                    <?php endif ?>
                    <?php
                    if ($_SESSION['two']['text'] == 'yes') : ?>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, omnis. Exercitationem cupiditate repellendus vitae est nemo sequi porro voluptatem esse alias repellat! Eius ipsum rem soluta blanditiis amet accusamus cumque.
                            Vero eum repudiandae facilis dolores perspiciatis ratione? Nulla ipsam tenetur in pariatur quod corporis doloribus, esse repellat cupiditate! Fuga velit laboriosam sint amet sapiente dolore dolores ad natus, fugit quod?
                            Aperiam, aliquid itaque? Earum laboriosam temporibus totam facilis numquam dicta reprehenderit eveniet! Cum facilis vitae quas ipsum accusantium similique vero iste ducimus impedit eos! Ullam corrupti ipsum nam in tempora!
                            Non, expedita eius aperiam necessitatibus ad, error aut quibusdam, quo doloremque dicta corrupti. Quos reiciendis, quam in neque inventore officia natus voluptatibus iure vel voluptates mollitia distinctio perspiciatis quasi. Corporis!
                            Corrupti quasi commodi saepe reprehenderit molestias deleniti minima. Voluptatibus illum dolorem debitis fugit, exercitationem iusto quidem sapiente quo. Dolorem expedita sequi dolorum officiis blanditiis similique labore exercitationem non culpa ipsa.
                            Enim, itaque aspernatur exercitationem a cumque perferendis amet sequi neque omnis repellat sunt ad maiores modi est! Nemo aperiam accusantium ipsam maiores vero unde eaque quam harum, eveniet consectetur aut!
                        </p>
                    <?php endif ?>
                </div>
            <?php endif ?>
        </main>
        <?php include_once './templates/footer.php' ?>
    </body>
<?php } ?>

</html>