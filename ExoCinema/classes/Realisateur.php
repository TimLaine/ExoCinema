<?php
Class Realisateur extends Personne{
    private array $_filmographie;

    public function construct(string $nom, string $prenom, string $sexe, string $birth){
        parent:: __construct($nom,$prenom,$sexe,$birth);
        $this->_filmographie = [];
    }
    public function showFilmographie(){
        $result = "$this->_prenom $this->_nom a réalisé les films suivant :<br>";
        foreach ($this->_filmographie as $film){
            $result .= "$film <br>";
        }
        return $result;
    }
    public function ajoutFilm(Film $film){
        $this->_filmographie [] = $film;
    }
}