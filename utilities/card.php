<div class="container py-5">
    <!-- Conteneur principal -->
    <div class="row justify-content-center">
        <!-- Ligne centrée -->
        <div class="col-md-5 border p-4 rounded-5 text-center bg-op text-white"> 
            <!-- Colonne de taille moyenne -->
            <img class="mx-auto d-block w-75 rounded-5" src="<?= $picture['pathImg'] ?>" alt="">
            <!-- Image -->
            <h2><?= $potion['title'] ?></h2>
            <!-- Titre de la potion -->
            <p>Le créateur est : <?= $potion['doctor_name'] ?></p>
            <!-- Nom du créateur -->
            <div>Note : <?= $potion['rating'] . '/ 10 &nbsp;'; ?>
                        <?= getStar($potion['rating']); ?> 
            </div>
            <!-- Note de la potion -->
            <p>Prix : <?= $potion['price'] ?>€</p>
            <!-- Prix de la potion -->
            <p>Durée : <?= $potion['duration'] ?></p>
            <!-- Durée de la potion -->
            <p>Commentaires : <?= $potion['comment'] ?></p>
            <!-- Commentaires sur la potion -->
            <div class="card-body d-flex justify-content-center">
                <a href="#" class="btn btn-success" data-bs-toggle="button">Ajouter au panier</a>
            </div>
            <!-- Bouton pour ajouter au panier -->
        </div>
    </div>
</div>
