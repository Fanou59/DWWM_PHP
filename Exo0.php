<?php
include 'header.php';
include 'nav.php';

?>
<main>
    <h1>Exercices provenant de WayToLearnX</h1>
    <h2>Exercice 1</h2>
    <p>Écrivez un programme pour afficher le nombre, de 4 à 12 en utilisant la boucle PHP. Vous pouvez utiliser soit la boucle « for » ou « while »</p>

    <?php
    for ($i = 4; $i <= 12; $i++) {
        echo $i . '<br>';
    }
    ?>
    <hr>
    <h2>Exercice 2</h2>
    <p>Écrivez un programme pour afficher des nombres de 10 à 1 en utilisant une fonction récursive.</p>

    <?php
    function recursive()
    {
        //je définis une variable statique
        static $arg = 10;
        //affichage de la variable 
        echo $arg . "<br>";
        //décrément cette variable de 1
        $arg--;
        //vérification que la variable est sup égale à 1 et si OUI alors je rappelle la fonction.
        if ($arg >= 1) {
            recursive();
        }
    }
    recursive();
    ?>
    <hr>
    <h2>Exercice 3</h2>
    <p>Modifier le code ci-dessous pour calculer la moyenne des notes.</p>

    <?php
    $note_maths = 15;
    $note_francais = 12;
    $note_histoire_geo = 9;
    $moyenne = $note_maths + $note_francais + $note_histoire_geo;
    echo 'La moyenne est de ' . $moyenne / 3 . ' / 20.';
    ?>

</main>
<?php
include 'footer.php';
?>