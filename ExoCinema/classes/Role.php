<?php

Class Role{
    private string $_nom;
    private array $_castings;

    public function __construct($nom){
        $this->_nom = $nom;
        $this->_castings = [];

    }

    public function getNom(){
        return $this->_nom;
    }
    public function setNom($nom){
        $this->_nom = $nom;
    }
    // This function gives the possibility to array push both the [key] and the value at once
    public function ajoutCastings(string $acteur,string $film){
        $this->_castings[$film] = $acteur;
    }
    // Simple foreach to show the list, as requested. It uses the double entry array
    public function showCastings(){
        $result = "Voici la liste des acteurs ayant interprétés $this->_nom :<br>";
        foreach($this->_castings as $film=>$acteur){
            $result .= "$film : $acteur <br>";
        }
        return $result;
    }
    public function __toString(){
        $result = "$this->_nom";
        return $result;
    }
}