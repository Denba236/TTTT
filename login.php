<?php
session_start();
$users = json_decode(file_get_contents("users.json"), true);
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";

foreach ($users as $user) {
    if ($user["email"] === $email && password_verify($password, $user["password"])) {
        $_SESSION["user"] = $user["email"];
        $_SESSION["role"] = $user["role"];
        if ($user["role"] === "admin") {
            header("Location: admin.html");
        } else {
            header("Location: dashboard.html");
        }
        exit;
    }
}
echo "Błędny email lub hasło.";
?>