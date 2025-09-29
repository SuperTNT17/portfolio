<?php
include "../source/dbconnect.php";
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8f0691896d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li class="nav-active"><a href="index.php">Home</a></li>
                <li><a href="projects.php">Projecten</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="landing">
            <div class="landing-text">
                <h1>Robin Lemmers</h1>
                <h2>Full-stack web dev</h2>
            </div>
            <div class="landing-buttons">
                <div class="landing-button-projects">
                    <a href="#projects">Projecten</a>
                </div>
                <div class="landing-button-skills">
                    <a href="#skills">Skills</a>
                </div>
            </div>
        </section>
        <section class="projects" id="projects">
            <h2>Projecten</h2>
            <p>Dit zijn een paar van mijn projecten die ik het leukste vond om te maken</p>
            <div class="projects-container">
                <?php
                $count = 0;
                foreach ($projects as $project) {
                    if ($count >= 3) {
                        break;
                    }
                ?>
                    <div class="project">
                        <p class="project-title"><?= $project['title'] ?></p>
                        <img class="project-image" src="<?= "img/" . $project['image'] ?>" alt="afbeelding van project">
                        <p class="project-description"><?= $project['description'] ?></p>
                        <a class="project-link" href="<?= $project['link'] ?>" target="_blank">Live Project <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                <?
                    $count++;
                }
                ?>
            </div>
            <a href="projects.php" class="projects-page-button">Alle Projecten</a>
        </section>
        <section class="skills" id="skills">
            <h2>Skills</h2>
            <ul class="skills-list">
                <li>
                    <div class="skill">
                        <h3>HTML</h3>
                    </div>
                    <div class="skill">
                        <h3>CSS</h3>
                    </div>
                    <div class="skill">
                        <h3>JS</h3>
                    </div>
                    <div class="skill">
                        <h3>PHP</h3>
                    </div>
                </li>
            </ul>
        </section>
    </main>
    <footer>
        <p class="copyright"><img class="no-ai" src="img/no-ai-icon-01.png" alt="Icon dat aantoont dat ik geen AI heb gebruikt">&amp; &copy; 2025 Robin Lemmers</p>
        <ul class="footerLinks">
            <li><a href="https://github.com/SuperTNT17" target="_blank">GitHub <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
            <li><a href="https://www.linkedin.com/in/robin-lemmers-ab2539250/" target="_blank">LinkedIn <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
        </ul>
    </footer>
</body>

</html>