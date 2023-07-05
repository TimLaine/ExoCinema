<?php
Class Acteur extends Personne{
    private array $_castings;

    public function __construct(string $nom, string $prenom, string $sexe, string $birth){
        parent::__construct($nom,$prenom,$sexe,$birth);
        $this->_castings = [];
    }
}