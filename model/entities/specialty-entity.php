<?php

function getAllSpecialtiesByDoctor(int $id) : array {
    global $connexion;

    $query = "
            SELECT *
            FROM specialty
            INNER JOIN doctor_has_specialty AS dhs ON specialty.id = dhs.specialty_id
            WHERE dhs.doctor_id = :id;
    ";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertSpecialty(string $label) : void{
    global $connexion;

    $query =" INSERT INTO specialty(label) VALUES (:label)";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":label",$label);
    $stmt->execute();
}