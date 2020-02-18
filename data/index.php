<?php session_start() ?>
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
  <main class="flex">
    <h1>Bienvenu <?php if (isset($_SESSION['userName'])) {
                    echo "$_SESSION[userName]";
                  } ?> sur votre boutique de F1</h1>
    <?php if (!isset($_SESSION['userName'])) : ?>
      <p class="unlog">Veuillez vous <a href="./login.php" class="unlog"> connecter</a></p>
    <?php else : ?>
      <?php if ($_SESSION['one']['picture'] == 'yes') : ?>
        <div id="picture">
          <img src="./img/lewis.jpg" alt="">
        </div>
      <?php endif ?>
      <?php
      if ($_SESSION['one']['text'] == 'yes') : ?>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, omnis. Exercitationem cupiditate repellendus vitae est nemo sequi porro voluptatem esse alias repellat! Eius ipsum rem soluta blanditiis amet accusamus cumque.
          Vero eum repudiandae facilis dolores perspiciatis ratione? Nulla ipsam tenetur in pariatur quod corporis doloribus, esse repellat cupiditate! Fuga velit laboriosam sint amet sapiente dolore dolores ad natus, fugit quod?
          Aperiam, aliquid itaque? Earum laboriosam temporibus totam facilis numquam dicta reprehenderit eveniet! Cum facilis vitae quas ipsum accusantium similique vero iste ducimus impedit eos! Ullam corrupti ipsum nam in tempora!
          Non, expedita eius aperiam necessitatibus ad, error aut quibusdam, quo doloremque dicta corrupti. Quos reiciendis, quam in neque inventore officia natus voluptatibus iure vel voluptates mollitia distinctio perspiciatis quasi. Corporis!
          Corrupti quasi commodi saepe reprehenderit molestias deleniti minima. Voluptatibus illum dolorem debitis fugit, exercitationem iusto quidem sapiente quo. Dolorem expedita sequi dolorum officiis blanditiis similique labore exercitationem non culpa ipsa.
          Enim, itaque aspernatur exercitationem a cumque perferendis amet sequi neque omnis repellat sunt ad maiores modi est! Nemo aperiam accusantium ipsam maiores vero unde eaque quam harum, eveniet consectetur aut!
        </p>
      <?php endif ?>
    <?php endif ?>
  </main>

</body>

</html>