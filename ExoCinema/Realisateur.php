<?php
Class Realisateur extends Personne{
    public function construct(string $nom, string $prenom, string $sexe, string $birth){
        parent:: __construct($nom,$prenom,$sexe,$birth);
    }
}