<?php

Class Film{
    private string $_titre;
    private DateTime $_dateSortie;
    private int $_duree;
    private string $_resume;
    private string $_realisateur;
    private array $_acteurs;

    public function __construct(string $titre, string $dateSortie, int $duree, string $resume, string $realisateur){
        $this->_titre = $titre;
        $this->_dateSortie = new DateTime($dateSortie);
        $this->_duree = $duree;
        $this->_resume = $resume;
        $this->_realisateur = $realisateur;
        $this->_acteurs = [];
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
    public function getActeurs(){
        return $this->_acteurs;
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
    public function setActeurs($acteurs){
        $this->_acteurs = $acteurs;
    }
}