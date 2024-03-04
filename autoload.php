<?php

spl_autoload_register(function ($className) {
    // Chemin de base de votre dossier src ou classes
    $baseDir = __DIR__ . '/src/';

    // Remplacez les backslashes de l'espace de noms par des slashes
    $relativeClass = str_replace('\\', '/', $className);

    // Construisez le chemin du fichier à partir du chemin de base, du chemin relatif, et de l'extension .php
    $file = $baseDir . $relativeClass . '.php';

    // Si le fichier existe, incluez-le
    if (file_exists($file)) {
        require $file;
    }
});
