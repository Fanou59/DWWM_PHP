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

class employee
{
    public int $matricule;
    public string $nom;
    public string $prenom;
    public string $DateDeNaissance;
    public string $DateEmbauche;
    public int $salaire;

    public function __construct($matricule, $nom, $prenom, $DateDeNaissance, $DateEmbauche, $salaire)
    {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->DateDeNaissance = $DateDeNaissance;
        $this->DateEmbauche = $DateEmbauche;
        $this->salaire = $salaire;
    }
}

$livreA = new livres('auteur', 'titre', 34);
$livreB = new livres('Jean de la Fontaine', 'La cigale et la fourmi', 39);
$livreA->afficher();
$livreB->afficher();
