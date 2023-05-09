<?php
include 'header.php';
include 'nav.php';
?>

<main>
    <h1>Exercice N°9 - Les erreurs</h1>

    <?php
    $a = 5;
    $b = 10;
    $c = $a + $b;
    echo "La somme de  " . $a . "  et " . $b . " est " . $c;
    ?>

    <hr>

    <?php

    // Call to undefined function
    echo resultat(5, 2);

    function resultat($a, $b)
    {
        $somme = $a + $b;
        return "Le résultat est : " . $somme;
    }

    ?>



</main>

<?php
include 'footer.php';
?>