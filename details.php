<?php
require_once __DIR__ . ('/utilities/header.php');
require_once __DIR__ . ('/models/Potion.php');


$potionInstance = new Potion;
$potion = $potionInstance->getPotionById($_GET['id']);



require_once __DIR__ . ('/utilities/card.php');
require __DIR__ . ("/utilities/footer.php");
