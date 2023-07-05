<?php
Class Acteur extends Personne{
    private array $_castings;

    public function __construct(string $nom, string $prenom, string $sexe, string $birth){
        parent::__construct($nom,$prenom,$sexe,$birth);
        $this->_castings = [];
    }

    public function ajoutCastings(string $film, string $role){
        $this->_castings [$film] = $role;
    }
    public function showCastings(){
        $result = "$this->_prenom $this->_nom a joué les rôles suivants :<br>";
        foreach($this->_castings as $film=>$role){
            $result .= "$film : $role <br>";
        }
        return $result;
    }
}