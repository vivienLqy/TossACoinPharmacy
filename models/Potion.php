<?php

class Potion extends Model

{
    private int $id;
    private string $name;
    private string $creator;
    private string $picture;
    private string $description;
    private array $ingredients;
    private float $duration;
    private int $toxicity;
    private float $price;
    private int $numberOfUse;
    private float $rating;

    // Getter : permet de récupérer la valeur d'une propriété
    // Setter : permet d'assigner une valeur à une propriété

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $newName): string
    {
        return $this->name = $newName;
    }

    public function getCreator(): string
    {
        return $this->creator;
    }

    public function setCreator(string $newCreator): string
    {
        return $this->creator = $newCreator;
    }

    public function getPicture(): string
    {
        return $this->picture;
    }

    public function setPicture(string $newPicture): string
    {
        return $this->picture = $newPicture;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function setIngredients(array $newIngredients): array
    {
        return $this->ingredients = $newIngredients;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $newDescription): string
    {
        return $this->description = $newDescription;
    }

    public function getDuration(): float
    {
        return $this->duration;
    }

    public function setDuration(float $newDuration): float
    {
        return $this->duration = $newDuration;
    }

    public function getToxicity(): int
    {
        return $this->toxicity;
    }

    public function setToxicity(int $newToxicity): int
    {
        return $this->toxicity = $newToxicity;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(float $newPrice): float
    {
        return $this->price = $newPrice;
    }

    public function getNumberOfUse(): int
    {
        return $this->numberOfUse;
    }

    public function setNumberOfUse(int $newNumberOfUse): int
    {
        return $this->numberOfUse = $newNumberOfUse;
    }

    public function getRating(): float
    {
        return $this->rating;
    }

    public function setRating(float $newRating): float
    {
        return $this->rating = $newRating;
    }

    public function getAllPotions()
    {
        $this->getConnection();
        // Requête SQL pour récupérer toutes les potions avec leurs images correspondantes
        $sql = "SELECT * FROM potion 
                        LEFT JOIN picture ON potion.id = picture.potionID";

        // Préparez la requête
        $requete = $this->db->prepare($sql);

        // Exécutez la requête
        $requete->execute();

        // Renvoie les résultats
        return $requete->fetchAll();
    }

    public function getPotionById($currentId)
    {
        $this->getConnection();
        $sql = "SELECT p.id, p.title, p.rating, p.duration, p.toxic, p.utilisation, p.price, p.comment,
            dn.name AS doctor_name,
            cn.name AS categori_name,
            picture.pathImg,
            GROUP_CONCAT(i.name SEPARATOR ', ') as ingredient
            FROM `potion` AS p 
            INNER JOIN doctor_name dn ON p.doctorID = dn.id
            INNER JOIN categori_name cn ON p.categoriID = cn.id
            INNER JOIN ingredient_potion ip ON p.id = ip.potionID
            INNER JOIN picture ON p.id = picture.potionId
            JOIN ingredient i ON ip.ingredientID = i.id
            WHERE p.id = $currentId
            GROUP BY p.id, picture.pathImg";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function getStar($rating)
    {
        $starRating = round($rating);
        $note = $starRating / 2;
        $starSplit = explode('.', $note);
        $starNbr = 0;

        for ($i = 0; $i < $starSplit[0]; $i++) {
            echo '<i class="bi bi-star-fill"></i>';
            $starNbr++;
        }
        if (isset($starSplit[1])) {
            echo '<i class="bi bi-star-half"></i>';
            $starNbr++;
        }
        for ($i = 0; $i < 5 - $starNbr; $i++) {
            echo '<i class="bi bi-star"></i>';
        }
    }

    public function getPotionTop4()
    {
        $this->getConnection();
        $sql = "SELECT potion.*, picture.pathImg
            FROM `potion` 
            INNER JOIN picture ON potion.id = picture.potionID
            ORDER BY potion.rating DESC LIMIT 4;";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getBestPotions($order)
    {
        $this->getConnection();
        $sql = "SELECT * FROM `potion` 
                    LEFT JOIN picture ON potion.id = picture.potionID
                    ORDER BY price $order ;";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
