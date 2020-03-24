

<?php
include 'Formulaire.php';

$form = new Formulaire("file.txt", "2");
echo "Entrez votre prénom : ";
$form->ajouterZoneText("");
echo "<br>";
echo "Entrez votre nom : ";
$form->ajouterZoneText("");
$form->ajouterBouton("envoyer");



if (isset($_POST['Votre_nom']) && isset($_POST['Votre_code'])) {
    echo $_POST['Votre_nom'] . "<br>";
    echo $_POST['Votre_code'] . "<br>";
}

