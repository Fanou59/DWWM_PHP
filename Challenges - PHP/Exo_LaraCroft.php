<?php
/*
Mission
Lara Croft a en sa possession un message secret. Si elle déchiffre, elle pourra accéder à un trésor légendaire…

Règles
Tu as en ta possession 3 informations :

words contient quelques mots
translations contient les traductions respectives de chacun des mots de words dans le langage secret
secret contient le mot à déchiffrer
Important : chaque lettre est toujours traduite de la même façon.

Tu dois retourner :

La traduction du mot secret.
*/

/*Fonction pour séparer les lettres des mots des tableaux
* J'obtiens un tableau de lettre [0]=>a
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
//Les données de base :
$words = ['surdorer', 'decida', 'taquerez'];
$translations = ['zfphmpnp', 'hndkht', 'gtafnpne'];
$secret = 'zfpztfgz';

//Je recherche la position (clè) de la lettre dans le tableau de translation
for ($i = 0; $i < strlen($secret); $i++) {
    $positions[] = array_search($secret[$i], parse($translations));
}
//J'affiche la valeur correspondante à la clè
for ($i = 0; $i < count($positions); $i++) {
    print_r((parse($words)[$positions[$i]]));
}
