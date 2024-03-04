<?php

namespace Database;

use PDOException;
use PDO;
use Exception;

class GetConnection
{
    private static $instance = null; // Correction: $instance doit être static

    // Pattern singleton
    public static function getConnection()
    {
        // Assurez-vous que config.php retourne un tableau dans $config
        $config = require("config/config.php");

        if (self::$instance !== null) {
            return self::$instance;
        } else {
            try {
                $dsn = "mysql:host=" . $config['dbhost'] . ";dbname=" . $config['dbname'] . ";port=" . $config['dbport'] . ";charset=" . $config['dbchar'];
                self::$instance = new PDO($dsn, $config['dbuser'], $config['dbpass']); // Correction: Utiliser \PDO pour l'espace de noms global
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Optionnel: Configurer PDO pour qu'il lance des exceptions

                return self::$instance;
            } catch (PDOException $e) { // Correction: Ajouter \ pour PDOException
                echo "Erreur de connexion : " . $e->getMessage();
                throw new Exception(); // Correction: Ajouter \ pour Exception
            }
        }
    }
}
