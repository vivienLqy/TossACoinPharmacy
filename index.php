<?php
// Inclusion de l'en-tête de la page
require __DIR__ . ("/utilities/header.php");

// Inclusion du fichier de fonction pour la gestion des potions
require __DIR__ . ('/function/potion_fn.php');

// Connexion à la base de données et récupération des 4 meilleures potions
$db = getPDOlink($config);
$potions = potionTop4($db);
?>
<section>
    <div class="d-flex justify-content-center">
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
    <h3 class="text-center ff-tw neonText mb-0 mt-5"> Nos medecin</h1>
    <div class="containerse">
        <input type="radio" name="nav" id="first" checked />
        <input type="radio" name="nav" id="second" />
        <input type="radio" name="nav" id="third" />

        <label for="first" class="first"></label>
        <label for="second" class="second"></label>
        <label for="third" class="third"></label>

        <div class="one slide">
            <blockquote>
                <span class="leftq quotes">&ldquo;</span> Elle fait de la magie tah les fou<span
                    class="rightq quotes">&bdquo; </span>
            </blockquote>
            <img src="Ciri.jpg" width="170" height="170" />
            <h2 class="h2card">Steve Kruger</h2>
            <h6 class="h6card">Sorcierre</h6>
        </div>

        <div class="two slide">
            <blockquote>
                <span class="leftq quotes">&ldquo;</span> He promptly completed the task at hand and communicates really
                well till the project reaches the finishing line. I recommend him to anyone who wants their work done
                professionally. The project ... <a href="#"> read more</a><span class="rightq quotes">&bdquo; </span>
            </blockquote>
            <img src="http://behance.vo.llnwd.net/profiles14/297668/projects/3041537/f4d6311b432c4804f1c8045459df9647.jpg"
                width="170" height="130" />
            <h2 class="h2card">John Doe</h2>
            <h6 class="h6card">Developer Relations at Woof Studios</h6>
        </div>

        <div class="three slide">
            <blockquote>
                <span class="quotes leftq"> &ldquo;</span> He promptly completed the task at hand and communicates
                really well till the project reaches the finishing line. I was pleased with his creative design and will
                definitely be hiring him again. <span class="rightq quotes">&bdquo; </span>
            </blockquote>
            <img src="http://media.digitalcameraworld.com/files/2012/10/People_photography_composition_tips_PHG18.chap4_.n_p38_39.jpg"
                width="170" height="130" />
            <h2 class="h2card">Steve Stevenson</h2>
            <h6 class="h6card">CEO Woof Web Design Studios</h6>
        </div>
</section>
<section>
    <div class="d-flex my-50 align-items-center flex-column justify-content-center">
        <div class="d-flex justify-content-center text-light py-200 ff-tw neonText ">
            <!-- Titre des produits phares -->
            <h1>Nos produit phares</h1>
        </div>
        <div class="containers">
            <?php foreach ($potions as $potion): ?>
                <!-- Affichage des informations pour chaque potion -->
                <div class="img-box position-relative" style="--img: url(<?= $potion['pathImg'] ?>);">
                    <div
                        class="desc bg-secondary position-absolute bottom-0 h-35 start-50 translate-middle rounded-2 w-75 bg-opacity-50 text-center text-light">
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
</main>
<!-- Inclusion du pied de page -->
<?php require __DIR__ . ("/utilities/footer.php"); ?>
</body>

</html>