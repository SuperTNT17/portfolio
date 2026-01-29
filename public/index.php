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

<body id="home">
    <header>
        <nav>
            <ul>
                <li class="nav-active"><a href="#home">Home</a></li>
                <li><a href="projects.php">Projecten</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="landing">
            <div class="landing-text">
                <div class="landing-text-titles">
                    <h1 class="title-red">Robin</h1>
                    <h1 class="title-blue">Lemmers</h1>
                </div>
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
                        <p>Ik heb veel ervaring met HTML, omdat ik er al jaren mee werk en bijna al mijn projecten gebruiken HTML</p>
                    </div>
                </li>
                <li>
                    <div class="skill">
                        <h3>CSS</h3>
                        <p>Mijn ervaring met CSS ligt vooral bij het statisch stylen van een website, hover effects en andere kleine animaties heb ik ook ervaring mee.</p>
                    </div>
                </li>
                <li>
                    <div class="skill">
                        <h3>JS</h3>
                        <p>JavaScript vind ik echt een van de leukste talen om mee te werken, want het laat je alles doen met een website wat je maar kan bedenken.</p>
                    </div>
                </li>
                <li>
                    <div class="skill">
                        <h3>PHP</h3>
                        <p>Ik vind het grootste voordeel van PHP vooral dat je heel makkelijk met een database kan verbinden, daarom gebruik ik het altijd als ik een project ga maken waar ik mysql nodig heb.</p>
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