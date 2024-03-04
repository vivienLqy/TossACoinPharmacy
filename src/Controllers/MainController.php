<?php

namespace Controller;

use app\Controller;
use Repository\PotionRepository;
use Repository\RepositoryDoctor;

class MainController extends Controller
{

    private $repositoryDoctor;
    private $repositoryPotion;
    public function __construct()
    {
        $this->repositoryDoctor = new RepositoryDoctor();
        $this->repositoryPotion = new PotionRepository();
    }
    public function index()
    {
        $doctorsController = $this->repositoryDoctor->findAll();
        $potionController = $this->repositoryPotion->getTop4Potion();
        return $this->render('main/main.php', ["doctors" => $doctorsController, "potions" => $potionController]);
    }
    public function contact()
    {
        return $this->render("main/contact.php");
    }
}
