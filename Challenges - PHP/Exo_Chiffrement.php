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
function chiffrer($words, $keys)
{
    $alpha = 'abcdefghijklmnopqrstuvwxyz';

    foreach ($words as $word) {
        $motChiffre = ""; //initie une variable pour récupérer les lettres codées et en faire un mot

        for ($i = 0; $i < strlen($word); $i++) {
            $lettre = substr($word, $i, 1); // retourne chaque lettre du mot WORD
            $index = strpos($alpha, $lettre); // donne e = position 4 dans l'alphabet
            $affine = ($index * $keys[0] + $keys[1]) % 26; // j'applique la méthode AFFINE pour obtenir l'index dans l'alphabet
            // e = 4 => affine => e= 4*19 + 23 = 99 % 26 = 21 = e| donc $affine = 21
            $lettreCodee = $alpha[$affine - 1]; // je dois avoir e devient u
            $motChiffre .= $lettreCodee; //je mets chaque lettres trouvés dans la variable mot

        }
        $motsDePasseChiffres[] = $motChiffre; //le mot entre dans le tableau
    }
    return implode("-", $motsDePasseChiffres); // j'affiche les valeurs du tableau séparées par un tiret
}

$words = ['excitons', 'reconnue', 'froncera', 'frittage', 'laquasse', 'dodinant'];
$keys = [19, 23];

$newMotDePasse = chiffrer($words, $keys);
echo $newMotDePasse;
