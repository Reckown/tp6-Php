

<?php
include 'Formulaire.php';

$form = new Formulaire("file.txt", "post");
$form->ajouterZoneText("Votre nom");
echo "<br>";
$form->ajouterZoneText("Votre prénom");
echo "<br>";
$form->ajouterBouton();
$form->getForm();


if (isset($_POST['Votre_nom']) && isset($_POST['Votre_code'])) {
    echo $_POST['Votre_nom'] . "<br>";
    echo $_POST['Votre_code'] . "<br>";
}

