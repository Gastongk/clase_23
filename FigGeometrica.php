<?php
abstract class FiguraGeometrica{
    abstract public function calcularArea();
}
class Cuadrado extends FiguraGeometrica{
    private $lado;

    public function __construct($lado){
        $this->lado = $lado;
    }
    public function calcularArea(){
        return $this->lado * $this->lado;
    }
}
class Triangulo extends FiguraGeometrica{

    private $base;
    private $altura;

    public function __construct($base, $altura){
       $this->base = $base;
       $this->altura = $altura; 
    }
    public function calcularArea(){
        return ($this->base * $this->altura)/2;    
    }
}

$cuadrado = new Cuadrado(20);
echo "Area del cuadreado: " . $cuadrado->calcularArea() . PHP_EOL;
$triangulo = new Triangulo(20,20);
echo "Area del triangulo: " . $triangulo->calcularArea(). PHP_EOL;
?>