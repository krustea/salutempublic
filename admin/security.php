<?php
require_once __DIR__ . "/../model/database.php";

session_start();

// Vérifier si l'internaute essaie de se connecter
if (isset($_POST["login-email"]) && isset($_POST["login-password"])) {
    $email = $_POST["login-email"];
    $password = $_POST["login-password"];

    // Rechercher l'utilisateur en base de données
    $user = getUserByEmailPassword($email, $password);

    // Conserver l'utilisateur en session
    if (isset($user["id"])) {
        $_SESSION["id"] = $user["id"];
    }
} elseif (isset($_SESSION["id"])) {
    // L'utilisateur est déjà connecté
    $user = getAllEntities("user", $_SESSION["id"]);
}

if (!$user) {
    header("Location: login.php");
}elseif (!$user["admin"]){
    header("Location: ../");
}