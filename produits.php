<?php

require_once __DIR__ . '/utilities/header.php';
require_once __DIR__ . '/models/Potion.php';


$potionsInstance = new Potion;
$potions = $potionsInstance->getAllPotions();


$orderBy = isset($_POST['mySelect']) ? ($_POST['mySelect'] == 'ASC' ? 'ASC' : 'DESC') : '';

$potions = $orderBy ? $potionsInstance->getBestPotions($orderBy) : $potionsInstance->getAllPotions();


?>



<form action="" method="post" class="row align-items-center justify-content-end p-3 m-3">
    <div class="col-4">
        <select class="form-select form-select-sm  " name="mySelect" aria-label="Default select example">
            <option selected>Trier par prix</option>
            <option value="ASC">moins cher</option>
            <option value="DESC">plus cher</option>
        </select>
    </div>
    <div class="col-4">
        <input type="submit" class="btn btn-red text-white">
    </div>
</form>
<div class="container pt-5">
    <div class="row justify-content-center ">
        <?php foreach ($potions as $potion) : ?>
            <div class="card  mx-3 px-0 col-lg-3 col-md-6 mb-3 bg-secondary bg-opacity-50 text-white " style="width: 18rem;">
                <img src="<?= $potion['pathImg']; ?>" class="card-img-top" alt="..." width="100%">
                <div class="card-body">
                    <h5 class="card-title neonText">
                        <?= $potion['title'] ?>
                    </h5>
                </div>
                <ul class="list-group list-group-flush text-light ">
                    <li class="list-group-item text-light">
                        <?= $potion['rating'] ?>/10
                    </li>
                    <li class="list-group-item text-light">
                        <?= $potion['price'] ?> <i class="fa-solid fa-crown"></i>
                    </li>
                </ul>
                <div class="card-body d-flex justify-content-between">
                    <a href="#" class="btn btn-red text-light" data-bs-toggle="button">Ajouter au panier</a>
                    <a href="details.php?id=<?= $potion['id'] ?>" class="card-link link-light link-offset-1 link-opacity-50-hover">Details</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require __DIR__ . ("/utilities/footer.php"); ?>