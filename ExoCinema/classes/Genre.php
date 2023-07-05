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
    public function getFilms(){
        foreach ($this->_films as $film){
            echo "$film <br>";
        };
    }
    public function setNom($nom){
        $this->_nom = $nom;
    }
    public function ajoutFilm(Film $film){
        $this->_films [] = $film;
    }
}