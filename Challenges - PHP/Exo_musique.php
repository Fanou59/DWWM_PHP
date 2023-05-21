<?php
$notes = ['Do', 'Fa', 'Re', 'La', 'Si', 'Mi', 'Sol'];
$music = 'Sol,Mi,La,La,Si,Fa,Do,Mi,Fa,Fa,Sol,Fa,Mi,Si,Si,Si,La,Do,La,Do,Mi,Fa,Do,Do,Do,Do,La,Do,Sol,Fa,Fa,Fa,Sol,La,Fa,Fa,Sol,Mi,Mi,Mi,Sol';

//je mets $music dans un tableau
$tabs = explode(",", $music);

//je parcours le tableau de $notes
foreach ($notes as $note) {
    //j'initie la variable pour compter le nb d'occurences
    $nb = 0;

    //je parcours le tableau de music
    foreach ($tabs as $tab) {
        //Je vérifie si la note de musique est la même que dans le tableau de notes
        if ($tab == $note) {
            $nb++;
        }
    }

    echo $nb . ",";





    // var_dump($nb);
}
// for ($i = 0; $i <= 7; $i++) {
//     echo $nb . ",";
// }
