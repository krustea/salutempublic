<?php
require_once __DIR__ . "/../../../model/database.php";

$label = $_POST["label"];

insertSpecialty($label);

header("Location: index.php");