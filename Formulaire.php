<?php

//$form = new Formulaire("file.txt", "2");

//$form->getForm();

class Formulaire{

    function __construct($nomFichier, $methode) {
        echo "<form method='".$nomFichier."' action='".$methode."'>";
    }

    function ajouterZoneText($text){
        echo $text."<input type= 'text' name='".$text."' />";
    }

    function ajouterBouton(){
        echo "<input type = 'submit' value='Envoyer'/>";
    }

    function getForm(){
        echo "</form>";
    }
}