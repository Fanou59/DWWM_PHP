<?php
/*
Une équipe de foot est composée de 11 joueurs.

Mission
En tant que coach de l’équipe, tu dois choisir les 11 meilleurs joueurs pour jouer le prochain match.

Règles
En entrée, dans un tableau « joueurs », tu as la forme du moment des joueurs. Chacun a une forme différente.

En sortie, il faut retenir la liste des joueurs retenus, dans l’ordre décroissant de la forme. Du + en forme au – en forme. Chaque numéro de joueur étant séparé par un tiret (-).

Imaginons pour une petite équipe de 3 joueurs, j’ai 5 joueurs qui ont les formes suivants : 22, 17, 12, 8, 24

Alors je vais retourner : 4-0-1 qui sont les joueurs les + en forme. Et je ne retourne pas 24-22-17.

La numérotation des joueurs commence à 0.
*/
$joueurs = [26, 29, 12, 13, 23, 20, 28, 14, 24, 5, 15, 7, 8, 1, 16, 27];

/*
* Trier les joueurs par ordre décroissant de force
* On garde les 11 meilleurs joueurs
* On récupère leur numéro (position dans le tableau)
* Affichage sous forme "n - n"
*/

rsort($joueurs);

for ($i = 0; $i <= 11; $i++) {
    $onze[] = $joueurs[$i];
}
echo array_search($onze, $joueurs);
// print_r($onze);
