<?php
include 'header.php';
include 'nav.php';

?>
<main>
    <h1>Exercice N°3</h1>
    <?php
    $note = 9;
    echo "la note choisie est : " . $note . "<br>";
    switch ($note) {
        case ($note >= 16):
            echo "Très bien";
            break;
        case ($note >= 14 && $note < 16):
            echo "bien";
            break;
        case ($note >= 12 && $note < 14):
            echo "Assez bien";
            break;
        case ($note >= 10 && $note < 12):
            echo "Passable";
            break;
        default:
            echo 'insuffisant';
    }

    ?>
</main>
<?php
include 'footer.php';
?>