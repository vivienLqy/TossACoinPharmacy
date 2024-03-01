<?php

// On génère une constante contenant le chemin vers la racine publique du projet
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

// On appelle le modèle et le contrôleur principaux
require_once(ROOT . 'app/Model.php');
require_once(ROOT . 'app/Controller.php');

// Inclusion de l'en-tête de la page
require_once __DIR__ . ("/views/header.php");
require_once __DIR__ . ("/models/Doctor.php");
require_once __DIR__ . ("/models/Potion.php");


$doctorsInstance = new Doctor;
$doctors = $doctorsInstance->getAllDoctor();

$potionsInstance = new Potion;
$potions = $potionsInstance->getPotionTop4();


require_once __DIR__ . ("/views/index.php");

require_once __DIR__ . ("/views/footer.php");