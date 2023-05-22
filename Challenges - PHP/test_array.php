<?php

$array = ['test', 'bonjour'];
$keys = [19, 2];
$alphabet = range("a", "z"); // créer un tableau de référence avec les lettres de l'alphabet


function parse($tab)
{
    for ($i = 0; $i < strlen($tab); $i++) {
        $result[] = substr($tab, $i, 1);
    }
    return $result;
}


/*
* je prends le tableau d'origine
* j'applique la modification sur le 1er index du tableau origine[0]
* je créer un nouveau tableau avec les lettres changées
$origine = ['test'] => PARSE => AFFINE => $new = ['rose']
*/
$change = parse($array[0]); //parse par lettre le tableau d'entrée
var_dump($change);
echo '<br>';
// on recherche la position dans l'alphabet
foreach ($change as $value) {
    $position[] = array_search($value, $alphabet);
}
var_dump($position);
echo '<br>';
//on va appliquer la méthode AFFINE
for ($i = 0; $i < count($position); $i++) {
    $affines[] = $alphabet[($position[$i] * $keys[0] + $keys[1]) % 26]; //affiche la valeur correspondante

}
echo implode("", $affines); // assemble les lettres sur mots
echo '<hr>';


$change2 = parse($array[1]);
foreach ($change2 as $value) {
    $position2[] = array_search($value, $alphabet);
}
for ($i = 0; $i < count($position2); $i++) {
    $affines1[] = $alphabet[($position2[$i] * $keys[0] + $keys[1]) % 26]; //affiche la valeur correspondante

}
echo implode("", $affines1);
