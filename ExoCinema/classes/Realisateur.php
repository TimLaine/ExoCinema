<?php
Class Realisateur extends Personne{
    private array $_filmographie;

    public function construct(string $nom, string $prenom, string $sexe, string $birth){
        parent:: __construct($nom,$prenom,$sexe,$birth);
        $this->_filmographie = [];
    }
    public function getFilmographie(){
        foreach ($this->_filmographie as $film){
            echo "$film <br>";
        }
    }
    public function ajoutFilm(Film $film){
        $this->_filmographie [] = $film;
    }
}