<?php

trait Color {
    public $color;

    public function setColor($color) {
        $this->color = $color;
    }
    public function getColor() {
        return $this->color;
    }
}

class Automovil {
    use Color;
    private $marca;
    private $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    public function imprimirDatos() {
        echo "Automóvil: Marca  $this->marca, Modelo  $this->modelo, Color  {$this->getColor()}\n";
    }
}

class Bicicleta {
    use Color;
    private $tipo;

    public function __construct($tipo) {
        $this->tipo = $tipo;
    }
    public function imprimirDatos() {
        echo "Bicicleta: Tipo  $this->tipo, Color  {$this->getColor()}\n";
    }
}

$automovil = new Automovil("Peugeot", "408");
$automovil->setColor("Blanco");
$automovil->imprimirDatos();

$bicicleta = new Bicicleta("Mountain bike");
$bicicleta->setColor("Negra");
$bicicleta->imprimirDatos();

$bicicleta = new Bicicleta("Cross");
$bicicleta->setColor("Roja");
$bicicleta->imprimirDatos();

?>