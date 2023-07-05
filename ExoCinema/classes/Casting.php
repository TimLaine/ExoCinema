<?php
Class Casting{
    private Acteur $_acteur;
    private Role $_role;
    private Film $_film;

    public function __construct(Acteur $acteur,Role $role,Film $film){
        $this->_acteur = $acteur;
        $this->_role = $role;
        $this->_film = $film;
        $this->_acteur->ajoutCastings($this);
        $this->_role->ajoutCastings($this);
        $this->_film->ajoutCastings($this);
    }

    public function getActeur()
    {
        return $this->_acteur;
    }

   public function getRole()
    {
        return $this->_role;
    }

    public function getFilm()
    {
        return $this->_film;
    }
}