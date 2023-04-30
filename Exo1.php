<?php
include 'header.php';
include 'nav.php';

?>
<main>
    <h1>Exercice N°1</h1>
    <?php
    $note = 9;
    echo "la note est : " . $note . "<br>";
    if ($note >= 10) {
        echo 'Bravo, vous avez réussi !';
    } else {
        echo "Dommage, vous n'avez pas réussi :(";
    }

    ?>
</main>
<?php
include 'footer.php';
?>