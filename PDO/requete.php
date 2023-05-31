<?php

require_once('config.php');
require_once('Database.php');

class Requete extends Database
{
    public function execute($sql, $params = [])
    {
        $statement = $this->getPdo()->prepare($sql);
        $statement->execute($params);
        return $statement->fetchAll();
    }
}
//Requête numéro 1
echo "<h2>Réalisez la requête permettant d’afficher toutes les données de la table Carte</h2><br>";
$requete = new Requete();
$resultats = $requete->execute("SELECT * FROM carte");

foreach ($resultats as $resultat) {
    echo $resultat["Id_Carte"] . " "
        . $resultat["Nom"] . " "
        . $resultat["Descriptif"] . " "
        . $resultat["Id_Classe"] . " "
        . $resultat["Id_Rareté"]
        . "<br>";
}
echo "<hr>";

//Requête numéro 2
echo "<h2>Réalisez une requête permettant d’afficher le nom et le descriptif de la carte « Néant distordu »</h2><br>";
$requete = new Requete();
$resultats = $requete->execute("SELECT Nom,Descriptif FROM carte WHERE Nom='Néant distordu'");

foreach ($resultats as $resultat) {
    echo "Nom : " . $resultat["Nom"] . " | Descriptif : " . $resultat["Descriptif"] . "<br>";
}
echo "<hr>";

//Requête numéro 3
echo "<h2>Réalisez une requête permettant d’afficher le nom et le descriptif des cartes dont le niveau de rareté est épique</h2><br>";
$requete = new Requete();
$resultats = $requete->execute("SELECT carte.Nom,carte.Descriptif 
FROM carte 
INNER JOIN rarete ON carte.Id_rareté=rarete.Id_rareté
WHERE rarete.Nom='Epique'
");
foreach ($resultats as $resultat) {
    echo "Nom : " . $resultat["Nom"] . " | Descriptif : " . $resultat["Descriptif"] . "<br>";
}
echo "<hr>";

//Requête numéro 4
echo "<h2>Réalisez une requête permettant d’afficher le nom et le descriptif des cartes appartenant à la classe Voleur</h2><br>";
$requete = new Requete();
$resultats = $requete->execute("SELECT carte.Nom,carte.Descriptif 
FROM carte
INNER JOIN classe ON carte.Id_Classe=classe.Id_Classe
WHERE classe.Nom = 'voleur'
");
foreach ($resultats as $resultat) {
    echo "Nom : " . $resultat["Nom"] . " | Descriptif : " . $resultat["Descriptif"] . "<br>";
}

echo "<hr>";

//Requête numéro 5
echo "<h2>Réalisez une requête permettant d’afficher le nom et le descriptif des cartes dont la classe est voleur et dont le niveau de rareté est épique</h2><br>";
$requete = new Requete();
$resultats = $requete->execute("SELECT carte.Nom,carte.Descriptif 
FROM carte
INNER JOIN classe ON carte.Id_Classe=classe.Id_Classe
INNER JOIN rarete ON carte.Id_Rareté=rarete.Id_rareté
WHERE classe.Nom = 'voleur' AND rarete.Nom='Epique'
");
foreach ($resultats as $resultat) {
    echo "Nom : " . $resultat["Nom"] . " | Descriptif : " . $resultat["Descriptif"] . "<br>";
}

echo "<hr>";

//Requête numéro 6
echo "<h2>Réalisez une requête permettant d’afficher le nom et descriptif des cartes possédant le mot clé « Cri de guerre »</h2><br>";
$requete = new Requete();
$resultats = $requete->execute("SELECT carte.Nom,carte.Descriptif
FROM carte
INNER JOIN détenir ON détenir.Id_Carte=carte.Id_Carte
INNER JOIN mots_clés ON détenir.Id_Motscles=mots_clés.Id_Motscles
WHERE mots_clés.Nom = 'Cri de guerre'
");
foreach ($resultats as $resultat) {
    echo "Nom : " . $resultat["Nom"] . " | Descriptif : " . $resultat["Descriptif"] . "<br>";
}
