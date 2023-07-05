<?php
Class Casting{
    private Acteur $_acteur;
    private Role $_role;
    private Film $_film;

    public function __construct(Acteur $acteur,Role $role,Film $film){
        $this->_acteur = $acteur;
        $this->_role = $role;
        $this->_film = $film;
        $this->_acteur->ajoutCastings($this->_role, $this->_film);
        $this->role->ajoutCastings($this->acteur, $this->_film);
        $this->film->ajoutCastings($this->_role, $this->acteur);
    }
}