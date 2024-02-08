<?php
require_once dirname(__DIR__) . ('/config/config.php');
require_once dirname(__DIR__) . ('/function/database.fn.php');
$db = getPDOlink($config);
require_once dirname(__DIR__) . ('/config/headerConfig.php');
require_once dirname(__DIR__) . ('/function/header.fn.php');
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-op w-100 h-50px p-0">
      <div class="container-fluid w-100 h-100">
        <a class="navbar-brand text-white ff-tw" href="index.php"> <img class="logo" src="assets/img/logo.png"
            alt="">TossACoinPharmacy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end w-100 " id="navbarNavAltMarkup">
          <div class="navbar-nav d-flex justify-content-around w-50 ">
            <li class="nav-item">
              <a class="nav-link text-light ff-tw
                        <?= isActive($index_page, $current_url); ?>
                        <?= isActive('/index.php', $current_url); ?>
                        " aria-current="page" href="<?= $index_page; ?>">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light
                        <?= isActive($produit_page, $current_url); ?>
                        " href="<?= $produit_page; ?>">Nos produit</a>
            </li>
          </div>
        </div>
      </div>
    </nav>
  </header>
    <div class="background">
  <main>
    