<?php
require_once __DIR__ . "/../../../model/database.php";

$id =$_POST["id"];
deleteEntity("specialty",$id);

header("Location: index.php");