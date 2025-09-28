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
            <h2>Projects</h2>
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

</html>