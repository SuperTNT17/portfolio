<?php
include "../source/dbconnect.php";
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8f0691896d.js" crossorigin="anonymous"></script>
    <script src="main.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <title>Portfolio - Projecten</title>
</head>

<body>
    <header>
        <nav>
            <button id="hamburger-button" onclick="toggleBurger()">
                <i id="js-hamburger-icon" class="fa-solid fa-bars"></i>
            </button>
            <ul id="js-burger-nav">
                <li><a href="index.php">Home</a></li>
                <li><a class="nav-active" href="projects.php">Projecten</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="projects" id="projects">
            <h1>Projecten</h1>
            <p>Hier staan een aantal projecten die ik heb gemaakt of deel van het development team van ben geweest.</p>
            <p>Al deze projecten en meer zijn te vinden op mijn
                <a href="https://github.com/SuperTNT17">GitHub <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </p>
            <div class="projects-container">
                <?php
                foreach ($projects as $project) {
                ?>
                    <div class="project">
                        <p class="project-title"><?= $project['title'] ?></p>
                        <img class="project-image" src="<?= "img/" . $project['image'] ?>" alt="afbeelding van project">
                        <p class="project-description"><?= $project['description'] ?></p>
                        <a class="project-link" href="<?= $project['link'] ?>" target="_blank">Live Project <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
    </main>
    <?php
    include_once("components/footer.php");
    ?>
</body>

</html>