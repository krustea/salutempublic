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

$photo = $_FILES["photo"]["name"];
$photo_tmp = $_FILES["photo"]["tmp_name"];
move_uploaded_file($photo_tmp, UPLOAD_DIR . $photo);

updateEntity("user", $id, [
    "firstname" => $firstname,
    "lastname" => $lastname,
    "email" => $email
]);

updateEntity("doctor", $id, [
    "photo" => $photo,
    "university" => $university,
    "phone" => $phone
]);

//Supprimer l'ensemble des spécialités du docteur
deleteDoctorSpecialties($id);
foreach ($specialties as $specialty) {
    insertEntity("doctor_has_specialty", [
        "doctor_id" => $id,
        "specialty_id" => $specialty
    ]);
}

header("Location: index.php");