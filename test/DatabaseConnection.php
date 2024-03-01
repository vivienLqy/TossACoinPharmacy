<?php

class DatabaseConnection
{
    private PDO $db;

    public function __construct(array $config)
    {
        $dsn = 'mysql:dbname=' . $config['dbname'] . ';host=' . $config['dbhost'] . ';port=' . $config['dbport'] . ';charset=' . $config['dbchar'];

        try {
            $this->db = new PDO($dsn, $config['dbuser'], $config['dbpass']);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            exit('BDD Erreur de connexion : ' . $e->getMessage());
        }
    }

    public function getPDO(): PDO
    {
        return $this->db;
    }

}
