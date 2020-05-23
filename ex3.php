<body>
<form method="post">
    Votre nom : <input type = "text" name = "nom"/>
    <br>
    Votre Prénom : <input type = "text" name = "prenom"/>
    <br>
    Votre Mail : <input type = "text" name = "mail"/>
    <br>
    Age : <select name = "age" id="age">
        <option value="">--age--</option>
        <option value="0-20">0-20</option>
        <option value="20-40">20-40</option>
        <option value="40-60">40-60</option>
        <option value="60-80">60-80</option>
    </select>
    <br>
    Monsieur : <input type = "radio" name = "genre" value = "Monsieur"/>
    <br>
    Madame : <input type= "radio" name = "genre" value = "Madame"/>
    <br>
    <input type = "submit" name = "Submit" value = "submit">

</form>
</body>

<?php

$form = new Form();
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['age'])  ) {
    $form->setNom();
    $form->setPrenom();
    $form->setAge();
    $form->setMail();

    $form->display();
}


class Form
{
    private $nom;
    private $prenom;
    private $mail;
    private $age;
    private $genre;

    function display(){
        echo $this->nom;
        echo '<br>';
        echo $this->prenom;
        echo '<br>';
        echo $this->mail;
        echo '<br>';
        echo $this->age;
        echo '<br>';
        echo $this->genre;
    }

    function setNom(){
        $this->nom = $_POST['nom'];
    }

    function setPrenom(){
        $this->prenom = $_POST['prenom'];
    }

    function setMail(){
        $this->mail = $_POST['mail'];
    }

    function setAge(){
        $this->age = $_POST['age'];
    }

    function __construct(){
        //if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['age'])) {
        //    $this->nom = $_POST['nom'];
        //    $this->prenom = $_POST['prenom'];
        //    $this->mail = $_POST['mail'];
        //    $this->age = $_POST['age'];
        //    echo $this->age;
        //}
    }


}
