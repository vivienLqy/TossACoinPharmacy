<?php

namespace Repository;

use Database\GetConnection;
use PDO;
use Model\Potion;
use Model\Picture;
use Model\Doctor;
use Model\Ingredient;

class PotionRepository implements Repository
{

    private $connection;
    public function __construct()
    {
        $this->connection = GetConnection::getConnection();
    }

    public function find(int $id)
    {
        $sql = "SELECT p.id, p.title, p.rating, p.duration, p.toxic, p.utilisation, p.price, p.comment,
                dn.name AS doctor_name,
                dn.id AS doctor_id,
                cn.name AS categori_name,
                picture.pathImg AS picture_path,
                GROUP_CONCAT(i.name SEPARATOR ', ') as ingredients
                FROM `potion` AS p 
                INNER JOIN doctor_name dn ON p.doctorID = dn.id
                INNER JOIN categori_name cn ON p.categoriID = cn.id
                INNER JOIN ingredient_potion ip ON p.id = ip.potionID
                INNER JOIN picture ON p.id = picture.potionId
                INNER JOIN ingredient i ON ip.ingredientID = i.id
                WHERE p.id = ?
                GROUP BY p.id"; // Assurez-vous de grouper par p.id pour le GROUP_CONCAT
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        // Ici, nous utilisons fetchObject() pour obtenir directement une instance de Potion
        // Assurez-vous que les propriétés de la classe Potion correspondent aux colonnes sélectionnée
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $potion = new Potion();
        $potion->setId($row['id']);
        $potion->setTitle($row['title']);
        $potion->setRating($row['rating']);
        $potion->setDuration($row['duration']);
        $potion->setToxic($row['toxic']);
        $potion->setUtilisation($row['utilisation']);
        $potion->setPrice($row['price']);
        $potion->setComment($row['comment']);
        //
        $ingredients = explode(", ", $row["ingredients"]);
        $ingredientsArray = [];
        foreach ($ingredients as $ingredient) {
            $ingObject = new Ingredient($ingredient);
            $ingredientsArray[] = $ingObject;
        }
        $potion->setIngredients($ingredientsArray);
        $doctor = new Doctor();
        $doctor->setId($row['doctor_id']);
        $doctor->setName($row['doctor_name']);
        $potion->setDoctor($doctor);
        // Affectez d'autres propriétés de Potion ici
        $picture = new Picture();
        $picture->setPathImg($row['picture_path']);
        $potion->setPicture($picture);
        return $potion;
    }

    public function findBy(array $args)
    {
    }
    public function findAll()
    {
        $sql = "SELECT * FROM potion 
                LEFT JOIN picture ON potion.id = picture.potionID";
        $stmt = $this->connection->prepare($sql);
        $response = $stmt->execute();
        $potions = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $potion = new Potion();
            $potion->setId($row['id']);
            $potion->setTitle($row['title']);
            $potion->setRating($row['rating']);
            $potion->setDuration($row['duration']);
            $potion->setToxic($row['toxic']);
            $potion->setUtilisation($row['utilisation']);
            $potion->setPrice($row['price']);
            // Affectez d'autres propriétés de Potion ici
            $picture = new Picture();
            $picture->setPathImg($row['pathImg']);
            $potion->setPicture($picture);
            $potions[] = $potion;
        }
        return $potions;
    }
    public function getTop4Potion()
    {
        $sql = "SELECT * FROM `potion` 
            INNER JOIN picture ON potion.id = picture.potionID
            ORDER BY rating DESC LIMIT 4;";
        $query = $this->connection->prepare($sql);
        $query->execute();
        $potions = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $potion = new Potion();
            $potion->setId($row['id']);
            $potion->setTitle($row['title']);
            $potion->setRating($row['rating']);
            $potion->setDuration($row['duration']);
            $potion->setToxic($row['toxic']);
            $potion->setUtilisation($row['utilisation']);
            $potion->setPrice($row['price']);
            // Affectez d'autres propriétés de Potion ici
            $picture = new Picture();
            $picture->setPathImg($row['pathImg']);
            $potion->setPicture($picture);
            $potions[] = $potion;
        }
        return $potions;
    }
    public function getBestPotions($order)
    {
        $sql = "SELECT * FROM potion
            LEFT JOIN picture ON potion.id = picture.potionID
            ORDER BY price $order ;";
        $query = $this->connection->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}
