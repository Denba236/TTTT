<?php
$title = $_POST["title"];
$date = $_POST["date"];
$events = json_decode(file_get_contents("calendar.json"), true);
$events[] = ["title" => $title, "date" => $date];
file_put_contents("calendar.json", json_encode($events, JSON_PRETTY_PRINT));
header("Location: calendar.html");
?>