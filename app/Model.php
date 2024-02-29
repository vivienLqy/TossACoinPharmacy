<?php

class Model
{
    private $dbhost = 'localhost';
    private $dbname = 'vpharma';
    private $dbport = '8889';
    private $dbuser = 'root';
    private $dbpass = 'root';

    protected $db;

    public function getConnexion()
    {
        try {
            $this->db = new PDO("mysql:host=" . $this->dbhost . ";dbname=" . $this->dbname . ";port=" . $this->dbport, $this->dbuser, $this->dbpass);
            $this->db->exec("SET NAMES utf8");
            return $this->db;
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }
}
