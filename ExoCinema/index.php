<?php
spl_autoload_register(function ($class_name) {
    include 'classes/'. $class_name . '.php';
});

$lucas = new Realisateur("Lucas","George","Homme","14-05-1944");

$keaton = new Acteur ("Keaton","Michael","Homme","12-07-1975");
$hamill = new Acteur ("Hamill","Mark","Homme","25-09-1951");
$fisher = new Acteur ("Fisher","Carrie","Femme","21-10-1956");
$ford = new Acteur ("Ford","Harrison","Homme","13-07-1942");

$scifi = new Genre("Science-fiction");
$horror = new Genre("Horreur");

$starwars = new Film("Star Wars","22-04-1977","222","Shit happens in space",$lucas,$scifi);
$nightmare = new Film("Nightmare on Elm Street","22-04-1987","222","Shit happens in dreams",$lucas,$horror);
$nightmare2 = new Film("Nightmare on Elm Street 2 : Le Retour","22-04-1995","222","Shit happens in dreams again",$lucas,$horror);

$luke = new Role("Luke Skywalker");
$leia = new Role("Leia Organa");
$han = new Role("Han Solo");
$freddy = new Role("Freddy Krueger");
$lastgirl = new Role("The Last Girl");
$stoner = new Role("The Stoner");

$castsw1 = new Casting ($hamill,$luke,$starwars);
$castsw2 = new Casting ($fisher,$leia,$starwars);
$castsw3 = new Casting ($ford,$han,$starwars);
$castnight1 = new Casting ($hamill,$freddy,$nightmare);
$castnight2 = new Casting ($fisher,$lastgirl,$nightmare);
$castnight3 = new Casting ($ford,$stoner,$nightmare);
$castretour1 = new Casting ($fisher,$freddy,$nightmare2);
$castretour2 = new Casting ($ford,$lastgirl,$nightmare2);
$castretour3 = new Casting ($hamill,$stoner,$nightmare2);

// echo $lucas->getNom();
// echo $lucas->getPrenom();
// echo $lucas->getSexe();
// echo $lucas->getBirth()->format('d m Y');
// echo "<br>";
// echo $scifi->showFilms();
// echo $lucas->showFilmographie();
// echo "$scifi $lucas";
// echo "<br>";
// echo $keaton->showCastings();
// echo "<br>";
echo $starwars->showCastings();
echo "<br>";
echo $freddy->showCastings();
echo "<br>";
echo $hamill->showCastings();
echo "<br>";
echo $starwars->showInfo();
// echo "<br>";
// echo $lucas->showFilmographie();
// echo "<br>";
// echo $horror->showFilms();
