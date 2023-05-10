<!-- Page qui doit traiter le formulaire de la page login.php 
attention à bien gérer la faille XSS 
Cette page doit rediriger vers la page accueil.php -->


<?php
include 'header.php';
include 'nav.php';

//on démarre la session de connexion
session_start();

//on teste si les 2 champs du formulaires sont renseignés
if (!empty($_POST['login']) && !empty($_POST['password'])) {
    //protection contre l'injection XSS
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    //on set la session + écriture du cookie afin de récupérer le login de l'utilisateur sur la page d'accueil
    $_SESSION['login'] = $login;
    setcookie("login", $login);
    //on redirige l'utilisateur sur la page d'accueil
    header('Location: accueil.php');
} else {
    //si les champs ne sont pas ok alors on affiche un message d'alerte puis on réaffiche le formulaire
    echo 'Veuillez renseigner votre identifiant et/ou votre mot de passe <br>';

    include 'form_cnx.php';
}

include 'footer.php';
?>