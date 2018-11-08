<?php
require_once __DIR__ . "/../config/parameters.php";
try {
    $connexion = new PDO("mysql:dbname=" . DB_NAME . "; host=" . DB_HOST, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8', lc_time_names = 'fr_FR';"
    ]);
} catch (PDOException $exception) {
    echo "Erreur de connexion à la base de données";
}

function getCountEntities(string $table): int
{
    global $connexion;

    $query = "SELECT COUNT(*) AS nb_rows FROM $table";

    $stmt = $connexion->prepare($query);
    $stmt->execute();

    $result = $stmt->fetch();

    return intval($result["nb_rows"]);
}

function getAllEntities(string $table){
    global $connexion;
    $query="
    SELECT
    *
    FROM $table";

    $stmt = $connexion->prepare($query);
    $stmt->execute();

    return $stmt->fetchall();

}

function deleteEntity(string $table, int $id) : ?int {
    global $connexion;

    $errcode = null;

    $query = "DELETE FROM $table WHERE id = :id";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);

    try {
        $stmt->execute();
    } catch (PDOException $ex) {
        $errcode = $ex->getCode();
    }

    return $errcode;
}

function getAllDoctors(int $id = null) : array {
    global $connexion;

    $query = "
            SELECT *,
            CONCAT (user.firstname, ' ' , user.lastname) AS fullname
            FROM doctor
            INNER JOIN user ON doctor.id = user.id
    ";
    if (isset($id)) {
        $query .=" WHERE doctor.id= :id";
    }

    $stmt = $connexion->prepare($query);
    if (isset($id)){
        $stmt->bindParam(":id", $id);
    }
    $stmt->execute();

    return (isset($id)) ? $stmt->fetch() : $stmt->fetchAll();
}

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

function insertAppointment(string $date, string $message, int $patient_id, int $specialty_id) : int{
    global $connexion;

    $query ="
    INSERT INTO appointment ( date, message, patient_id, specialty_id) VALUES (:date, :message, :patient_id, :specialty_id);";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":date",$date);
    $stmt->bindParam(":message",$message);
    $stmt->bindParam(":patient_id",$patient_id);
    $stmt->bindParam(":specialty_id",$specialty_id);

    $errcode =0;
    try{
        $stmt->execute();
    } catch (PDOException $ex){
        $errcode = $ex->getCode();
    }

    return $errcode;

}