<?php
include 'header.php';
include 'nav.php';
?>

<main>
    <h1>Exercice N°8 - Exo fonction avec tableau</h1>
    <?php
    // $mode = "jeu de combat";
    $jeux = [
        "Mortal Kombat" => "jeu de combat",
        "Street Fighter" => "jeu de combat",
        "Final Fantasy" => "jeu de rôle",
        "The Legend of Zelda" => "jeu d'aventure",
        "Tekken" => "jeu de combat",
        "Super Mario Bros" => "jeu de plateforme"
    ];

    //Je compte rapidement le nombre d'occurence de 'jeu de combat'
    // $compte = array_count_values($jeux);
    // echo "il y a " . $compte[$mode] . " jeux vidéo avec le mode combat <br><hr>";


    // Fonction qui doit retourner le nombre de jeux videos comportant le mode "jeu de combat"
    function compter($jeux)
    {
        $nb = 0; // Initie la variable nb à zéro.
        foreach ($jeux as $jeu) {
            if ($jeu == "jeu de combat") {
                $nb++; //on incrémente de +1 à chaque fois qu'il y a jeu de combat dans le tablea.
            }
        }
        return $nb;
    }
    echo "Il y a " . compter($jeux) . " jeux de combat dans la liste.<br><hr>";

    /*Même fonction que précedemment mais en utilisant STRPOSE().
    la fonction prendra de ce fait 2 paramètres : le tableau et la chaine de caractères à rechercher
    */
    function compterPose($jeux, $str)
    {
        $nb = 0;
        foreach ($jeux as $jeu) {
            if (strpos($jeu, $str) !== false) {
                $nb++;
            }
        }
        return $nb;
    }
    ?>
    <h2>Je fais la même chose avec strpos :</h2>

    <form action="#" method="GET">
        <label for="Choix du mode">Choix du mode :</label>
        <select name="mode" id="mode">
            <option value="jeu de combat">Jeu de combat</option>
            <option value="jeu de rôle">Jeu de rôle</option>
            <option value="jeu d'aventure">Jeu d'aventure</option>

        </select>
        <button type="submit">Envoyer</button>
    </form>
    <?php

    $recherche = "";
    //Vérification que l'utilisateur a choisi un mode.
    if (!empty($_GET['mode'])) {
        $recherche = $_GET['mode']; // Récupèration de l'option choisie dans le formulaire
        $combat = compterPose($jeux, $recherche);
        //Condition pour afficher le pluriel de jeu(x) s'il y a plus de 1 occurence.
        if ($combat > 1) {
            echo "Il y a " . $combat . " jeux dans la catégorie " . '"' . $recherche . '"' . " dans la liste.<br><hr>";
        } else {
            echo "Il y a " . $combat . " jeu dans la catégorie " . '"' . $recherche . '"' . " dans la liste.<br><hr>";
        }
    } else {
        echo "Veuillez choisir un mode";
    }

    // $recherche = $_GET['mode']; 


    ?>

</main>

<?php
include 'footer.php';
?>