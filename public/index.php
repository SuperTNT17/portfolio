<?php
include "../source/config.php";
$mysqli = new mysqli($host, $user, $dbpassword, $dbname);

$stmt = $mysqli->prepare("SELECT * FROM projects");
$stmt->execute();
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
    <h1>test</h1>
    <?php
    $result = $stmt->get_result();
    foreach ($result as $row){
        echo "title: " . $row['title'];
        echo "<br>";
        echo "desc: " . $row['description'];
        echo "<br>";
        ?>
        <img src="<?php echo $row['image']?>" alt="test image">
        <?php
        echo "<br>";
        ?>
        <a href="<?php echo $row['link']?>">klik mij!</a>
        <?php
    }
    ?>
</body>

</html>