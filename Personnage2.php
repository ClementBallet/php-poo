<?php

/**
 * Exemple de classe avec constructeur avec typage des variables et des méthodes
 */
class Personnage2
{
    public $nom;

    public function __construct ( $nom )
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getNom ()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom ( $nom )
    {
        $this->nom = $nom;
    }
}