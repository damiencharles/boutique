<?php

class Chaussures extends Vetements
{
    public $pointure;

    public function __construct($prix, $dispo, int $pointure)
    {
        parent::__construct($prix, $dispo);
        {
            $this->pointure = $pointure;
        }
    }
    
}