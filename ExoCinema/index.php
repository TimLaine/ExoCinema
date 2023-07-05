<?php
include "Personne.php";
include "Acteur.php";
include "Realisateur.php";
include "Casting.php";
include "Film.php";
include "Genre.php";
include "Role.php";
$clooney = new Realisateur("Clooney","George","Homme","6-05-1961");
echo $clooney->getNom();
echo $clooney->getPrenom();
echo $clooney->getSexe();
echo $clooney->getBirth()->format('d m Y');