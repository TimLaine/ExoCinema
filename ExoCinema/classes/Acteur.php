<?php
Class Acteur extends Personne{
    public function __construct(string $nom, string $prenom, string $sexe, string $birth){
        parent::__construct($nom,$prenom,$sexe,$birth);
    }
}