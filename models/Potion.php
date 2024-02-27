<?php

class Potion
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
}
