<?php
require_once __DIR__ . "/../../../model/database.php";
require_once __DIR__ . "/../../../config/parameters.php";
$doctors= getAllDoctors();
//var_dump($doctors); die;
require_once __DIR__ . "/../../layout/header.php";?>
<h1> gestion des docteurs</h1>
<a href="create_form.php" class="btn btn-primary">
    <i class="fa fa-plus"></i>
    Ajouter
</a>

<hr>

<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Photo</th>
        <th class="actions">Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php foreach ($doctors as $doctor) :  ;?>
        <td><?php echo $doctor["firstname"]; ?></td>
        <td><?php echo $doctor["lastname"]; ?></td>
        <td>
            <img class="img-thumbnail" src="<?php echo UPLOAD_URL . $doctor["photo"]?>" alt="">
        </td>

        <td class="actions">
            <a href="update-form.php?id=<?php echo $doctor["id"];?>" class="btn btn-warning">
                <i class="fa fa-edit"></i>
                Modifier
            </a>
            <form action="delete-query.php" method="post">
                <input type="hidden" name="id" value="<?php echo $doctor["id"];?>">
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php require_once  __DIR__ . "/../../layout/footer.php";?>
