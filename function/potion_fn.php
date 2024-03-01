<?php

function findIngredient($db)
{
    $sql = "SELECT * FROM `ingredient`";
    $requete = $db->query($sql);
    $ingredient_names = $requete->fetchAll();
    return $ingredient_names;
}

