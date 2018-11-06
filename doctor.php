<?php require_once "config/parameters.php";?>
<?php
$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
$photo =$_GET["photo"];

?>
<?php require_once "layout/header.php"; ?>

<main>
    <div class="container">
        <h1><?php echo $firstname . " " . $lastname; ?></h1>
        <img src="<?= UPLOAD_DIR; ?><?php echo $photo ?>" alt="Tony Starck">

    </div>
</main>



<?php require_once "layout/footer.php"?>




