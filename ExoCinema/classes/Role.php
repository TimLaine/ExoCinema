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
}