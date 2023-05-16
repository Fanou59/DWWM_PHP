<?php
class Livres
{
    private string $titre;
    private string $auteur;
    private int $prix;

    public function __construct($titre, $auteur, $prix)
    {
        $this->auteur = $auteur;
        $this->titre = $titre;
        $this->prix = $prix;
    }

    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
    public function getAuteur()
    {
        return $this->auteur;
    }
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }
    public function getPrix()
    {
        return $this->prix;
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }


    public function afficher()
    {
        $h = 'Titre du livre : ' . $this->getTitre() . '<br>';
        $h .= 'Auteur du livre : ' . $this->getAuteur() . '<br>';
        $h .= 'Prix du livre : ' . $this->getPrix() . ' €<br>';
        return $h;
    }
}

class Employee
{
    private int $matricule;
    private string $nom;
    private string $prenom;
    private string $DateDeNaissance;
    private string $DateEmbauche;
    private int $salaire;



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
    private function age()
    {
        $ceJour = date("Y-m-d");
        $diff = date_diff(date_create($this->DateDeNaissance), date_create($ceJour));
        return $diff->format("%y");
    }

    //Méthode pour calculer l'ancienneté de l'employé
    private function anciennete()
    {
        $cejour = date("Y-m-d");
        $diff = date_diff(date_create($this->DateEmbauche), date_create($cejour));
        return $diff->format('%y');
    }
    //Méthode pour calculer l'augmentation de l'employé
    /**
     * Summary of augmentation
     * @return float
     */
    private function augmentation()
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

    /**
     * @return 
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param  $prenom 
     * @return self
     */
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * @return 
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param  $nom 
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return 
     */
    public function getMatricule(): int
    {
        return $this->matricule;
    }

    /**
     * @param  $matricule 
     * @return self
     */
    public function setMatricule(int $matricule): self
    {
        $this->matricule = $matricule;
        return $this;
    }

    /**
     * @return 
     */
    public function getDateDeNaissance(): string
    {
        return $this->DateDeNaissance;
    }

    /**
     * @param  $DateDeNaissance 
     * @return self
     */
    public function setDateDeNaissance(string $DateDeNaissance): self
    {
        $this->DateDeNaissance = $DateDeNaissance;
        return $this;
    }

    /**
     * @return 
     */
    public function getDateEmbauche(): string
    {
        return $this->DateEmbauche;
    }

    /**
     * @param  $DateEmbauche 
     * @return self
     */
    public function setDateEmbauche(string $DateEmbauche): self
    {
        $this->DateEmbauche = $DateEmbauche;
        return $this;
    }

    /**
     * @return 
     */
    public function getSalaire(): int
    {
        return $this->salaire;
    }

    /**
     * @param  $salaire 
     * @return self
     */
    public function setSalaire(int $salaire): self
    {
        $this->salaire = $salaire;
        return $this;
    }
    public function afficher()
    {
        $h = "Matricule : " . $this->matricule . "<br>";
        $h .= "Nom : " . $this->nom . "<br>";
        $h .= "Prénom : " . $this->prenom . "<br>";
        $h .= "Date de naissance : " . $this->DateDeNaissance . "<br>";
        $h .= "votre age est de : " . $this->age() . " ans<br>";
        $h .= "Date d'embauche : " . $this->DateEmbauche . "<br>";
        $h .= "Salaire : " . $this->salaire . " €<br>";
        $h .= "Votre nouveau salaire est de : " . $this->augmentation() . "€<br>";
        return $h;
    }
}
