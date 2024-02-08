<?php
// Inclusion de l'en-tête de la page
require __DIR__ . ("/utilities/header.php"); 

// Inclusion du fichier de fonction pour la gestion des potions
require __DIR__ . ('/function/potion_fn.php'); 

// Connexion à la base de données et récupération des 4 meilleures potions
$db = getPDOlink($config);
$potions = potionTop4($db);
?>
<div class="container d-flex justify-content-center">
    <div class="mt-5 bg-op text-white w-50 p-3 d-flex flex-column align-items-center">
        <!-- Titre et contenu principal de la section -->
        <h2 class="text-center ff-tw">Notre Site</h2>
        <p class="text-center">
            Bienvenue chez BlueChemistry, votre partenaire de confiance pour des solutions de santé
            accessibles et de qualité. Notre équipe dévouée travaille sans relâche pour vous offrir les meilleurs
            services dans le domaine de la vente de médicaments. Faisons connaissance avec ceux qui contribuent chaque
            jour à la réussite de notre mission.
        </p>
        <!-- Bouton de lien vers la page des produits -->
        <a href="produits.php" class="btn btn-success w-50" role="button">Nos produits</a>
    </div>
</div>
<div class="d-flex my-50 align-items-center flex-column justify-content-center">
    <div class="d-flex justify-content-center text-light py-200 ff-tw">
        <!-- Titre des produits phares -->
        <h1>Nos produit phares</h1>
    </div>
    <div class="containers">
        <?php foreach ($potions as $potion): ?>
            <!-- Affichage des informations pour chaque potion -->
            <div class="img-box position-relative" style="--img: url(<?= $potion['pathImg'] ?>);">
                <div class="desc bg-secondary position-absolute bottom-0 h-35 start-50 translate-middle rounded-2 w-75 bg-opacity-50 text-center text-light">
                    <!-- Titre de la potion -->
                    <h2><?= $potion['title'] ?></h2>
                    <!-- Note de la potion avec des étoiles -->
                    <div>
                        Note : <?= $potion['rating'] . '/ 10 &nbsp;'; ?>
                        <?= getStar($potion['rating']); ?>
                    </div>
                    <!-- Prix de la potion -->
                    <p><?= $potion['price'] ?> €</p>
                    <!-- Bouton de lien pour découvrir la potion -->
                    <a href="produits.php" class="btn btn-success w-50 mb-2" role="button">Découvrir</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</main>
<!-- Inclusion du pied de page -->
<?php require __DIR__ . ("/utilities/footer.php"); ?>
</body>
</html>
