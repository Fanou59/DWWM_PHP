<?php
include 'header.php';
include 'nav.php';

?>
<main>
    <h1>Exercice N°4</h1>
    <?php
    $jeuxVideo = ["JV1", "JV2", "JV3", "JV4", "JV5", "JV6", "JV7"];
    echo "J'affiche le jeux se trouvant dans la première case : " . $jeuxVideo[0] . "<br>";
    $nbJeux = count($jeuxVideo);
    echo "J'affiche maitenant le contenu du tableau, qui va contenir " . $nbJeux . " jeux vidéos : <br>";

    $i = 0;
    while ($i < $nbJeux) {
        echo $jeuxVideo[$i] . "<br>";
        $i++;
    }

    ?>
</main>
<?php
include 'footer.php';
?>