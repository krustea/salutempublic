<?php

function insertAppointment(string $date, string $message, int $patient_id, int $specialty_id) : int {
    global $connexion;

    $query = "INSERT INTO appointment (date, message, patient_id, specialty_id)
                VALUES (:date, :message, :patient_id, :specialty_id)";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":date", $date);
    $stmt->bindParam(":message", $message);
    $stmt->bindParam(":patient_id", $patient_id);
    $stmt->bindParam(":specialty_id", $specialty_id);

    $errcode = 0;
    try {
        $stmt->execute();
    } catch (PDOException $ex) {
        $errcode = $ex->getCode();
    }

    return $errcode;
}