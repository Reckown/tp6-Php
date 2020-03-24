<?php

//$form = new Formulaire("file.txt", "2");

//$form->getForm();

class Formulaire{

    function __construct($meth, $url) {
        echo "<form method='".$meth."' action='".$url."'>";
    }

    function ajouterZoneText($textZ){
        echo "<input type= 'text' value='".$textZ."' />";
    }

    function ajouterBouton($text){
        echo "<input type = 'button' value='".$text."'/>";
    }

    function getForm(){
        echo "Entrez votre prénom : ";
        $this->ajouterZoneText("");
        echo "<br>";
        echo "Entrez votre nom : ";
        $this->ajouterZoneText("");
        $this->ajouterBouton("envoyer");
    }
}