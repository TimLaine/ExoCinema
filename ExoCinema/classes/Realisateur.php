<?php
Class Realisateur extends Personne{
    private array $_filmographie;

    public function construct(string $nom, string $prenom, string $sexe, string $birth){
        parent:: __construct($nom,$prenom,$sexe,$birth);
        $this->_filmographie = [];
    }
}