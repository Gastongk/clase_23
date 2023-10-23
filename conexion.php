<?php
class ConexionDB{
    private static $instancia =null;
    private $conexion;

    private function __construct(){
        $dsn = 'mysql:host=localhost;dbname=productos';
        $username = 'root';
        $password = '';
        try {
            $this->conexion = new PDO($dsn,$username,$password);
            echo "conexión exitosa" . PHP_EOL;
        }catch (PDOException $e){
            echo "Error al conectarse: " .$e->getMessage();
        }
    }
//metodo publico para obtener una sola instancia de conexion
    public static function getInstancia(){
        if (self::$instancia === null) {
            self::$instancia = new ConexionDB();
        }
        return self::$instancia;
    }
    public function getConexion(){
        return $this->conexion;
    }
}

class Producto {
    private $id;
    private $nombre;
    private $precio;

    public function __construct($id, $nombre, $precio){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getPrecio(){
        return $this->precio;
    }
}

$conexion = ConexionDB::getInstancia();
$pdo = $conexion->getConexion();

$query = $pdo->prepare("SELECT * FROM productos");
$query->execute();
$resultados = $query->fetchAll();
$productos = [];

foreach($resultados as $r){
    $productos[] = new Producto ($r['id'], $r['nombre'],$r['precio']);
}

$prodNuevo = new Producto('','cocina',300000.00);
$query = $pdo->prepare("INSERT INTO productos (nombre, precio) VALUES (?, ?)");
$query->execute([$prodNuevo->getNombre(),$prodNuevo->getPrecio()]);
print_r($productos);

?>