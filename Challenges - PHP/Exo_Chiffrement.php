<?php
/*
Mission
Une entreprise fait appel à toi parce qu’elle souhaite chiffrer les mots de passe de ses utilisateurs.

Règles
* Pour cette mission tu décides d’utiliser le chiffrage affine.
* Tu as à ta disposition 2 clés numériques, contenues dans keys.
* Tous les mots de passe à chiffrer sont contenus dans words.
* Le chiffrage : pour chaque lettre du mot il faut prendre son index dans l’alphabet, le multiplier avec la première clé de chiffrement et additionner la deuxième clé. Avec le résultat de cette opération, on obtiendra l’index de la lettre chiffrée correspondante en calculant le reste de la division euclidienne par 26 (dimension de l’alphabet).
* À noter que les mots de passe ne contiennent que des lettres minuscules.

Ton objectif est de retourner la liste des mots de passe chiffrés séparés par des tirets.
*/
function parse($tabs)
{
    foreach ($tabs as $tab) {
        for ($i = 0; $i < strlen($tab); $i++) {
            //substr = je retourne la 1 lettre et ainsi $i de suite
            //que je mets dans un tableau $result
            $result[] = substr($tab, $i, 1);
        }
    }
    return $result;
}

$words = ['excitons', 'reconnue', 'froncera', 'frittage', 'laquasse', 'dodinant'];
$keys = [19, 23];
$alphabet = range("a", "z"); // créer un tableau de référence avec les lettres de l'alphabet

//Je parse le tableau $words pour extraire les lettres 
$parseWords = parse($words);

//Je recherche la correspondance entre les lettres du tableau WORDS et la clé du tableau ALPHABET
foreach ($parseWords as $parseWord) {
    $position[] = array_search($parseWord, $alphabet);
}

//Application de la méthode AFFINE en fonction du tableau de KEYS
for ($i = 0; $i < count($position); $i++) {
    $affines[] = $alphabet[($position[$i] * $keys[0] + $keys[1]) % 26]; //affiche la valeur correspondante

}
echo "<pre>";
print_r($affines);
echo "</pre>";


echo "<br>";
//juste une boucle pour afficher les lettres à la suite des autres (sera supprimée)
foreach ($affines as $affine) {
    echo $affine;
}
/*
$affine = ['a','b','c','d','e']
Je peux récupérer la longueur du mot dans $words avec une boucle FOREACH + STRLEN
mais comment afficher cela ?
J'aimerai obtenir l'affichage des strlen($word) (soit 8) premiers index de $affine.

**** A partir d'ici c'est du test
*/

// comment obtenir un tableau de $transform en utilisant la longueur de chaque mot de $words ?

echo '<br>';
echo implode("-", $words);
echo '<hr>';

// compte le nombre de lettres par mots
for ($i = 0; $i < count($words); $i++) {
    foreach ($words as $word) {
        $max = strlen($word);
    }
    echo $max;
}
// il faudrait pouvoir découper $transform en fonction du nombre de lettre
