<article class="doctor-thumbnail">
    <img src="<?= UPLOAD_DIR . $docteur["photo"]; ?>"
         alt="<?= $docteur["firstname"] . " " . $docteur["lastname"]; ?>">
    <div class="doctor-details">
        <h4><?= $docteur["firstname"] . " " . $docteur["lastname"]; ?></h4>

        <ul class="doctor-skills">
            <?php foreach ($docteur["skills"] as $skill) : ?>
                <li><?= $skill; ?></li>
            <?php endforeach; ?>
        </ul>
        <?php if ($docteur["university"]) :  ?>
            Université : <?php echo $docteur["university"] ?>
            <br>
        <?php endif; ?>
        <?php if ($docteur["phone_number"]) : ?>
            <a href="tel:<?= $docteur["phone_number"]; ?>">
                <i class="fa fa-phone"></i>
                <?php echo $docteur["phone_number"]; ?></a>
        <?php endif; ?>
        <a href="<?= SITE_URL;?>doctor.php" class="btn btn-dark">
            <i class="fa fa-eye"></i>
            Plus d'informations
        </a>
    </div>
</article>