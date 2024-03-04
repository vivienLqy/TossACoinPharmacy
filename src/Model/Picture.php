<?php

namespace Model;

class Picture
{
    private $id;
    private $pathImg;

    public function __construct()
    {
    }
    // generate getter & setters
    public function getId()
    {
        return $this->id;
    }
    public function getPathImg()
    {
        return $this->pathImg;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setPathImg($pathImg)
    {
        $this->pathImg = $pathImg;
    }
}
