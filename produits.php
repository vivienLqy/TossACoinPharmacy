<?php
    require_once __DIR__ . ('/config/config.php');
    require_once __DIR__ . ('/function/database.fn.php');
    $db = getPDOlink($config);
    require_once __DIR__ . ('/function/potion_fn.php');
    require_once __DIR__ . ('/utilities/header.php');

    $potions = findAllPotions($db);
?>
<div class="container pt-5">
    <div class="row justify-content-center">
        <?php foreach ($potions as $potion): ?>
            <div class="card  mx-3 px-0 col-lg-3 col-md-6 mb-3 bg-secondary bg-opacity-50 text-white " style="width: 18rem;">
                <img src="<?= $potion['pathImg']; ?>" class="card-img-top" alt="..." width="100%">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $potion['title'] ?>
                    </h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?= $potion['rating'] ?>/10
                    </li>
                    <li class="list-group-item">
                        <?= $potion['price'] ?>€
                    </li>
                </ul>
                <div class="card-body d-flex justify-content-between">
                    <a href="#" class="btn btn-success" data-bs-toggle="button">Ajouter au panier</a>
                    <a href="details.php?id=<?= $potion['id'] ?>" class="card-link">Details</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div> 
</div> 
</main> 
</body>
</html>
