<?php

namespace Model;

class Potion
{
    public int $id;
    private string $title;
    private string $creator;
    private string $comment;
    private array $ingredients;
    private float $duration;
    private int $toxic;
    private float $price;
    private int $utilisation;
    private float $rating;
    private Doctor $doctor;
    private ?Picture $picture;

    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
    public function getCreator(): string
    {
        return $this->creator;
    }
    public function setCreator(string $creator): void
    {
        $this->creator = $creator;
    }
    public function getPicture(): Picture
    {
        return $this->picture;
    }
    public function setPicture(Picture $picture): void
    {
        $this->picture = $picture;
    }
    public function getComment(): string
    {
        return $this->comment;
    }
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }
    public function getIngredients(): array
    {
        return $this->ingredients;
    }
    public function setIngredients(array $ingredients): void
    {
        $this->ingredients = $ingredients;
    }
    public function getDuration(): float
    {
        return $this->duration;
    }
    public function setDuration(float $duration): void
    {
        $this->duration = $duration;
    }
    public function getToxic(): int
    {
        return $this->toxic;
    }
    public function setToxic(int $toxic): void
    {
        $this->toxic = $toxic;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
    public function getUtilisation(): int
    {
        return $this->utilisation;
    }
    public function setUtilisation(int $utilisation): void
    {
        $this->utilisation = $utilisation;
    }
    public function getRating(): float
    {
        return $this->rating;
    }
    public function setRating(float $rating): void
    {
        $this->rating = $rating;
    }
    public function getDoctor(): Doctor
    {
        return $this->doctor;
    }
    public function setDoctor(Doctor $doctor): void
    {
        $this->doctor = $doctor;
    }
    public function getStar($rating)
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
}
