<?php

require_once dirname(__DIR__) . ('/app/Model.php');
$database = new Model();

require_once dirname(__DIR__) . ('/config/headerConfig.php');
require_once dirname(__DIR__) . ('/function/header.fn.php');
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Liens vers les bibliothèques Bootstrap et Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Script Bootstrap -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Feuille de style personnalisée -->
    <link rel="stylesheet" href="/assets/css/styles.css">
    <!-- Liens vers les polices Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <title>TossACoinPharmacy</title>
</head>

<body class="d-flex flex-column vh-100"> 
    <header>

        <nav class="navbar navbar-expand-lg bg-op navbar-dark"> 
            <div class="container">
                <a class="navbar-brand ff-tw neonText" href="index.php">
                    <img class="logo" src="/assets/img/logo.png" alt="">TossACoinPharmacy
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">

                    <div class="navbar-nav">
                        <a class="nav-link text-light ff-tw neonText <?= isActive($index_page, $current_url); ?> <?= isActive('/index.php', $current_url); ?>" aria-current="page" href="<?= $index_page; ?>">Accueil</a>
                        <a class="nav-link text-light ff-tw neonText <?= isActive($produit_page, $current_url); ?>" href="<?= $produit_page; ?>">Nos produits</a>
                        <a class="nav-link text-light ff-tw neonText <?= isActive($contact_page, $current_url); ?>" href="<?= $contact_page; ?>">Contact</a>
                        <a href="panier.php" class="btn btn-outline-light ms-4">
                            <i class="bi-cart-fill me-1"></i>
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </a>
                    </div>

                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow-1 background">