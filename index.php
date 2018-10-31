<?php
define("UPLOAD_DIR", "uploads/");

$docteurs = [];

$docteurs[] = [
    "firstname" => "Tony",
    "lastname" => "Starck",
    "photo" => "doctor-1.jpg",
    "skills" => ["Medecin", "Megalomane"],
    "university" => "Digital Campus",
    "phone_number" => "0203040506"
];
$docteurs[] = [
    "firstname" => "Peter",
    "lastname" => "Parker",
    "photo" => "doctor-2.jpg",
    "skills" => ["Ostéopathe", "Arachnophile"],
    "university" => "Digital Campus",
    "phone_number" => "0203040506"
];
$docteurs[] = [
    "firstname" => "Jessica",
    "lastname" => "Jones",
    "photo" => "doctor-3.jpg",
    "skills" => ["Addictologue", "Homéopathe"],
    "university" => "Digital Campus",
    "phone_number" => "0203040506"
];


$firstname = "jack";
$lastname = "smith";
$photo = "doctor-1.jpg";
$skill1 = "Homéopathe";
$skill2 = "Ostéopathe";
$university = "Digital Campus";

$phone_number = "0203040506";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Salutem - Maison médicale</title>
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <div class="header-top">
        <div class="container">
            <div class="social-networks">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
            <div class="contact-infos">
                <ul>
                    <li>
                        <i class="fa fa-phone"></i>
                        <a href="tel:0243785462">0243785462</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:contact@salutem.fr">contact@salutem.fr</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="logo">
                <i class="fa fa-heartbeat"></i>
                Salutem
            </div>
            <div class="status">
                Votre centre est actuellement <span class="open">ouvert</span>
            </div>
        </div>
    </div>
    <div class="header-menu">
        <div class="container">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">La maison médicale</a></li>
                <li><a href="#">Nos docteurs</a></li>
                <li><a href="#">Nous contacter</a></li>
            </ul>
        </div>
    </div>
</header>

<main>
    <section class="home-top">
        <article class="container">
            <h1>Salutem</h1>
            <h2>Maison de santé</h2>
            <a href="#appointment" class="btn btn-dark">Prendre rendez-vous</a>
        </article>
    </section>
    <section class="home-boxes">
        <div class="container">
            <article>
                <h3>Centre médicale</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, debitis delectus dolorem, est
                    eveniet ex explicabo id iure iusto magni maiores nam non numquam odio officiis quaerat reiciendis
                    repellat totam.</p>
                <a href="#" class="btn btn-light">Lire la suite</a>
            </article>
            <article>
                <h3>Horaires d'ouverture</h3>
                <table class="opening-hours">
                    <tr>
                        <td>Lundi</td>
                        <td class="hours">9h - 17h</td>
                    </tr>
                    <tr class="today">
                        <td>Mardi</td>
                        <td class="hours">9h - 17h</td>
                    </tr>
                    <tr>
                        <td>Mercredi</td>
                        <td class="hours">9h - 17h</td>
                    </tr>
                    <tr>
                        <td>Jeudi</td>
                        <td class="hours">9h - 17h</td>
                    </tr>
                    <tr>
                        <td>Vendredi</td>
                        <td class="hours">9h - 17h</td>
                    </tr>
                    <tr>
                        <td>Samedi</td>
                        <td class="hours">9h - 12h</td>
                    </tr>
                    <tr>
                        <td>Dimanche</td>
                        <td class="hours">Fermé</td>
                    </tr>
                </table>
            </article>
            <article>
                <h3>Numéro d'urgence</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci assumenda aut delectus dolores
                    illo laboriosam provident reiciendis tempore vel?</p>
                <p>
                    <a href="tel:0243785443" class="phone-number">0243785443</a>
                </p>
                <a href="#" class="btn btn-light">Lire la suite</a>
            </article>
        </div>
    </section>

    <section class="doctors">
        <div class="container">
            <article>
                <form class="form-appointment">
                    <h3>Prendre rendez-vous</h3>
                    <input type="text" required placeholder="Nom">
                    <input type="text" required placeholder="Prénom">
                    <input type="email" placeholder="Email">
                    <input type="tel" required placeholder="Téléphone">
                    <input type="date" required placeholder="Date">
                    <input type="time" step="900" required placeholder="Heure">
                    <select required>
                        <option disabled selected>Choisissez une spécialité</option>
                        <option>Médecin Généraliste</option>
                        <option>Dentiste</option>
                        <option>Infirmier</option>
                        <option>Homéopathe</option>
                        <option>Osthéopathe</option>
                    </select>
                    <textarea placeholder="Votre message"></textarea>
                    <button type="submit" class="btn btn-light">
                        <i class="fa fa-check"></i>
                        Envoyer
                    </button>
                </form>
            </article>
            <?php foreach ($docteurs as $docteur) : ?>
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
                        <a href="#" class="btn btn-dark">
                            <i class="fa fa-eye"></i>
                            Plus d'informations
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

</main>

<footer class="main-footer">
    <section class="container">
        <article>
            <div class="logo">
                <i class="fa fa-heartbeat"></i>
                Salutem
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus debitis, dolorem doloremque iste
                molestiae nulla officiis provident quas quos, rerum sapiente sed sint voluptas? Accusantium asperiores
                dolor dolores in libero?</p>
        </article>
        <article>
            <h3>Nous contacter</h3>
            <ul class="contact-infos">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:contact@salutem.fr">contact@salutem.fr</a>
                </li>
                <li>
                    <i class="fa fa-phone"></i>
                    <a href="tel:0243785462">0243785462</a>
                </li>
                <li>
                    <i class="fa fa-ambulance"></i>
                    <a href="tel:0243785443">0243785443</a>
                </li>
            </ul>
        </article>
        <article>
            <h3>Horaires d'ouverture</h3>
            <table class="opening-hours">
                <tr>
                    <td>Lundi</td>
                    <td class="hours">9h - 17h</td>
                </tr>
                <tr class="today">
                    <td>Mardi</td>
                    <td class="hours">9h - 17h</td>
                </tr>
                <tr>
                    <td>Mercredi</td>
                    <td class="hours">9h - 17h</td>
                </tr>
                <tr>
                    <td>Jeudi</td>
                    <td class="hours">9h - 17h</td>
                </tr>
                <tr>
                    <td>Vendredi</td>
                    <td class="hours">9h - 17h</td>
                </tr>
                <tr>
                    <td>Samedi</td>
                    <td class="hours">9h - 12h</td>
                </tr>
                <tr>
                    <td>Dimanche</td>
                    <td class="hours">Fermé</td>
                </tr>
            </table>
        </article>
    </section>
</footer>

</body>
</html>