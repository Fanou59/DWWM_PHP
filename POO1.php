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

    class Employe extends Personne
    {
        private $salaire;

        public function __construct($nom, $prenom, $age, $salaire)
        {
            parent::__construct($nom, $prenom, $age);
            $this->salaire = $salaire;
        }


        public function getSalaire()
        {
            return $this->salaire;
        }
        public function augmenterSalaire($pourcentage)
        {
            $this->salaire += $this->salaire * $pourcentage / 100;
            return $this->salaire;
        }
    }
    // création de l'objet "stéphane"
    $stephane = new Personne("GUERY", "Stéphane", 47);
    // echo $stephane->getNom() . "<br>"; //J'appelle le GETTER car la propriété est PRIVATE


    // $stephane->setNom("SMAGGHE"); //J'utilise le SETTER pour modifier la propriété NOM
    // echo "Le nouveau nom est : " . $stephane->getNom(); //J'apelle le GETTER pour afficher la propriété
    // echo $stephane->afficherDetails();

    $jean = new Employe("Dupont", "Jean", 30, 1000);
    $paul = new Employe("Durant", "Paul", 28, 5000);
    echo $jean->afficherDetails() . "<br>" . "le salaire est de : " . $jean->getSalaire() . "<br> le nouveau salaire est de : " . $jean->augmenterSalaire(10) . "euros" . "<br>";
    echo "<hr>";
    echo $paul->afficherDetails() . "<br>" . "le salaire est de : " . $paul->getSalaire() . "<br> le nouveau salaire est de : " . $paul->augmenterSalaire(10) . "euros" . "<br>";

    ?>
</main>

<?php
include 'footer.php';
?>