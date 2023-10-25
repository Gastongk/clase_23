<?php
class Mascota {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
}

class Perro extends Mascota {
    public $raza;

    public function __construct($nombre, $edad, $raza) {
        parent::__construct($nombre, $edad);
        $this->raza = $raza;
    }
}

class Gato extends Mascota {
    public $pelaje;
    public function __construct($nombre, $edad, $pelaje) {
        parent::__construct($nombre, $edad);
        $this->pelaje = $pelaje;
    }
}

class MascotaFactory {
    public static function crearMascota($especie, $nombre, $edad, $propiedadExtra) {
        if (strtolower($especie) === "perro") {
            return new Perro($nombre, $edad, $propiedadExtra);
        } elseif (strtolower($especie) === "gato") {
            return new Gato($nombre, $edad, $propiedadExtra);
        } else {
            throw new Exception("Especie debe ser 'perro' o 'gato'.");
        }
    }
}

$perro1 = MascotaFactory::crearMascota("perro", "Neron", 12, "Labrador");
$perro2 = MascotaFactory::crearMascota("perro", "Paco", 13, "Rottweiler");
$gato= MascotaFactory::crearMascota("Gato", "Michi", 4, "suave");

echo "Nombre del perro: " . $perro1->nombre . ", Raza: " . $perro1->raza . "\n";
echo "Nombre del gato: " . $gato->nombre . ", Pelaje: " . $gato->pelaje . ", Edad: " . $gato->edad . "\n";
echo "Nombre del perro: " . $perro2->nombre . ", Raza: " . $perro2->raza . "\n";
?>