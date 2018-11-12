<?php

function getUserByEmailPassword(string $email, string $password) : array {
    global $connexion;

    $query = "
        SELECT *
        FROM user
        WHERE user.email = :email
        AND user.password = SHA1(:password)
    ";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    $result = $stmt->fetch();

    return $result ? $result : [];
}