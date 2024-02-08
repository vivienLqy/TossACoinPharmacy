<?php
// Inclusion des fichiers de configuration et de fonctions
require_once dirname(__DIR__) . ('/config/config.php');
require_once dirname(__DIR__) . ('/function/database.fn.php');

// Connexion à la base de données
$db = getPDOlink($config);

// Inclusion des fichiers de configuration et de fonction pour l'en-tête
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
  <link rel="stylesheet" href="style.css">
  <!-- Liens vers les polices Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
  <title>TossACoinPharmacy</title> <!-- Titre de la page -->
</head>

<body class="d-flex flex-column min-vh-100"> <!-- Corps de la page avec une disposition flexbox en colonne -->
  <header>
    <!-- En-tête de la page -->
    <nav class="navbar navbar-expand-lg bg-op w-100 h-50px p-0"> <!-- Barre de navigation Bootstrap -->
      <div class="container-fluid w-100 h-100"> <!-- Conteneur fluide Bootstrap -->
        <a class="navbar-brand text-white ff-tw" href="index.php"> <img class="logo" src="assets/img/logo.png" alt="">TossACoinPharmacy</a> <!-- Marque et logo de la pharmacie -->
        <!-- Bouton de bascule pour le menu de navigation sur les appareils mobiles -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end w-100 " id="navbarNavAltMarkup"> <!-- Contenu du menu de navigation -->
          <div class="navbar-nav d-flex justify-content-around w-50 "> <!-- Liste des éléments du menu de navigation -->
          <li class="nav-item">
              <a class="nav-link text-light ff-tw <?= isActive($index_page, $current_url); ?> <?= isActive('/index.php', $current_url); ?>"
               aria-current="page" href="<?= $index_page; ?>">Accueil
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light ff-tw <?= isActive($produit_page, $current_url); ?>" href="<?= $produit_page; ?>">Nos produit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light ff-tw <?= isActive($contact_page, $current_url); ?>" href="<?= $contact_page; ?>">Contact</a>
            </li>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <div class="background"> <!-- Fond d'écran -->
  <main class="flex-grow-1"> <!-- Contenu principal de la page -->
    
