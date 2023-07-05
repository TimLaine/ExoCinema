<?php
class Acteur extends Personne{
    private array $_castings;

    public function __construct(string $nom, string $prenom, string $sexe, string $birth){
        parent::__construct($nom,$prenom,$sexe,$birth);
        $this->_castings = [];
    }

    public function ajoutCastings(Casting $casting){
        $this->_castings [] = $casting;
    }
    public function showCastings(){
        $result = $this ." a joué les rôles suivants :<br>";
        foreach($this->_castings as $casting){
            $result .= $casting->getFilm()." ".$casting->getRole()."<br>";
        }
        return $result;
    }
}