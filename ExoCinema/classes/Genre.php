<?php

Class Genre{
    private string $_nom;
    private array $_films;
    public function __construct($nom){
        $this->_nom = $nom;
        $this->_films = [];
    }
    public function getNom(){
        return $this->_nom;
    }
    public function setNom($nom){
        $this->_nom = $nom;
    }
    public function ajoutFilm(Film $film){
        $this->_films [] = $film;
    }
    public function __toString(){
        $result = "";
        $result .= "$this->_nom";
        return $result;
    }
    public function showFilms(){
        $result = "Les films du genre $this->_nom sont :<br>";
        foreach($this->_films as $film){
            $result .= "$film <br>";
        }
        return $result;
    }
}