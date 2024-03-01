<?php
// Récupère toutes les potions, y compris celles sans image associée
// function findAllPotions ($db) {
//     $sql = "SELECT * FROM `potion` 
//     LEFT JOIN picture ON potion.id = picture.potionID;";
//     $requete = $db->query($sql);
//     $potions = $requete->fetchAll();
//     return $potions;
// }
// function findDoctor ($db){
//     $sql = "SELECT * FROM `doctor_name`";
//     $requete = $db->query($sql);
//     $doctor_names = $requete->fetchAll();
//     return $doctor_names;
// }
// function findPictureDoctor($db){
//     $sql ="SELECT picture_doctor.*, doctor_name.name AS doctor_name
//     FROM picture_doctor
//     INNER JOIN doctor_name ON picture_doctor.doctor_id = doctor_name.id;";
//     $requete = $db->query($sql);
//     $doctors = $requete->fetchAll();
//     return $doctors;
// }

// Récupère les détails d'une potion spécifique en fonction de son ID
// function findPotion ($db, $currentId) {
//     $sql = "SELECT 
//     p.id, p.title, p.rating, p.duration, p.toxic, p.utilisation, p.price, p.comment,
//     dn.name AS doctor_name,
//     cn.name AS categori_name,
//     GROUP_CONCAT(i.name SEPARATOR ', ') as ingredient
//     FROM `potion` AS p 
//     INNER JOIN doctor_name dn ON p.doctorID = dn.id
//     INNER JOIN categori_name cn ON p.categoriID = cn.id
//     INNER JOIN ingredient_potion ip ON p.id = ip.potionID
//     JOIN ingredient i ON ip.ingredientID = i.id
//     WHERE p.id = $currentId";
//     $requete = $db->query($sql);
//     $result = $requete->fetch();
//     return $result;
// }

// Récupère l'image associée à une potion spécifique en fonction de son ID
// function findPicturePotion ($db,  $currentId) {
//     $sql = "SELECT * FROM `picture` WHERE potionID = $currentId";
//     $requete = $db->query($sql);
//     $picture = $requete->fetch();
//     return $picture;
// }

// Récupère les quatre premières potions les mieux notées
// function potionTop4 ($db) {
//     $sql = "SELECT * FROM `potion` 
//     INNER JOIN picture ON potion.id = picture.potionID
//     ORDER BY rating DESC LIMIT 4;";
//     $requete = $db->query($sql);
//     $picture = $requete->fetchAll();
//     return $picture;
// }

// Génère un affichage visuel des étoiles pour représenter une note donnée
// function getStar($rating) {
//     $starRating = round($rating);
//     $note = $starRating / 2;
//     $starSplit = explode('.', $note);
//     $starNbr = 0;

//     for ($i=0; $i < $starSplit[0]  ; $i++) { 
//         echo '<i class="bi bi-star-fill"></i>';
//         $starNbr++;
//     }
//     if (isset($starSplit[1])){
//         echo '<i class="bi bi-star-half"></i>';
//         $starNbr++;
//     }
//     for ($i=0; $i < 5 - $starNbr ; $i++) { 
//         echo '<i class="bi bi-star"></i>';
//     }
// }

function findIngredient($db)
{
    $sql = "SELECT * FROM `ingredient`";
    $requete = $db->query($sql);
    $ingredient_names = $requete->fetchAll();
    return $ingredient_names;
}

function findBestPotions($db, $order)
{
    $sql = "SELECT * FROM `potion` 
    LEFT JOIN picture ON potion.id = picture.potionID
    ORDER BY price $order ;";
    $requete = $db->query($sql);
    $potions = $requete->fetchAll();
    return $potions;
}


$sortBy = $_POST['mySelect'];
// Vérifie si la valeur de $sortBy est 'ASC' ou 'DESC'
if ($sortBy === 'ASC' || $sortBy === 'DESC') {
    // Si c'est le cas, appelle la fonction getSortedProducts() avec la base de données et l'ordre de tri sélectionné par l'utilisateur
    $potions = findBestPotions($db, $sortBy);
}
