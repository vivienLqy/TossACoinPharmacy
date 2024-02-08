<?php
require_once __DIR__ . ('/config/config.php');
require_once __DIR__ . ('/function/database.fn.php');
$db = getPDOlink($config);
require_once __DIR__ . ('/function/potion_fn.php');
$potion = findPotion($db, $_GET['id']);
$picture = findPicturePotion($db, $_GET['id']);
require_once __DIR__ . ('/utilities/header.php');
require_once __DIR__ . ('/utilities/card.php');
