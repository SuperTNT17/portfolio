<?php
include "../source/config.php";
include "../source/dbconnect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>
</head>

<body>
    <main>
        <section class="landing">
            <div class="landing-text">
                <h1>Robin Lemmers</h1>
                <h2>Portfolio</h2>
            </div>
        </section>
        <section class="projects">
            <h1>Projects</h1>
            <div class="projects-container">
                <?php
                foreach ($projects as $project) {
                ?>
                    <div class="project">
                        <p class="project-title"><?= $project['title'] ?></p>
                        <img class="project-image" src="<?= "img/" . $project['image'] ?>" alt="afbeelding van project">
                        <p class="project-description"><?= $project['description'] ?></p>
                        <a class="project-link" href="<?= $project['link'] ?>">link naar live project</a>
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
            <li><a href="https://github.com/SuperTNT17" target="_blank">GitHub</a></li>
            <li><a href="https://linkedin.com" target="_blank">LinkedIn</a></li>
        </ul>
    </footer>
</body>

</html>