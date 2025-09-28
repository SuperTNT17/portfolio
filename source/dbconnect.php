<?php
include "config.php";
$mysqli = new mysqli($host, $user, $dbpassword, $dbname);

$stmt = $mysqli->prepare("SELECT * FROM projects");
$stmt->execute();
$projects = $stmt->get_result();
$stmt->close();