<?php

$equipe = new Equipe(26,  "Olympique de Marseille");
$equipe2 = new Equipe(0,  "PSG");
$equipe3 = new Equipe(1,  "Nantes");
$equipe4 = new Equipe(0,  "Saint Etienne");

//$equipe->setName("Olympique de Marseille");
//$equipe->setNbTitre(26);

$equipe->display();
echo "<br>";
$equipe2->display();
echo "<br>";
$equipe3->display();
echo "<br>";
$equipe4->display();
echo "<br>";

$equipe::getNbTeam();

class Equipe{
    private $name;
    private $nbTitre;
    static $nbEquipe;
    const cons = "Nombre d'equipe";

    static function getNbTeam(){
        echo self::cons;
        echo self::$nbEquipe;
        echo "<br>";
    }

    function __construct($newNbTitre, $newName){
        $this->nbTitre = $newNbTitre;
        $this->name = $newName;
        self::$nbEquipe++;
    }

    function __destruct(){
        echo "Destructor <br>";
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