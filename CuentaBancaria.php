<?php
class CuentaBancaria {
    private $numeroCuenta;
    private $saldo;

    public function __construct($numeroCuenta,$saldo){
        $this->numeroCuenta = $numeroCuenta;
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function getCuenta(){
        return $this->numeroCuenta;
    }

    public function setCuenta($numeroCuenta){
        $this->numeroCuenta = $numeroCuenta;
    }
    public function deposito($monto) {
        if ($monto > 0) {
            $this->saldo += $monto;
            return "Depósito exitoso. Nuevo saldo: " . $this->saldo . PHP_EOL;
        } else {
            return "El monto del depósito debe ser mayor que cero ". PHP_EOL;
        }
    }
    
    public function extraccion($monto) {
        if ($monto > 0 && $monto <= $this->saldo) {
            $this->saldo -= $monto;
            return "Extracción exitosa. Nuevo saldo: " . $this->saldo . PHP_EOL;
        } elseif ($monto <= 0) {
            return "El monto de extracción debe ser mayor a cero.". PHP_EOL;
        } else {
            return "Fondos insuficientes para la extracción.". PHP_EOL;
        }
    }
}

$cuenta1 = new CuentaBancaria("cta00001",100000.00);
echo "cuenta: " .$cuenta1->getCuenta(). PHP_EOL;
echo "cuenta: " . $cuenta1->getSaldo(). PHP_EOL;
echo $cuenta1->deposito(5000.50);
echo $cuenta1->extraccion(33000);
echo $cuenta1->extraccion(200000.00);
?>