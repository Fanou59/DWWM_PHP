<?php
include 'header.php';
include 'nav.php';

?>
<main>
    <h1>Exercice N°6</h1>
    <?php

    $chansons = [
        ['Titre' => 'Chanson 1', 'Artiste' => 'Moi', 'Album' => "Album de l'année", 'Année' => 2023],
        ['Titre' => 'Chanson 2', 'Artiste' => 'Moi2', 'Album' => "Album de l'année2", 'Année' => 2024],
        ['Titre' => 'Chanson 3', 'Artiste' => 'Moi3', 'Album' => "Album de l'année3", 'Année' => 2025],


    ];


    foreach ($chansons as $chanson) {
        echo "Titre : " . $chanson["Titre"] . "<br>";
        echo "Artiste : " . $chanson["Artiste"] . "<br>";
        echo "Album : " . $chanson["Album"] . "<br>";
        echo "Année : " . $chanson["Année"] . "<br><hr>";
    }

    ?>
</main>
<?php
include 'footer.php';
?>