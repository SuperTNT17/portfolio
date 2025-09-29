<?php
include "../source/dbconnect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8f0691896d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Portfolio - Projects</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a class="nav-active" href="projects.php">Projecten</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="projects" id="projects">
            <h1>Projecten</h1>
            <p>Hier staan een aantal projecten die ik heb gemaakt of deel van het development team van ben geweest.</p>
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
                <?
                }
                ?>
            </div>
        </section>
    </main>
    <footer>
        <p class="copyright">&copy; 2025 Robin Lemmers</p>
        <ul class="footerLinks">
            <li><a href="https://github.com/SuperTNT17" target="_blank">GitHub <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
            <li><a href="https://www.linkedin.com/in/robin-lemmers-ab2539250/" target="_blank">LinkedIn <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
        </ul>
    </footer>
</body>

</html>