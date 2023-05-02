<?php
include 'header.php';
include 'nav.php';

?>
<main>
    <h1>Exercice N°5</h1>
    <?php
    //tableau à 2 colonnes
    $fruits = [
        ["pomme", 12],
        ["banane", 8],
        ["citron", 12],
        ["poire", 1],
        ["kiwi", 16]
    ];

    // boucle for pour parcourir le tableau
    for ($i = 0; $i < 5; $i++) {
        // on affiche un S quand le nombre est plus grand que 1
        if ($fruits[$i][1] > 1) {
            echo "il y a " . $fruits[$i][1] . " " . $fruits[$i][0] . "s <br>";
        } else {
            echo "il y a " . $fruits[$i][1] . " " . $fruits[$i][0] .  "<br>";
        }
    }

    //Même chose avec un foreach
    foreach ($fruits as $fruit) {
        if ($fruit[1] > 1) {
            echo "il y a " . $fruit[1] . " " . $fruit[0] . "s <br>";
        } else {
            echo "il y a " . $fruit[1] . " " . $fruit[0] .  "<br>";
        }
    }
    ?>
</main>
<?php
include 'footer.php';
?>