<?php

$equipe = new Equipe(26,  "Olympique de Marseille");
$equipe2 = new Equipe(26,  "Olympique de Marseille");
$equipe3 = new Equipe(26,  "Olympique de Marseille");
$equipe4 = new Equipe(26,  "Olympique de Marseille");


//$equipe->setName("Olympique de Marseille");
//$equipe->setNbTitre(26);

$equipe->display();

$equipe::getNbTeam();

class Equipe{
    private $name;
    private $nbTitre;
    static $nbEquipe;
    const cons = "Nombre d'equipe";

    static function getNbTeam(){
        echo self::cons;
        echo self::$nbEquipe;
    }


    function __construct($newNbTitre, $newName){
        $this->nbTitre = $newNbTitre;
        $this->name = $newName;
        self::$nbEquipe++;
    }

    function __destruct(){
        echo "Destructor";
    }

    public function getName(){
        return $this->name;
    }

    public function getNbTitre(){
        return $this->nbTitre;
    }

    public function setName($newName){
        $this->name = $newName;
    }

    public function setNbTitre($newNbTitre){
        $this->nbTitre = $newNbTitre;
    }

    public function display(){
        echo "L'equipe ".$this->name." a ".$this->nbTitre." titre";
        echo "<br>";
    }
}