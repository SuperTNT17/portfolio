<?php
include "../source/config.php";
$mysqli = new mysqli($host, $user, $dbpassword, $dbname);

$stmt = $mysqli->prepare("SELECT * FROM projects");
$stmt->execute();
$projects = $stmt->get_result();
$stmt->close();
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
    <h1>Portfolio</h1>
    <main>
        <section>
            <h2>Projects</h2>
            <div class="projects-container">
                <?php
                foreach ($projects as $project) {
                    ?>
                    <div class="project">
                        <p class="project-title"><?=$project['title']?></p>
                        <img class="project-image" src="<?="img/".$project['image']?>" alt="afbeelding van project">
                        <p class="project-description"><?=$project['description']?></p>
                        <a class="project-link" href="<?=$project['link']?>">link naar live project</a>
                    </div>
                    <?
                }
                ?>
            </div>
        </section>
    </main>
</body>

</html>