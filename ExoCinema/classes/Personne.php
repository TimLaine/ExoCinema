<?php

Class Personne{
    protected string $_nom;
    protected string $_prenom;
    protected string $_sexe;
    protected DateTime $_birth;

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
    public function __toString(){
        return "$this->_prenom $this->_nom";
    }
}