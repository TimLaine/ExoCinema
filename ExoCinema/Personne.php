<?php

Class Personne{
    private string $_nom;
    private string $_prenom;
    private string $_sexe;
    private DateTime $_birth;

    public function __construct(string $nom, string $prenom, string $sexe, string $birth){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_birth = new DateTime($birth);
    }

    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getSexe(){
        return $this->_sexe;
    }
    public function getBirth(){
        return $this->_birth;
    }
    public function setNom($nom){
        $this->_nom = $nom;
    }
    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }
    public function setSexe($sexe){
        $this->_sexe = $sexe;
    }
    public function setBirth($birth){
        $this->_birth = New DateTime($birth);
    }
}