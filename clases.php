<?php

class Persona {
    private $nombre;
    private $edad;
    private $email;

    public function __construct($nom,$edad,$email){
        $this->nombre = $nom;
        $this->edad = $edad;
        $this->email = $email;
    }
   
    public function imprimirDatos(){
        echo "Los datos de la persona nombre: " . $this->nombre . ' edad: ' . $this->edad . ' email: ' . $this->email;
    }


}

$persona = new Persona('Gaston', 42, 'gastongk@gmail.com');
$persona->imprimirDatos();

?>