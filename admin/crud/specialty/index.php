<?php require_once __DIR__ . "/../../../model/database.php";
$specialties= getAllEntities("specialty");
//var_dump($specialties); die;
require_once __DIR__ . "/../../layout/header.php";?>
<h1> gestion des specialités</h1>
<a href="create_form.php" class="btn btn-primary">
    <i class="fa fa-plus"></i>
    Ajouter
</a>

<hr>

<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Libelle</th>
        <th class="actions">Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php foreach ($specialties as $specialty) :  ;?>
        <td><?php echo $specialty["label"] ?></td>
        <td class="actions">
            <a href="update-form.php" class="btn btn-warning"><i class="fa fa-edit"></i>Modifier</a>
            <form action="delete-query.php" method="post">
                <input type="hidden" name="id" value="<?php echo $specialty["id"];?>">
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php require_once  __DIR__ . "/../../layout/footer.php";?>
