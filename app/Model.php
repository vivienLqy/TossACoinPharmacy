<?php
class Model
{

    protected $db;

    public $table;


    public function getConnection()
    {
        require dirname(__DIR__) . '/config/config.php';
        if ($this->db === null) {
            try {
                $dsn = "mysql:host=" . $config['dbhost'] . ";dbname=" . $config['dbname'] . ";port=" . $config['dbport'] . ";charset=" . $config['dbchar'];
                $this->db = new PDO($dsn, $config['dbuser'], $config['dbpass']);
                return $this->db;
            } catch (PDOException $e) {
                echo "Erreur de connexion : " . $e->getMessage();
            }
        }
    }
}
