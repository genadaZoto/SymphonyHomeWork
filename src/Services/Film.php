<?php
namespace App\Services;

class Film{
    public $titre;
    public $auteur;

    function __construct ($titre, $auteur) {
        $this->titre = $titre;
        $this->auteur = $auteur;
    }
}
