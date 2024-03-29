<div class="container py-5">
    <!-- Conteneur principal -->
    <div class="row justify-content-center">
        <!-- Ligne centrée -->
        <div class="col-md-5 border p-4 rounded-5 text-center bg-op text-white"> 
            <!-- Colonne de taille moyenne -->
            <img class="mx-auto d-block w-75 rounded-5 mt-5" src="<?= $picture['pathImg'] ?>" alt="">
            <!-- Image -->
            <h2 class="neonText"><?= $potion['title'] ?></h2>
            <!-- Titre de la potion -->
            <p>Le créateur est : <?= $potion['doctor_name'] ?></p>
            <!-- Nom du créateur -->
            <div>Note : <?= $potion['rating'] . '/ 10 &nbsp;'; ?>
                        <?= getStar($potion['rating']); ?> 
            </div>
            <!-- Note de la potion -->
            <p class="mt-3">Prix : <?= $potion['price'] ?> <i class="fa-solid fa-crown"></i></p>
            <!-- Prix de la potion -->
            <p>Durée : <?= $potion['duration'] ?>s</p>
            <!-- Ingredient de la potion -->
            <p>Ingredient : <?= $potion['ingredient'] ?>
            <!-- Durée de la potion -->
            <p>Commentaires : <?= $potion['comment'] ?></p>
            <!-- Commentaires sur la potion -->
            <div class="card-body d-flex justify-content-center">
                <a href="#" class="btn btn-red text-light" data-bs-toggle="button">Ajouter au panier</a>
            </div>
            <!-- Bouton pour ajouter au panier -->
        </div>
    </div>
</div>
