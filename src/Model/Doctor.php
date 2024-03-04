<?php

namespace Model;

class Doctor
{
    private int $id = 0;
    private string $name = "";

    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
