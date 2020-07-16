<?php

class Pantalons extends Vetements
{
    public $id;
    public $nom;
    public $taille;

    public function __construct($nom, $prix, $dispo, $taille)
    {
        parent::__construct($prix, $dispo);
        {
            $this->nom = $nom;
            $this->taille = $taille;
        }
    }
    
}