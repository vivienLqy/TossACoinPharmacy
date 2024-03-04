<?php

namespace Repository;

use Database\GetConnection;
use PDO;

class RepositoryDoctor implements Repository
{
    private $connection;
    public function __construct()
    {
        $this->connection = GetConnection::getConnection();
    }
    public function find(int $id)
    {
    }
    public function findBy(array $args)
    {
    }
    public function findAll()
    {
        $sql = "SELECT dn.name, picd.pathImg , picd.bio FROM doctor_name dn
            INNER JOIN picture_doctor picd ON dn.id = picd.doctor_id;";
        $query = $this->connection->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}
