<?php
// Fonction pour vérifier si une page est active
function isActive($page, $url) {
    // Vérifie si l'URL de la page contient la partie de l'URL fournie en paramètre
    if (strpos($page, $url) !== FALSE) {
        // Si c'est le cas, affiche la classe "active text-uppercase"
        echo 'active text-uppercase';
    }
}

// Vérifie quelle page est active et définit le titre en conséquence
// Si l'URL de la page index contient l'URL actuelle ou si l'URL actuelle est index.php
if(strrpos($index_page, $current_url) !== false || strpos($index_page . 'index.php', $current_url) !== false):
    // Définit le titre de la page comme le nom de la page d'index
    $title = $index_name;
// Si l'URL de la page produit contient l'URL actuelle
elseif(strrpos($produit_page, $current_url) !== false):
    // Définit le titre de la page comme le nom de la page produit
    $title = $produit_name;
// Si l'URL de la page contact contient l'URL actuelle
elseif(strrpos($contact_page, $current_url) !== false):
    // Définit le titre de la page comme le nom de la page contact
    $title = $contact_name;
endif;

