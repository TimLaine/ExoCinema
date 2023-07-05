<?php
spl_autoload_register(function ($class_name) {
    include 'classes/'. $class_name . '.php';
});

$clooney = new Realisateur("Clooney","George","Homme","6-05-1961");
echo $clooney->getNom();
echo $clooney->getPrenom();
echo $clooney->getSexe();
echo $clooney->getBirth()->format('d m Y');