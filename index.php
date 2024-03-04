<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED);


define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
require_once(ROOT . 'autoload.php');
require_once(ROOT . 'app/Controller.php');


use Controller\MainController;
use Controller\PotionController;
// On sépare les paramètres et on les met dans le tableau $params
$params = explode('/', $_SERVER["REQUEST_URI"]);
//$_SERVER["REQUEST_URI"]; = route
//
// Si au moins 1 paramètre existe
if ($params[1] != "") {
    // On sauvegarde le 1er paramètre dans $controller en mettant sa 1ère lettre en majuscule
    if (empty($params[2])) {
        switch ($params[1]) {
            case "produits": {
                    require_once(ROOT . 'src/Controllers/PotionController.php');
                    $controller = new PotionController();
                    return $controller->index();
                }
            case "contact": {
                    require_once(ROOT . 'src/Controllers/MainController.php');
                    $controller = new MainController();
                    return $controller->contact();
                }
        }
    } else {
        if ($params[1] == "produits" && !empty($params[2])) {
            require_once(ROOT . 'src/Controllers/PotionController.php');
            $controller = new PotionController();
            return $controller->details((int)$params[2]);
        }
    }
} else {
    // Ici aucun paramètre n'est défini
    // On appelle le contrôleur par défaut
    require_once(ROOT . 'src/Controllers/MainController.php');

    // On instancie le contrôleur
    $controller = new MainController();

    // On appelle la méthode index
    $controller->index();
}
