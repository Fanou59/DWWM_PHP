<?php
include 'header.php';
include 'nav.php';
?>

<main>
    <h1>POO - Cours N°1</h1>
    <?php

    class Personne
    {
        //déclaration des attributs
        private string $nom;
        private string $prenom;
        private int $age;

        //methode GETTER (récupérer) car l'attribut est PRIVATE
        public function getNom()
        {
            return $this->nom;
        }
        //methode SETTER (modifier attribut) car l'attrivut est PRIVATE
        public function setNom($nom)
        {
            $this->nom = $nom;
        }
        public function getPrenom()
        {
            return $this->prenom;
        }
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }
        public function getAge()
        {
            return $this->age;
        }
        public function setAge($age)
        {
            $this->age = $age;
        }

        //methode de construction de l'objet
        public function __construct($nom, $prenom, $age)
        {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->age = $age;
        }

        //différentes méthodes
        public function marcher()
        {
            //code pour marcher
        }
        public function courir()
        {
            //code pour courir
        }
        public function sauter()
        {
            //code pour sauter
        }
        public function afficherDetails()
        {
            $h = "Nom : " . $this->nom;
            $h .= ", Prénom : " . $this->prenom;
            $h .= ", Age : " . $this->age;
            return $h;
        }
    }
    // création de l'objet "stéphane"
    $stephane = new Personne("GUERY", "Stéphane", 47);
    // echo $stephane->getNom() . "<br>"; //J'appelle le GETTER car la propriété est PRIVATE


    // $stephane->setNom("SMAGGHE"); //J'utilise le SETTER pour modifier la propriété NOM
    // echo "Le nouveau nom est : " . $stephane->getNom(); //J'apelle le GETTER pour afficher la propriété
    echo $stephane->afficherDetails();
    ?>
</main>

<?php
include 'footer.php';
?>