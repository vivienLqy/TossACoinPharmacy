<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5 border p-4 bg-secondary-subtle rounded-5 text-center"> 
            <img class="mx-auto d-block w-75 rounded-5" src="<?= $picture['pathImg'] ?>" alt="">
            <h2><?= $potion['title'] ?></h2>
            <p>Le créateur est : <?= $potion['doctor_name'] ?></p>
            <div>Note : <?= $potion['rating'] . '/ 10 &nbsp;'; ?>
                        <?= getStar($potion['rating']); ?> 
            </div>
            <p>Prix : <?= $potion['price'] ?>€</p>
            <p>Durée : <?= $potion['duration'] ?></p>
            <p>Commentaires : <?= $potion['comment'] ?></p>
        </div>
    </div>
</div>
