<?php $specialities = getAllSpecialtiesByDoctor($docteur["id"]);?>

<article class="doctor-thumbnail">
    <img src="<?= UPLOAD_URL . $docteur["photo"]; ?>"
         alt="<?= $docteur["fullname"]; ?>">
    <div class="doctor-details">
        <h4><?= $docteur["fullname"]; ?></h4>

        <ul class="doctor-skills">
            <?php foreach ($specialities as $speciality) : ?>
                <li><?= $speciality["label"]; ?></li>
            <?php endforeach; ?>
        </ul>
        <?php if ($docteur["university"]) :  ?>
            Université : <?php echo $docteur["university"] ?>
            <br>
        <?php endif; ?>
        <?php if ($docteur["phone"]) : ?>
            <a href="tel:<?= $docteur["phone"]; ?>">
                <i class="fa fa-phone"></i>
                <?php echo $docteur["phone"]; ?></a>
        <?php endif; ?>
        <a  href="<?= SITE_URL;?>doctor.php?id=<?= $docteur["id"] ?>" class="btn btn-dark">
            <i class="fa fa-eye"></i>
            Plus d'informations
        </a>
    </div>
</article>