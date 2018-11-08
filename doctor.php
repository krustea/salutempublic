<?php
require_once "config/parameters.php";
require_once "model/database.php";
$id =$_GET["id"];
$doctor = getAllDoctors($id);


?>
<?php require_once "layout/header.php"; ?>

<main>
    <div class="container">
        <h1><?php echo $doctor["fullname"]; ?></h1>
        <img src="<?= UPLOAD_DIR; ?><?php echo $doctor["photo"] ?>" alt="<?php echo $doctor["fullname"]; ?>">
    </div>
</main>



<?php require_once "layout/footer.php"?>




