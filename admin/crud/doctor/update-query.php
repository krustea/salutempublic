<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

$id = $_POST["id"];
$label = $_POST["label"];

updateEntity("specialty",$id,[
    "label"=> $label
]);

header("Location: index.php");