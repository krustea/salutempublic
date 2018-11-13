<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

$id = $_POST["id"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$university = $_POST["university"];
$phone = $_POST["phone"];
$specialties = $_POST["specialties"];

$user_data = [
    "firstname" => $firstname,
    "lastname" => $lastname,
    "email" => $email
];

$doctor_data = [
    "university" => $university,
    "phone" => $phone
];

if ($_FILES["photo"]["error"] == 0) {
    // Supprimer du serveur l'ancienne image
    $doctor = getAllEntities("doctor", $id);
    unlink(UPLOAD_DIR . $doctor["photo"]);

    // Uploader la nouvelle image
    $photo = $_FILES["photo"]["name"];
    $photo_tmp = $_FILES["photo"]["tmp_name"];
    move_uploaded_file($photo_tmp, UPLOAD_DIR . $photo);

    // Ajouter la nouvelle image dans les données à mettre à jour
    $doctor_data["photo"] = $photo;
}

updateEntity("user", $id, $user_data);
updateEntity("doctor", $id, $doctor_data);

// Supprimer l'ensemble des spécialités du docteur
deleteDoctorSpecialties($id);

foreach ($specialties as $specialty) {
    insertEntity("doctor_has_specialty", [
        "doctor_id" => $id,
        "specialty_id" => $specialty
    ]);
}

header("Location: index.php");
