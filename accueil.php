<!-- Page de présentation en mode Bonjour et welcome on this page -->
<?php
include 'header.php';
include 'nav.php';
?>
<h1>Page d'accueil</h1>
<?php
echo '<h2>Welcome ' . $_COOKIE['login'] . ' sur ta page d\'accueil ';


?>
<!-- Mise en place d'un bouton de deconnexion qui renvoit vers logout.php-->
<h2>Souhaitez-vous vous déconnecter ?</h2>
<form action="logout.php" method="POST">
    <button type="submit">Deconnexion</button>
</form>

<?php include 'footer.php' ?>