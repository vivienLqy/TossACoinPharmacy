<?php
// Inclusion des fichiers de configuration et de fonctions
require_once __DIR__ . ('/utilities/header.php');
// require_once __DIR__ . ('/function/database.fn.php');
require_once __DIR__ . ('/models/Potion.php');
// Connexion à la base de données en utilisant les informations de configuration
$potionInstance = new Potion;
$potion = $potionInstance->getPotionById($_GET['id']);

// Inclusion du fichier de fonction pour la gestion des potions
// require_once __DIR__ . ('/function/potion_fn.php');

// Récupération des détails de la potion spécifiée par son identifiant passé en paramètre GET
// $potion = findPotion($db, $_GET['id']);

// Récupération des informations sur l'image de la potion spécifiée par son identifiant
// $picture = findPicturePotion($db, $_GET['id']);

// Inclusion des fichiers d'en-tête et de carte (peut-être pour afficher la potion)

require_once __DIR__ . ('/views/card.php');

// Inclusion du fichier de pied de page
require __DIR__ . ("/utilities/footer.php");
