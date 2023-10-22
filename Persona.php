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
?>