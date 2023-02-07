<?php

function dd($datas) {
    echo("<br>");
    echo("<pre>");
    echo("<code>");
    var_dump($datas);
    echo("</code>");
    echo("</pre>");
}

// $carre = [
//     "longueur_cote" => 3,
//     "nombre_cote" => 4,
// ];

// dd($carre);

// function aire_carre($c) {
//     $a = $c["longueur_cote"] * $c["longueur_cote"];
//     return $a;
// }

// $r = aire_carre($carre);

// dd( aire_carre($carre) );


class Carre {
    // variable ==> attribut
    public $longueur_cote;
    public $nombre_cote;
    public $perimetre;

    public function __construct($longueur_cote, $nombre_cote = 4)
    {
        $this->longueur_cote = $longueur_cote;
        $this->nombre_cote = $nombre_cote;
        $this->perimetre = $this->perimetre();
    }

    // fonction ==> méthode
    public function aire_carre() {
        return $this->longueur_cote * $this->longueur_cote;
    }

    public function perimetre() {
        return $this->longueur_cote * $this->nombre_cote;
    }

}

$c = new Carre(10);
dd($c);