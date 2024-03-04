<div class="container py-5">
    <!-- Conteneur principal -->
    <div class="row justify-content-center">
        <!-- Ligne centrée -->
        <div class="col-md-5 border p-4 rounded-5 text-center bg-op text-white">
            <!-- Colonne de taille moyenne -->
            <img class="mx-auto d-block w-75 rounded-5 mt-5" src="<?= $potion->getPicture()->getPathImg() ?>" alt="">
            <!-- Image -->
            <h2 class="neonText"><?= $potion->getTitle() ?></h2>
            <!-- Titre de la potion -->
            <p>Le créateur est : <?= $potion->getDoctor()->getName() ?></p>
            <!-- Nom du créateur -->
            <div>Note : <?= $potion->getRating() . '/ 10 &nbsp;'; ?>
                <?= $potion->getStar($potion->getRating()); ?>
            </div>
            <!-- Note de la potion -->
            <p class="mt-3">Prix : <?= $potion->getPrice() ?> <i class="fa-solid fa-crown"></i></p>
            <!-- Prix de la potion -->
            <p>Durée : <?= $potion->getDuration() ?>s</p>
            <!-- Ingredient de la potion -->
            <p>Ingredients :
                <?php foreach ($potion->getIngredients() as $index => $ingredient) {
                    if ($index + 1 === count($potion->getIngredients())) {
                        echo $ingredient->getName() . ".";
                    } else {
                        echo $ingredient->getName() . ", ";
                    }
                }
                ?>
                <!-- Durée de la potion -->
            <p>Commentaire : <?= $potion->getComment() ?></p>
            <!-- Commentaires sur la potion -->
            <div class="card-body d-flex justify-content-center">
                <a href="#" class="btn btn-red text-light" data-bs-toggle="button">Ajouter au panier</a>
            </div>
            <!-- Bouton pour ajouter au panier -->
        </div>
    </div>
</div>