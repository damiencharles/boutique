<?php

class Pantalons extends Vetements
{
    public $taille;

    public function __construct($prix, $dispo, string $taille)
    {
        parent::__construct($prix, $dispo);
        {
            $this->taille = $taille;
        }
    }
    
}