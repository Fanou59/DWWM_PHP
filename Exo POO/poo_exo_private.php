<?php

include 'classes.php';

$livre1 = new Livres("Le chat bottée", "Charles Perault", 16);
echo $livre1->afficher();
echo "<hr>";
$employe2 = new Employee(12984, "Durant", "Paul", "21-12-1980", "20-01-2003", 3200);
echo $employe2->afficher();
