<?php

Class Film{
    private string $_titre;
    private DateTime $_dateSortie;
    private int $_duree;
    private string $_resume;

    public function __construct(string $titre, string $dateSortie, int $duree, string $resume){
        $this->_titre = $titre;
        $this->_dateSortie = new DateTime($dateSortie);
        $this->_duree = $duree;
        $this->_resume = $resume;
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
}