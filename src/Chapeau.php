<?php 

class Chapeau extends Vetements
{
    public $tourdetete;
    public $matiere;

    public function __construct($prix, $dispo, int $tourdetete ,string $matiere)
    {
        parent::__construct($prix,$dispo);
        $this->tourdetete = $tourdetete;
        $this->matiere = $matiere;
    }


}