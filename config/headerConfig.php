<?php
// Définition du domaine de base du site
$domain = 'http://localhost:8888/vpharma/';

// Définition des URL des différentes pages du site
$index_page = $domain; // L'URL de la page d'accueil est simplement le domaine
$produit_page = $domain . 'produits.php'; // L'URL de la page produits
$contact_page = $domain . 'contact.php'; // L'URL de la page de contact

// Définition des noms des différentes pages du site
$index_name = 'Notre sélection'; // Nom de la page d'accueil
$produit_name = 'Nos produits'; // Nom de la page produits
$contact_name = 'Contactez-nous'; // Nom de la page de contact

// Récupération de l'URL actuelle de la page à partir de la variable superglobale $_SERVER
$current_url = $_SERVER['SCRIPT_NAME'];
