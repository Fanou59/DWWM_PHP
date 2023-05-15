<?php

class Livres
{
    private string $titre;
    private string $auteur;
    private int $prix;

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
    public function __construct($titre, $auteur, $prix)
    {
        $this->auteur = $auteur;
        $this->titre = $titre;
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

$livre1 = new Livres("Le chat bottée", "Charles Perault", 16);
echo $livre1->afficher();
