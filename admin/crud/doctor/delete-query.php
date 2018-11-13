<?php
require_once __DIR__ . "/../../../config/parameters.php";
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

$id = $_POST["id"];

$doctor = getAllEntities("doctor", $id);
unlink(UPLOAD_DIR . $doctor["photo"]);

deleteEntity("user", $id);

header("Location: index.php");