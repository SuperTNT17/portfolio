<?php
include "../source/dbconnect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio - Projects</title>
</head>

<body>
    <header>
        <nav>
            <p>:&#41;</p>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="projects" id="projects">
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
</body>