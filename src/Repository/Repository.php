<?php

namespace Repository;

interface Repository
{
    public function find(int $id);
    public function findBy(array $args);
    public function findAll();
}
