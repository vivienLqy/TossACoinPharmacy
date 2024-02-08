<?php

function findAllPotion ($db) {
    $sql = "SELECT * FROM `potion` 
    INNER JOIN picture ON potion.id = picture.potionID;";
    $requete = $db->query($sql);
    $potions = $requete->fetchAll();
    return $potions;
}
function findAllPotions ($db) {
    $sql = "SELECT * FROM `potion` 
    LEFT JOIN picture ON potion.id = picture.potionID;";
    $requete = $db->query($sql);
    $potions = $requete->fetchAll();
    return $potions;
}
function findPotion ($db, $currentId) {
    $sql = "SELECT 
    p.id, p.title, p.rating, p.duration, p.toxic, p.utilisation, p.price, p.comment,
     dn.name AS doctor_name,
     cn.name AS categori_name,
     GROUP_CONCAT(i.name SEPARATOR ', ') as ingredient
     FROM `potion` AS p 
     INNER JOIN doctor_name dn ON p.doctorID = dn.id
     INNER JOIN categori_name cn ON p.categoriID = cn.id
     INNER JOIN ingredient_potion ip ON p.id = ip.potionID
     JOIN ingredient i ON ip.ingredientID = i.id
     WHERE p.id = $currentId";
     $requete = $db->query($sql);
     $result = $requete->fetch();
     return $result;
}

function findPicturePotion ($db,  $currentId) {
    $sql = "SELECT * FROM `picture` WHERE potionID = $currentId";
    $requete = $db->query($sql);
    $picture = $requete->fetch();
    return $picture;
}
function potionTop4 ($db) {
    $sql = "SELECT * FROM `potion` 
            INNER JOIN picture ON potion.id = picture.potionID
            ORDER BY rating DESC LIMIT 4;";
    $requete = $db->query($sql);
    $picture = $requete->fetchAll();
    return $picture;
}
function getStar($rating) {

    $starRating = round($rating);
    $note = $starRating / 2;
    $starSplit = explode('.', $note);
    $starNbr = 0;

    for ($i=0; $i < $starSplit[0]  ; $i++) { 
        echo '<i class="bi bi-star-fill"></i>';
        $starNbr++;
    }
    if (isset($starSplit[1])){
        echo '<i class="bi bi-star-half"></i>';
        $starNbr++;
    }
    for ($i=0; $i < 5 - $starNbr ; $i++) { 
        echo '<i class="bi bi-star"></i>';
    }
}