<?php

class Potions extends Controller
{
    public function index()
    {
        $this->loadModel('Potion');
        $articles = $this->Potion->getAll();
        $this->render('index', compact('articles'));
    }

    public function lire(){

        $this->loadModel('Potion');
        $potions = $this->Potion->getPotionById($currentId);
        $this->render('lire',compact('potions'));
    }

}
