<?php

namespace app;

abstract class Controller
{
    private $model;
    public function render(string $fichier, array $data = [])
    {
        extract($data);
        ob_start();
        require_once(ROOT . 'views/' . $fichier);
        $content = ob_get_clean();
        require_once(ROOT . 'views/layout/default.php');
    }
    public function loadModel(string $model)
    {
        require_once(ROOT . 'models/' . $model . '.php');

        // On crée une instance de ce modèle. Ainsi "Article" sera accessible par $this->Article
        $this->model = new $model();
        var_dump($this->$model);
    }
}
