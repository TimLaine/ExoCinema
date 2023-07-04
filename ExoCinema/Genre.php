<?php

Class Genre{
    private string $_nom;

    public function __construct($nom){
        $this->_nom = $nom;
    }

    public function getNom(){
        return $this->_nom;
    }
    public function setNom($nom){
        $this->_nom = $nom;
    }
}