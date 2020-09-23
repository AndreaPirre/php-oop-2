<!-- nell'ottica di quanto visto a lezione definire classe Square e classe Cube (2 e 3 dimensioni);
definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume e del perimetro/superficie cercando di
sfruttare al meglio ereditarieta' e polimorfismo;
testare le classi definite con alcune istanze per verificare che sia tutto corretto -->

<?php

class Square {

    public $base;
    public $altezza;

    public function __construct($base) {

        $this -> lato = $base;

    }

    public function areaSquare() {
        return $this -> lato * $this -> lato;
    }
    public function perimetroSquare() {
        return 4 * $this -> lato;
    }

    public function __toString() {

        return "Square:<br>base: " .$this -> lato ."<br>"
             . "area: " . $this -> areaSquare() . "<br>"
             . "perimetro: " . $this -> perimetroSquare() . "<br>";
    }
}



$square1 = new Square(10);
echo $square1 ."<br>";


 ?>
