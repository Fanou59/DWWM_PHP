<?php
/*
Exercice : 
values est un tableau qui contient une vingtaine de valeurs entières comprises entre 10 et 100

Je dois retourner une chaine de caractères contenant toutes les valeurs qui sont des multiples de 3, séparées par des tirets.
Exemple :
$values=[17,27,44,10,93];
Doit afficher : 27-93

ATTENTION : On ne fera pas de concaténation ici, on cherchera à créer un tableau avec les valeurs retenues, puis à utiliser la méthode implode.

*/
$values = [10, 56, 28, 68, 48, 33, 57, 60, 25, 77, 61, 30, 17, 78, 46, 78, 77, 37, 84, 42, 32, 60, 31, 40, 44, 49, 100, 94, 40, 43, 25];

//J'écris une fonction pour vérifier sur la valeur est un multiple de 3
function multiple($value)
{
    if ($value % 3 == 0) {
        return $value;
    }
}
//avec la fonction array_filter je parcours le tableau et j'applique la fonction multiple
$multipleTrois = array_filter($values, 'multiple');

//ce qui me retourne toujours le même tableau donc je peux faire l'implode !
echo implode("-", $multipleTrois);
