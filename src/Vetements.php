<?php

class Vetements 
{
    public $prix;
    public $dispo;

    public function __construct($prix,$dispo)
    {
        $this->prix = $prix;
        $this->dispo = $dispo;
    }

    public function __toString()
    {
       return $this->prix;
       return $this->dispo;
    }
}