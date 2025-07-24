<?php
$name = $_POST["name"];
$points = intval($_POST["points"]);
$ranking = json_decode(file_get_contents("ranking.json"), true);
$ranking[] = ["name" => $name, "points" => $points];
file_put_contents("ranking.txt", json_encode($ranking, JSON_PRETTY_PRINT));
header("Location: ranking.html");
?>
