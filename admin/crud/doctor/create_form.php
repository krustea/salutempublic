<?php require_once __DIR__ . "/../../layout/header.php";
$specialties=getAllEntities("specialty")
?>

    <h1>Création d'un docteur</h1>

    <form action="create-query.php" method="post" enctype="multipart/form-data">
        <?php require_once __DIR__ . "/../user/form-fields.php";?>

        <div class="form-group">
            <label>Photo</label>
            <input type="file" class="form-control" name="photo" accept="image/*>
        </div>

        <div class="form-group">
            <label>Université</label>
            <input type="text" class="form-control" name="university" placeholder="Université">
        </div>

        <div class="form-group">
            <label>Téléphone</label>
            <input type="text" class="form-control" name="phone" placeholder="Téléphone">
        </div>

        <div class="form-group">
            <label>Spécialités</label>
            <select name="specialties[]" multiple class="form-control">
                    <?php foreach ($specialties as $specialty) : ?>
                        <option value="<?php echo $specialty["id"]; ?>"><?php echo $specialty["label"]; ?></option>
                    <?php endforeach; ?>
                </select>

            </select>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="fa fa-save"></i>
            Enregistrer
        </button>
    </form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>