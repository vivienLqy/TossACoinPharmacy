<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5 border p-4 rounded-5 text-center bg-op text-white">

            <img class="mx-auto d-block w-75 rounded-5 mt-5" src="<?= $potion['pathImg'] ?>" alt="">
            <h2 class="neonText"><?= $potion['title'] ?></h2>
            <p>Le créateur est : <?= $potion['doctor_name'] ?></p>
            <div>Note : <?= $potion['rating'] . '/ 10 &nbsp;'; Potion::getStar($potion['rating']); ?></div>
            <p class="mt-3">Prix : <?= $potion['price'] ?> <i class="fa-solid fa-crown"></i></p>
            <p>Durée : <?= $potion['duration'] ?>s</p>
            <p>Ingredient : <?= $potion['ingredient'] ?>
            <p>Commentaires : <?= $potion['comment'] ?></p>
            <div class="card-body d-flex justify-content-center">
                <a href="#" class="btn btn-red text-light" data-bs-toggle="button">Ajouter au panier</a>
            </div>
        </div>
    </div>
</div>