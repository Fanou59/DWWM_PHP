<?php
include 'header.php';
include 'nav.php';

?>
<main>
    <h1>Exercice N°7 - Les fonctions</h1>
    <?php

    // Cette fonction a pour but d'afficher Hello World !.
    function helloWorld()
    {
        return 'Hello World !';
    }

    // Cette fonction a pour but d'afficher le texte reçu en parmètre
    function afficherMontexte($texte)
    {
        return $texte;
    }

    // Cette fonction doit renvoyer Hello World ! si le paramètre = Hello World ! sinon elle doit renvoyer Ce n'est pas Hello World !

    function hello($world)
    {
        if ($world == "Hello World !") {
            return $world;
        } else {
            echo "Ce n'est pas Hello World !";
        }
    }

    // Cette fonction doit vérifier la note d'un élève et retourne Admis si > 9 et Recalé si <= 9
    function calculNote($laNote)
    {
        if ($laNote > 9) {
            $resultat = 'Admis';
        } else {
            $resultat = 'Refusé';
        }
        return $resultat;
    }

    echo helloWorld() . "<hr>";
    $texte = afficherMontexte("Ceci est mon texte");
    echo $texte . "<hr>";

    $world = hello("Hello Toto !");
    echo $world . "<hr>";

    $reussi = calculNote(5);
    echo $reussi;
    ?>
</main>
<?php
include 'footer.php';
?>