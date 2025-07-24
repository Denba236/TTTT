<?php
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$role = $_POST["role"];

$users = json_decode(file_get_contents("users.json"), true);
$users[] = ["email" => $email, "password" => $password, "role" => $role];
file_put_contents("users.json", json_encode($users, JSON_PRETTY_PRINT));

header("Location: login.html");
?>