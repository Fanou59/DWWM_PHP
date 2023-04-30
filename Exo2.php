<?php
include 'header.php';
include 'nav.php';

?>
<main>
    <h1>Exercice N°2</h1>
    <?php
    $heure = 13;
    echo "l'heure choisie est : " . $heure .
        "<br>";
    if ($heure >= 7 && $heure <= 12) {
        echo "C'est le matin";
    } elseif ($heure > 12 && $heure <= 14) {
        echo "C'est le midi";
    } elseif ($heure > 14 && $heure <= 18) {
        echo "C'est l'après-midi";
    } elseif ($heure > 18 && $heure <= 21) {
        echo "C'est le soir";
    } else {
        echo "C'est la nuit";
    }

    ?>
</main>
<?php
include 'footer.php';
?>