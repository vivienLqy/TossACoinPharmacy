<?php

class Model
{

    protected $db;

    public $table;
    public $id;

    public function getConnection()
    {        
        if ($this->db === null) {
            try {
                require dirname(__DIR__) . '/config/config.php';
                $dsn = "mysql:host=" . $config['dbhost'] . ";dbname=" . $config['dbname'] . ";port=" . $config['dbport'] . ";charset=" . $config['dbchar'];
                $this->db = new PDO($dsn, $config['dbuser'], $config['dbpass']);
                return $this->db;
            } catch (PDOException $e) {
                echo "Erreur de connexion : " . $e->getMessage();
            }
        }
    }
}
