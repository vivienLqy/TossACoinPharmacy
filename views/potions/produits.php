<?php

require_once ROOT . '/utilities/header.php';

// $potionsInstance = new Potion;
// $potions = $potionsInstance->getAllPotions();

// if (isset($_POST['mySelect'])) {
//   $orderBy = ($_POST['mySelect'] == 'ASC') ? 'ASC' : 'DESC';
//   $potions = $potionsInstance->getBestPotions($orderBy);
// }

?>

<form action="" method="post" class="row align-items-center mt-0 justify-content-end p-3 m-3">
  <div class="col-4">
    <select class="form-select form-select-sm" name="mySelect" aria-label="Default select example">
      <option selected disabled>Trier par prix</option>
      <option value="ASC">Moins cher</option>
      <option value="DESC">Plus cher</option>
    </select>
  </div>
  <div class="col-4">
    <input type="submit" class="btn btn-red text-white" value="Trier">
  </div>
</form>

<div class="container pt-5">
  <div class="row justify-content-center">
    <?php foreach ($potions as $potion) : ?>
      <div class="card mx-3 px-0 col-lg-3 col-md-6 mb-3 bg-secondary bg-opacity-50 text-white" style="width: 18rem;">
        <img src="<?= $potion->getPicture()->getPathImg(); ?>" class="card-img-top" alt="..." width="100%">
        <div class="card-body">
          <h5 class="card-title neonText">
            <?= $potion->getTitle() ?>
          </h5>
        </div>
        <ul class="list-group list-group-flush text-light">
          <li class="list-group-item text-light">
            <?= $potion->getRating() ?>/10
          </li>
          <li class="list-group-item text-light">
            <?= $potion->getPrice() ?> <i class="fa-solid fa-crown"></i>
          </li>
        </ul>
        <div class="card-body d-flex justify-content-between">
          <a href="#" class="btn btn-red text-light" data-bs-toggle="button">Ajouter au panier</a>
          <a href="/produits/<?= $potion->getId() ?>" class="card-link link-light link-offset-1 link-opacity-50-hover">Details</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php require ROOT . ("/utilities/footer.php"); ?>