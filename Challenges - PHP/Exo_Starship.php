<?php
/*
Mission
Tu es aux commandes d’un vaisseau spatial, en mission pour protéger une planète reculée, très convoitée dans un conflit galactique aux enjeux incommensurables…
Tu fais face à une attaque de vaisseaux drones.

Règles
Les vaisseaux qui attaquent ont chacun une résistance représentée par un nombre entier compris entre 11 et 9999.
Tu dois régler correctement la puissance de tes armes pour faire feu sur chaque vaisseau et les détruire instantanément.

Voici les règles :

Si le vaisseau a une résistance inférieure à 100, alors la puissance doit être égale à la résistance divisée par 10, arrondie à l’entier supérieur.
Si le vaisseau a une résistance inférieure à 1.000, alors la puissance doit être égale à 3 fois la résistance divisée par 100, arrondie à l’entier supérieur. Une puissance fixe de 25 s’ajoute également.
Si le vaisseau a une résistance inférieure à 10.000, alors la puissance doit être égale à 5 fois la résistance divisée par 1.000, arrondie à l’entier supérieur. Une puissance fixe de 80 s’ajoute également.
Précision : suite à plusieurs retours sur le challenge, l’arrondi inférieur doit être appliqué seulement sur la division de la résistance. Par exemple, pour la résistance inférieure à 1000, la puissance sera de 25 + 3 * arrondi_superieur(résistance).

Tu dois retourner :

La somme de la puissance exacte nécessaire à abattre tous les vaisseaux ennemis.
*/

function puissance($array)
{
    $puissanceTotale = 0; //initie la puissance exacte à 0
    foreach ($array as $value) { //parcours le tableau des vaisseaux
        //conditions sur les règles
        if ($value < 100) {
            $puissance = ceil($value / 10);
        } elseif ($value < 1000) {
            $puissance = 25 + 3 * ceil($value / 100);
        } else {
            $puissance = 80 + 5 * ceil($value / 1000);
        }

        $puissanceTotale += $puissance; //additionne chaque puissance nécessaire à chaque tour de tableau
    }
    return $puissanceTotale;
}

$ships = [598, 539, 6687, 276, 6559, 17, 612, 218, 39, 795, 3300, 656, 4125, 1318, 9699, 843, 778, 3645, 58, 82, 933, 98, 508, 2236, 19, 86, 40, 706, 9894, 666, 7150, 42, 68, 8518, 654, 683, 65];
echo puissance($ships);
