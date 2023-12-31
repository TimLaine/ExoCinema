<?php

Class Film{
    private string $_titre;
    private DateTime $_dateSortie;
    private int $_duree;
    private string $_resume;
    private Realisateur $_realisateur;
    private Genre $_genre;
    private array $_castings;

    public function __construct(string $titre, string $dateSortie, int $duree, string $resume, Realisateur $realisateur, Genre $genre){
        $this->_titre = $titre;
        $this->_dateSortie = new DateTime($dateSortie);
        $this->_duree = $duree;
        $this->_resume = $resume;
        $this->_realisateur = $realisateur;
        $this->_genre = $genre;
        $this->_castings = [];
        $this->_realisateur->ajoutFilm($this);
        $this->_genre->ajoutFilm($this);
    }
    public function getTitre(){
        return $this->_titre;
    }
    public function getDateSortie(){
        return $this->_dateSortie;
    }
    public function getDuree(){
        return $this->_duree;
    }
    public function getResume(){
        return $this->_resume;
    }
    public function getRealisateur(){
        return $this->_realisateur;
    }
    public function getCastings(){
        return $this->_castings;
    }
    public function getGenre(){
        return $this->_genre;
    }
    public function setTitre($titre){
        $this->_titre = $titre;
    }
    public function setDateSortie($dateSortie){
        $this->_dateSortie = new DateTime ($dateSortie);
    }
    public function setDuree($duree){
        $this->_duree = $duree;
    }
    public function setResume($resume){
        $this->_resume = $resume;
    }
    public function setRealisateur($realisateur){
        $this->_realisateur = $realisateur;
    }
    public function setGenre($_genre){
        $this->_genre = $_genre;
    }
    public function ajoutCastings(Casting $casting){
        $this->_castings [] = $casting;
    }
    public function showCastings(){
        $result = "Le casting du film $this :<br>";
        foreach($this->_castings as $casting){
            $result .= $casting->getRole(). " : " .$casting->getActeur(). "<br>";
        }
        return $result;
    }
    public function showInfo(){
        $result = "<h1>$this->_titre</h1>";
        $result .= "Date de sortie du film : ". $this->_dateSortie->format('d m Y'). "<br>";
        $result .= "Réalisé par $this->_realisateur <br>";
        $result .= "$this->_titre est considéré comme faisant partie du genre $this->_genre. <br>";
        $result .= "<h2>Casting</h2><ul>";
        foreach($this->_castings as $casting){
            $result .= "<li>".$casting->getRole()." : ". $casting->getActeur(). "</li>";
        }
        $result .= "</ul>";
        return $result;
    }
    public function __toString(){
        return "$this->_titre (". $this->_dateSortie->format('Y') .")";
    }
}