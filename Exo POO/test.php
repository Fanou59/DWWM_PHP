<!--
Calculer l'age de l'employé
La date d'aujourd'hui - la date de naissance
1/ Définir la date d'aujourd'hui ?
2/ Faire la diff entre la date auj et date de naissance
3/ afficher l'âge

$now = 
date()-> string -> date ("") -> date ("date d'aujourd'hui") -> jour /mois /année
date("D-M-Y")


  -->

<?php
$DateDeNaissance = "04-08-1976";
$now = date("Y-m-d");
// $age = $now - $DateDeNaissance;
$age = date_diff(date_create($now), date_create($DateDeNaissance));
echo $now . "<br>";
echo $DateDeNaissance . "<br>";
echo $age->format("%y");

// echo $now;

?>



<!-- 
Si l'ancienneté est < 5 ans alors salaire + 2%
Si l'ancienneté est < 10 ans alors salaire + 5%
Si l'ancienneté est > 10 ans alors salaire + 10%

Variable ANCIENNETE
Variable Salaire
ancienneté > grace à la méthode anciennete()
salaire > il est donné par la classe (le constructeur) = $this

If (condition){

} else {
  
}

 -->