<?php
class Livres
{
    public string $titre;
    public string $auteur;
    public int $prix;

    public function __construct($titre, $auteur, $prix)
    {
        $this->auteur = $auteur;
        $this->titre = $titre;
        $this->prix = $prix;
    }

    public function afficher()
    {
        $h = 'Titre du livre : ' . $this->titre . '<br>';
        $h .= 'Auteur du livre : ' . $this->auteur . '<br>';
        $h .= 'Prix du livre : ' . $this->prix . ' €<br>';
        return $h;
    }
}
echo "<h1>Exercice N°1 sur la gestion d'une biblio</h1>";
$newLivre = new Livres("Le chat bottée", "Charles Perault", 16);
echo $newLivre->afficher();
echo "<hr>";


/*Definir une class EMPLOYEE avec pour attribut (int)matricule, (string)nom, (string)prenom,
(string)date de naissance, (string)date embauche, (int)salaire
*/
class Employee
{
    public int $matricule;
    public string $nom;
    public string $prenom;
    public string $DateDeNaissance;
    public string $DateEmbauche;
    public int $salaire;



    //construction de la classe
    public function __construct($matricule, $nom, $prenom, $DateDeNaissance, $DateEmbauche, $salaire)
    {
        $this->matricule = $matricule;
        $this->nom = strtoupper($nom);
        $this->prenom = ucfirst($prenom);
        $this->DateDeNaissance = $DateDeNaissance;
        $this->DateEmbauche = $DateEmbauche;
        $this->salaire = $salaire;
    }

    //Méthode pour calculer l'age de l'employee
    public function age()
    {
        $ceJour = date("Y-m-d");
        $diff = date_diff(date_create($this->DateDeNaissance), date_create($ceJour));
        return $diff;
    }

    //Méthode pour calculer l'ancienneté de l'employé
    public function anciennete()
    {
        $cejour = date("Y-m-d");
        $diff = date_diff(date_create($this->DateEmbauche), date_create($cejour));
        return $diff->format(('%y'));
    }
    //Méthode pour calculer l'augmentation de l'employé
    public function augmentation()
    {
        /*J'appelle la fonction anciennete pour les conditions d'attribution*/
        $dateEntree = $this->anciennete();
        $newSalaire = 0;
        if ($dateEntree < 5) {
            $newSalaire = $this->salaire * (1 + .02);
        } elseif ($dateEntree < 10) {
            $newSalaire = $this->salaire * (1 + .05);
        } else {
            $newSalaire = $this->salaire * (1 + .1);
        }
        return $newSalaire;
    }
    public function afficher()
    {
        $h = "Matricule : " . $this->matricule . "<br>";
        $h .= "Nom : " . $this->nom . "<br>";
        $h .= "Prénom : " . $this->prenom . "<br>";
        $h .= "Date de naissance : " . $this->DateDeNaissance . "<br>";
        $h .= "Date d'embauche : " . $this->DateEmbauche . "<br>";
        $h .= "Salaire : " . $this->salaire . " €<br>";
        return $h;
    }
}

$employe1 = new Employee(
    "2345",
    "Doe",
    "John",
    "04-08-1976",
    "27-08-2020",
    1000
);
echo "<h1>Exercice N°2 sur la gestion d'employés</h1>";

echo $employe1->afficher();

echo "Votre ancienneté est de : " . $employe1->anciennete() . " ans<br>";
echo "Votre nouveau salaire est de : " . $employe1->augmentation() . " €<br>";
