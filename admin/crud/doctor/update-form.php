<?php
require_once __DIR__ . "/../../../model/database.php";
$id =$_GET["id"];
$specialty = getAllEntities("specialty",$id);
require_once __DIR__ . "/../../layout/header.php";?>

<h1>Modification d'une specialité</h1>
<form action="update-query.php" method="post">
    <div class="form-group">
        <label>Libellé</label>
        <input type="text" class="form-control" name="label" value="<?php echo $specialty["label"];?>" placeholder="Libellé">
    </div>
    <input type="hidden" name="id" value="<?php echo $id ; ?>">
    <button type="submit" class="btn-success">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once  __DIR__ . "/../../layout/footer.php";?>
