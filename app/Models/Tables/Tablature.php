<?php

/**
*
* Tablature
*
* This class was generated by a script. Please be careful changing it.
* Regenerate it will erase all changes!
*/

namespace App\Models\Tables;

use Helpers\DB\Entity;

class Tablature extends Entity {
    public $titre;     // varchar(255)
    public $album;     // varchar(255)
    public $cheminTab;     // varchar(255)
    public $dateAjout;     // datetime
    public $idArtiste;     // int
    public $idGenre;     // int
    public $idInstrument;     // int

    public function __construct(
        $titre = "",
        $album = "",
        $cheminTab = "",
        $dateAjout = "",
        $idArtiste = "",
        $idGenre = "",
        $idInstrument = "",
    $id = false) {
        parent::__construct($id);

        $this->titre = $titre;
        $this->album = $album;
        $this->cheminTab = $cheminTab;
        $this->dateAjout = $dateAjout;
        $this->idArtiste = $idArtiste;
        $this->idGenre = $idGenre;
        $this->idInstrument = $idInstrument;
    }
}
?>