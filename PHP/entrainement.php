<?php


class Stage{

public $intitule;
public $entreprise;
public $description;

    public function __construct($intitule, $entreprise, $description) {
    $this->intitule = $intitule;
    $this->entreprise = $entreprise;
    $this->description = $description;
    }

    public function afficher() {
        return $this->intitule . " chez " . $this->entreprise;
    }
}
$stg1 = new Stage("Site web dev", "AirBus","Aucune");
echo $stg1->afficher();
$stg2 = new Stage("Dev réseau", " chez ", "" )






 ?>