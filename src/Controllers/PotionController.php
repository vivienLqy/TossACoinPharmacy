<?php

namespace Controller;

use app\Controller;
use Ingredient;
use Repository\PotionRepository;

class PotionController extends Controller
{
    private PotionRepository $potionRepository;
    public function __construct()
    {
        $this->potionRepository = new PotionRepository();
    }
    public function index()
    {
        $potions = $this->potionRepository->findAll();
        return $this->render('potions/produits.php', ['potions' => $potions]);
    }
    public function details(int $id)
    {
        $potion = $this->potionRepository->find($id);
        return $this->render("potions/details.php", ["potion" => $potion]);
    }
}
