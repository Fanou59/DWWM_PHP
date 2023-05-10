<!-- Page qui doit pouvoir gérer la deconnexion -->

<?php
include 'header.php';
include 'nav.php';

//fermeture de session
session_abort();
echo '<h2>Au revoir</h2>';


include 'footer.php';
?>