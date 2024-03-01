<?php

class Potions extends Controller
{
    public function index()
    {
        $this->loadModel('Potion');
        $potions = $this->Potion->getAllPotions();
        $this->render('index', compact('potions'));
    }

    public function lire()
    {

        $this->loadModel('Potion');
        $potions = $this->Potion->getPotionById($currentId);
        $this->render('details', compact('potions'));
    }
}
