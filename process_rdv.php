<?php
require_once "model/database.php";

//var_dump($_POST);
$patient_id = 4;
$date = $_POST["date"];
$message =$_POST["message"];
$specialty_id = $_POST["specialty"];

insertAppointment($date, $message, $patient_id, $specialty_id);
header("Location: index.php");