<?php

class Chaussures extends Vetements
{
    public $id;
    public $nom;
    public $pointure;

    public function __construct($nom, $prix, $dispo,$pointure)
    {
        parent::__construct($prix, $dispo);
        {
            $this->nom = $nom;
            $this->pointure = $pointure;
        }
    }
    
}