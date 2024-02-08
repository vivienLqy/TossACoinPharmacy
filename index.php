<?php
require __DIR__ . ("/utilities/header.php");
require __DIR__ . ('/function/potion_fn.php');
$db = getPDOlink($config);
$potions = potionTop4($db);
?>
<div class="container d-flex justify-content-center">
    <div class="mt-5 bg-op text-white w-50 p-3 d-flex flex-column  align-items-center">
        <h2 class="text-center">Notre Site</h2>
        <p class="text-center">Bienvenue chez BlueChemistry, votre partenaire de confiance pour des solutions de santé
            accessibles et de qualité. Notre équipe dévouée travaille sans relâche pour vous offrir les meilleurs
            services dans le domaine de la vente de médicaments. Faisons connaissance avec ceux qui contribuent chaque
            jour à la réussite de notre mission.</p>
        <a href="produits.php" class="btn btn-success w-50 " role="button">Nos produits</a>
    </div>
</div>
<div class="top4 d-flex align-items-center flex-column justify-content-center">
    <div class="d-flex justify-content-center text-light py-200">
        <h1>Nos produit phares</h1>
    </div>
    <div class="containers">
        <?php foreach ($potions as $potion): ?>
            <div class="img-box position-relative" style="--img: url(<?= $potion['pathImg'] ?>);">
                <div
                    class="desc bg-secondary position-absolute h-35 bottom-0 start-50 translate-middle rounded-2 w-75 bg-opacity-50 text-center text-light">
                    <h2>
                        <?= $potion['title'] ?>
                    </h2>
                    <div>Note :
                        <?= $potion['rating'] . '/ 10 &nbsp;'; ?>
                        <?= getStar($potion['rating']); ?>
                    </div>
                    <p>
                        <?= $potion['price'] ?> €
                    </p>
                    <a href="produits.php" class="btn btn-success w-50 mb-2" role="button">Découvrir</a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>
</div>
</main>
</body>

</html>