<?php
// Inclusion de l'en-tête de la page
require __DIR__ . ("/utilities/header.php");

// Inclusion du fichier de fonction pour la gestion des potions
require __DIR__ . ('/function/potion_fn.php');

// Connexion à la base de données et récupération des 4 meilleures potions

$potions = potionTop4($db);
$doctors = findPictureDoctor($db);
?>

<section>
    <div class="d-flex align-items-center flex-column">
        <div class="mt-5 bg-op text-white w-50 p-3 d-flex flex-column align-items-center">
            <!-- Titre et contenu principal de la section -->
            <h2 class="text-center ff-tw neonText">Notre Site</h2>
            <p class="text-center">
                Bienvenue chez TossACoinPharmacy, votre partenaire de confiance pour des solutions de santé
                accessibles et de qualité. Notre équipe dévouée travaille sans relâche pour vous offrir les meilleurs
                services dans le domaine de la vente de potions. Faisons connaissance avec ceux qui contribuent chaque
                jour à la réussite de notre mission.
            </p>
            <!-- Bouton de lien vers la page des produits -->
            <a href="produits.php" class="btn btn-red w-50 text-light" role="button">Nos produits</a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h3 class="neonText text-white ff-tw text-center mt-5 mb-2">Nos medecins</h3>
        <div class="row justify-content-center">
            <?php foreach ($doctors as $doctor) : ?>
                <div class="col-md-6">
                    <div class="card mb-3 bg-op bg-opacity-50 text-white custom-card" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= $doctor['pathImg'] ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title neonText ff-tw">
                                        <?= $doctor['doctor_name'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <?= $doctor['bio'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section>
    <div class="d-flex my-50 align-items-center flex-column justify-content-center">
        <div class="d-flex justify-content-center text-light py-200 ff-tw neonText ">
            <!-- Titre des produits phares -->
            <h1>Nos produit phares</h1>
        </div>
        <div class="containers">
            <?php foreach ($potions as $potion) : ?>
                <!-- Affichage des informations pour chaque potion -->
                <div class="img-box position-relative" style="--img: url(<?= $potion['pathImg'] ?>);">
                    <div class="desc bg-secondary position-absolute bottom-0 h-35 start-50 translate-middle rounded-2 w-75 bg-opacity-50 text-center text-light">
                        <!-- Titre de la potion -->
                        <h2>
                            <?= $potion['title'] ?>
                        </h2>
                        <!-- Note de la potion avec des étoiles -->
                        <div>
                            Note :
                            <?= $potion['rating'] . '/ 10 &nbsp;'; ?>
                            <?= getStar($potion['rating']); ?>
                        </div>
                        <!-- Prix de la potion -->
                        <p>
                            <?= $potion['price'] ?> <i class="fa-solid fa-crown"></i>
                        </p>
                        <!-- Bouton de lien pour découvrir la potion -->
                        <a href="produits.php" class="btn text-light btn-red w-50 mb-2" role="button">Découvrir</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- Inclusion du pied de page -->
<?php require __DIR__ . ("/utilities/footer.php"); ?>