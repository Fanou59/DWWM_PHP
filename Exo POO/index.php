<?php
class livres
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
        echo 'Titre du livre : ' . $this->titre . '<br>';
        echo 'Auteur du livre : ' . $this->auteur . '<br>';
        echo 'Prix du livre : ' . $this->prix . ' €<br>';
    }
}
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
        return $diff;
    }
    //Méthode pour calculer l'augmentation de l'employé
    public function augmentation()
    {
        /*J'appelle la fonction anciennete pour les conditions d'attribution
        Attention car anciennete() ne return pas un INT.
        */
        $dateEntree = $this->anciennete()->format('%y');
        $newSalaire = 0;
        if ($dateEntree < 5) {
            $newSalaire = $this->salaire * (1 + .02);
            return $newSalaire;
        } elseif ($dateEntree < 10) {
            $newSalaire = $this->salaire * (1 + .05);
            return $newSalaire;
        } else {
            $newSalaire = $this->salaire * (1 + .1);
            return $newSalaire;
        }
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
echo "Matricule : " . $employe1->matricule . "<br>";
echo "Nom : " . $employe1->nom . "<br>";
echo "Prénom : " . $employe1->prenom . "<br>";
echo "Date de naissance : " . $employe1->DateDeNaissance . "<br>";
echo "Date d'embauche : " . $employe1->DateEmbauche . "<br>";
echo "Salaire : " . $employe1->salaire . " €<br>";


//affichage de l'age de l'employée au format YEAR (%y)
echo "L'age de l'employé est de " . $employe1->age()->format('%y') . " ans <br>";

echo "L'ancienneté de l'employé est de " . $employe1->anciennete()->format('%y') . " ans <br>";
echo "Votre nouveau salaire est de : " . $employe1->augmentation() . " €<br>";
