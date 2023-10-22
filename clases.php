<?php

class Persona {
    private $nombre;
    private $edad;
    private $email;

    public function __construct($nombre,$edad,$email){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->email = $email;
    }
   
    public function imprimirDatos(){
        echo "Datos de la persona: ". PHP_EOL;
        echo "nombre:{$this->nombre}". PHP_EOL;
        echo "edad: {$this->edad} ". PHP_EOL;
        echo "email: {$this->email}". PHP_EOL;
    }
}

$persona = new Persona('Gaston', 42, 'gastongk@gmail.com');
$persona->imprimirDatos();

class Empleado extends Persona {
    private $puesto;

    public function __construct($nom,$edad,$email,$puesto){
        parent ::__construct($nom,$edad,$email);
        $this->puesto = $puesto;
    }
    public function imprimirDatos(){
        parent :: imprimirDatos();
        echo "puesto: {$this->puesto}". PHP_EOL;
    }
}

$empleado = new Empleado("Juan", 33, "Juan@mail.com","administrativo");
$empleado -> imprimirDatos();


interface Vehiculo {

    public function acelerar();
    public function frenar();
}

class Automovil implements Vehiculo{
    private $marca;
    private $modelo;

    public function __construct($marca,$modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function imprimirDatos(){
        echo "Datos del Auto: ". PHP_EOL;
        echo "marca:{$this->marca}". PHP_EOL;
        echo "rodado: {$this->modelo} ". PHP_EOL;
    }
    public function acelerar(){
        echo "El auto esta acelerando". PHP_EOL;
    }
    public function frenar(){
        echo "El auto freno por completo". PHP_EOL;
    }
}

class Bicicleta implements Vehiculo{
    private $marca;
    private $rodado;

    public function __construct($marca, $rodado){
        $this->marca = $marca;
        $this->rodado = $rodado;
    }
    public function imprimirDatos(){
        echo "Datos de la Bicicleta: ". PHP_EOL;
        echo "marca:{$this->marca}". PHP_EOL;
        echo "rodado: {$this->rodado} ". PHP_EOL;
    }
    public function acelerar(){
        echo "La Bicicleta esta en movimiento". PHP_EOL;
    }
    public function frenar(){
        echo "La Bicicleta se detuvo". PHP_EOL;
    }
}
$bicicleta = new Bicicleta("Bianchi", 29);
$bicicleta->imprimirDatos();
$bicicleta->acelerar();

$auto = new Automovil("Peugeot","408");
$auto->imprimirDatos();
$auto->frenar();
?>