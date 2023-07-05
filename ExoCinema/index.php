<?php
spl_autoload_register(function ($class_name) {
    include 'classes/'. $class_name . '.php';
});

$clooney = new Realisateur("Clooney","George","Homme","6-05-1961");
$scifi = new Genre("Science-fiction");
$horror = new Genre("Horreur");
$starwars = new Film("Star Wars","22-04-1977","222","Shit happens in space",$clooney,$scifi);
$freddy = new Film("Freddy","22-04-1987","222","Shit happens in dreams",$clooney,$horror);
echo $clooney->getNom();
echo $clooney->getPrenom();
echo $clooney->getSexe();
echo $clooney->getBirth()->format('d m Y');
echo "<br>";
$scifi->getFilms();
$clooney->getFilmographie();
echo "$scifi $clooney";
