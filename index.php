<!-- nell'ottica di quanto visto a lezione definire classe Square e classe Cube (2 e 3 dimensioni);
definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume e del perimetro/superficie cercando di
sfruttare al meglio ereditarieta' e polimorfismo;
testare le classi definite con alcune istanze per verificare che sia tutto corretto -->

<?php

class Square {

    public $base;

    public function __construct($base) {

        $this -> base = $base;

    }

    public function areaSquare() {
        return $this -> base * $this -> base;
    }
    public function perimetroSquare() {
        return 4 * $this -> base;
    }

    public function __toString() {

        return "Square:<br>base: " .$this -> base ."<br>"
             . "area: " . $this -> areaSquare() . "<br>"
             . "perimetro: " . $this -> perimetroSquare() . "<br>";
    }
}

class Cube extends Square {

    public $base;


    public function __construct($base) {

        $this -> base = $base;

    }

    public function volumeCubo() {

        return $this -> areaSquare() * $this -> base;
    }
    public function superficieCubo() {
        return 6 * $this -> areaSquare();
    }

    public function __toString() {

        return "Cube:<br>base: " .$this -> base ."<br>"
             . "volume: " . $this -> volumeCubo() . "<br>"
             . "superficie: " . $this -> superficieCubo() . "<br>";
    }


}





$square1 = new Square(5);
echo $square1 . "<br>";

$cube1 = new Cube(5);
echo $cube1 . "<br>";

 ?>
